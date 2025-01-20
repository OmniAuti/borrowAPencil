<footer id="footer" class="w-screen max-h-[300px] flex items-center justify-center relative">
    <div class="w-full h-full flex items-end justify-between pb-0 max-w-[1420px] mr-auto px-8">
        <nav class="w-[180px] flex items-center text-xsm py-8 px-1">
            <ul class="grid grid-cols-3 grid-rows-3 font-thin h-[180px]">
                <li class="col-start-2 col-end-3 row-start-3 row-end-4 justify-self-start self-end ">
                    <a class="grow flex h-full items-center justify-end group cursor-pointer" href="/about">
                        <p class="leading-none font-light before:absolute before:w-0 before:bg-white before:transition-[width] before:opacity-0 group-hover:before:opacity-100 after:opacity-100 group-hover:after:opacity-0 before:duration-500 after:duration-500 before:origin-left before:left-0 after:origin-right after:h-[1px] after:w-0 group-hover:after:w-full after:bottom-0 after:right-0  after:transition-[width] after:absolute after:bg-white group-hover:before:w-full relative before:h-[1px] before:bottom-0">
                            About
                        </p>
                    </a>
                </li>
                <li class="col-start-1 col-end-2 row-start-1 row-end-2 justify-self-start self-end">
                    <a class="grow flex h-full items-center justify-end group cursor-pointer" href="/borrow">
                        <p class="leading-none font-light before:absolute before:w-0 before:bg-white before:transition-[width] before:opacity-0 group-hover:before:opacity-100 after:opacity-100 group-hover:after:opacity-0 before:duration-500 after:duration-500 before:origin-left before:left-0 after:origin-right after:h-[1px] after:w-0 group-hover:after:w-full after:bottom-0 after:right-0  after:transition-[width] after:absolute after:bg-white group-hover:before:w-full relative before:h-[1px] before:bottom-0">
                            Borrow
                        </p>
                    </a>
                </li>
                <li class="col-start-1 col-end-2 row-start-2 row-end-3 justify-self-start self-end">
                    <a class="grow flex h-full items-center justify-end group cursor-pointer" href="/offer">
                        <p class="leading-none font-light before:absolute before:w-0 before:bg-white before:transition-[width] before:opacity-0 group-hover:before:opacity-100 after:opacity-100 group-hover:after:opacity-0 before:duration-500 after:duration-500 before:origin-left before:left-0 after:origin-right after:h-[1px] after:w-0 group-hover:after:w-full after:bottom-0 after:right-0  after:transition-[width] after:absolute after:bg-white group-hover:before:w-full relative before:h-[1px] before:bottom-0">
                            Offer
                        </p>
                    </a>
                </li>
                <li class="col-start-1 col-end-2 row-start-3 row-end-4 justify-self-start self-end">
                    <a class="grow flex h-full items-center justify-end group cursor-pointer" href="/ask">
                        <p class="leading-none font-light before:absolute before:w-0 before:bg-white before:transition-[width] before:opacity-0 group-hover:before:opacity-100 after:opacity-100 group-hover:after:opacity-0 before:duration-500 after:duration-500 before:origin-left before:left-0 after:origin-right after:h-[1px] after:w-0 group-hover:after:w-full after:bottom-0 after:right-0  after:transition-[width] after:absolute after:bg-white group-hover:before:w-full relative before:h-[1px] before:bottom-0">
                            Ask
                        </p>
                    </a>
                </li>
                @auth
                <li class="col-start-3 col-end-4 row-start-3 row-end-4 justify-self-start self-end px-10">
                    <a class="grow flex h-full items-center justify-end group cursor-pointer" href="/dashboard">
                        <p class="leading-none font-light before:absolute before:w-0 before:bg-white before:transition-[width] before:opacity-0 group-hover:before:opacity-100 after:opacity-100 group-hover:after:opacity-0 before:duration-500 after:duration-500 before:origin-left before:left-0 after:origin-right after:h-[1px] after:w-0 group-hover:after:w-full after:bottom-0 after:right-0  after:transition-[width] after:absolute after:bg-white group-hover:before:w-full relative before:h-[1px] before:bottom-0 ">
                            Account
                        </p>
                    </a>
                </li>
                @endauth
                @guest
                <li class="col-start-3 col-end-4 row-start-3 row-end-4 justify-self-start self-end px-10">
                    <a class="grow flex h-full items-center justify-end group cursor-pointer" href="/login">
                        <p class="leading-none font-light before:absolute before:w-0 before:bg-white before:transition-[width] before:opacity-0 group-hover:before:opacity-100 after:opacity-100 group-hover:after:opacity-0 before:duration-500 after:duration-500 before:origin-left before:left-0 after:origin-right after:h-[1px] after:w-0 group-hover:after:w-full after:bottom-0 after:right-0  after:transition-[width] after:absolute after:bg-white group-hover:before:w-full relative before:h-[1px] before:bottom-0 ">
                            Login
                        </p>
                    </a>
                </li>
                @endguest
            </ul>
        </nav>

        <div class="w-fit h-fit pb-8 mt-52 ml-10">
            <a class="w-fit h-fit group cursor-pointer flex items-end justify-end" href="/">
                <h3 id="footer--effect" style="-webkit-text-stroke: 3px white;" class="whitespace-nowrap font-light text-transparent leading-none -mb-6">
                borrow a pencil
                </h3>
            </a>
        </div>
    </div>
</footer>