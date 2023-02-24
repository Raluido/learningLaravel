<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master en - @yield('title')</title>
</head>

<body>

    @include('includes.header')

    @yield('contentx')

    @section('footer')
    Este es el footer desde master
    @show


</body>

</html>