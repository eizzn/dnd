<?php

namespace App\Http\Resources;

use App\Models\Page;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PageCollectionResource extends ResourceCollection
{
    public function toArray($request): array
    {
        return [
            'data' => $this->collection->map(function (Page $page) {
                return [
                    'id'          => $page->id,
                    'name'        => $page->name,
                    'description' => mb_substr(str_replace(["\r", "\n"], '', strip_tags($page->description)), 0, 100) . '...',
                    'order'       => $page->order,
                ];
            }),
        ];
    }
}
