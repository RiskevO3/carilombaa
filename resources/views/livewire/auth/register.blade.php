@section('title', 'Create a new account')
<div>
    {{-- overlay loading --}}
    <x-loading wire:loading.class='flex' wire:loading.class.remove='hidden' wire:target='register'>
    </x-loading>
    {{-- end overlay loading --}}
    <x-login-register image="default" lazy>
        <div class="flex">
            @if($as != '')
            <div class="m-auto w-full max-w-xl">
                <h3 class="text-red-800 text-3xl font-semibold">Buat Akun</h3>
                <p class="text-gray-500 text-xl font-normal">Masukkan data diri untuk membuat akun</p>
                <div class="max-w-lg  mt-8">
                    <form action="" class="" wire:submit.prevent='register'>
                        <x-input-auth type="text" placeholder="Nama" wire:model='name' class="mb-4" :error="$errors->first('name')"/>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
                        <input wire:model='image' class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                        @error('image')
                        <p class="text-sm text-red-600 w-full">{{ $message }}</p>
                        @enderror
                        <div class="w-full grid grid-cols-2 justify-cente gap-2 mb-4">
                            <x-input-auth type="email" placeholder="Email" wire:model='email' :error="$errors->first('email')"/>
                            <x-input-auth type="number" placeholder="No.Telp" wire:model='phone' :error="$errors->first('phone')"/>
                        </div>
                        @if($as == 'penyelenggara')
                        <x-input-auth type="text" placeholder="Nama Instansi Perlombaan" wire:model='instansi' class="mb-4" :error="$errors->first('instansi')"/>
                        @else
                        <div class="w-full grid grid-cols-2 justify-cente gap-2 mb-4">
                            <div>
                            <select wire:model='univ' id="univ" name="univ" class="w-full border border-gray-500 placeholder-gray-500 text-gray-500 text-sm p-2 rounded-md shadow">
                                <option value="0">Nama Universitas</option>
                                <option value="1">Universitas</option>
                            </select>
                            @error('univ')
                            <p class="text-sm text-red-600 w-full">{{ $message }}</p>
                            @enderror
                            </div>
                            <x-input-auth type="number" placeholder="NIM" wire:model='nim' :error="$errors->first('nim')"/>
                        </div>
                        @endif
                        <div class="flex w-full relative mb-4">
                            <x-input-auth type="password" placeholder="Kata Sandi" wire:model='password' :error="$errors->first('password')"/>
                            <i class="fa-solid fa-eye absolute -right-0 top-2.5 px-2"></i>
                        </div>
                        <div class="flex w-full relative mb-4">
                            <x-input-auth type="password" placeholder="Konfirmasi Kata Sandi" wire:model='passwordConfirmation' :error="$errors->first('passwordConfirmation')"/>
                            <i class="fa-solid fa-eye absolute -right-0 top-2.5 px-2"></i>
                        </div>
                        <button type="submit" class="w-full text-center py-3 px-2 bg-[#A81818] rounded-md text-white hover:bg-red-900 hover:scale-95 hover:opacity-95 transition ease-in">
                            Buat Akun
                        </button>
                    </form>     
                </div>
            </div>
            @else
            <div class="m-auto p-20 w-full">
                <h3 class="text-red-800 text-3xl font-semibold">Buat Akun</h3>
                <p class="text-gray-500 text-xl font-normal">Ingin membuat akun sebagai role apa?</p>
                <div class="mx-auto mt-7 mb-5 w-full grid grid-cols-2 justify-center gap-5">
                    <a href="{{ route('register',['as'=>'mahasiswa']) }}" wire:navigate class="w-full py-3 text-center text-sm text-neutral-700 font-semibold border border-red-800 rounded-md shadow-md  hover:bg-red-800 hover:scale-95 hover:opacity-95 group transition ease-in">
                        <i class="fa-solid fa-graduation-cap text-red-800 group-hover:text-white pr-1"></i><span class="text-black group-hover:text-white">Mahasiswa</span>
                    </a>
                    <a href="{{ route('register',['as'=>'penyelenggara']) }}" wire:navigate class="w-full py-3 text-center text-sm text-neutral-700 font-semibold border border-red-800 rounded-md shadow-md  hover:bg-red-800 hover:scale-95 hover:opacity-95 group transition ease-in">
                        <i class="fa-solid fa-users text-red-800 group-hover:text-white pr-1"></i><span class="text-black group-hover:text-white">Penyelenggara Lomba</span>
                    </a>
                </div>
                <p class="text-gray-500 my-8 text-md text-center">Sudah Memiliki Akun? <a href="{{ route('login') }}" wire:navigate class="inline text-red-800 font-medium hover:text-black">Masuk</a></p>
            </div>
            @endif
        </div>
    </x-login-register>
</div>
