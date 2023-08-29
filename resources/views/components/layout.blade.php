<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $title ?? __('layout.home') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/images/icons/favicon.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/themify/themify-icons.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/lightbox2/css/lightbox.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/css/util.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <!--===============================================================================================-->
</head>
<body class="animsition">

<x-header/>

<!-- Sidebar -->
<aside class="sidebar trans-0-4">
    <!-- Button Hide sidebar -->
    <button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

    <!-- - -->
    <ul class="menu-sidebar p-t-95 p-b-70">
        <li class="t-center m-b-13">
            <a href="{{ route('home') }}" class="txt19">{{ __('layout.home') }}</a>
        </li>

        <li class="t-center m-b-13">
            <a href="{{ route('menu') }}" class="txt19">{{ __('layout.menu') }}</a>
        </li>

        <li class="t-center m-b-13">
            <a href="{{ route('gallery') }}" class="txt19">{{ __('layout.gallery') }}</a>
        </li>

        <li class="t-center m-b-13">
            <a href="{{ route('about') }}" class="txt19">{{ __('layout.about') }}</a>
        </li>

        <li class="t-center m-b-13">
            <a href="{{ route('blog.index') }}" class="txt19">{{ __('layout.blog') }}</a>
        </li>

        <li class="t-center m-b-33">
            <a href="{{ route('contact') }}" class="txt19">{{ __('layout.contact') }}</a>
        </li>

        <li class="t-center m-b-33">
            <select class="form-control text-center changeLang">
                <option value="uz" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>O'zbekcha</option>
                <option value="ru" {{ session()->get('locale') == 'ru' ? 'selected' : '' }}>Русский</option>
                <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
            </select>
        </li>

        <li class="t-center">
            <!-- Button3 -->
            <a href="{{ route('reservation') }}" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">
                {{ __('layout.reservation') }}
            </a>
        </li>
    </ul>
</aside>

{{ $slot }}


<x-footer/>


<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
</div>

<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>

<!-- Modal Video 01-->
<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">

    <div class="modal-dialog" role="document" data-dismiss="modal">
        <div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

        <div class="wrap-video-mo-01">
            <div class="w-full wrap-pic-w op-0-0"><img src="/images/icons/video-16-9.jpg" alt="IMG"></div>
            <div class="video-mo-01">
                <iframe src="https://www.youtube.com/embed/5k1hSu2gdKE?rel=0&amp;showinfo=0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>


<!--===============================================================================================-->
<script type="text/javascript" src="/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="/vendor/bootstrap/js/popper.js"></script>
<script type="text/javascript" src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="/vendor/daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="/vendor/slick/slick.min.js"></script>
<script type="text/javascript" src="/js/slick-custom.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="/vendor/parallax100/parallax100.js"></script>
<script type="text/javascript">
    $('.parallax100').parallax100();
</script>
<!--===============================================================================================-->
<script type="text/javascript" src="/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="/vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript">

    var url = "{{ route('changeLang') }}";

    $(".changeLang").change(function () {
            window.location.href = url + "?lang=" + $(this).val();
    });

</script>
<!--===============================================================================================-->
<script src="/js/main.js"></script>

</body>
</html>
