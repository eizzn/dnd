<?php

namespace App\Filters;

use App\Exceptions\NoFilterMatchException;
use Illuminate\Support\Str;

abstract class Filter
{
    public function handle(FilterPipelinePayload $data, \Closure $next): FilterPipelinePayload
    {
        try {
            $filterName = $this->getMatchingFilterName($data->params);
            $data       = $this->filter($data, $filterName);
        } catch (NoFilterMatchException) {
            // No param in the search array matches this filter — leave $data untouched.
        }

        return $next($data);
    }

    /**
     * Get the filter string. Defaults to the class name (minus a trailing
     * "Filter") snake-cased, e.g. StateFilter -> "state", CountryCodeFilter
     * -> "country_code", so it lines up with the request's validated keys.
     */
    protected function filterName(): array|string
    {
        return Str::of(class_basename($this))
            ->beforeLast('Filter')
            ->snake()
            ->toString();
    }

    /**
     * Get the column string. Filters that accept multiple filter names must
     * override this — there's no single sensible default to derive it from.
     */
    protected function columnName(): string
    {
        $filterName = $this->filterName();

        if (is_array($filterName)) {
            throw new \LogicException(static::class . ' accepts multiple filter names; override columnName() to specify the column explicitly.');
        }

        return $filterName;
    }

    /**
     * Get the matching filter name in the search array
     *
     * @throws NoFilterMatchException
     */
    protected function getMatchingFilterName(array $search): string
    {
        $filterNames = $this->filterName();
        if (! is_array($filterNames)) {
            $filterNames = [$filterNames];
        }
        foreach ($filterNames as $filterName) {
            if (array_key_exists($filterName, $search)) {
                return $filterName;
            }
        }

        throw new NoFilterMatchException('Filter name not found');
    }

    /**
     * Apply the filter
     */
    abstract protected function filter(FilterPipelinePayload $data, string $filterName): FilterPipelinePayload;
}
