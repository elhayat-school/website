const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                nadia: ['Lobster', "cursive"],
                amiri : ['Amiri', 'serif'],
            },
            colors: {
                'bluepurple': '#759cf5',
                'alicoblue': '#f0f8ff',
                'littleboyblue': '#5FA7DE',
                'marojelblue':'#5F64DE',
                //Dashboard
                'policeblue':'#384B75',
                'lavenderblue' :'#C0D1F7',
                'blackcoral' :'#5B6375',
                'glaucous' : '#5D7BC2',
            },

            keyframes: {

                wiggle: {
                    '0%, 100%': {
                        transform: 'rotate(-3deg)'
                    },
                    '50%': {
                        transform: 'rotate(3deg)'
                    },
                }
            },

            animation: {
                wiggle: 'wiggle 1s ease-in-out infinite',
            }

        },


    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/line-clamp'),
    ],
};
