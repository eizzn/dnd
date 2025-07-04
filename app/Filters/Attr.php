<?php

namespace App\Filters;

class Attr extends Filter
{
    protected function filter(FilterPipelinePayload $data, string $filterName): FilterPipelinePayload
    {
        $attr = $data->params[$filterName];
        if (! is_array($attr)) {
            $attr = [$attr];
        }
        $data->queryBuilder->whereIn($this->columnName(), $attr);

        return $data;
    }
}
