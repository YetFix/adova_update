<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index(){
        $contacts= Contact::get();
        return view('backend.Contacts.index',compact('contacts'));
    }
    
    function contact(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'mobile'=>'required',
            'subject'=>'required|min:3',
            'message'=>'required'
        ]);
        Contact::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'subject'=>$request->subject,
            'message'=>$request->message,
        ]);
        Toastr::success('Message Send Succesfully ', 'Message', ["positionClass" => "toast-top-right"]);
        return redirect('/');
    }
    function delete(Request $request,$id){
        $contact= Contact::find($id);
        $contact->delete();
        Toastr::success('Contact deleted Succesfully ', 'Contact', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
