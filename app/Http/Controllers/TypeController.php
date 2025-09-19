<?php

namespace App\Http\Controllers;

use App\Http\Resources\TypeCollectionResource;
use App\Http\Resources\TypeResource;
use App\Services\Contracts\TypeService;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index(Request $request, TypeService $service): TypeCollectionResource
    {
        if (! $request->has('order')) {
            $request->merge(['order' => 'name']);
        }
        $query = $service->index($request);

        return new TypeCollectionResource(
            $query->paginate($request->query('per_page', 15))
                ->appends($request->all())
        );
    }

    public function get(TypeService $service, int $id): TypeResource
    {
        return new TypeResource(
            $service->index(['id' => $id])
                ->firstOrFail()
        );
    }
}
