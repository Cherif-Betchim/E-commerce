<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Product;
use Illuminate\Http\Request;


class CommentController extends Controller
{
    public function create()
    {
        $products = Product::all();

        return view('comment.comment', ['products' => $products]);


    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'product_id' => ['required', 'numeric']

        ]);


        // Comment::create($comments);
        $comments = new Comment([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'product_id' => $request->get('product_id')
        ]);
        $comments->save();

        return redirect()->route('/comment')
            ->with('success', 'stock has been added')
            ->with('flash_type', 'alert-success');

    }
}
