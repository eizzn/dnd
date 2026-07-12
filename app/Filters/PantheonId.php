<?php

namespace App\Filters;

class PantheonId extends Filter
{
    protected function filter(FilterPipelinePayload $data, string $filterName): FilterPipelinePayload
    {
        $raw = $data->params[$filterName];
        $ids = is_array($raw) ? $raw : explode(',', $raw);
        $ids = array_filter($ids);
        $data->queryBuilder->whereIn($this->columnName(), $ids);

        return $data;
    }
}
