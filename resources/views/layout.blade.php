<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Image upload in Laravel 5.1 with Dropzone.js</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {!! HTML::style('/packages/bootstrap/css/bootstrap.min.css') !!}
    {!! HTML::style('/assets/css/style.css') !!}
    {!! HTML::script('https://code.jquery.com/jquery-2.1.4.min.js') !!}

    @yield('head')

</head>

<body>

<div class="container">

    
    <br><br>

@yield('content')

</div>
</body>

@yield('footer')
</html>