<?php

namespace App\Http\Controllers;

use App\Http\Resources\RaceCollectionResource;
use App\Http\Resources\RaceResource;
use App\Services\Contracts\RaceService;
use Illuminate\Http\Request;

class RaceController extends Controller
{
    public function index(Request $request, RaceService $service): RaceCollectionResource
    {
        if (! $request->has('order')) {
            $request->merge(['order' => 'name']);
        }
        $query = $service->index($request);

        return new RaceCollectionResource(
            $query->with('types')
                ->paginate($request->query('per_page', 15))
                ->appends($request->all())
        );
    }

    public function get(RaceService $service, int $id): RaceResource
    {
        return new RaceResource(
            $service->index(['id' => $id])
                ->firstOrFail()
        );
    }
}
