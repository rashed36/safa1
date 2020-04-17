<?php

namespace App\Http\Controllers\Admin;
use DB;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
session_start();

class categoryController extends Controller
{
    public function index()
    {
    	$all_category_info=DB::table('tbl_category')->get();
    	$manage_category=view('admin.category.index')
    	->with('all_category_info',$all_category_info);
    	return view('layouts.master')
    	->with('admin.category.index',$manage_category);
	}
	 public function add_category()
    {
   return view('admin.category.add_category');
	}
	public function save_category(Request $request)
    {
    	$this->validate($request, [
        'category_name'   => 'required',
        'category_description'   => 'required',
        ]);

    	$data=array();
    	$data['catagery_id']=$request->category_id;
    	$data['catagery_name']=$request->category_name;
    	$data['catagery_description']=$request->category_description;
            DB::table('tbl_category')->insert($data);
    	Session::put('message', 'Category Added Successfully !!');
    	return redirect()->route('admin.add_category');
    }
    public function unactive_category($category_id)
    {
        DB::table('tbl_category')
        ->where('catagery_id',$category_id)
        ->update(['publication_status' => 0]);
        session::put('message','Category Unactive Successfully !!');
        return redirect()->route('admin.all_category');
    }
    public function active_category($category_id)
    {
        DB::table('tbl_category')
        ->where('catagery_id',$category_id)
        ->update(['publication_status' => 1]);
        session::put('message','Category Active Successfully !!');
        return redirect()->route('admin.all_category');
    }
    Public function edit_category($category_id)
    {
        $category_info=DB::table('tbl_category')
                        ->where('catagery_id',$category_id)
                        ->first();
        $category_info=view('admin.category.edit_category')
        ->with('category_info',$category_info);
        return view('layouts.master')
        ->with('admin.category.edit_category',$category_info);
        //return view('admin.dashbord.edit_category');
    }
    Public function update_category(Request $request,$category_id)
    {
        $this->validate($request, [
        'category_name'   => 'required',
        'category_description'   => 'required',
        ]);
        $data=array();
        $data['catagery_name']=$request->category_name;
        $data['catagery_description']=$request->category_description;

        DB::table('tbl_category')
        ->where('catagery_id',$category_id)
        ->update($data);
        session::put('message','Category Update Successfully!!');
        return redirect()->route('admin.all_category');
    }
    Public function delete_category($category_id)
    {
        DB::table('tbl_category')
        ->where('catagery_id',$category_id)
        ->delete();
        session::put('message','Category Delete Successfully !!');
        return redirect()->route('admin.all_category');
    }
}

