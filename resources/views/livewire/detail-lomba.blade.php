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
                                    <x-icons.instagram-icon class="text-white w-[12px] h-[12px]" />
                                </div>
                                <div
                                    class="w-[24px] h-[24px] bg-main-red-color rounded-md p-[6px] hover:scale-95 hover:opacity-75 transition ease-in">
                                    <x-icons.whatsapp-icon class="fill-current text-white w-[12px] h-[12px]" />
                                </div>
                                <div
                                    class="w-[24px] h-[24px] bg-main-red-color rounded-md p-[6px] hover:scale-95 hover:opacity-75 transition ease-in">
                                    <x-icons.twitter-icon class="text-white w-[12px] h-[12px]" />
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
                                <x-icons.location-icon class='w-[16px] h-[16px] text-red-800'/>
                                <p class="ml-[4px] text-zinc-600 text-xs font-medium">Online</p>
                            </div>
                        </div>
                        <div class="mr-[8px] p-[8px] bg-gray-50 rounded-md border border-gray-300">
                            <div class="flex">
                                <x-icons.profile-circle-icon class='w-[16px] h-[16px] text-red-800'/>
                                <p class="ml-[4px] text-zinc-600 text-xs font-medium">{{ $lomba->penyelenggara->nama_instansi }}</p>
                            </div>
                        </div>
                        <div class="mr-[8px] p-[8px] bg-gray-50 rounded-md border border-gray-300">
                            <div class="flex">
                                <x-icons.profile-multiple-icon class='w-[16px] h-[16px] text-red-800'/>
                                <p class="ml-[4px] text-zinc-600 text-xs font-medium">{{ $lomba->maximum_person > 1 ? 'Individu & Kelompok' : 'Individu' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex mt-[8px]">
                        <div class="mr-[8px] p-[8px] bg-gray-50 rounded-md border border-gray-300">
                            <div class="flex">
                               <x-icons.calendar-icon class='w-[16px] h-[16px] text-red-800'/>
                                <p class="ml-[4px] text-zinc-600 text-xs font-medium">
                                    {{ $lomba->start_date->format('j F Y') }} - {{ $lomba->end_date->format('j F Y') }}
                                </p>
                            </div>
                        </div>
                        <div class="mr-[8px] p-[8px] bg-gray-50 rounded-md border border-gray-300">
                            <div class="flex">
                                <x-icons.dollar-icon class='w-[16px] h-[16px] text-red-800'/>
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
