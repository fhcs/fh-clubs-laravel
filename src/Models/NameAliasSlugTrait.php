<?php
/**
 * Created by PhpStorm.
 * User: mihailov.v
 * Date: 11.12.2018
 * Time: 17:40
 */

namespace Fh\Clubs\Models;


use Illuminate\Support\Str;

trait NameAliasSlugTrait
{
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['alias'] = Str::slug($value);
    }
}
