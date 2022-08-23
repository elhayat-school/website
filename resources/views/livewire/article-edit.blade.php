<td colspan="5" x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
    x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false"
    x-on:livewire-upload-progress="progress = $event.detail.progress"
    class="bg-gray-100 p-2">

    <form wire:submit.prevent="edit">

        <div class="w-full flex flex-col space-y-2">

            <x-label for="title" :value="__('Titre')" />

            <input name="title" type="text" wire:model="title">

            <x-label for="medias[]" :value="__('Media')" />

            <input name="medias[]" type="file" multiple="multiple" accept=".jpg,.png,.mp4" wire:model="medias" />

            <button type="submit">Modifier</button>
              <!-- Progress Bar -->
              <div x-show="isUploading">
                <span max="100" x-text="progress"></span>
            </div>

        </div>

    </form>
</td>
