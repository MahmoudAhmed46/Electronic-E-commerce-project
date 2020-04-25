<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Cart;
use Session;
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



}
