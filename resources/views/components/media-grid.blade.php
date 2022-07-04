@props(['medias'])

<div x-data="{ imgModal: false, imgModalSrc: '' }" {{ $attributes->merge(['class' => 'container gap-2 mt-10 border-2 border-bluepurple rounded-lg p-2 overflow-hidden']) }}>
<!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
@foreach($medias as $media)

    <a @click="$dispatch('img-modal', {  imgModalSrc: '{{ asset('storage/'.$media->path )}}' })"
        class="cursor-pointer h-20 md:h-40 overflow-clip rounded-xl ">
        <img src="{{ asset('storage/'.$media->path) }}" alt="Placeholder" class="w-full h-full object-cover object-center transition ease-in-out duration-700 hover:scale-110">
    </a>

@endforeach

</div>

<template x-data="{ imgModal: false, imgModalSrc: '' }" @img-modal.window="imgModal = true; imgModalSrc = $event.detail.imgModalSrc;"
    x-if="imgModal">
    <div x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90"
        x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90"
        x-on:click.away="imgModalSrc = ''"
        class="p-2 fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center bg-black bg-opacity-75">
        <div @click.away="imgModal = ''" class="flex flex-col max-w-3xl max-h-full overflow-auto">
            <div class="z-50">
                <button @click="imgModal = ''" class="float-right pt-2 pr-2 outline-none focus:outline-none">
                    <svg class="fill-current text-white " xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                        viewBox="0 0 18 18">
                        <path
                            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="p-2">
                <img :alt="imgModalSrc" class="object-contain w-fit" :src="imgModalSrc">
            </div>
        </div>
    </div>
</template>
