<?php

namespace App\Http\Controllers;
use App\Models\Team;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        $teams = Team::get();
        return view('backend.Team.index',compact('teams'));
    }


    function create(){
        return view('backend.Team.create');
    }
    function store(Request $request){
        
        $request->validate([
            'name'=>'required',
            'slider' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'des'=>'required',
            'email'=>'required',
        ]);
        if ($image = $request->file('slider')) {
            $destinationPath = public_path('teamimg/');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
          
            $image->move($destinationPath, $profileImage);
            
            Team::create([
                'name'=>$request->name,
                'image'=>$profileImage,
                'email'=>$request->email,
                'des'=>$request->des,
            ]);

        }else{
           
            $destinationPath = 'teamimg/';
            $profileImage = "https://via.placeholder.com/600";
            $team= Team::create([
                'name'=>$request->name,
                'image'=>$profileImage,
                'email'=>$request->email,
                'des'=>$request->des,
            ]);
        }

        Toastr::success('Added New Team Member Succesfully ', 'Team', ["positionClass" => "toast-top-right"]);
        return redirect('/teams');
    }
    function edit(Request $request,$id){
        $team = Team::find($id);
        return view('backend.Team.edit',compact('team'));
    }
    function update(Request $request,$id){
        
        $request->validate([
            'name'=>'required',
            'slider' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'des'=>'required',
            'email'=>'required',
        ]);
            if( $image = $request->file('slider')){

                $team= Team::find($id);
       
                if(File::exists(public_path('teamimg').'/'.$team->image)) {
                    unlink(public_path('teamimg').'/'.$team->image);
                }
                $image = $request->file('slider');
                $destinationPath = public_path('teamimg/');
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                
                Team::where('id',$id)->update([
                    'name'=>$request->name,
                    'image'=>$profileImage,
                    'des'=>$request->des,
                    'email'=>$request->email,
                ]);
            }else{
                $team = Team::find($id);
                Team::where('id',$id)->update([
                    'name'=>$request->name,
                    'image'=>$team->image,
                    'des'=>$request->des,
                    'email'=>$request->email,
                ]);
            }
        
            Toastr::success('Team member Updated Succesfully ', 'Team', ["positionClass" => "toast-top-right"]);

        return redirect('/teams');
       
    }
    function delete(Request $request,$id){
        $team= Team::find($id);
       
        if(File::exists(public_path('teamimg').'/'.$team->image)) {
            unlink(public_path('teamimg').'/'.$team->image);
        }
        $team->delete();
        Toastr::success('Team Member deleted Succesfully ', 'Team', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}