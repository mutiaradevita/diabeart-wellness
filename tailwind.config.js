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
            'kuningt': '#d97706',
            'oranye': '#f97316',
            'oranyet': '#c2410c',
            'hijau': '#a3e635',
            'hijaut': '#4ade80',
            'abu': '#64748b',
            'hijaum': '#69B550',
        },
    },

    plugins: [
        require('flowbite/plugin'),
        require("daisyui")
    ],
};
