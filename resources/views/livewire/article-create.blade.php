<div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
    x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false"
    x-on:livewire-upload-progress="progress = $event.detail.progress" class="p-6 bg-white border-b border-gray-200">

    <x-article-validation-errors />

    <form method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-10">

            <div>
                <x-label for="title" :value="__('Titre')" />
                <x-input id="title" class="block w-full" type="text" name="title" :value="old('title')" required
                    autofocus />
                <textarea title="content" name="content" placeholder="contenu" id="editor" class="h-52 mt-5 w-full"> </textarea>
            </div>

            <div class="container lg:row-span-2">
                <x-input id="cover" name="cover" type="file" wire:model="cover" accept=".jpg,.png"
                class="m-auto" />
                @if ($cover)
                    Photo de couverture:
                    <img src="{{ $cover->temporaryUrl() }}" class="lg:my-5 my-2 rounded-lg  border-4 p-5 border-gray-400">
                @else
                    <div class="my-5 p-5 w-full h-72 flex flex-col justify-center border-4 border-gray-400 rounded-lg">

                        <x-label for="cover" :value="__('Photo de couverture')" class="m-auto" />
                        <div class="m-auto">

                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-photo" width="44"
                                height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <line x1="15" y1="8" x2="15.01" y2="8" />
                                <rect x="4" y="4" width="16" height="16" rx="3" />
                                <path d="M4 15l4 -4a3 5 0 0 1 3 0l5 5" />
                                <path d="M14 14l1 -1a3 5 0 0 1 3 0l2 2" />
                            </svg>
                        </div>

                    </div>

                @endif

                <div>
                    <x-label for="medias[]" :value="__('Media')" />
                    <input name="medias[]" type="file" multiple="multiple" accept=".jpg,.png,.mp4"
                        wire:model="medias" />
                </div>

                @if ($medias)
                    <div class="grid grid-cols-6 gap-2">
                        @foreach ($medias as $media)
                            <img src="{{ $media->temporaryUrl() }}" class="my-5 ">
                        @endforeach
                    </div>
                @endif

            </div>
            <!-- Progress Bar -->
            <div x-show="isUploading">
                <progress max="100" x-bind:value="progress" class="w-full"></progress>
            </div>
            <button
                class="lg:col-span-2 my-2 bg-blue-500 w-1/4 text-white text-center rounded-md m-auto p-2 hover:bg-blue-700">
                Publier</button>
        </div>

    </form>

</div>
