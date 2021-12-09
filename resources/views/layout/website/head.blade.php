<head>
    <title>Laravel Project</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('website_style/images/icons/favicon.png')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('website_style/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('website_style/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('website_style/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('website_style/fonts/linearicons-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('website_style/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('website_style/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('website_style/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('website_style/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('website_style/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('website_style/vendor/slick/slick.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('website_style/vendor/MagnificPopup/magnific-popup.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('website_style/vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('website_style/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('website_style/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        body,.btn.m-btn--custom,.m-subheader .m-subheader__title,.form-control,.btn,.col-form-label{
            font-family: 'Tajawal', sans-serif;
        }
        h3,h1,h2,h4,h5,h6{
            font-weight:bold !important;
        }
        .form-control{
            padding:0.75rem 1.15rem;
        }
        .col-form-label,.form-control-label
        {
            font-size: 16px !important;
        }
        .m-radio
        {
            font-size: 14px !important;
        }
        hr{
            height:0px !important;
            border:none;
            margin-top:25px;
            border-bottom:1px solid #ebedf2;

        }

        .my-active span {
            background-color: #00c5dc !important;
            color: white !important;
            border-color: #00c5dc !important;
        }

        .fade {
            opacity: 1;
            -webkit-transition: opacity .15s linear;
            -o-transition: opacity .15s linear;
            transition: opacity .15s linear;
        }

        .sorting {
            text-align: center;
        }

        th {
            text-align: right !important;
        }

        .m-radio, .m-checkbox {
            margin-bottom: 0px !important;
        }

        select.form-control {
            padding-top: 5px;
        }

        .custom-arrow-style {
            right: auto !important;
            left: 13px !important;
        }
        @yield("css")

    </style>
    <!--===============================================================================================-->
</head>
