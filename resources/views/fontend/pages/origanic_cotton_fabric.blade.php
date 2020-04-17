@extends('fontend.app')
@section('title') Organic Cotton Grey Fabric @endsection
@section('content')
<section id="products_banner">
   <div class="products_banner_wrap">
      <div class="container">
         <div class="products_banner_text wow zoomIn">
            <h2>Organic Cotton Grey Fabric</h2>
         </div>
      </div>
   </div>
</section>
<section class="origanic_cotton_fabric_area">
   <div class="container">
      <!-- Product Description Area -->
      <div class="row">
         <div class="col-md-8 col-sm-12">
            <div class="origanic_product_desc wow fadeInUp">
               <h3>Product Description</h3>
               <?php
               $all_Pdescription_info=DB::table('fabric_pdescription')
               ->where('publication_status',1)
               ->get();
               ?>
               @foreach($all_Pdescription_info as $Pdescription)
               
               <ul class="origanic_ul">
                  <li><i class='fas fa-angle-double-right'></i>{{ $Pdescription->description}}</li>
               </ul>
               @endforeach
            </div>
         </div>
         <div class="col-md-4 col-sm-12 col-12">
            <div class="single_product">
               <?php
               $all_Pimage_info=DB::table('fabric_pimage')
               ->where('publication_status',1)
               ->get();
               ?>
               @foreach($all_Pimage_info as $pimage)
               <div class="product-item">
                  <div class="product-img">
                     <a href="#"><img src="{{ asset($pimage->image) }}" alt="Cotton Organic Fabric Product" class="img-fluid"></a>
                  </div>
                  
               </div>
               @endforeach
               
               
            </div>
         </div>
      </div>
      <!-- Specification Area -->
      <div class="row">
         <div class="col-md-6 col-sm-6 col-6">
            <div class="specification wow fadeInUp">
               <h3>Specification</h3>
               <table>
                  <tbody>
                     <?php
                     $all_Specification_info=DB::table('fabric_pspecifaction')
                     ->where('publication_status',1)
                     ->get();
                     ?>
                     @foreach($all_Specification_info as $Specification)
                     <tr>
                        <th class="col-6">{{ $Specification->name}}</th>
                        <td class="col-6">{{ $Specification->description}}</td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
         <div class="col-md-6">
            <div class="parameters_product wow fadeInUp">
               <h3> Parameters of this product</h3>
               <table>
                  <tbody>
                     <?php
                     $all_Parmeters_info=DB::table('fabric_parameters')
                     ->where('publication_status',1)
                     ->get();
                     ?>
                     @foreach($all_Parmeters_info as $Parmeters)
                     <tr>
                        <th class="col-6">{{ $Parmeters->name}}</th>
                        <td class="col-6">{{ $Parmeters->description}}</td>
                     </tr>
                     @endforeach
                     
                  </tbody>
               </table>
            </div>
         </div>
      </div>
      <!-- Advantages Area -->
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