<div class="grid grid-cols-1 lg:grid-cols-3 gap-5 max-w-7xl m-auto ">

    <div class="grid lg:grid-cols-2 grid-cols-1 gap-5 lg:h-[400px] rounded-xl order-3 lg:order-1">
        <div class="bg-gradient-to-br from-cyan-500  to-blue-500 rounded-2xl shadow-lg shadow-blue-500">
            <a class="m-auto flex lg:flex-col justify-between p-4 items-center h-full ">
                <p class="mt-2 text-lg text-center text-white font-semibold">Comment s'inscrire</p>
                <img class="w-24 p-2 lg:m-auto hover:animate-bounce" src="{{ asset('assets/contrat.png') }}" alt="">
            </a>
        </div>

        <div class="bg-gradient-to-br from-orange-500  to-yellow-500 rounded-2xl shadow-lg shadow-yellow-500">
            <a class="m-auto flex lg:flex-col justify-between  p-4 items-center h-full ">
                <p class="mt-2 text-lg text-center text-white font-semibold">Infos Pratiques</p>
                <img class="w-24 p-2 lg:m-auto hover:animate-bounce" src="{{ asset('assets/info.png') }}" alt="">
            </a>
        </div>

        <div class="bg-gradient-to-br from-pink-500  to-purple-500 rounded-2xl shadow-lg shadow-purple-500">
            <a class="m-auto flex lg:flex-col justify-between  p-4 items-center h-full ">
                <p class="mt-2 text-lg text-center text-white font-semibold">Media</p>
                <img class="w-24 p-2 lg:m-auto hover:animate-bounce" src="{{ asset('assets/picture.png') }}" alt="">
            </a>
        </div>

        <div class="bg-gradient-to-br from-green-500  to-emerald-500 rounded-2xl shadow-lg shadow-emerald-500">
            <a class="m-auto flex lg:flex-col justify-between  p-4 items-center h-full ">
                <p class="mt-2 text-lg text-center text-white font-semibold">Résultats des examens</p>
                <img class="w-24 p-2 lg:m-auto hover:animate-bounce" src="{{ asset('assets/competition.png') }}"
                    alt="">
            </a>
        </div>
    </div>

    <div class="h-[400px] lg:flex bg-[#5FA7DE]  rounded-xl shadow-xl hidden order-2">

        <a class="relative flex flex-col w-full ">
            <!-- Your embedded video player code -->
            <div class="fb-video m-auto w-full" data-href="https://fb.watch/deUQlEimEc//" data-width="auto" data-autoplay="true"
                data-show-text="false">
            </div>
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
