@section('title', 'Sign in to your account')
<div>
    {{-- overlay loading --}}
    <x-loading wire:loading.class='flex' wire:loading.class.remove='hidden' wire:target='authenticate'>
    </x-loading>
    {{-- end overlay loading --}}
    <x-login-register :image="$as">
        <div class="flex">
            @if ($as == 'default')
                <div class="m-auto p-20 w-full">
                    <h3 class="text-red-800 text-3xl font-semibold">Login Akun</h3>
                    <p class="text-gray-500 text-xl font-normal">Silahkan pilih role anda</p>
                    <div class="mx-auto mt-7 mb-5 w-full grid grid-cols-2 justify-center gap-5">
                        <a href="{{ route('login', ['as' => 'mahasiswa']) }}" wire:navigate
                            class="w-full py-3 text-center text-sm text-neutral-700 font-semibold border border-red-800 rounded-md shadow-md  hover:bg-red-800 hover:scale-95 hover:opacity-95 group transition ease-in">
                            <i class="fa-solid fa-graduation-cap text-red-800 group-hover:text-white pr-1"></i><span
                                class="text-black group-hover:text-white">Mahasiswa</span>
                        </a>
                        <a href="{{ route('login', ['as' => 'penyelenggara']) }}" wire:navigate
                            class="w-full py-3 text-center text-sm text-neutral-700 font-semibold border border-red-800 rounded-md shadow-md  hover:bg-red-800 hover:scale-95 hover:opacity-95 group transition ease-in">
                            <i class="fa-solid fa-users text-red-800 group-hover:text-white pr-1"></i><span
                                class="text-black group-hover:text-white">Penyelenggara Lomba</span>
                        </a>
                    </div>
                    <p class="text-gray-500 my-8 text-md text-center">Belum Memiliki Akun? <a
                            href="{{ route('register') }}" wire:navigate
                            class="inline text-red-800 font-medium hover:text-black">Register</a></p>
                </div>
            @else
                <div class="m-auto w-full max-w-xl">
                    <h3 class="text-red-800 text-5xl font-semibold">Selamat Datang,</h3>
                    <p class="text-gray-600 text-xl font-normal">{{ $welcome_message }}</p>
                    <div class="max-w-lg  mt-8">
                        <form wire:submit.prevent="authenticate">
                            <input wire:model.lazy="email" id="email" type="email"
                                class="w-full border border-gray-500  text-black text-sm p-4 rounded-md shadow @error('email') border-red-900 text-red-900 focus:border-red-900 focus:ring-red @enderror"
                                placeholder="Email" autofocus>
                            @error('email')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            <div class="mt-4 flex w-full relative" x-data="{ showPassword: false }">
                                <input wire:model.lazy="password" id="password"
                                    :type="showPassword ? 'text' : 'password'"
                                    class="w-full border border-gray-500  text-black text-sm p-4 rounded-md shadow @error('password') border-red-900 text-red-900 focus:border-red-900 focus:ring-red @enderror"
                                    placeholder="Kata Sandi">
                                <i class="fa-solid absolute -right-0 top-5 px-2 hover:scale-105 transition ease-in"
                                    :class="showPassword ? 'fa-eye-slash' : 'fa-eye'"
                                    x-on:click="showPassword = !showPassword">

                                </i>
                            </div>
                            @error('password')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            <div class="max-w-lg grid grid-cols-2 justify-between mt-[8px] text-sm">
                                <div class="flex">
                                    <input wire:model.lazy="remember" type="checkbox"
                                        class="text-red-500 mr-1 w-5 h-5 border border-gray-500 rounded-md shadow-sm"
                                        id="remember" />
                                    <label for="remember" class="w-full text-gray-600">Ingat Saya</label>
                                </div>
                                <a href="{{ route('password.request') }}"
                                    class="w-full text-right text-gray-600 hover:text-black">Lupa Kata Sandi?</a>
                            </div>
                            <button type="submit"
                                class="mt-[46px] w-full text-center py-3 px-2 bg-[#A81818] rounded-md text-white hover:bg-red-900 hover:scale-95 hover:opacity-95 transition ease-in">
                                Buat Akun
                            </button>
                        </form>
                    </div>
                </div>
            @endif
        </div>
    </x-login-register>
</div>
