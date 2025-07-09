<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Tahiyat Ahmed | Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

@include('pages.header')
@include('pages.navbar')

<div class="hero">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1 class="hero-title">👋 Hi, I'm Tahiyat Ahmed</h1>
        <p class="hero-subtitle">Laravel & Web Developer | CS Student</p>
        <div class="hero-buttons">
            <a href="{{ url('/about') }}" class="btn">About Me</a>
            <a href="{{ url('/projects') }}" class="btn btn-secondary">Projects</a>
            <a href="{{ url('/download-cv') }}" class="btn">Download CV</a>
        </div>
    </div>
</div>

<div class="container">
    @include('pages.sidebar')

    <main class="main-content fade-in">
        <section class="section">
            <h2>Latest Project</h2>
            <p>Check out my latest Laravel project where I built a dynamic job marketplace with clean backend structure and interactive frontend components.</p>
            <a href="{{ url('/projects') }}" class="btn">View Projects</a>
        </section>
    </main>
</div>

@include('pages.footer')

</body>
</html>
