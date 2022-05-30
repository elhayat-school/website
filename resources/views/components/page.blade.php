@props(['src'])

<div class="w-full relative">

    <img class="w-full absolute top-0 h-72 object-cover -z-50" src="{{ $src }}" alt="" />

    <div class="py-16 pl-10 z-50 bg-gradient-to-r from-blue-500 to-transparent h-72 w-full">
        <h1 class="text-3xl mt-10 text-white w-full"> {{ $title }} </h1>
        <img class="w-3/6 lg:w-1/6 mt-5" src="{{ asset('assets/line.svg') }}" alt="">
    </div>

</div>

<div class="max-w-7xl m-auto mt-20 border rounded-lg p-10">

    {{ $slot }}

</div>

</div>
