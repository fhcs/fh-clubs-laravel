<?php

namespace Fh\Clubs\Models;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use NameAliasSlugTrait;

    public $incrementing = false;
    protected $guarded = [];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function type()
    {
        return $this->belongsTo(ClubType::class);
    }
}
