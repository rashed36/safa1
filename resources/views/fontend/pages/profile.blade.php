@extends('fontend.app')
@section('title') Profile @endsection
@section('content')
<!-- ====== Profile-banner ====== -->
<section id="profile_banner">
   <div class="products_banner_wrap">
      <div class="container">
         <div class="products_banner_text wow zoomIn">
            <h2>Profile</h2>
         </div>
      </div>
   </div>
</section>
<!-- ====== Profile-description ====== -->
<section class="profile_area">
   <div class="container">
      <div class="row">
         <div class="col-md-8">
            <?php
            $all_about_info=DB::table('tbl_about')
            ->where('publication_status',1)
            ->get();
            foreach($all_about_info as $v_about){?>
            <div class="profile_style_area">
               <div class="profile_image_area wow fadeInDown">
                  <img src="{{ asset($v_about->profile_image) }}" class="w-100" alt="Company Profile Image">
               </div>
               <div class="profile_description wow fadeInUp">
                  <p>{{ $v_about->description}}</p>
               </div>
            </div>
            <?php } ?>
         </div>
         <div class="col-md-4">
            <div class="products_heading">
               <h3>Products</h3>
            </div>
            <div class="single_product">
               <?php
               $all_slider_info=DB::table('tbl_slider')
               ->where('publication_status',1)
               ->get();
               ?>
               @foreach($all_slider_info as $v_slider)
               <div class="product-item">
                  <div class="product-img">
                     <a href="{{$v_slider->categories}}"><img src="{{ $v_slider->slider_image}}" alt="{{ $v_slider->name}}" class="img-fluid"></a>
                  </div>
                  <div class="product-speech">
                     <h2>{{ $v_slider->name}}</h2>
                     <p>{{ $v_slider->description}}</p>
                     <a href="{{$v_slider->categories}}">Details</a>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</section>
@endsection