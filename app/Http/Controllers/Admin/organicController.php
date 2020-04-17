<?php

namespace App\Http\Controllers\Admin;

use DB;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
session_start();

class organicController extends Controller
{
	public function all_Pdescription_organic()
    {
          $all_Pdescription_info=DB::table('fabric_pdescription')->get();
        $manage_Pdescription=view('admin.organic.all_pdes')
        ->with('all_Pdescription_info',$all_Pdescription_info);
        return view('layouts.master')
        ->with('admin.organic.all_pdes',$manage_Pdescription);
	}
  public function Pdescription_organic()
    {
   return view('admin.organic.add_pdes');
  }

  public function save_Pdescription_organic(Request $request)
    {
        $this->validate($request, [
        'description'   => 'required',
    ]);
        $data=array();
        $data['id']=$request->id;
        $data['description']=$request->description;
        DB::table('fabric_pdescription')->insert($data);
        Session::put('message', 'Product Description Added Successfully !!');
        return redirect()->route('admin.all_Pdescription_organic');
    }
     public function unactive_Pdescription_organic($id)
    {
        DB::table('fabric_pdescription')
        ->where('id',$id)
        ->update(['publication_status' => 0]);
        session::put('message','Product Description Unactive Successfully !!');
        return redirect()->route('admin.all_Pdescription_organic');
    }
    public function active_Pdescription_organic($id)
    {
        DB::table('fabric_pdescription')
        ->where('id',$id)
        ->update(['publication_status' => 1]);
        session::put('message','Product Description Active Successfully !!');
        return redirect()->route('admin.all_Pdescription_organic');
    }
    Public function edit_Pdescription_organic($id)
    {
        $Pdescription_info=DB::table('fabric_pdescription')
                        ->where('id',$id)
                        ->first();
        $Pdescription_info=view('admin.organic.update_pdes')
        ->with('Pdescription_info',$Pdescription_info);
        return view('layouts.master')
        ->with('admin.organic.update_pdes',$Pdescription_info);
        //return view('admin.dashbord.edit_category');
    }
    Public function update_Pdescription_organic(Request $request,$id)
    {
        $this->validate($request, [
        'description'   => 'required',
    ]);
        $data=array();
        $data['description']=$request->description;
        DB::table('fabric_pdescription')
        ->where('id',$id)
        ->update($data);
        session::put('message','Product Description Update Successfully!!');
        return redirect()->route('admin.all_Pdescription_organic');
    }
    Public function delete_Pdescription_organic($id)
    {
        DB::table('fabric_pdescription')
        ->where('id',$id)
        ->delete();
        session::put('message','Product Description Delete Successfully !!');
                return redirect()->route('admin.all_Pdescription_organic');
    }
  // ...................................
	public function all_Pimage_organic()
    {
      $all_Pimage_info=DB::table('fabric_pimage')->get();
        $manage_Pimage=view('admin.organic.all_pimg')
        ->with('all_Pimage_info',$all_Pimage_info);
        return view('layouts.master')
        ->with('admin.organic.all_pimg',$manage_Pimage);
	}
  public function Pimage_organic()
    {
   return view('admin.organic.add_pimg');
  }

