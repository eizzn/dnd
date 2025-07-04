<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait HasCompositePrimaryKeyTrait
{
    // TODO: figure out a way to set the models $incrementing to false
    /**
     * Set keys for a save update query
     */
    protected function setKeysForSaveQuery($query): Builder
    {
        $keys = $this->getKeyName();
        if (! is_array($keys)) {
            return parent::setKeysForSaveQuery($query);
        }
        foreach ($keys as $keyName) {
            $query->where($keyName, $this->getKeyForSaveQuery($keyName));
        }

        return $query;
    }

    /**
     * Get primary key value for a save query
     *
     * @param  mixed keyName
     */
    protected function getKeyForSaveQuery($keyName = null): mixed
    {
        if (is_null($keyName)) {
            $keyName = $this->getKeyName();
        }
        if (isset($this->original[$keyName])) {
            return $this->original[$keyName];
        }

        return $this->getAttribute($keyName);
    }

    /**
     * Get value of model's primary keys
     */
    public function getKey(): array
    {
        $keys = [];
        if (is_array($this->primaryKey)) {
            foreach ($this->primaryKey as $key) {
                $keys[$key] = $this->getAttribute($key);
            }
        }

        return $keys;
    }
}
