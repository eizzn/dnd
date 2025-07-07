<?php

namespace App\Http\Controllers;

use App\Http\Resources\FormulaCollectionResource;
use App\Http\Resources\FormulaResource;
use App\Services\Contracts\FormulaService;
use Illuminate\Http\Request;

class FormulaController extends Controller
{
    public function index(Request $request, FormulaService $service): FormulaCollectionResource
    {
        if (! $request->has('order')) {
            $request->merge(['order' => 'name']);
        }
        $query = $service->index($request);

        return new FormulaCollectionResource(
            $query->with('types')
                ->paginate($request->query('per_page', 15))
                ->appends($request->all())
        );
    }

    public function get(FormulaService $service, int $id): FormulaResource
    {
        return new FormulaResource(
            $service->index(['id' => $id])
                ->firstOrFail()
        );
    }
}
