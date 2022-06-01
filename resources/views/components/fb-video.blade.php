@props([
    'data-href'
])

<!-- Your embedded video player code -->
<div class="fb-video m-auto w-full" data-href="{{ $slot }}" data-width="auto" data-autoplay="true"
       data-show-text="false">
</div>
