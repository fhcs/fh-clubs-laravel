<?php

namespace Fh\Clubs\Models;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use NameAliasSlugTrait;

    protected $guarded = [];

    public $incrementing = false;

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
