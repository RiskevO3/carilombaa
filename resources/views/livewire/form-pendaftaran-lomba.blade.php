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
                        <svg class="fill-current m-auto w-[20px] h-[20px] text-white" xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512">
                            <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                        </svg>
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
                            <svg class="fill-current m-auto w-[20px] h-[20px] text-white" xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512">
                                <path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z"/>
                            </svg>
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
                        <svg class="fill-current self-center w-[16px] h-[16px] text-gray-700" xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                            <path d="M288 109.3V352c0 17.7-14.3 32-32 32s-32-14.3-32-32V109.3l-73.4 73.4c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l128-128c12.5-12.5 32.8-12.5 45.3 0l128 128c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L288 109.3zM64 352H192c0 35.3 28.7 64 64 64s64-28.7 64-64H448c35.3 0 64 28.7 64 64v32c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V416c0-35.3 28.7-64 64-64zM432 456a24 24 0 1 0 0-48 24 24 0 1 0 0 48z"/>
                        </svg>
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
                        <svg class="fill-current self-center w-[16px] h-[16px] text-gray-700" xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                            <path d="M288 109.3V352c0 17.7-14.3 32-32 32s-32-14.3-32-32V109.3l-73.4 73.4c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l128-128c12.5-12.5 32.8-12.5 45.3 0l128 128c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L288 109.3zM64 352H192c0 35.3 28.7 64 64 64s64-28.7 64-64H448c35.3 0 64 28.7 64 64v32c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V416c0-35.3 28.7-64 64-64zM432 456a24 24 0 1 0 0-48 24 24 0 1 0 0 48z"/>
                        </svg>
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