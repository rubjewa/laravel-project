<div>
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            @foreach ($posts as $post)
            @if ( $post->featured )
            <div class="card mb-4">
                <div class="card-header">
                    Featured Post <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-award" viewBox="0 0 16 16">
                        <path
                          d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z" />
                        <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
                    </svg>
                </div>
                <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..."></a>
                <div class="card-body">
                    <div class="small text-muted">{{ $post->created_on }}
                    </div>
                    <h2 class="card-title">{{ $post->title }}</h2>
                    <p class="card-text">{{ Str::limit($post->description, 400) }}</p>
                </div>
                <div class="card-body">
                    <button class="btn btn-primary" wire:click="showPost({{ $post->id }})">Lees meer →</button>
                    <span href="#" class="badge badge-secondary float-right mr-1">Example Tag</span>
                    <span href="#" class="badge badge-secondary float-right mr-1">Laravel</span>
                    <span href="#" class="badge badge-secondary float-right mr-1">Livewire</span>
                    <span href=" #" class="badge badge-secondary float-right mr-1">PHP</span>
                </div>
            </div>
            @endif
            @endforeach
            <!-- Nested row for non-featured blog posts-->
            @foreach ($posts->chunk(2) as $chunk)
            <div class=" row">
                @foreach ($chunk as $post)
                <div class="col-lg-6">
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..."></a>
                        <div class="card-body">
                            <h2 class="card-title h4">{{ $post->title }}</h2>
                            <p class="card-text">{{ Str::limit($post->description, 115) }}</p>
                            <button class="btn btn-primary" wire:click="showPost({{ $post->id }})">Lees meer →</button>
                        </div>
                        <div class="card-footer text-muted">
                            <i>{{ $post->created_at->isoFormat('D-MM-Y') }}</i>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>

        <x-partials.widget />
    </div>

    {{ $posts->links() }}
</div>
