<?php

namespace App\Http\Controllers;

use App\Http\Resources\WeaponCollectionResource;
use App\Http\Resources\WeaponResource;
use App\Services\Contracts\WeaponService;
use Illuminate\Http\Request;

class WeaponController extends Controller
{
    public function index(Request $request, WeaponService $service): WeaponCollectionResource
    {
        if (! $request->has('order')) {
            $request->merge(['order' => 'name']);
        }
        $query = $service->index($request);

        return new WeaponCollectionResource(
            $query->with('types')
                ->paginate($request->query('per_page', 15))
                ->appends($request->all())
        );
    }

    public function get(WeaponService $service, int $id): WeaponResource
    {
        return new WeaponResource(
            $service->index(['id' => $id])
                ->firstOrFail()
        );
    }
}
