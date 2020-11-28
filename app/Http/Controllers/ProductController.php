<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    function index(){
        $data = Product::all();
        return view('product', ['data' => $data]);
    }

    function detail($id){
        $data = Product::find($id);
        return view('detail', ['data' => $data]);
    }

    function search(Request $req){
        $data = Product::where('name', 'like', '%'.$req->input('query').'%')->get();
        return view('search', ['data' => $data]);
    }

    function addToCart(Request $req){
        if($req->session()->has('user')){
            $cart = new Cart;
            $cart->user_id = $req->session()->has('user');
            $cart->product_id = $req->product_id;

            $result = $cart->save();

            return redirect('/');
        }else{
            return redirect('/login');
        }
    }

    static function cartItem(){
        $user_id = Session::get('user')['id'];
        return Cart::where('user_id', $user_id)->count();
    }

    function cartList(){
        $userId = Session::get('user')['id'];
        $products = DB::table('cart')
        ->join('products', 'cart.product_id', '=', 'products.id')
        ->where('cart.user_id', $userId)
        ->select('products.*', 'cart.id as cart_id')
        ->get();

        return view('cartList', ['data' => $products]);
    }

    function removeCart($id){
        Cart::destroy($id);
        return redirect('cartList');
    }
}
