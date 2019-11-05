<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Scopes\CompletedScope;

class Todo extends Model
{
    protected $fillable = [
        'name', 'description', 'completed', 'category_id'
    ];

    protected static function boot()
    {
        parent::boot();
        // static::addGlobalScope(new CompletedScope);
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function scopeCompleted($query)
    {
        return $query->where('completed', 1);
    }
}
