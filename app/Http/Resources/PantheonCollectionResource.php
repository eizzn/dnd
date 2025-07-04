<?php

namespace App\Http\Resources;

use App\Models\Pantheon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PantheonCollectionResource extends ResourceCollection
{
    public function toArray(Request $request): array
    {
        return [
            'data' => $this->collection->map(function (Pantheon $pantheon) {
                return [
                    'id'          => $pantheon->id,
                    'name'        => $pantheon->name,
                ];
            }),
        ];
    }
}
