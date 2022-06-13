<article class="grid grid-cols-1 gap-5 lg:grid-cols-3 grid-rows-2 ">

    @foreach ($articles as $article)

        <div class="w-full relative border-4 border-bluepurple grid grid-cols-1 bg-white shadow-xl h-60 overflow-y-hidden">

            <div class="w-full h-60 overflow-hidden">
                <img src="{{ asset('storage/' . $article->cover) }}" alt="" class="w-full h-full object-cover transition ease-in-out delay-100 duration-700 hover:scale-110 ">
            </div>

            <div class="w-full h-full absolute bottom-0 translate-y-44  bg-bluepurple bg-opacity-80 text-white transition ease-in-out delay-100 duration-200
                hover:-translate-y-0 flex flex-col justify-between content-center" >
                <div>

                    <h3 class=" md:text-xl text-lg font-semibold px-2 pt-2 truncate "  dir="auto"> {{ $article->title }} </h3>
                    <div class="w-full h-0.5 mt-6 rounded-full bg-white">

                </div>

                </div>
                <p class="line-clamp-3 px-2"  dir="auto">{{ $article->content }}</p>
                <a href="{{ route('articles.show', $article->id) }}" class="flex space-x-2 underline p-2 text-white bg-bluepurple">
                    Lire la suite
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M6 4h11a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-11a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1m3 0v18"></path>
                        <line x1="13" y1="8" x2="15" y2="8"></line>
                        <line x1="13" y1="12" x2="15" y2="12"></line>
                     </svg>
                </a>
            </div>

        </div>
    @endforeach

</article>
