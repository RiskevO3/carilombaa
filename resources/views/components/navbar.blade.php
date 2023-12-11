@auth
<div x-data="{ modelOpen: false }" x-cloak>
  <nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-2xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{ route('loginhome') }}" wire:navigate class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('assets/images/logo-carilomba.png') }}" class="h-8" alt="Cari Lomba" />
        </a>
        <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button type="button"
                class="w-9 h-9 overflow-hidden  text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                data-dropdown-placement="bottom">
                <img class="w-full h-full object-cover object-center" src="{{Auth::user()->image_url ? Auth::user()->getImage() : asset('assets/images/default-profile.png') }}" alt="user photo"/>
            </button>
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                id="user-dropdown">
                <div class="px-4 py-3">
                    <span class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
                    <span
                        class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email }}</span>
                </div>
                <ul class="py-2" aria-labelledby="user-menu-button">
                    <li>
                        <a href="{{ route('dashboard') }}"
                            wire:navigate
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                    </li>
                    <li>
                        <button 
                          @click="modelOpen = true"
                          class="block w-full px-4 py-2 text-sm text-start text-red-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                          >
                          Keluar
                        </button>
                    </li>
                </ul>
            </div>
            <button data-collapse-toggle="navbar-user" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-user" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
            <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="{{ route('home') }}"
                        wire:navigate
                        class="block py-2 px-3 {{ request()->is('/') ? 'text-main-red-color' : 'text-gray-900' }} rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-main-red-color md:p-0"
                        >Home</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 {{ request()->is('about') ? 'text-main-red-color' : 'text-gray-900' }} rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-main-red-color md:p-0">Tentang Kami</a>
                </li>
                <li>
                    <a href="{{ route('loginhome') }}"
                        wire:navigate
                        class="block py-2 px-3 {{ request()->is('lomba') ? 'text-main-red-color' : 'text-gray-900' }} rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-main-red-color md:p-0">Lomba</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 {{ request()->is('pricing') ? 'text-main-red-color' : 'text-gray-900' }} rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-main-red-color md:p-0">Leaderboard</a>
                </li>
            </ul>
        </div>
    </div>
  </nav>
<div class="flex justify-center">
    <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog"
        aria-modal="true">
        <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
            <div x-cloak @click="modelOpen = true" x-show="modelOpen"
                x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                class="fixed inset-0 transition-opacity bg-gray-700 bg-opacity-60" aria-hidden="true"></div>

            <div x-cloak x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="inline-block w-full max-w-md p-6 my-10 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl xl:max-w-xl">
                <div class="flex items-center justify-between space-x-4">
                    <h1 class="text-xl font-bold text-gray-800 ">Apakah Kamu Yakin Untuk Keluar?</h1>
                    <div class="flex justify-end">
                      <button for="show" @click="modelOpen = false" type="button"
                          class="mr-2 px-2 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-gray-500 hover:bg-gray-600 rounded-md shadow-md">
                          Cancel
                      </button>
                      <a href="{{ route('logout') }}" type="button"
                          class="mr-2 px-2 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-500 hover:bg-red-600 rounded-md shadow-md">
                          Keluar
                      </a>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@else
    <nav class="navbar-grid-template font-inter">
        <x-logo />
        <div class="navbar-item-grid">
            <a href="" class="navbar-item-card">Home</a>
            <a href="" class="navbar-item-card">Tentang Kami</a>
            <a href="" class="navbar-item-card">Lomba</a>
            <a href="" class="navbar-item-card">Leaderboard</a>
            <div class="navbar-div-item-button">
                <a href="{{ route('register') }}"
                    class="w-3/4 navbar-item-button bg-[#f8f9fa] border-[#e1e4ed] text-[#343a40] hover:bg-main-red-color hover:text-white hover:scale-95 hover:border-red-200 transition ease-in">
                    Daftar
                </a>
            </div>
            <div class="navbar-div-item-button" x-data="{ dropDown: true }">
                <a href="{{ route('login') }}"
                    class="w-full navbar-item-button bg-main-red-color border-red-200 text-white hover:bg-[#f8f9fa] hover:border-[#e1e4ed] hover:text-[#343a40] hover:scale-90 transition ease-in">
                    Login
                </a>
            </div>
        </div>
    </nav>
@endauth
