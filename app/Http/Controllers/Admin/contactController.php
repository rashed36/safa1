<?php

namespace App\Http\Controllers\Admin;

use DB;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
session_start();

class contactController extends Controller
{
   public function index()
    {
    	$all_contact_info=DB::table('tbl_contact')->get();
    	$manage_contact=view('admin.contact.index')
    	->with('all_contact_info',$all_contact_info);
    	return view('layouts.master')
    	->with('admin.contact.index',$manage_contact);
	}
	public function add_contact()
    {
  		return view('admin.contact.contact');
	}
	public function save_contact(Request $request)
    {
        $this->validate($request, [
        'phone'   => 'required',
        'email'   => 'required',
        'address'   => 'required',
        ]);
        $data=array();
        $data['id']=$request->id;
        $data['phone']=$request->phone;
        $data['fax']=$request->fax;
        $data['whatsapp']=$request->whatsapp;
        $data['skype']=$request->skype;
        $data['email']=$request->email;
        $data['address']=$request->address;
        DB::table('tbl_contact')->insert($data);
        Session::put('message', 'Contact Added Successfully !!');
        return redirect()->route('admin.add_contact');
    }
    public function unactive_contact($id)
    {
        DB::table('tbl_contact')
        ->where('id',$id)
        ->update(['publication_status' => 0]);
        session::put('message','Contact Unactive Successfully !!');
        return redirect()->route('admin.all_contact');
    }
    public function active_contact($id)
    {
        DB::table('tbl_contact')
        ->where('id',$id)
        ->update(['publication_status' => 1]);
        session::put('message','Contact Active Successfully !!');
        return redirect()->route('admin.all_contact');
    }
    Public function edit_contact($id)
    {
        $contact_info=DB::table('tbl_contact')
                        ->where('id',$id)
                        ->first();
        $contact_info=view('admin.contact.edit_contact')
        ->with('contact_info',$contact_info);
        return view('layouts.master')
        ->with('admin.contact.edit_contact',$contact_info);
    }
    Public function update_contact(Request $request,$id)
    {
       $this->validate($request, [
        'phone'   => 'required',
        'email'   => 'required',
        'address'   => 'required',
        ]);
        $data=array();
        $data['phone']=$request->phone;
        $data['fax']=$request->fax;
        $data['whatsapp']=$request->whatsapp;
        $data['skype']=$request->skype;
        $data['email']=$request->email;
        $data['address']=$request->address;
        DB::table('tbl_contact')
        ->where('id',$id)
        ->update($data);
        session::put('message','Contact Update Successfully!!');
        return redirect()->route('admin.all_contact');
    }
    Public function delete_contact($id)
    {
        DB::table('tbl_contact')
        ->where('id',$id)
        ->delete();
        session::put('message','Contact Delete Successfully !!');
                return redirect()->route('admin.all_contact');
    }
}
