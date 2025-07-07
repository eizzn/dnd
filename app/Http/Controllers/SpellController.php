<?php

namespace App\Http\Controllers;

use App\Http\Resources\SpellCollectionResource;
use App\Http\Resources\SpellResource;
use App\Services\Contracts\SpellService;
use Illuminate\Http\Request;

class SpellController extends Controller
{
    public function index(Request $request, SpellService $service): SpellCollectionResource
    {
        if (! $request->has('order')) {
            $request->merge(['order' => 'name']);
        }
        $query = $service->index($request);

        return new SpellCollectionResource(
            $query->with('types')
                ->paginate($request->query('per_page', 15))
                ->appends($request->all())
        );
    }

    public function get(SpellService $service, int $id): SpellResource
    {
        return new SpellResource(
            $service->index(['id' => $id])
                ->firstOrFail()
        );
    }
}
