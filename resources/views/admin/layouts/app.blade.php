<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('styles/admin.css') }}">

    @stack('styles')
</head>
<body>

<div class="layout">

    @include('admin.partials.sidebar')

    <div class="content">

        @include('admin.partials.header')

        @include('admin.partials.flash')

        <main>
            @yield('content')
        </main>

    </div>

</div>

@stack('scripts')

</body>
</html>