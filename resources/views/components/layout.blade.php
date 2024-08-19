<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        {{-- Google fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/bootstrap_5.0.2.rtl.min.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="m-lg-5 m-2">
            {{ $slot }}

            @include('partials/footer')
        </div>
    </body>
</html>
