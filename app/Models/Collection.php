<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Collection extends Model
{
    protected $guarded = ['id'];

    public $timestamps = false;

    public function songs(): HasMany
    {
        return $this->hasMany(Song::class);
    }
}
