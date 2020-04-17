<?php

namespace App\Http\Controllers\Admin;

use DB;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
session_start();

class PaperConsController extends Controller
{
  // .................... Product Description...........
	 public function all_PDescribe_paperCons()
    {
       $all_pdescribe_info=DB::table('cons_pdescribe')->get();
        $manage_pdescribe=view('admin.paper_cons.all_pdescrive')
        ->with('all_pdescribe_info',$all_pdescribe_info);
        return view('layouts.master')
        ->with('admin.paper_cons.all_pdescrive',$manage_pdescribe);
	}
  public function PDescribe_paperCons()
    {
   return view('admin.paper_cons.add_pdescrive');
  }
    public function save_PDescribe_paperCons(Request $request)
    {
        $this->validate($request, [
        'description'   => 'required',
    ]);
        $data=array();
        $data['id']=$request->id;
        $data['description']=$request->description;
        DB::table('cons_pdescribe')->insert($data);
        Session::put('message', 'Product Description Added Successfully !!');
        return redirect()->route('admin.all_PDescribe_paperCons');
    }
     public function unactive_PDescribe_paperCons($id)
    {
        DB::table('cons_pdescribe')
        ->where('id',$id)
        ->update(['publication_status' => 0]);
        session::put('message','Product Description Unactive Successfully !!');
        return redirect()->route('admin.all_PDescribe_paperCons');
    }
    public function active_PDescribe_paperCons($id)
    {
        DB::table('cons_pdescribe')
        ->where('id',$id)
        ->update(['publication_status' => 1]);
        session::put('message','Product Description Active Successfully !!');
        return redirect()->route('admin.all_PDescribe_paperCons');
    }
    Public function edit_PDescribe_paperCons($id)
    {
        $pdescribe_info=DB::table('cons_pdescribe')
                        ->where('id',$id)
                        ->first();
        $pdescribe_info=view('admin.paper_cons.update_pdescrive')
        ->with('pdescribe_info',$pdescribe_info);
        return view('layouts.master')
        ->with('admin.paper_cons.update_pdescrive',$pdescribe_info);
        //return view('admin.dashbord.edit_category');
    }
    Public function update_PDescribe_paperCons(Request $request,$id)
    {
        $this->validate($request, [
        'description'   => 'required',
    ]);
        $data=array();
        $data['description']=$request->description;
        DB::table('cons_pdescribe')
        ->where('id',$id)
        ->update($data);
        session::put('message','Product Description Update Successfully!!');
        return redirect()->route('admin.all_PDescribe_paperCons');
    }
    Public function delete_PDescribe_paperCons($id)
    {
        DB::table('cons_pdescribe')
        ->where('id',$id)
        ->delete();
        session::put('message','Product Description Delete Successfully !!');
                return redirect()->route('admin.all_PDescribe_paperCons');
    }
  // .................... Product Image................
	 public function all_Pimage_paperCons()
    {
        $all_cons_pimage_info=DB::table('cons_pimage')->get();
        $manage_cons_pimage=view('admin.paper_cons.all_pimg')
        ->with('all_cons_pimage_info',$all_cons_pimage_info);
        return view('layouts.master')
        ->with('admin.paper_cons.all_pimg',$manage_cons_pimage);
	}
  public function Pimage_paperCons()
    {
   return view('admin.paper_cons.add_pimg');
  }

