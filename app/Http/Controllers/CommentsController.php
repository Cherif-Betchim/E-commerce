<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Product;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function store(Request $request)
    {
        if(Auth::user()) {

            $comment = new Comment;
            $comment->comment = $request->get('comment');
            $comment->user()->associate($request->user());
            $product = Product::find($request->get('product_id'));
            $product->comments()->save($comment);


            return back()->with('success', 'Votre message a bien été posté !');

        }else{

            return back();
        }
    }
}
