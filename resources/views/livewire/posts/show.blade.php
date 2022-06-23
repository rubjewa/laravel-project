<div>
    <div class="row">
        <div class="col-lg-8">
            <div class="max-w-4xl mx-auto py-20 prose lg:prose-xl">
                <h1 class="pb-3">{{ $post->title }}</h1>
                <p class="lh-base">{!! $post->description !!}</p>
                <div>
                    <i>Created at: {{ $post->created_at }}</i>
                </div>
            </div>
        </div>

        <x-partials.widget />
    </div>

</div>
