<style>
    .mt-ul--6 {
        margin-top: -6px !important;
    }

    .footer-top {
        overflow: hidden;
        background: url("images/background/footer-bg.jpg");
        background-size: cover;
    }

    .footer-map {

        background: url("images/background/map.png");
        background-repeat: no-repeat;
        background-position: center;
    }

    .top-priority {
        color: #e70209 !important;
    }

    .footer-hr {
        height: 2px;
        width: 70px;
        background: #e70209;
        position: relative;
        margin-top: -40px;
        margin-left: 0px
    }

    .mt-ul--6 li a:hover {
        color: #e70209 !important;
    }
</style>
<!-- FOOTER START -->
<footer class="site-footer footer-large footer-dark text-white footer-style3">


    <!-- FOOTER BLOCKES START -->
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="widget widget_about">
                        <div class="logo-footer clearfix">
                            <a href="/"><img class="lazyload" data-src="images/saturn-blue-links-logo-dark.png"
                                    alt=""></a>
                        </div>
                        <p>
                            <strong>
                                Saturn Blue Links
                            </strong>
                            Are Leading Indian Agents-Brokers For Relocation Of Imported Used-Second-Hand
                            Textile Plants, Machinery & Technology From Different Countries Worldwide.
                        </p>
                    </div>

                    <div class="widget recent-posts-entry">
                        <ul class="widget_address d-flex ">
                            <!-- <li><a href="#" class="p-2"> <i class="fa fa-facebook"></i></a></li>-->
                            <!-- <li><a href="#" class="p-2"> <i class="fa fa-twitter"></i></a></li> -->
                            <!-- <li><a href="#" class="p-2"> <i class="fa fa-youtube-play"></i></a></li>
                            <li><a href="#" class="p-2"> <i class="fa fa-linkedin"></i></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="widget widget_services">
                        <h3 class="widget-title top-priority">Useful Links </h3>
                        <hr class="footer-hr">
                        <ul class="mt-ul--6">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/company-profile') }}">Company Profile</a></li>
                            <li><a href="{{ url('/latest-offers') }}"> Latest Offers</a></li>
                            <li><a href="{{ url('/products') }}"> Products</a></li>
                            <li><a href="{{ url('/business-process') }}">Business Process</a></li>
                            <li class="  {{ URL::current() == url('/exhibitions') ? 'active' : '' }}">
                                <a href="{{ url('/exhibitions') }}">Exhibitions</a>
                            </li>
                            <li><a href="{{ url('/contact') }}">Contact Us</a></li>


                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 footer-map">
                    <div class="widget widget_newsletter">
                        <h3 class="widget-title top-priority">Contact </h3>
                        <hr class="footer-hr">
                        <div class="widget recent-posts-entry">
                            <ul class="widget_address mt-ul--6">

                                <li><i class="fa fa-envelope top-priority"></i><a
                                        href="mailto:sales@saturnbluelinks.com">
                                        sales@saturnbluelinks.com
                                    </a>
                                </li>

                                <li>
                                    <i class="fa fa-map-marker top-priority"></i>Mumbai, India


                                </li>
                                <li>
                                    <i class="fa fa-map-marker top-priority"></i>South Carolina, USA
                                    <!-- <li style="margin-top: -10px">1363-1385 Sunset Blvd, Los Angeles, CA 90026, USA.</li>-->

                                </li>
                                <li>
                                    <i class="fa fa-map-marker top-priority"></i>Jebel Ali, UAE
                                    <!-- <li style="margin-top: -10px">1363-1385 Sunset Blvd, Los Angeles, CA 90026, USA.</li>-->

                                </li>
                                <li>
                                    <i class="fa fa-map-marker top-priority"></i>Guangzhuo, China
                                    <!-- <li style="margin-top: -10px">1363-1385 Sunset Blvd, Los Angeles, CA 90026, USA.</li>-->

                                </li>
                                <!-- <li><a href="mailto:mail@bpmbllp.com">
                                        <i class="fa fa-envelope"></i>mail@bpmbllp.com
                                    </a>
                                </li> -->
                                <!-- <li><a href="javascript:;"> <i class="fa fa-skype"></i>bhairavib1966</a></li>
                                <li><a href="tel:00"> <i class="fa fa-phone"></i>(654) 321-7654 </a></li> -->
                            </ul>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- FOOTER COPYRIGHT -->

    <div class="footer-bottom">
        <div class="container">
            <div class="wt-footer-bot-left d-flex justify-content-center">

                <span class="copyrights-text">

                    Copyright &copy; {{ now()->year }}

                    All Rights Reserved
                    Saturn Blue Links

                    | Designed & Developed By
                    <a href="https://www.acetrot.com/" target="_blank" class="top-priority">Acetrot</a>.

                </span>

            </div>
        </div>
    </div>


