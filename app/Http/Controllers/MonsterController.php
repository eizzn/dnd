<?php

namespace App\Http\Controllers;

use App\Http\Resources\MonsterCollectionResource;
use App\Http\Resources\MonsterResource;
use App\Services\Contracts\MonsterService;
use Illuminate\Http\Request;

class MonsterController extends Controller
{
    public function index(Request $request, MonsterService $service): MonsterCollectionResource
    {
        if (! $request->has('order')) {
            $request->merge(['order' => 'name']);
        }
        $query = $service->index($request, true);

        return new MonsterCollectionResource(
            $query->paginate($request->query('per_page', 15))
                ->appends($request->all())
        );
    }

    public function get(MonsterService $service, int $id): MonsterResource
    {
        return new MonsterResource(
            $service->index(['id' => $id])
                ->firstOrFail()
        );
    }
}
