<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <style>
        .hero {
            background-color: #f5f5f5;
        }
        .hero svg {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
<!-- Navigation Bar -->
<nav class="navbar is-primary" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="#">My Website</a>
    </div>
    <div class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="#">Home</a>
            <a class="navbar-item" href="#">About</a>
            <a class="navbar-item" href="#">Services</a>
            <a class="navbar-item" href="#">Contact</a>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="columns is-centered">
                <div class="column is-half">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 300">
                        <rect width="500" height="300" fill="#00d1b2" />
                        <circle cx="250" cy="150" r="100" fill="#3273dc" />
                        <text x="50%" y="50%" font-size="48" fill="#fff" text-anchor="middle" dy=".3em">Blog</text>
                    </svg>
                </div>
            </div>
            <h1 class="title is-1">
                Welcome to My Website
            </h1>
            <h2 class="subtitle is-4">
                Innovate with modern solutions
            </h2>
            <a href="#" class="button is-primary is-large">
                Get Started
            </a>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="content has-text-centered">
        <p>
            &copy; 2025 My Website. All rights reserved.
        </p>
    </div>
</footer>
</body>
</html>