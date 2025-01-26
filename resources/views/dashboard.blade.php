<x-layout>
    <main id="main" class="main p-10 w-100 h-[calc(100vh_-_var(--headerHeight))] mx-auto">
        <h1 class="text-[6rem] leading-none font-extralight mb-[calc(var(--headerHeight)_/_2)]">Dashboard</h1>
       
        <div class="min-h-[300px] grid grid-cols-1 grid-row-7 md:grid-cols-3 md:grid-rows-3 gap-y-5 gap-x-4 h-[calc(100vh_-_var(--headerHeight)_-_14.7rem)]">

            <a href="/messages" class="border rounded-md md:col-start-1 md:row-start-1 md:col-end-2 md:row-end-2 flex items-end text-base p-[1rem]">
                <div>
                    Saved Posts 
                </div>
            </a>
            <a href="/saved-posts" class="border rounded-md md:col-start-2 md:row-start-1 md:col-end-4 md:row-end-2 flex items-end text-base p-[1rem]">
                <div>
                    Messages
                </div>
            </a>

            <a href="/borrow" class="border rounded-md md:col-start-1 md:row-start-2 md:col-end-2 md:row-end-3 flex items-end text-base p-[1rem]">
                <div>
                    Your Borrow Posts
                </div>
            </a>
            <a href="/offer" class="border rounded-md md:col-start-2 md:row-start-2 md:col-end-3 md:row-end-3 flex items-end text-base p-[1rem]">
                <div>
                    Your Offer Posts
                </div>
            </a>
            <a href="/ask" class="border rounded-md md:col-start-3 md:row-start-2 md:col-end-4 md:row-end-3 flex items-end text-base p-[1rem]">
                <div>
                    Your Ask Posts
                </div>
            </a>

            <a href="/settings" class="border rounded-md md:col-start-1 md:row-start-3 md:col-end-3 md:row-end-4 flex items-end text-base p-[1rem]">
                <div>
                    Settings
                </div>
            </a>
            <form method="POST" action="/logout" class="relative md:col-start-3 md:row-start-3 md:col-end-4 md:row-end-4">
                @csrf
                <label class="absolute flex items-end left-[1rem] bottom-[1rem] text-base" for="logout">Logout</label>
                <x-form_input type="submit" value="" name="logout" id="logout" class="leading-10 text-white cursor-pointer hover:underline h-full w-full bg-red-500 border"/>
            </form>

        </div>
    </main> 
</x-layout>
