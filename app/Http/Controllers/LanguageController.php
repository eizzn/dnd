<?php

namespace App\Http\Controllers;

use App\Http\Resources\LanguageCollectionResource;
use App\Http\Resources\LanguageResource;
use App\Services\Contracts\LanguageService;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index(Request $request, LanguageService $service): LanguageCollectionResource
    {
        if (! $request->has('order')) {
            $request->merge(['order' => 'name']);
        }
        $query = $service->index($request);

        return new LanguageCollectionResource(
            $query->with('alphabet')
                ->paginate($request->query('per_page', 15))
                ->appends($request->all())
        );
    }

    public function get(LanguageService $service, int $id): LanguageResource
    {
        return new LanguageResource(
            $service->index(['id' => $id])
                ->firstOrFail()
        );
    }
}
