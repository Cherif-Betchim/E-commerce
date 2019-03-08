<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Project;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'weight', 'stock', 'category_id'];
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
