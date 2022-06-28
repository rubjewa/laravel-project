<!-- Side widgets-->
<div>
    <!-- Search widget-->
    <div class="card mb-4">
        <div class="card-header">Zoeken</div>
        <div class="card-body">
            <div class="input-group" data-dashlane-rid="b10234f02a02bba1" data-form-type="">
                <input class="form-control" type="text" wire:model="term" placeholder="Zoek binnen posts..." aria-label="Enter search term..." aria-describedby="button-search" data-dashlane-rid="12ac5ecc45370bd7" data-form-type="">
                <button class="btn btn-primary" id="button-search" type="button" data-dashlane-rid="672389ce530eca5b" data-dashlane-label="true" data-form-type="">Go!</button>
            </div>
        </div>
    </div>
    <!-- Categories widget-->
    <!-- TODO: Make tags list and clickable with search -->
    <div class="card mb-4">
        <div class="card-header">Categories</div>
        <div class="card-body">
          {{-- @foreach(explode(';', $commonCategories->chunk(2)) as $chunk) --}}
            <div class="row">
                {{-- <div class="col-sm-6">
                    <ul class="list-unstyled mb-0">
                        @foreach ($chunk as $category)
                        <li><a href="#!">{{ $category }}</a></li>
                      @endforeach
                    </ul>
                </div> --}}
                <div class="col-sm-6">
                    <ul class="list-unstyled mb-0">
                        <li><a href="#!">Laravel</a></li>
                        <li><a href="#!">PHP</a></li>
                        <li><a href="#!">Bootstrap</a></li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <ul class="list-unstyled mb-0">
                        <li><a href="#!">Livewire</a></li>
                        <li><a href="#!"></a></li>
                        <li><a href="#!"></a></li>
                    </ul>
                </div>
            </div>
          {{-- @endforeach --}}
        </div>
    </div>

</div>
