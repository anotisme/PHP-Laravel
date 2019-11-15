<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Product</title>
</head>
<body>
    @include('inc.navbar')

    <div class="container">
        <div class="row">
            @foreach($articles1 as $article1)
            <div class="col-xs-12 col-md-8">
                {{$article1['title']}}
            </div>
            @endforeach
        </div>
    </div>

    @include('inc.footer')
</body>
</html>
