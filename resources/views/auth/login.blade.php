<x-guest-layout>
    <div class="grid h-screen bg-kuning w-screen">
        <img src="{{asset('img/logo.png')}}" alt="Diabeart logo" class="absolute w-[18rem] pt-6 justify-self-center">
        <h1 class="absolute top-[260px] md:top-[240px] lg:top-[230px] xl:top-[255px] text-[45px] lg:text-[55px] xl:text-[55px] font-medium justify-self-center font-bebas text-oranye tracking-wide">WELCOME BACK</h1>
        <div class="absolute place-self-end justify-self-center px-6 pt-7 md:px-7 md:pt-7 md: lg:px-10 lg:pb-[165px] lg:pt-14 bg-hijauab overflow-hidden rounded-t-[40px] w-[20rem] h-[20rem] md:w-[30rem] md:h-[22rem] lg:w-[31rem] lg:h-[22rem] xl:h-[24rem]" style="background-color: rgba(0, 128, 0, 0.3);">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('')" />

                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" placeholder="Password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="flex flex-row justify-between mt-4">
                    <div>
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-kuning shadow-sm focus:ring-oranye" name="remember">
                        <span class="ml-2 text-[13px] md:text-[14px] lg:text-[16px] text-gray-600">{{ __('Remember me') }}</span>
                    </div>
                    <div>
                        @if (Route::has('password.request'))
                        <a class="underline text-[12px] md:text-[13px] lg:text-[15px] text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                        @endif
                    </div>
                </div>

                <div class="flex flex-col place-items-center mt-6">
                    <x-primary-button class="mt-7">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
    <div class="grid h-screen bg-oranye place-items-center text-center w-screen">
        <div class="mt-32 tracking-[.45em]">
            <h1 class="text-[55px] text-kuning font-bebas">NEW HERE ?</h1>
            <p class="text-white text-[30px] mx-[30px] lg:mx-[130px] xl:mx-[140px] leading-loose mt-8 font-bebas">Register Now and discover a great amount of new opportunities!</p>
            <a href="{{ route('register') }}"><button type="button" class="text-black bg-kuning hover:bg-oranye ring-2 ring-oranyet focus:ring-4 focus:outline-none focus:ring-oranyet font-medium rounded-full text-sm px-9 py-2 mt-16 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sign up</button></a>
        </div>
    </div>
</x-guest-layout>