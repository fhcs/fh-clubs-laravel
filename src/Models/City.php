<?php

namespace Fh\Clubs\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $guarded = [];

    public function clubs()
    {
        return $this->hasMany(Club::class);
    }
}
