<?php

namespace App\Http\Controllers\Admin;

use DB;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
session_start();

class aboutController extends Controller
{
    public function index()
    {
    	$all_about_info=DB::table('tbl_about')->get();
    	$manage_about=view('admin.about.index')
    	->with('all_about_info',$all_about_info);
    	return view('layouts.master')
    	->with('admin.about.index',$manage_about);
   //return view('admin.slider.index');
	}
	public function add_about()
    {
   return view('admin.about.add_about');
	}
	public function save_about(Request $request)
    {
    	$this->validate($request, [
        'description'   => 'required',
        'profile_image'   => 'required',
    ]);
    	$data=array();
        $data['id']=$request->id;
        $data['description']=$request->description;
        $image=$request->file('profile_image');
    if ($image){
    	$image_name=Str::random(20);
    	$ext=strtolower($image->getClientOriginalExtension());
    	$image_full_name=$image_name.'.'.$ext;
    	$upload_path='imageSlider/';
    	$image__url=$upload_path.$image_full_name;
    	$success=$image->move($upload_path,$image_full_name);
    	if($success){
    		$data['profile_image']=$image__url;
    		DB::table('tbl_about')->insert($data);
    		Session::put('message','About Added Successfully!!');
    		return redirect()->route('admin.add_about');
    	}
    }
    $data['profile_image']='';
    		DB::table('tbl_about')->insert($data);
    		Session::put('message','About Added Successfully Without Image!!');
    		return redirect()->route('admin.add_about');
    }
    public function unactive_about($id)
    {
        DB::table('tbl_about')
        ->where('id',$id)
        ->update(['publication_status' => 0]);
        session::put('message','About Unactive Successfully !!');
        return redirect()->route('admin.all_about');
    }
    public function active_about($id)
    {
        DB::table('tbl_about')
        ->where('id',$id)
        ->update(['publication_status' => 1]);
        session::put('message','About Active Successfully !!');
        return redirect()->route('admin.all_about');
    }
    Public function edit_about($id)
    {
        $about_info=DB::table('tbl_about')
                        ->where('id',$id)
                        ->first();
        $about_info=view('admin.about.edit_about')
        ->with('about_info',$about_info);
        return view('layouts.master')
        ->with('admin.about.edit_about',$about_info);
        //return view('admin.dashbord.edit_category');
    }
    Public function update_about(Request $request,$id)
    {
         $this->validate($request, [
        'description'   => 'required',
        'profile_image'   => 'required',
    ]);
        $data=array();
        $data['description']=$request->description;
        $image=$request->file('profile_image');
    if ($image){
        $image_name=Str::random(20);
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='imageSlider/';
        $image__url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
        if($success){
            $data['profile_image']=$image__url;
            DB::table('tbl_about')
        ->where('id',$id)
        ->update($data);
        session::put('message','About Update Successfully!!');
        return redirect()->route('admin.all_about');
        }
    }
    $data['profile_image']='';
     DB::table('tbl_about')
        ->where('id',$id)
        ->update($data);
        session::put('message','About Update Successfully Without Image!!');
        return redirect()->route('admin.all_about');
    }
    Public function delete_about($id)
    {
        DB::table('tbl_about')
        ->where('id',$id)
        ->delete();
        session::put('message','About Delete Successfully !!');
                return redirect()->route('admin.all_about');
    }
}
