<!DOCTYPE html>


<html lang="ar" dir="rtl">

<!-- begin::Head -->

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">


    <!--begin::Global Theme Styles -->
    <link href="{{asset('metronic/assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />

    <!--RTL version:<link href="{{asset('metronic/assets/vendors/base/vendors.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />-->
    <link href="{{asset('metronic/assets/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />

    <!--RTL version:<link href="{{asset('metronic/assets/demo/default/base/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />-->

    <!--end::Global Theme Styles -->
    <link rel="shortcut icon" href="{{asset('metronic/assets/demo/default/media/img/logo/favicon.ico')}}" />
    <style>
    html {
        direction: rtl;

    }

    body,
    a,
    input,
    button {
        font-family: 'Tajawal', sans-serif !important;
    }

    .alert-dismissible .close {
        left: 0;
        right: auto;
    }

    .alert .close:before {
        content: "x";
    }
    </style>
    @yield('css')
</head>

<!-- end::Head -->

<!-- begin::Body -->

<body
    class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--2 m-login-2--skin-2"
            id="m_login" style="background-image: url({{asset('metronic/assets/app/media/img//bg/bg-3.jpg')}});">
            <div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
                <div class="m-login__container">
                    <div class="m-login__logo">
                        <a href="#">
                            <img src="{{asset('5865.jpg')}}" style="max-width: 340px">
                        </a>
                    </div>
                    <div class="m-login__signup">
                        <div class="m-login__head">
                            <h3 class="m-login__title">@yield('main-title')</h3>
                            <div class="m-login__desc">@yield('sub-title')</div>
                            <div class="mt-3 text-right">
                                @include("layout.shared.msg")
                            </div>
                        </div>

                        @yield('content')

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end:: Page -->

    <!--begin::Global Theme Bundle -->
    <script src="{{asset('metronic/assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
    <script src="{{asset('metronic/assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>
    @yield('js')
    <!--end::Global Theme Bundle -->


</body>

<!-- end::Body -->

</html>
