<?php

namespace App\Http\Controllers\Admin;

use DB;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
session_start();

class social_linkController extends Controller
{
	public function index()
    {
    	$all_social_link_info=DB::table('tbl_social_link')->get();
    	$manage_social_link=view('admin.socialLink.index')
    	->with('all_social_link_info',$all_social_link_info);
    	return view('layouts.master')
    	->with('admin.socialLink.index',$manage_social_link);
   //return view('admin.category.index');
	}
    public function links()
    {
  		return view('admin.socialLink.social_links');
	}

    public function save_social_link(Request $request)
    {
        $data=array();
        $data['id']=$request->id;
        $data['facebook']=$request->facebook;
        $data['twitter']=$request->twitter;
        $data['instagram']=$request->instagram;
        $data['linkedin']=$request->linkedin;
        DB::table('tbl_social_link')->insert($data);
        Session::put('message', 'Social Link Added Successfully !!');
        return redirect()->route('admin.social_link');
    }
    public function unactive_social_link($id)
    {
        DB::table('tbl_social_link')
        ->where('id',$id)
        ->update(['publication_status' => 0]);
        session::put('message','Social Link Unactive Successfully !!');
        return redirect()->route('admin.all_social_link');
    }
    public function active_social_link($id)
    {
        DB::table('tbl_social_link')
        ->where('id',$id)
        ->update(['publication_status' => 1]);
        session::put('message','Social Link Active Successfully !!');
        return redirect()->route('admin.all_social_link');
    }

     Public function edit_social_link($id)
    {
        $social_link_info=DB::table('tbl_social_link')
                        ->where('id',$id)
                        ->first();
        $social_link_info=view('admin.socialLink.edit_social_link')
        ->with('social_link_info',$social_link_info);
        return view('layouts.master')
        ->with('admin.socialLink.edit_social_link',$social_link_info);
        //return view('admin.dashbord.edit_category');
    }
    Public function update_social_link(Request $request,$id)
    {
        $data=array();
        $data['facebook']=$request->facebook;
        $data['twitter']=$request->twitter;
        $data['instagram']=$request->instagram;
        $data['linkedin']=$request->linkedin;
        DB::table('tbl_social_link')
        ->where('id',$id)
        ->update($data);
        session::put('message','Social Link Update Successfully!!');
        return redirect()->route('admin.all_social_link');
    }
    Public function delete_social_link($id)
    {
        DB::table('tbl_social_link')
        ->where('id',$id)
        ->delete();
        session::put('message','Social Link Delete Successfully !!');
                return redirect()->route('admin.all_social_link');
    }


	
}
