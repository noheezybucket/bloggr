/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#0C0910",
                secondary: "#fff",
                tertiary: "#0C0910",
            },
        },
    },
    plugins: [],
};
