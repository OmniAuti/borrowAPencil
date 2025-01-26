<x-layout>
    <main id="main" class="main p-10 relative w-100 min-h-fit h-[calc(100vh_-_var(--headerHeight))] flex items-center justify-start flex-col">
        <h1 class="text-[6rem] leading-none font-extralight mb-[calc(var(--headerHeight)_/_2)]">Login</h1>
        <div class="border w-full max-w-[340px] p-[var(--padding)] text-[1.8rem] rounded-md">
            <div>
                <form method="POST" action="/login">
                    @csrf
                    <div class="mb-[var(--margin-form)] flex items-start justify-between flex-col">
                        <x-form_label for="email" class="mb-[var(--margin-label)]">Email</x-form_label>
                        <x-form_input required type="email" name="email" id="email" :value="old('email')"></x-form_input>
                        <x-form_error name="email"></x-form_error>
                    </div>
                    <div class="mb-[var(--margin-form)] flex items-start justify-between flex-col">
                        <x-form_label for="password" class="mb-[var(--margin-label)]">Password</x-form_label>
                        <x-form_input required type="password" name="password" id="password"></x-form_input>
                        <x-form_error name="password"></x-form_error>
                    </div>
                    <div class="mb-[var(--margin-form)] text-center">
                        <x-form_input type="submit" value="Log In" class="text-white cursor-pointer hover:underline max-w-fit px-10 border"></x-form_input>
                    </div>
                    <x-form_error name="form"></x-form_error>
                </form>
            </div>
            <div class="text-center text-[1.2rem]">
                <p class="mb-[.6rem]">Don't have an account?</p>
                <a href="/register" class="hover:underline">Register here</span></a> 
            </div>
        </div>
    </main>
</x-layout>