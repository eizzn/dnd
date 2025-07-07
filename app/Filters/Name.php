<?php

namespace App\Filters;

class Name extends Filter
{
    protected function filter(FilterPipelinePayload $data, string $filterName): FilterPipelinePayload
    {
        if (strlen($data->params[$filterName]) > 1) {
            $data->queryBuilder->where(function ($query) use ($data, $filterName) {
                $query->where('name', 'LIKE', '%' . $data->params[$filterName] . '%');
            });
        }

        return $data;
    }

    protected function filterName(): array
    {
        return ['s', 'name'];
    }
}
