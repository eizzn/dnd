<?php

namespace App\Http\Controllers;

use App\Http\Resources\TalentCollectionResource;
use App\Http\Resources\TalentResource;
use App\Services\Contracts\TalentService;
use Illuminate\Http\Request;

class TalentController extends Controller
{
    public function index(Request $request, TalentService $service): TalentCollectionResource
    {
        if (! $request->has('order')) {
            $request->merge(['order' => 'name']);
        }
        $query = $service->index($request);

        return new TalentCollectionResource(
            $query->with('types')
                ->paginate($request->query('per_page', 15))
                ->appends($request->all())
        );
    }

    public function get(TalentService $service, int $id): TalentResource
    {
        return new TalentResource(
            $service->index(['id' => $id])
                ->with([
                    'types', 'parent', 'children', 'skills',
                ])->firstOrFail()
        );
    }
}
