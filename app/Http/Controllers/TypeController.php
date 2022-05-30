<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Type;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        $ptypes = Type::get();
        return view('backend.Type.index',compact('ptypes'));
    }


    function create(){
        $categories = Category::get();
        return view('backend.Type.create',compact('categories'));
    }
    function store(Request $request){
       
        $request->validate([
            'name'=>'required | unique:types',
            'type'=>'required'
        ]);
        $category = Category::find($request->type);
        $type = new Type();
        $type->name=$request->name;
        $category->types()->save($type);
        
        Toastr::success('Added New Type Succesfully ', 'Slider', ["positionClass" => "toast-top-right"]);
        return redirect('/types');
    }
    function edit(Request $request,$id){
        $ptype= Type::find($id);
        $categories=Category::get();
        $scategory = Category::find($ptype->category_id);
        return view('backend.Type.edit',compact('scategory','id','ptype','categories'));
    }
    function update(Request $request,$id){
        //dd($request);
        $request->validate([
            'name'=>'required',
            'type'=>'required'
        ]);
        $type =Type::where('id',$id)
        ->update([
            'name'=>$request->name,
            'category_id'=>$request->type
        ]);
    
        Toastr::success('Type updated Succesfully ', 'Slider', ["positionClass" => "toast-top-right"]);
        return redirect('/types');
    }
    function delete(Request $request,$id){
        Type::find($id)->delete();
        Toastr::success('Type deleted Succesfully ', 'Slider', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}