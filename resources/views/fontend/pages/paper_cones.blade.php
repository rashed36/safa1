@extends('fontend.app')
@section('title') Paper Cones @endsection
@section('content')
<section id="products_banner">
   <div class="products_banner_wrap">
      <div class="container">
         <div class="products_banner_text wow zoomIn">
            <h2>Paper Cones</h2>
         </div>
      </div>
   </div>
</section>
<!-- ======= Paper Conses ======= -->
<section class="product_desc_area">
   <div class="container">
      <div class="row">
         <div class="col-md-8">
            <div class="product_desc wow fadeInUp">
               <h3>Product Description</h3>
               <?php
               $all_pdescribe_info=DB::table('cons_pdescribe')
               ->where('publication_status',1)
               ->get();
               ?>
               @foreach($all_pdescribe_info as $pdescribe)
               <p>{{ $pdescribe->description}}</p>
               @endforeach
               <div class="feature_area">
                  <h4>Features</h4>
                  <ul class="feature_ul">
                     <?php
                     $all_features_info=DB::table('cons_features')
                     ->where('publication_status',1)
                     ->get();
                     ?>
                     @foreach($all_features_info as $pdescribe)
                     <li>{{ $pdescribe->description}}</li>
                     @endforeach
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="single_product">
               <?php
               $all_cons_pimage_info=DB::table('cons_pimage')
               ->where('publication_status',1)
               ->get();
               ?>
               @foreach($all_cons_pimage_info as $pimage)
               <div class="product-item">
                  <div class="product-img">
                     <a href="#"><img src="{{ asset($pimage->image) }}" alt="" class="img-fluid"></a>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="specification wow fadeInDown">
               <h3>Specification</h3>
               <table>
                  <tbody>
                     <?php
                     $all_specifaction_info=DB::table('cons_specifaction')
                     ->where('publication_status',1)
                     ->get();
                     ?>
                     @foreach($all_specifaction_info as $pdescribe)
                     <tr>
                        <td class="col-6">{{ $pdescribe->name}}</td>
                        <td class="col-6">{{ $pdescribe->description}}</td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
         <div class="col-md-8">
            <div class="applications wow fadeInLeft">
               <h3>Applications</h3>
               <?php
               $all_Applications_info=DB::table('cons_application')
               ->where('publication_status',1)
               ->get();
               ?>
               @foreach($all_Applications_info as $pdescribe)
               <p>{{ $pdescribe->description}}</p>
               @endforeach
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="product_overview wow fadeInUp">
               <h3>Product Overview</h3>
               <table class="table">
                  <thead>
                     <tr class="text-center">
                        <th scope="col">ANGLE</th>
                        <th scope="col">LENGTH (IN MM)</th>
                        <th scope="col">WEIGHT (IN G)</th>
                        <th scope="col">INSIDE DIAMETER BASE (IN MM)</th>
                        <th scope="col">FINISH</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                     $all_POverview_info=DB::table('cons_overview')
                     ->where('publication_status',1)
                     ->get();
                     ?>
                     @foreach($all_POverview_info as $pdescribe)
                     <tr class="text-center">
                        <td>{{ $pdescribe->product_angle}}</td>
                        <td>{{ $pdescribe->length}}</td>
                        <td>{{ $pdescribe->weight}}</td>
                        <td>{{ $pdescribe->insidebase}}</td>
                        <td>{{ $pdescribe->finish}}</td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
         <?php
         $all_Orvdescribe_info=DB::table('cons_ovrdescription')
         ->where('publication_status',1)
         ->get();
         ?>
         @foreach($all_Orvdescribe_info as $pdescribe)
         <div class="col-md-6">
            <div class="embossing wow fadeInLeft">
               
               <p><strong>Embossing</strong> {{ $pdescribe->description1}}</p>
               
            </div>
         </div>
         <div class="col-md-6">
            <div class="velvet_finish wow fadeInRight">
               <p><strong>Velvet Finish</strong> {{ $pdescribe->description2}}</p>
            </div>
         </div>
         @endforeach
         <div class="col-md-12">
            <div class="applications wow fadeInUp">
               <h3>COLORS AND PATTERNS</h3>
               <?php
               $all_cons_Pattern_info=DB::table('cons_pattern')
               ->where('publication_status',1)
               ->get();
               ?>
               @foreach($all_cons_Pattern_info as $pattern_pimage)
               <div class="product-img">
                  <a href="#"><img src="{{ asset($pattern_pimage->image) }}" style="height: 500px; width: 800px;" alt="" class="img-fluid"></a>
               </div>
               <br>
               @endforeach
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-6">
            <div class="advantages wow fadeInUp">
               <h3>Advantages</h3>
               <ul class="advantages_ul">
                  <?php
                  $all_Advantages_info=DB::table('advantages')
                  ->where('publication_status',1)
                  ->get();
                  ?>
                  @foreach($all_Advantages_info as $pdescribe)
                  <li><i class='fas fa-angle-double-right'></i>{{ $pdescribe->description}}</li>
                  @endforeach
               </ul>
            </div>
         </div>
         <div class="col-md-6">
            <div class="faq_design wow fadeInUp">
               <h3>FAQ</h3>
               <div class="faq_section">
                  <div class="faq" id="accordion">
                     <?php
                     $all_FAQ_organic_info=DB::table('faq')
                     ->where('publication_status',1)
                     ->get();
                     ?>
                     @foreach($all_FAQ_organic_info as $faq)
                     <div class="card">
                        <div class="card-header" id="faqHeading-{{ $faq->qusno}}">
                           <div class="mb-0">
                              <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-{{ $faq->qusno}}" data-aria-expanded="false" data-aria-controls="faqCollapse-{{ $faq->qusno}}">
                              <span class="badge">{{ $faq->qusno}}</span>{{ $faq->qus}}
                              </h5>
                           </div>
                        </div>
                        <div id="faqCollapse-{{ $faq->qusno}}" class="collapse" aria-labelledby="faqHeading-{{ $faq->qusno}}" data-parent="#accordion">
                           <div class="card-body">
                              <p>{{ $faq->ans}}</p>
                           </div>
                        </div>
                     </div>
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection