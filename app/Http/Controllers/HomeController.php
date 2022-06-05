<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Settings;
use App\Models\Slider;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $admins= User::get();
        $categories= Category::get();
        $sliders= Slider::get();
        $products=Product::get()->count();
       
        return view('home')->with(compact('categories','sliders','admins','products'));;
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
      }

      public function settings(Request $request){
          $settings= Settings::get();
          return view('backend.Settings',compact('settings'));
          
    }
    public function setStore(Request $request){
        
          if($request->lp=='on'){
            Settings::where('local',0)
            ->update(['local' => true]);
          }
          if($request->ep=='on'){
            Settings::where('import',0)
            ->update(['import' => true]);
          }
          if($request->lp==false){
            Settings::where('local',1)
            ->update(['local' => false]);
          }
          if($request->ep==false){
            Settings::where('import',1)
            ->update(['import' => false]);
          }
         
         
          Toastr::success('Settings updated Succesfully  ', 'Settings', ["positionClass" => "toast-top-right"]);
          return redirect('/settings');
    }
    
    public function news(Request $request){
        $request->validate([
            'email'=>'required|email'
        ]);

        $contact= new Contact();
        $contact->email=$request->email;
        $contact->name="news letter";
        $contact->mobile="+88 01739176123";
        $contact->subject="Update";
        $contact->message="Give me product updates";
        $contact->save();

        Toastr::success('Newsletterupdated Succesfully ', 'Newsletter', ["positionClass" => "toast-top-right"]);
        return redirect('/');

    }
}