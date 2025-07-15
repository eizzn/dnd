<?php

namespace App\Filters;

use Illuminate\Support\Str;

class HasPowers extends Filter
{
    protected function filter(FilterPipelinePayload $data, string $filterName): FilterPipelinePayload
    {
        $hasPowers = Str::lower($data->params[$filterName]);
        if ($hasPowers === 'true') {
            $hasPowers = true;
        } elseif ($hasPowers === 'false') {
            $hasPowers = false;
        } else {
            $hasPowers = (bool) $hasPowers;
        }
        $data->queryBuilder->where($this->columnName(), $hasPowers);

        return $data;
    }
}
