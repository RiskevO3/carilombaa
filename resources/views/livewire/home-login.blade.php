@section('title', 'Lomba Page')
<div>
    <x-loading wire:loading />
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
                <form
                x-data="{submitSearch(){
                    if($wire.search_lomba.length >= 5 ){
                        $wire.searchLomba()
                        return;
                    }
                    iziToast.error({
                        title: 'Error',
                        message: 'Minimal 5 karakter',
                        position: 'topRight'
                    })
                    $wire.search_lomba = ''
                    return;
                }}"
                 x-on:submit.prevent="submitSearch()"
                 >
                    <div class="relative">
                        <input 
                            type="text"
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
            <div class="container max-w-full">
                <div class="grid grid-cols-4 gap-4">
                    @foreach($list_lomba as $lomba)
                    <x-lomba-card :lomba="$lomba" />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <x-footer />
</div>
