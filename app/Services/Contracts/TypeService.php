<?php

namespace App\Services\Contracts;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

interface TypeService
{
    public function index(array|Request $search): Builder;
}
