@extends('fontend.app')
@section('title') Contact @endsection
@section('content')
<!-- ====== Contact-banner ====== -->
<section id="contact_banner">
   <div class="products_banner_wrap">
      <div class="container">
         <div class="products_banner_text wow zoomIn">
            <h2>Contact Us</h2>
         </div>
      </div>
   </div>
</section>
<!-- ====== Contact-area ====== -->
<section id="contact_page">
   <div class="contact_wrap">
      <div class="container">
         <div class="contact-section">
            <div class="row wow fadeInUp">
               <div class="col-md-5">
                  <div class="contact_details wow fadeInLeft">
                     <h3>Get In Touch With Us</h3>
                     <?php
                     $all_about_info=DB::table('tbl_about')
                     ->where('publication_status',1)
                     ->get();
                     ?>
                     @foreach($all_about_info as $v_about)
                     <p class="profile_text_limit">{{ $v_about->description}}</p>
                     @endforeach
                     <?php
                     $all_contact_info=DB::table('tbl_contact')
                     ->where('publication_status',1)
                     ->get();
                     ?>
                     @foreach($all_contact_info as $v_contact)
                     <address>
                        {{ $v_contact->address}}<br>
                        <strong>Phone :</strong> {{ $v_contact->phone}} <br>
                        <strong>Fax :</strong> {{ $v_contact->fax}} <br>
                        <strong>WhatsApp No :</strong> {{ $v_contact->whatsapp}} <br>
                        <strong>Skype :</strong> {{ $v_contact->skype}} <br>
                        <strong>Email :</strong> {{ $v_contact->email}}
                     </address>
                     <div class="general_requerment">
                        <h3>General Enquiries.</h3>
                        <span>[ {{ $v_contact->phone}} ]</span>
                        <span>[ {{ $v_contact->email}} ]</span>
                     </div>
                     @endforeach
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="contact_from wow fadeInRight">
                     @if (count($errors) > 0)
                     <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <ul>
                           @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                           @endforeach
                        </ul>
                     </div>
                     @endif
                     @if ($message = Session::get('success'))
                     <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                     </div>
                     @endif
                     <form class="form-group" action="{{ route('sendemail') }}" method="post">
                        @csrf
                        <div class="row">
                           <div class="col-12">
                              <div class="contact_title_text">
                                 <h3>Send Us A Message</h3>
                                 <?php
                                 $all_about_info=DB::table('tbl_about')
                                 ->where('publication_status',1)
                                 ->get();
                                 ?>
                                 @foreach($all_about_info as $v_about)
                                 <p class="profile_text_limit">{{ $v_about->description}}</p>
                                 @endforeach
                              </div>
                           </div>
                        </div>
                        
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="input_box">
                                 <input type="text" name="name" placeholder="Your Name">
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="input_box">
                                 <input type="email" name="email" placeholder="Your Email">
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="input_box">
                                 <input type="text" name="phone" placeholder="Your Phone">
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="input_box">
                                 <input type="text" name="country" placeholder="Your Country">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-12">
                              <div class="input_box mb-0">
                                 <textarea name="message" placeholder="Tell us about Your it Requirement"></textarea>
                                 <button class="btn mt-4" type="submit">Submit</button>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="Contact_map_area">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <div class="map_area">
               <h2 style="display: none;">Map</h2>
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14597.334502652639!2d90.66056257000123!3d23.842284002704314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3754341af6772a33%3A0x2d2e73a5330999a7!2sBirampur!5e0!3m2!1sen!2sbd!4v1578807873463!5m2!1sen!2sbd" style="border:0;" allowfullscreen=""></iframe>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection