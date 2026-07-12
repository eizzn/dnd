<?php

namespace App\Filters;

class Type extends Filter
{
    protected function filter(FilterPipelinePayload $data, string $filterName): FilterPipelinePayload
    {
        $raw   = $data->params[$filterName];
        $types = is_array($raw) ? $raw : explode(',', $raw);
        $types = array_filter($types);
        $data->queryBuilder->whereHas('types', function ($q) use ($types) {
            $q->whereIn('id', $types);
        });

        return $data;
    }
}
