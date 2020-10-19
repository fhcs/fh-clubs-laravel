<?php

namespace Fh\Clubs\Models;

use Illuminate\Database\Eloquent\Model;

class ClubType extends Model
{
    public $incrementing = false;
    protected $guarded = [];

    public function clubs()
    {
        return $this->hasMany(Club::class, 'type_id');
    }
}
