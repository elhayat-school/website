<div class="w-full flex flex-col-reverse lg:flex-row justify-between bg-blue-600 text-white py-2 px-2 md:px-10 ">
    <div class="flex space-x-1 lg:space-x-5 ">
        <a href="https://www.facebook.com/elhayatschool.dz/" >
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
              </svg>
        </a>
        <a href="https://www.instagram.com/el_hayet_school/">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <rect x="4" y="4" width="16" height="16" rx="4" />
                <circle cx="12" cy="12" r="3" />
                <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
              </svg>
        </a>
    </div>
    <div class="flex flex-col md:flex-row md:space-x-5 ">
        <a href="tel:0794662246" class="lg:flex items-center space-x-2 hidden ">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clock" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <circle cx="12" cy="12" r="9" />
                <polyline points="12 7 12 12 15 15" />
              </svg>
            <p class="text-base lg:text-lg"> Ouvert de 8h à 12h et de 13h30  à 16h </p>
        </a>

    </div>
</div>

<nav class="relative xl:px-24 lg:px-4 py-2 lg:py-2 flex justify-between items-center">
    <div class="flex justify-between w-full">

        <a href="/">
            <img class="w-32 lg:w-52" src="{{ asset('assets/logo1.png') }}" alt="logo" />
        </a>

        <a href="/">
            <img class="w-32 lg:w-52" src="{{ asset('assets/logo2.png') }}" alt="logo"/>
        </a>

    </div>

    <div class="lg:hidden">
        <button class="navbar-burger flex items-center text-green-600 p-3">
            <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </button>
    </div>
    <ul
        class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2  lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6 z-50">
        <li><a class="text-lg text-black hover:bg-white hover:text-red-500 rounded-md p-2  tracking-tight font-semibold"
                href="/">Accueil</a></li>
        <li class="text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
        </li>

        <li><a class="text-lg text-black hover:bg-white hover:text-red-500 rounded-md p-2 tracking-tight font-semibold"
                href="/#our-establishements">Etablissements</a></li>
        <li class="text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
        </li>
        <li><a class="text-lg text-black hover:bg-white hover:text-red-500 rounded-md p-2 tracking-tight font-semibold"
                href="/#articles">Nos Actualités</a></li>
        <li class="text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
        </li>

        <li><a class="text-lg text-black hover:bg-white hover:text-red-500 rounded-md p-2 tracking-tight font-semibold"
                href="/#contact-us-section">Contact</a></li>
    </ul>

</nav>

<div class="navbar-menu relative hidden z-50">
    <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
    <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-lg py-6 px-6 bg-white border-r overflow-y-auto">
        <div class="flex items-center mb-8">
            <a class="mr-auto text-3xl font-bold leading-none" href="#">
                <img class=" w-full bg-white
                rounded-full" src="{{ asset('assets/logo1.png') }}" alt="logo"/>
            </a>
            <button class="navbar-close">
                <svg class="h-6 w-6 text-white cursor-pointer hover:bg-white hover:text-red-500 rounded-md p-2"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="white">
                    <path stroke-linecap="round" stroke-linejoin="round" fill=stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>
        <div>
            <ul>
                <li class="mb-1">
                    <a  href="/" class="block p-4 text-lg font-semibold  hover:bg-green-700 hover:text-white rounded"
                        href="§">Accueil</a>
                </li>

                <li class="mb-1">
                    <a  href="#our-establishements" class="block p-4 text-lg font-semibold  hover:bg-green-700 hover:text-white rounded"
                        href="/#our-establishements">Etablissements</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-lg font-semibold  hover:bg-green-700 hover:text-white rounded"
                        href="/#articles">Nos Actualités</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-lg font-semibold  hover:bg-green-700 hover:text-white rounded"
                        href="/#contact-us-section">Contact</a>
                </li>
            </ul>
        </div>
        <div class="mt-auto">

            <p class="my-4 text-xs text-center text-red-50">
                <span>Copyright © 2021</span>
            </p>
        </div>
    </nav>

</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        // open
        const burger = document.querySelectorAll('.navbar-burger');
        const menu = document.querySelectorAll('.navbar-menu');

        if (burger.length && menu.length) {
            for (var i = 0; i < burger.length; i++) {
                burger[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        // close
        const close = document.querySelectorAll('.navbar-close');
        const backdrop = document.querySelectorAll('.navbar-backdrop');

        if (close.length) {
            for (var i = 0; i < close.length; i++) {
                close[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        if (backdrop.length) {
            for (var i = 0; i < backdrop.length; i++) {
                backdrop[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }
    });
</script>
