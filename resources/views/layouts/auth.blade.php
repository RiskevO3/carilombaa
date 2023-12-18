@extends('layouts.base')

@section('body')
    <div class="container max-w-full h-screen flex-wrap font-inter">
        @yield('content')
        @isset($slot)
            {{ $slot }}
        @endisset
    </div>
@endsection
