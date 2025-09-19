<?php

namespace App\Http\Controllers;

use App\Http\Resources\FeatureCollectionResource;
use App\Http\Resources\FeatureResource;
use App\Services\Contracts\FeatureService;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function index(Request $request, FeatureService $service): FeatureCollectionResource
    {
        if (! $request->has('order')) {
            $request->merge(['order' => 'name']);
        }
        $query = $service->index($request);

        return new FeatureCollectionResource(
            $query->paginate($request->query('per_page', 15))
                ->appends($request->all())
        );
    }

    public function get(FeatureService $service, int $id): FeatureResource
    {
        return new FeatureResource(
            $service->index(['id' => $id])
                ->firstOrFail()
        );
    }
}
