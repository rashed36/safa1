@extends('fontend.app')
@section('title') Top-Reasons @endsection
@section('content')
<!-- ====== Contact-banner ====== -->
<section id="topReasons_banner">
   <div class="products_banner_wrap">
      <div class="container">
         <div class="products_banner_text wow zoomIn">
            <h2>Top Reason to Choose STE</h2>
         </div>
      </div>
   </div>
</section>
<!-- ======= Top Reasons to Choose BPC Area ======== -->
<section class="topreasons_area">
   <div class="container">
      <div class="row">
         <div class="col-md-8 col-sm-12 col-12">
            <div class="topreasons_desc">
               <div class="topreasons_block wow fadeInUp">
                  <?php
                  $all_reason_info=DB::table('tbl_reason')
                  ->where('publication_status',1)
                  ->get();
                  foreach($all_reason_info as $v_reason){?>
                  <h3><i class='fas fa-angle-double-right'></i> {{ $v_reason->reason}}</h3>
                  <p>{{ $v_reason->details}}</p>
                  <?php } ?>
               </div>
            </div>
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