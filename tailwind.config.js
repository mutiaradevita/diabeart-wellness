import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
        colors: {
            'kuning': '#fcd34d',
            'oranye': '#f97316',
            'hijaut': '#4ade80',
            'hijaum': '#86efac',
            'abu': '#64748b',
        },
    },

    plugins: [
        require('flowbite/plugin'),
        require("daisyui")
    ],
};
