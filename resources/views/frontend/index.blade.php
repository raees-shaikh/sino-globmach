@extends('frontend.layouts.app')

@section('content')
    <style>
        .hero-area.style1 {
            position: relative;
            background: url(frontend/images/about/new-machine-1.jpg);
            background-position: center;
            background-size: cover;
            height: 700px;


        }

        .about-img {
            background: url(frontend/namaste-chinese-girl-new-v-.jpg) !important;
            min-height: 630px !important;
            background-size: cover !important;
        }

        .hero-overlay {
            background: none !important;
        }

        @media only screen and (max-width: 767px) {
            .hero-area.style1 {
                position: relative;
                background: url(frontend/images/about/new-machine-mobile-2.jpg);
                background-position: center;
                background-size: cover;
                height: 736px;

            }

            .city-name {
                position: relative;
                top: 400px !important;
            }

            .height-600 {
                height: 700px;
            }
        }

        .height-550 {
            height: 650px;
        }

        .city-name {
            position: relative;
            top: 350px;
        }
    </style><!--Temporarily css for further updated deisgn-->
    <!-- Hero End -->
    {{-- <section id="home" class="hero-area style1 ">
        <div class="hero-overlay">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-9 col-12">
                        <div class="hero-content mt-md-0 mt-5">
                            <h1 class="wow fadeInLeft" data-wow-delay=".5s">Largest International<span>Brokers Of Imported Secondhand Technical & MMF Machinerys.</span></h1>

                            <div class="hero-btn mt-50">
                                <a class="btn btn-one wow fadeInLeft" data-wow-delay="1.5s"
                                    href="{{ url('/latest-proposals') }}">Get Full Info <i class="lni lni-angle-double-right"></i></a>
                                <!--<a class="btn btn-two glightbox video-button wow fadeInLeft" data-wow-delay="2s"
                                            href="https://www.youtube.com/watch?v=SVYotEl0QNc"><i class="lni lni-play"></i><span
                                                class="text">Watch our
                                                intro video</span></a>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-3 col-12">
                        <div class="hero-image wow fadeInRight" data-wow-delay="2s">
                            <img src="frontend/images/china-man-new.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
--}}
    <section id="home" class="">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <section class="hero-area style1">
                        <div class="hero-overlay ">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-lg-7 col-md-9 col-12">
                                        <div class="hero-content mt-md-0 mt-5">
                                            <h1 class="wow fadeInLeft f-s-15" data-wow-delay=".5s">Largest
                                                International<span class=" f-s-15">Brokers & Agents For New, &
                                                     Complete Plants & Machinery For Technical Textiles &
                                                    Technical Engineered Plastics.</span></h1>

                                            <div class="hero-btn mt-20">
                                                <a class="btn btn-one wow fadeInLeft getinfo-btn" data-wow-delay="1.5s"
                                                    href="{{ url('/latest-proposals') }}">Get Full Info <i
                                                        class="lni lni-angle-double-right"></i></a>
                                                <!--<a class="btn btn-two glightbox video-button wow fadeInLeft" data-wow-delay="2s"
                                                                                            href="https://www.youtube.com/watch?v=SVYotEl0QNc"><i class="lni lni-play"></i><span
                                                                                                class="text">Watch our
                                                                                                intro video</span></a>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-3 col-12">
                                        <div class="hero-image wow fadeInRight" data-wow-delay="2s">
                                            <img src="frontend/images/china-man-new.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="carousel-item">
                    <h1 class=" text-center text-white city-name ">Shanghai</h1>
                    <img class="d-md-block d-none height-550 w-100 " src="{{ url('frontend/china-images/f.png') }}"
                        alt="Second slide">
                    <img class="d-block w-100 height-600 d-md-none d-block"
                        src="{{ url('frontend/china-images/f-mobile.png') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <h1 class=" text-center text-white city-name">Suzhou</h1>
                    <img class="d-md-block d-none w-100 height-550" src="{{ url('frontend/china-images/s.png') }}"
                        alt="Third slide">
                    <img class="d-block w-100 height-600 d-md-none d-block"
                        src="{{ url('frontend/china-images/s-mobile.png') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <h1 class=" text-center text-white city-name">GuangDong</h1>
                    <img class="d-md-block d-none w-100 height-550" src="{{ url('frontend/china-images/t.png') }}"
                        alt="Third slide">
                    <img class="d-block w-100 height-600 d-md-none d-block"
                        src="{{ url('frontend/china-images/t-mobile.png') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <h1 class=" text-center text-white city-name">Guangzhou</h1>
                    <img class="d-md-block d-none w-100 height-550 " src="{{ url('frontend/china-images/ft.png') }}"
                        alt="Third slide">
                    <img class="d-block w-100 height-600 d-md-none d-block"
                        src="{{ url('frontend/china-images/ft-mobile.png') }}" alt="Second slide">
                </div>

            </div>
        </div>
    </section>
    <!-- Hero End -->

    <!-- About Start -->

    <!-- About Detl Start -->
    <section id="about-detl" class="  ">
        <div class="container-fluid ">
            <div class="row ">
                <div class="col-lg-7 col-md-12  order-2 ">
                    <div class="about-text section-title px-3 py-5 mt-md-4 mt-1">
                        <h5 class="wow fadeInLeft" data-wow-delay=".2s">Company Profile </h5>
                        <h2 class="wow fadeInLeft blue-clr py-0 my-0 pt-2" data-wow-delay=".4s">Sino Globmach</h2>
                        <p class="wow fadeInLeft py-1 mt-3" data-wow-delay=".8s">SINO GLOBMACH are Largest International
                            Brokers & Agents For New,  Complete Plants & Machinery For Technical
                            Textiles & Technical Engineered Plastics from different Countries worldwide focusing though on
                            CHINA majorly.</p>
                        <p class="wow fadeInLeft py-1" data-wow-delay=".6s">We offer a wide selection of canceled orders and
                            brand-new and  plants for the global polymer and plastics industry, including technical
                            textiles.</p>
                        <p class="wow fadeInLeft py-1" data-wow-delay=".6s">Our company has experience of more than two
                            decades & has the ability of being most extensive brokers for all kinds of textile plants.</p>
                        <p class="wow fadeInLeft py-1" data-wow-delay=".6s">To name a few past experiences, we have sold
                            more than 500,000 spindles of Ring Spinning Plant & Machineries, 60,000 Rotors, 1000 Looms, 200
                            Circular Knitting Machines, 100 Flat Knitting, Warp Knitting, Non-Woven plants, Man-made Fibre
                            plants like Polyester POY, FDY, Nylon 66, Viscose Staple Fiber, Viscose filament yarn, Acrylic,
                            Tajima, Barudan Embroidery machines & others.</p>
                        <p class="wow fadeInLeft py-1" data-wow-delay=".6s">We specialize in providing geotechnical and
                            technical plastics industry plant and machinery solutions realted to all Polymers & Reinforced
                            Materials.<br>
                            THERMOPLASTICS | THERMOSETS | ELASTOMERS | LLDPE | LDPE | HDPE | POLYPROPYELENE | POLYESTER |
                            NYLON | NYLON66 | POLYCARBONATE | PVA | UPVC | PVC | RUBBER | SYTHETIC RUBBER | CARBON | GLASS |
                            ABS | ACRYCLIC | EPOXY | RESINS | NATURAL FIBERS | VISCOSE | COTTON | JUTE | BAMBOO FIBER & many
                            many more.</p>

                        {{-- <div class="service-btn cmn-btn-one mt-4 wow fadeInLeft " data-wow-delay="1s">
                                    <a href="{{ url('/company-profile') }}" class="btn btn-primary read-btn">Read More <i class="lni lni-angle-double-right"></i></a>
                                </div> --}}
                        <div class="hero-btn mt-40 text-lg-start text-center ">
                            <a class="btn btn-one wow fadeInLeft getinfo-btn" data-wow-delay="1.5s"
                                href="{{ url('/company-profile') }}">Read More <i
                                    class="lni lni-angle-double-right"></i></a>
                            <!--<a class="btn btn-two glightbox video-button wow fadeInLeft" data-wow-delay="2s"
                                                                                    href="https://www.youtube.com/watch?v=SVYotEl0QNc"><i class="lni lni-play"></i><span
                                                                                        class="text">Watch our
                                                                                        intro video</span></a>-->
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 col-md-12  g-0  order-1">

                    <div class="about-img-quote wow fadeInLeft ml--30 b-left-0 border-0" data-wow-delay="1s">

                        <!--<i class="fa fa-industry text-white"></i>-->
                        <a href="{{ url('/') }}"> <img src="{{ url('frontend/images/logo-horizontal.png') }}"
                                alt=""></a>
                        <!-- <i class="flaticon-straight-quotes"></i>-->
                        <h5 class="mt-2 text-white ml-20">Running Business Since 2000</h5>

                    </div>
                    <div class="text-center">
                        <img src="frontend/namaste-chinese-girl-new.png" alt=""
                            class="text-center mx-auto h-400">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Detl End -->
    <!-- About End -->

    <!-- Counter Start -->
    {{-- <section id="counter-box" class="bg-blue ">
        <div class="text-center   section-title pt-5 pb-4">
            <h5 class="wow fadeInLeft" data-wow-delay=".2s">About Sino Globmach</h5>
            <h2 class="wow fadeInLeft mt-2" data-wow-delay=".4s">Lowest Rates & Best Quality Always</h2>
        </div>
        <div class="container py-3" >
            <div class="row justify-content-center pb-4 ">

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="counter-item text-center wow fadeInUp" data-wow-delay=".2s">
                        <div class="counter-icon">
                            <img src="frontend/images/new-shape-.png" alt="">
                            <i class="lni lni-thumbs-up"></i>
                        </div>
                        <h3 class=" mb-0 "><span  class="counter h3 text-white" data-number="900"></span>+</h3>
                        <h5 class="text-white mt-2">Plants & Machinery Sold</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 my-4 my-md-0">
                    <div class="counter-item text-center wow fadeInUp" data-wow-delay=".4s">
                        <div class="counter-icon">
                            <img src="frontend/images/new-shape-.png" alt="">
                            <i class="lni lni-users"></i>
                        </div>
                        <h3 class=" mb-0 " ><span  class="counter h3 text-white" data-number="7000"></span>+</h3>
                        <h5 class="text-white mt-2">Clients</h5>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6 mt-lg-0 mt-md-5 mt-0 col-12">
                    <div class="counter-item text-center wow fadeInUp" data-wow-delay=".6s">
                        <div class="counter-icon">
                            <img src="frontend/images/new-shape-.png" alt="">
                            <i class="lni lni-cup"></i>
                        </div>
                        <h3 class=" mb-0 "><span  class="counter h3 text-white" data-number="33"></span>+</h3>
                        <h5 class="text-white mt-2">World-Wide Exhibitions Participated</h5>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Counter End -->

    <!-- Service Start -->
    <section id="service-section " class="pb-0">
        <div class="container-fluid">
            <div class="service  text-center section-title pb-0 pt-4">

                <h2 class="wow fadeInLeft mt-2 mb-0 blue-clr" data-wow-delay=".4s"> Latest Proposals</h2>
            </div>
            <div class="row  py-0">
                <div class="col-12 g-0">
                    <div class="service service-right py-0 ">
                        <div class="row justify-content-center px-2">
                            @forelse($categories as $key=>$categorie)
                                <div class="col-lg-4 col-md-6 my-3 px-3">
                                    <a href="{{ route('frontend.offer.sub_category_one', $categorie->slug) }}"
                                        class="d-block">
                                        <div class="px-3 proposal-card service-item row-design mt-25 wow fadeInUp h-100 row-hover-card "
                                            data-wow-delay=".2s">
                                            {{-- <img src="{{ asset('storage/images/latest_arrival/' . $categorie->image) }}"
                                            alt="" class="offers-img-style d-block rounded"><span class=" new-num my-5">{{ $key + 1 }}</span> --}}
                                            <a href="{{ route('frontend.offer.sub_category_one', $categorie->slug) }}">
                                                <h5 class="mt-4 text-machine ">{{ $categorie->title }}</h5>
                                                <div class="service-btn cmn-btn-one mt-40  wow fadeInLeft"
                                                    data-wow-delay="1s">
                                                    <a href="{{ route('frontend.offer.sub_category_one', $categorie->slug) }}"
                                                        class="btn btn-primary read-btn py-2">Read More </a>
                                                </div>
                                            </a>

                                        </div>
                                    </a>
                                </div>
                            @empty
                                <div>
                                    <p>No Offers Found</p>
                                </div>
                            @endforelse

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="hero-btn mt-50  text-center pt-2">
            <a class="btn btn-one wow fadeInLeft getinfo-btn px-5" data-wow-delay="1.5s"
                href="{{ url('/latest-proposals') }}">View All <i class="lni lni-angle-double-right"></i></a>

        </div>
    </section>
    <!-- Service End -->
    @include('frontend.best-manufacturers')

    @if ($data)
        <div class="container ">
            <div class="section-title text-center">
                <h2 class="section-title__title" style="color: black">Technical Data </h2>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="col-md-4 mx-auto text-center">
                    <a href="{{ asset('storage/data/' . $data->filename) }}"
                        class="btn btn-one wow fadeInLeft getinfo-btn px-5 pdf text-white" target="_blank">
                        <i class="fa fa-file-pdf-o text-white"></i> &nbsp; Open PDF</a>
                </div>
            </div>
        </div>
    @endif

    {{-- <section class="bg-dark py-4">
            <div class="service service-left section-title pb-0 pt-4 bg-dark ">

                <h2 class="wow fadeInLeft text-center text-white mt-2" data-wow-delay=".4s">Technical Data</h2>
            </div>
            <div class="row my-0 py-0">
                <div class="col-md-4 col-sm-5 mx-auto">
                    <div class=" mt-30 card service-download bg-dark pt-0 mt-0 w-75 m-0 px-0 mx-auto">

                        <ul class="list-group list-group-flush bg-dark">
                            <li class="list-group-item bg-dark"><a class="active h5" target="_blank"
                                    href="{{ url('pdf/Sino-Technical-Data.pdf') }}"><i class="fa fa-file-pdf-o"></i> Open
                                    PDF</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </section> --}}
@endsection
@section('js')
    <script>
        //========= glightbox
        GLightbox({
            'href': 'https://www.youtube.com/watch?v=SVYotEl0QNc',
            'type': 'video',
            'source': 'youtube', //vimeo, youtube or local
            'width': 900,
            'autoplayVideos': true,
        });
    </script>

    <script>
        $(window).scroll(function() {

            if ($(this).scrollTop() > 50) {
                $('.scroll-hide').hide();
            } else {
                $('.scroll-hide').show();
            }
        });
        $('.carousel').carousel({
            interval: 8000
        })
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.2.228/pdf.min.js"></script>


    <script>
        var _PDF_DOC,
            _CURRENT_PAGE,
            _TOTAL_PAGES,
            _PAGE_RENDERING_IN_PROGRESS = 0,
            _CANVAS = document.querySelector('#pdf-canvas');





        var _PDF_DOC,
            _CURRENT_PAGE,
            _TOTAL_PAGES,
            _PAGE_RENDERING_IN_PROGRESS = 0,
            _CANVAS = document.querySelector('#pdf-canvas');

        // initialize and load the PDF
        async function showPDF(pdf_url) {
            document.querySelector("#pdf-loader").style.display = 'block';

            // get handle of pdf document
            try {
                _PDF_DOC = await pdfjsLib.getDocument({
                    url: pdf_url
                });
            } catch (error) {
                alert(error.message);
            }

            // total pages in pdf
            _TOTAL_PAGES = _PDF_DOC.numPages;

            // Hide the pdf loader and show pdf container
            document.querySelector("#pdf-loader").style.display = 'none';
            document.querySelector("#pdf-contents").style.display = 'block';
            document.querySelector("#pdf-total-pages").innerHTML = _TOTAL_PAGES;

            // show the first page
            showPage(1);
        }

        // load and render specific page of the PDF
        async function showPage(page_no) {
            _PAGE_RENDERING_IN_PROGRESS = 1;
            _CURRENT_PAGE = page_no;

            // disable Previous & Next buttons while page is being loaded
            document.querySelector("#pdf-next").disabled = true;
            document.querySelector("#pdf-prev").disabled = true;

            // while page is being rendered hide the canvas and show a loading message
            document.querySelector("#pdf-canvas").style.display = 'none';
            document.querySelector("#page-loader").style.display = 'block';

            // update current page
            document.querySelector("#pdf-current-page").innerHTML = page_no;

            // get handle of page
            try {
                var page = await _PDF_DOC.getPage(page_no);
            } catch (error) {
                alert(error.message);
            }

            // original width of the pdf page at scale 1
            var pdf_original_width = page.getViewport(1).width;

            // as the canvas is of a fixed width we need to adjust the scale of the viewport where page is rendered
            var scale_required = _CANVAS.width / pdf_original_width;

            // get viewport to render the page at required scale
            var viewport = page.getViewport(scale_required);

            // set canvas height same as viewport height
            _CANVAS.height = viewport.height;

            // setting page loader height for smooth experience
            document.querySelector("#page-loader").style.height = _CANVAS.height + 'px';
            document.querySelector("#page-loader").style.lineHeight = _CANVAS.height + 'px';

            var render_context = {
                canvasContext: _CANVAS.getContext('2d'),
                viewport: viewport
            };

            // render the page contents in the canvas
            try {
                await page.render(render_context);
            } catch (error) {
                alert(error.message);
            }

            _PAGE_RENDERING_IN_PROGRESS = 0;

            // re-enable Previous & Next buttons
            document.querySelector("#pdf-next").disabled = false;
            document.querySelector("#pdf-prev").disabled = false;

            // show the canvas and hide the page loader
            document.querySelector("#pdf-canvas").style.display = 'block';
            document.querySelector("#page-loader").style.display = 'none';
        }

        // click on "Show PDF" buuton
        document.querySelector("#show-pdf-button").addEventListener('click', function() {
            this.style.display = 'block';
            showPDF('pdf/Saturn-Technical-Data.pdf');
        });

        // click on the "Previous" page button
        document.querySelector("#pdf-prev").addEventListener('click', function() {
            if (_CURRENT_PAGE != 1)
                showPage(--_CURRENT_PAGE);
        });

        // click on the "Next" page button
        document.querySelector("#pdf-next").addEventListener('click', function() {
            if (_CURRENT_PAGE != _TOTAL_PAGES)
                showPage(++_CURRENT_PAGE);
        });
    </script>
@endsection
