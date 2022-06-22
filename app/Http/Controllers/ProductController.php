<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        $data = Product::all();
        return view('product', ['products'=>$data]);
    }

    public function detail($id){
        $data = Product::find($id);
        return view('detail', ['product'=>$data]);
    }

    public function search(Request $request){
        $data = Product::where('name', 'like', '%'.$request->input('q').'%')->get();
        return view('search', ['data_r'=>$data]);   
    }

    public function addtocart(Request $request){
        if($request->session()->has('user')){
            $cart = new Cart;
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id =  $request->input('p_id');
            $cart->save();
            return $this->show_cart();
        }else{
            return "User must logged in for add product in cart";
        }
        
    }

    public function cart_item_count(){
        $user_id = Session::get('user')['id'];
        return Cart::where('user_id', $user_id)->count();
    }

    public function show_cart(){
        if(Session::has('user')){
            $userId = Session::get('user')['id'];
            $cartItems = DB::table('cart')
            ->join('products', 'cart.product_id', 'products.id')
            ->select('products.*', 'cart.id as cart_id')
            ->where('cart.user_id', $userId)
            ->get();
        //    return "rough cart text";
            return view('cart', ['cartItems' => $cartItems, 'total_item_count' => $this->cart_item_count()]);
        }else{
            return "User login required for view cart data";
        }
    }

    public function remove_from_cart($id){
        if(Session::has('user')){
            Cart::destroy($id);
        }
        return redirect('/cart');
    }
}
