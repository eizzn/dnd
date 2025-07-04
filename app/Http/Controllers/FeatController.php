<?php

namespace App\Http\Controllers;

use App\Http\Resources\FeatCollectionResource;
use App\Http\Resources\FeatResource;
use App\Services\Contracts\FeatService;
use Illuminate\Http\Request;

class FeatController extends Controller
{
    public function index(Request $request, FeatService $service): FeatCollectionResource
    {
        if (! $request->has('order')) {
            $request->merge(['order' => 'name']);
        }
        $query = $service->index($request);

        return new FeatCollectionResource(
            $query->with('types')
                ->paginate($request->query('per_page', 15))
                ->appends($request->all())
        );
    }

    public function get(FeatService $service, int $id): FeatResource
    {
        return new FeatResource(
            $service->index(['id' => $id])
                ->with([
                    'types', 'spells', 'powers', 'skills', 'parent_feats', 'child_feats',
                ])->firstOrFail()
        );
    }
}
