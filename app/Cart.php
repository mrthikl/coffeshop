<?php
namespace App;
class Cart{
    public $products = null;
    public $totalPrice = 0;
    public $totalQuanty = 0;

    public function __constant($cart){
        if($cart){
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQuanty = $cart->totalQuanty;
        }
    }

    public function AddCart($product, $product_id){
        $newProduct = ['quanty' => 0, 'price'=> $product->regular_price, 'productInfo' => $product];
        if($this->products){
            if(array_key_exists($product_id, $products)){
                $newProduct = $products[$product_id];
            }
        }
        $newProduct['quanty']++;
        $newProduct['price'] = $newProduct['quanty'] * $product->regular_price;
        $this->products[$product_id] =$newProduct;
        $this->totalPrice += $product->regular_price;
        $this->totalQuanty += $newProduct['quanty'];

    }
}

?>
