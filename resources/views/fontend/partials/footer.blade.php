<!-- ======= Footer ======== -->
<footer id="footer">
   <div class="footer-top">
      <div class="container">
         <div class="row">
            <!-- footer-inof -->
            <div class="col-lg-4 col-md-4 col-sm-6">
               <div class="footer-info">
                  <h3 data-toggle="tooltip" data-placement="bottom" title="SAFA TRADIND ENTERPRISE">STE</h3>
                  <?php
                  $all_about_info=DB::table('tbl_about')
                  ->where('publication_status',1)
                  ->get();
                  ?>
                  @foreach($all_about_info as $v_about)
                  <p class="profile_text_limit">{{ $v_about->description}}
                  </p>
                  @endforeach
               </div>
            </div>
            <!-- footer-link -->
            <div class="col-lg-4 col-md-4 col-sm-6">
               <div class="footer-links">
                  <h4>Useful Links</h4>
                  <ul>
                     <li><i class="ion-ios-arrow-right"></i> <a href="{{ route('home') }}">Home</a></li>
                     <li><i class="ion-ios-arrow-right"></i> <a href="{{ route('profile') }}">About us</a></li>
                     <li><i class="ion-ios-arrow-right"></i> <a href="{{ route('contact') }}">Contact</a></li>
                  </ul>
               </div>
            </div>
            <!-- footer-contact -->
            <div class="col-lg-4 col-md-4 col-sm-6">
               <div class="footer-contact">
                  <h4>Contact Us</h4>
                  <?php
                  $all_contact_info=DB::table('tbl_contact')
                  ->where('publication_status',1)
                  ->get();
                  ?>
                  @foreach($all_contact_info as $v_contact)
                  <p>
                     {{ $v_contact->address}}<br>
                     <strong>Phone :</strong> {{ $v_contact->phone}} <br>
                     <strong>Fax :</strong> {{ $v_contact->fax}} <br>
                     <strong>WhatsApp No :</strong> {{ $v_contact->whatsapp}} <br>
                     <strong>Skype :</strong> {{ $v_contact->skype}} <br>
                     <strong>Email :</strong> {{ $v_contact->email}}
                  </p>
                  @endforeach
               </div>
               <?php
               $all_social_link_info=DB::table('tbl_social_link')
               ->where('publication_status',1)
               ->get();
               ?>
               @foreach($all_social_link_info as $v_link)
               <div class="social-links">
                  <a href="{{ $v_link->twitter}}" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                  <a href="{{ $v_link->facebook}}" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                  <a href="{{ $v_link->instagram}}" class="instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                  <a href="{{ $v_link->linkedin}}" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>
   <!-- copy-right -->
   <div class="container">
      <div class="copyright">
         © All rights reserved by SAFA TRADIND ENTERPRISE
      </div>
   </div>
   </footer><!-- #footer -->