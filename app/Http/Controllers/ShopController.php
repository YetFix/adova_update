<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Settings;
use App\Models\Category;
use App\Models\Subcategory;

class ShopController extends Controller
{
    function shop(Request $request){
        $products = Product::paginate(9);
        $settings= Settings::get();
        $categories= Category::get();
       
        return view('products',compact('products','settings','categories'));
    }
    function shopById(Request $request,$id){
        $product= Product::find($id);
        $products = Product::latest()->paginate(6);
        $settings= Settings::get();
        $categories= Category::get();
        return view('single',compact('product','products','settings','categories'));
    }

    function productByCateId(Request $request,$id){

        $settings=Settings::get();
        $products=Product::where('category_id',$id)->paginate(5);
        $categories=Category::get();
        return view('productsCat',compact('products','categories','settings'));
    }

    function productsByType(Request $request,$type){
        $settings=Settings::get();
        $products=Product::where('type',$type)->paginate(5);
        $categories=Category::get();
        return view('productsByType',compact('products','categories','settings'));
    }
}
