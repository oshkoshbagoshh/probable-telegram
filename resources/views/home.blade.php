<x-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bulma Hero Section</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
        <style>
            /* Custom styles for the logo and hero */
            .hero-logo {
                max-width: 150px;
                margin-bottom: 20px;
            }
            .hero-title {
                color: #0a2463; /* Custom deep blue color */
            }
            .hero-subtitle {
                color: #5f6c7b; /* Subtle gray for the subtitle */
            }
            .cta-button {
                background-color: #ff6f61; /* Accent coral color */
                color: white;
                border-radius: 8px;
            }
            .cta-button:hover {
                background-color: #ff3b28; /* Darker coral for hover effect */
            }
        </style>
    </head>
    <body>
    <x-navbar />

    <!-- Hero Section -->
    <section class="hero is-medium is-light">
        <div class="hero-body">
            <div class="container has-text-centered">
                <!-- Logo -->
                <img src="{{ asset('/img/hero-logo.svg') }}" alt="Logo" class="hero-logo">

                <!-- Title -->
                <h1 class="title hero-title is-size-1">
                    Welcome to Klutch Products
                </h1>

                <!-- Subtitle -->
                <p class="subtitle hero-subtitle is-size-4">
                    Your trusted source for product reviews and trending items.
                </p>

                <!-- Call-to-Action Button -->
                <a href="{{ 'user.register' }}" class="button cta-button is-medium mt-4">
                    Explore Products
                </a>
            </div>
        </div>
    </section>

    {{--  show trending articles / products --}}
<section>

    @include('articles.index')>

    @foreach($article as $articles)

    @endforeach
</section>




    </body>
    </html>
{{--    TODO: insert scroll to the top button --}}
</x-layout>
