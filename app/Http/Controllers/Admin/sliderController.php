<?php

namespace App\Http\Controllers\Admin;

use DB;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
session_start();

class sliderController extends Controller
{
   public function index()
    {
    	$all_slider_info=DB::table('tbl_slider')->get();
    	$manage_slider=view('admin.slider.index')
    	->with('all_slider_info',$all_slider_info);
    	return view('layouts.master')
    	->with('admin.slider.index',$manage_slider);
   //return view('admin.slider.index');
	}
	public function add_slider()
    {
   return view('admin.slider.add_slider');
	}
	public function save_slider(Request $request)
    {
    	$this->validate($request, [
        'name'   => 'required',
        'categories'   => 'required',
        'description'   => 'required',
        'slider_image'   => 'required',
        ]);
    	$data=array();
        $data['id']=$request->id;
        $data['name']=$request->name;
        $data['categories']=$request->categories;
        $data['description']=$request->description;
        $image=$request->file('slider_image');
        if ($image){
    	$image_name=Str::random(20);
    	$ext=strtolower($image->getClientOriginalExtension());
    	$image_full_name=$image_name.'.'.$ext;
    	$upload_path='imageSlider/';
    	$image__url=$upload_path.$image_full_name;
    	$success=$image->move($upload_path,$image_full_name);
    	if($success){
    		$data['slider_image']=$image__url;
    		DB::table('tbl_slider')->insert($data);
    		Session::put('message','Slider Added Successfully!!');
    		return redirect()->route('admin.add_slider');
    	}
        }
        $data['slider_image']='';
    		DB::table('tbl_slider')->insert($data);
    		Session::put('message','Slider Added Successfully Without Image!!');
    		return redirect()->route('admin.add_slider');
    }
    public function unactive_slider($id)
    {
        DB::table('tbl_slider')
        ->where('id',$id)
        ->update(['publication_status' => 0]);
        session::put('message','Slider Unactive Successfully !!');
        return redirect()->route('admin.all_slider');
    }
    public function active_slider($id)
    {
        DB::table('tbl_slider')
        ->where('id',$id)
        ->update(['publication_status' => 1]);
        session::put('message','Slider Active Successfully !!');
        return redirect()->route('admin.all_slider');
    }
    Public function edit_slider($id)
    {
        $slider_info=DB::table('tbl_slider')
                        ->where('id',$id)
                        ->first();
        $slider_info=view('admin.slider.edit_slider')
        ->with('slider_info',$slider_info);
        return view('layouts.master')
        ->with('admin.slider.edit_slider',$slider_info);
        //return view('admin.dashbord.edit_category');
    }
    Public function update_slider(Request $request,$id)
    {
        $this->validate($request, [
        'name'   => 'required',
        'categories'   => 'required',
        'description'   => 'required',
        'slider_image'   => 'required',
        ]);
        $data=array();
        $data['name']=$request->name;
        $data['categories']=$request->categories;
        $data['description']=$request->description;
        $image=$request->file('slider_image');
        if ($image){
        $image_name=Str::random(20);
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='imageSlider/';
        $image__url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
        if($success){
            $data['slider_image']=$image__url;
            DB::table('tbl_slider')
        ->where('id',$id)
        ->update($data);
        session::put('message','Slider Update Successfully!!');
        return redirect()->route('admin.all_slider');
        }
    }
    $data['slider_image']='';
     DB::table('tbl_slider')
        ->where('id',$id)
        ->update($data);
        session::put('message','Slider Update Successfully Without Image!!');
        return redirect()->route('admin.all_slider');
    }
    Public function delete_slider($id)
    {
        DB::table('tbl_slider')
        ->where('id',$id)
        ->delete();
        session::put('message','Slider Delete Successfully !!');
        return redirect()->route('admin.all_slider');
    }
}
