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
<main>

{{ $slot }}
</main>

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