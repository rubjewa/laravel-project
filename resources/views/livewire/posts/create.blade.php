<div>
    <div class="container mx-auto px-4">
        <form wire:submit.prevent="submit">
            <div class="form-group">
                <div wire:ignore>
                    <label for="postTitle">Post Titel</label>
                    <input type="text" class="form-control" placeholder="Voer de titel van de post in" name="title" wire:model.defer="title">
                    @error('title') <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="postDescription">Post Tekst</label>
                <div wire:ignore>
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css" />

                    <input id="textinput" type="hidden" name="description">
                    <trix-editor input="textinput" wire:model.defer="description" placeholder="Voer de beschrijving van de post in"></trix-editor>

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"></script>
                </div>
            </div>

            <div class="form-group">
                <label for="postTags" class="form-label">Post Categoriën</label>
                <div wire:ignore>
                    <select class="form-select" id="postTags" name="tags[]" seperator multiple data-allow-clear="1" data-allow-new="true" wire:model.defer="stringArray">
                        <option selected disabled hidden value="">Voer een of meerdere categoriën in...</option>
                    </select>
                </div>
            </div>
            {{-- <div class="form-group">
                <div wire:ignore>
                    <label for="postFeatured" class="form-label">Uitgelichte Post?</label>
                    <input type="checkbox" class="form-checkbox" id="postFeatured" name="featured" wire:model.defer="featured" />
                </div>
            </div> --}}
            <button type="submit" class="btn btn-primary">Post Opslaan</button>
        </form>
    </div>

    <script type="module">
        import Tags from "https://cdn.jsdelivr.net/gh/lekoala/bootstrap5-tags@master/tags.js";
        Tags.init("select");
    </script>

</div>
