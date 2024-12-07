<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-head_html></x-head_html>
    <x-header></x-header>
    <body class="antialiased text-white bg-[var(--black)] overflow-x-hidden max-w-[1420px] mx-auto relative">
    {{ $slot }}
    </body>
</html>