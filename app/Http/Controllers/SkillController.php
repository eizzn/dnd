<?php

namespace App\Http\Controllers;

use App\Http\Resources\SkillCollectionResource;
use App\Http\Resources\SkillResource;
use App\Services\Contracts\SkillService;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(Request $request, SkillService $service): SkillCollectionResource
    {
        if (! $request->has('order')) {
            $request->merge(['order' => 'name']);
        }
        $query = $service->index($request);

        return new SkillCollectionResource(
            $query->with(['attribute'])
                ->paginate($request->query('per_page', 15))
                ->appends($request->all())
        );
    }

    public function get(SkillService $service, int $id): SkillResource
    {
        return new SkillResource(
            $service->index(['id' => $id])
                ->firstOrFail()
        );
    }
}
