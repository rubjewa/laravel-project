<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <x-partials.head />
    @livewireStyles
</head>

<body>
    <x-partials.nav />

    <br />
    <main class="container align-middle">
      @isset($slot)
        {{ $slot }}
      @endisset
    </main>

    <x-partials.footer />
    @livewireScripts
</body>

</html>
