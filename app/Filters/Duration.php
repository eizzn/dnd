<?php

namespace App\Filters;

class Duration extends Filter
{
    protected function filter(FilterPipelinePayload $data, string $filterName): FilterPipelinePayload
    {
        $duration = $data->params[$filterName];
        $data->queryBuilder->whereLike('duration', '%' . $duration . '%');

        return $data;
    }
}
