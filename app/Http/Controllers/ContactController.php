<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function show()
    {
        return view ('contact');
    }

    public function store(Request $request)
    {
        $data = [
            'user' => [
                'firstName' => $request->input('firstName'), //$request = objet / input = methode
                'lastName' => $request->input('lastName'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'interest' => $request->input('interest'),
                'message' => $request->input('message'),
            ],
        ];

        return view('results', $data);
    }
}