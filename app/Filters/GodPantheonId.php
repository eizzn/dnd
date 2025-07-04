<?php

namespace App\Filters;

class GodPantheonId extends Filter
{
    protected function filter(FilterPipelinePayload $data, string $filterName): FilterPipelinePayload
    {
        $ids = $data->params[$filterName];
        if (! is_array($ids)) {
            $ids = [$ids];
        }
        $data->queryBuilder->whereIn($this->columnName(), $ids);

        return $data;
    }

    protected function filterName(): array|string
    {
        return 'id';
    }

    protected function columnName(): string
    {
        return 'god_id';
    }
}
