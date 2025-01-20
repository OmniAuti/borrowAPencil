<x-layout>
    <main id="main" class="main p-10 min-h-fit relative w-100 h-[calc(100vh_-_var(--headerHeight)_-_11.7rem)] mx-auto">
        <h1 class="text-[6rem] leading-none font-extralight mb-[calc(var(--headerHeight)_/_2)]">Dashboard</h1>
        <div class="grid grid-cols-1 grid-row-7 md:grid-cols-3 md:grid-rows-3 gap-y-5 gap-x-4 h-full">

            <a href="/messages" class="border rounded-md md:col-start-1 md:row-start-1 md:col-end-3 md:row-end-2">
                <div>
                    Messages
                </div>
            </a>
            <a href="/saved-posts" class="border rounded-md md:col-start-3 md:row-start-1 md:col-end-4 md:row-end-2">
                <div>
                    Saved Posts 
                </div>
            </a>

            <a href="/borrow" class="border rounded-md md:col-start-1 md:row-start-2 md:col-end-2 md:row-end-3">
                <div>
                    Borrow
                </div>
            </a>
            <a href="/offer" class="border rounded-md md:col-start-2 md:row-start-2 md:col-end-3 md:row-end-3">
                <div>
                    Offer
                </div>
            </a>
            <a href="/ask" class="border rounded-md md:col-start-3 md:row-start-2 md:col-end-4 md:row-end-3">
                <div>
                    Ask
                </div>
            </a>

            <a href="/settings" class="border rounded-md md:col-start-1 md:row-start-3 md:col-end-3 md:row-end-4">
                <div>
                    Settings
                </div>
            </a>
            <form method="POST" action="/logout" class="md:col-start-3 md:row-start-3 md:col-end-4 md:row-end-4">
                @csrf
                <x-form_input type="submit" value="Logout" name="logout" id="logout" class="text-white cursor-pointer hover:underline h-full border"/>
            </form>
        </div>
   
    </main> 
</x-layout>
