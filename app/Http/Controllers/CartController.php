<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function show()
    {
        $pChosenArticles = [
            [
                'id' => 1,
                'img' => 'img/cart/sun.jpg',
                'name' => 'Soleil sans nuage gris',
                'description' => 'Un superbe soleil à emmener partout avec vous pour ne jamais avoir un temps tout pourri démoralisant. Attention, très lumineux. (Et très chaud.)',
                'availability' => 'available',
                'price' => 35000/100,
                'quantity' => 1
            ],
            [
                'id' => 2,
                'img' => 'img/cart/fleurfanee.jpg',
                'name' => 'Fleur fânée',
                'description' => "Une fleur fânée à offrir lors d'un rendez-vous galant pour lequel vous n'êtes pas très motivé(e). Elle est moche et, de ce fait, pas chère du tout.",
                'availability' => 'notavailable',
                'price' => 50/100,
                'quantity' => 4
            ]
        ];

        $pTotalPrice = 0;

        foreach($pChosenArticles as $pArticle)
        {
            $pTotalPrice = $pTotalPrice + ($pArticle['price']*$pArticle['quantity']);
        }
        
        return view('cart', [
            'chosenArticles' => $pChosenArticles,
            'totalPrice' => $pTotalPrice
        ]);
    }
}
