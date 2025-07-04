<?php

namespace App\Filters;

use App\Exceptions\NoFilterMatchException;
use Illuminate\Support\Str;

abstract class Filter
{
    public function handle(FilterPipelinePayload $data, \Closure $next): mixed
    {
        try {
            $filterName = $this->getMatchingFilterName($data->params);
            $data       = $next($data);

            return $this->filter($data, $filterName);
        } catch (NoFilterMatchException $e) {
            return $next($data);
        }
    }

    /**
     * Get the filter string
     */
    protected function filterName(): array|string
    {
        return Str::snake(class_basename($this));
    }

    /**
     * Get the column string
     */
    protected function columnName(): string
    {
        return $this->filterName();
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
