<?php

namespace App\Http\Resources;

use App\Models\Alphabet;
use Illuminate\Http\Resources\Json\ResourceCollection;

class AlphabetCollectionResource extends ResourceCollection
{
    public function toArray($request): array
    {
        return [
            'data' => $this->collection->map(function (Alphabet $alphabet) {
                return [
                    'id'          => $alphabet->id,
                    'name'        => $alphabet->name,
                    'description' => mb_substr(str_replace(["\r", "\n"], '', strip_tags($alphabet->description)), 0, 100) . '...',
                ];
            }),
        ];
    }
}
