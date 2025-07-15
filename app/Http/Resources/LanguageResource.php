<?php

namespace App\Http\Resources;

use App\Models\Language;
use Illuminate\Http\Resources\Json\JsonResource;

class LanguageResource extends JsonResource
{
    public function toArray($request): array
    {
        /** @var Language $this */
        return [
            'id'          => $this->id,
            'name'        => $this->name,
            'type'        => $this->type,
            'description' => $this->description,
            'alphabet'    => [
                'id'   => $this->alphabet->id,
                'name' => $this->alphabet->name,
            ],
            'family'      => $this->family,
            'local'       => $this->local,
            'speakers'    => $this->speakers,
        ];
    }
}
