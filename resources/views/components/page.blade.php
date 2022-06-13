<article>

    <div class="w-full relative" dir="auto">

        <img class="w-full absolute top-0 h-40 object-cover -z-50" src="{{ $src }}" alt="" />

        <div class="p-2  lg:px-10 z-50 bg-gradient-to-r from-blue-500 to-transparent h-40 w-full">

            <h1 class="text-xl lg:text-3xl mt-10 text-white w-full uppercase font-semibold tracking-tight" >

                {{ $title }} </h1>

            <div class="w-1/12 rounded-full h-1 lg:h-2 bg-white mt-5"></div>

        </div>

    </div>

    <div class="container flex flex-col m-auto mt-5 lg:mt-20 border rounded-lg p-2 lg:p-10" dir="auto">

        {{ $slot }}

    </div>

</article>
