<div class="row">
    <div class="col-lg-12">
        <!-- Post content-->
        <article>
            <!-- Post header-->
            <header class="mb-4">
                <!-- Post title-->
                <h1 class="fw-bolder mb-1">{{ $post->title }}</h1>
                <!-- Post meta content-->
                <div class="text-muted fst-italic mb-2">Gepost op {{ $post->created_at }}</div>
                @if ($post->tags != "")
                @foreach(explode(';', $post->tags) as $tag)
                <!-- Post categoriën --><a class="badge badge-primary text-decoration-none link-light" href="#!">{{ ucfirst($tag) }}</a>
                @endforeach
                @endif
            </header>
            <!-- Preview image figure-->
            <figure class="mb-4"><img class="img-fluid rounded" src="https://d1hdtc0tbqeghx.cloudfront.net/wp-content/uploads/2020/07/27141257/laravel-livewire.jpg" alt="..."></figure><br />

            <!-- Post content-->
            <section class="mb-5">
              <p class="text-lg">
                {!! $post->description !!}
              </p>
            </section>
        </article>

        <hr /><br />

    </div>
</div>
