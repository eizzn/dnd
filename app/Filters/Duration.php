<?php

namespace App\Filters;

use App\Filters\Filter;

class Duration extends Filter
{
    protected function filter(FilterPipelinePayload $data, string $filterName): FilterPipelinePayload
    {
        $duration = $data->params[$filterName];
        $data->queryBuilder->whereLike('duration', '%' . $duration . '%');

        return $data;
    }
}
