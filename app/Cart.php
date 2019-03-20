<?php

namespace App;


class Cart

    {
        public $items = null; //groupe d'objet selectionné, qu'il y en est 1 ou 10 => une seule ligne dans le panier
        public $totalQty = 0;
        public $totalPrice = 0;

        public function __construct($oldCart) //SI un ancien panier existe on l'affiche/le reconstruit
        {
            if($oldCart) {
              $this->items = $oldCart->items;
              $this->totalQty = $oldCart->totalQty;
              $this->totalPrice = $oldCart->totalPrice;

            }else{

                $this->items = null;   //sinon rien
            }
        }

        public function add($item, $id){  //rajouter un nouveau item dans le panier existant

            $storedItem = ['qty' => 0, 'price'=>$item->price, 'item'=>$item ];
            if ($this->items){
                if (array_key_exists($id, $this->items)) {
                    $storedItem = $this->items[$id];
                }
            }                       //calcul lorsque j'ajoute un item deja existant dans le panier
            $storedItem['qty']++;
            $storedItem['price'] = $item->price * $storedItem['qty'];
            $this->items[$id] = $storedItem;
            $this->totalQty++;
            $this->totalPrice += $item->price;
        }

    }

