<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodi Sistem Informasi @yield('title')</title>
      
    <link rel="stylesheet" href="{{asset('css/app.css') }}">
</head>
<body>
    {{--Header /Navigation --}}
    @include('Partials.header') 
    
    {{-- Konten halaman --}}
    <main class="container">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('Partials.footer')

</body>
</html>