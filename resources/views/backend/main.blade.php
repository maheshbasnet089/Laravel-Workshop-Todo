<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('backend.includes.css')
</head>
<body>
    @include('backend.includes.header')
    @include('backend.includes.navbar')
    {{-- body --}}
    @yield('content')

    @include('backend.includes.footer')
    {{--/body--}}
    @include('backend.includes.js')

</body>
</html>