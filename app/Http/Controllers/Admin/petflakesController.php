<?php

namespace App\Http\Controllers\Admin;

use DB;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
session_start();

class petflakesController extends Controller
{
        public function all_petImage()
    {
        $all_pet_pimage_info=DB::table('pet_pimage')->get();
        $manage_pet_pimage=view('admin.PetFlakes.all_pimg')
        ->with('all_pet_pimage_info',$all_pet_pimage_info);
        return view('layouts.master')
        ->with('admin.PetFlakes.all_pimg',$manage_pet_pimage);
    }
	      public function add_petImage()
    {
   return view('admin.PetFlakes.add_pimg');
	}
        public function save_petImage(Request $request)
    {
        $this->validate($request, [
        'image'   => 'required',
        ]);
        $data=array();
        $data['id']=$request->id;
        $image=$request->file('image');
        if ($image){
        $image_name=Str::random(20);
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='imageSlider/';
        $image__url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
        if($success){
            $data['image']=$image__url;
            DB::table('pet_pimage')->insert($data);
            Session::put('message','Product Image Added Successfully!!');
            return redirect()->route('admin.all_petImage');
        }
        }
        $data['image']='';
            DB::table('pet_pimage')->insert($data);
            Session::put('message','Product Image Not Added Successfully Without Image!!');
            return redirect()->route('admin.all_petImage');
    }
    public function unactive_pet_pimage($id)
    {
        DB::table('pet_pimage')
        ->where('id',$id)
        ->update(['publication_status' => 0]);
        session::put('message','Product Image Unactive Successfully !!');
        return redirect()->route('admin.all_petImage');
    }
    public function active_pet_pimage($id)
    {
        DB::table('pet_pimage')
        ->where('id',$id)
        ->update(['publication_status' => 1]);
        session::put('message','Product Image Active Successfully !!');
        return redirect()->route('admin.all_petImage');
    }
    Public function edit_pet_pimage($id)
    {
        $pet_pimage_info=DB::table('pet_pimage')
                        ->where('id',$id)
                        ->first();
        $pet_pimage_info=view('admin.PetFlakes.update_pimg')
        ->with('pet_pimage_info',$pet_pimage_info);
        return view('layouts.master')
        ->with('admin.PetFlakes.update_pimg',$pet_pimage_info);
        //return view('admin.dashbord.edit_category');
    }
    Public function update_pet_pimage(Request $request,$id)
    {
                $this->validate($request, [
        'image'   => 'required',
        ]);
        $data=array();
        $image=$request->file('image');
        if ($image){
        $image_name=Str::random(20);
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='imageSlider/';
        $image__url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
        if($success){
            $data['image']=$image__url;
            DB::table('pet_pimage')
        ->where('id',$id)
        ->update($data);
        session::put('message',' Product Image Update Successfully!!');
        return redirect()->route('admin.all_petImage');
        }
        }
        $data['image']='';
        DB::table('pet_pimage')
        ->where('id',$id)
        ->update($data);
        session::put('message','Product Image Update Successfully Without Image!!');
        return redirect()->route('admin.all_petImage');
    }
    Public function delete_pet_pimage($id)
    {
        DB::table('pet_pimage')
        ->where('id',$id)
        ->delete();
        session::put('message','Product Image Delete Successfully !!');
                return redirect()->route('admin.all_petImage');
    }
    public function all_petspecifaction()
    {
       $all_details_info=DB::table('pet_specifacation')->get();
        $manage_details=view('admin.PetFlakes.all_specifaction')
        ->with('all_details_info',$all_details_info);
        return view('layouts.master')
        ->with('admin.PetFlakes.all_specifaction',$manage_details);
    }
	public function add_petspecifaction()
    {
   return view('admin.PetFlakes.add_specifaction');
	}
    public function save_specification(Request $request)
    {
        $this->validate($request, [
        'name'   => 'required',
        'details'   => 'required',
        ]);
        $data=array();
        $data['id']=$request->id;
        $data['name']=$request->name;
        $data['details']=$request->details;
        DB::table('pet_specifacation')->insert($data);
        Session::put('message', 'Product Specification Added Successfully !!');
        return redirect()->route('admin.all_petspecifaction');
    }
     public function unactive_petspecifaction($id)
    {
        DB::table('pet_specifacation')
        ->where('id',$id)
        ->update(['publication_status' => 0]);
        session::put('message','Product Specifaction Unactive Successfully !!');
        return redirect()->route('admin.all_petspecifaction');
    }
    public function active_petspecifaction($id)
    {
        DB::table('pet_specifacation')
        ->where('id',$id)
        ->update(['publication_status' => 1]);
        session::put('message','Product Specifaction Active Successfully !!');
        return redirect()->route('admin.all_petspecifaction');
    }
    Public function edit_petspecifaction($id)
    {
        $specifaction_info=DB::table('pet_specifacation')
                        ->where('id',$id)
                        ->first();
        $specifaction_info=view('admin.PetFlakes.update_specifaction')
        ->with('specifaction_info',$specifaction_info);
        return view('layouts.master')
        ->with('admin.PetFlakes.update_specifaction',$specifaction_info);
        //return view('admin.dashbord.edit_category');
    }
    Public function update_specification(Request $request,$id)
    {
        $this->validate($request, [
        'name'   => 'required',
        'details'   => 'required',
        ]);
        $data=array();
        $data['name']=$request->name;
        $data['details']=$request->details;
        DB::table('pet_specifacation')
        ->where('id',$id)
        ->update($data);
        session::put('message','Product Specifaction Update Successfully!!');
        return redirect()->route('admin.all_petspecifaction');
    }
    Public function delete_petspecifaction($id)
    {
        DB::table('pet_specifacation')
        ->where('id',$id)
        ->delete();
        session::put('message','Product Specifaction Delete Successfully !!');
        return redirect()->route('admin.all_petspecifaction');
    }

}
