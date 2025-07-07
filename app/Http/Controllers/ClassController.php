<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClassCollectionResource;
use App\Http\Resources\ClassResource;
use App\Services\Contracts\ClassService;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index(Request $request, ClassService $service): ClassCollectionResource
    {
        if (! $request->has('order')) {
            $request->merge(['order' => 'name']);
        }
        $query = $service->index($request, true);

        return new ClassCollectionResource(
            $query->where('type', '!=', 'Abstract')
                ->with('types')
                ->paginate($request->query('per_page', 15))
                ->appends($request->all())
        );
    }

    public function get(ClassService $service, int $id): ClassResource
    {
        return new ClassResource(
            $service->index(['id' => $id])->firstOrFail()
        );
    }
}
