<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Tahiyat Ahmed | Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

@include('pages.header')
@include('pages.navbar')

<div class="container">
    @include('pages.sidebar')

    <main class="main-content fade-in">
        @yield('content')
    </main>
</div>

@include('pages.footer')

</body>
</html>
