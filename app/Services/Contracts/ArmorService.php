<?php

namespace App\Services\Contracts;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

interface ArmorService
{
    public function index(array|Request $search): Builder;
}
