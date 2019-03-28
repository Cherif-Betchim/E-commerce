<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comment;
use App\Product;

class CommentsController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function store(Request $request)
    {
        $comment = new Comment;
        $comment->comment = $request->get('comment');
        $comment->name = $request->get('name');
        $comment->email = $request->get('email');
        $product = Product::find($request->get('product_id'));
        $product->comments()->save($comment);

        return back();
    }
}
