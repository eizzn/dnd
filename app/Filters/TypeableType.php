<?php

namespace App\Filters;

class TypeableType extends Filter
{
    protected function filter(FilterPipelinePayload $data, string $filterName): FilterPipelinePayload
    {
        $class = 'App\\Models\\' . $data->params[$filterName];

        $data->queryBuilder->whereIn('id', function ($query) use ($class) {
            $query->select('type_id')
                ->from('typeables')
                ->where('typeable_type', $class)
                ->distinct();
        });

        return $data;
    }
}
