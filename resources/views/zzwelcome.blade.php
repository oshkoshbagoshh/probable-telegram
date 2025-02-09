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
<x-hero />




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