<?php

namespace App\Filters;

class KeyAttribute extends Filter
{
    protected function filter(FilterPipelinePayload $data, string $filterName): FilterPipelinePayload
    {
        $keys = $data->params[$filterName];
        if (! is_array($keys)) {
            $keys = [$keys];
        }
        $data->queryBuilder->where(function ($q) use ($keys) {
            foreach ($keys as $key) {
                $q->orWhere($this->columnName(), 'LIKE', '%' . $key . '%');
            }
        });

        return $data;
    }
}