        public function save_Pimage_paperCons(Request $request)
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
            DB::table('cons_pimage')->insert($data);
            Session::put('message','Product Image Added Successfully!!');
            return redirect()->route('admin.all_Pimage_paperCons');
        }
    }
    $data['image']='';
            DB::table('cons_pimage')->insert($data);
            Session::put('message','Product Image Not Added Successfully Without Image!!');
            return redirect()->route('admin.all_Pimage_paperCons');
    }
    public function unactive_Pimage_paperCons($id)
    {
        DB::table('cons_pimage')
        ->where('id',$id)
        ->update(['publication_status' => 0]);
        session::put('message','Product Image Unactive Successfully !!');
        return redirect()->route('admin.all_Pimage_paperCons');
    }
    public function active_Pimage_paperCons($id)
    {
        DB::table('cons_pimage')
        ->where('id',$id)
        ->update(['publication_status' => 1]);
        session::put('message','Product Image Active Successfully !!');
        return redirect()->route('admin.all_Pimage_paperCons');
    }
    Public function edit_Pimage_paperCons($id)
    {
        $cons_pimage_info=DB::table('cons_pimage')
                        ->where('id',$id)
                        ->first();
        $cons_pimage_info=view('admin.paper_cons.update_pimg')
        ->with('cons_pimage_info',$cons_pimage_info);
        return view('layouts.master')
        ->with('admin.paper_cons.update_pimg',$cons_pimage_info);
        //return view('admin.dashbord.edit_category');
    }
    Public function update_Pimage_paperCons(Request $request,$id)
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
            DB::table('cons_pimage')
        ->where('id',$id)
        ->update($data);
        session::put('message',' Product Image Update Successfully!!');
        return redirect()->route('admin.all_Pimage_paperCons');
        }
    }
    $data['image']='';
     DB::table('cons_pimage')
        ->where('id',$id)
        ->update($data);
        session::put('message','Product Image Update Successfully Without Image!!');
        return redirect()->route('admin.all_Pimage_paperCons');
    }
    Public function delete_Pimage_paperCons($id)
    {
        DB::table('cons_pimage')
        ->where('id',$id)
        ->delete();
        session::put('message','Product Image Delete Successfully !!');
                return redirect()->route('admin.all_Pimage_paperCons');
    }

  // .................... Product Features...................
	 public function all_Features_paperCons()
    {
         $all_features_info=DB::table('cons_features')->get();
        $manage_features=view('admin.paper_cons.all_feature')
        ->with('all_features_info',$all_features_info);
        return view('layouts.master')
        ->with('admin.paper_cons.all_feature',$manage_features);
	}
  public function Features_paperCons()
    {
   return view('admin.paper_cons.add_feature');
  }
    public function save_Features_paperCons(Request $request)
    {
        $this->validate($request, [
        'description'   => 'required',
    ]);
        $data=array();
        $data['id']=$request->id;
        $data['description']=$request->description;

        DB::table('cons_features')->insert($data);
        Session::put('message', 'Product Features Added Successfully !!');
        return redirect()->route('admin.all_Features_paperCons');
    }
     public function unactive_Features_paperCons($id)
    {
        DB::table('cons_features')
        ->where('id',$id)
        ->update(['publication_status' => 0]);
        session::put('message','Product Features Unactive Successfully !!');
        return redirect()->route('admin.all_Features_paperCons');
    }
    public function active_Features_paperCons($id)
    {
        DB::table('cons_features')
        ->where('id',$id)
        ->update(['publication_status' => 1]);
        session::put('message','Product Features Active Successfully !!');
        return redirect()->route('admin.all_Features_paperCons');
    }
    Public function edit_Features_paperCons($id)
    {
        $Features_info=DB::table('cons_features')
                        ->where('id',$id)
                        ->first();
        $Features_info=view('admin.paper_cons.update_feature')
        ->with('Features_info',$Features_info);
        return view('layouts.master')
        ->with('admin.paper_cons.update_feature',$Features_info);
        //return view('admin.dashbord.edit_category');
    }
    Public function update_Features_paperCons(Request $request,$id)
    {
        $this->validate($request, [
        'description'   => 'required',
    ]);
        $data=array();
        $data['description']=$request->description;

        DB::table('cons_features')
        ->where('id',$id)
        ->update($data);
        session::put('message','Product Features Update Successfully!!');
        return redirect()->route('admin.all_Features_paperCons');
    }
    Public function delete_Features_paperCons($id)
    {
        DB::table('cons_features')
        ->where('id',$id)
        ->delete();
        session::put('message','Product Features Delete Successfully !!');
                return redirect()->route('admin.all_Features_paperCons');
    }
  // .................... Specification ...................
	 public function all_Specification_paperCons()
    {
           $all_specifaction_info=DB::table('cons_specifaction')->get();
        $manage_specifaction=view('admin.paper_cons.all_specifaction')
        ->with('all_specifaction_info',$all_specifaction_info);
        return view('layouts.master')
        ->with('admin.paper_cons.all_specifaction',$manage_specifaction);

	}
  public function Specification_paperCons()
    {
   return view('admin.paper_cons.add_specifaction');
  }
    public function save_Specification_paperCons(Request $request)
    {
        $this->validate($request, [
        'name'   => 'required',
        'description'   => 'required',
    ]);
        $data=array();
        $data['id']=$request->id;
        $data['name']=$request->name;
        $data['description']=$request->description;
        DB::table('cons_specifaction')->insert($data);
        Session::put('message', 'Product Specification Added Successfully !!');
        return redirect()->route('admin.all_Specification_paperCons');
    }
     public function unactive_Specification_paperCons($id)
    {
        DB::table('cons_specifaction')
        ->where('id',$id)
        ->update(['publication_status' => 0]);
        session::put('message','Product Specification Unactive Successfully !!');
        return redirect()->route('admin.all_Specification_paperCons');
    }
    public function active_Specification_paperCons($id)
    {
        DB::table('cons_specifaction')
        ->where('id',$id)
        ->update(['publication_status' => 1]);
        session::put('message','Product Specification Active Successfully !!');
        return redirect()->route('admin.all_Specification_paperCons');
    }
    Public function edit_Specification_paperCons($id)
    {
        $specifaction_info=DB::table('cons_specifaction')
                        ->where('id',$id)
                        ->first();
        $specifaction_info=view('admin.paper_cons.update_specifaction')
        ->with('specifaction_info',$specifaction_info);
        return view('layouts.master')
        ->with('admin.paper_cons.update_specifaction',$specifaction_info);
        //return view('admin.dashbord.edit_category');
    }
    Public function update_Specification_paperCons(Request $request,$id)
    {
        $this->validate($request, [
        'name'   => 'required',
        'description'   => 'required',
    ]);
        $data=array();
        $data['name']=$request->name;
        $data['description']=$request->description;
        DB::table('cons_specifaction')
        ->where('id',$id)
        ->update($data);
        session::put('message','Product Specification Update Successfully!!');
        return redirect()->route('admin.all_Specification_paperCons');
    }
    Public function delete_Specification_paperCons($id)
    {
        DB::table('cons_specifaction')
        ->where('id',$id)
        ->delete();
        session::put('message','Product Specification Delete Successfully !!');
                return redirect()->route('admin.all_Specification_paperCons');
    }
  // ................... Product Applications...................
	 public function all_Applications_paperCons()
    {
      $all_Applications_info=DB::table('cons_application')->get();
        $manage_Applications=view('admin.paper_cons.all_application')
        ->with('all_Applications_info',$all_Applications_info);
        return view('layouts.master')
        ->with('admin.paper_cons.all_application',$manage_Applications);

   return view('admin.paper_cons.all_application');
	}
   public function Applications_paperCons()
    {
   return view('admin.paper_cons.add_application');
  }

    public function save_Applications_paperCons(Request $request)
    {
        $this->validate($request, [
        'description'   => 'required',
    ]);
        $data=array();
        $data['id']=$request->id;
        $data['description']=$request->description;
        DB::table('cons_application')->insert($data);
        Session::put('message', 'Product Applications Added Successfully !!');
        return redirect()->route('admin.all_Applications_paperCons');
    }
     public function unactive_Applications_paperCons($id)
    {
        DB::table('cons_application')
        ->where('id',$id)
        ->update(['publication_status' => 0]);
        session::put('message','Product Applications Unactive Successfully !!');
        return redirect()->route('admin.all_Applications_paperCons');
    }
    public function active_Applications_paperCons($id)
    {
        DB::table('cons_application')
        ->where('id',$id)
        ->update(['publication_status' => 1]);
        session::put('message','Product Applications Active Successfully !!');
        return redirect()->route('admin.all_Applications_paperCons');
    }
    Public function edit_Applications_paperCons($id)
    {
        $Applications_info=DB::table('cons_application')
                        ->where('id',$id)
                        ->first();
        $Applications_info=view('admin.paper_cons.update_application')
        ->with('Applications_info',$Applications_info);
        return view('layouts.master')
        ->with('admin.paper_cons.update_application',$Applications_info);
        //return view('admin.dashbord.edit_category');
    }
    Public function update_Applications_paperCons(Request $request,$id)
    {
        $this->validate($request, [
        'description'   => 'required',
    ]);
        $data=array();
        $data['description']=$request->description;
        DB::table('cons_application')
        ->where('id',$id)
        ->update($data);
        session::put('message','Product Applications Update Successfully!!');
        return redirect()->route('admin.all_Applications_paperCons');
    }
    Public function delete_Applications_paperCons($id)
    {
        DB::table('cons_application')
        ->where('id',$id)
        ->delete();
        session::put('message','Product Applications Delete Successfully !!');
                return redirect()->route('admin.all_Applications_paperCons');
    }
  // .................... Product Overview...................
	 public function all_POverview_paperCons()
    {
      $all_POverview_info=DB::table('cons_overview')->get();
        $manage_POverview=view('admin.paper_cons.all_poverviuew')
        ->with('all_POverview_info',$all_POverview_info);
        return view('layouts.master')
        ->with('admin.paper_cons.all_poverviuew',$manage_POverview);
	}
  public function POverview_paperCons()
    {
   return view('admin.paper_cons.add_poverviuew');
  }

    public function save_POverview_paperCons(Request $request)
    {
 
        $this->validate($request, [
        'productAngle'   => 'required',
        'length'   => 'required',
        'weight'   => 'required',
        'insidebase'   => 'required',
        'finish'   => 'required',
    ]);
        $data=array();
        $data['id']=$request->id;
        $data['product_angle']=$request->productAngle ;
        $data['length']=$request->length;
        $data['weight']=$request->weight;
        $data['insidebase']=$request->insidebase;
        $data['finish']=$request->finish;
        DB::table('cons_overview')->insert($data);
        Session::put('message', 'Product Overview Added Successfully !!');
        return redirect()->route('admin.all_POverview_paperCons');
    }
     public function unactive_POverview_paperCons($id)
    {
        DB::table('cons_overview')
        ->where('id',$id)
        ->update(['publication_status' => 0]);
        session::put('message','Product Overview Unactive Successfully !!');
        return redirect()->route('admin.all_POverview_paperCons');
    }
    public function active_POverview_paperCons($id)
    {
        DB::table('cons_overview')
        ->where('id',$id)
        ->update(['publication_status' => 1]);
        session::put('message','Product Overview Active Successfully !!');
        return redirect()->route('admin.all_POverview_paperCons');
    }
    Public function edit_POverview_paperCons($id)
    {
        $POverview_info=DB::table('cons_overview')
                        ->where('id',$id)
                        ->first();
        $POverview_info=view('admin.paper_cons.update_poverviuew')
        ->with('POverview_info',$POverview_info);
        return view('layouts.master')
        ->with('admin.paper_cons.update_poverviuew',$POverview_info);
        //return view('admin.dashbord.edit_category');
    }
    Public function update_POverview_paperCons(Request $request,$id)
    {
        $this->validate($request, [
        'productAngle'   => 'required',
        'length'   => 'required',
        'weight'   => 'required',
        'insidebase'   => 'required',
        'finish'   => 'required',
    ]);
        $data=array();
        $data['product_angle']=$request->productAngle ;
        $data['length']=$request->length;
        $data['weight']=$request->weight;
        $data['insidebase']=$request->insidebase;
        $data['finish']=$request->finish;
        DB::table('cons_overview')
        ->where('id',$id)
        ->update($data);
        session::put('message','Product Overview Update Successfully!!');
        return redirect()->route('admin.all_POverview_paperCons');
    }
    Public function delete_POverview_paperCons($id)
    {
        DB::table('cons_overview')
        ->where('id',$id)
        ->delete();
        session::put('message','Product Overview Delete Successfully !!');
                return redirect()->route('admin.all_POverview_paperCons');
    }
  // .................... Overview Description...................
	 public function all_Orvdescribe_paperCons()
    {
      $all_Orvdescribe_info=DB::table('cons_ovrdescription')->get();
        $manage_Orvdescribe=view('admin.paper_cons.all_ovrdescribe')
        ->with('all_Orvdescribe_info',$all_Orvdescribe_info);
        return view('layouts.master')
        ->with('admin.paper_cons.all_ovrdescribe',$manage_Orvdescribe);
	}
   public function Orvdescribe_paperCons()
    {
   return view('admin.paper_cons.add_ovrdescribe');
  }
    public function save_Orvdescribe_paperCons(Request $request)
    {
        $this->validate($request, [
        'description1'   => 'required',
        'description2'   => 'required',
    ]);
        $data=array();
        $data['id']=$request->id;
        $data['description1']=$request->description1;
        $data['description2']=$request->description2;
        DB::table('cons_ovrdescription')->insert($data);
        Session::put('message', 'Overview Description Added Successfully !!');
        return redirect()->route('admin.all_Orvdescribe_paperCons');
    }
     public function unactive_Orvdescribe_paperCons($id)
    {
        DB::table('cons_ovrdescription')
        ->where('id',$id)
        ->update(['publication_status' => 0]);
        session::put('message','Overview Description Unactive Successfully !!');
        return redirect()->route('admin.all_Orvdescribe_paperCons');
    }
    public function active_Orvdescribe_paperCons($id)
    {
        DB::table('cons_ovrdescription')
        ->where('id',$id)
        ->update(['publication_status' => 1]);
        session::put('message','Overview Description Active Successfully !!');
        return redirect()->route('admin.all_Orvdescribe_paperCons');
    }
    Public function edit_Orvdescribe_paperCons($id)
    {
        $Orvdescribe_info=DB::table('cons_ovrdescription')
                        ->where('id',$id)
                        ->first();
        $Orvdescribe_info=view('admin.paper_cons.update_ovrdescribe')
        ->with('Orvdescribe_info',$Orvdescribe_info);
        return view('layouts.master')
        ->with('admin.paper_cons.update_ovrdescribe',$Orvdescribe_info);
        //return view('admin.dashbord.edit_category');
    }
    Public function update_Orvdescribe_paperCons(Request $request,$id)
    {
        $this->validate($request, [
        'description1'   => 'required',
        'description2'   => 'required',
    ]);
        $data=array();
        $data['description1']=$request->description1;
        $data['description2']=$request->description2;
        DB::table('cons_ovrdescription')
        ->where('id',$id)
        ->update($data);
        session::put('message','Overview Description Update Successfully!!');
        return redirect()->route('admin.all_Orvdescribe_paperCons');
    }
    Public function delete_Orvdescribe_paperCons($id)
    {
        DB::table('cons_ovrdescription')
        ->where('id',$id)
        ->delete();
        session::put('message','Overview Description Delete Successfully !!');
                return redirect()->route('admin.all_Orvdescribe_paperCons');
    }
    //......Pattern and coller.....
     public function all_Pattern_paperCons()
    {
        $all_cons_Pattern_info=DB::table('cons_pattern')->get();
        $manage_cons_Pattern=view('admin.paper_cons.all_Pattern')
        ->with('all_cons_Pattern_info',$all_cons_Pattern_info);
        return view('layouts.master')
        ->with('admin.paper_cons.all_Pattern',$manage_cons_Pattern);
    }
  public function pattern_paperCons()
    {
   return view('admin.paper_cons.add_Pattern');
  }

        public function save_pattern_paperCons(Request $request)
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
            DB::table('cons_pattern')->insert($data);
            Session::put('message','Pattern Image Added Successfully!!');
            return redirect()->route('admin.all_Pattern_paperCons');
        }
    }
    $data['image']='';
            DB::table('cons_pattern')->insert($data);
            Session::put('message','Pattern Image Not Added Successfully Without Image!!');
            return redirect()->route('admin.all_Pattern_paperCons');
    }
    public function unactive_pattern_paperCons($id)
    {
        DB::table('cons_pattern')
        ->where('id',$id)
        ->update(['publication_status' => 0]);
        session::put('message','Pattern Image Unactive Successfully !!');
        return redirect()->route('admin.all_Pattern_paperCons');
    }
    public function active_pattern_paperCons($id)
    {
        DB::table('cons_pattern')
        ->where('id',$id)
        ->update(['publication_status' => 1]);
        session::put('message','Pattern Image Active Successfully !!');
        return redirect()->route('admin.all_Pattern_paperCons');
    }
    Public function edit_pattern_paperCons($id)
    {
        $cons_Pattern_info=DB::table('cons_pattern')
                        ->where('id',$id)
                        ->first();
        $cons_Pattern_info=view('admin.paper_cons.update_Pattern')
        ->with('cons_Pattern_info',$cons_Pattern_info);
        return view('layouts.master')
        ->with('admin.paper_cons.update_Pattern',$cons_Pattern_info);
        //return view('admin.dashbord.edit_category');
    }
    Public function update_pattern_paperCons(Request $request,$id)
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
            DB::table('cons_pattern')
        ->where('id',$id)
        ->update($data);
        session::put('message',' Pattern Image Update Successfully!!');
        return redirect()->route('admin.all_Pattern_paperCons');
        }
    }
    $data['image']='';
     DB::table('cons_pattern')
        ->where('id',$id)
        ->update($data);
        session::put('message','Pattern Image Update Successfully Without Image!!');
        return redirect()->route('admin.all_Pattern_paperCons');
    }
    Public function delete_pattern_paperCons($id)
    {
        DB::table('cons_pattern')
        ->where('id',$id)
        ->delete();
        session::put('message','Pattern Image Delete Successfully !!');
        return redirect()->route('admin.all_Pattern_paperCons');
    }

	
}
