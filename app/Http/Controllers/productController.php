<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;

class productController extends Controller
{
    public function index(){
        return view('addproduct');
    }

    public function getproducts(){
         $products = products::all();
        return view('productlist')->with('products',$products);
    }
    public function submitproduct(request $request){
        $products = new products;
         
         $products->product=$request->input('product');
         $products->brand_name=$request->input('brand_name');
         $products->unit=$request->input('unit');
         $products->opening_cost=$request->input('openning_cost');
         $products->Retail_price=$request->input('retail_price');
         $products->wholesale_price=$request->input('wholesale_price');
         $products->date=2018/4/4;
         $products->amount=50;
         $products->vendor_address=$request->input('address');
         $products->vendor_name=$request->input('vendor_name');
         $products->reorder_level=$request->input('reorder_level');
         $products->save();
         
    }
    public function deleteproduct(request $request){
       $id=$request->input('id');
       $product=products::find($id);
       $product->delete();
       return redirect('/getproduct');

    }
}
