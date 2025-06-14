 <!-- Preloader Start-->
 <div id="preloader">
     <div class="iddrak-load">
         <img src="{{ url('frontend/images/icon.png') }}" alt="" class=" p-0">
     </div>
 </div>
 <!-- Preloader End-->

 <!-- Header Start -->
 <header class="header navbar-area bg-white ">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-lg-12">
                 <div class="nav-inner">
                     <!-- Start Navbar -->
                     <nav class="navbar navbar-expand-lg">
                         <a class="navbar-brand style3 d-lg-none d-block mx-auto text-center"
                             href="{{ url('') }}">
                             <img class="rounded-3" src="{{ url('frontend/images/logo-horizontal.png') }}"
                                 alt="Logo">
                         </a>
                         <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                             data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                             aria-expanded="false" aria-label="Toggle navigation">
                             <span class="toggler-icon"></span>
                             <span class="toggler-icon"></span>
                             <span class="toggler-icon"></span>
                         </button>

                         <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                             <ul id="nav" class="navbar-nav ms-auto">
                                 <li class="nav-item">
                                     <a href="{{ url('/') }}"
                                         class="{{ URL::current() == url('/') ? 'active' : '' }}"
                                         aria-label="Toggle navigation">Home</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ url('/company-profile') }}"
                                         class="{{ URL::current() == url('/company-profile') ? 'active' : '' }}"
                                         aria-label="Toggle navigation">Company Profile</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ url('/latest-proposals') }}"
                                         class="{{ URL::current() == url('/latest-proposals') ? 'active' : '' }}"
                                         aria-label="Toggle navigation">Latest Proposals</a>
                                 </li>
                                 <li class=" d-lg-block d-none margin-x">
                                     <a class="navbar-brand style3 mt-2" href="{{ url('') }}">
                                         <img class="rounded-3 w-200"
                                             src="{{ url('frontend/images/logo-horizontal.png') }}" alt="Logo">
                                     </a>
                                 </li>
                                 <li class="nav-item ">
                                     <a href="{{ url('/business-process') }}"
                                         class="{{ URL::current() == url('/business-process') ? 'active' : '' }}"
                                         aria-label="Toggle navigation">Business Process</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ url('/exhibitions') }}"
                                         class="{{ URL::current() == url('/exhibitions') ? 'active' : '' }}"
                                         aria-label="Toggle navigation">Exhibitions</a>
                                 </li>
                                 <li class="d-lg-block d-none nav-item">
                                     <a href="{{ url('/contact-us') }}"
                                         class="{{ URL::current() == url('/contact-us') ? 'active' : '' }}">Contact
                                         Us</a>
                                 </li>
                                 <li class="nav-item d-lg-none d-block">
                                     <a href="{{ url('/contact-us') }}"
                                         class="{{ URL::current() == url('/contact-us') ? 'active' : '' }}"
                                         aria-label="Toggle navigation">Contact Us</a>
                                 </li>
                             </ul>
                         </div> <!-- navbar collapse -->
                       
                     </nav>
                     <!-- End Navbar -->
                 </div>
             </div>
         </div> <!-- row -->
     </div> <!-- container -->
 </header>
 <!-- Header End -->
