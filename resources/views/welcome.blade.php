<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <title>Coming Soon</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="https://livedemo00.template-help.com/wt_prod-7863/images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/css.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" id="main-styles-link">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
<![endif]-->
</head>
<body>
    <div class="page">
      <!-- Page content-->
      <section class="section section-single bg-gray-800" style="background-image: url(/assets/images/bg-image-3.jpg);">
        <div class="section-single-inner">
          <div class="section-single-dummy"></div>
          <div class="section-single-main">
            <div class="container"> 
              <div class="row row-30 justify-content-center justify-content-sm-start">
                <div class="col-sm-10 col-md-9 col-lg-7 col-xl-6">
                  <h6 class="title-decorated title-decorated-lg">We're getting ready to launch in</h6>
                  <!-- TimeCircles-->
                  <div class="countdown-wrap">
                    <div class="DateCountdown" data-type="until" data-date="2019-12-31 00:00:00" data-format="wdhms" data-color="#4854ed" data-bg="rgba(245, 245, 245, 1)" data-width="0.02"></div>
                </div>
                <p>Our website is under construction, we are working very hard to give you the best experience on our new web site.</p>
                {{-- <div class="rd-mailform-wrap">  --}}
                    <!-- RD Mailform-->
                    {{-- <div class=""> --}}
                        @guest
                        <a class="button button-lg button-primary button-winona wow slideInDown" href="{{ route('login') }}" data-caption-animate="slideInDown" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s;">
                            Login
                        </a>
                        <a class="button button-lg button-default button-winona wow slideInDown" href="{{ route('register') }}" data-caption-animate="slideInDown" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s;">
                            Register
                        </a>
                        @else
                        <a class="button button-lg button-default button-winona wow slideInDown" href="{{ route('home') }}" data-caption-animate="slideInDown" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s;">
                            Dashboard
                        </a>
                        @endguest
                    {{-- </div> --}}
                {{-- </div> --}}
            </div>
        </div>
    </div>
</div>
<div class="footer-minimal section-single-footer">
    <div class="container">
      <div class="footer-minimal-inner">
        <a class="brand" href="{{ route('home') }}">
            <img src="{{ asset('assets/images/logo-light-141x21.png') }}" alt="" width="141" height="21" srcset="/assets/images/logo-light-281x45.png 2x"/>
        </a>
        <!-- Rights-->
        <p class="rights">
            <span>&copy;&nbsp;</span>
            <span class="copyright-year"></span>
            <span>&nbsp;</span>
            <span>All Rights Reserved.</span>
            <span>&nbsp;</span>
            <br class="d-sm-none"/>
            <a href="coming-soon.html#">Terms of Use</a>
            <span> and</span>
            <span>&nbsp;</span>
            <a href="#">Privacy Policy</a>
        </p>
    </div>
</div>
</div>
</div>
</section>
</div>
{{-- <div class="preloader"> 
  <div class="preloader-logo">
    <img src="{{ asset('assets/images/logo-default-141x21.png') }}" alt="" width="141" height="21" 
    srcset="/assets/images/logo-default-281x45.png 2x"/>
</div> --}}
<div class="preloader-body">
    {{-- <div id="loadingProgressG">
      <div class="loadingProgressG" id="loadingProgressG_1"></div>
  </div> --}}
</div>
</div>
<!-- Global Mailform Output-->
{{-- <div class="snackbars" id="form-output-global"></div> --}}
<!-- Javascript-->
<script src="{{ asset('assets/js/core.min.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
</body>
<!-- Google Tag Manager -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');
</script>
<!-- End Google Tag Manager -->
</html>