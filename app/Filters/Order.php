<?php

namespace App\Filters;

class Order extends Filter
{
    protected function filter(FilterPipelinePayload $data, string $filterName): FilterPipelinePayload
    {
        $dir = isset($data->params['dir']) && in_array(strtolower($data->params['dir']), ['asc', 'desc'])
            ? strtolower($data->params['dir'])
            : 'asc';
        $data->queryBuilder->orderBy($data->params[$filterName], $dir);

        return $data;
    }
}
