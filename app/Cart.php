<?php

namespace App;


class Cart

    {
        public $items = null; //item = 1 type de produit , qu'il y en est 1 ou 10 => une seule ligne dans le panierty
        public $totalQty = 0;
        public $totalPrice = 0;

        public function __construct($oldCart) //SI un ancien panier existe on l'affiche/le "reconstruit"
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

            $storedItem = ['qty' => 0, 'price'=>$item->price, 'item'=>$item ]; //identifie le groupe de cet article
            if ($this->items){
                if (array_key_exists($id, $this->items)) { //check si j'ai deja l'id l'item (je n'ai pas besoin d'avoir la meme info, juste augmenter sa quantité)
                    $storedItem = $this->items[$id];
                }
            }                       //calcul lorsque j'ajoute un item deja existant dans le panier
            $storedItem['qty']++;
            $storedItem['price'] = $item->price * $storedItem['qty'];
            $this->items[$id] = $storedItem;
            $this->totalQty++;
            $this->totalPrice += $item->price;
        }

        public function reduceByOne ($id)
        {
            $this->items[$id]['qty']--;
            $this->items[$id]['price'] -= $this->items[$id]['item']['price'];
            $this->totalQty--;
            $this->totalPrice -= $this->items[$id]['item']['price'];

            if ($this->items[$id]['qty'] <= 0)
            {
                unset($this->items[$id]);
            }
        }
        public function addByOne ($id)
        {
            $this->items[$id]['qty']++;
            $this->items[$id]['price'] += $this->items[$id]['item']['price'];
            $this->totalQty++;
            $this->totalPrice += $this->items[$id]['item']['price'];
        }

        public function removeItem ($id)
        {
            $this->totalQty -= $this->items[$id]['qty'];
            $this->totalPrice -= $this->items[$id]['price'];
            unset ($this->items[$id]);
        }



    }

