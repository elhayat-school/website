<div class="w-full bg-gradient-to-r bg-cover">

    <div class="relative">

        <div class="mySlides w-full h-[300px] lg:h-[700px]  object-cover bg-center bg-cover"
            style="background-image: url({{ asset('assets/1.webp')}})">

        </div>

        <div class="mySlides w-full h-[300px] lg:h-[700px] object-cover bg-center bg-cover overflow-hidden"
            style="background-image: url({{ asset('assets/2.webp') }})">

            <div class="bg-green-700 lg:rounded-tr-full font-bold w-full lg:w-1/2 h-16 lg:h-32 absolute bottom-0 left-0">
                <i class="absolute bottom-0 text-white text-lg lg:text-4xl p-2 mb-2 lg:p-10 text-center w-full truncate">
                    Ne cherchez pas la perfection Visez la réussite
                </i>
            </div>

        </div>

        <div class="mySlides w-full h-[300px] lg:h-[700px] object-cover bg-center bg-cover"
            style="background-image: url({{ asset('assets/4.webp') }})">

        </div>

        <div class="mySlides w-full h-[300px] lg:h-[700px] object-cover bg-center
         bg-cover"
            style="background-image: url({{ asset('assets/3.webp') }})">

            <div class="bg-green-700 lg:rounded-tr-full font-bold w-full lg:w-1/2 h-16 lg:h-32 absolute bottom-0 left-0">
                <i class="absolute bottom-0 text-white text-lg lg:text-4xl p-2 mb-2 lg:p-10 text-center w-full truncate">
                    Des activités pour s'épanouir et s’ouvrir au monde
                </i>
            </div>

        </div>

        <div class="mySlides w-full h-[300px] lg:h-[700px] object-cover bg-center bg-cover"
            style="background-image: url({{ asset('assets/color3.jpg') }})">


            <div class="bg-green-700 lg:rounded-tr-full font-bold w-full lg:w-1/2 h-16 lg:h-32 absolute bottom-0 left-0">
                <i class="absolute bottom-0 text-white text-lg lg:text-4xl p-2 mb-2 lg:p-10 text-center w-full truncate">
                    Encourager l'espris créatif
                </i>
            </div>

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

</div>
