<?php

namespace App\Http\Controllers;

use App\Http\Resources\EquipmentCollectionResource;
use App\Http\Resources\EquipmentResource;
use App\Services\Contracts\EquipmentService;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    public function index(Request $request, EquipmentService $service): EquipmentCollectionResource
    {
        if (! $request->has('order')) {
            $request->merge(['order' => 'name']);
        }
        $query = $service->index($request);

        return new EquipmentCollectionResource(
            $query->paginate($request->query('per_page', 15))
                ->appends($request->all())
        );
    }

    public function get(EquipmentService $service, int $id): EquipmentResource
    {
        return new EquipmentResource(
            $service->index(['id' => $id])
                ->firstOrFail()
        );
    }
}
