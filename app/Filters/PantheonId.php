<?php

namespace App\Filters;

class PantheonId extends Filter
{
    protected function filter(FilterPipelinePayload $data, string $filterName): FilterPipelinePayload
    {
        $ids = $data->params[$filterName];
        $ids = explode(',', $ids);
        $data->queryBuilder->whereIn($this->columnName(), $ids);

        return $data;
    }
}
