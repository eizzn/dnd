<?php

namespace App\Filters;

class ChallengeRating extends Filter
{
    protected function filter(FilterPipelinePayload $data, string $filterName): FilterPipelinePayload
    {
        $cr = $data->params[$filterName];
        $data->queryBuilder->where($this->columnName(), $cr);

        return $data;
    }

    protected function filterName(): array|string
    {
        return 'cr';
    }

    /**
     * Get the column string
     */
    protected function columnName(): string
    {
        return 'cr';
    }
}
