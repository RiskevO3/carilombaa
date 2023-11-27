const defaultTheme = require('tailwindcss/defaultTheme')
/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    theme: {
        extend: {
            colors:{
                'main-red-color':'#a81919'
              },
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
                inter: ['Inter', ...defaultTheme.fontFamily.sans],
                playpen:['Playpen Sans'],
            },
            animation:{
                'spin-slow':'spin 2s ease-in infinite',
            },
            backgroundImage:{
            },
        },
    },
    variants: {
        extend: {
            backgroundColor: ['active'],
        }
    },
    content: [
        './app/**/*.php',
        './resources/**/*.html',
        './resources/**/*.js',
        "./node_modules/flowbite/**/*.js",
        './resources/**/*.blade.php',
        "./resources/**/*.css",
    ],
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('flowbite/plugin')
    ],
}
