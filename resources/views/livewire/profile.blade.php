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
                        <x-icons.user-icon ::class="selected == 'profile' ? 'text-amber-500' : 'profile-icons-unselect'"/>
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
                        <x-icons.user-settings ::class="selected == 'profile-data' ? 'text-amber-500' : 'profile-icons-unselect'"/>
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
                    <x-icons.user-lock ::class="selected == 'profile-password' ? 'text-amber-500' : 'profile-icons-unselect'" />
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
                            class="py-[8px] px-[8px] bg-white disabled:bg-gray-300 border border-gray-300 rounded-md text-neutral-600"
                            x-model="fullName"
                            disabled
                            >
                    </div>
                    <div class="flex flex-col space-y-[12px]">
                        <h4 class="text-stone-900 text-base font-semibold leading-tight">
                            Email <span class="text-red-800">*</span>
                        </h4>
                        <input type="email"
                            class="py-[8px] px-[8px] bg-white disabled:bg-gray-300 border border-gray-300 rounded-md text-neutral-600"
                            x-model="email"
                            disabled
                            >
                    </div>
                    <div class="flex flex-col space-y-[12px]">
                        <h4 class="text-stone-900 text-base font-semibold leading-tight">
                            Headline
                        </h4>
                        <input type="text"
                            class="py-[8px] px-[8px] bg-white border border-gray-300 rounded-md text-neutral-600"
                            placeholder="Mahasiswa semester 5 di Universitas A"
                            x-model="headline"
                            >
                    </div>
                    <div class="flex space-x-[20px]">
                        <div class="w-full flex flex-col space-y-[12px]">
                            <h4 class="text-stone-900 text-base font-semibold leading-tight">
                                Universitas <span class="text-red-800">*</span>
                            </h4>
                            <input type="text"
                                class="w-full py-[8px] px-[8px] bg-white disabled:bg-gray-300 border border-gray-300 rounded-md text-neutral-600"
                                x-model="univ"
                                disabled
                                >
                        </div>
                        <div class="w-full flex flex-col space-y-[12px]">
                            <h4 class="text-stone-900 text-base font-semibold leading-tight">
                                NIM <span class="text-red-800">*</span>
                            </h4>
                            <input type="text"
                                class="w-full py-[8px] px-[8px] bg-white disabled:bg-gray-300 border border-gray-300 rounded-md text-neutral-600"
                                x-model="nim"
                                disabled
                                >
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
                            class="py-[8px] px-[8px] bg-white border border-gray-300 rounded-md text-neutral-600"
                            placeholder="+62 123 4567 890"
                            x-model="phone"
                            >
                    </div>
                    <div class="flex space-x-[20px]">
                        <div class="w-full flex flex-col space-y-[12px]">
                            <h4 class="text-stone-900 text-base font-semibold leading-tight">
                                Tempat Lahir
                            </h4>
                            <input type="text"
                                class="w-full py-[8px] px-[8px] bg-white border border-gray-300 rounded-md text-neutral-600"
                                placeholder="Jakarta">
                        </div>
                        <div class="w-full flex flex-col space-y-[12px]">
                            <h4 class="text-stone-900 text-base font-semibold leading-tight">
                                Tanggal Lahir
                            </h4>
                            <input type="text"
                                class="w-full py-[8px] px-[8px] bg-white border border-gray-300 rounded-md text-neutral-600"
                                placeholder="10-12-2002">
                        </div>
                    </div>
                    <div class="flex space-x-[16px]">
                        <div class="flex space-x-[8px] items-center">
                            <input id="male" type="radio" value="L" x-model="gender" name="default-radio"
                                class="w-[24px] h-[24px] text-red-800 bg-gray-100 disabled:bg-gray-300 border-gray-500 focus:ring-red-800 focus:ring-2"
                                :disabled="gender != 'L'"
                                >
                            <label for="male"
                                class="text-neutral-600 text-base font-normal leading-tight">Laki-Laki</label>
                        </div>
                        <div class="flex space-x-[8px] items-center">
                            <input id="female" type="radio" value="P" x-model="gender" name="default-radio"
                                class="w-[24px] h-[24px] text-red-800 bg-gray-100 disabled:bg-gray-300 border-gray-500 focus:ring-red-800 focus:ring-2"
                                :disabled="gender != 'P'"
                                >
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
                            class="py-[8px] px-[8px] bg-white border border-gray-300 rounded-md text-neutral-600">
                    </div>
                    <div class="flex flex-col space-y-[12px]">
                        <h4 class="text-stone-900 text-base font-semibold leading-tight">
                            Kata Sandi Baru <span class="text-red-800">*</span>
                        </h4>
                        <input type="password"
                            class="py-[8px] px-[8px] bg-white border border-gray-300 rounded-md text-neutral-600">
                    </div>
                    <div class="flex flex-col space-y-[12px]">
                        <h4 class="text-stone-900 text-base font-semibold leading-tight">
                            Konfirmasi Kata Sandi <span class="text-red-800">*</span>
                        </h4>
                        <input type="password"
                            class="py-[8px] px-[8px] bg-white border border-gray-300 rounded-md text-neutral-600">
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
                    phone:'',
                    gender:'',
                    headline:'',
                    async initProfile() {
                        let userData = await $wire.getUserData()
                        this.imageUser = userData.image
                        this.fullName = userData.name
                        this.email = userData.email
                        this.univ = userData.universitas
                        this.nim = userData.nim
                        this.phone = userData.phone
                        this.gender = userData.jenisKelamin
                        this.headline = userData.headline
                        console.log(userData)
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
