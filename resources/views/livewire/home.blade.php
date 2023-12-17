@section('title', 'Welcome to carilomba.com!')
<div>
    <div class="container mx-auto max-w-full bg-main-red-color font-inter">
        <div class="container mx-auto">
            <div class="grid grid-cols-2">
                <div class="flex w-full mt-[164px] mb-32">
                    <div class="2xl:ml-10 mx-auto">
                        <h1 class="text-5xl 2xl:text-5xl font-semibold text-white">
                            Temukan Bakatmu,
                        </h1>
                        <h1 class="text-5xl 2xl:text-5xl font-semibold text-white">
                            Juara Masadepanmu!
                        </h1>
                        <div class="mt-2">
                            <p class="text-white font-light  w-2/3">
                                Jangan Biarkan Potensi Anda terbuang sia-sia, Tantang diri
                                Anda sendiri dengan kompetisi terbaik!.
                            </p>
                        </div>
                        <button
                            class="flex mt-5 w-2/5  bg-[#e18f14] text-white text-xl font-semibold py-2 px-4 rounded-md hover:bg-[#f8f9fa] hover:text-[#343a40] hover:border-[#e1e4ed] hover:scale-95 transition ease-in relative">
                            Daftar Sekarang<i
                                class="absolute py-1 pr-[12px] -right-0 fa-solid fa-chevron-right text-sm"></i>
                        </button>
                    </div>
                </div>
                <div class="flex w-full h-full p-10">
                    <div class="my-auto overflow-hidden rounded-lg">
                        <img src="{{ asset('assets/images/image-first-landing-page.jpeg') }}" alt=""
                            srcset="object-cover object-center" loading="lazy"/>
                    </div>
                </div>
            </div>
            <div class="w-full grid grid-cols-5 gap-2 justify-center mx-auto 2xl:px-12">
                <div class="w-full relative h-10 mx-auto px-3">
                    <div
                        class="absolute w-60 2xl:w-72 h-15 bg-white rounded shadow-md px-6 py-2 group  transition ease-in">
                        <div class="flex py-5 px-2">
                            <div class="flex h-10 w-10 bg-[#ffeacb] rounded py-1 px-1">
                                <i class="m-auto fa-solid fa-medal text-3xl text-[#e99c55]"></i>
                            </div>
                            <div class="h-10">
                                <p
                                    class="mx-auto ml-3 text-neutral-700 font-semibold  transition ease-in">
                                    Info Lomba ter-update
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full relative h-10 mx-auto px-3">
                    <div
                        class="absolute w-60 2xl:w-72 h-15 bg-white rounded shadow-md px-6 py-2 group  transition ease-in">
                        <div class="flex py-5 px-2">
                            <div class="flex h-10 w-10 bg-[#dff7ce] rounded py-1 px-1">
                                <i class="m-auto fa-solid fa-shield-halved text-3xl text-[#38bb36]"></i>
                            </div>
                            <div class="h-10">
                                <p
                                    class="mx-auto ml-3 text-neutral-700 font-semibold  transition ease-in 2xl:py-2">
                                    100% Terpercaya
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full relative h-10 mx-auto px-3">
                    <div
                        class="absolute w-60 2xl:w-72 h-15 bg-white rounded shadow-md px-6 py-2 group  transition ease-in">
                        <div class="flex py-5 px-2">
                            <div class="flex h-10 w-10 bg-[#c5e3f0] rounded py-1 px-1">
                                <i class="m-auto fa-solid fa-user-shield text-3xl text-[#3887cd]"></i>
                            </div>
                            <div class="h-10">
                                <p
                                    class="mx-auto ml-3 text-neutral-700 font-semibold  transition ease-in 2xl:py-2">
                                    Keamanan Terjamin
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full relative h-10 mx-auto px-3">
                    <div
                        class="absolute w-60 2xl:w-72 h-15 bg-white rounded shadow-md px-6 py-2 group  transition ease-in">
                        <div class="flex py-5 px-2">
                            <div class="flex h-10 w-10 bg-[#fdd8d8] rounded py-1 px-1">
                                <i class="m-auto fa-solid fa-shield-heart text-3xl text-[#d75252]"></i>
                            </div>
                            <div class="h-10">
                                <p
                                    class="mx-auto ml-3 text-neutral-700 font-semibold  transition ease-in py-2">
                                    User-Friendly
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full relative h-10 mx-auto px-3">
                    <div
                        class="absolute w-60 2xl:w-72 h-15 bg-white rounded shadow-md px-6 py-2 group  transition ease-in">
                        <div class="flex py-5 px-2">
                            <div class="flex h-10 w-10 bg-[#ffd0d9] rounded py-1 px-1">
                                <i class="m-auto fa-solid fa-heart text-3xl text-[#db4785]"></i>
                            </div>
                            <div class="h-10">
                                <p
                                    class="mx-auto ml-3 text-neutral-700 font-semibold  transition ease-in py-2">
                                    24/7 Support
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container max-w-full my-20 mx-auto font-inter bg-white">
        <div class="container mx-auto">
            <div class="grid grid-cols-2 gap-6 py-[60px]">
                <img src="{{ asset('assets/images/mentor-landing.jpeg') }}" alt="" srcset=""
                    class="w-11/12 object-cover object-center rounded-lg" loading="lazy" />
                <div class="flex">
                    <div class="my-28 2xl:my-40">
                        <h1 class="text-red-800 text-3xl font-semibold">Tentang Kami</h1>
                        <p class="w-3/4 text-stone-900 text-justify tracking-wide text-lg 2xl:text-xl my-8 2xl:my-11 pr-5">
                            <span class="text-red-800 font-semibold">Carilomba</span> adalah
                            sebuah platform daring yang bertujuan untuk menyediakan akses
                            mudah ke berbagai macam perlombaan dari berbagai kategori untuk
                            mahasiswa di seluruh Indonesia. Kami juga memberikan kesempatan
                            bagi penyelenggara perlombaan untuk mendaftarkan lomba mereka
                            pada platform kami.
                        </p>
                        <button
                            class="flex mt-5 w-2/6 bg-[#e18f14] text-white text-xl font-semibold py-2 px-4 rounded-md hover:opacity-80 hover:scale-95 transition ease-in relative">
                            Daftar Sekarang<i
                                class="absolute py-1 pr-[12px] -right-0 fa-solid fa-chevron-right text-sm"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if($lomba_features)
    <div class="container max-w-full mx-auto font-inter bg-main-red-color">
        <div class="container py-[60px] mx-auto">
            <div class="flex justify-between">
                <div class="w-1/2">
                    <h1 class="text-3xl font-semibold text-white">Lomba</h1>
                    <p class="mt-[12px] text-sm text-white">
                        temukan berbagai lomba menarik yang siap menguji kemampuan dan
                        bakat Anda. Pilih kompetisi favorit Anda dan mulailah mengejar
                        prestasi!
                    </p>
                </div>
                <div class="flex flex-row-reverse w-1/2 m-auto">
                    <button
                        class="text-white font-semibold bg-[#E18F14] rounded-md shadow py-[14px] px-[18px] hover:bg-[#f8f9fa] hover:text-[#343a40] hover:border-[#e1e4ed] hover:scale-95 transition ease-in relative">
                        Lihat Semua
                    </button>
                </div>
            </div>
            <div class="grid grid-cols-4 mt-[28px] gap-3">
                @foreach($lomba_features as $lomba)
                <x-lomba-card :lomba="$lomba" />
                @endforeach
            </div>
            <div class="mt-[50px] mx-auto">
                <h1 class="mx-auto w-1/2 text-white text-3xl text-center font-semibold">
                    Berbagai Kategori Lomba
                </h1>
                <p class="mx-auto mt-[12px] text-center text-lg font-medium text-white">
                    Situs web kami mempersembahkan berbagai kategori lomba yang beragam
                    dan menarik
                </p>
                <div class="container max-w-5xl mx-auto flex flex-wrap justify-center mt-8">
                    <div class="flex py-2 px-5 rounded mx-2 my-3 bg-white">
                        <i class="fa-solid fa-circle text-amber-500 py-1 px-1"></i>
                        <span class="text-base text-stone-900 font-jakarta font-semibold">
                            Data Science
                        </span>
                    </div>
                    <div class="flex py-2 px-5 rounded mx-2 my-3 bg-white">
                        <i class="fa-solid fa-circle text-amber-500 py-1 px-1"></i>
                        <span class="text-base text-stone-900 font-jakarta font-semibold">
                            Web Development
                        </span>
                    </div>
                    <div class="flex py-2 px-5 rounded mx-2 my-3 bg-white">
                        <i class="fa-solid fa-circle text-amber-500 py-1 px-1"></i>
                        <span class="text-base text-stone-900 font-jakarta font-semibold">
                            Mobile Development
                        </span>
                    </div>
                    <div class="flex py-2 px-5 rounded mx-2 my-3 bg-white">
                        <i class="fa-solid fa-circle text-amber-500 py-1 px-1"></i>
                        <span class="text-base text-stone-900 font-jakarta font-semibold">
                            Networking
                        </span>
                    </div>
                    <div class="flex py-2 px-5 rounded mx-2 my-3 bg-white">
                        <i class="fa-solid fa-circle text-amber-500 py-1 px-1"></i>
                        <span class="text-base text-stone-900 font-jakarta font-semibold">
                            Cybersecurity
                        </span>
                    </div>
                    <div class="flex py-2 px-5 rounded mx-2 my-3 bg-white">
                        <i class="fa-solid fa-circle text-amber-500 py-1 px-1"></i>
                        <span class="text-base text-stone-900 font-jakarta font-semibold">
                            Business Plan
                        </span>
                    </div>
                    <div class="flex py-2 px-5 rounded mx-2 my-3 bg-white">
                        <i class="fa-solid fa-circle text-amber-500 py-1 px-1"></i>
                        <span class="text-base text-stone-900 font-jakarta font-semibold">
                            Design Graphic
                        </span>
                    </div>
                    <div class="flex py-2 px-5 rounded mx-2 my-3 bg-white">
                        <i class="fa-solid fa-circle text-amber-500 py-1 px-1"></i>
                        <span class="text-base text-stone-900 font-jakarta font-semibold">
                            Photography
                        </span>
                    </div>
                    <div class="flex py-2 px-5 rounded mx-2 my-3 bg-white">
                        <i class="fa-solid fa-circle text-amber-500 py-1 px-1"></i>
                        <span class="text-base text-stone-900 font-jakarta font-semibold">
                            Design Poster
                        </span>
                    </div>
                    <div class="flex py-2 px-5 rounded mx-2 my-3 bg-white">
                        <i class="fa-solid fa-circle text-amber-500 py-1 px-1"></i>
                        <span class="text-base text-stone-900 font-jakarta font-semibold">
                            Writing
                        </span>
                    </div>
                    <div class="flex py-2 px-5 rounded mx-2 my-3 bg-white">
                        <i class="fa-solid fa-circle text-amber-500 py-1 px-1"></i>
                        <span class="text-base text-stone-900 font-jakarta font-semibold">
                            Design Poster
                        </span>
                    </div>
                    <div class="flex py-2 px-5 rounded mx-2 my-3 bg-white">
                        <i class="fa-solid fa-circle text-amber-500 py-1 px-1"></i>
                        <span class="text-base text-stone-900 font-jakarta font-semibold">
                            Short Movie
                        </span>
                    </div>
                    <div class="flex py-2 px-5 rounded mx-2 my-3 bg-white">
                        <i class="fa-solid fa-circle text-amber-500 py-1 px-1"></i>
                        <span class="text-base text-stone-900 font-jakarta font-semibold">
                            Papers
                        </span>
                    </div>
                    <div class="flex py-2 px-5 rounded mx-2 my-3 bg-white">
                        <i class="fa-solid fa-circle text-amber-500 py-1 px-1"></i>
                        <span class="text-base text-stone-900 font-jakarta font-semibold">
                            etc
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <div class="container max-w-full mx-auto mt-[60px] font-inter bg-white">
        <div class="container py-[60px] mx-auto">
            <div class="flex justify-between mb-[48px]">
                <div class="">
                    <h1 class="text-red-800 text-3xl font-semibold">Leaderboard</h1>
                    <p class="mt-[12px] text-zinc-600 text-lg font-normal">
                        Intip peringkat teratas di Section Leaderboard!
                    </p>
                </div>
                <div class="flex my-auto">
                    <button
                        class="py-3 px-5 bg-amber-500 rounded-md shadow-md text-center text-white font-semibold hover:bg-[#f8f9fa] hover:text-[#343a40] hover:border-[#e1e4ed] hover:scale-95 transition ease-in">
                        Lihat Semua
                    </button>
                </div>
            </div>
            <div class="relative overflow-x-auto font-inter rounded-md  border  mb-[60px]">
                <table class="w-full text-left">
                    <thead class="text-lg text-neutral-700 bg-[#F8F8F8]">
                        <tr>
                            <th scope="col" class="text-center py-3">Rank</th>
                            <th scope="col" class="text-center py-3">Nama</th>
                            <th scope="col" class="text-center py-3">Jumlah Lomba</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white">
                            <td class="text-center text-zinc-600">1</td>
                            <td class="text-center text-zinc-600">Andi Pratama</td>
                            <td class="text-center py-3 text-zinc-600">16</td>
                        </tr>
                        <tr class="bg-[#F8F8F8]">
                            <td class="text-center text-zinc-600">2</td>
                            <td class="text-center text-zinc-600">Cindy Lim</td>
                            <td class="text-center py-3 text-zinc-600">14</td>
                        </tr>
                        <tr class="bg-white">
                            <td class="text-center text-zinc-600">3</td>
                            <td class="text-center text-zinc-600">Irfan Budiman</td>
                            <td class="text-center py-3 text-zinc-600">11</td>
                        </tr>
                        <tr class="bg-[#F8F8F8]">
                            <td class="text-center text-zinc-600">4</td>
                            <td class="text-center text-zinc-600">Sinta Putri</td>
                            <td class="text-center py-3 text-zinc-600">7</td>
                        </tr>
                        <tr class="bg-white">
                            <td class="text-center text-zinc-600">5</td>
                            <td class="text-center text-zinc-600">Rani Pratiwi</td>
                            <td class="text-center py-3 text-zinc-600">4</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="container mx-auto py-[60px] px-[70px]">
                <div class="container mx-auto w-[820px]">
                    <h1 class="text-red-800 text-3xl font-semibold text-center">
                        Kami Telah Melahirkan Generasi Berbakat dalam Kompetisi Mahasiswa.
                    </h1>
                    <p class="text-zinc-600 text-center text-base leading-normal font-normal mt-4 px-10">
                        Kami telah menjadi wadah berharga bagi generasi berbakat dalam
                        kompetisi mahasiswa. Bersama-sama, kita menumbuhkan
                        bintang-bintang masa depan yang berkilau.
                    </p>
                </div>
            </div>
            <div class="bg-main-red-color rounded-md">
                <div class="container max-w-full grid grid-cols-4 gap-0 px-[66px] py-[40px]">
                    <div class="flex flex-wrap">
                        <div class="bg-blue-200 rounded-md py-2 px-3.5">
                            <i class="fa-solid fa-user text-xl text-blue-500"></i>
                        </div>
                        <div class="ml-[18px] flex flex-col">
                            <h4 class="text-white text-2xl font-semibold mb-0 h-6 transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]"
                                x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:200]'">
                                <span class="supports-[counter-set]:sr-only">200</span>+
                            </h4>
                            <p class="text-white text-base font-semibold font-['Inter'] leading-snug">
                                Peserta Lomba
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-wrap">
                        <div class="bg-orange-200 rounded-md py-2 px-3.5">
                            <i class="fa-solid fa-star text-xl text-amber-400"></i>
                        </div>
                        <div class="ml-[18px] flex flex-col">
                            <h4 class="text-white text-2xl font-semibold mb-0 h-6 transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]"
                                x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:97]'">
                                <span class="supports-[counter-set]:sr-only">97</span>%
                            </h4>
                            <p class="text-white text-base font-semibold font-['Inter'] leading-snug">
                                Ulasan Baik
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-wrap">
                        <div class="bg-lime-100 rounded-md py-2 px-3.5">
                            <i class="fa-solid fa-users text-xl text-green-600"></i>
                        </div>
                        <div class="ml-[18px] flex flex-col">
                            <h4 class="text-white text-2xl font-semibold mb-0 h-6 transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]"
                                x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:50]'">
                                <span class="supports-[counter-set]:sr-only">50</span>+
                            </h4>
                            <p class="text-white text-base font-semibold font-['Inter'] leading-snug">
                                Partner Lomba
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-wrap">
                        <div class="bg-amber-100 rounded-md py-2 px-3.5">
                            <i class="fa-solid fa-medal text-xl text-orange-400"></i>
                        </div>
                        <div class="ml-[18px] flex flex-col">
                            <h4 class="text-white text-2xl font-semibold mb-0 h-6 transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]"
                                x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:100]'">
                                <span class="supports-[counter-set]:sr-only">100</span>+
                            </h4>
                            <p class="text-white text-base font-semibold font-['Inter'] leading-snug">
                                Lomba Terpercaya
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container max-w-full mx-auto mt-[60px] py-[60px] px-[70px] bg-main-red-color font-inter"
        x-data="{ slideNum: 1 }">
        <h1 class="text-center text-3xl text-white font-semibold leading-10">
            Apa Kata Mereka?
        </h1>
        <div class="container mt-12 h-[320px]">
            <div class="grid grid-cols-3 gap-[22px]" x-show="slideNum === 1"
                x-transition:enter="transition ease-in-out duration-500 transform"
                x-transition:enter-start="opacity-0 translate-x-4" x-transition:enter-end="opacity-100 translate-x-0">
                <div class="bg-white py-[24px] px-[24px] rounded-lg shadow border border-neutral-200">
                    <div class="w-16 h-16 rounded-full overflow-hidden">
                        <img src="{{ asset('assets/images/person-card-1.jpeg') }}" alt="" srcset=""
                            class="object-conver object-center relative" loading="lazy"/>
                    </div>
                    <p class="mt-6 text-zinc-600 text-base font-normal leading-normal h-24">
                        Website penyedia lomba ini sangat keren! Mereka memiliki berbagai
                        jenis lomba yang sesuai dengan minat saya
                    </p>
                    <h6 class="mt-8 text-red-800 text-base font-semibold leading-slug">
                        Andi Pratama
                    </h6>
                    <p class="text-gray-500 text-base font-medium leading-slug">
                        Mahasiswa
                    </p>
                </div>
                <div class="bg-white py-[24px] px-[24px] rounded-lg shadow border border-neutral-200">
                    <div class="w-16 h-16 rounded-full overflow-hidden">
                        <img src="{{ asset('assets/images/person-card-2.jpeg') }}" alt="" srcset=""
                            class="object-conver object-center relative" loading="lazy"/>
                    </div>
                    <p class="mt-6 text-zinc-600 text-base font-normal leading-normal h-24">
                        Website sangat membantu untuk membantu kami para penyelenggara
                        lomba untuk mendapatkan peserta lomba.
                    </p>
                    <h6 class="mt-8 text-red-800 text-base font-semibold leading-slug">
                        Dinda Wijaya
                    </h6>
                    <p class="text-gray-500 text-base font-medium leading-slug">
                        Lomba X
                    </p>
                </div>
                <div class="bg-white py-[24px] px-[24px] rounded-lg shadow border border-neutral-200">
                    <div class="w-16 h-16 rounded-full overflow-hidden">
                        <img src="{{ asset('assets/images/person-card-3.jpeg') }}" alt="" srcset=""
                            class="object-conver object-center relative" loading="lazy" />
                    </div>
                    <p class="mt-6 text-zinc-600 text-base font-normal leading-normal h-24">
                        Saya baru-baru ini memenangkan sebuah lomba melalui website ini,
                        dan saya sangat senang! Mereka mengumumkan pemenang dengan jelas.
                    </p>
                    <h6 class="mt-8 text-red-800 text-base font-semibold leading-slug">
                        Rani Pratiwi
                    </h6>
                    <p class="text-gray-500 text-base font-medium leading-slug">
                        Mahisiswi
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-[22px]" x-show="slideNum === 2"
                x-transition:enter="transition ease-in-out duration-500 transform"
                x-transition:enter-start="opacity-0 translate-x-4" x-transition:enter-end="opacity-100 translate-x-0">
                <div class="bg-white py-[24px] px-[24px] rounded-lg shadow border border-neutral-200">
                    <div class="w-16 h-16 rounded-full overflow-hidden">
                        <img src="{{ asset('assets/images/person-card-1.jpeg') }}" alt="" srcset=""
                            class="object-conver object-center relative" loading="lazy" />
                    </div>
                    <p class="mt-6 text-zinc-600 text-base font-normal leading-normal h-24">
                        Website penyedia lomba ini sangat keren! Mereka memiliki berbagai
                        jenis lomba yang sesuai dengan minat saya
                    </p>
                    <h6 class="mt-8 text-red-800 text-base font-semibold leading-slug">
                        Andi Pratama
                    </h6>
                    <p class="text-gray-500 text-base font-medium leading-slug">
                        Mahasiswa
                    </p>
                </div>
                <div class="bg-white py-[24px] px-[24px] rounded-lg shadow border border-neutral-200">
                    <div class="w-16 h-16 rounded-full overflow-hidden">
                        <img src="{{ asset('assets/images/person-card-2.jpeg') }}" alt="" srcset=""
                            class="object-conver object-center relative" loading="lazy" />
                    </div>
                    <p class="mt-6 text-zinc-600 text-base font-normal leading-normal h-24">
                        Website sangat membantu untuk membantu kami para penyelenggara
                        lomba untuk mendapatkan peserta lomba.
                    </p>
                    <h6 class="mt-8 text-red-800 text-base font-semibold leading-slug">
                        Dinda Wijaya
                    </h6>
                    <p class="text-gray-500 text-base font-medium leading-slug">
                        Lomba X
                    </p>
                </div>
                <div class="bg-white py-[24px] px-[24px] rounded-lg shadow border border-neutral-200">
                    <div class="w-16 h-16 rounded-full overflow-hidden">
                        <img src="{{ asset('assets/images/person-card-3.jpeg') }}" alt="" srcset=""
                            class="object-conver object-center relative" loading="lazy" />
                    </div>
                    <p class="mt-6 text-zinc-600 text-base font-normal leading-normal h-24">
                        Saya baru-baru ini memenangkan sebuah lomba melalui website ini,
                        dan saya sangat senang! Mereka mengumumkan pemenang dengan jelas.
                    </p>
                    <h6 class="mt-8 text-red-800 text-base font-semibold leading-slug">
                        Rani Pratiwi
                    </h6>
                    <p class="text-gray-500 text-base font-medium leading-slug">
                        Mahisiswi
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-[22px]" x-show="slideNum === 3"
                x-transition:enter="transition ease-in-out duration-500 transform"
                x-transition:enter-start="opacity-0 translate-x-4" x-transition:enter-end="opacity-100 translate-x-0">
                <div class="bg-white py-[24px] px-[24px] rounded-lg shadow border border-neutral-200">
                    <div class="w-16 h-16 rounded-full overflow-hidden">
                        <img src="{{ asset('assets/images/person-card-1.jpeg') }}" alt="" srcset=""
                            class="object-conver object-center relative" loading="lazy" />
                    </div>
                    <p class="mt-6 text-zinc-600 text-base font-normal leading-normal h-24">
                        Website penyedia lomba ini sangat keren! Mereka memiliki berbagai
                        jenis lomba yang sesuai dengan minat saya
                    </p>
                    <h6 class="mt-8 text-red-800 text-base font-semibold leading-slug">
                        Andi Pratama
                    </h6>
                    <p class="text-gray-500 text-base font-medium leading-slug">
                        Mahasiswa
                    </p>
                </div>
                <div class="bg-white py-[24px] px-[24px] rounded-lg shadow border border-neutral-200">
                    <div class="w-16 h-16 rounded-full overflow-hidden">
                        <img src="{{ asset('assets/images/person-card-2.jpeg') }}" alt="" srcset=""
                            class="object-conver object-center relative" loading="lazy" />
                    </div>
                    <p class="mt-6 text-zinc-600 text-base font-normal leading-normal h-24">
                        Website sangat membantu untuk membantu kami para penyelenggara
                        lomba untuk mendapatkan peserta lomba.
                    </p>
                    <h6 class="mt-8 text-red-800 text-base font-semibold leading-slug">
                        Dinda Wijaya
                    </h6>
                    <p class="text-gray-500 text-base font-medium leading-slug">
                        Lomba X
                    </p>
                </div>
                <div class="bg-white py-[24px] px-[24px] rounded-lg shadow border border-neutral-200">
                    <div class="w-16 h-16 rounded-full overflow-hidden">
                        <img src="{{ asset('assets/images/person-card-3.jpeg') }}" alt="" srcset=""
                            class="object-conver object-center relative" loading="lazy" />
                    </div>
                    <p class="mt-6 text-zinc-600 text-base font-normal leading-normal h-24">
                        Saya baru-baru ini memenangkan sebuah lomba melalui website ini,
                        dan saya sangat senang! Mereka mengumumkan pemenang dengan jelas.
                    </p>
                    <h6 class="mt-8 text-red-800 text-base font-semibold leading-slug">
                        Rani Pratiwi
                    </h6>
                    <p class="text-gray-500 text-base font-medium leading-slug">
                        Mahisiswi
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-[22px]" x-show="slideNum === 4"
                x-transition:enter="transition ease-in-out duration-500 transform"
                x-transition:enter-start="opacity-0 translate-x-4" x-transition:enter-end="opacity-100 translate-x-0">
                <div class="bg-white py-[24px] px-[24px] rounded-lg shadow border border-neutral-200">
                    <div class="w-16 h-16 rounded-full overflow-hidden">
                        <img src="{{ asset('assets/images/person-card-1.jpeg') }}"alt="" srcset=""
                            class="object-conver object-center relative" loading="lazy" />
                    </div>
                    <p class="mt-6 text-zinc-600 text-base font-normal leading-normal h-24">
                        Website penyedia lomba ini sangat keren! Mereka memiliki berbagai
                        jenis lomba yang sesuai dengan minat saya
                    </p>
                    <h6 class="mt-8 text-red-800 text-base font-semibold leading-slug">
                        Andi Pratama
                    </h6>
                    <p class="text-gray-500 text-base font-medium leading-slug">
                        Mahasiswa
                    </p>
                </div>
                <div class="bg-white py-[24px] px-[24px] rounded-lg shadow border border-neutral-200">
                    <div class="w-16 h-16 rounded-full overflow-hidden">
                        <img src="{{ asset('assets/images/person-card-2.jpeg') }}" alt="" srcset=""
                            class="object-conver object-center relative" loading="lazy" />
                    </div>
                    <p class="mt-6 text-zinc-600 text-base font-normal leading-normal h-24">
                        Website sangat membantu untuk membantu kami para penyelenggara
                        lomba untuk mendapatkan peserta lomba.
                    </p>
                    <h6 class="mt-8 text-red-800 text-base font-semibold leading-slug">
                        Dinda Wijaya
                    </h6>
                    <p class="text-gray-500 text-base font-medium leading-slug">
                        Lomba X
                    </p>
                </div>
                <div class="bg-white py-[24px] px-[24px] rounded-lg shadow border border-neutral-200">
                    <div class="w-16 h-16 rounded-full overflow-hidden">
                        <img src="{{ asset('assets/images/person-card-3.jpeg') }}" alt="" srcset=""
                            class="object-conver object-center relative" loading="lazy"/>
                    </div>
                    <p class="mt-6 text-zinc-600 text-base font-normal leading-normal h-24">
                        Saya baru-baru ini memenangkan sebuah lomba melalui website ini,
                        dan saya sangat senang! Mereka mengumumkan pemenang dengan jelas.
                    </p>
                    <h6 class="mt-8 text-red-800 text-base font-semibold leading-slug">
                        Rani Pratiwi
                    </h6>
                    <p class="text-gray-500 text-base font-medium leading-slug">
                        Mahisiswi
                    </p>
                </div>
            </div>
        </div>
        <div class="flex justify-between mt-[24px]">
            <div class="flex py-3">
                <div class="h-[15px] mr-1"
                    :class="slideNum === 1 ? 'bg-red-200 w-[45px] rounded-xl transition-all ease-in duration-300' :
                        'bg-red-400 w-[15px] rounded-full transition-all ease-in duration-300'">
                </div>
                <div class="h-[15px] rounded-full mx-1"
                    :class="slideNum === 2 ? 'bg-red-200 w-[45px] rounded-xl transition-all ease-in duration-300' :
                        'bg-red-400 w-[15px] rounded-full transition-all ease-in duration-300'">
                </div>
                <div class="h-[15px] rounded-full mx-1"
                    :class="slideNum === 3 ? 'bg-red-200 w-[45px] rounded-xl transition-all ease-in duration-300' :
                        'bg-red-400 w-[15px] rounded-full transition-all ease-in duration-300'">
                </div>
                <div class="h-[15px] rounded-full mx-1"
                    :class="slideNum === 4 ? 'bg-red-200 w-[45px] rounded-xl transition-all ease-in duration-300' :
                        'bg-red-400 w-[15px] rounded-full transition-all ease-in duration-300'">
                </div>
            </div>
            <div class="flex mr-5">
                <div class="w-[38px] h-[38px] bg-[#E18F14] py-2 px-[12px] border border-[#E18F14] rounded-md mr-[3px] hover:scale-95 hover:bg-transparent transition ease-in"
                    @click="slideNum = slideNum == 1 ? 4 : slideNum - 1">
                    <i class="fa-solid fa-arrow-left text-white font-bold"></i>
                </div>
                <div class="w-[38px] h-[38px] bg-[#E18F14] py-2 px-[12px] border border-[#E18F14] rounded-md mr-[3px] hover:scale-95 hover:bg-transparent transition ease-in"
                    @click="slideNum = slideNum == 4 ? 1 : slideNum + 1">
                    <i class="fa-solid fa-arrow-right text-white font-bold"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="container max-w-full mt-[60px] bg-white font-inter">
        <div class="container py-[60px] px-[70px]">
            <div class="grid grid-cols-2">
                <div class="flex justify-end items-center h-[408px]">
                    <div>
                        <h3 class="text-main-red-color text-3xl font-semibold leading-9">
                            Frequently Asked Question
                        </h3>
                        <p class="text-zinc-600 text-base leading-normal">
                            Penjelasan Lengkap tentang Pertanyaan yang Sering Diajukan.
                        </p>
                    </div>
                </div>
                <div class="ml-[48px] h-[408px]" x-data="{ navOpened: 1 }">
                    <div class="grid grid-cols-3 gap-0">
                        <button class="py-[12px] pr-[20px] border-b-2 text-center font-semibold leading-tight"
                            :class="navOpened === 1 ? 'text-red-800 border-main-red-color' : 'text-gray-500 border-zinc-200'"
                            @click="navOpened = 1">
                            General
                        </button>
                        <button class="py-[12px] pr-[20px] border-b-2 text-center font-semibold leading-tight"
                            :class="navOpened === 2 ? 'text-red-800 border-main-red-color' : 'text-gray-500 border-zinc-200'"
                            @click="navOpened = 2">
                            Peserta Lomba
                        </button>
                        <button class="py-[12px] pr-[20px] border-b-2 text-center font-semibold leading-tight"
                            :class="navOpened === 3 ? 'text-red-800 border-main-red-color' : 'text-gray-500 border-zinc-200'"
                            @click="navOpened = 3">
                            Partner Lomba
                        </button>
                    </div>
                    <div class="container mx-auto mt-[32px]" x-data="{ detailOpened: 0 }" x-show="navOpened === 1"
                        x-transition:enter="transition ease-out duration-300 transform"
                        x-transition:enter-start="opacity-0 translate-x-4"
                        x-transition:enter-end="opacity-100 translate-x-0"
                        x-transition:leave="transition ease-in duration-0 transform opacity-0"
                        x-transition:leave-start="opacity-0 translate-x-0"
                        x-transition:leave-end="opacity-0 translate-x-4">
                        <div class="py-[20px] pl-[24px] pr-[20px] border rounded-md relative my-3 cursor-pointer"
                            :class="detailOpened === 1 ? 'border-main-red-color transition ease-in' : 'border-gray-400'"
                            @click="detailOpened = detailOpened == 1 ? 0 : 1">
                            <p class="text-base font-medium leading-snug"
                                :class="detailOpened === 1 ? 'text-main-red-color' : 'text-gray-500'">
                                Lorem ipsum dolor sit amet consectetur?
                            </p>
                            <button class="absolute right-3 inset-y-0"
                                :class="detailOpened === 1 ? 'rotate-45 transition ease-in' : '-rotate-0 transition ease-out'">
                                <i class="fa-solid fa-plus text-[#6D758F]"></i>
                            </button>
                            <p class="mt-[11px] text-zinc-600 text-sm font-normal leading-snug"
                                x-show="detailOpened === 1" x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 scale-90"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-90">
                                Lorem ipsum dolor sit amet, consectetur cdolor col adipiscing
                                elit. Integer mattis nunc augue vel lacinia erat euismod ut.
                                Sed eleifend tellus nonole tincidunt aliquet. Fusce aliquam mi
                                felis.
                            </p>
                        </div>
                        <div class="py-[20px] pl-[24px] pr-[20px] border rounded-md relative my-3 cursor-pointer"
                            :class="detailOpened === 2 ? 'border-main-red-color transition ease-in' : 'border-gray-400'"
                            @click="detailOpened = detailOpened == 2 ? 0 : 2">
                            <p class="text-base font-medium leading-snug"
                                :class="detailOpened === 2 ? 'text-main-red-color' : 'text-gray-500'">
                                Lorem ipsum dolor sit amet consectetur?
                            </p>
                            <button class="absolute right-3 inset-y-0"
                                :class="detailOpened === 2 ? 'rotate-45 transition ease-in' : '-rotate-0 transition ease-out'">
                                <i class="fa-solid fa-plus text-[#6D758F]"></i>
                            </button>
                            <p class="mt-[11px] text-zinc-600 text-sm font-normal leading-snug"
                                x-show="detailOpened === 2" x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 scale-90"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-90">
                                Lorem ipsum dolor sit amet, consectetur cdolor col adipiscing
                                elit. Integer mattis nunc augue vel lacinia erat euismod ut.
                                Sed eleifend tellus nonole tincidunt aliquet. Fusce aliquam mi
                                felis.
                            </p>
                        </div>
                        <div class="py-[20px] pl-[24px] pr-[20px] border rounded-md relative my-3 cursor-pointer"
                            :class="detailOpened === 3 ? 'border-main-red-color transition ease-in' : 'border-gray-400'"
                            @click="detailOpened = detailOpened == 3 ? 0 : 3">
                            <p class="text-base font-medium leading-snug"
                                :class="detailOpened === 3 ? 'text-main-red-color' : 'text-gray-500'">
                                Lorem ipsum dolor sit amet consectetur?
                            </p>
                            <button class="absolute right-3 inset-y-0"
                                :class="detailOpened === 3 ? 'rotate-45 transition ease-in' : '-rotate-0 transition ease-out'">
                                <i class="fa-solid fa-plus text-[#6D758F]"></i>
                            </button>
                            <p class="mt-[11px] text-zinc-600 text-sm font-normal leading-snug"
                                x-show="detailOpened === 3" x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 scale-90"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-90">
                                Lorem ipsum dolor sit amet, consectetur cdolor col adipiscing
                                elit. Integer mattis nunc augue vel lacinia erat euismod ut.
                                Sed eleifend tellus nonole tincidunt aliquet. Fusce aliquam mi
                                felis.
                            </p>
                        </div>
                        <div class="py-[20px] pl-[24px] pr-[20px] border rounded-md relative my-3 cursor-pointer"
                            :class="detailOpened === 4 ? 'border-main-red-color transition ease-in' : 'border-gray-400'"
                            @click="detailOpened = detailOpened == 4 ? 0 : 4">
                            <p class="text-base font-medium leading-snug"
                                :class="detailOpened === 4 ? 'text-main-red-color' : 'text-gray-500'">
                                Lorem ipsum dolor sit amet consectetur?
                            </p>
                            <button class="absolute right-3 inset-y-0"
                                :class="detailOpened === 4 ? 'rotate-45 transition ease-in' : '-rotate-0 transition ease-out'">
                                <i class="fa-solid fa-plus text-[#6D758F]"></i>
                            </button>
                            <p class="mt-[11px] text-zinc-600 text-sm font-normal leading-snug"
                                x-show="detailOpened === 4" x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 scale-90"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-90">
                                Lorem ipsum dolor sit amet, consectetur cdolor col adipiscing
                                elit. Integer mattis nunc augue vel lacinia erat euismod ut.
                                Sed eleifend tellus nonole tincidunt aliquet. Fusce aliquam mi
                                felis.
                            </p>
                        </div>
                    </div>
                    <div class="container mx-auto mt-[32px]" x-data="{ detailOpened: 0 }" x-show="navOpened === 2"
                        x-transition:enter="transition ease-out duration-300 transform"
                        x-transition:enter-start="opacity-0 translate-x-4"
                        x-transition:enter-end="opacity-100 translate-x-0"
                        x-transition:leave="transition ease-in duration-0 transform opacity-0"
                        x-transition:leave-start="opacity-0 translate-x-0"
                        x-transition:leave-end="opacity-0 translate-x-4">
                        <div class="py-[20px] pl-[24px] pr-[20px] border rounded-md relative my-3 cursor-pointer"
                            :class="detailOpened === 1 ? 'border-main-red-color transition ease-in' : 'border-gray-400'"
                            @click="detailOpened = detailOpened == 1 ? 0 : 1">
                            <p class="text-base font-medium leading-snug"
                                :class="detailOpened === 1 ? 'text-main-red-color' : 'text-gray-500'">
                                Lorem ipsum dolor sit amet consectetur?
                            </p>
                            <button class="absolute right-3 inset-y-0"
                                :class="detailOpened === 1 ? 'rotate-45 transition ease-in' : '-rotate-0 transition ease-out'">
                                <i class="fa-solid fa-plus text-[#6D758F]"></i>
                            </button>
                            <p class="mt-[11px] text-zinc-600 text-sm font-normal leading-snug"
                                x-show="detailOpened === 1" x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 scale-90"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-90">
                                Lorem ipsum dolor sit amet, consectetur cdolor col adipiscing
                                elit. Integer mattis nunc augue vel lacinia erat euismod ut.
                                Sed eleifend tellus nonole tincidunt aliquet. Fusce aliquam mi
                                felis.
                            </p>
                        </div>
                        <div class="py-[20px] pl-[24px] pr-[20px] border rounded-md relative my-3 cursor-pointer"
                            :class="detailOpened === 2 ? 'border-main-red-color transition ease-in' : 'border-gray-400'"
                            @click="detailOpened = detailOpened == 2 ? 0 : 2">
                            <p class="text-base font-medium leading-snug"
                                :class="detailOpened === 2 ? 'text-main-red-color' : 'text-gray-500'">
                                Lorem ipsum dolor sit amet consectetur?
                            </p>
                            <button class="absolute right-3 inset-y-0"
                                :class="detailOpened === 2 ? 'rotate-45 transition ease-in' : '-rotate-0 transition ease-out'">
                                <i class="fa-solid fa-plus text-[#6D758F]"></i>
                            </button>
                            <p class="mt-[11px] text-zinc-600 text-sm font-normal leading-snug"
                                x-show="detailOpened === 2" x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 scale-90"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-90">
                                Lorem ipsum dolor sit amet, consectetur cdolor col adipiscing
                                elit. Integer mattis nunc augue vel lacinia erat euismod ut.
                                Sed eleifend tellus nonole tincidunt aliquet. Fusce aliquam mi
                                felis.
                            </p>
                        </div>
                        <div class="py-[20px] pl-[24px] pr-[20px] border rounded-md relative my-3 cursor-pointer"
                            :class="detailOpened === 3 ? 'border-main-red-color transition ease-in' : 'border-gray-400'"
                            @click="detailOpened = detailOpened == 3 ? 0 : 3">
                            <p class="text-base font-medium leading-snug"
                                :class="detailOpened === 3 ? 'text-main-red-color' : 'text-gray-500'">
                                Lorem ipsum dolor sit amet consectetur?
                            </p>
                            <button class="absolute right-3 inset-y-0"
                                :class="detailOpened === 3 ? 'rotate-45 transition ease-in' : '-rotate-0 transition ease-out'">
                                <i class="fa-solid fa-plus text-[#6D758F]"></i>
                            </button>
                            <p class="mt-[11px] text-zinc-600 text-sm font-normal leading-snug"
                                x-show="detailOpened === 3" x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 scale-90"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-90">
                                Lorem ipsum dolor sit amet, consectetur cdolor col adipiscing
                                elit. Integer mattis nunc augue vel lacinia erat euismod ut.
                                Sed eleifend tellus nonole tincidunt aliquet. Fusce aliquam mi
                                felis.
                            </p>
                        </div>
                        <div class="py-[20px] pl-[24px] pr-[20px] border rounded-md relative my-3 cursor-pointer"
                            :class="detailOpened === 4 ? 'border-main-red-color transition ease-in' : 'border-gray-400'"
                            @click="detailOpened = detailOpened == 4 ? 0 : 4">
                            <p class="text-base font-medium leading-snug"
                                :class="detailOpened === 4 ? 'text-main-red-color' : 'text-gray-500'">
                                Lorem ipsum dolor sit amet consectetur?
                            </p>
                            <button class="absolute right-3 inset-y-0"
                                :class="detailOpened === 4 ? 'rotate-45 transition ease-in' : '-rotate-0 transition ease-out'">
                                <i class="fa-solid fa-plus text-[#6D758F]"></i>
                            </button>
                            <p class="mt-[11px] text-zinc-600 text-sm font-normal leading-snug"
                                x-show="detailOpened === 4" x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 scale-90"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-90">
                                Lorem ipsum dolor sit amet, consectetur cdolor col adipiscing
                                elit. Integer mattis nunc augue vel lacinia erat euismod ut.
                                Sed eleifend tellus nonole tincidunt aliquet. Fusce aliquam mi
                                felis.
                            </p>
                        </div>
                    </div>
                    <div class="container mx-auto mt-[32px]" x-data="{ detailOpened: 0 }" x-show="navOpened === 3"
                        x-transition:enter="transition ease-out duration-300 transform"
                        x-transition:enter-start="opacity-0 translate-x-4"
                        x-transition:enter-end="opacity-100 translate-x-0"
                        x-transition:leave="transition ease-in duration-0 transform opacity-0"
                        x-transition:leave-start="opacity-0 translate-x-0"
                        x-transition:leave-end="opacity-0 translate-x-4">
                        <div class="py-[20px] pl-[24px] pr-[20px] border rounded-md relative my-3 cursor-pointer"
                            :class="detailOpened === 1 ? 'border-main-red-color transition ease-in' : 'border-gray-400'"
                            @click="detailOpened = detailOpened == 1 ? 0 : 1">
                            <p class="text-base font-medium leading-snug"
                                :class="detailOpened === 1 ? 'text-main-red-color' : 'text-gray-500'">
                                Lorem ipsum dolor sit amet consectetur?
                            </p>
                            <button class="absolute right-3 inset-y-0"
                                :class="detailOpened === 1 ? 'rotate-45 transition ease-in' : '-rotate-0 transition ease-out'">
                                <i class="fa-solid fa-plus text-[#6D758F]"></i>
                            </button>
                            <p class="mt-[11px] text-zinc-600 text-sm font-normal leading-snug"
                                x-show="detailOpened === 1" x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 scale-90"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-90">
                                Lorem ipsum dolor sit amet, consectetur cdolor col adipiscing
                                elit. Integer mattis nunc augue vel lacinia erat euismod ut.
                                Sed eleifend tellus nonole tincidunt aliquet. Fusce aliquam mi
                                felis.
                            </p>
                        </div>
                        <div class="py-[20px] pl-[24px] pr-[20px] border rounded-md relative my-3 cursor-pointer"
                            :class="detailOpened === 2 ? 'border-main-red-color transition ease-in' : 'border-gray-400'"
                            @click="detailOpened = detailOpened == 2 ? 0 : 2">
                            <p class="text-base font-medium leading-snug"
                                :class="detailOpened === 2 ? 'text-main-red-color' : 'text-gray-500'">
                                Lorem ipsum dolor sit amet consectetur?
                            </p>
                            <button class="absolute right-3 inset-y-0"
                                :class="detailOpened === 2 ? 'rotate-45 transition ease-in' : '-rotate-0 transition ease-out'">
                                <i class="fa-solid fa-plus text-[#6D758F]"></i>
                            </button>
                            <p class="mt-[11px] text-zinc-600 text-sm font-normal leading-snug"
                                x-show="detailOpened === 2" x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 scale-90"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-0 scale-0" x-transition:leave-end="opacity-0 scale-0">
                                Lorem ipsum dolor sit amet, consectetur cdolor col adipiscing
                                elit. Integer mattis nunc augue vel lacinia erat euismod ut.
                                Sed eleifend tellus nonole tincidunt aliquet. Fusce aliquam mi
                                felis.
                            </p>
                        </div>
                        <div class="py-[20px] pl-[24px] pr-[20px] border rounded-md relative my-3 cursor-pointer"
                            :class="detailOpened === 3 ? 'border-main-red-color transition ease-in' : 'border-gray-400'"
                            @click="detailOpened = detailOpened == 3 ? 0 : 3">
                            <p class="text-base font-medium leading-snug"
                                :class="detailOpened === 3 ? 'text-main-red-color' : 'text-gray-500'">
                                Lorem ipsum dolor sit amet consectetur?
                            </p>
                            <button class="absolute right-3 inset-y-0"
                                :class="detailOpened === 3 ? 'rotate-45 transition ease-in' : '-rotate-0 transition ease-out'">
                                <i class="fa-solid fa-plus text-[#6D758F]"></i>
                            </button>
                            <p class="mt-[11px] text-zinc-600 text-sm font-normal leading-snug"
                                x-show="detailOpened === 3" x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 scale-90"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-0 scale-0" x-transition:leave-end="opacity-0 scale-0">
                                Lorem ipsum dolor sit amet, consectetur cdolor col adipiscing
                                elit. Integer mattis nunc augue vel lacinia erat euismod ut.
                                Sed eleifend tellus nonole tincidunt aliquet. Fusce aliquam mi
                                felis.
                            </p>
                        </div>
                        <div class="py-[20px] pl-[24px] pr-[20px] border rounded-md relative my-3 cursor-pointer"
                            :class="detailOpened === 4 ? 'border-main-red-color transition ease-in' : 'border-gray-400'"
                            @click="detailOpened = detailOpened == 4 ? 0 : 4">
                            <p class="text-base font-medium leading-snug"
                                :class="detailOpened === 4 ? 'text-main-red-color' : 'text-gray-500'">
                                Lorem ipsum dolor sit amet consectetur?
                            </p>
                            <button class="absolute right-3 inset-y-0"
                                :class="detailOpened === 4 ? 'rotate-45 transition ease-in' : '-rotate-0 transition ease-out'">
                                <i class="fa-solid fa-plus text-[#6D758F]"></i>
                            </button>
                            <p class="mt-[11px] text-zinc-600 text-sm font-normal leading-snug"
                                x-show="detailOpened === 4" x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 scale-90"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-0 scale-0" x-transition:leave-end="opacity-0 scale-0">
                                Lorem ipsum dolor sit amet, consectetur cdolor col adipiscing
                                elit. Integer mattis nunc augue vel lacinia erat euismod ut.
                                Sed eleifend tellus nonole tincidunt aliquet. Fusce aliquam mi
                                felis.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container max-w-full mt-[60px] py-[48px] bg-white font-inter">
        <div class="container mx-auto py-[41px] px-[18px] bg-main-red-color rounded-md shadow-md">
            <h1 class="text-center text-white text-3xl font-semibold leading-9">
                Ingin bergabung dengan <br />
                Website kami?
            </h1>
            <p class="my-[20px] text-center text-white text-xs font-medium">
                Daftar Sebagai
            </p>
            <div class="w-1/4 mx-auto grid grid-cols-2 gap-[20px]">
                <a
                    href="{{ route('register',['as'=>'mahasiswa'])}}"
                    wire:navigate
                    class="bg-amber-500 rounded-lg shadow-md py-[15px] px-[18px] text-center text-sm font-semibold leading-tight text-white border border-amber-500 hover:bg-transparent hover:text-amber-500 hover:scale-95 transition ease-in relative">
                    Peserta Lomba
                </a>
                <a
                    href="{{ route('register',['as'=>'penyelenggara']) }}"
                    class="bg-amber-500 rounded-lg shadow-md py-[15px] px-[18px] text-center text-sm font-semibold leading-tight text-white border border-amber-500 hover:bg-transparent hover:text-amber-500 hover:scale-95 transition ease-in relative">
                    Partner Lomba
            </a>
            </div>
        </div>
    </div>
    <x-footer/>
</div>
