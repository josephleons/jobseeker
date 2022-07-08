<!DOCTYPE html>
<html lang="{{'confi-langate'}}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('bootstrap-icons/font/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{url('bootstrap-icons/bootstrap-icons.svg')}}">
    {{-- Boot v5 --}}
    {{--
    <link rel="stylesheet" href="{{url('bootstrap/dist/css/bootstrap.css')}}"> --}}
    <link rel="stylesheet" href="{{url('bootstrap/dist/js/bootstrap.min.js')}}">
    {{-- icons --}}

    <link rel="stylesheet" href="{{url('assets/css/all.css')}}">

    {{-- custom style cssclear --}}
    <link rel="stylesheet" href="{{url('assets/css/custom.css')}}">
    {{-- Bootstrap 4 --}}
    {{-- <link rel="stylesheet" href="{{url('assets/css/bootstrap.css')}}"> --}}
    {{-- {bootstrap 5} --}}
    <link rel="stylesheet" href="{{url('bootstrap/dist/css/bootstrap.css')}}">
    <link rel="shortcut icon" style="width:50px" class="shadow rounded-circle m-3" href="{{url('assets/images/favicon.png')}}">
    <title>{{config('app.name','JOBSEK')}}</title>
</head>

<body style="background-color: #F1F6F9">
    @include('inc.navbar')
    <div class="container-fluid mx-auto">
        {{-- @include('inc.messages') --}}
        @yield('content')
    </div>










    {{-- composer require unisharp/laravel-ckeditor --}}
    <script src="{{url('ckeditor4/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace('ckeditor');
    </script>


</body>

</html>

<script src="{{url('assets/js/jquery-3.4.1.slim.min.js')}}"></script>
<script src="{{url('/assets/js/popper.min.js')}}"></script>
<script src="{{url('assets/js/bootstrap.min.js')}}"></script>