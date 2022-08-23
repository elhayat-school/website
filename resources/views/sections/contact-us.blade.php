<div class="m-auto lg:max-w-6xl mt-12 p-4 border-2 rounded-lg border-green-700">

    <h3 class="text-2xl lg:text-3xl font-bold">Contactez-nous</h3>

    <form action="{{ route('submitContactForm') }}" method="get">

        <div class="grid xl:grid-flow-col gap-y-8 gap-x-14  grid-cols-1 xl:grid-cols-2 mt-12">

            <div class="flex flex-col">
                <input name="name" type="text"
                    class="bg-neutral-200 w-full rounded-lg p-5 text-xl focus:outline-none focus:border-bg-bluepurple focus:ring-bg-bluepurple "
                    placeholder="Nom complet" required  />
                @error('name')
                    <div class="mt-2 font-bold text-red-500 text-sm">

                        {{$message}}

                    </div>
                @enderror
                <select name="establishement" required
                    class="mt-12 bg-neutral-200 w-full rounded-lg p-5 text-xl focus:outline-none focus:border-bg-bluepurple focus:ring-bg-bluepurple ">
                    <option value="">Etablissement</option>
                    <option value="contact.sabah.web@elhayatschool.com">Administration Es-Sabah</option>
                    <option value="contact.gambetta.web@elhayatschool.com">Administration Gambetta</option>
                    <option value="contact.gambetta.web@elhayatschool.com">Administration Gambetta Primaire</option>
                    <option value="contact.maraval.web@elhayatschool.com">Administration Maraval</option>
                </select>

                @error('establishement')
                    <div class="mt-2 font-bold text-red-500 text-sm">

                        {{ $message }}

                    </div>
                @enderror
                <input name="object" type="text" required
                    class="mt-12 bg-neutral-200 w-full rounded-lg p-5 text-xl focus:border-bg-bluepurple focus:ring-bg-bluepurple"
                    placeholder="Objet" />

                @error('object')
                    <div class="mt-2 font-bold text-red-500 text-sm">

                        {{ $message }}

                    </div>
                @enderror
                <textarea name="content" required
                    class="mt-12 grow bg-neutral-200 w-full rounded-lg p-5 text-xl focus:border-bg-bluepurple focus:ring-bg-bluepurple resize-none"
                    placeholder="Votre Message..."></textarea>
                    @error('content')
                    <div class="mt-2 font-bold text-red-500 text-sm">

                        {{ $message }}

                    </div>
                @enderror
                <button type="submit"
                    class="my-5 px-10 py-2 bg-green-600 rounded-lg text-2xl text-white hover:bg-green-700">
                    Envoyer
                </button>
            </div>


            <img src="assets/letter.png" alt="logo" class="w-full hidden lg:block">



        </div>

        @if (Session::has('message'))
            <div class="font-bold text-red text-3xl">
                {{ Session('message') }}
            </div>
        @endif

    </form>

</div>
