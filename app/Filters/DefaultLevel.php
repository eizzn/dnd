<?php

namespace App\Filters;

class DefaultLevel extends Filter
{
    protected function filter(FilterPipelinePayload $data, string $filterName): FilterPipelinePayload
    {
        $level = $data->params[$filterName];
        if (! is_array($level)) {
            $level = [$level];
        }
        $data->queryBuilder->whereIn($this->columnName(), $level);

        return $data;
    }
}
