<?php

namespace App\Http\Controllers;

use App\Http\Resources\ConditionCollectionResource;
use App\Http\Resources\ConditionResource;
use App\Services\Contracts\ConditionService;
use Illuminate\Http\Request;

class ConditionController extends Controller
{
    public function index(Request $request, ConditionService $service): ConditionCollectionResource
    {
        if (! $request->has('order')) {
            $request->merge(['order' => 'name']);
        }
        $query = $service->index($request);

        return new ConditionCollectionResource(
            $query->paginate($request->query('per_page', 15))
                ->appends($request->all())
        );
    }

    public function get(ConditionService $service, int $id): ConditionResource
    {
        return new ConditionResource(
            $service->index(['id' => $id])
                ->firstOrFail()
        );
    }
}
