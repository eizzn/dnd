<?php

namespace App\Http\Controllers;

use App\Http\Resources\AlphabetCollectionResource;
use App\Http\Resources\AlphabetResource;
use App\Services\Contracts\AlphabetService;
use Illuminate\Http\Request;

class AlphabetController extends Controller
{
    public function index(Request $request, AlphabetService $service): AlphabetCollectionResource
    {
        if (! $request->has('order')) {
            $request->merge(['order' => 'name']);
        }
        $query = $service->index($request);

        return new AlphabetCollectionResource(
            $query->paginate($request->query('per_page', 15))
                ->appends($request->all())
        );
    }

    public function get(AlphabetService $service, int $id): AlphabetResource
    {
        return new AlphabetResource(
            $service->index(['id' => $id])
                ->firstOrFail()
        );
    }
}
