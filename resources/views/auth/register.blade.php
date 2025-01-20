<x-layout>
    <main id="main" class="main p-10 min-h-fit relative w-100 h-[calc(100vh_-_var(--headerHeight))] flex items-center justify-center flex-col">
        <h1 class="text-[6rem] leading-none font-extralight mb-[calc(var(--headerHeight)_/_2)]">Registration</h1>
        <div class="border w-full max-w-[340px] sm:max-w-[540px] p-[var(--padding)] text-[1.8rem] rounded-md">
            <form method="POST" action="/register">
                @csrf
                <div class="sm:flex items-center justify-between">
                    <div class="sm:w-1/2 sm:pr-[var(--padding)]">
                        <div class="mb-[var(--margin-form)] flex items-start justify-between flex-col">
                            <x-form_label class="mb-[var(--margin-label)]" for="name">Name</x-form_label>
                            <x-form_input required type="text" name="name" id="name" :value="old('name')" class="text-black"></x-form_input>
                            <x-form_error name="name"></x-form_error>
                        </div>
                        <div class="mb-[var(--margin-form)] flex items-start justify-between flex-col">
                            <x-form_label class="mb-[var(--margin-label)]" for="email">Email</x-form_label>
                            <x-form_input required type="email" name="email" id="email" :value="old('email')" class="text-black"></x-form_input>
                            <x-form_error name="email"></x-form_error>
                        </div>
                        <div class="mb-[var(--margin-form)] flex items-start justify-between flex-col">
                            <x-form_label class="mb-[var(--margin-label)]" for="email_confirmation">Confirm Email</x-form_label>
                            <x-form_input required type="email" name="email_confirmation" id="email_confirmation" :value="old('email_confirmation')" class="text-black"></x-form_input>
                            <x-form_error name="email_confirmation"></x-form_error>
                        </div>
                    </div>    
                    <div class="sm:w-1/2 sm:pl-[var(--padding)]">
                        <div class="mb-[var(--margin-form)] flex items-start justify-between flex-col">
                            <x-form_label class="mb-[var(--margin-label)]" for="password">Password</x-form_label>
                            <x-form_input required type="password" name="password" id="password" class="text-black"></x-form_input>
                            <x-form_error name="password"></x-form_error>
                        </div>
                        
                        <div class="mb-[var(--margin-form)] flex items-start justify-between flex-col">
                            <x-form_label class="mb-[var(--margin-label)]" for="password_confirmation">Confirm Password</x-form_label>
                            <x-form_input required type="password" name="password_confirmation" id="password_confirmation" class="text-black"></x-form_input>
                            <x-form_error name="password_confirmation"></x-form_error>
                        </div>
                        <div class="mb-[var(--margin-form)] flex items-start justify-between flex-col">
                            <x-form_label class="mb-[var(--margin-label)]" for="zipcode">5 Digit Zip Code</x-form_label>
                            <x-form_input required type="text" pattern="[0-9]{5}" title="Five digit zip code" name="zipcode" id="zipcode" :value="old('zipcode')" class="text-black"></x-form_input>
                            <x-form_error name="zipcode"></x-form_error>
                        </div>
                    </div>
                </div>
                <div>
                <div class="sm:mx-auto sm:text-center mb-[var(--margin-form)] flex items-start justify-between flex-col sm:max-w-[245px]">
                    <x-form_label class="mb-[var(--margin-label)]" for="role">Are you a Teacher or Student?</x-form_label>
                    <select required name="role" id="role" :value="old('role')" class="text-black p-2 rounded-md w-full">
                        <option disabled selected value="">Select One</option>
                        <option value="teacher">Teacher</option>
                        <option value="student">Student</option>
                    </select>
                    <x-form_error name="role"></x-form_error>
                </div>

                <div class=" flex items-start justify-between flex-col my-[4rem]">
                    <x-form_input type="submit" value="Register" class="text-white cursor-pointer hover:underline sm:max-w-[245px] px-10 border mx-auto"></x-form_input>
                </div>
                </div>
            </form>
            <div class="text-center text-[1.2rem]">
                <p class="mb-[.6rem]">Already have an account?</p>
                <a href="/login" class="hover:underline">Login here</span></a> 
            </div>
        </div>
    </main>
    <script>
        // ZIP CODE INPUT RULES
        const zipInput = document.getElementById('zipcode');
        zipInput.addEventListener('keydown', (e) => {
            if (e.keyCode != 8) {
                if (e.keyCode >= 48 && e.keyCode <= 57 && zipInput.value.length < 5) {
                // Do Nothing
                } else {
                    e.preventDefault();
                    return false;
                }
            }
        })
    </script>
</x-layout>