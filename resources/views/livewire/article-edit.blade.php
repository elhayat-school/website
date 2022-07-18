<td colspan="5" x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
    x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false"
    x-on:livewire-upload-progress="progress = $event.detail.progress">
    <form wire:submit.prevent="addMedia">
        <div class="w-full">
            <x-label for="medias[]" :value="__('Media')" />

            <input name="medias[]" type="file" multiple="multiple" accept=".jpg,.png,.mp4" wire:model="medias" />

            <button>ajouter</button>
              <!-- Progress Bar -->
              <div x-show="isUploading">
                <span max="100" x-text="progress"></span>
            </div>
        </div>
    </form>
</td>
