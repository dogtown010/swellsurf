<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="https://kit.fontawesome.com/76a607765f.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <title>@yield('title')</title>
</head>
<body>
    @section('sidebar')
    @show

    <div>
        @yield('content')
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script>
        $('.navbar-nav>li>a').on('click', function(){
            $('.navbar-collapse').collapse('hide');
        });
    </script>
</body>
</html>