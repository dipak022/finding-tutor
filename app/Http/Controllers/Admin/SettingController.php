<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use File;
use Illuminate\Support\Facades\Storage;
use Alert;
use App\Http\Requests;
use Artisan;
use Log;
use Image;
/*use Storage;*/
class SettingController extends Controller
{
	public function setting(){
		 
        $settings=DB::table('settings')->where('id',1)->first();
        return view('admin.setting.edit',compact('settings'));
	}

	public function updatesetting(Request $request,$id){

		$data=array();
        $data['email']=$request->email;
        $data['email_second']=$request->email_second;
        $data['phone']=$request->phone;
        $data['phone_optional']=$request->phone_optional;
        $data['address']=$request->address;
        $data['google']=$request->google;
        $data['linkdin']=$request->linkdin;
        $data['facebook']=$request->facebook;
        $data['twitter']=$request->twitter;
        $data['off_day']=$request->off_day;
        
        $image=$request->file('logo');
            if ($image) {
                // $image_name= str_random(5);
                $image_name= date('dmy_H_s_i');

                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='media/category/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
                $data['logo']=$image_url;
                $done=DB::table('settings')->where('id',$id)->update($data);
                if ($done) {
                    $notification = array(
                        'message' => 'settings Update Successfully.',
                        'alert-type' => 'success'
                    );
                    return redirect()->route('setting')->with($notification);
                }else{
                    $notification = array(
                        'message' => 'settings Update Unuccessfully',
                        'alert-type' => 'danger'
                    );
                    return redirect()->back()->with($notification);
                }                    
            }else{
              
               $done=DB::table('settings')->where('id',$id)->update($data);
                if ($done) {
                    $notification = array(
                        'message' => 'settings Update Successfully.',
                        'alert-type' => 'success'
                    );
                    return redirect()->route('setting')->with($notification);
                }else{
                    $notification = array(
                        'message' => 'settings Update Unuccessfully',
                        'alert-type' => 'danger'
                    );
                    return redirect()->back()->with($notification);
                }
            }

	}
    
 

    public function slider(){
        $slider=DB::table('slider')->where('id',1)->first();
        return view('admin.setting.slider',compact('slider'));
    }

    public function sliderupdate(Request $request,$id){

        $data=array();


        $image_one=$request->slider_1;
        $image_two=$request->slider_2;
        $image_three=$request->slider_3;
        $image_four=$request->slider_4;
        $image_five=$request->slider_5;
        $image_six=$request->slider_6;
        $image_seven=$request->slider_7;
        $image_eight=$request->slider_8;


    if($image_one && $image_two && $image_three && $image_four && $image_five && $image_six && $image_seven && $image_eight){
            $image_one_name= hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
                Image::make($image_one)->resize(230,300)->save('media/product/'.$image_one_name);
                $data['slider_1']='media/product/'.$image_one_name;

            $image_two_name= hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
                Image::make($image_two)->resize(230,300)->save('media/product/'.$image_two_name);
                $data['slider_2']='media/product/'.$image_two_name; 

            $image_three_name= hexdec(uniqid()).'.'.$image_three->getClientOriginalExtension();
                Image::make($image_three)->resize(230,300)->save('media/product/'.$image_three_name);
                $data['slider_3']='media/product/'.$image_three_name; 



            $image_four_name= hexdec(uniqid()).'.'.$image_four->getClientOriginalExtension();
                Image::make($image_four)->resize(230,300)->save('media/product/'.$image_four_name);
                $data['slider_4']='media/product/'.$image_four_name; 



                 $image_five_name= hexdec(uniqid()).'.'.$image_five->getClientOriginalExtension();
                Image::make($image_five)->resize(230,300)->save('media/product/'.$image_five_name);
                $data['slider_5']='media/product/'.$image_five_name; 



                 $image_six_name= hexdec(uniqid()).'.'.$image_six->getClientOriginalExtension();
                Image::make($image_six)->resize(230,300)->save('media/product/'.$image_six_name);
                $data['slider_6']='media/product/'.$image_six_name; 

                 $image_seven_name= hexdec(uniqid()).'.'.$image_seven->getClientOriginalExtension();
                Image::make($image_seven)->resize(230,300)->save('media/product/'.$image_seven_name);
                $data['slider_7']='media/product/'.$image_seven_name; 

                $image_eight_name= hexdec(uniqid()).'.'.$image_eight->getClientOriginalExtension();
                Image::make($image_eight)->resize(230,300)->save('media/product/'.$image_eight_name);
                $data['slider_8']='media/product/'.$image_eight_name; 

               
                
                $done=DB::table('slider')->where('id',$id)->update($data);
                if ($done) {
                    $notification = array(
                        'message' => 'Galary Image Update Successfully.',
                        'alert-type' => 'success'
                    );
                    return redirect()->route('slider')->with($notification);
                }else{
                    $notification = array(
                        'message' => 'slider Update Unuccessfully',
                        'alert-type' => 'danger'
                    );
                    return redirect()->back()->with($notification);
                }  
                
        }

    }

    public function deleteAccount(){
        $user=DB::table('users')->where('roll_id',3)->get();
         return view('admin.farmer.create',compact('user'));

    }

    

    public function farmer_accont_delete($id){
      
        $done=DB::table('users')->where('id',$id)->delete();
        if ($done) {
            $notification = array(
                'message' => 'Account Delete Successfully.',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'message' => 'Account Delete Unuccessfully',
                'alert-type' => 'danger'
            );
            return redirect()->back()->with($notification);
        }  
        
     }

     public function userAccount(){
        $user=DB::table('users')->where('roll_id',2)->get();
         return view('admin.farmer.user',compact('user'));
    }
    
    public function user_accont_delete($id){
      
        $done=DB::table('users')->where('id',$id)->delete();
        if ($done) {
            $notification = array(
                'message' => 'Account Delete Successfully.',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'message' => 'Account Delete Unuccessfully',
                'alert-type' => 'danger'
            );
            return redirect()->back()->with($notification);
        }  
        
     }
     
}
