<div>
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Homepagina</h1>
                <p class="lead mb-0"></p>
            </div>
        </div>
    </header>

    <div class="container">
        <!-- Blog Welcome message -->
        <div class="card mb-4">
            <div class="card-header">
                Welkom!
            </div>
            <div class="card-body">
                <p>
                    Welkom op mijn Blog! Dit project is bedoeld om Laravel intergratie met Livewire te tonen.
                    Livewire kan dynamisch componenten inladen zonder dat de gehele DOM structuur opnieuw moet worden ingeladen. 
                    Ook zijn er features zoals Authorization, Validation, File Up- en Downloads, Traits en verschillende Loading States.
                </p>
            </div>
        </div>

        {{-- <livewire:Posts/ShowAll /> --}}
        @livewire('posts.show-all')

    </div>
</div>
