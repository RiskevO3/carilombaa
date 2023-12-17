@props(['image' => 'default'])
<div class="grid grid-cols-2 h-screen">
    <div class="overflow-hidden rounded-r-[100px] bg-red-700 h-screen">
        <img src="{{ asset('assets/images/lomba-'.$image.'-bg-login.jpeg') }}" alt=""
            class="object-cover object-center" loading="lazy">
    </div>
    {{ $slot }}
</div>