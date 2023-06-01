<x-guest-layout>
    <div class="grid h-[115vh] bg-kuning w-screen">
        <img src="{{asset('img/logo.png')}}" alt="Diabeart logo" class="absolute w-[18rem] pt-6 justify-self-center">
        <h1 class="absolute top-[260px] md:top-[240px] lg:top-[230px] xl:top-[265px] text-[45px] lg:text-[55px] font-medium justify-self-center font-bebas text-oranye tracking-wide">HI, WELCOME</h1>
        <div class="absolute place-self-end justify-self-center px-6 pt-7 md:px-7 md:pt-7 md: lg:px-10 lg:pb-[165px] lg:pt-10 bg-hijauab overflow-hidden rounded-t-[40px] w-[20rem] h-[34rem] md:w-[33rem] md:h-[36rem] lg:w-[37rem] lg:h-[38rem] xl:h-[40rem]" style="background-color: rgba(0, 128, 0, 0.3);">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email"/>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- No Handphone -->
                <div class="mt-4">
                    <x-text-input id="no_hp" class="block mt-1 w-full" type="text" name="no_hp" :value="old('no_hp')" required autocomplete="no_hp" placeholder="No Handphone"/>
                    <x-input-error :messages="$errors->get('no_hp')" class="mt-2" />
                </div>

                <!-- Address -->
                <div class="mt-4">
                    <x-text-input id="alamat" class="block mt-1 w-full" type="text" name="alamat" :value="old('alamat')" required autocomplete="alamat" placeholder="Address"/>
                    <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">

                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" placeholder="Password"/>

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">

                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password"/>

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                </div>
                <div class="flex justify-center">
                    <x-primary-button class="mt-12">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
    <div class="grid h-[115vh] bg-oranye place-items-center text-center w-screen">
        <div class="lg:tracking-[.30em] xl:tracking-[.45em]">
            <h1 class="text-[55px] text-kuning font-bebas lg:mx-[60px] xl:mx-[100px]">ALREADY HAVE ACCOUNT ?</h1>
            <p class="text-white text-[30px] mx-[30px] lg:mx-[130px] xl:mx-[140px] leading-loose mt-8 font-bebas">Improve your health, shop your healthy food now! enjoy!</p>
            <a href="{{ route('login') }}"><button type="button" class="text-black bg-kuning hover:bg-oranye ring-2 ring-oranyet focus:ring-4 focus:outline-none focus:ring-oranyet font-medium rounded-full text-sm px-9 py-2 mt-16 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Log in</button></a>
        </div>
    </div>
</x-guest-layout>