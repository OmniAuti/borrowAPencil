<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="overflow-x-hidden">
    <x-head_html></x-head_html>

    <body class="antialiased text-white bg-[var(--black)] bg-[url('/public/imgs/background-texture.png')] mx-auto max-w-[1420px] pt-[--headerHeight]">
    <x-header></x-header>
    {{ $slot }}
    <x-footer></x-footer>
    </body>



    <script>

        const header = document.getElementById('header');
        const footer = document.getElementById('footer');

        window.addEventListener('scroll', () => {
            let showingCalc = window.innerHeight - footer.getBoundingClientRect().bottom;
            if (showingCalc >= 0) {
                header.classList.add('-translate-y-[6.4rem]', 'opacity-0');
            } else {
                header.classList.remove('-translate-y-[6.4rem]', 'opacity-0');
            }
        })
</script>
</html>