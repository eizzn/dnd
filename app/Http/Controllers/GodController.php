<?php

namespace App\Http\Controllers;

use App\Http\Resources\GodPantheonCollectionResource;
use App\Http\Resources\GodPantheonResource;
use App\Services\Contracts\GodPantheonService;
use Illuminate\Http\Request;

class GodController extends Controller
{
    public function index(Request $request, GodPantheonService $service): GodPantheonCollectionResource
    {
        if (! $request->has('order')) {
            $request->merge(['order' => 'name']);
        }
        $query = $service->index($request);

        return new GodPantheonCollectionResource(
            $query->with('pantheon')
                ->distinct()
                ->paginate($request->query('per_page', 15))
                ->appends($request->all())
        );
    }

    public function get(GodPantheonService $service, int $godId, int $pantheonId): GodPantheonResource
    {
        return new GodPantheonResource(
            $service->index([
                'id'          => $godId,
                'pantheon_id' => $pantheonId,
            ])->firstOrFail()
        );
    }
}
