<?php

namespace App\Services\Contracts;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

interface GodPantheonService
{
    public function index(array|Request $search): Builder;
}
