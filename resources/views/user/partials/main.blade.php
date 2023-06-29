<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PAAS</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('icon/css/all.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}


</head>

<body>
    <main>
        <div class="top">
            @include('user.partials.header')
            @yield('content1')
        </div>
        <hr style="height:2px; border:none; border-top:5px dotted #000;">
        @yield('content2')
       @include('user.partials.footer')
    </main>
</body>

</html>
