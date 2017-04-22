<?php

namespace App;


class Cart
{
   public $items = null;
   public $totalQuantity = 0;
   public $totalPrice = 0;
   

   public function __construct($oldCart)
   {
   		if($oldCart)
   		{
   			$this->items = $oldCart->items;
   			$this->totalQuantity = $oldCart->totalQuantity;
   			$this->totalPrice = $oldCart->totalPrice;
   			$this->totalPrice = $oldCart->totalPrice;
   		}
   }
   public function add($item, $id)
   {
   		$storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item, 'photo'=>$item->photo];

   		if($this->items) 
         {

   			if(array_key_exists($id, $this->items))
            {
   				$storedItem = $this->items[$id];
   			}
   		}
      		$storedItem['qty']++;
      		$storedItem['price'] = $item->price * $storedItem['qty'];
      		$storedItem['photo'] = $item->photo;
      		$this->items[$id] = $storedItem;
      		$this->totalQuantity++;

      		$this->totalPrice += $item->price ;
   }
}
