<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title')</title>
<link rel="stylesheet" href="">
@vite (['resources/sass/app.scss','resources/js/app.js'])
</head>
<body>

@include('header')
    @section('content')
    @show

    @include('footer')


    
</body>
</html>