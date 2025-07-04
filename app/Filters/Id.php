<?php

namespace App\Filters;

class Id extends Filter
{
    protected function filter(FilterPipelinePayload $data, string $filterName): FilterPipelinePayload
    {
        $ids = $data->params[$filterName];
        if (! is_array($ids)) {
            $ids = [$ids];
        }
        $data->queryBuilder->whereIn($this->columnName(), $ids);

        return $data;
    }
}
