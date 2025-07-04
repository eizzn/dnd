<?php

namespace App\Traits;

use App\Exceptions\InvalidArgumentException;
use Illuminate\Http\Request;

trait GetDataTrait
{
    protected function getData(array|Request $data, array $keys = []): array
    {
        $data = $data instanceof Request ? $data->all() : $data;
        if (! is_array($data)) {
            throw new InvalidArgumentException;
        }

        if (count($keys) > 0) {
            $tmp  = $data;
            $data = [];
            foreach ($keys as $key) {
                if (array_key_exists($key, $tmp)) {
                    $data[$key] = $tmp[$key];
                }
            }
        }

        return $data;
    }
}
