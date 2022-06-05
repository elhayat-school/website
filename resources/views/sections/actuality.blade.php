<div class="m-auto grid grid-col-3 gap-5 px-2 w-full">

    <div class="grid grid-cols-1 gap-5 lg:grid-cols-3 grid-rows-2 ">
        @foreach ($articles as $article)
            <div class="w-full m-auto border-2 border-bluepurple rounded-2xl overflow-clip">
                <div class="w-full h-56 overflow-clip">
                    <img src="{{ asset('storage/' . $article->cover) }}" alt="" class="object-none">
                </div>

                <div class="w-full h-40 grid grid-cols-1 gap-y-2 p-2 content-center">
                    <h3 class="text-2xl font-semibold"> {{ $article->title }} </h3>
                    <p class="line-clamp-3">{{ $article->content }}</p>
                    <a href="{{ route('articles.show', $article->id) }}" class="underline text-blue-700 ">Lire la
                        suite</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

