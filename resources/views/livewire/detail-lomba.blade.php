<div class="container max-w-full">
    <div class="container max-w-full mx-auto py-[40px] px-[66px] bg-white">
        <div class="flex justify-between">
            <div class="w-[542px] h-[452px]">
                <div class="w-full h-full grid grid-cols-1 content-center">
                    <div class="w-[467px] h-[282px]">
                        <div class="inline-flex rounded border border-main-red-color px-[12px] py-[6px]">
                            <p class="text-red-800 text-base font-medium">
                                {{ $lomba->category->first()->name }}
                            </p>
                        </div>
                        <h1 class="mt-4 text-stone-900 text-4xl font-semibold">
                            {{ $lomba->title }}
                        </h1>
                        <p class="mt-4 text-zinc-600 text-base font-normal leading-normal">
                            {{ $lomba->short_description }}
                        </p>
                        <div class="mt-4 w-[301px] grid grid-cols-2 gap-[16px]">
                            <a
                                wire:navigate
                                href="{{ route('daftar_lomba', ['uuid' => $lomba->id]) }}"
                                class="py-[14px] px-[6px] bg-red-800 border border-red-800 rounded-md shadow-md hover:scale-95 hover:opacity-75 transition ease-in text-white text-sm text-center font-semibold leading-tight">
                                Daftar Lomba
                            </a>
                            <button
                                class="py-[14px] px-[3px] bg-gray-50 border border-gray-300 rounded-md shadow hover:scale-95 hover:opacity-75 transition ease-in text-zinc-600 text-sm font-semibold leading-tight">
                                Contact Person
                            </button>
                        </div>
                        <div class="mt-4 flex">
                            <p class="text-zinc-600 text-base font-normal leading-normal">Bagikan</p>
                            <div class="ml-[12px] grid grid-cols-4 gap-[8px]">
                                <div
                                    class="w-[24px] h-[24px] bg-main-red-color rounded-md p-[6px] hover:scale-95 hover:opacity-75 transition ease-in">
                                    <x-icons.instagram-icon class="fill-current text-white w-[12px] h-[12px]" />
                                </div>
                                <div
                                    class="w-[24px] h-[24px] bg-main-red-color rounded-md p-[6px] hover:scale-95 hover:opacity-75 transition ease-in">
                                    <x-icons.whatsapp-icon class="fill-current text-white w-[12px] h-[12px]" />
                                </div>
                                <div
                                    class="w-[24px] h-[24px] bg-main-red-color rounded-md p-[6px] hover:scale-95 hover:opacity-75 transition ease-in">
                                    <x-icons.twitter-icon class="fill-current text-white w-[12px] h-[12px]" />
                                </div>
                                <div
                                    class="w-[24px] h-[24px] bg-main-red-color rounded-md p-[6px] hover:scale-95 hover:opacity-75 transition ease-in">
                                    <x-icons.chain-icon class="fill-current text-white w-[12px] h-[12px]" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-[542px] h-[452px] bg-green-200  rounded-lg overflow-hidden">
                <img src="{{ $lomba->getImage() }}"
                    class="object-cover object-center w-full h-full" />
            </div>
        </div>
    </div>
    <div class="container max-w-full mx-auto py-[40px] px-[66px] bg-white">
        <div class="flex justify-between">
            <div class="w-[641px]  mr-[121px]">
                <h3 class=" text-red-800 text-[32px] font-semibold">Tentang Lomba</h3>
                <article class="prose  text-neutral-800 font-normal">
                    {!! $lomba->description  !!}
                </article>
            </div>
            <div class="w-[542px] h-full flex-wrap p-[24px] rounded-md shadow-lg border border-gray-200 bg-white">
                <div class="inline-flex rounded border border-main-red-color px-[12px] py-[6px]">
                    <p class="text-red-800 text-base text-medium font-medium">
                        {{ $lomba->category->first()->name }}
                    </p>
                </div>
                <div class="my-[16px]">
                    <h4 class="text-zinc-800 text-xl font-semibold">{{ $lomba->title }}</h4>
                    <div class="flex mt-[12px]">
                        <div class="mr-[8px] p-[8px] bg-gray-50 rounded-md border border-gray-300">
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    class="fill-current w-[16px] h-[16px] text-red-800">
                                    <path fill-rule="evenodd"
                                        d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="ml-[4px] text-zinc-600 text-xs font-medium">Online</p>
                            </div>
                        </div>
                        <div class="mr-[8px] p-[8px] bg-gray-50 rounded-md border border-gray-300">
                            <div class="flex">
                                <svg class="fill-current w-[16px] h-[16px] text-red-800"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="ml-[4px] text-zinc-600 text-xs font-medium">{{ $lomba->user->name }}</p>
                            </div>
                        </div>
                        <div class="mr-[8px] p-[8px] bg-gray-50 rounded-md border border-gray-300">
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    class="fill-current w-[16px] h-[16px] text-red-800">
                                    <path fill-rule="evenodd"
                                        d="M8.25 6.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM15.75 9.75a3 3 0 116 0 3 3 0 01-6 0zM2.25 9.75a3 3 0 116 0 3 3 0 01-6 0zM6.31 15.117A6.745 6.745 0 0112 12a6.745 6.745 0 016.709 7.498.75.75 0 01-.372.568A12.696 12.696 0 0112 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 01-.372-.568 6.787 6.787 0 011.019-4.38z"
                                        clip-rule="evenodd" />
                                    <path
                                        d="M5.082 14.254a8.287 8.287 0 00-1.308 5.135 9.687 9.687 0 01-1.764-.44l-.115-.04a.563.563 0 01-.373-.487l-.01-.121a3.75 3.75 0 013.57-4.047zM20.226 19.389a8.287 8.287 0 00-1.308-5.135 3.75 3.75 0 013.57 4.047l-.01.121a.563.563 0 01-.373.486l-.115.04c-.567.2-1.156.349-1.764.441z" />
                                </svg>
                                <p class="ml-[4px] text-zinc-600 text-xs font-medium">{{ $lomba->maximum_person > 1 ? 'Individu & Kelompok' : 'Individu' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex mt-[8px]">
                        <div class="mr-[8px] p-[8px] bg-gray-50 rounded-md border border-gray-300">
                            <div class="flex">
                                <svg class="fill-current w-[16px] h-[16px] text-red-800"
                                    xmlns="http://www.w3.org/2000/svg" height="16" width="14"
                                    viewBox="0 0 448 512">
                                    <path
                                        d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z" />
                                </svg>
                                <p class="ml-[4px] text-zinc-600 text-xs font-medium">
                                    {{ $lomba->start_date->format('j F Y') }} - {{ $lomba->end_date->format('j F Y') }}
                                </p>
                            </div>
                        </div>
                        <div class="mr-[8px] p-[8px] bg-gray-50 rounded-md border border-gray-300">
                            <div class="flex">
                                <svg class="fill-current w-[16px] h-[16px] text-red-800"
                                    xmlns="http://www.w3.org/2000/svg" height="16" width="10"
                                    viewBox="0 0 320 512">
                                    <path
                                        d="M160 0c17.7 0 32 14.3 32 32V67.7c1.6 .2 3.1 .4 4.7 .7c.4 .1 .7 .1 1.1 .2l48 8.8c17.4 3.2 28.9 19.9 25.7 37.2s-19.9 28.9-37.2 25.7l-47.5-8.7c-31.3-4.6-58.9-1.5-78.3 6.2s-27.2 18.3-29 28.1c-2 10.7-.5 16.7 1.2 20.4c1.8 3.9 5.5 8.3 12.8 13.2c16.3 10.7 41.3 17.7 73.7 26.3l2.9 .8c28.6 7.6 63.6 16.8 89.6 33.8c14.2 9.3 27.6 21.9 35.9 39.5c8.5 17.9 10.3 37.9 6.4 59.2c-6.9 38-33.1 63.4-65.6 76.7c-13.7 5.6-28.6 9.2-44.4 11V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V445.1c-.4-.1-.9-.1-1.3-.2l-.2 0 0 0c-24.4-3.8-64.5-14.3-91.5-26.3c-16.1-7.2-23.4-26.1-16.2-42.2s26.1-23.4 42.2-16.2c20.9 9.3 55.3 18.5 75.2 21.6c31.9 4.7 58.2 2 76-5.3c16.9-6.9 24.6-16.9 26.8-28.9c1.9-10.6 .4-16.7-1.3-20.4c-1.9-4-5.6-8.4-13-13.3c-16.4-10.7-41.5-17.7-74-26.3l-2.8-.7 0 0C119.4 279.3 84.4 270 58.4 253c-14.2-9.3-27.5-22-35.8-39.6c-8.4-17.9-10.1-37.9-6.1-59.2C23.7 116 52.3 91.2 84.8 78.3c13.3-5.3 27.9-8.9 43.2-11V32c0-17.7 14.3-32 32-32z" />
                                </svg>
                                <p class="ml-[4px] text-zinc-600 text-xs font-medium">{{ $lomba->registration_fee > 0 ? 'Rp '.number_format($lomba->registration_fee, 0, ',', '.') : 'Gratis' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="my-[16px]">
                        <hr class="h-px my-8 bg-gray-300 border-0" />
                    </div>
                    <div class="flex justify-between">
                        <p class="text-black text-md font-semibold">
                            Ingatkan Saya
                        </p>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer">
                            <div
                                class="w-11 h-6 bg-gray-200 peer-focus:outline-none   rounded-full peer  peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all  peer-checked:bg-red-600">
                            </div>
                        </label>
                    </div>
                </div>
                <a
                    wire:navigate
                    href="{{ route('daftar_lomba', ['uuid' => $lomba->id]) }}"
                    class="flex items-center w-full h-[39px] py-[16px] px-[24px] bg-red-800 border border-red-800 rounded-md hover:opacity-75 hover:scale-95 transition ease-in">
                    <p class="mx-auto text-white font-semibold">
                        Daftar
                    </p>
                </a>
            </div>
        </div>
    </div>
    <div class="container max-w-full mx-auto pb-[30px] pt-[20px] px-[66px] bg-white">
        <h3 class="text-red-800 text-4xl font-semibold leading-10">
            Lomba Lainya
        </h3>
        <div class="mt-[28px] grid grid-cols-4 gap-4">
            @foreach ($other_lomba as $lomba)
            <x-lomba-card :lomba="$lomba" />
            @endforeach
        </div>
    </div>
    <div class="container max-w-full py-[34px] bg-white font-inter border border-zinc-100 shadow-lg">
        <div class="container mx-auto py-[24px]">
            <div class="flex justify-between">
                <div class="w-[144px] h-[30px] overflow-hidden">
                    <img src="{{ asset('assets/images/logo-carilomba.png') }}" alt="" class="object-cover object-center" />
                </div>
                <div class="grid grid-cols-5 py-2 justify-center gap-3">
                    <a href="" class="text-stone-900 text-base font-normal"> Home </a>
                    <a href="" class="text-stone-900 text-base font-normal col-span-2 text-center">
                        Tentang Kami
                    </a>
                    <a href="" class="text-stone-900 text-base font-normal"> Lomba </a>
                    <a href="" class="text-stone-900 text-base font-normal">
                        Leaderboard
                    </a>
                </div>
                <div class="ml-0 grid grid-cols-2 gap-[16px]">
                    <div
                        class="w-[35px] h-[35px] bg-[#E18F14] pl-[7px] py-[3px] rounded-md shadow-md group hover:bg-white hover:shadow-lg hover:scale-95 transition ease-in">
                        <i
                            class="fa-brands fa-x-twitter text-xl text-white group-hover:text-lg group-hover:text-black transition ease-in"></i>
                    </div>
                    <div
                        class="w-[35px] h-[35px] bg-[#E18F14] pl-[9px] py-[3px] rounded-md shadow-md group hover:bg-white hover:shadow-lg hover:scale-95 transition ease-in">
                        <i
                            class="fa-brands fa-instagram text-xl text-white group-hover:text-lg group-hover:text-black transition ease-in"></i>
                    </div>
                </div>
            </div>
        </div>
        <hr class="bg-gray-500" />
        <div class="container mx-auto pt-[12px] pb-[24px] px-[24px]">
            <p class="text-gray-500 text-base text-center font-normal leading-snug">
                Copyright © 2023 Kelompok 3 | All Rights Reserved
            </p>
        </div>
    </div>
</div>
