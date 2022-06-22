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
        {{-- <livewire:Posts/ShowAll /> --}}
        @livewire('posts.show-all')

    </div>
</div>
