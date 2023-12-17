<div>
    <div class="container max-w-full bg-main-red-color px-[70px] py-[60px]">
        <div class="flex">
            <div class="relative w-[192px] h-[192px]">
                <div class="w-full h-full overflow-hidden rounded-full">
                    <img src="{{ $user->resizeImage(320,480) }}" alt="Logo" class="w-full h-full object-cover"/>
                </div>
                <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2   bg-amber-500 py-[2px] px-[20px] rounded-full">
                    <div class="flex">
                        <x-icons.podium-icon class="mt-1 w-[24px] h-[24px] text-white"/>
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
                            <x-icons.medal-icon class="w-[16px] h-[16px]  text-white"/>
                            <p class="ml-[8px] text-white text-base font-normal leading-normal">
                                {{ $user->pendaftar->count() > 0 ? $user->pendaftar->count() : 'Belum Mengikuti' }} Lomba
                            </p>
                        </div>
                        <div class="ml-[12px] flex items-center py-[8px] px-[12px] bg-amber-500 rounded">
                            <x-icons.profile-circle-icon class="w-[16px] h-[16px] text-white"/>
                            <p class="ml-[8px] text-white text-base font-normal leading-normal">
                                Bergabung Sejak {{ $user->created_at->format('Y') }}
                            </p>
                        </div>
                        <div class="ml-[12px] flex items-center py-[8px] px-[12px] bg-amber-500 rounded">
                            <x-icons.location-icon class="w-[16px] h-[16px]  text-white"/>
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
