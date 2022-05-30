<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        $categories = Category::get();
        return view('backend.Category.index',compact('categories'));
    }


    function create(){
        return view('backend.Category.create');
    }
    function store(Request $request){
        $request->validate([
            'name'=>'required',
            'type'=>'required'
        ]);


        Category::create([
            'name'=>$request->name,
            'type'=>$request->type
        ]);
        Toastr::success('Added New Category Succesfully ', 'Slider', ["positionClass" => "toast-top-right"]);
        return redirect('/categories');
    }
    function edit(Request $request,$id){
        $category = Category::find($id);
        return view('backend.Category.edit',compact('category'));
    }
    function update(Request $request,$id){
        $request->validate([
            'name'=>'required',
            'type'=>'required'
        ]);
        Category::where('id',$id)
        ->update([
            'name'=>$request->name,
            'type'=>$request->type
        ]);
        Toastr::success('Category updated Succesfully ', 'Slider', ["positionClass" => "toast-top-right"]);
        return redirect('/categories');
    }
    function delete(Request $request,$id){
        Category::find($id)->delete();
        Toastr::success('Category deleted Succesfully ', 'Slider', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}