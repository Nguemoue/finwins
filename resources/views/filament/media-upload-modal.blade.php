<div>
    <h2 class="text-lg font-medium">Sélectionnez vos fichiers</h2>
    <form wire:submit.prevent="uploadFiles">
        <x-filament::file-upload
            name="media"
            multiple
            label="Télécharger des fichiers"
            required
        />
        <div class="mt-4">
            <x-filament::button type="submit">Télécharger</x-filament::button>
        </div>
    </form>
</div>
