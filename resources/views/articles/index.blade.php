<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bulma CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
</head>
<body>
<section class="section">
    <div class="container">
        <h1 class="title">Article Listing</h1>
        <div class="columns is-multiline">
            @foreach($articles as $article)
                <div class="column is-4">
                    <div class="box">
                        <h2 class="title is-5">{{ $article['title'] }}</h2>
                        <p class="subtitle is-6">Published on: {{ $article['published_at'] }}</p>
                        

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Optional JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
</body>
</html>