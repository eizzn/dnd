<?php

namespace App\Filters;

use App\Filters\Filter;

class TypesByName extends Filter
{
    protected function filter(FilterPipelinePayload $data, string $filterName): FilterPipelinePayload
    {
        $types = explode(',', $data->params[$filterName]);
        if (! is_array($types)) {
            $types = [$types];
        }
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
