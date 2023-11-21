@section('title', 'Sign in to your account')
<div x-cloak>
    {{-- overlay loading --}}
    <x-loading wire:loading.class='flex' wire:loading.class.remove='hidden' wire:target='authenticate'>
    </x-loading>
    {{-- end overlay loading --}}
    <div class="grid grid-cols-2 h-screen">
        <div class="overflow-hidden rounded-r-[100px] bg-red-700 h-screen">
            <img src="{{ asset('assets/images/lomba-'.$as.'-bg-login.jpeg') }}" alt=""
                class="object-cover object-center">
        </div>
        <div class="flex">
            <div class="m-auto w-full max-w-xl">
                <h3 class="text-red-800 text-5xl font-semibold">Selamat Datang,</h3>
                <p class="text-gray-600 text-xl font-normal">{{ $welcome_message }}</p>
                <div class="max-w-lg  mt-8">
                    <form wire:submit.prevent="authenticate">
                        <input wire:model.lazy="email" id="email" type="email"
                            class="w-full border border-gray-500 placeholder-gray-500 text-black text-sm p-4 rounded-md shadow @error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror"
                            placeholder="Email" required autofocus>
                        @error('email')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <div class="mt-4 flex w-full relative" x-data="{ showPassword: false }">
                            <input wire:model.lazy="password" id="password" :type="showPassword ? 'text' : 'password'"
                                class="w-full border border-gray-500 placeholder-gray-500 text-black text-sm p-4 rounded-md shadow @error('password') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror"
                                placeholder="Kata Sandi">
                            <i class="fa-solid absolute -right-0 top-5 px-2 hover:scale-105 transition ease-in"
                                :class="showPassword ? 'fa-eye-slash' : 'fa-eye'"
                                x-on:click="showPassword = !showPassword">

                            </i>
                        </div>
                        @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <div class="max-w-lg grid grid-cols-2 justify-between mt-1 mb-4 text-sm">
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
                            class="w-full text-center py-3 px-2 bg-[#A81818] rounded-md text-white hover:bg-red-900 hover:scale-95 hover:opacity-95 transition ease-in">
                            Buat Akun
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
