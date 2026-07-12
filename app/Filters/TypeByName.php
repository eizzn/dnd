<?php

namespace App\Filters;

class TypeByName extends Filter
{
    protected function filter(FilterPipelinePayload $data, string $filterName): FilterPipelinePayload
    {
        $raw   = $data->params[$filterName];
        $types = is_array($raw) ? $raw : explode(',', $raw);
        $types = array_filter($types);
        $data->queryBuilder->whereIn($this->columnName(), $types);

        return $data;
    }

    protected function filterName(): array|string
    {
        return 'type';
    }

    protected function columnName(): string
    {
        return 'type';
    }
}
