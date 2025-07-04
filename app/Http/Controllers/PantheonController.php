<?php

namespace App\Http\Controllers;

use App\Http\Resources\PantheonCollectionResource;
use App\Http\Resources\PantheonResource;
use App\Services\Contracts\PantheonService;
use Illuminate\Http\Request;

class PantheonController extends Controller
{
    public function index(Request $request, PantheonService $service): PantheonCollectionResource
    {
        $query = $service->index($request);

        return new PantheonCollectionResource(
            $query->paginate($request->query('per_page', 15))
                ->appends($request->all())
        );
    }

    public function get(PantheonService $service, int $id)
    {
        return new PantheonResource(
            $service->index(['id' => $id])
                ->firstOrFail()
        );
    }
}
