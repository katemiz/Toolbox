<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME')}}</title>

    {{-- <link href="{{ mix('css/app.css') }}" rel="stylesheet"> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- <link rel="stylesheet" href="{{ asset('/css/sweetalert2_min.css') }}">
    <script src="{{ asset('/js/sweetalert2.min.js') }}"></script> --}}

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @livewireStyles
</head>
<body>

    @include('components.navbar')

    {{ $slot }}

    @include('components.footer')

    @livewireScripts
</body>
</html>
