<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        $subcategories = Subcategory::get();
        return view('backend.Subcategory.index',compact('subcategories'));
    }


    function create(){
        $categories=Category::get();
        $subcategories = Subcategory::get();
        return view('backend.Subcategory.create',compact('subcategories','categories'));
    }
    function store(Request $request){
       
        $request->validate([
            'name'=>'required | unique:types',
            'type'=>'required'
        ]);
        $category = Category::find($request->type);
        $subcategory = new Subcategory();
        $subcategory->name=$request->name;
        $category->subcategories()->save($subcategory);
        
        Toastr::success('Added New Sub Category Succesfully ', 'Sub Category', ["positionClass" => "toast-top-right"]);
        return redirect('/subcategories');
    }
    function edit(Request $request,$id){
        $subcategory= Subcategory::find($id);
        $categories=Category::get();
        $scategory = Category::find($subcategory->category_id);
        return view('backend.Subcategory.edit',compact('scategory','id','subcategory','categories'));
    }
    function update(Request $request,$id){
        
        $request->validate([
            'name'=>'required',
            'category'=>'required'
        ]);
        $subcategory =Subcategory::where('id',$id)
        ->update([
            'name'=>$request->name,
            'category_id'=>$request->category
        ]);
    
        Toastr::success('Sub category updated Succesfully ', 'Sub Category', ["positionClass" => "toast-top-right"]);
        return redirect('/subcategories');
    }
    function delete(Request $request,$id){
        Subcategory::find($id)->delete();
        Toastr::success('Sub Category deleted Succesfully ', 'Sub Category', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}