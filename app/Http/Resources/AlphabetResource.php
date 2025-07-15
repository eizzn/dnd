<?php

namespace App\Http\Resources;

use App\Models\Alphabet;
use App\Models\Language;
use Illuminate\Http\Resources\Json\JsonResource;

class AlphabetResource extends JsonResource
{
    public function toArray($request): array
    {
        /** @var Alphabet $this */
        return [
            'id'          => $this->id,
            'name'        => $this->name,
            'description' => $this->description,
            'languages'   => Language::where('alphabet_id', $this->id)->get()->map(function (Language $lang) {
                return [
                    'id'    => $lang->id,
                    'name'  => $lang->name,
                ];
            }),
        ];
    }
}
