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
                sans: ['"Source Sans 3"', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                blue1: '#AFD3E2',
                blue2: '#53B4FC',
                blue3: '#00528E',
                hover_blue3: '#003966',
                beige_white: '#F6F1F1',
                myBlack: '#2e2e2e',
                unactive: '#3C3C43'
            }
        },
        screens: {
            'xs': '375px',
            ...defaultTheme.screens,
        },
    },

    plugins: [forms],
};
