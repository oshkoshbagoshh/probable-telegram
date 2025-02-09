<!doctype html>
<html lang="en">
<head>
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css" />
    <script src="//unkpg.com/alpinejs" defer></script>
    <title> @yield('title', 'JAOS') </title>

</head>
<body>
<!--- Header --->

{{--Navbar Partial--}}
@include('partials.navbar')

{{--Hero Component--}}
<x-hero title="Welcome to Our Store" subtitle="Shop the latest products" />

{{--Main Content--}}
<div class="container my-6">
    @yield('content')
</div>

{{--Footer Partial --}}
@include('partials.footer')

</body>
</html>