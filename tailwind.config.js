export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './resources/**/*.{js,ts,jsx,tsx,vue}',
        './resources/**/*.{html,js,vue}',
    ],
    theme: {
        extend: {
            fontFamily: {
                roboto: ['Roboto', 'sans-serif'],
                openSans: ['Open Sans', 'sans-serif'],
                unito: ['Nunito', 'sans-serif'], // Add Nunito here
                sixtyfour: ['Sixtyfour Convergence', 'sans-serif'],
            },

        },
    },
    plugins: [],
};
