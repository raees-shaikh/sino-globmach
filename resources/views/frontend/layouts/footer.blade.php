<style>
    .max-w-200 {
        max-width: 200px;
    }

    .f-address ul.widget_address li a:hover i.f-s-18 {
        color: white !important;
    }
</style>
<!-- Footer Start  -->
<footer id="footer-section">
    <!-- Start Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="footer-cmn f-activity wow fadeInUp" data-wow-delay=".2s">
                        <a href="{{ url('/') }}">
                            <img class="rounded-3 mb-3 w-200 footer-img" src="{{ url('frontend/images/new-logo4.png') }}"
                                alt="Logo"></a>
                        <h6>GET IN TOUCH</h6>
                        <h5>Follow Our Activity</h5>
                        <p class="text-white">SINO GLOBMACH Are Largest International Brokers & Agents For New, 
                             Complete Plants & Machinery For Technical Textiles & Technical Engineered
                            Plastics From Different Countries Worldwide focusing though on CHINA majorly.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="footer-cmn f-solutions f-links wow fadeInUp" data-wow-delay=".4s">
                        <h5>Useful Links</h5>
                        <ul class="mt-4">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/company-profile') }}">Company Profile</a></li>
                            <li><a href="{{ url('/latest-proposals') }}">Latest Proposals</a></li>
                            <li><a href="{{ url('/business-process') }}">Business Process</a></li>
                            <li><a href="{{ url('/exhibitions') }}">Exhibitions</a></li>
                            <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
                            <li><a href="{{ url('/sitemap') }}">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="footer-cmn f-address p-0 wow fadeInUp" data-wow-delay=".8s">
                        <h5>Contact</h5>
                        <ul class="mt-10 mt-4">
                            <li>
                                <a href="mailto:sales@sinoglobmach.com" class="E-Mail">
                                    <!--<i class="flaticon-mail"></i>-->
                                    <i class="fa fa-envelope f-s-18"></i>sales[at]sinoglobmach[dot]com
                                </a>
                            </li>
                            <li class="mt-1">
                                <a href="javascript:void(0)">
                                    <i class="fa fa-map-marker text-primary f-s-18 "></i>&nbsp; Mumbai, India
                                </a>
                            </li>
                            <li class="mt-1">
                                <a href="javascript:void(0)">
                                    <i class="fa fa-map-marker text-primary f-s-18"></i>&nbsp; Shanghai, China
                                </a>
                            </li>
                            {{-- <li class="mt-1">
                                <a href="tel:00919500271679" class="E-Mail">
                                    <i class="fa fa-mobile-phone text-primary f-s-18"></i>&nbsp; 00919500271679
                                </a>
                            </li> --}}
                            {{-- <li class="mt-1">
                                 <a href="javascript:void(0)">
                                     <i class="fa fa-map-marker text-primary f-s-18"></i>&nbsp; South Carolina, USA
                                 </a>
                             </li>
                             <li class="mt-1">
                                 <a href="javascript:void(0)">
                                     <i class="fa fa-map-marker text-primary f-s-18"></i>&nbsp; Jebel Ali, UAE
                                 </a>
                             </li>
                             <li class="mt-1">
                                 <a href="javascript:void(0)">
                                     <i class="fa fa-map-marker text-primary f-s-18"></i>&nbsp; Guangzhuo, China
                                 </a>
                             </li> --}}
                        </ul>
                        <ul class="widget_address mt-2 d-flex px-0">
                            <li><a href="{{ url('https://www.facebook.com/profile.php?id=100093237445306  ') }}"
                                    class="p-2 px-0 E-Mail" target="_blank"> <i class="fa fa-facebook f-s-18"></i></a>
                            </li>
                            {{-- <li><a href="#" class="p-2"> <i class="fa fa-twitter"></i></a></li> --}}
                            <li><a href="{{ url('https://www.youtube.com/@SINOGLOBMACH-pq6lp/featured') }}"
                                    class="p-2 mx-2 E-Mail" target="_blank"> <i
                                        class="fa fa-youtube-play f-s-18"></i></a></li>
                            <li><a href="{{ url('https://www.linkedin.com/in/henry-raval-58a90621b') }}"
                                    class="p-2 E-Mail" target="_blank"> <i class="fa fa-linkedin f-s-18"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Footer Top End  -->
    <div class="copyright text-center mt-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="copyright-text text-white f-s-14"> Copyright &copy; {{ now()->year }}
                        All Rights Reserved
                        Sino Globmach
                        | Designed & Developed By
                        <a href="https://www.acetrot.com/" target="_blank" class="top-priority hover-gold">Acetrot</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- Scroll Top Start -->
<a href="#" class="scroll-top">
    <i class="lni lni-chevron-up"></i>
</a>
<!-- Scroll Top End -->

<!-- JS here -->
<script src="{{ url('frontend/js/jquery.min.js') }}"></script>
<script src="{{ url('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ url('frontend/js/wow.min.js') }}"></script>
<script src="{{ url('frontend/js/tiny-slider.js') }}"></script>
<script src="{{ url('frontend/js/glightbox.min.js') }}"></script>
<script src="{{ url('frontend/js/main.js') }}"></script>
<script src="{{ url('frontend/js/custom.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<script>
    $(".trophy").css("font-size", "30px");
    $(".f-s-14").css("font-size", "14px");
    $(".new-img-size").css("height", "230px");
    $(".text-machine").css("color", "black");
</script>
<script>
    jQuery(document).ready(function($) {
        var alterClass = function() {
            var ww = document.body.clientWidth;
            if (ww > 600) {
                $('.icon-process').removeClass('card');
            } else if (ww <= 601) {
                $('.icon-process').addClass('card');
            };
        };
        $(window).resize(function() {
            alterClass();
        });
        //Fire it when the page first loads:
        alterClass();
    });
</script>


<script>
    $(document).ready(function() {
        $("input,textarea").focus(function() {
            $(this).css("border", "1px solid black");

        });
        $("input,textarea").blur(function() {
            $(this).css("border", "1px solid #CED4DA");

        });
    });
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
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
