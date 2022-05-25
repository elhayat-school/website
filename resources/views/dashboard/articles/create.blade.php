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
                    <form method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="flex flex-col space-y-10">
                            <input class="border-2" name="title" placeholder="titre" />
                            @error('thumbnail')
                                {{$message}}
                            @enderror
                            <textarea name="content" placeholder="contenu"></textarea>
                            <input name="thumbnail" type="file" />
                            <button class="bg-blue-500 text-white ">Publier</button>
                            <input name="files[]" type="file" multiple="multiple" />
                        </div>
                    </form>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>