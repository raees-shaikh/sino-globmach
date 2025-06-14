  <!-- Web Font -->
  <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;1,400;1,600&family=Spartan:wght@500;600;700;800;900&display=swap"
      rel="stylesheet">
  <!-- ========================= CSS here ========================= -->
  <link rel="stylesheet" href="{{ url('frontend/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('frontend/css/LineIcons.2.0.css') }}">
  <link rel="stylesheet" href="{{ url('frontend/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ url('frontend/fonts/flaticon.css') }}">
  <link rel="stylesheet" href="{{ url('frontend/css/animate.css') }}">
  <link rel="stylesheet" href="{{ url('frontend/css/tiny-slider.css') }}">
  <link rel="stylesheet" href="{{ url('frontend/css/glightbox.min.css') }}">
  <link rel="stylesheet" href="{{ url('frontend/css/typography.css') }}">
  <link rel="stylesheet" href="{{ url('frontend/css/style.css') }}">
  <link rel="stylesheet" href="{{ url('frontend/css/custom.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"
      integrity="sha256-ENFZrbVzylNbgnXx0n3I1g//2WeO47XxoPe0vkp3NC8=" crossorigin="anonymous" />

  @if (App::environment('production'))
      <!-- Google tag (gtag.js) -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-ME7ESNLX0K"></script>
      <script>
          window.dataLayer = window.dataLayer || [];

          function gtag() {
              dataLayer.push(arguments);
          }
          gtag('js', new Date());

          gtag('config', 'G-ME7ESNLX0K');
      </script>
  @endif

  <!--[if lte IE 9]>
<p class="browserupgrade">
  You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.
</p>
<![endif]-->
