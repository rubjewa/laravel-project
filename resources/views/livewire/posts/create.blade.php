<div class="container mx-auto px-4">
    <h1 class="text-4xl mt-6 tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">Create Post</h1>
    <p class="text-lg mt-2 text-gray-600">Maak hieronder een nieuwe post aan.</p><br />

    <form wire:submit.prevent="submit">
        <div class="form-group">
            <label for="exampleInputTitle">Post Titel</label>
            <input type="text" class="form-control" placeholder="Voer de titel van de post in" wire:model="title">
            @error('title') <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="exampleInputDescription">Post Tekst</label>
            <div wire:ignore>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css" />

                <input id="textinput" type="hidden" name="content">
                <trix-editor input="textinput" wire:model="description"></trix-editor>

                <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"></script>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Post Opslaan</button>

    </form>
</div>
