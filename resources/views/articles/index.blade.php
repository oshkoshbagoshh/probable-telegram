<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Listing</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
<section class="section">
    <div class="container">
        <h1 class="title">Article Listing</h1>
        <div class="columns is-multiline">
            @foreach ($articles as $article)
                <div class="column is-4">
                    <div class="box">
                        <h2 class="title is-5">{{ $article['title'] }}</h2>
                        <p class="subtitle is-6">Published on: {{ $article['published_at'] }}</p>
                        <p>{{ Str::limit($article['content'], 100) }}</p>
                        <a href="{{ route('articles.show', $article['id']) }}" class="button is-primary is-small">Read More</a>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
</body>
</html>
