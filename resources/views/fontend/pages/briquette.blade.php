@extends('fontend.app')
@section('title') Briquette @endsection
@section('content')
<section id="products_banner">
   <div class="products_banner_wrap">
      <div class="container">
         <div class="products_banner_text wow zoomIn">
            <h2>Briquette</h2>
         </div>
      </div>
   </div>
</section>
<section class="briquette_area">
   <div class="container">
      <div class="row">
         <div class="col-md-8 col-sm-12 col-12">
            <div class="product_overview wow fadeInUp">
               <h3>Briquette Comparison with other fuels</h3>
               <table class="table">
                  <thead>
                     <tr class="text-center">
                        <th>Factor</th>
                        <th>Briquettes</th>
                        <th>Wood</th>
                        <th>Coal</th>
                        <th>Furnace oil</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                     $all_comparison_info=DB::table('briquette_comparison')
                     ->where('publication_status',1)
                     ->get();
                     ?>
                     @foreach($all_comparison_info as $details)
                     <tr class="text-center">
                        <td>{{ $details->factor}}</td>
                        <td>{{ $details->briquettes}}</td>
                        <td>{{ $details->wood}}</td>
                        <td>{{ $details->coal}}</td>
                        <td>{{ $details->furnaceoid}}</td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
         <div class="col-md-4 col-sm-12 col-12">
            <div class="single_product">
               <?php
               $all_briquette_pimage_info=DB::table('briquette_pimage')
               ->where('publication_status',1)
               ->get();
               ?>
               @foreach($all_briquette_pimage_info as $briquette_pimage)
               <div class="product-item">
                  <div class="product-img">
                     <a href="#"><img src="{{ asset($briquette_pimage->image) }}" alt="Briquette Product" class="img-fluid"></a>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-8 col-sm-12 col-12">
            <div class="industries_overview wow fadeInUp">
               <table class="table">
                  <thead>
                     <tr class="text-center">
                        <th colspan="2">Industries and Possible Applications</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                     $all_ipossible_info=DB::table('briquette_industries')
                     ->where('publication_status',1)
                     ->get();
                     ?>
                     @foreach($all_ipossible_info as $briquette_pimage)
                     <tr>
                        <td>{{ $briquette_pimage->name}}</td>
                        <td>{{ $briquette_pimage->description}}</td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection