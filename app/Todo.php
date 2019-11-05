<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\CompletedScope;

class Todo extends Model
{
    protected $fillable = ['name', 'description', 'completed'];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new CompletedScope);
    }
}
