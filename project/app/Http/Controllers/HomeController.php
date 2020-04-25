<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Cart;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index','show','showAllProducts');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories=Category::all();
        $All_Products=Product::latest()->paginate(5);
        $all_data=['categories'=>$categories,'products'=>$All_Products];
        return view('home')->with('all_data',$all_data);
    }
    public function show($id)
    {
        $products=Product::where('cat_id',$id)->get();
        $category=Category::where('id',$id)->first();
        $data=['cat_name'=>$category->name,'products'=>$products];
        return view('showCategory')->with('data',$data);
    }
    public function showAllProducts(){
        $All_Products=Product::latest()->paginate(5);
        return view('home')->with('All_Products',$All_Products);
    }


    public function getAddToCart($id){
        $product=Product::find($id);
        $oldCart=Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product);
        Session::put('cart',$cart);
        $session_id=Session::get('session_id');
        if(empty($session_id)){
            $session_id=str_random(40);
            Session::put('session_id',$session_id);
        }
        DB::table('carts')->insert([
            'product_id'=>$id,'product_name'=>$product->name,'product_code'=>$product->code,'price'=>$product->price,
            'quantity'=>1,'user_email'=>Auth::user()->email,'session_id'=>$session_id,'image'=>$product->image
        ]);
        DB::table('products')->where('id',$id)->update(['quantity'=>$product->quantity-1]);
        //dd(session()->get('cart'));
        return redirect()->route('home');
    }

    public function getCart(){
        if(!Session::has('cart')){
            return view('shopping-cart');
        }
        $oldCart=Session::get('cart');
        $cart=new Cart($oldCart);
        return view('shopping-cart')->with('cart',$cart);
    }

    public function history(){
        //$carts=DB::table('carts')->get();
        $carts=Cart::all();
        return view('history')->with('carts',$carts);
    }


}
