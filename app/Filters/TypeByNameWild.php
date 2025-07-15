<?php

namespace App\Filters;

class TypeByNameWild extends Filter
{
    /**
     * {@inheritDoc}
     */
    protected function filter(FilterPipelinePayload $data, string $filterName): FilterPipelinePayload
    {
        $types = $data->params[$filterName];
        if (! is_array($types)) {
            $types = [$types];
        }
        $data->queryBuilder->where(function ($q) use ($types) {
            foreach ($types as $type) {
                $q->orWhere($this->columnName(), 'LIKE', '%' . $type . '%');
            }
        });

        return $data;
    }

    protected function filterName(): array|string
    {
        return 'type';
    }

    protected function columnName(): string
    {
        return 'type';
    }
}
