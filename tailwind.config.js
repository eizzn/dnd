import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                display: ['Cinzel', ...defaultTheme.fontFamily.serif],
            },
            colors: {
                stone: {
                    850: '#1c1917',
                    950: '#0c0a09',
                },
                amber: defaultTheme.colors?.amber ?? {},
                parchment: {
                    50: '#fdf8f0',
                    100: '#faf0dc',
                    200: '#f5e0b8',
                },
            },
        },
    },

    plugins: [forms],
};
