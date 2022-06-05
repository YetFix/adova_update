<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;

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
           
            'cat' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        if ($request->hasFile('cat')) {
          
            $image = $request->file('cat');
            $destinationPath = public_path('categoriesimg/');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            
            Category::create([
                'name'=>$request->name,
               
                'image'=>$profileImage,
            ]);

        }else{
            Category::create([
                'name'=>$request->name,
                
            ]);
        }

       
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
          
            
        ]);

        if($request->hasFile('cat')){
            $image = $request->file('cat');
            $category= Category::find($id);
           
            if(File::exists(public_path('categoriesimg').'/'.$category->image)) {
                unlink(public_path('categoriesimg').'/'.$category->image);
            }
            $image = $request->file('cat');
            $destinationPath = public_path('categoriesimg/');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            
            Category::where('id',$id)->update([
                'name'=>$request->name,
               
                'image'=>$profileImage,
            ]);
        }else{
            $category = Category::find($id);
            Category::where('id',$id)->update([
                'name'=>$request->name,
                'image'=>$category->image,
              
            ]);
        }
      
        Toastr::success('Category updated Succesfully ', 'Category', ["positionClass" => "toast-top-right"]);
        return redirect('/categories');
    }
    function delete(Request $request,$id){
        $category= Category::find($id);
       
        if(File::exists(public_path('categoriesimg').'/'.$category->image)) {
            unlink(public_path('categoriesimg').'/'.$category->image);
        }
        $category->delete();
        Toastr::success('Category deleted Succesfully ', 'Category', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}