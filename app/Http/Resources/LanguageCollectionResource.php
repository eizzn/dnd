<?php

namespace App\Http\Resources;

use App\Models\Language;
use Illuminate\Http\Resources\Json\ResourceCollection;

class LanguageCollectionResource extends ResourceCollection
{
    public function toArray($request): array
    {
        return [
            'data' => $this->collection->map(function (Language $lang) {
                return [
                    'id'          => $lang->id,
                    'name'        => $lang->name,
                    'type'        => $lang->type,
                    'description' => mb_substr(str_replace(["\r", "\n"], '', strip_tags($lang->description)), 0, 100) . '...',
                    'alphabet'    => $lang->alphabet ? [
                        'id'   => $lang->alphabet->id,
                        'name' => $lang->alphabet->name,
                    ] : null,
                    'family'      => $lang->family,
                    'local'       => $lang->local,
                    'speakers'    => $lang->speakers,
                ];
            }),
        ];
    }
}
