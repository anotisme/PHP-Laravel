<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Jezlin') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="/css/style.css"> -->
    <link rel="stylesheet" href="/css/font-awesome/css/font-awesome.min.css">
</head>
<body>

<div id="app">
    @include('inc.navbar')

    @yield('content')

    @include('inc.footer')
</div>


<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="/js/jquery-3.5.1.min.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>

<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('.sh-counter-animate').each(function () {
            jQuery(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    });

</script>

<script type="text/javascript">
    jQuery(document).on('load', function ($) {
        if( typeof Typed !== 'undefined' ) {
            var typed = new Typed("#heading-animated .sh-heading-animated-typed", {
                strings: ["FEATURES","HIGHLIGHTS", ],
                contentType: 'html',
                typeSpeed: 0,
                loop: true,
                startDelay: 300,
                typeSpeed: 80,
                backSpeed: 20,
                backDelay: 700,
            });
        }
    });
</script>

</body>
</html>
