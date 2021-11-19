<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>


</head>

<body class="antialiased">
    @include('header')
    <div>
        Main layout:<br>
        @yield('content')
    </div>
    @include('footer')

</body>

</html>