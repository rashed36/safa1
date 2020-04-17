<?php

namespace App\Http\Controllers\Admin;

use DB;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
session_start();

class reasonController extends Controller
{
    public function index()
    {
    	$all_reason_info=DB::table('tbl_reason')->get();
    	$manage_reason=view('admin.reason.index')
    	->with('all_reason_info',$all_reason_info);
    	return view('layouts.master')
    	->with('admin.reason.index',$manage_reason);
   //return view('admin.category.index');
	}
	public function add_reason()
    {
  		return view('admin.reason.add_reason');
	}
	public function save_reason(Request $request)
    {
        $this->validate($request, [
        'reason'   => 'required',
        'details'   => 'required',
        ]);
        $data=array();
        $data['id']=$request->id;
        $data['reason']=$request->reason;
        $data['details']=$request->details;

        DB::table('tbl_reason')->insert($data);
        Session::put('message', 'Reason Added Successfully !!');
        return redirect()->route('admin.add_reason');
    }
    public function unactive_reason($id)
    {
        DB::table('tbl_reason')
        ->where('id',$id)
        ->update(['publication_status' => 0]);
        session::put('message','Reason Unactive Successfully !!');
        return redirect()->route('admin.all_reason');
    }
    public function active_reason($id)
    {
        DB::table('tbl_reason')
        ->where('id',$id)
        ->update(['publication_status' => 1]);
        session::put('message','Reason Active Successfully !!');
        return redirect()->route('admin.all_reason');
    }
    Public function edit_reason($id)
    {
        $reason_info=DB::table('tbl_reason')
                        ->where('id',$id)
                        ->first();
        $reason_info=view('admin.reason.edit_reason')
        ->with('reason_info',$reason_info);
        return view('layouts.master')
        ->with('admin.reason.edit_reason',$reason_info);
        //return view('admin.dashbord.edit_category');
    }
    Public function update_reason(Request $request,$id)
    {
         $this->validate($request, [
        'reason'   => 'required',
        'details'   => 'required',
        ]);
        $data=array();
        $data['reason']=$request->reason;
        $data['details']=$request->details;
        DB::table('tbl_reason')
        ->where('id',$id)
        ->update($data);
        session::put('message','Reason Update Successfully!!');
        return redirect()->route('admin.all_reason');
    }
    Public function delete_reason($id)
    {
        DB::table('tbl_reason')
        ->where('id',$id)
        ->delete();
        session::put('message','Reason Delete Successfully !!');
        return redirect()->route('admin.all_reason');
    }
}
