<?php

namespace App\Http\Controllers;

use App\Http\Resources\PageCollectionResource;
use App\Http\Resources\PageResource;
use App\Services\Contracts\PageService;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request, PageService $service): PageCollectionResource
    {
        if (! $request->has('order')) {
            $request->merge(['order' => 'order']);
        }
        $query = $service->index($request);

        return new PageCollectionResource(
            $query->paginate($request->query('per_page', 15))
                ->appends($request->all())
        );
    }

    public function get(PageService $service, int $id): PageResource
    {
        return new PageResource(
            $service->index(['id' => $id])
                ->firstOrFail()
        );
    }
}
