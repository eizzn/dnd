<?php

namespace App\Http\Controllers;

use App\Http\Resources\AttributeCollectionResource;
use App\Http\Resources\AttributeResource;
use App\Services\Contracts\AttributeService;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    public function index(Request $request, AttributeService $service): AttributeCollectionResource
    {
        $query = $service->index($request);

        return new AttributeCollectionResource(
            $query->paginate($request->query('per_page', 15))
                ->appends($request->all())
        );
    }

    public function get(AttributeService $service, int $id): AttributeResource
    {
        return new AttributeResource(
            $service->index(['id' => $id])
                ->firstOrFail()
        );
    }
}
