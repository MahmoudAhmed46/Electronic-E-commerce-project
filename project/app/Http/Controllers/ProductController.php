<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\ProductImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Resources\Json\PaginatedResourceResponse;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function addProduct(Request $request){
        if ($request->isMethod('post')) {
            $products=new Product();
            $products->name= $request['product_name'];
            $products->code = $request['product_code'];
            $products->price = $request['product_price'];
            $products->cat_id = $request['cat_id'];
            $products->quantity = $request['quantity'];
            $categoryPieces=DB::table('categories')->where('id',$request['cat_id'])->first(['pieces']);
            $val=(array)$categoryPieces;
            $val['pieces'] += $request['quantity'];
            //print_r($val['pieces']);die;
            DB::table('categories')->where('id',$request['cat_id'])->update(['pieces'=>$val['pieces']]);
            if ($request->hasFile('img')) {
                $image1=time().'.'.$request['img']->getClientOriginalExtension();
                $request['img']->move(public_path('uploads/products'),$image1);
                $products->image=$image1;
            }
            if(empty($request['product_description'])){
                $products->description = '';
            }else{
                $products->description = $request['product_description'];
            }
            $products->save();
            return redirect('/admin/add-products')->with('success_message','Product added successfully');
        }
        $categories=Category::get();
        return view('admin.products.add-products')->with(compact('categories'));
    }
    public function viewProduct(){
        $products=DB::table('products')->get();
        return view('admin.products.view-products')->with(compact('products'));
    }
    public function editProduct(Request $request, $id=null){
     if($request->isMethod('post')){
         //update category pieces
         $categoryPieces=DB::table('categories')->where('id',$request['cat_id'])->first(['pieces']);
         $val=(array)$categoryPieces;
         //get old product value
         $oldPieces=DB::table('products')->where('id',$id)->first(['quantity']);
         $oldval=(array)$oldPieces;
         if($request['quantity']>$oldval['quantity']){
             $diffP=$request['quantity']-$oldval['quantity'];
             $val['pieces'] += $diffP;
         }else{
             $diffN=$oldval['quantity']-$request['quantity'];
             $val['pieces'] -= $diffN;
         }
         DB::table('categories')->where('id',$request['cat_id'])->update(['pieces'=>$val['pieces']]);

         if(empty($request['description'])){
            $request['product_description']='';
         }
         if ($request->hasFile('img')) {
             $image1=time().'.'.$request['img']->getClientOriginalExtension();
             $request['img']->move(public_path('uploads/products'),$image1);
             DB::table('products')->where('id',$id)->update(['image'=>$image1]);
         }
         DB::table('products')->where('id',$id)->update(['name'=>$request['product_name'],'code'=>$request['product_code'],
             'price'=>$request['product_price'],'cat_id'=>$request['cat_id'],'quantity'=>$request['quantity']]);
         //print_r($request->all());die;
         return redirect('/admin/view-products')->with('success_message','Product updated successfully');
     }
     $products=Product::where(['id'=>$id])->first();
     $categories=Category::get();
     return view('admin.products.edit-products')->with(compact('products','categories'));
    }
    public function deleteProduct($id=null){
        $cat_id=DB::table('products')->where('id',$id)->value('cat_id');
        $quantity=DB::table('products')->where('id',$id)->value('quantity');
        $categoryPieces=DB::table('categories')->where('id',$cat_id)->value('pieces');
        $categoryPieces -= $quantity;
        DB::table('categories')->where('id',$cat_id)->update(['pieces'=>$categoryPieces]);
        DB::table('products')->where('id',$id)->delete();
        return redirect('/admin/view-products')->with('danger_message','Product deleted successfully');
    }
    public function addImage(Request $request ,$id=null){
        if($request->isMethod('post')) {
            $filess = $request->file('image');
            foreach ($filess as $files) {
                $image = new ProductImage();
                $extension = $files->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $files->move(public_path('uploads\productsImages'),$filename);
                $image->image = $filename;
                $image->product_id = $id;
                $image->save();
            }
        }
        $products=Product::where('id',$id)->first();
        $imgDetails=DB::table('product_images')->where('product_id',$id)->get();
        return view('admin.products.add-images')->with(compact('products','imgDetails'));
    }
    public function deleteImage($id=null){
        DB::table('product_images')->where('id',$id)->delete();
        return redirect()->back()->with('danger_message','Image deleted successflly');
    }
}
