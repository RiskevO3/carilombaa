@extends('layouts.base')

@section('body')
    <div class="bg-[#f8f9fa] overflow-y-auto no-scrollbar">
        @yield('content')
        @isset($slot)
            {{ $slot }}
        @endisset
    </div>
@endsection