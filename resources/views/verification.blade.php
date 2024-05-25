<x-layout.app>

    <x-slot name="title">
        HiveSpotter | Verification
    </x-slot>

    <x-slot name="content">
        <main class="h-full w-full bg-primary flex items-center justify-center overflow-hidden">
            <div class="w-[600px] py-12 px-8 bg-white rounded-lg shadow z-10 flex flex-col justify-center items-center text-center gap-8">
                <div class="space-y-4">
                    <h1 class="text-xl text-dark montserrat-bold">Check Your Email</h1>
                    <p class=" text-sm text-dark montserrat-semibold">We have emailed you with a verification code.<br> Please check your email and enter the code below.</p>
                </div>
                <form action="{{ route('user.login') }}" method="post" class="flex flex-col space-y-8">
                    <div>
                        @csrf
                        <label for="code" class="hidden"></label>
                        @for($i = 1; $i <= 6; $i++)
                            <input type="text" name="code" id="code" maxlength="1" class="w-8 sm:w-12 h-8 sm:h-12 text-center border-2 border-accent rounded-md focus:ring-0 focus:outline-0 montserrat-medium" value="{{ old('code') }}">
                        @endfor
                    </div>
                    <button type="submit" class="py-3 bg-secondary text-primary montserrat-semibold rounded-md hover:bg-accent duration-300 ease-out  hover:scale-[1.04]">Confirm</button>
                </form>
                <a href="" class="-mt-6 text-sm text-dark montserrat-medium duration-300 ease-out hover:text-secondary">Resend Verification Code</a>
            </div>
        </main>
    </x-slot>


</x-layout.app>
