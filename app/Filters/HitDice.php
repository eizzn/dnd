<?php

namespace App\Filters;

use App\Filters\Filter;

class HitDice extends Filter
{
    protected function filter(FilterPipelinePayload $data, string $filterName): FilterPipelinePayload
    {
        $hds = $data->params[$filterName];
        if (! is_array($hds)) {
            $hds = [$hds];
        }
        $data->queryBuilder->whereIn($this->columnName(), $hds);

        return $data;
    }
}
