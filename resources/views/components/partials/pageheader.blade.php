<div>
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                @if (request()->routeIs('home'))
                <h1 class="fw-bolder">Homepagina</h1>
                <br />
                <p class="lead mb-0">Welkom op mijn Blog! Dit project is bedoeld om Laravel intergratie met Livewire te tonen. Livewire kan dynamisch componenten inladen zonder dat de gehele DOM structuur opnieuw moet worden ingeladen. Ook zijn er
                    features zoals Authorization, Validation, File Up- en Downloads, Traits en verschillende Loading States.</p>
                @elseif (request()->routeIs('posts-create'))
                <h1 class="fw-bolder">Post maken</h1>
                <br />
                <p class="lead mb-0">Maak hieronder een nieuwe post aan.</p>
                @elseif (request()->routeIs('showpost'))
                <h1 class="fw-bolder">Blogpost</h1>
                <br />
                <p class="lead mb-0">Lees hieronder de geselecteerde blogpost</p>
                @elseif (request()->routeIs('posts'))
                <h1 class="fw-bolder">Reference</h1>
                <br />
                <p class="lead mb-0">Catalogus van alle posts die zijn aangemaakt</p>
                @elseif(request()->routeIs('aboutme'))
                <h1 class="fw-bolder">Over mij</h1>
                <br />
                <p class="lead mb-0"></p>
                    
                @else
                @endif
            </div>
        </div>
    </header>
</div>
