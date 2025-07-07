<?php

namespace App\Filters;

class ActionType extends Filter
{
    protected function filter(FilterPipelinePayload $data, string $filterName): FilterPipelinePayload
    {
        $types = $data->params[$filterName];
        if (! is_array($types)) {
            $types = [$types];
        }
        $data->queryBuilder->where(function ($q) use ($types) {
            foreach ($types as $type) {
                if (strtolower($type) == 'action') {
                    $q->orWhere($this->columnName(), $type);
                } else {
                    $q->orWhere($this->columnName(), 'LIKE', '%' . $type . '%');
                }
            }
        });

        return $data;
    }
}
