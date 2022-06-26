<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <x-partials.head />
</head>

<body>
    <x-partials.nav />


    <br />

    <main class="container align-middle">
        <x-partials.pageheader />
      @isset($slot)
        {{ $slot }}
      @endisset
    </main>

    <x-partials.footer />
</body>

</html>
