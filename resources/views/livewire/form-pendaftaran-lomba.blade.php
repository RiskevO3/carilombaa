<div class="bg-white" x-data="register" x-cloak>
    <div class="container max-w-full py-[70px] px-[60px]">
        <h1 class="text-red-800 text-[32px] font-semibold">
            Form Pendaftaran Lomba : <span class="text-zinc-900">{{$namaLomba}}</span>
        </h1>
        <div class="container mt-[60px] flex flex-col space-y-[24px]">
            <div class="container">
                <h3 class="text-stone-900 text-2xl font-medium">Nama Tim <span class="text-red-800">*</span></h3>
                <div class="container mt-[24px] p-[32px] border border-slate-200 rounded-lg">
                    <h5 class="text-stone-900 text-sm font-semibold leading-tight">Nama Tim</h5>
                    <input type="text" class="mt-[12px] py-[18px] px-[16px] w-full rounded-md shadow border border-gray-100 text-neutral-600 text-sm font-normal leading-tight" placeholder="Lorem">
                </div>
            </div>
            <div class="container">
                <div class="flex justify-between">
                    <h3 class="text-stone-900 text-2xl font-medium">Peserta Ke-1 <span class="text-red-800">*</span></h3>
                    <button class="w-[32px] h-[32px] bg-red-800 rounded-full flex hover:scale-95 hover:opacity-75 transition ease-in self-center"
                    x-on:click="increment()"
                    >
                    <x-icons.plus-icon class='m-auto w-[20px] h-[20px] text-white'/>
                    </button>
                </div>
                <div class="container mt-[24px] p-[32px] border border-slate-200 rounded-lg">
                    <div class="grid grid-cols-2 gap-x-[32px] gap-y-[24px]">
                        <div class="">
                            <h5 class="text-stone-900 text-sm font-semibold leading-tight">Nama Lengkap</h5>
                            <input type="text" class="mt-[12px] py-[18px] px-[16px] w-full rounded-md shadow border border-gray-100 text-neutral-600 text-sm font-normal leading-tight" placeholder="Lorem">
                        </div>
                        <div class="">
                            <h5 class="text-stone-900 text-sm font-semibold leading-tight">Email</h5>
                            <input type="email" class="mt-[12px] py-[18px] px-[16px] w-full rounded-md shadow border border-gray-100 text-neutral-600 text-sm font-normal leading-tight" placeholder="example@gmail.com">
                        </div>
                        <div class="">
                            <h5 class="text-stone-900 text-sm font-semibold leading-tight">No.Telp</h5>
                            <input type="text" class="mt-[12px] py-[18px] px-[16px] w-full rounded-md shadow border border-gray-100 text-neutral-600 text-sm font-normal leading-tight" placeholder="(081) 285 - 7598">
                        </div>
                        <div class="">
                            <h5 class="text-stone-900 text-sm font-semibold leading-tight">Universitas</h5>
                            <input type="text" class="mt-[12px] py-[18px] px-[16px] w-full rounded-md shadow border border-gray-100 text-neutral-600 text-sm font-normal leading-tight" placeholder="BRIX Agency">
                        </div>
                    </div>
                </div>
            </div>
            <template x-for="i in counter">
                <div class="container" 
                >
                    <div class="flex justify-between">
                        <h3 class="text-stone-900 text-2xl font-medium">Peserta Ke-<span x-text="i+1"></span></h3>
                        <button class="w-[32px] h-[32px] bg-red-800 rounded-full flex hover:scale-95 hover:opacity-75 transition ease-in self-center"
                        x-on:click="decrement()"
                        >
                        <x-icons.minus-icon class='m-auto w-[20px] h-[20px] text-white'/>
                        </button>
                    </div>
                    <div class="container mt-[24px] p-[32px] border border-slate-200 rounded-lg">
                        <div class="grid grid-cols-2 gap-x-[32px] gap-y-[24px]">
                            <div class="">
                                <h5 class="text-stone-900 text-sm font-semibold leading-tight">Nama Lengkap</h5>
                                <input type="text" class="mt-[12px] py-[18px] px-[16px] w-full rounded-md shadow border border-gray-100 text-neutral-600 text-sm font-normal leading-tight" placeholder="Lorem">
                            </div>
                            <div class="">
                                <h5 class="text-stone-900 text-sm font-semibold leading-tight">Email</h5>
                                <input type="email" class="mt-[12px] py-[18px] px-[16px] w-full rounded-md shadow border border-gray-100 text-neutral-600 text-sm font-normal leading-tight" placeholder="example@gmail.com">
                            </div>
                            <div class="">
                                <h5 class="text-stone-900 text-sm font-semibold leading-tight">No.Telp</h5>
                                <input type="text" class="mt-[12px] py-[18px] px-[16px] w-full rounded-md shadow border border-gray-100 text-neutral-600 text-sm font-normal leading-tight" placeholder="(081) 285 - 7598">
                            </div>
                            <div class="">
                                <h5 class="text-stone-900 text-sm font-semibold leading-tight">Universitas</h5>
                                <input type="text" class="mt-[12px] py-[18px] px-[16px] w-full rounded-md shadow border border-gray-100 text-neutral-600 text-sm font-normal leading-tight" placeholder="BRIX Agency">
                            </div>
                        </div>
                    </div>
                </div>
            </template>
            <div class="container">
                <h3 class="text-stone-900 text-2xl font-medium">Bukti KTM<span class="text-red-800">*</span></h3>
                <div class="container mt-[24px] p-[32px] border border-slate-200 rounded-lg">
                    <h5 class="text-stone-900 text-sm font-semibold leading-tight">Bukti KTM Digital Tiap Anggota</h5>
                    <input type="file" id="upload" class="hidden"/>
                    <label for="upload" class="mt-[12px] py-[15px] px-[18px] bg-[#f8f9fa] border border-[#cfd5db] rounded-md inline-flex justify-between space-x-[8px] hover:scale-95 hover:opacity-75 transition ease-in">
                        <p class="text-zinc-600 text-sm font-semibold leading-tight">Tambah Berkas</p>
                        <x-icons.upload-file-icon class="self-center w-[16px] h-[16px] text-gray-700"/>
                    </label>
                </div>
            </div>
            <div class="container">
                <h3 class="text-stone-900 text-2xl font-medium">Bukti Pembayaran<span class="text-red-800">*</span></h3>
                <div class="container mt-[24px] p-[32px] border border-slate-200 rounded-lg">
                    <h5 class="text-stone-900 text-sm font-semibold leading-tight">Bukti Pembayaran</h5>
                    <h5 class="text-stone-900 text-sm font-semibold leading-tight">2020303030 (BCA) a/n Syeril Munaf</h5>
                    <input type="file" id="upload" class="hidden"/>
                    <label for="upload" class="mt-[12px] py-[15px] px-[18px] bg-[#f8f9fa] border border-[#cfd5db] rounded-md inline-flex justify-between space-x-[8px] hover:scale-95 hover:opacity-75 transition ease-in">
                        <p class="text-zinc-600 text-sm font-semibold leading-tight">Tambah Berkas</p>
                        <x-icons.upload-file-icon class="self-center w-[16px] h-[16px] text-gray-700"/>
                    </label>
                </div>
            </div>
            <div class="flex">
                <button class="py-[15px] px-[18px] bg-red-800 border border-red-800 rounded-md shadow text-white text-sm font-semibold leading-tight hover:scale-95 hover:opacity-75 transition ease-in">
                    Kirim Pendaftaran
                </button>
            </div>
        </div>
    </div>
    <x-footer class="border border-t-slate-100 shadow-2xl" />
</div>
@section('scripts')
@script
<script>
    Alpine.data('register',()=>{
        return{
            counter:0,
            increment(){
                this.counter++
            },
            decrement(){
                this.counter--
            }
        }
    })
</script>
@endscript
@endsection