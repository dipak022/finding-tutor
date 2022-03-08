<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;

use DB;
use App\Models\messages;
use App\Models\User;
class FrontendController extends Controller
{
    public function register(){
    	return view('user.register');
    }

    public function profile(){
    	return view('user.profile');
    }

    public function Logout()
    {
        // $logout= Auth::logout();
            Auth::logout();
            $notification=array(
                'messege'=>'Successfully Logout',
                'alert-type'=>'success'
                 );
             return Redirect()->to('/')->with($notification);
       

    }

    
    public function GetServices($id){
    	
        $specialist=DB::table('users')
        ->join('category','users.specialist_id','category.id')
        ->select('users.*','category.categoty_name')
        ->where('users.specialist_id',$id)->where('users.user_status',1)
        ->get();
        return  view('users.service_details',compact('specialist'));
        
        
    }

    
    public function Getprofile_details($id){
    	
        $specialist=DB::table('users')
        ->join('category','users.specialist_id','category.id')
        ->select('users.*','category.categoty_name')
        ->where('users.id',$id)->where('users.user_status',1)
        ->first();
        return  view('users.profile_details',compact('specialist'));
        
        
    }

    public function Message($id){
        $messages = messages::where(function($q) use($id){
            $q->where('from',auth()->user()->id);
            $q->where('to',$id);
            $q->where('type',0);
        })->orWhere(function($q) use ($id){
            $q->where('from',$id);
            $q->where('to',auth()->user()->id);
            $q->where('type',1);
        })->with('user')->get();
        $user_id= DB::table('users')->where('id',$id)->first();
        $check = Auth::id();
        //return response()->json($check);
        if ($check==null) {
            $notification = array(
                'message' => 'At First Login Your Account.',
                'alert-type' => 'success'
            );
            return Redirect()->to('login')->with($notification);
        }else{
            return  view('users.message',compact('user_id','messages'));
            //return response()->json($messages);
        }

    }

    public function Messagessss($id){
        $messages = DB::table('messages')
        ->where(function($q) use($id){
            $q->where('from',Auth::id());
            $q->where('to',$id);
            $q->where('type',0);
        })->orWhere(function($q) use ($id){
            $q->where('from',$id);
            $q->where('to',Auth::id());
            $q->where('type',1);
        })->get(); 
        $user_id= DB::table('users')->where('id',$id)->first();
        $check = Auth::id();
        //return response()->json($check);
        if ($check==null) {
            $notification = array(
                'message' => 'At First Login Your Account.',
                'alert-type' => 'success'
            );
            return Redirect()->to('login')->with($notification);
        }else{
            return  view('users.message',compact('user_id','messages'));
            //return response()->json($messages);
        }

    }

    public function contactPage(){
        return  view('users.contact');
    }

    public function galleryPage(){
        return  view('users.gallery');
    }

    



    

    
}
