<?php

namespace App\Http\Controllers;

use App\Http\Resources\MaterialCollectionResource;
use App\Http\Resources\MaterialResource;
use App\Services\Contracts\MaterialService;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index(Request $request, MaterialService $service): MaterialCollectionResource
    {
        if (! $request->has('order')) {
            $request->merge(['order' => 'name']);
        }
        $query = $service->index($request);

        return new MaterialCollectionResource(
            $query->paginate($request->query('per_page', 15))
                ->appends($request->all())
        );
    }

    public function get(MaterialService $service, int $id): MaterialResource
    {
        return new MaterialResource(
            $service->index(['id' => $id])
                ->firstOrFail()
        );
    }
}
