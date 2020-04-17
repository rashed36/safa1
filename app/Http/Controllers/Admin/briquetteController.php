<?php

namespace App\Http\Controllers\Admin;

use DB;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
session_start();

class briquetteController extends Controller
{
	   public function img_briquette()
    {
   return view('admin.briquette.add_pimg');
	}
    public function img_briquette_all()
    {
       $all_briquette_pimage_info=DB::table('briquette_pimage')->get();
        $manage_briquette_pimage=view('admin.briquette.all_pimage')
        ->with('all_briquette_pimage_info',$all_briquette_pimage_info);
        return view('layouts.master')
        ->with('admin.briquette.all_pimage',$manage_briquette_pimage);

    }
    public function save_briquetteImage(Request $request)
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
            DB::table('briquette_pimage')->insert($data);
            Session::put('message','Product Image Added Successfully!!');
            return redirect()->route('admin.img_briquette_all');
        }
        }
            $data['image']='';
            DB::table('briquette_pimage')->insert($data);
            Session::put('message','Product Image Not Added Successfully Without Image!!');
            return redirect()->route('admin.img_briquette_all');
    }
    public function unactive_briquette_pimage($id)
    {
        DB::table('briquette_pimage')
        ->where('id',$id)
        ->update(['publication_status' => 0]);
        session::put('message','Product Image Unactive Successfully !!');
        return redirect()->route('admin.img_briquette_all');
    }
    public function active_briquette_pimage($id)
    {
        DB::table('briquette_pimage')
        ->where('id',$id)
        ->update(['publication_status' => 1]);
        session::put('message','Product Image Active Successfully !!');
        return redirect()->route('admin.img_briquette_all');
    }
    Public function edit_briquette_pimage($id)
    {
        $all_briquette_pimage_info=DB::table('briquette_pimage')
                        ->where('id',$id)
                        ->first();
        $all_briquette_pimage_info=view('admin.briquette.update_pimg')
        ->with('all_briquette_pimage_info',$all_briquette_pimage_info);
        return view('layouts.master')
        ->with('admin.briquette.update_pimg',$all_briquette_pimage_info);
    }
    Public function update_briquette_pimage(Request $request,$id)
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
            DB::table('briquette_pimage')
        ->where('id',$id)
        ->update($data);
        session::put('message',' Product Image Update Successfully!!');
        return redirect()->route('admin.img_briquette_all');
        }
        }
        $data['image']='';
         DB::table('briquette_pimage')
        ->where('id',$id)
        ->update($data);
        session::put('message','Product Image Update Successfully Without Image!!');
        return redirect()->route('admin.img_briquette_all');
    }
    Public function delete_briquette_pimage($id)
    {
        DB::table('briquette_pimage')
        ->where('id',$id)
        ->delete();
        session::put('message','Product Image Delete Successfully !!');
                return redirect()->route('admin.img_briquette_all');
    }
    public function comparison_briquette_all()
    {
        $all_comparison_info=DB::table('briquette_comparison')->get();
        $manage_comparison=view('admin.briquette.all_briqutecompration')
        ->with('all_comparison_info',$all_comparison_info);
        return view('layouts.master')
        ->with('admin.briquette.all_briqutecompration',$manage_comparison);
    }
        public function comparison_briquette()
    {
   return view('admin.briquette.add_briqutecompration');
    }
    public function save_briquettecomparison(Request $request)
    {
        $this->validate($request, [
        'factor'   => 'required',
        'briquettes'   => 'required',
        'wood'   => 'required',
        'coal'   => 'required',
        'furnaceoid'   => 'required',
        ]);
        $data=array();
        $data['id']=$request->id;
        $data['factor']=$request->factor;
        $data['briquettes']=$request->briquettes;
        $data['wood']=$request->wood;
        $data['coal']=$request->coal;
        $data['furnaceoid']=$request->furnaceoid;
        DB::table('briquette_comparison')->insert($data);
        Session::put('message', 'Briquette Comparison Added Successfully !!');
        return redirect()->route('admin.comparison_briquette_all');
    }
     public function unactive_briquette_comparison($id)
    {
        DB::table('briquette_comparison')
        ->where('id',$id)
        ->update(['publication_status' => 0]);
        session::put('message','Briquette Comparison Unactive Successfully !!');
        return redirect()->route('admin.comparison_briquette_all');
    }
    public function active_briquette_comparison($id)
    {
        DB::table('briquette_comparison')
        ->where('id',$id)
        ->update(['publication_status' => 1]);
        session::put('message','Briquette Comparison Active Successfully !!');
        return redirect()->route('admin.comparison_briquette_all');
    }
    Public function edit_briquette_comparison($id)
    {
        $comparison_info=DB::table('briquette_comparison')
                        ->where('id',$id)
                        ->first();
        $comparison_info=view('admin.briquette.update_briqutecompration')
        ->with('comparison_info',$comparison_info);
        return view('layouts.master')
        ->with('admin.briquette.update_briqutecompration',$comparison_info);
    }
    Public function update_briquette_comparison(Request $request,$id)
    {
        $this->validate($request, [
        'factor'   => 'required',
        'briquettes'   => 'required',
        'wood'   => 'required',
        'coal'   => 'required',
        'furnaceoid'   => 'required',
        ]);
        $data=array();
        $data['factor']=$request->factor;
        $data['briquettes']=$request->briquettes;
        $data['wood']=$request->wood;
        $data['coal']=$request->coal;
        $data['furnaceoid']=$request->furnaceoid;
        DB::table('briquette_comparison')
        ->where('id',$id)
        ->update($data);
        session::put('message','Briquette Comparison Update Successfully!!');
        return redirect()->route('admin.comparison_briquette_all');
    }
    Public function delete_briquette_comparison($id)
    {
        DB::table('briquette_comparison')
        ->where('id',$id)
        ->delete();
        session::put('message','Briquette Comparison Delete Successfully !!');
                return redirect()->route('admin.comparison_briquette_all');
    }
    public function Industries_briquette_all()
    {
        $all_ipossible_info=DB::table('briquette_industries')->get();
        $manage_ipossible=view('admin.briquette.all_ipossible')
        ->with('all_ipossible_info',$all_ipossible_info);
        return view('layouts.master')
        ->with('admin.briquette.all_ipossible',$manage_ipossible);
    }
    public function Industries_briquette()
    {
   return view('admin.briquette.add_ipossible');
    }
    public function save_ipossible(Request $request)
    {
        $this->validate($request, [
        'name'   => 'required',
        'description'   => 'required',
        ]);
        $data=array();
        $data['id']=$request->id;
        $data['name']=$request->name;
        $data['description']=$request->description;
        DB::table('briquette_industries')->insert($data);
        Session::put('message', 'Industries and Possible Applications Added Successfully !!');
        return redirect()->route('admin.Industries_briquette_all');

    }
     public function unactive_ipossible($id)
    {
        DB::table('briquette_industries')
        ->where('id',$id)
        ->update(['publication_status' => 0]);
        session::put('message','Industries and Possible Applications Unactive Successfully !!');
        return redirect()->route('admin.Industries_briquette_all');
    }
    public function active_ipossible($id)
    {
        DB::table('briquette_industries')
        ->where('id',$id)
        ->update(['publication_status' => 1]);
        session::put('message','Industries and Possible Applications Active Successfully !!');
        return redirect()->route('admin.Industries_briquette_all');
    }
    Public function edit_ipossible($id)
    {
        $ipossible_info=DB::table('briquette_industries')
                        ->where('id',$id)
                        ->first();
        $ipossible_info=view('admin.briquette.update_ipossible')
        ->with('ipossible_info',$ipossible_info);
        return view('layouts.master')
        ->with('admin.briquette.update_ipossible',$ipossible_info);
    }
    Public function update_ipossible(Request $request,$id)
    {
        $this->validate($request, [
        'name'   => 'required',
        'description'   => 'required',
        ]);
        $data=array();
        $data['name']=$request->name;
        $data['description']=$request->description;
        DB::table('briquette_industries')
        ->where('id',$id)
        ->update($data);
        session::put('message','Industries and Possible Applications Update Successfully!!');
        return redirect()->route('admin.Industries_briquette_all');
    }
    Public function delete_ipossible($id)
    {
        DB::table('briquette_industries')
        ->where('id',$id)
        ->delete();
        session::put('message','Industries and Possible Applications Delete Successfully !!');
        return redirect()->route('admin.Industries_briquette_all');
    }
}
