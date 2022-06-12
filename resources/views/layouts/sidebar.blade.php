
<div class="fixed left-0 text-white">
    <button aria-label="open sidebar" onclick="openSidebar(false)"
        class="focus:ring-2 focus:outline-none focus-ring-offset-2 focus:ring-gray-400
        focus:text-black focus:bg-gray-100 flex items-center justify-center rounded-r-md bg-policeblue ml-0 cursor-pointer absolute inset-0 mt-10 m-auto w-8 h-8">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <polyline points="9 6 15 12 9 18"></polyline>
        </svg>
    </button>

    <div role="tabpanel" id="sidebar"
        class="overflow-y-scroll lg:overflow-y-auto fixed lg:sticky h-screen lg:h-screen z-40 top-0 bg-policeblue pt-10 w-64 lg:w-72 flex flex-col justify-between ">
        <div class="px-4 ">
            <div class="flex items-center justify-between">
                <a href="/" role="link" class=" p-2 bg-glaucous rounded-lg ">
                    <img class="w-20"  src="{{ asset('assets/logo.png') }}" alt="quicklist logo" />
                </a>
                <button aria-label="close sidebar" onclick="openSidebar(true)"
                    class="rounded-md focus:ring-2 focus:outline-none focus-ring-offset-2 focus:ring-gray-400 focus:bg-gray-100 hover:bg-bluepurple ml-8 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <polyline points="15 6 9 12 15 18"></polyline>
                    </svg>
                </button>
            </div>

                <ul class="my-20 flex flex-col">
                    <li class="w-full flex justify-start py-4 border-2 border-alicoblue hover:border-transparent hover:underline rounded-xl h-16 transition ease-out delay-75 hover:bg-glaucous hover:-translate-y-1 ">
                        <a href="{{route('articles.index')}}"
                            class="w-full  focus:outline-none hover:bg-mint rounded-md flex flex-row justify-start space-x-10 items-center p-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11"></path>
                                <line x1="8" y1="8" x2="12" y2="8"></line>
                                <line x1="8" y1="12" x2="12" y2="12"></line>
                                <line x1="8" y1="16" x2="12" y2="16"></line>
                             </svg>
                            <p class="mt-1 font-semibold text-md">Articles</p>
                        </a>
                    </li>

                </ul>

        </div>
        <div class=" flex justify-between items-center w-full lg:p-2 p-1 py-10  bg-blackcoral">
            <div class="flex justify-center items-center space-x-2">
                <div>
                    <img class="rounded-full w-11"
                        src="https://ui-avatars.com/api/?background=8D6CFA&color=DBE8D8&bold=true&rounded=true&name={{ Auth::user()->name }}"
                        alt="avatar" />
                </div>
                <div class="flex justify-start flex-col items-start  w-5/6 overflow-hidden">
                    <p class="cursor-pointer text-sm leading-5 ">{{ Auth::user()->name }}</p>
                    <p class="cursor-pointer text-xs leading-3 ">{{ Auth::user()->email }}</p>
                </div>
            </div>
            <div class="w-1/6 flex justify-center">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button
                        class="hover:bg-policeblue rounded-lg p-2 hover:text-white transition ease-in-out hover:-translate-y-1  ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <desc>Download more icon variants from https://tabler-icons.io/i/logout</desc>
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2">
                            </path>
                            <path d="M7 12h14l-3 -3m0 6l3 -3"></path>
                        </svg>
                    </button>
                </form>
            </div>

        </div>

    </div>
</div>

<script>
    openSidebar = (flag) => {
        let sidebar = document.getElementById("sidebar");
        flag ? sidebar.classList.add("hidden") : sidebar.classList.remove("hidden");
    };
    if (window.screen.width < 700)
        document.getElementById("sidebar").classList.add("hidden");
</script>
