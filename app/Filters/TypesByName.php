<?php

namespace App\Filters;

class TypesByName extends Filter
{
    protected function filter(FilterPipelinePayload $data, string $filterName): FilterPipelinePayload
    {
        $raw   = $data->params[$filterName];
        $types = is_array($raw) ? $raw : explode(',', $raw);
        $types = array_filter($types);
        $data->queryBuilder->whereHas('types', function ($q) use ($types) {
            $q->whereIn($this->columnName(), $types);
        });

        return $data;
    }

    protected function filterName(): array|string
    {
        return 'type';
    }

    protected function columnName(): string
    {
        return 'name';
    }
}
