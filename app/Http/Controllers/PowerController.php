<?php

namespace App\Http\Controllers;

use App\Http\Resources\PowerCollectionResource;
use App\Http\Resources\PowerResource;
use App\Services\Contracts\PowerService;
use Illuminate\Http\Request;

class PowerController extends Controller
{
    public function index(Request $request, PowerService $service): PowerCollectionResource
    {
        if (! $request->has('order')) {
            $request->merge(['order' => 'name']);
        }
        $query = $service->index($request);

        return new PowerCollectionResource(
            $query->with('types')
                ->paginate($request->query('per_page', 15))
                ->appends($request->all())
        );
    }

    public function get(PowerService $service, int $id): PowerResource
    {
        return new PowerResource(
            $service->index(['id' => $id])
                ->with([
                    'types',
                ])->firstOrFail()
        );
    }
}
