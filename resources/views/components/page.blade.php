<div>

    <div class="w-full relative">

        <img class="w-full absolute top-0 h-72 object-cover -z-50" src="{{ $src }}" alt="" />

        <div class="py-16 p-2 lg:pl-10 z-50 bg-gradient-to-r from-blue-500 to-transparent h-72 w-full">

            <h1 class="text-xl lg:text-3xl mt-10 text-white w-full uppercase font-semibold tracking-tight" dir="auto">

                {{ $title }} </h1>

            <div class="w-2/3 md:w-1/3 lg:w-1/4 rounded-full h-1 lg:h-2 bg-white mt-5"></div>

        </div>

    </div>

    <div class="max-w-7xl m-auto mt-20 border rounded-lg p-10" dir="auto">

        {{ $slot }}

    </div>

</div>
