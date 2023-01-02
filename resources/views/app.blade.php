<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <!-- Fontfaces CSS-->
    <link href="{{{ URL::asset('css/font-face.css') }}}" rel="stylesheet" media="all">
    <link href="{{{ URL::asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}}" rel="stylesheet" media="all">
    <link href="{{{ URL::asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}}" rel="stylesheet" media="all">
    <link href="{{{ URL::asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}}" rel="stylesheet" media="all">
    <!-- Bootstrap CSS-->
    <link href="{{{ URL::asset('vendor/bootstrap-4.1/bootstrap.min.css')}}}" rel="stylesheet" media="all">
    <link href="{{{ URL::asset('vendor/animsition/animsition.min.css')}}}" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="{{{ URL::asset('css/theme.css')}}}" rel="stylesheet" media="all">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
    <!--
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;

        }

        .color-container{
            width: 16px;
            height: 16px;
            display: inline-block;
            border-radius: 4px;
        }

        a{
            text-decoration: none;
        }
    </style>
    -->
</head>
<body>
<!--
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Inici</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contacte</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
-->
    <div class="page-wrapper">@include('partials.header') @include('partials.sidebar')
        <div class="page-container">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">@yield('content')</div>
                </div>
            </div>
            <div class="col-sm-12">@include('partials.footer')</div>
        </div>
    @yield('content')
    </div>
</body>
</html>
