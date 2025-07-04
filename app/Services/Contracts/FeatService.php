<?php

namespace App\Services\Contracts;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

interface FeatService
{
    /**
     * Get Instance of Builder to get a list of Feats
     */
    public function index(array|Request $search): Builder;
}
