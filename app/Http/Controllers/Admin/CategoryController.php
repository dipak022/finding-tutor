<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class CategoryController extends Controller
{
    

    public function index(){
        $category=DB::table('category')->get();
        return view('admin.category.create',compact('category'));
      
    }
    public function store(Request $request){
        $data=array();
        $data['categoty_name']=$request->categoty_name;
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
                $done=DB::table('category')->insert($data);
                if ($done) {
                    $notification = array(
                        'message' => 'Category Added Successfully.',
                        'alert-type' => 'success'
                    );
                    return redirect()->back()->with($notification);
                }else{
                    $notification = array(
                        'message' => 'Category Added Unuccessfully',
                        'alert-type' => 'danger'
                    );
                    return redirect()->back()->with($notification);
                }                    
            }else{
              
                $notification = array(
                        'message' => 'Category Image Mustbe  Upload Thank you!!',
                        'alert-type' => 'warning'
                    );
                    return redirect()->back()->with($notification);
            }
        


    }

    public function edit($id){
        $category=DB::table('category')->where('id',$id)->first();
        return view('admin.category.edit',compact('category'));

    }

    
    public function update(Request $request,$id){

        $data=array();
        $data['categoty_name']=$request->categoty_name;
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
                $done=DB::table('category')->where('id',$id)->update($data);
                if ($done) {
                    $notification = array(
                        'message' => 'Category Update Successfully.',
                        'alert-type' => 'success'
                    );
                    return redirect()->route('category')->with($notification);
                }else{
                    $notification = array(
                        'message' => 'Category Update Unuccessfully',
                        'alert-type' => 'danger'
                    );
                    return redirect()->back()->with($notification);
                }                    
            }else{
              
               $done=DB::table('category')->where('id',$id)->update($data);
                if ($done) {
                    $notification = array(
                        'message' => 'Category Update Successfully.',
                        'alert-type' => 'success'
                    );
                    return redirect()->route('category')->with($notification);
                }else{
                    $notification = array(
                        'message' => 'Category Update Unuccessfully',
                        'alert-type' => 'danger'
                    );
                    return redirect()->back()->with($notification);
                }
            }
        

    }
    public function delete($id){
        $done=DB::table('category')->where('id',$id)->delete();
        if ($done) {
            $notification = array(
                'message' => 'Category Delete Successfully.',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'message' => 'Category Delete Unuccessfully',
                'alert-type' => 'danger'
            );
            return redirect()->back()->with($notification);
        }

    }
    
}
