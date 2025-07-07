<?php

namespace App\Filters;

use App\Filters\Filter;

class TypeByName extends Filter
{
    protected function filter(FilterPipelinePayload $data, string $filterName): FilterPipelinePayload
    {
        $types = explode(',', $data->params[$filterName]);
        if (! is_array($types)) {
            $types = [$types];
        }
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
