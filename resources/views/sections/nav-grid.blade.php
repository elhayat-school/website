<div class="grid grid-cols-1 lg:grid-cols-3 gap-5 ">

    <div class="grid lg:grid-cols-2 grid-cols-1 gap-5 lg:h-[400px] rounded-2xl order-3 lg:order-1">
        <div class="border-4 transition ease-in-out duration-100 border-blue-500 hover:bg-gradient-to-br from-cyan-500  to-blue-500 rounded-2xl hover:text-white">
            <a href="{{route('pages.founders_word')}}" class="m-auto flex lg:flex-col justify-between p-4 items-center h-full transition hover:-translate-y-2">
                <p class="mt-2 text-lg text-center font-semibold">Mot du directeur</p>
                <img class="w-24 p-2 lg:m-auto" src="{{ asset('assets/contrat.png') }}" alt="">
            </a>
        </div>

        <div class="border-4 transition ease-in-out duration-100 border-yellow-500 hover:bg-gradient-to-br from-orange-500  to-yellow-500 rounded-2xl hover:text-white">
            <a href="{{route('pages.infos')}}" class="m-auto flex lg:flex-col justify-between  p-4 items-center h-full transition hover:-translate-y-2">
                <p class="mt-2 text-lg text-center font-semibold">Infos Pratiques</p>
                <img class="w-24 p-2 lg:m-auto" src="{{ asset('assets/info.png') }}" alt="">
            </a>
        </div>

        <div class="border-4 transition ease-in-out duration-100 border-purple-500 hover:bg-gradient-to-br from-pink-500  to-purple-500 rounded-2xl hover:text-white">
            <a class="m-auto flex lg:flex-col justify-between  p-4 items-center h-full transition hover:-translate-y-2">
                <p class="mt-2 text-lg text-center font-semibold">Media</p>
                <img class="w-24 p-2 lg:m-auto" src="{{ asset('assets/picture.png') }}" alt="">
            </a>
        </div>

        <div class="border-4 transition ease-in-out duration-100 border-emerald-500 hover:bg-gradient-to-br from-green-500  to-emerald-500 rounded-2xl hover:text-white">
            <a href="{{route('pages.exams_result')}}" class="m-auto flex lg:flex-col justify-between  p-4 items-center h-full transition hover:-translate-y-2">
                <p class="mt-2 text-lg text-center font-semibold">Résultats des examens</p>
                <img class="w-24 p-2 lg:m-auto" src="{{ asset('assets/competition.png') }}"
                    alt="">
            </a>
        </div>
    </div>

    <div class="h-[400px] lg:flex bg-[#5FA7DE]  rounded-xl shadow-xl hidden order-2">

        <a class="relative flex flex-col w-full ">

            <x-fb-video data-href="https://fb.watch/deUQlEimEc//"> </x-fb-video>

            <p class=" rounded-b-xl p-4 text-2xl w-full text-center text-white font-bold "> El-Hayat School </p>
        </a>

    </div>

    <div class="h-[400px] p-6 bg-white rounded-xl shadow-xl order-1 lg:order-3">

        <div>
            <h2 class="text-3xl">Présentation</h2>
            <h3 class="uppercase text-xl mt-2">Bienvenue à El-Hayat school</h3>
        </div>

        <p class="mt-5">
            EL HAYAT School est un établissement scolaire privé, il assure un enseignement général aux apprenants des
            trois cycles (primaire, moyen et secondaire).
        </p>

    </div>

</div>


<script>
    // Automatic Slideshow - change image every 4 seconds
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
            myIndex = 1
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 4000);
    }
</script>
