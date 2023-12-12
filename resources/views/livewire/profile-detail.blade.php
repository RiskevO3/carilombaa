<div>
    <div class="container max-w-full bg-main-red-color px-[70px] py-[60px]">
        <div class="flex">
            <div class="relative w-[192px] h-[192px]">
                <div class="w-full h-full overflow-hidden rounded-full">
                    <img src="{{ $user->resizeImage(320,480) }}" alt="Logo" class="w-full h-full object-cover"/>
                </div>
                <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2   bg-amber-500 py-[2px] px-[20px] rounded-full">
                    <div class="flex">
                        <svg class="mt-1 fill-current w-[24px] h-[24px] text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                            <path d="M353.8 54.1L330.2 6.3c-3.9-8.3-16.1-8.6-20.4 0L286.2 54.1l-52.3 7.5c-9.3 1.4-13.3 12.9-6.4 19.8l38 37-9 52.1c-1.4 9.3 8.2 16.5 16.8 12.2l46.9-24.8 46.6 24.4c8.6 4.3 18.3-2.9 16.8-12.2l-9-52.1 38-36.6c6.8-6.8 2.9-18.3-6.4-19.8l-52.3-7.5zM256 256c-17.7 0-32 14.3-32 32V480c0 17.7 14.3 32 32 32H384c17.7 0 32-14.3 32-32V288c0-17.7-14.3-32-32-32H256zM32 320c-17.7 0-32 14.3-32 32V480c0 17.7 14.3 32 32 32H160c17.7 0 32-14.3 32-32V352c0-17.7-14.3-32-32-32H32zm416 96v64c0 17.7 14.3 32 32 32H608c17.7 0 32-14.3 32-32V416c0-17.7-14.3-32-32-32H480c-17.7 0-32 14.3-32 32z"/>
                        </svg>
                        <h5 class="ml-[12px] text-white text-2xl font-semibold leading-normal">
                            124
                        </h5>
                    </div>
                </div>
            </div>
            <div class="ml-[60px]">
                <div class="w-full pt-6">
                    <h3 class="text-white text-5xl font-semibold leading-[48px]">{{ $user->name }}</h3>
                    <h6 class="my-2 text-white text-xl font-normal leading-normal">
                        Mahasiswa Semester 5 di Universitas {{ $user->mahasiswa->universitas}}
                    </h6>
                    <div class="flex">
                        <div class="flex items-center py-[8px] px-[12px] bg-amber-500 rounded">
                            <svg class="w-[16px] h-[16px] fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M4.1 38.2C1.4 34.2 0 29.4 0 24.6C0 11 11 0 24.6 0H133.9c11.2 0 21.7 5.9 27.4 15.5l68.5 114.1c-48.2 6.1-91.3 28.6-123.4 61.9L4.1 38.2zm503.7 0L405.6 191.5c-32.1-33.3-75.2-55.8-123.4-61.9L350.7 15.5C356.5 5.9 366.9 0 378.1 0H487.4C501 0 512 11 512 24.6c0 4.8-1.4 9.6-4.1 13.6zM80 336a176 176 0 1 1 352 0A176 176 0 1 1 80 336zm184.4-94.9c-3.4-7-13.3-7-16.8 0l-22.4 45.4c-1.4 2.8-4 4.7-7 5.1L168 298.9c-7.7 1.1-10.7 10.5-5.2 16l36.3 35.4c2.2 2.2 3.2 5.2 2.7 8.3l-8.6 49.9c-1.3 7.6 6.7 13.5 13.6 9.9l44.8-23.6c2.7-1.4 6-1.4 8.7 0l44.8 23.6c6.9 3.6 14.9-2.2 13.6-9.9l-8.6-49.9c-.5-3 .5-6.1 2.7-8.3l36.3-35.4c5.6-5.4 2.5-14.8-5.2-16l-50.1-7.3c-3-.4-5.7-2.4-7-5.1l-22.4-45.4z"/>
                            </svg>
                            <p class="ml-[8px] text-white text-base font-normal leading-normal">
                                {{ $user->pendaftar->count() > 0 ? $user->pendaftar->count() : 'Belum Mengikuti' }} Lomba
                            </p>
                        </div>
                        <div class="ml-[12px] flex items-center py-[8px] px-[12px] bg-amber-500 rounded">
                            <svg class="fill-current w-[16px] h-[16px] text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M399 384.2C376.9 345.8 335.4 320 288 320H224c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z"/>
                            </svg>
                            <p class="ml-[8px] text-white text-base font-normal leading-normal">
                                Bergabung Sejak {{ $user->created_at->format('Y') }}
                            </p>
                        </div>
                        <div class="ml-[12px] flex items-center py-[8px] px-[12px] bg-amber-500 rounded">
                            <svg class="fill-current w-[16px] h-[16px]  text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>                            </svg>
                            <p class="ml-[8px] text-white text-base font-normal leading-normal">
                                Universitas {{ $user->mahasiswa->universitas }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container  bg-white mx-[70px] my-[60px]">
        <div class="container py-[20px] px-[32px]">
            <h1 class="text-stone-900 text-[32px] font-semibold leading-10">Riwayat Perlombaan</h1>
            <div class="my-[32px]">
                <div class="flex justify-between">
                    <div class="flex space-x-[12px]">
                        <h6 class="self-center text-stone-900 text-sm font-medium leading-snug">Tampilkan:</h6>
                        <select name="" id="" class="border  border-gray-400 rounded-md py-[12px] px-[8px] text-zinc-600 text-xs font-normal">
                            <option value="">Semua Lomba</option>
                        </select>
                    </div>
                    <div class="relative self-center">
                        <input type="text" class="w-[381px] py-[12px] pl-[18px] pr-[8px] rounded-md border border-gray-400 text-zinc-600 text-sm font-normal leading-tight" placeholder="Cari Lomba">
                        <button class="absolute right-1 top-1 bg-amber-500 rounded-md p-[8px] text-white text-xs font-semibold leading-[18px] active:scale-75 hover:scale-95 hover:opacity-75 transition ease-in">
                            Search
                        </button>
                    </div>
                </div>
            </div>
            @if($user->pendaftar->count() < 1)
            <div class="h-[300px] flex justify-center items-center">
                <h3 class="text-xl text-zinc-700">Anda Belum Mengikuti Lomba...</h3>
            </div>
            @else
            <div class="grid grid-cols-3 gap-[24px]">
                @foreach ($user->pendaftar as $lomba)
                    <x-lomba-card :lomba="$lomba" :user='true' />
                @endforeach
            </div>
            @endif
        </div>
    </div>
    <x-footer/>
</div>
