<?php

namespace App\Services\Contracts;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

interface PowerService
{
    public function index(array|Request $search, bool $sortByLevel = false): Builder;
}
