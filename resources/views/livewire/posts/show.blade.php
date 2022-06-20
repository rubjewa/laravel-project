<div>
    <div class="card" style="width: 40rem;margin-bottom: 2rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->description }}
                <br /><br />
                <i>Created at: {{ $post->created_at }}</i>
            </p>
        </div>
    </div>
</div>
