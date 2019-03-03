<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CgvController extends Controller
{
    public function show(){
        return view ('cgv');
    }
}
?>