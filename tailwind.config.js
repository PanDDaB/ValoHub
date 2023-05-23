const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
              oswald: ['Oswald-VariableFont_wght'],
              },
            backgroundImage: {
                'loginBg': "url('/public/images/valorant2.jpeg')",
                'logo': "url('/public/images/logo.png')",
                'chamber': "url('/public/images/chamber.png')",
              },
              colors: {
                rougeValo: "#EB555A",
                bgPost: "#1B2735",
              },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
