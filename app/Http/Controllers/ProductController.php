<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Settings;
use App\Models\Subcategory;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\App;

class ProductController extends Controller
{
   
    function index(){
        $products = Product::get();
        return view('backend.Product.index',compact('products'));
    }


    function create(){
        $subcategories = Subcategory::get();
        return view('backend.Product.create',compact('subcategories'));
    }
    function store(Request $request){
    //    dd($request);
        $request->validate([
            'name'=>'required',
            'subcategory'=>'required', 
        ]);
        $product = new Product();
        $subcategory = Subcategory::find($request->subcategory);
        $images= array();
       if($files= $request->file('products')){
            foreach($files as $file){
                $image_name=md5(rand(10,10000));
                $ext=strtolower($file->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='product_images/';
                $image_url=$upload_path.$image_full_name;
                $file->move($upload_path,$image_full_name);
                $images[]=$image_url;
            }
       }
        if ($pdf = $request->file('pdf')) {
            $destinationPath = public_path('pdfs/');;
            $pdfPath = date('YmdHis') . "." . $pdf->getClientOriginalExtension();
          
            $pdf->move($destinationPath, $pdfPath);
            $product->pdf=$pdfPath;
        }
      
        $product->name=$request->name;
        
        $product->compostion=$request->compostion;
        $product->indication=$request->indication;
        $product->dosage=$request->dosage;
        $product->contraindication=$request->contraindication;
        $product->effects=$request->effects;
        $product->others=$request->others;
        $product->precaution=$request->precaution;
        $product->interaction=$request->interaction;
        $product->withdral=$request->withdral;
        $product->storage=$request->storage;
        $product->supply=$request->supply;
        $product->desc=$request->desc;
        $product->images=implode('|',$images);
        $subcategory->products()->save($product);
        
        Toastr::success('Added New Product Succesfully ', 'Product', ["positionClass" => "toast-top-right"]);
        return redirect('/products');
    }

    public function show(Request $request,$id){
        $categories= Category::get();
        $products=Product::get()->count();
        $product = Product::find($id);
      
        return view('product',compact('product','products','categories'));
    }
    public function showBySubCat(Request $request,$subcategory){
        $settings=Settings::get();
        $sub= Subcategory::find($subcategory);
        $products=Product::where('subcategory_id',$subcategory)->paginate(5);
        $categories=Category::get();
        return view('productsCat',compact('products','categories','sub','settings'));
    }

    function edit(Request $request,$id){
        $product = Product::find($id);
        $categories = Category::get();
        $subcategories = Subcategory::get();
        return view('backend.Product.edit',compact('product','categories','subcategories'));
    }
    function update(Request $request,$id){
     
        $request->validate([
            'name'=>'required',
            'subcategory'=>'required',
            
        ]);
      
        if ($pdf = $request->file('pdf')) {
            $product= Product::find($id);
            
            File::delete(public_path('pdfs/'. $product->pdf));
            
            $destinationPath = public_path('pdfs/');;
            $pdfPath = date('YmdHis') . "." . $pdf->getClientOriginalExtension();
         
            $pdf->move($destinationPath, $pdfPath);
          
            Product::where('id',$id)
          
        ->update([
            'name'=>$request->name,
            'pdf'=>$pdfPath,
            'subcategory_id'=>$request->subcategory,
            'compostion'=>$request->compostion,
            'indication'=>$request->indication,
            'dosage'=>$request->dosage,
            'contraindication'=>$request->contraindication,
            'effects'=>$request->effects,
            'others'=>$request->others,
            'precaution'=>$request->precaution,
            'interaction'=>$request->interaction,
            'withdral'=>$request->withdral,
            'storage'=>$request->storage,
            'supply'=>$request->supply,
            'desc'=>$request->desc,
        ]);
        
        }else{
          
            Product::where('id',$id)
            ->update([
                'name'=>$request->name,
                'subcategory_id'=>$request->subcategory,
                'compostion'=>$request->compostion,
                'indication'=>$request->indication,
                'dosage'=>$request->dosage,
                'contraindication'=>$request->contraindication,
                'effects'=>$request->effects,
                'others'=>$request->others,
                'precaution'=>$request->precaution,
                'interaction'=>$request->interaction,
                'withdral'=>$request->withdral,
                'storage'=>$request->storage,
                'supply'=>$request->supply,
                'desc'=>$request->desc,
            ]);
            
        }

       
        Toastr::success('Product updated Succesfully ', 'Product', ["positionClass" => "toast-top-right"]);
        return redirect('/products');
    }
    function delete($id){
           $product= Product::find($id);
           if($product->images!=null){
                foreach(explode('|',$product->images) as $img ){
                    if(File::exists(public_path($img))) {
                        unlink(public_path($img));
                    }
                }
           }
           if($product->pdf!=null){
            if(File::exists(public_path('pdfs').'/'.$product->pdf)) {
                unlink(public_path('pdfs').'/'.$product->pdf);
            }
           }
        Product::find($id)->delete();
        Toastr::success('Product deleted Succesfully ', 'Product', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }





    function viewPdf(Request $request,$id){
        $product= Product::find($id);
        if($product->pdf){
           
            return view('pdfView',compact('product'));
        }
        else{
            $pdf = App::make('dompdf.wrapper');
            $pdf->loadView('pdfView',compact('product'));
            return $pdf->stream();
        }
    }
    function Download(Request $request,$id){
        $product= Product::find($id);
        if($product->pdf){
            return response()->download(public_path('pdfs/').$product->pdf);
        }
        else{
            $pdf= PDF::loadView('pdfView',compact('product'));
            return $pdf->Download('product.pdf');
        }
    }
}