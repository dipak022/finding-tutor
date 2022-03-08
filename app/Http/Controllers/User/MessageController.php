<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use DB;

class MessageController extends Controller
{
    public function sendmessage(Request $request){
        $data=array();
        $datas=array();
        
        $image=$request->file('image');
            if ($image) {
                // $image_name= str_random(5);
                $image_name= date('dmy_H_s_i');

                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='media/category/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
                $data['image']=$image_url;
                $data['from']=$request->from;
                $data['to']=$request->to;
                $data['type']=0;
                $done=DB::table('messages')->insert($data);

                
                $datas['image']=$image_url;
                $datas['from']=$request->from;
                $datas['to']=$request->to;
                $datas['type']=1;
                
                $done=DB::table('messages')->insert($datas);
                $notification = array(
                    'message' => 'Message Send.',
                    'alert-type' => 'success'
                );
                return Redirect()->back()->with($notification);
                if ($done) {
                    $notification = array(
                        'message' => 'Send Image.',
                        'alert-type' => 'success'
                    );
                    return redirect()->back()->with($notification);
                }else{
                    $notification = array(
                        'message' => 'Unuccessfully',
                        'alert-type' => 'danger'
                    );
                    return redirect()->back()->with($notification);
                }                    
            }else{
              
                $data['from']=$request->from;
                $data['to']=$request->to;
                $data['message']=$request->message;
                $data['type']=0;
                $done=DB::table('messages')->insert($data);


                $datas['from']=$request->from;
                $datas['to']=$request->to;
                $datas['message']=$request->message;
                $datas['type']=1;
                
                $done=DB::table('messages')->insert($datas);
                $notification = array(
                    'message' => 'Message Send.',
                    'alert-type' => 'success'
                );
                return Redirect()->back()->with($notification);
            }
       
    }




    public function user_message($id=null){

        
        $messages = DB::table('messages')
        ->join('users','messages.form','users.id')
        ->select('messages.*','users.name')
        ->where(function($q) use($id){
            $q->where('messages.from',Auth::id());
            $q->where('messages.to',$id);
            $q->where('messages.type',0);
        })->orWhere(function($q) use ($id){
            $q->where('messages.from',$id);
            $q->where('messages.to',Auth::id());
            $q->where('messages.type',1);
        })->get(); 
        return  view('users.service_details',compact('messages'));
    }

    public function farmermessage(){
        $user = DB::table('users')->where('roll_id',2)->where('user_status',NULL)->get();
        return view('specialist.message.message',compact('user'));

    }

    
    public function FarmerSpecialistMessage($id){
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
        if ($check==null) {
            $notification = array(
                'message' => 'At First Login Your Account.',
                'alert-type' => 'success'
            );
            return Redirect()->to('login')->with($notification);
        }else{
            return  view('specialist.message.sendmessage',compact('user_id','messages'));
            //return response()->json($messages);
        }

    }

}
