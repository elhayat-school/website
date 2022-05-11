<div class="w-screen " id="contact-us-section">

    <div class="text-justify bg-cover"style="background-image: url('assets/waves.svg')">
        <div class="m-auto lg:max-w-6xl lg:p-0 px-4 text-white ">
            <h2 class="font-bold xl:text-4xl text-2xl">
                Titre
            </h2>

            <p class="font-bold xl:text-1xl text-xl mt-2 ">
                “ Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem minima adipisci sed consectetur rem
                cupiditate optio voluptatum, voluptate a dicta tempora temporibus. Adipisci nulla blanditiis
                ”
            </p>

        </div>
    </div>

    <div class="m-auto lg:max-w-6xl mt-10 xl:mt-20 p-4 ">

        <h3 class="text-2xl xl:text-4xl font-bold">Contactez-nous</h3>

        <form action="" method="get">
            @error('name')
                <div class="font-bold text-red-300 text-xl">

                    {{ $message }}

                </div>
            @enderror

            @error('company')
                <div class="font-bold text-red-300 text-xl">

                    {{ $message }}

                </div>
            @enderror


            @error('email')
                <div class="font-bold text-red-300 text-xl">

                    {{ $message }}

                </div>
            @enderror

            @error('object')
                <div class="font-bold text-red-300 text-xl">

                    {{ $message }}

                </div>
            @enderror

            <div class="grid xl:grid-flow-col gap-y-8 gap-x-14  grid-cols-1 xl:grid-cols-2 grid-rows-3 mt-10">

                <input name="name" class="bg-neutral-300 rounded-lg p-5 text-2xl" placeholder="Nom complet" />

                <input name="company" class="bg-neutral-300 rounded-lg p-5 text-2xl" placeholder="Société" />

                <input name="email" type="email" class="bg-neutral-300 rounded-lg p-5 text-2xl " placeholder="E-Mail" />

                <textarea name="object" class="row-span-3 bg-neutral-300 rounded-lg p-5 text-2xl resize-none"
                    placeholder="Objet"></textarea>

            </div>

            <button
                class="mt-9 w-full bg-cyan-500 rounded-lg text-2xl text-white py-5 xl:float-right xl:w-[204px] hover:bg-sky-300 hover:text-sky-500 ">
                Envoyer</button>

            @if (Session::has('message'))
                <div class="font-bold text-red text-3xl">
                    {{ Session('message') }}
                </div>
            @endif
        </form>

    </div>

</div>
