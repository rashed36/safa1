@extends('fontend.app')
@section('title') Home @endsection
@section('content')
<!-- ==== slider-section ===== -->
<section class="slider_area">
   <h2 style="display: none;">Slider</h2>
   <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
         <?php
         $all_slider_info=DB::table('tbl_slider')
         ->where('publication_status',1)
         ->get();
         ?>
         @foreach($all_slider_info as $v_slider)
         <li data-target="#carouselExampleCaptions" data-slide-to="{{$loop->index}}" class="{{$loop->first ? 'active' : ''}}"></li>
         @endforeach
      </ol>
      <div class="carousel-inner" role="listbox">
         @foreach($all_slider_info as $v_slider)
         <div class="carousel-item {{$loop->first ? 'active' : ''}}">
            <img src="{{ $v_slider->slider_image}}" class="d-block w-100" alt="Slider">
            <div class="carousel-caption">
               <h2>{{ $v_slider->name}}</h2></br>
               {{-- <p>{{ $v_slider->description}}</p> --}}
            </div>
         </div>
         @endforeach
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
      </a>
   </div>
</section>
<!-- ==== company-profile-section ===== -->
<section class="about_us_area">
   <div class="container">
      <?php
      $all_about_info=DB::table('tbl_about')
      ->where('publication_status',1)
      ->get();
      foreach($all_about_info as $v_about){?>
      <div class="row">
         <div class="col-lg-8 offset-lg-2">
            <div class="about_title wow fadeInDown" data-wow-duration="1s" data-wow-delay=".2s">
               <h2>About Us</h2>
            </div>
         </div>
      </div>
      <div class="row wow fadeInUp">
         <div class="col-md-6">
            <div class="about_image">
               <img src="{{ asset($v_about->profile_image) }}" class="w-100" alt="Company Image">
            </div>
         </div>
         <div class="col-md-6">
            <div class="about_text">
               <p class="text_limit">{{ $v_about->description}}</p>
               <a href="{{ route('profile') }}" class="highlight">See More</a>
            </div>
         </div>
      </div>
      <?php } ?>
   </div>
</section>
<!-- ====== Company-banner ======= -->
<section id="company_banner">
   <div class="company_banner_wrap">
      
      <div class="container">
         <!-- achievement-item -->
         <div class="row">
            <?php
            $all_counter_info=DB::table('tbl_counter')
            ->where('publication_status',1)
            ->get();
            foreach($all_counter_info as $v_counter){?>
            <!-- item-box-01 -->
            <div class="col-lg-4 col-md-6 col-sm-6 mb-lg-0 mb-md-4 mb-4">
               <div class="company_banner_content_box wow fadeInDown" data-wow-duration=".3s"
                  data-wow-delay=".2s">
                  <div class="description">
                     <h3 class="title">{{$v_counter->establishment}}</h3>
                     <span>Year of Establishment
                     </span>
                  </div>
               </div>
            </div>
            <!-- item-box-02 -->
            <div class="col-lg-4 col-md-6 col-sm-6 mb-lg-0 mb-md-4 mb-4">
               <div class="company_banner_content_box wow fadeInDown" data-wow-duration=".5s"
                  data-wow-delay=".2s">
                  <div class="description">
                     <h3 class="title">{{$v_counter->employees}}</h3>
                     <span>Total Employees</span>
                  </div>
               </div>
            </div>
            <!-- item-box-03 -->
            <div class="col-lg-3 col-md-6 col-sm-6 mb-lg-0 mb-md-0 mb-0">
               <div class="company_banner_content_box wow fadeInDown" data-wow-duration="1s" data-wow-delay=".2s">
                  <div class="description">
                     <h3 class="title counter">{{$v_counter->countries}}</h3>
                     <span>Countries</span>
                  </div>
               </div>
            </div>
         </div>
         <?php } ?>
      </div>
   </div>
</section>
<!-- ==== products-section ===== -->
<section class="products_area">
   <div class="container">
      <div class="row wow fadeInDown" data-wow-duration="1s" data-wow-delay=".2s">
         <div class="col-lg-8 offset-lg-2">
            <div class="product_title">
               <h2>Products</h2>
            </div>
         </div>
      </div>
      <div class="row wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
         <div class="multi_product">
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
</section>
@endsection