   public function save_Pimage_organic(Request $request)
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
            DB::table('fabric_pimage')->insert($data);
            Session::put('message','Product Image Added Successfully!!');
            return redirect()->route('admin.all_Pimage_organic');
        }
    }
    $data['image']='';
            DB::table('fabric_pimage')->insert($data);
            Session::put('message','Product Image Not Added Successfully Without Image!!');
            return redirect()->route('admin.all_Pimage_organic');
    }
    public function unactive_Pimage_organic($id)
    {
        DB::table('fabric_pimage')
        ->where('id',$id)
        ->update(['publication_status' => 0]);
        session::put('message','Product Image Unactive Successfully !!');
        return redirect()->route('admin.all_Pimage_organic');
    }
    public function active_Pimage_organic($id)
    {
        DB::table('fabric_pimage')
        ->where('id',$id)
        ->update(['publication_status' => 1]);
        session::put('message','Product Image Active Successfully !!');
        return redirect()->route('admin.all_Pimage_organic');
    }
    Public function edit_Pimage_organic($id)
    {
        $Pimage_info=DB::table('fabric_pimage')
                        ->where('id',$id)
                        ->first();
        $Pimage_info=view('admin.organic.update_pimg')
        ->with('Pimage_info',$Pimage_info);
        return view('layouts.master')
        ->with('admin.organic.update_pimg',$Pimage_info);
        //return view('admin.dashbord.edit_category');
    }
    Public function update_Pimage_organic(Request $request,$id)
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
            DB::table('fabric_pimage')
        ->where('id',$id)
        ->update($data);
        session::put('message',' Product Image Update Successfully!!');
        return redirect()->route('admin.all_Pimage_organic');
        }
    }
    $data['image']='';
     DB::table('fabric_pimage')
        ->where('id',$id)
        ->update($data);
        session::put('message','Product Image Update Successfully Without Image!!');
        return redirect()->route('admin.all_Pimage_organic');
    }
    Public function delete_Pimage_organic($id)
    {
        DB::table('fabric_pimage')
        ->where('id',$id)
        ->delete();
        session::put('message','Product Image Delete Successfully !!');
                return redirect()->route('admin.all_Pimage_organic');
    }
  // ...................................
	public function all_Specification_organic()
    {
      $all_Specification_info=DB::table('fabric_pspecifaction')->get();
        $manage_Specification=view('admin.organic.all_specifaction')
        ->with('all_Specification_info',$all_Specification_info);
        return view('layouts.master')
        ->with('admin.organic.all_specifaction',$manage_Specification);

	}
  public function Specification_organic()
    {
   return view('admin.organic.add_specifaction');
  }

  public function save_Specification_organic(Request $request)
    {
        $this->validate($request, [
        'name'   => 'required',
        'description'   => 'required',
    ]);
        $data=array();
        $data['id']=$request->id;
        $data['name']=$request->name;
        $data['description']=$request->description;
        DB::table('fabric_pspecifaction')->insert($data);
        Session::put('message', 'Product Specification Added Successfully !!');
        return redirect()->route('admin.all_Specification_organic');
    }
     public function unactive_Specification_organic($id)
    {
        DB::table('fabric_pspecifaction')
        ->where('id',$id)
        ->update(['publication_status' => 0]);
        session::put('message','Product Specification Unactive Successfully !!');
        return redirect()->route('admin.all_Specification_organic');
    }
    public function active_Specification_organic($id)
    {
        DB::table('fabric_pspecifaction')
        ->where('id',$id)
        ->update(['publication_status' => 1]);
        session::put('message','Product Specification Active Successfully !!');
        return redirect()->route('admin.all_Specification_organic');
    }
    Public function edit_Specification_organic($id)
    {
        $Specification_info=DB::table('fabric_pspecifaction')
                        ->where('id',$id)
                        ->first();
        $Specification_info=view('admin.organic.update_specifaction')
        ->with('Specification_info',$Specification_info);
        return view('layouts.master')
        ->with('admin.organic.update_specifaction',$Specification_info);
        //return view('admin.dashbord.edit_category');
    }
    Public function update_Specification_organic(Request $request,$id)
    {
        $this->validate($request, [
        'name'   => 'required',
        'description'   => 'required',
    ]);
        $data=array();
        $data['name']=$request->name;
        $data['description']=$request->description;
        DB::table('fabric_pspecifaction')
        ->where('id',$id)
        ->update($data);
        session::put('message','Product Specification Update Successfully!!');
        return redirect()->route('admin.all_Specification_organic');
    }
    Public function delete_Specification_organic($id)
    {
        DB::table('fabric_pspecifaction')
        ->where('id',$id)
        ->delete();
        session::put('message','Product Specification Delete Successfully !!');
                return redirect()->route('admin.all_Specification_organic');
    }
  // .....................................
	public function all_Parmeters_organic()
    {
      $all_Parmeters_info=DB::table('fabric_parameters')->get();
        $manage_Parmeters=view('admin.organic.all_parameters')
        ->with('all_Parmeters_info',$all_Parmeters_info);
        return view('layouts.master')
        ->with('admin.organic.all_parameters',$manage_Parmeters);
	}
  public function Parmeters_organic()
    {
   return view('admin.organic.add_parameters');
  }

  public function save_Parmeters_organic(Request $request)
    {
        $this->validate($request, [
        'name'   => 'required',
        'description'   => 'required',
    ]);
        $data=array();
        $data['id']=$request->id;
        $data['name']=$request->name;
        $data['description']=$request->description;
        DB::table('fabric_parameters')->insert($data);
        Session::put('message', 'Parameters of this product Added Successfully !!');
        return redirect()->route('admin.all_Parmeters_organic');
    }
     public function unactive_Parmeters_organic($id)
    {
        DB::table('fabric_parameters')
        ->where('id',$id)
        ->update(['publication_status' => 0]);
        session::put('message','Parameters of this productParameters of this product Unactive Successfully !!');
        return redirect()->route('admin.all_Parmeters_organic');
    }
    public function active_Parmeters_organic($id)
    {
        DB::table('fabric_parameters')
        ->where('id',$id)
        ->update(['publication_status' => 1]);
        session::put('message','Parameters of this productParameters of this product Active Successfully !!');
        return redirect()->route('admin.all_Parmeters_organic');
    }
    Public function edit_Parmeters_organic($id)
    {
        $parameters_info=DB::table('fabric_parameters')
                        ->where('id',$id)
                        ->first();
        $parameters_info=view('admin.organic.update_parameters')
        ->with('parameters_info',$parameters_info);
        return view('layouts.master')
        ->with('admin.organic.update_parameters',$parameters_info);
        //return view('admin.dashbord.edit_category');
    }
    Public function update_Parmeters_organic(Request $request,$id)
    {
        $this->validate($request, [
        'name'   => 'required',
        'description'   => 'required',
    ]);
        $data=array();
        $data['name']=$request->name;
        $data['description']=$request->description;
        DB::table('fabric_parameters')
        ->where('id',$id)
        ->update($data);
        session::put('message','Parameters of this product Update Successfully!!');
        return redirect()->route('admin.all_Parmeters_organic');
    }
    Public function delete_Parmeters_organic($id)
    {
        DB::table('fabric_parameters')
        ->where('id',$id)
        ->delete();
        session::put('message','Parameters of this product Delete Successfully !!');
                return redirect()->route('admin.all_Parmeters_organic');
    }
  // .................
	public function all_Advantages_organic()
    {
      $all_Advantages_info=DB::table('advantages')->get();
        $manage_Advantages=view('admin.organic.all_advantage')
        ->with('all_Advantages_info',$all_Advantages_info);
        return view('layouts.master')
        ->with('admin.organic.all_advantage',$manage_Advantages);
	}
  public function Advantages_organic()
    {
   return view('admin.organic.add_advantage');
  }

  public function save_Advantages(Request $request)
    {
        $this->validate($request, [
        'description'   => 'required',
    ]);
        $data=array();
        $data['id']=$request->id;
        $data['description']=$request->description;
        DB::table('advantages')->insert($data);
        Session::put('message', 'Product Advantages Added Successfully !!');
        return redirect()->route('admin.all_Advantages_organic');
    }
     public function unactive_Advantages($id)
    {
        DB::table('advantages')
        ->where('id',$id)
        ->update(['publication_status' => 0]);
        session::put('message','Product Advantages Unactive Successfully !!');
        return redirect()->route('admin.all_Advantages_organic');
    }
    public function active_Advantages($id)
    {
        DB::table('advantages')
        ->where('id',$id)
        ->update(['publication_status' => 1]);
        session::put('message','Product Advantages Active Successfully !!');
        return redirect()->route('admin.all_Advantages_organic');
    }
    Public function edit_Advantages($id)
    {
        $Advantages_info=DB::table('advantages')
                        ->where('id',$id)
                        ->first();
        $Advantages_info=view('admin.organic.update_advantage')
        ->with('Advantages_info',$Advantages_info);
        return view('layouts.master')
        ->with('admin.organic.update_advantage',$Advantages_info);
        //return view('admin.dashbord.edit_category');
    }
    Public function update_Advantages(Request $request,$id)
    {
        $this->validate($request, [
        'description'   => 'required',
    ]);
        $data=array();
        $data['description']=$request->description;
        DB::table('advantages')
        ->where('id',$id)
        ->update($data);
        session::put('message','Product Advantages Update Successfully!!');
        return redirect()->route('admin.all_Advantages_organic');
    }
    Public function delete_Advantages($id)
    {
        DB::table('advantages')
        ->where('id',$id)
        ->delete();
        session::put('message','Product Advantages Delete Successfully !!');
                return redirect()->route('admin.all_Advantages_organic');
    }
  // ......................................
	public function all_FAQ_organic()
    {
      $all_FAQ_organic_info=DB::table('faq')->get();
        $manage_FAQ_organic=view('admin.organic.all_faq')
        ->with('all_FAQ_organic_info',$all_FAQ_organic_info);
        return view('layouts.master')
        ->with('admin.organic.all_faq',$manage_FAQ_organic);

	}
  public function FAQ_organic()
    {
   return view('admin.organic.add_faq');
  }

    public function save_FAQ_organic(Request $request)
    {
        $this->validate($request, [
        'qusno'   => 'required',
        'qus'   => 'required',
        'ans'   => 'required',
    ]);
        $data=array();
        $data['id']=$request->id;
        $data['qusno']=$request->qusno;
        $data['qus']=$request->qus;
        $data['ans']=$request->ans;
        DB::table('faq')->insert($data);
        Session::put('message', 'Product FAQ Added Successfully !!');
        return redirect()->route('admin.all_FAQ_organic');
    }
     public function unactive_FAQ_organic($id)
    {
        DB::table('faq')
        ->where('id',$id)
        ->update(['publication_status' => 0]);
        session::put('message','Product FAQ Unactive Successfully !!');
        return redirect()->route('admin.all_FAQ_organic');
    }
    public function active_FAQ_organic($id)
    {
        DB::table('faq')
        ->where('id',$id)
        ->update(['publication_status' => 1]);
        session::put('message','Product FAQ Active Successfully !!');
        return redirect()->route('admin.all_FAQ_organic');
    }
    Public function edit_FAQ_organic($id)
    {
        $FAQ_organic_info=DB::table('faq')
                        ->where('id',$id)
                        ->first();
        $FAQ_organic_info=view('admin.organic.update_faq')
        ->with('FAQ_organic_info',$FAQ_organic_info);
        return view('layouts.master')
        ->with('admin.organic.update_faq',$FAQ_organic_info);
        //return view('admin.dashbord.edit_category');
    }
    Public function update_FAQ_organic(Request $request,$id)
    {
        $this->validate($request, [
        'qusno'   => 'required',
        'qus'   => 'required',
        'ans'   => 'required',
    ]);
        $data=array();
        $data['qusno']=$request->qusno;
        $data['qus']=$request->qus;
        $data['ans']=$request->ans;
        DB::table('faq')
        ->where('id',$id)
        ->update($data);
        session::put('message','Product FAQ Update Successfully!!');
        return redirect()->route('admin.all_FAQ_organic');
    }
    Public function delete_FAQ_organic($id)
    {
        DB::table('faq')
        ->where('id',$id)
        ->delete();
        session::put('message','Product FAQ Delete Successfully !!');
                return redirect()->route('admin.all_FAQ_organic');
    }
}
