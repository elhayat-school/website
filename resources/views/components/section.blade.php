
<section  {{ $attributes->merge(['class' => '']) }}>

    <div class="w-full space-y-5 mt-16" >
        <img class="m-auto w-3/6 lg:w-1/6" src="{{ asset('assets/line.svg') }}" alt="line">
        <h2 {{ $section_title->attributes->merge(['class' => 'text-center font-bold text-3xl']) }}>{{ $section_title }}</h2>
    </div>

    <div class="max-w-full mt-10 relative m-auto z-10">
        <img src="{{ $right_png }}" alt="png"  {{ $right_png->attributes->merge(['class' => 'absolute top-0 right-5 -z-10 opacity-50 hidden lg:block']) }}>
        <img src="{{ $left_png }}" alt="png"  {{ $left_png->attributes->merge(['class' => 'absolute top-5 left-20 -z-10 opacity-50 hidden lg:block']) }}>
        <div class="max-w-7xl m-auto">
           {{ $slot }}
        </div>
    </div>

</section>

