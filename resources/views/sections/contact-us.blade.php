<div class="w-full">

    <div class="m-auto lg:max-w-6xl mt-10  p-4 ">

        <h3 class="text-2xl lg:text-3xl font-bold">Contactez-nous</h3>

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
            <div class="grid xl:grid-flow-col gap-y-8 gap-x-14  grid-cols-1 xl:grid-cols-2  mt-10">

                <div class="flex flex-col space-y-10">
                    <input name="name" type="text"
                        class="bg-neutral-300 w-full rounded-lg p-5 text-xl focus:outline-none focus:border-bg-[#759CF5] focus:ring-bg-[#759CF5] "
                        placeholder="Nom complet" />

                    <input name="email" type="email"
                        class="bg-neutral-300 w-full rounded-lg p-5 text-xl focus:border-bg-[#759CF5] focus:ring-bg-[#759CF5]"
                        placeholder="E-Mail" />

                    <input name="company" type="text"
                        class="bg-neutral-300 w-full rounded-lg p-5 text-xl focus:border-bg-[#759CF5] focus:ring-bg-[#759CF5]"
                        placeholder="Objet" />

                    <textarea name="object" class=" grow bg-neutral-300 w-full rounded-lg p-5 text-xl focus:border-bg-[#759CF5] focus:ring-bg-[#759CF5] resize-none"
                        placeholder="Votre Message..."></textarea>
                </div>

                <img class="hidden lg:flex w-full p-2 lg:m-full " src="{{ asset('assets/contact-us.gif') }}" alt="">


            </div>

            <button
                class="my-16 px-10 py-2 bg-[#759CF5] rounded-lg text-2xl  text-white float-right  hover:bg-[#d1ddf8] hover:text-[#759CF5]">
                Envoyer</button>

            @if (Session::has('message'))
                <div class="font-bold text-red text-3xl">
                    {{ Session('message') }}
                </div>
            @endif
        </form>

    </div>

</div>
