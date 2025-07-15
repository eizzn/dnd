<?php

namespace App\Filters;

class Group extends Filter
{
    protected function filter(FilterPipelinePayload $data, string $filterName): FilterPipelinePayload
    {
        $groups = $data->params[$filterName];
        if (! is_array($groups)) {
            $groups = [$groups];
        }
        $data->queryBuilder->whereIn($this->filterName(), $groups);

        return $data;
    }
}
