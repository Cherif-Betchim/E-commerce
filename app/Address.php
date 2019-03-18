<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public function orders()
    {
        $this->belongsTo('App\Order');
    }
}
