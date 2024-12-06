<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   {{--=================Bootstrap=======================--}}
   <link href="{{url('css/bootstrap.css')}}" rel="stylesheet">
   {{--=================Fontawesome=======================--}}
   <link href="{{url('fontawesome/css/fontawesome.css')}}" rel="stylesheet">
   <link href="{{url('fontawesome/css/brands.css')}}" rel="stylesheet">
   <link href="{{url('fontawesome/css/solid.css')}}" rel="stylesheet">
    <title>@yield('titre')</title>
</head>
<body>
    @include('partials.nav')

<div class="container">
    @yield('content')
</div>

@include('partials.footer')

    <script src="{{url('js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{url('js/bootstrap.bundle.js')}}"></script>
</body>
</html>
