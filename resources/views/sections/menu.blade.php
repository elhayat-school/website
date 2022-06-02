<div class=" w-full flex justify-between bg-blue-600 text-white py-2 px-2 md:px-10 items-center">
    <div class="md:flex space-x-5 hidden">
        <a href="https://www.facebook.com/elhayatschool.dz/">
            <img class="w-8" src="{{ asset('assets/facebook-brands.svg') }}" alt="">
        </a>
        <a href="instagram.com">
            <img class="w-8" src="{{ asset('assets/instagram-brands.svg') }}" alt="">
        </a>
    </div>
    <div class="flex flex-col md:flex-row md:space-x-5 ">
        <a href="tel:0794662246" class="flex space-x-2 ">
            <img class="w-5" src="{{ asset('assets/phone-solid.svg') }}" />
            <p> 0794662246 </p>
        </a>
        <a href="mail:ontact@elhayatschool.com" class="flex space-x-2">
            <img class="w-5" src="{{ asset('assets/envelope-solid.svg') }}" />

            <p> contact@elhayatschool.com</p>
        </a>
    </div>
</div>

<nav class="relative xl:px-24 px-4 py-2 lg:py-2 flex justify-between items-center">
    <div class="flex justify-between w-full">

        <a href="/">
            <img class="w-52" src="{{ asset('assets/logo1.png') }}" />
        </a>


        <a href="/">
            <img class="w-52" src="{{ asset('assets/logo2.png') }}" />
        </a>

    </div>

    <div class="lg:hidden">
        <button class="navbar-burger flex items-center text-green-500 p-3">
            <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </button>
    </div>
    <ul
        class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2  lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6 z-50">
        <li><a class="text-lg text-black hover:bg-white hover:text-red-500 rounded-md p-2  tracking-tight font-semibold"
                href="#">Accueil</a></li>
        <li class="text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
        </li>

        <!-- Settings Dropdown -->
        <li class="hidden sm:flex sm:items-center sm:ml-6 z-50">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button
                        class="flex items-center text-lg font-medium  hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                        <div>Cycles</div>

                        <div class="ml-2">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <a href="" class="p-2">Primaire</a>
                </x-slot>
                <x-slot name="content">
                    <a href="" class="p-2">Primaire</a>
                </x-slot>
            </x-dropdown>
        </li>

        <li class="text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
        </li>
        <li><a class="text-lg text-black hover:bg-white hover:text-red-500 rounded-md p-2 tracking-tight font-semibold"
                href="#">Etablissements</a></li>
        <li class="text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
        </li>
        <li><a class="text-lg text-black hover:bg-white hover:text-red-500 rounded-md p-2 tracking-tight font-semibold"
                href="#">Services</a></li>
        <li class="text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
        </li>

        <li><a class="text-lg text-black hover:bg-white hover:text-red-500 rounded-md p-2 tracking-tight font-semibold"
                href="#contact-us-section">Contact</a></li>
    </ul>

</nav>

<div class="navbar-menu relative hidden z-50">
    <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
    <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-lg py-6 px-6 bg-white border-r overflow-y-auto">
        <div class="flex items-center mb-8">
            <a class="mr-auto text-3xl font-bold leading-none" href="#">
                <img class=" w-16 bg-white
                rounded-full" src="{{ asset('assets/logo.png') }}" />
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
                    <a class="block p-4 text-lg font-semibold text-red-500 hover:bg-red-500 hover:text-white rounded"
                        href="#">Accueil</a>
                </li>

                <li class="mb-1">
                    <a class="block p-4 text-lg font-semibold text-red-500 hover:bg-red-500 hover:text-white rounded"
                        href="#">Etablissements</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-lg font-semibold text-red-500 hover:bg-red-500 hover:text-white rounded"
                        href="#">Services</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-lg font-semibold text-red-500 hover:bg-red-500 hover:text-white rounded"
                        href="#">Contact</a>
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
