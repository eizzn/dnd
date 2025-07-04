<?php

namespace App\Http\Resources;

use App\Models\Pantheon;
use Illuminate\Http\Resources\Json\JsonResource;

class PantheonResource extends JsonResource
{
    public function toArray($request): array
    {
        /** @var Pantheon $this */
        return [
            'id'          => $this->id,
            'name'        => $this->name,
            'description' => $this->description,
        ];
    }
}
