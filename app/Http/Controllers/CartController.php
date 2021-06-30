<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use DB;
use App\Cart;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();


class CartController extends Controller
{
    public function save_cart(Request $request){
        $productId = $request->productid_hidden;
        $quantity = $request->qty;

        $data = DB::table('product')->where('id_product', $productId)->get();

        $cate_product = DB::table('category_product')->where('cate_status','0')->orderby('id','desc')->get();

        return view('pages.carts.show_cart')->with('category',$cate_product);
    }

    public function AddCart(Request $req, $id){
        $product = DB::table('product')->where('id_product', $id)->first();
        if($product != null){
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->AddCart($product, $id);

            $req->session()->put('Cart', $newCart);

        }
        return view('pages.carts.cart', compact('newCart'));
    }
}
