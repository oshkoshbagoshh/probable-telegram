@props('$articles')
<x-layout>

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
</x-layout>

