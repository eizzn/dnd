<?php

namespace App\Filters;

class Title extends Filter
{
    protected function filter(FilterPipelinePayload $data, string $filterName): FilterPipelinePayload
    {
        if (strlen($data->params[$filterName]) > 1) {
            $data->queryBuilder->where(function ($query) use ($data, $filterName) {
                $query->where($this->columnName(), 'LIKE', '%' . $data->params[$filterName] . '%');
            });
        }

        return $data;
    }
}
