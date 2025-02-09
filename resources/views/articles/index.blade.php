<section>
    <div class="container">
        <div class="card">
            <div class="card-image">
                <figure class="image is-4by3">
                    <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                </figure>
            </div>
            <div class="card-content">
                <div class="media">
                    <div class="media-left">
                        <figure class="image is-48x48">
                            <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="media-content">
                        <p class="title is-4">Title</p>
                        <p class="subtitle is-6">@subtitle</p>
                    </div>
                </div>
                <div class="content">
                    Enter Content here <a href="#">@bulmaio</a>.
                    <a href="#">#css</a> <a href="#">#responsive</a>
                    <br>
                    <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                </div>
            </div>
        </div>

        {{-- Include articles index --}}
        @include('articles.index')

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
