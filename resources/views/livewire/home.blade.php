<div>
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Rubens Blog Homepage</h1>
                <p class="lead mb-0"></p>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <!-- Featured blog post-->
                @foreach ($posts as $post)
                @if ($loop->first)
                <div class="card mb-4">
                    <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..."></a>
                    <div class="card-body">
                        <div class="small text-muted">{{ $post->created_on }}
                        </div>
                        <h2 class="card-title">{{ $post->title }}</h2>
                        <p class="card-text">{{ $post->description }}</p>
                        <a class="btn btn-primary" href="#!">Read more →</a>
                    </div>
                </div>
                @endif
                @endforeach
                <!-- Nested row for non-featured blog posts-->
                @foreach ($posts->chunk(2) as $chunk)
                <div class="row">
                    @foreach ($chunk as $post)
                    <div class="col-lg-6">
                        <!-- Blog post-->
                        <div class="card mb-4">
                            <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..."></a>
                            <div class="card-body">
                                <div class="small text-muted">{{ $post->created_on }}</div>
                                <h2 class="card-title h4">{{ $post->title }}</h2>
                                <p class="card-text">{{ $post->description }}</p>
                                <a class="btn btn-primary" href="#!">Read more →</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endforeach

                {{ $posts->links() }}
            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">
                <!-- Search widget-->
                <div class="card mb-4">
                    <div class="card-header">Search</div>
                    <div class="card-body">
                        <div class="input-group" data-dashlane-rid="b10234f02a02bba1" data-form-type="">
                            <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" data-dashlane-rid="12ac5ecc45370bd7" data-form-type="">
                            <button class="btn btn-primary" id="button-search" type="button" data-dashlane-rid="672389ce530eca5b" data-dashlane-label="true" data-form-type="">Go!</button>
                        </div>
                    </div>
                </div>
                <!-- Categories widget-->
                <div class="card mb-4">
                    <div class="card-header">Categories</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#!">Web Design</a></li>
                                    <li><a href="#!">HTML</a></li>
                                    <li><a href="#!">Freebies</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#!">JavaScript</a></li>
                                    <li><a href="#!">CSS</a></li>
                                    <li><a href="#!">Tutorials</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Side widget-->
                <div class="card mb-4">
                    <div class="card-header">Side Widget</div>
                    <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                </div>
            </div>
        </div>
    </div>
</div>
