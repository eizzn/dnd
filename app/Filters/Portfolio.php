<?php

namespace App\Filters;

class Portfolio extends Filter
{
    protected function filter(FilterPipelinePayload $data, string $filterName): FilterPipelinePayload
    {
        if (strlen($data->params[$filterName]) > 1) {
            $data->queryBuilder->whereLike($this->columnName(), '%' . $data->params[$filterName] . '%');
        }

        return $data;
    }
}
