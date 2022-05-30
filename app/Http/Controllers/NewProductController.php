<?php

namespace App\Http\Controllers;
use App\Models\NewProduct;
use App\Models\Settings;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\App;

class NewProductController extends Controller
{
  
    function index(){
        $products = NewProduct::get();
        return view('backend.NewProduct.index',compact('products'));
    }


    function create(){
       
        return view('backend.NewProduct.create');
    }
    function store(Request $request){
    
        $request->validate([
            'name'=>'required|unique:new_products',
        ]);
        $product = new NewProduct();
      
        
        if ($pdf = $request->file('pdf')) {
            $destinationPath = public_path('uppdfs');
            $pdfPath = date('YmdHis') . "." . $pdf->getClientOriginalExtension();
          
            $pdf->move($destinationPath, $pdfPath);
            $product->pdf=$pdfPath;
        }
      
        $product->name=$request->name;
        $product->category=$request->category;
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
        $product->overdoge=$request->overdoge;
        $product->safety=$request->safety;
        $product->desc=$request->desc;
        
        $product->save();

        Toastr::success('Added New Product Succesfully ', 'Product', ["positionClass" => "toast-top-right"]);
        return redirect('/newproducts');
    }

  
    public function showById($id){
        $settings=Settings::get();
        $product=NewProduct::where('id',$id)->paginate(5);
        return view('upproducts',compact('product','settings'));
    }

    function edit(Request $request,$id){
        $product = NewProduct::find($id);
      
        return view('backend.NewProduct.edit',compact('product'));
    }
    function update(Request $request,$id){
       
        $request->validate([
            'name'=>'required',
        ]);
      
        if ($pdf = $request->file('pdf')) {
            $product= NewProduct::find($id);
            
              File::delete(public_path('uppdfs/'. $product->pdf));
            $destinationPath = public_path('uppdfs');
            $pdfPath = date('YmdHis') . "." . $pdf->getClientOriginalExtension();
         
            $pdf->move($destinationPath, $pdfPath);
          
            NewProduct::where('id',$id)
          
        ->update([
            'name'=>$request->name,
            'pdf'=>$pdfPath,
            'category'=>$request->category,
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
            'overdoge'=>$request->overdoge,
            'supply'=>$request->supply,
            'desc'=>$request->desc,
        ]);
        
        }else{
          
            NewProduct::where('id',$id)
            ->update([
                'name'=>$request->name,
                'category'=>$request->category,
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
                'overdoge'=>$request->overdoge,
                'supply'=>$request->supply,
                'desc'=>$request->desc,
            ]);
            
        }

       
        Toastr::success('Product updated Succesfully ', 'Product', ["positionClass" => "toast-top-right"]);
        return redirect('/newproducts');
    }
    function delete($id){
           $product= NewProduct::find($id);
         
           if($product->pdf!=null){
            if(File::exists(public_path('uppdfs').'/'.$product->pdf)) {
              
                unlink(public_path('uppdfs').'/'.$product->pdf);
                
            }
           }
        NewProduct::find($id)->delete();
        Toastr::success('Product deleted Succesfully ', 'Product', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }





    function viewPdf(Request $request,$id){
        $product= NewProduct::find($id);
        if($product->pdf){
            return view('uppdfView',compact('product'));
        }
        else{
            $pdf = App::make('dompdf.wrapper');
            $pdf->loadView('uppdfView',compact('product'));
            return $pdf->stream();
        }
    }
    function Download(Request $request,$id){
        $product= NewProduct::find($id);
        if($product->pdf){
           return response()->download(public_path('uppdfs/').$product->pdf);
        }
        else{
            $pdf= PDF::loadView('uppdfView',compact('product'));
            return $pdf->Download('product.pdf');
        }
    }
}