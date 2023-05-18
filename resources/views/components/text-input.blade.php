@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-oranye focus:ring-oranye rounded-[12px] shadow-sm p-2 text-sm md:p-3 md:text-base']) !!}>
