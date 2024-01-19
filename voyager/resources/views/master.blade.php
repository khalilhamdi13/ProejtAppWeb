<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        @yield('stylesheets')

        <title>architecte</title>
    </head>
    <body>

        @include('partials.navbar')
        <div class="container mt-4">

            @yield('content')

        </div>


<script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

@yield('javascripts')
    </body>
</html>
