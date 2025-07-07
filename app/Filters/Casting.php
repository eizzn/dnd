<?php

namespace App\Filters;

use App\Filters\Filter;

class Casting extends Filter
{
    protected function filter(FilterPipelinePayload $data, string $filterName): FilterPipelinePayload
    {
        $castings = $data->params[$filterName];
        if (! is_array($castings)) {
            $castings = [$castings];
        }
        $data->queryBuilder->where(function ($q) use ($castings) {
            foreach ($castings as $casting) {
                $q->orWhere($this->columnName(), 'LIKE', '%' . $casting . '%');
            }
        });

        return $data;
    }
}
