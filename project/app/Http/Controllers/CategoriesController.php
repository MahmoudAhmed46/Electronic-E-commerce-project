<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{

    public function index(){

    }

    public function addCategory(Request $request){
        if($request->isMethod('post')) {
            if ($request->hasFile('img')) {
                $image1=time().'.'.$request['img']->getClientOriginalExtension();
                $request['img']->move(public_path('uploads/products'),$image1);
            }
            if(!empty($request['category_description'])){
                DB::table('categories')->insert(['name' => $request['name'], 'code' => $request['code'],
                    'description'=>$request['category_description'],'image'=>$image1,'parient_id' => $request['parient_id']]);
            }else{
                DB::table('categories')->insert(['name' => $request['name'], 'code' => $request['code'],
                   'description'=>'','image'=>$image1,'parient_id' => $request['parient_id']]);
            }
            return redirect()->back()->with('success_message','Category added successfully');
        }
    $levels=Category::get();
    return view('admin.categories.add-category')->with(compact('levels'));
    }
    public function viewCategory(){
        $categories=DB::table('categories')->get();
        return view('admin.categories.view-category')->with(compact('categories'));
    }
    public function editCategory(Request $request, $id=null){
        if($request->isMethod('post')){
            DB::table('categories')->where('id',$id)->update(['name' => $request['name'], 'code' => $request['code'],
                'parient_id' => $request['parient_id'],'description' => $request['category_description']]);
            return redirect()->back()->with('success_message','Category updated successfully');
        }
        $categoryValues=Category::where(['id'=>$id])->first();
        $levels=Category::get();
        return view('admin.categories.edit-category')->with(compact('categoryValues','levels'));
    }
    public function deleteCategory($id=null){
        DB::table('categories')->where('id',$id)->delete();
        return redirect('/admin/view-category')->with('warning_message','Category deleted successfully');
    }
    public function updateStatus(Request $request){
        //$status=$data['status'];
        //$id=$data['id'];
        echo '<pre>';print_r($request->all);die;
    }
}
