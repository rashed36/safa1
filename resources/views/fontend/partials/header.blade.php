   <!-- ====== header-section ====== -->
   <header class="header fixed-top">
      <div class="container">
         <nav>
            <!-- logo -->
            <span class="logo">
               <a href="{{ route('home') }}">
                   <?php
         $all_logo_info=DB::table('tbl_logo_favicon')
                           ->where('publication_status',1)
                           ->get();
                           ?>
         @foreach($all_logo_info as $v_logo)
                  <img src="{{ $v_logo->logo}}" style="max-width:100px;" alt="logo">
                   @endforeach
               </a>
            </span>
            <input type="checkbox" id="chk">
            <!-- show-menu-btn -->
            <label for="chk" class="show-menu-btn ">
               <i class="fa fa-bars"></i>
            </label>
            <!-- menu-itme -->
            <ul class="menu">
               <!-- menu-close-icon -->
               <li>
                  <label for="chk" class="hide-menu-btn">
                     <i class="fa fa-times"></i>
                  </label>
               </li>
               <li><a href="{{ route('home') }}">Home </a></li>
               <li class="sub-menu"><a href="#">About Us</a>
                  <ul id="pdf_menu">
                     <li><a href="{{ route('profile') }}">Profile</a></li>
                     <li><a href="{{ route('top-reason') }}">Top Reason to Choose STE</a></li>
                  </ul>
               </li>
               <li class="sub-menu"><a href="#">Products</a>
                  <ul id="pdf_menu">
                     <li><a href="{{ route('organic') }}">Organic Cotton Grey Fabric</a></li>
                     <li><a href="{{ route('paper-cons') }}">Paper Cones</a></li>
                     <li><a href="{{ route('briquette') }}">Briquette</a></li>
                     <li><a href="{{ route('pet-flakes') }}">Pet Flakes</a></li>
                  </ul>
               </li>
               <li><a href="{{ route('contact') }}">Contact Us</a></li>
            </ul>
         </nav>
      </div>
   </header>