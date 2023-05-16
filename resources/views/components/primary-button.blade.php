<button {{ $attributes->merge(['type' => 'submit', 'class' => 'text-black bg-kuning hover:bg-oranye hover:ring-oranyet ring-2 ring-oranye focus:ring-4 focus:outline-none focus:ring-oranyet font-medium rounded-full text-md px-8 py-1 text-center md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 w-[8rem]']) }}>
    {{ $slot }}
</button>
