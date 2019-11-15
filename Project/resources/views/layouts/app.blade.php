<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>My site</title>
</head>
<body>
    @include('inc.navbar')

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8">
                @yield('content')
            </div>
            <div class="col-xs-12 col-md-4">
                @include('inc.sidebar')
            </div>
        </div>
    </div>

    @include('inc.footer')
</body>
</html>
