<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>My First Laravel Website</title>
</head>
<body>
    @include('partials.navbar')
    <div class="container">
        @if(Request::is('/'))
            @include('partials.showcase')
        @endif
        <div class="row">
            <div class="col-md-8 col-lg-8">
                 @yield('content')  
            </div>
            <div class="col-md-4 col-lg-4">
                @include('partials.sidebar')
            </div>
        </div>
    </div>
    <footer id="footer" class="text-center">
        <p>Copyright 2018 &copy; VMC</p>
    </footer>
</body>
</html>