<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user', 'address', 'total_price'];
    public function products()
    {
        return $this->belongsToMany('App\Product')
            ->as('command_line')
            ->withPivot('quantity')
            ->withTimestamps();
    }
}
