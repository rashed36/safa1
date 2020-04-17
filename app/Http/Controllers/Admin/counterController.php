<?php

namespace App\Http\Controllers\Admin;

use DB;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
session_start();

class counterController extends Controller
{
    public function index()
    {
    	$all_counter_info=DB::table('tbl_counter')->get();
    	$manage_counter=view('admin.counter.index')
    	->with('all_counter_info',$all_counter_info);
    	return view('layouts.master')
    	->with('admin.counter.index',$manage_counter);
	}
	public function add_counter()
    {
  		return view('admin.counter.add_counter');
	}
	public function save_counter(Request $request)
    {
        $this->validate($request, [
        'establishment'   => 'required',
        'employees'   => 'required',
        'countries'   => 'required',
        ]);
        $data=array();
        $data['id']=$request->id;
        $data['establishment']=$request->establishment;
        $data['employees']=$request->employees;
        $data['countries']=$request->countries;
        DB::table('tbl_counter')->insert($data);
        Session::put('message', 'Counter Added Successfully !!');
        return redirect()->route('admin.add_counter');
    }
    public function unactive_counter($id)
    {
        DB::table('tbl_counter')
        ->where('id',$id)
        ->update(['publication_status' => 0]);
        session::put('message','Counter Unactive Successfully !!');
        return redirect()->route('admin.all_counter');
    }
    public function active_counter($id)
    {
        DB::table('tbl_counter')
        ->where('id',$id)
        ->update(['publication_status' => 1]);
        session::put('message','Counter Active Successfully !!');
        return redirect()->route('admin.all_counter');
    }
    Public function edit_counter($id)
    {
        $counter_info=DB::table('tbl_counter')
                        ->where('id',$id)
                        ->first();
        $counter_info=view('admin.counter.edit_counter')
        ->with('counter_info',$counter_info);
        return view('layouts.master')
        ->with('admin.counter.edit_counter',$counter_info);
    }
    Public function update_counter(Request $request,$id)
    {
      $this->validate($request, [
        'establishment'   => 'required',
        'employees'   => 'required',
        'countries'   => 'required',
        ]);
        $data=array();
        $data['establishment']=$request->establishment;
        $data['employees']=$request->employees;
        $data['countries']=$request->countries;
        DB::table('tbl_counter')
        ->where('id',$id)
        ->update($data);
        session::put('message','Counter Update Successfully!!');
        return redirect()->route('admin.all_counter');
    }
    Public function delete_counter($id)
    {
        DB::table('tbl_counter')
        ->where('id',$id)
        ->delete();
        session::put('message','Counter Delete Successfully !!');
        return redirect()->route('admin.all_counter');
    }
}
