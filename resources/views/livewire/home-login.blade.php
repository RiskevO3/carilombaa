@section('title', 'Lomba Page')
<div>
    <x-loading wire:loading.class='flex' wire:loading.class.remove='hidden' />
    <x-navbar/>
    <div class="container mx-auto max-w-full bg-main-red-color font-inter">
        <div class="container mx-auto py-[60px]">
            <div class="grid grid-cols-2">
                <div class="flex w-full mt-[164px] mb-32">
                    <div class="2xl:ml-10 mx-auto">
                        <h1 class="text-5xl 2xl:text-5xl font-semibold text-white">
                            Mahasiswa Pemenang Selalu siap bertanding, Anda Siap?
                        </h1>
                        <div class="mt-2">
                            <p class="text-white text-base font-normal leading-normal">
                                Pilih lomba sesuai minat bakatmu!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex w-full h-full">
                    <div class="my-auto overflow-hidden rounded-lg">
                        <img src="{{ asset('assets/images/first-section-mahasiswa.jpeg') }}" alt=""
                            class="object-cover object-center" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container max-w-full py-[60px] px-[70px]">
        <div class="container mx-auto">
            <div class="flex justify-between">
                <h3 class="text-stone-900 text-4xl font-semibold leading-10">
                    Lomba Tersedia
                </h3>
                <form wire:submit.prevent='searchLomba'>
                    <div class="relative">
                        <input type="search"
                            wire:model='search_lomba'
                            class="w-[381px] py-[8px] pr-[8px] pl-[18px] border border-gray-300 text-black rounded-lg"
                            placeholder="Cari Lomba" />
                        <button type="submit"
                            class="absolute py-2 px-2 bg-amber-500 text-white font-medium text-sm rounded-md right-1 top-[3px] hover:bg-white hover:text-black hover:scale-95 transition ease-in">
                            Search
                        </button>
                    </div>
                </form>
            </div>
            <div class="my-[28px]">
                <h1 class="text-stone-900 text-2xl font-medium leading-10 text-center">
                    Mau cari lomba sesuai kategori? Filter disini!
                </h1>
                <div class="container max-w-3xl mx-auto">
                    <div class="grid grid-cols-4 gap-[16px] mt-[24px]">
                        <select name="kategoriLomba" id="kategoriLomba"
                            class="bg-gray-50 py-[12px] px-[8px] rounded-md border border-gray-300">
                            <option value="" class="" selected>Kategori Lomba</option>
                        </select>
                        <select name="kategoriLomba" id="kategoriLomba"
                            class="bg-gray-50 py-[12px] px-[8px] rounded-md border border-gray-300">
                            <option value="" class="">Tenggat Waktu</option>
                        </select>
                        <select name="kategoriLomba" id="kategoriLomba"
                            class="bg-gray-50 py-[12px] px-[8px] rounded-md border border-gray-300">
                            <option value="" class="">Lokasi</option>
                        </select>
                        <select name="kategoriLomba" id="kategoriLomba"
                            class="bg-gray-50 py-[12px] px-[8px] rounded-md border border-gray-300">
                            <option value="" class="">Harga</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="container max-w-full relative">
                <div class="grid grid-cols-4 gap-[24px]">
                    @foreach($list_lomba as $lomba)
                    <div class="relative overflow-hidden rounded-md shadow-lg bg-white border border-white">
                        <img src="{{ $lomba->getImage() }}" alt="" 
                            class="object-cover object-center" />
                        <div class="mx-[24px]">
                            <div class="my-2">
                                <h1 class="text-lg font-semibold text-stone-900">
                                    {{ $lomba->title }}
                                </h1>
                                <p class="text-gray-500 text-sm font-normal">
                                    {{ $lomba->start_date->format('j F') }} - {{ $lomba->end_date->format('j F') }}
                                </p>
                            </div>
                            <div class="mb-2">
                                <p class="text-neutral-600">
                                    {{ $lomba->short_description }}
                                </p>
                            </div>
                            <div class="mb-4 mx-auto">
                                <button
                                    class="w-full bg-amber-500 text-base text-center rounded-md shadow-md font-semibold font-monsterrat border py-2 px-1 hover:bg-[#f8f9fa] hover:text-amber-500 hover:border-amber-500 hover:scale-95 transition ease-in relative">
                                    Selengkapnya
                                </button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="container max-w-full py-[24px] bg-white font-inter">
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
    </div>
    <div class="container max-w-full bg-white font-inter">
        <hr class="bg-gray-500" />
        <div class="container mx-auto py-[24px] px-[24px]">
            <p class="text-gray-500 text-base text-center font-normal leading-snug">
                Copyright © 2023 Kelompok 3 | All Rights Reserved
            </p>
        </div>
    </div>
</div>
