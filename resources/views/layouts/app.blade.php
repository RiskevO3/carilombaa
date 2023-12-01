@extends('layouts.base')

@section('body')
    <x-navbar />
    <div class="bg-[#f8f9fa] overflow-y-auto no-scrollbar">
        @yield('content')
        @isset($slot)
            {{ $slot }}
        @endisset
    </div>
@endsection