<header id="header" class="h-[6.4rem] w-screen backdrop-blur-lg z-[999] px-16 text-[1.8rem] fixed top-0 left-0 transition-[header] duration-200">
    <div class="w-full h-full flex items-center justify-between max-w-[1420px] mx-auto">
        <div class="w-fit h-full">
            <a class="w-fit h-full group cursor-pointer flex items-center p-4" href="/">
                <img class="w-16 transition-opacity mr-10" alt="Borrow A Pencil Logo" src="{{url('/imgs/logo.svg')}}">
                <h3 class="whitespace-nowrap before:absolute before:w-0 before:bg-white before:transition-[width] before:opacity-0 group-hover:before:opacity-100 after:opacity-100 group-hover:after:opacity-0 before:duration-500 after:duration-500 before:origin-left before:left-0 after:origin-right after:h-[1px] after:w-0 group-hover:after:w-full after:bottom-2 after:right-0  after:transition-[width] after:absolute after:bg-white group-hover:before:w-full relative before:h-[1px] before:bottom-2">Borrow A Pencil</h3>
            </a>
        </div>

        <nav class="flex items-center pr-4">
            <ul class="flex flex-row justify-end h-full">
                <li class="ml-20">
                    <a aria-current="{{ request()->is('about') ? 'page' : 'false'}}" class="grow flex h-full items-center justify-end group cursor-pointer p-4" href="/about">
                        <p class="{{ !request()->is('about') ? 'font-light before:absolute before:w-0 before:bg-white before:transition-[width] before:opacity-0 group-hover:before:opacity-100 after:opacity-100 group-hover:after:opacity-0 before:duration-500 after:duration-500 before:origin-left before:left-0 after:origin-right after:h-[1px] after:w-0 group-hover:after:w-full after:bottom-2 after:right-0  after:transition-[width] after:absolute after:bg-white group-hover:before:w-full relative before:h-[1px] before:bottom-2' : 'font-light before:absolute before:bg-white before:transition-[width] before:opacity-100  before:duration-1000 after:duration-1000 before:origin-left before:left-0 before:w-full relative before:h-[1px] before:bottom-2'}}">
                            About
                        </p>
                    </a>
                </li>
                <li class="ml-20">
                    <a aria-current="{{ request()->is('borrow') ? 'page' : 'false'}}" class="grow flex h-full items-center justify-end group cursor-pointer p-4" href="/borrow">
                        <p class="{{ !request()->is('borrow') ? 'font-light before:absolute before:w-0 before:bg-white before:transition-[width] before:opacity-0 group-hover:before:opacity-100 after:opacity-100 group-hover:after:opacity-0 before:duration-500 after:duration-500 before:origin-left before:left-0 after:origin-right after:h-[1px] after:w-0 group-hover:after:w-full after:bottom-2 after:right-0  after:transition-[width] after:absolute after:bg-white group-hover:before:w-full relative before:h-[1px] before:bottom-2' : 'font-light before:absolute before:bg-white before:transition-[width] before:opacity-100  before:duration-1000 after:duration-1000 before:origin-left before:left-0 before:w-full relative before:h-[1px] before:bottom-2'}}">
                            Borrow
                        </p>
                    </a>
                </li>
                <li class="ml-20">
                    <a aria-current="{{ request()->is('offer') ? 'page' : 'false'}}" class="grow flex h-full items-center justify-end group cursor-pointer p-4" href="/offer">
                        <p class="{{ !request()->is('offer') ? 'font-light before:absolute before:w-0 before:bg-white before:transition-[width] before:opacity-0 group-hover:before:opacity-100 after:opacity-100 group-hover:after:opacity-0 before:duration-500 after:duration-500 before:origin-left before:left-0 after:origin-right after:h-[1px] after:w-0 group-hover:after:w-full after:bottom-2 after:right-0  after:transition-[width] after:absolute after:bg-white group-hover:before:w-full relative before:h-[1px] before:bottom-2' : 'font-light before:absolute before:bg-white before:transition-[width] before:opacity-100  before:duration-1000 after:duration-1000 before:origin-left before:left-0 before:w-full relative before:h-[1px] before:bottom-2'}}">
                            Offer
                        </p>
                    </a>
                </li>
                <li class="ml-20">
                    <a aria-current="{{ request()->is('ask') ? 'page' : 'false'}}" class="grow flex h-full items-center justify-end group cursor-pointer p-4" href="/ask">
                        <p class="{{ !request()->is('ask') ? 'font-light before:absolute before:w-0 before:bg-white before:transition-[width] before:opacity-0 group-hover:before:opacity-100 after:opacity-100 group-hover:after:opacity-0 before:duration-500 after:duration-500 before:origin-left before:left-0 after:origin-right after:h-[1px] after:w-0 group-hover:after:w-full after:bottom-2 after:right-0  after:transition-[width] after:absolute after:bg-white group-hover:before:w-full relative before:h-[1px] before:bottom-2' : 'font-light before:absolute before:bg-white before:transition-[width] before:opacity-100  before:duration-1000 after:duration-1000 before:origin-left before:left-0 before:w-full relative before:h-[1px] before:bottom-2'}}">
                            Ask
                        </p>
                    </a>
                </li>
                @auth
                <li class="ml-20">
                    <a class="grow flex items-center justify-end cursor-pointer group p-4" href="/dashboard">
                        <img class="min-w-[2rem] w-[2rem]" src="{{url('imgs/user.svg')}}" alt="Account Icon">
                    </a>
                </li>
                @endauth
                @guest
                <li class="ml-20">
                    <a class="grow flex items-center justify-end cursor-pointer group p-4" href="/login">
                        <p class="{{ !request()->is('login') ? 'font-light before:absolute before:w-0 before:bg-white before:transition-[width] before:opacity-0 group-hover:before:opacity-100 after:opacity-100 group-hover:after:opacity-0 before:duration-500 after:duration-500 before:origin-left before:left-0 after:origin-right after:h-[1px] after:w-0 group-hover:after:w-full after:bottom-2 after:right-0  after:transition-[width] after:absolute after:bg-white group-hover:before:w-full relative before:h-[1px] before:bottom-2' : 'font-light before:absolute before:bg-white before:transition-[width] before:opacity-100  before:duration-1000 after:duration-1000 before:origin-left before:left-0 before:w-full relative before:h-[1px] before:bottom-2'}}">
                            Login
                        </p>
                    </a>
                </li>
                @endguest
            </ul>
        </nav>
    </div>
</header>