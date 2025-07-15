<?php

namespace App\Filters;

use Illuminate\Support\Str;

class HasSpells extends Filter
{
    protected function filter(FilterPipelinePayload $data, string $filterName): FilterPipelinePayload
    {
        $hasSpells = Str::lower($data->params[$filterName]);
        if ($hasSpells === 'true') {
            $hasSpells = true;
        } elseif ($hasSpells === 'false') {
            $hasSpells = false;
        } else {
            $hasSpells = (bool) $hasSpells;
        }
        $data->queryBuilder->where($this->columnName(), $hasSpells);

        return $data;
    }
}
