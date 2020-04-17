<?php

namespace App\Http\Controllers\Admin;

use DB;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
session_start();

class logoController extends Controller
{
    public function index()
    {
    	$all_logo_info=DB::table('tbl_logo_favicon')->get();
    	$manage_logo=view('admin.logofavicon.index')
    	->with('all_logo_info',$all_logo_info);
    	return view('layouts.master')
    	->with('admin.logofavicon.index',$manage_logo);
	}
	public function add_logo()
    {
        return view('admin.logofavicon.add_logo');
	}
	public function save_logo(Request $request)
    {
    	$this->validate($request, [
        'logo'   => 'required',
        ]);
    	$data=array();
        $data['id']=$request->id;
        $image=$request->file('logo');
        if ($image){
    	$image_name=Str::random(20);
    	$ext=strtolower($image->getClientOriginalExtension());
    	$image_full_name=$image_name.'.'.$ext;
    	$upload_path='imageSlider/';
    	$image__url=$upload_path.$image_full_name;
    	$success=$image->move($upload_path,$image_full_name);
    	if($success){
    		$data['logo']=$image__url;
    		DB::table('tbl_logo_favicon')->insert($data);
    		Session::put('message','Logo Added Successfully!!');
    		return redirect()->route('admin.all_logo');
    	}
    }
    $data['logo']='';
    		DB::table('tbl_logo_favicon')->insert($data);
    		Session::put('message','logo Not Added Successfully Without Image!!');
    		return redirect()->route('admin.all_logo');
    }
    public function unactive_logo($id)
    {
        DB::table('tbl_logo_favicon')
        ->where('id',$id)
        ->update(['publication_status' => 0]);
        session::put('message','Logo Unactive Successfully !!');
        return redirect()->route('admin.all_logo');
    }
    public function active_logo($id)
    {
        DB::table('tbl_logo_favicon')
        ->where('id',$id)
        ->update(['publication_status' => 1]);
        session::put('message','Logo Active Successfully !!');
        return redirect()->route('admin.all_logo');
    }
    Public function edit_logo($id)
    {
        $logo_info=DB::table('tbl_logo_favicon')
                        ->where('id',$id)
                        ->first();
        $logo_info=view('admin.logofavicon.edit_logo')
        ->with('logo_info',$logo_info);
        return view('adlayouts.master')
        ->with('admin.logofavicon.edit_logo',$logo_info);
    }
    Public function update_logo(Request $request,$id)
    {
        $this->validate($request, [
        'logo'   => 'required',
    ]);
        $data=array();
        $image=$request->file('logo');
    if ($image){
        $image_name=Str::random(20);
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='imageSlider/';
        $image__url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
        if($success){
            $data['logo']=$image__url;
            DB::table('tbl_logo_favicon')
        ->where('id',$id)
        ->update($data);
        session::put('message','Logo Update Successfully!!');
        return redirect()->route('admin.all_logo');
        }
    }
    $data['logo']='';
     DB::table('tbl_logo_favicon')
        ->where('id',$id)
        ->update($data);
        session::put('message','Logo Not Update Successfully Without Image!!');
        return redirect()->route('admin.all_logo');
    }
    Public function delete_logo($id)
    {
        DB::table('tbl_logo_favicon')
        ->where('id',$id)
        ->delete();
        session::put('message','Logo Delete Successfully !!');
        return redirect()->route('admin.all_logo');
    }
}
