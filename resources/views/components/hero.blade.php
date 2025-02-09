<section class="hero is-primary" x-data="{ showSubtitle: true}">
    <div class="hero-body">
        <div class="container has-text-centered">
            <h1 class="title">{{ $title  }}</h1>
            @if(isset($subtitle))
                <h2 class="subtitle" x-show="showSubtitle"> {{ $subtitle }}</h2>
            @endif
            <button class="button is-light mt-3" @click="showSubtitle = !showSubtitle">
                Toggle Subtitle
            </button>
        </div>
    </div>
</section>