module.exports = {
    content: [
        "./public/raw/**/*.php",
        "./public/raw/**/*.html",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
        // require('daisyui'),
    ]
}
