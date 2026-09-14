<?php

namespace App\Filters;

class Alignment extends Filter
{
    // The 4 cardinal components are matched as a substring so that a
    // parenthetical/uncertain notation like "(L)N" or "N(G)" still counts
    // as having a Lawful or Good component, respectively.
    private const CARDINALS = ['L', 'C', 'G', 'E'];

    protected function filter(FilterPipelinePayload $data, string $filterName): FilterPipelinePayload
    {
        $alignments = $data->params[$filterName];
        if (! is_array($alignments)) {
            $alignments = [$alignments];
        }

        $cardinals = array_intersect($alignments, self::CARDINALS);
        $exact     = array_diff($alignments, $cardinals);

        $data->queryBuilder->where(function ($query) use ($exact, $cardinals) {
            if (in_array('NULL', $exact, true)) {
                $query->orWhereNull($this->columnName());
            }

            $values = array_filter($exact, fn ($alignment) => $alignment !== 'NULL');
            if (! empty($values)) {
                $query->orWhereIn($this->columnName(), $values);
            }

            foreach ($cardinals as $cardinal) {
                $query->orWhere($this->columnName(), 'LIKE', "%{$cardinal}%");
            }
        });

        return $data;
    }
}
