<?php

namespace App\Http\Resources;

use App\Models\Template;
use App\Models\Type;
use Illuminate\Http\Resources\Json\ResourceCollection;

class TemplateCollectionResource extends ResourceCollection
{
    public function toArray($request): array
    {
        return [
            'data' => $this->collection->map(function (Template $template) {
                return [
                    'id'          => $template->id,
                    'name'        => $template->name,
                    'description' => mb_substr(str_replace(["\r", "\n"], '', strip_tags($template->description)), 0, 100) . '...',
                    'types'       => $template->types->map(function (Type $type) {
                        return [
                            'id'   => $type->id,
                            'name' => $type->name,
                        ];
                    }),
                ];
            }),
        ];
    }
}
