import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "media",
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    DEFAULT: "#15281c",
                    dark: "#0f2a17",
                    light: "#173d23",
                },
                accent: {
                    DEFAULT: "#fdc20f",
                    dark: "#e1ab09",
                    light: "#ffdb5c",
                },
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
