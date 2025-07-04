<?php

namespace App\Filters;

class Type extends Filter
{
    protected function filter(FilterPipelinePayload $data, string $filterName): FilterPipelinePayload
    {
        $types = explode(',', $data->params[$filterName]);
        if (! is_array($types)) {
            $types = [$types];
        }
        $data->queryBuilder->whereHas('types', function ($q) use ($types) {
            $q->whereIn('id', $types);
        });

        return $data;
    }
}
