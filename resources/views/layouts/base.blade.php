<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        @hasSection('title')

            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

		<link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css" integrity="sha512-DIW4FkYTOxjCqRt7oS9BFO+nVOwDL4bzukDyDtMO7crjUZhwpyrWBFroq+IqRe6VnJkTpRAS6nhDvf0w+wHmxg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://fonts.googleapis.com/css2?family=Playpen+Sans:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
        @livewireScriptConfig
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>
        @yield('body')
        @if($message=Session::get('success'))
            <script>
            iziToast.success({
                title: 'Success',
                message: '{{ $message }}',
                position: 'topRight',
                overlay: true,
                timeout: 5000,
                close: true,
                class: 'success',
            });
            </script>
        @endif
        @if($message=Session::get('error'))
        <script>
        iziToast.error({
            title: 'error',
            message: '{{ $message }}',
            position: 'topRight',
            overlay: true,
            timeout: 5000,
            close: true,
            class: 'success',
        });
        </script>
    @endif
        <script>
            window.addEventListener('toast:success',event=>{
                iziToast.success({
                    title: 'Success',
                    message: event.detail.message,
                    position: 'topRight',
                    overlay: event.detail.hasOwnProperty('overlay') ? event.detail.overlay : true,
                    timeout: 5000,
                    close: true,
                    class: 'success',
                });
                if(event.detail.hasOwnProperty('redirectTo')){
                    setTimeout(() => {
                        window.location.replace(event.detail.redirectTo);
                    }, 3000);
                };
            });
            window.addEventListener('toast:error',event=>{
                iziToast.error({
                    title: 'Error',
                    message: event.detail.message,
                    position: 'topRight',
                    overlay: event.detail.hasOwnProperty('overlay') ? event.detail.overlay : true,
                    timeout: 5000,
                    close: true,
                    class: 'error',
                });
            });
        </script>
    </body>
</html>
