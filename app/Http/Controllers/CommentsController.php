<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comment;
use App\Product;
use App\User;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{

    public function store(Request $request)
    {
        if(Auth::user()) {

            $comment = new Comment;
            $comment->comment = $request->get('comment');
            $comment->user()->associate($request->user());
            $product = Product::find($request->get('product_id'));
            $product->comments()->save($comment);


            return back();

        }else{

            return back();
        }
    }
}
