<div x-data="profile" x-init="initProfile()" x-cloak>
    <div class="container max-w-full p-[20px] lg:py-[70px] lg:px-[60px]">
        <div
            class="flex flex-col md:flex-row md:gap-[32px] lg:gap-[58px] overflow-auto border border-zinc-200 rounded-lg md:border-none md:rounded-none">
            <div
                class="w-full md:max-w-[322px] lg:h-[522px] max-h-[522px] md:py-[20px] bg-white md:border md:border-zinc-200 md:rounded-lg flex md:flex-col">
                <button :class="selected == 'profile' ? 'md:bg-[#fff8f1]' : ''" x-on:click="selected='profile'"
                    class="w-full md:py-[10px] md:pl-[28px] md:pr-[4px] md:hover:bg-[#fff8f1] flex flex-col md:flex-row items-center justify-center md:justify-between md:group md:transition-all md:ease-in">
                    <div
                        class="pt-3 pb-1 md:p-0 flex flex-col md:flex-row gap-[4px] md:gap-[12px] justify-center items-center">
                        <svg :class="selected == 'profile' ? 'text-amber-500' :
                            'text-gray-600 md:group-hover:text-amber-500 md:group-hover:scale-95 md:group-hover:active:scale-75 md:transition md:ease-in'"
                            class="fill-current w-[16px] h-[16px]" xmlns="http://www.w3.org/2000/svg" height="16"
                            width="14" viewBox="0 0 448 512">
                            <path
                                d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                        </svg>
                        <p :class="selected == 'profile' ? 'text-amber-500' :
                            'text-gray-500 md:group-hover:text-amber-500 md:group-hover:scale-95 md:group-hover:active:scale-75 md:transition md:ease-in'"
                            class="text-sm font-medium">Profil</p>
                    </div>
                    <div :class="selected == 'profile' ? 'bg-amber-500 rounded-lg md:block' : 'bg-slate-500 md:hidden'"
                        class="w-full h-1 md:w-[3px] md:h-5 md:bg-amber-500 md:rounded md:group-hover:block">
                    </div>
                </button>
                <button :class="selected == 'profile-data' ? 'bg-[#fff8f1]' : ''" x-on:click="selected='profile-data'"
                    class="w-full md:py-[10px] md:pl-[28px] md:pr-[4px] md:hover:bg-[#fff8f1] flex flex-col md:flex-row items-center justify-center md:justify-between md:group md:transition-all md:ease-in">
                    <div
                        class="pt-3 pb-1 md:p-0 flex flex-col md:flex-row gap-[4px] md:gap-[12px] justify-center items-center">
                        <svg :class="selected == 'profile-data' ? 'text-amber-500' :
                            'text-gray-600 groumd:p-hover:text-amber-500 md:group-hover:scale-95 md:group-hover:active:scale-75 tranmd:sition easemd:-in'"
                            class="fill-current w-[16px] h-[16px]" xmlns="http://www.w3.org/2000/svg" height="16"
                            width="20" viewBox="0 0 640 512">
                            <path
                                d="M224 0a128 128 0 1 1 0 256A128 128 0 1 1 224 0zM178.3 304h91.4c11.8 0 23.4 1.2 34.5 3.3c-2.1 18.5 7.4 35.6 21.8 44.8c-16.6 10.6-26.7 31.6-20 53.3c4 12.9 9.4 25.5 16.4 37.6s15.2 23.1 24.4 33c15.7 16.9 39.6 18.4 57.2 8.7v.9c0 9.2 2.7 18.5 7.9 26.3H29.7C13.3 512 0 498.7 0 482.3C0 383.8 79.8 304 178.3 304zM436 218.2c0-7 4.5-13.3 11.3-14.8c10.5-2.4 21.5-3.7 32.7-3.7s22.2 1.3 32.7 3.7c6.8 1.5 11.3 7.8 11.3 14.8v17.7c0 7.8 4.8 14.8 11.6 18.7c6.8 3.9 15.1 4.5 21.8 .6l13.8-7.9c6.1-3.5 13.7-2.7 18.5 2.4c7.6 8.1 14.3 17.2 20.1 27.2s10.3 20.4 13.5 31c2.1 6.7-1.1 13.7-7.2 17.2l-14.4 8.3c-6.5 3.7-10 10.9-10 18.4s3.5 14.7 10 18.4l14.4 8.3c6.1 3.5 9.2 10.5 7.2 17.2c-3.3 10.6-7.8 21-13.5 31s-12.5 19.1-20.1 27.2c-4.8 5.1-12.5 5.9-18.5 2.4l-13.8-7.9c-6.7-3.9-15.1-3.3-21.8 .6c-6.8 3.9-11.6 10.9-11.6 18.7v17.7c0 7-4.5 13.3-11.3 14.8c-10.5 2.4-21.5 3.7-32.7 3.7s-22.2-1.3-32.7-3.7c-6.8-1.5-11.3-7.8-11.3-14.8V467.8c0-7.9-4.9-14.9-11.7-18.9c-6.8-3.9-15.2-4.5-22-.6l-13.5 7.8c-6.1 3.5-13.7 2.7-18.5-2.4c-7.6-8.1-14.3-17.2-20.1-27.2s-10.3-20.4-13.5-31c-2.1-6.7 1.1-13.7 7.2-17.2l14-8.1c6.5-3.8 10.1-11.1 10.1-18.6s-3.5-14.8-10.1-18.6l-14-8.1c-6.1-3.5-9.2-10.5-7.2-17.2c3.3-10.6 7.7-21 13.5-31s12.5-19.1 20.1-27.2c4.8-5.1 12.4-5.9 18.5-2.4l13.6 7.8c6.8 3.9 15.2 3.3 22-.6c6.9-3.9 11.7-11 11.7-18.9V218.2zm92.1 133.5a48.1 48.1 0 1 0 -96.1 0 48.1 48.1 0 1 0 96.1 0z" />
                        </svg>
                        <p :class="selected == 'profile-data' ? 'text-amber-500' :
                            'text-gray-500 md:group-hover:text-amber-500 md:group-hover:scale-95 md:group-hover:active:scalemd:-75 transitmd:ion ease-in'"
                            class="text-sm font-medium">Data Pribadi</p>
                    </div>
                    <div :class="selected == 'profile-data' ? 'bg-amber-500 rounded-lg md:block' : 'bg-slate-500 md:hidden'"
                        class="w-full h-1 md:w-[3px] md:h-5 md:bg-amber-500 md:rounded md:group-hover:block">
                    </div>
                </button>
                <button :class="selected == 'profile-password' ? 'bg-[#fff8f1]' : ''"
                    x-on:click="selected='profile-password'"
                    class="w-full md:py-[10px] md:pl-[28px] md:pr-[4px] md:hover:bg-[#fff8f1] flex flex-col md:flex-row items-center justify-center md:justify-between md:group md:transition-all md:ease-in">
                    <div
                        class="pt-3 pb-1 md:p-0 flex flex-col md:flex-row gap-[4px] md:gap-[12px] justify-center items-center">
                        <svg :class="selected == 'profile-password' ? 'text-amber-500' :
                            'text-gray-600 groumd:p-hover:text-amber-500 md:group-hover:scale-95 md:group-hover:active:scale-75 tranmd:sition easemd:-in'"
                            class="fill-current w-[16px] h-[16px]" xmlns="http://www.w3.org/2000/svg" height="16"
                            width="20" viewBox="0 0 640 512">
                            <path
                                d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H392.6c-5.4-9.4-8.6-20.3-8.6-32V352c0-2.1 .1-4.2 .3-6.3c-31-26-71-41.7-114.6-41.7H178.3zM528 240c17.7 0 32 14.3 32 32v48H496V272c0-17.7 14.3-32 32-32zm-80 32v48c-17.7 0-32 14.3-32 32V480c0 17.7 14.3 32 32 32H608c17.7 0 32-14.3 32-32V352c0-17.7-14.3-32-32-32V272c0-44.2-35.8-80-80-80s-80 35.8-80 80z" />
                        </svg>
                        <p :class="selected == 'profile-password' ? 'text-amber-500' :
                            'text-gray-500 md:group-hover:text-amber-500 md:group-hover:scale-95 md:group-hover:active:scalemd:-75 transitmd:ion ease-in'"
                            class="text-sm font-medium">Ubah Kata Sandi</p>
                    </div>
                    <div :class="selected == 'profile-password' ? 'bg-amber-500 rounded-lg md:block' : 'bg-slate-500 md:hidden'"
                        class="w-full h-1 md:w-[3px] md:h-5 md:bg-amber-500 md:rounded md:group-hover:block">
                    </div>
                </button>
            </div>
            <div class="w-full h-full p-[20px] bg-white md:border md:border-zinc-200 md:rounded-lg space-y-[20px]">
                <div class="space-y-[20px]" x-show="selected == 'profile'"
                    x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0 translate-x-4"
                    x-transition:enter-end="opacity-100 translate-x-0"
                    x-transition:leave="transition ease-in duration-0 transform opacity-0"
                    x-transition:leave-start="opacity-0 translate-x-0" x-transition:leave-end="opacity-0 translate-x-4">
                    <h4 class="text-black text-lg font-semibold">
                        Profil Pengguna
                    </h4>
                    <div class="flex items-center space-x-[20px]">
                        <img :src="imageUser" alt=""
                            class="h-[100px] w-[100px] object-cover object-center rounded-full" />
                        <div class="max-w-[313px] flex flex-col space-y-[12px]">
                            <div>
                                <input x-on:change="fileChosen" type="file" accept="image/*" class="hidden"
                                    id="changePhoto">
                                <label for="changePhoto"
                                    class="inline-block p-[12px] bg-amber-500 border border-amber-500 rounded shadow text-white text-xs font-medium leading-[18px] hover:scale-90 hover:opacity-75 transition ease-in">
                                    Ubah Foto
                                </label>
                            </div>
                            <p class="text-gray-500 text-xs font-medium leading-[18px]">
                                Foto Profil Anda sebaiknya memiliki rasio 1:1 dan berukuran tidak lebih dari 2MB.
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col space-y-[12px]">
                        <h4 class="text-stone-900 text-base font-semibold leading-tight">
                            Nama Lengkap <span class="text-red-800">*</span>
                        </h4>
                        <input type="text"
                            class="py-[15px] px-[12px] bg-white border border-gray-300 rounded-md text-neutral-600"
                            placeholder="Sarah Robert">
                    </div>
                    <div class="flex flex-col space-y-[12px]">
                        <h4 class="text-stone-900 text-base font-semibold leading-tight">
                            Email <span class="text-red-800">*</span>
                        </h4>
                        <input type="email"
                            class="py-[15px] px-[12px] bg-white border border-gray-300 rounded-md text-neutral-600"
                            placeholder="example@youremail.com">
                    </div>
                    <div class="flex flex-col space-y-[12px]">
                        <h4 class="text-stone-900 text-base font-semibold leading-tight">
                            Headline
                        </h4>
                        <input type="text"
                            class="py-[15px] px-[12px] bg-white border border-gray-300 rounded-md text-neutral-600"
                            placeholder="Mahasiswa semester 5 di Universitas A">
                    </div>
                    <div class="flex space-x-[20px]">
                        <div class="w-full flex flex-col space-y-[12px]">
                            <h4 class="text-stone-900 text-base font-semibold leading-tight">
                                Universitas <span class="text-red-800">*</span>
                            </h4>
                            <input type="text"
                                class="w-full py-[15px] px-[12px] bg-white border border-gray-300 rounded-md text-neutral-600"
                                placeholder="Mahasiswa semester 5 di Universitas A">
                        </div>
                        <div class="w-full flex flex-col space-y-[12px]">
                            <h4 class="text-stone-900 text-base font-semibold leading-tight">
                                NIM <span class="text-red-800">*</span>
                            </h4>
                            <input type="text"
                                class="w-full py-[15px] px-[12px] bg-white border border-gray-300 rounded-md text-neutral-600"
                                placeholder="1202213">
                        </div>
                    </div>
                </div>
                <div class="space-y-[20px]" x-show="selected == 'profile-data'"
                    x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0 translate-x-4"
                    x-transition:enter-end="opacity-100 translate-x-0"
                    x-transition:leave="transition ease-in duration-0 transform opacity-0"
                    x-transition:leave-start="opacity-0 translate-x-0" x-transition:leave-end="opacity-0 translate-x-4">
                    <h4 class="text-black text-lg font-semibold">
                        Data Pribadi
                    </h4>
                    <div class="flex flex-col space-y-[12px]">
                        <h4 class="text-stone-900 text-base font-semibold leading-tight">
                            Nomor Whatsapp <span class="text-red-800">*</span>
                        </h4>
                        <input type="text"
                            class="py-[15px] px-[12px] bg-white border border-gray-300 rounded-md text-neutral-600"
                            placeholder="+62 123 4567 890">
                    </div>
                    <div class="flex space-x-[20px]">
                        <div class="w-full flex flex-col space-y-[12px]">
                            <h4 class="text-stone-900 text-base font-semibold leading-tight">
                                Tempat Lahir
                            </h4>
                            <input type="text"
                                class="w-full py-[15px] px-[12px] bg-white border border-gray-300 rounded-md text-neutral-600"
                                placeholder="Mahasiswa semester 5 di Universitas A">
                        </div>
                        <div class="w-full flex flex-col space-y-[12px]">
                            <h4 class="text-stone-900 text-base font-semibold leading-tight">
                                Tanggal Lahir
                            </h4>
                            <input type="text"
                                class="w-full py-[15px] px-[12px] bg-white border border-gray-300 rounded-md text-neutral-600"
                                placeholder="10-12-2002">
                        </div>
                    </div>
                    <div class="flex space-x-[16px]">
                        <div class="flex space-x-[8px] items-center">
                            <input id="male" type="radio" value="" name="default-radio"
                                class="w-[24px] h-[24px] text-red-800 bg-gray-100 border-gray-500 focus:ring-red-800 focus:ring-2">
                            <label for="male"
                                class="text-neutral-600 text-base font-normal leading-tight">Laki-Laki</label>
                        </div>
                        <div class="flex space-x-[8px] items-center">
                            <input id="female" type="radio" value="" name="default-radio"
                                class="w-[24px] h-[24px] text-red-800 bg-gray-100 border-gray-500 focus:ring-red-800 focus:ring-2">
                            <label for="female"
                                class="text-neutral-600 text-base font-normal leading-tight">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="space-y-[20px]" x-show="selected == 'profile-password'"
                    x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0 translate-x-4"
                    x-transition:enter-end="opacity-100 translate-x-0"
                    x-transition:leave="transition ease-in duration-0 transform opacity-0"
                    x-transition:leave-start="opacity-0 translate-x-0"
                    x-transition:leave-end="opacity-0 translate-x-4">
                    <h4 class="text-black text-lg font-semibold">
                        Ubah Kata Sandi
                    </h4>
                    <div class="flex flex-col space-y-[12px]">
                        <h4 class="text-stone-900 text-base font-semibold leading-tight">
                            Kata Sandi Lama <span class="text-red-800">*</span>
                        </h4>
                        <input type="password"
                            class="py-[15px] px-[12px] bg-white border border-gray-300 rounded-md text-neutral-600">
                    </div>
                    <div class="flex flex-col space-y-[12px]">
                        <h4 class="text-stone-900 text-base font-semibold leading-tight">
                            Kata Sandi Baru <span class="text-red-800">*</span>
                        </h4>
                        <input type="password"
                            class="py-[15px] px-[12px] bg-white border border-gray-300 rounded-md text-neutral-600">
                    </div>
                    <div class="flex flex-col space-y-[12px]">
                        <h4 class="text-stone-900 text-base font-semibold leading-tight">
                            Konfirmasi Kata Sandi <span class="text-red-800">*</span>
                        </h4>
                        <input type="password"
                            class="py-[15px] px-[12px] bg-white border border-gray-300 rounded-md text-neutral-600">
                    </div>
                </div>
                <div class="flex justify-end">
                    <button
                        class="p-[12px] bg-amber-500 rounded shadow text-white text-xs font-medium leading-[18px] hover:scale-90 hover:opacity-75 transition ease-in">
                        Simpan Perubahan
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@section('scripts')
    @script
        <script>
            Alpine.data('profile', () => {
                return {
                    selected: "profile",
                    imageUser: '',
                    fullName:'',
                    email:'',
                    univ:'',
                    nim:'',
                    
                    async initProfile() {
                        let imageUser = $wire.getUserImage()
                        this.imageUser = imageUser
                    },
                    fileChosen(event) {
                        this.fileToDataUrl(event, src => this.imageUser = src)
                    },
                    fileToDataUrl(event, callback) {
                        if (!event.target.files.length) return

                        let file = event.target.files[0],
                            reader = new FileReader()

                        reader.readAsDataURL(file)
                        reader.onload = e => callback(e.target.result)
                    },
                }
            })
        </script>
    @endscript
@endsection
