<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArmorCollectionResource;
use App\Http\Resources\ArmorResource;
use App\Services\Contracts\ArmorService;
use Illuminate\Http\Request;

class ArmorController extends Controller
{
    public function index(Request $request, ArmorService $service): ArmorCollectionResource
    {
        if (! $request->has('order')) {
            $request->merge(['order' => 'name']);
        }
        $query = $service->index($request);

        return new ArmorCollectionResource(
            $query->with('types')
                ->paginate($request->query('per_page', 15))
                ->appends($request->all())
        );
    }

    public function get(ArmorService $service, int $id): ArmorResource
    {
        return new ArmorResource(
            $service->index(['id' => $id])
                ->firstOrFail()
        );
    }
}
