<?php

namespace App\Services\Contracts;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

interface ClassService
{
    /**
     * Get instance of Builder to get a list of Class
     */
    public function index(array|Request $search, bool $byType = false): Builder;
}
