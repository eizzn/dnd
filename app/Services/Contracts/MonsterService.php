<?php

namespace App\Services\Contracts;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

interface MonsterService
{
    public function index(array|Request $search, bool $sortByCR = false): Builder;
}
