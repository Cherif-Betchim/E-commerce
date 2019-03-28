<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Project;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'description', 'price', 'weight', 'stock', 'category_id'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function orders()
    {
        return $this->belongsToMany('App\Order')
            ->as('command_line')
            ->withPivot('quantity')
            ->withTimestamps();
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
