<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Collection extends Model
{
    protected $guarded = ['id'];

    public $timestamps = false;

    public function songs(): BelongsToMany
    {
        return $this->belongsToMany(Song::class);
    }
}
