<div {{ $attributes->merge(['class'=>'p-4 md:pt-[48px] md:px-[70px] container max-w-full bg-white']) }}>
    <div class="flex items-center justify-between">
        <img src="{{ asset('assets/images/logo-carilomba.png') }}" alt="logo" class="w-[72px] max-h-[30px] md:w-[144px] object-cover"/>
        <div class="flex space-x-[3px] md:space-x-[24px] items-center">
            <a href="" class="text-stone-900 text-xs md:text-base font-normal leading-snug">Home</a>
            <a href="" class="text-stone-900 text-xs md:text-base font-normal leading-snug">Lomba</a>
            <a href="" class="text-stone-900 text-xs md:text-base font-normal leading-snug">Dashboard</a>
        </div>
        <div class="flex space-x-[3px] md:space-x-[16px] items-center">
            <div class="flex bg-amber-500 rounded w-[20px] h-[20px] md:w-[24px] md:h-[24px] hover:scale-95 hover:opacity-75 transition ease-in">
                <x-icons.twitter-icon class="m-auto w-[10px] h-[10px] md:w-[12px] md:h-[12px] text-white" />
            </div>
            <div class="flex bg-amber-500 rounded w-[20px] h-[20px] md:w-[24px] md:h-[24px] hover:scale-95 hover:opacity-75 transition ease-in">
                <x-icons.instagram-icon class="m-auto w-[10px] h-[10px] md:w-[12px] md:h-[12px] text-white" />
            </div>
        </div>
    </div>
    <div class="md:mt-[20px] py-2 md:py-[24px] flex justify-center items-center  border-t border-gray-300">
            <h4 class="md:ml-20 text-gray-500 text-xs md:text-base font-normal leading-snug">
                Copyright © 2023 Kelompok 3 | All Rights Reserved
            </h4>
    </div>
</div>