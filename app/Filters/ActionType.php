<?php

namespace App\Filters;

class ActionType extends Filter
{
    protected function filter(FilterPipelinePayload $data, string $filterName): FilterPipelinePayload
    {
        $types = $data->params[$filterName];
        if (! is_array($types)) {
            $types = [$types];
        }
        $data->queryBuilder->whereIn($this->columnName(), $types);

        return $data;
    }
}
