<x-guest-layout>
    <div class="grid h-screen bg-kuning w-screen">
        <div class="absolute place-self-end justify-self-center px-6 pt-7 md:px-7 md:pt-7 md: lg:px-10 lg:pb-[165px] lg:pt-10 bg-hijau overflow-hidden rounded-t-[40px] w-[20rem] h-[25rem] md:w-[30rem] md:h-[28rem] lg:w-[31rem] lg:h-[28rem] xl:h-[30rem]">
            <div class="flex items-center justify-center mb-4 text-sm md:text-base text-gray-600">
                {{ __('Forgot your password? No problem. Just Contact Us!.') }}
            </div>
            <div class="flex items-center justify-center mt-8 ">
                <a href="{{ route('about') }}"><button type="button" class="text-black bg-kuning hover:bg-oranye hover:ring-oranyet ring-2 ring-oranye focus:ring-4 focus:outline-none focus:ring-oranyet font-medium rounded-full text-sm px-8 py-1 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">About Us</button></a>
            </div>
        </div>
    </div>
</x-guest-layout>