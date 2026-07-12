<?php

namespace App\Http\Controllers;

use App\Http\Resources\TemplateCollectionResource;
use App\Http\Resources\TemplateResource;
use App\Services\Contracts\TemplateService;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index(Request $request, TemplateService $service): TemplateCollectionResource
    {
        if (! $request->has('order')) {
            $request->merge(['order' => 'name']);
        }
        $query = $service->index($request);

        return new TemplateCollectionResource(
            $query->with(['types'])
                ->paginate($request->query('per_page', 15))
                ->appends($request->all())
        );
    }

    public function get(TemplateService $service, int $id): TemplateResource
    {
        return new TemplateResource(
            $service->index(['id' => $id])
                ->firstOrFail()
        );
    }
}
