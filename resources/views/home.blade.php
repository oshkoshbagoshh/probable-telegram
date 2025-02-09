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
                color: #0a2463;
                /* Custom deep blue color */
            }

            .hero-subtitle {
                color: #5f6c7b;
                /* Subtle gray for the subtitle */
            }

            .cta-button {
                background-color: #ff6f61;
                /* Accent coral color */
                color: white;
                border-radius: 8px;
            }

            .cta-button:hover {
                background-color: #ff3b28;
                /* Darker coral for hover effect */
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
                    <a href="{{ route('user.register') }}" class="mt-4 button cta-button is-medium">
                        Explore Products
                    </a>
                </div>
            </div>
        </section>

        <!-- Trending Articles/Products Section -->
        <section>
            <div class="container">
                {{-- Include articles index --}}
                @include('articles.index', ['article' => $article])


                {{-- Loop through articles --}}
                @foreach ($article as $articles)
                    <div class="mt-4 card">
                        <div class="card-content">
                            <h2 class="title">{{ $articles->title }}</h2>
                            <p>{{ $articles->content }}</p>
                            <a href="{{ route('articles.show', $articles->id) }}" class="button is-link">Read More</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Scroll-to-Top Button -->
        <button id="scrollToTopBtn" class="button is-link"
            style="position: fixed; bottom: 20px; right: 20px; display: none;">
            ↑ Top
        </button>

        <script>
            const scrollToTopBtn = document.getElementById("scrollToTopBtn");

            window.addEventListener("scroll", () => {
                if (window.scrollY > 300) {
                    scrollToTopBtn.style.display = "block";
                } else {
                    scrollToTopBtn.style.display = "none";
                }
            });

            scrollToTopBtn.addEventListener("click", () => {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth",
                });
            });
        </script>
    </body>

    </html>
</x-layout>
