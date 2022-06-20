<div>
    @foreach ($posts as $post)
    <div class="card" style="width: 18rem;margin-bottom: 2rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->description }}
                <br />
                Created at: {{ $post->created_at }}
            </p>
        </div>
    </div>
    @endforeach
</div>
