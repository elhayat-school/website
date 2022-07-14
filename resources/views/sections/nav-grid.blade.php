<div class="grid grid-cols-1 lg:grid-cols-3 gap-5 ">

    <div class="grid lg:grid-cols-2 grid-cols-1 gap-5 lg:h-[400px] rounded-2xl order-3 lg:order-1">
        <div
            class="border-4 transition ease-in-out duration-100 bg-slate-100 border-blue-500 grayscale hover:bg-gradient-to-br from-cyan-500  to-blue-500 rounded-2xl hover:text-white">
            <div class="m-auto flex lg:flex-col justify-between p-4 items-center h-full transition hover:-translate-y-2">
                <p class="mt-2 text-lg text-center font-semibold">Mot du directeur</p>
                <img class="w-24  lg:m-auto" src="{{ asset('assets/quill.png') }}" alt="">
            </div>
        </div>

        <div
            class="border-4 transition ease-in-out duration-100 bg-slate-100 grayscale border-yellow-500 hover:bg-gradient-to-br from-orange-500  to-yellow-500 rounded-2xl hover:text-white">
            <div
                class="m-auto flex lg:flex-col justify-between  p-4 items-center h-full transition hover:-translate-y-2">
                <p class="mt-2 text-lg text-center font-semibold">Infos Pratiques</p>
                <img class="w-24 p-2 lg:m-auto" src="{{ asset('assets/info.png') }}" alt="">
            </div>
        </div>

        <div
            class="border-4 transition ease-in-out duration-100 bg-slate-100 border-purple-500 hover:bg-gradient-to-br from-pink-500  to-purple-500 rounded-2xl hover:text-white">
            <a href="{{ route('medias.index') }}"
                class="m-auto flex lg:flex-col justify-between  p-4 items-center h-full transition hover:-translate-y-2">
                <p class="mt-2 text-lg text-center font-semibold">Media</p>
                <img class="w-24 p-2 lg:m-auto" src="{{ asset('assets/picture.png') }}" alt="">
            </a>
        </div>

        <a href="/resultexams"
            class="border-4 transition ease-in-out duration-100 bg-slate-100 border-emerald-500 hover:bg-gradient-to-br from-green-500  to-emerald-500 rounded-2xl hover:text-white">
            <div
                class="m-auto flex lg:flex-col justify-between  p-4 items-center h-full transition hover:-translate-y-2">
                <p class="mt-2 text-lg text-center font-semibold">Résultats des examens</p>
                <img class="w-24 p-2 lg:m-auto" src="{{ asset('assets/competition.png') }}" alt="">
            </div>
        </a>
    </div>

    <div class="h-[400px] flex bg-littleboyblue  rounded-xl shadow-xl  order-2">

        <div class="relative flex flex-col w-full ">

            <x-fb-video class="m-auto w-full" data-href="https://fb.watch/deUQlEimEc//"> </x-fb-video>

            <p class=" rounded-b-xl p-4 text-2xl w-full text-center text-white font-bold "> El-Hayat School </p>
        </div>

    </div>

    <div class="relative z-10 h-[400px] p-6 rounded-xl shadow-xl order-1 lg:order-3 flex flex-col bg-white border-2 border-green-500">

        <div class="flex justify-between items-center">
            <h2 class="text-3xl underline decoration-green-500">Présentation</h2>
            <img class="w-12" src="{{ asset('assets/logo.png') }}" alt="">
        </div>

        <div class="m-auto">
            <h3 class="uppercase text-xl mt-2">Bienvenue à El-Hayat school</h3>
            <p class="mt-2">
                EL HAYAT School est un établissement scolaire privé, il assure un enseignement général aux apprenants
                des
                trois cycles (primaire, moyen et secondaire).
            </p>
        </div>
    </div>

</div>
