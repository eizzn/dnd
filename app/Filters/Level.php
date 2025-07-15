<?php

namespace App\Filters;

class Level extends Filter
{
    protected function filter(FilterPipelinePayload $data, string $filterName): FilterPipelinePayload
    {
        $levels = $data->params[$filterName];
        if (! is_array($levels)) {
            $levels = [$levels];
        }
        $data->queryBuilder->whereIn($this->columnName(), $levels);

        return $data;
    }
}
