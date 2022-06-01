<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Creer Article') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-article-validation-errors />
                    <form method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="flex flex-col space-y-10">
                            <div>
                                <x-label for="title" :value="__('Titre')" />
                                <x-input id="title" class="block w-full" type="text" name="title" :value="old('title')"
                                    required autofocus />
                            </div>

                            <div>
                                <x-label for="cover" :value="__('Photo de couverture')" />
                                <x-input name="cover" type="file" accept=".jpg,.png" />
                            </div>

                            <textarea title="content" name="content" placeholder="contenu" id="editor" class="h-52"> </textarea>

                            <div>
                                <x-label for="medias[]" :value="__('Media')" />
                                <input name="medias[]" type="file" multiple="multiple" accept=".jpg,.png,.mp4" />
                            </div>

                            <button
                                class="bg-blue-500 w-1/4 text-white text-center rounded-md m-auto p-2 hover:bg-blue-700">
                                Publier</button>

                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>

</x-app-layout>
