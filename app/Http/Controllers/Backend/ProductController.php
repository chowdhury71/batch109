<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::OrderBy('id','desc')->get();//all();
       // dd($products);
        return view('backend.products.index',compact('products'));
    }
    public function create(){
       return view('backend.products.create');
    }
    public function store(Request $request){
        //dd($request->all());
        $inputs = [
            'name'=>$request->input('name'),
            'price'=>$request->input('price'),
            'desc'=>$request->input('desc')
        ];
        Product::create($inputs);
        return redirect()->route('admin.product');
     }
     public function edit($id){
            //dd($id);
            //$product = Product::find($id);use for single data or
            //$product = Product::where('id',$id)->where('status',1)->first()/find()[single data]get()/all()[multiple data];
            $product = Product::find($id);
            //dd($product);
            return view('backend.products.edit',compact('product'));
     }
     public function update(Request $request,$id){
           //dd($request->all());
           $product = Product::find($id);
           //dd($product);
           $inputs = [
            'name'=>$request->input('name'),
            'price'=>$request->input('price'),
            'desc'=>$request->input('desc')
        ];
        $product -> update($inputs);
        return redirect()->route('admin.product');
     }
     public function delete($id){
        Product::where('id',$id)->delete(); //$product = Product::find($id);
       // $product->delete();
        return redirect()->back();
     }
}
