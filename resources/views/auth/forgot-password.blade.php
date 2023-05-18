<x-guest-layout>
    <div class="grid h-screen bg-kuning w-screen">
        <div class="absolute place-self-end justify-self-center px-6 pt-7 md:px-7 md:pt-7 md: lg:px-10 lg:pb-[165px] lg:pt-10 bg-hijau overflow-hidden rounded-t-[40px] w-[20rem] h-[25rem] md:w-[30rem] md:h-[28rem] lg:w-[31rem] lg:h-[28rem] xl:h-[30rem]">
            <div class="mb-4 text-sm md:text-base text-gray-600">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="mt-8" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="flex items-center justify-center mt-4">
                    <x-primary-button class="mt-7">
                        {{ __('Reset') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>