</footer>
<!-- FOOTER END -->


<!-- BUTTON TOP START -->
<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>



</div>

<!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">

        <div class="loader">
            <span class="block-1"></span>
            <span class="block-2"></span>
            <span class="block-3"></span>
            <span class="block-4"></span>
            <span class="block-5"></span>
            <span class="block-6"></span>
            <span class="block-7"></span>
            <span class="block-8"></span>
            <span class="block-9"></span>
            <span class="block-10"></span>
            <span class="block-11"></span>
            <span class="block-12"></span>
            <span class="block-13"></span>
            <span class="block-14"></span>
            <span class="block-15"></span>
            <span class="block-16"></span>
        </div>
    </div>
</div>
<!-- LOADING AREA  END ====== -->

<!-- JAVASCRIPT  FILES ========================================= -->
<script src="js/jquery-2.2.0.min.js"></script>
<!-- JQUERY.MIN JS -->
<script src="js/popper.min.js"></script>
<!-- POPPER.MIN JS -->
<script src="js/bootstrap.min.js"></script>
<!-- BOOTSTRAP.MIN JS -->
<script src="js/bootstrap-select.min.js"></script>
<!-- Form js -->
<script src="js/magnific-popup.min.js"></script>
<script src="js/jquery.bootstrap-touchspin.js"></script>
<!-- MAGNIFIC-POPUP JS -->
<script src="js/waypoints.min.js"></script>
<!-- WAYPOINTS JS -->
<script src="js/counterup.min.js"></script>
<!-- COUNTERUP JS -->
<script src="js/waypoints-sticky.min.js"></script>
<!-- STICKY HEADER -->
<script src="js/isotope.pkgd.min.js"></script>
<!-- MASONRY  -->
<script src="js/owl.carousel.min.js"></script>
<!-- OWL  SLIDER  -->
<script src="js/stellar.min.js"></script>
<!-- PARALLAX BG IMAGE   -->
<script src="js/theia-sticky-sidebar.js"></script>
<!-- STICKY SIDEBAR  -->
<script src="js/jquery.bootstrap-touchspin.js"></script>
<!-- CUSTOM FUCTIONS  -->
<script src="js/lc_lightbox.lite.js"></script>
<!-- FORM JS -->
<script src="js/custom.js"></script>
<!-- lazyload library-->
<script src="js/lazysizes.min.js"></script>
<!-- IMAGE POPUP -->
{{-- <script  src="js/switcher.js"></script><!-- SHORTCODE FUCTIONS  --> --}}

<!-- REVOLUTION JS FILES -->

<script src="plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="plugins/revolution/revolution/js/extensions/revolution-plugin.js"></script>

<!-- REVOLUTION SLIDER SCRIPT FILES -->
<script src="js/rev-script-10.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"
    integrity="sha256-ENFZrbVzylNbgnXx0n3I1g//2WeO47XxoPe0vkp3NC8=" crossorigin="anonymous" />
<script>
    @if (Session::get('alert-type') == 'success')
        @if (Session::has('message'))
            toastr.success("{{ Session::get('message') }}");
        @endif
    @elseif (Session::get('alert-type') == 'info')
        @if (Session::has('message'))
            toastr.info("{{ Session::get('message') }}");
        @endif
    @elseif (Session::get('alert-type') == 'error')
        @if (Session::has('message'))
            toastr.error("{{ Session::get('message') }}");
        @endif
    @else
        @if (Session::has('message'))
            toastr.warning("{{ Session::get('message') }}");
        @endif
    @endif
</script>
