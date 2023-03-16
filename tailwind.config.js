/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                primer: "#639cd9",
                secondary: "#80b8f4",
                primerhover: "#457db9",
            },
        },
        fontFamily: {
            rubik: ["Rubik", "ui-sans-serif"],
            "open-sans": ["Open Sans", "ui-sans-serif"],
            inter: ["Inter", "ui-sans-serif"],
        },
        // colors: {
        //     primary: "#00AEEF"
        // },
        container: {
            center: true,
            padding: "16px",
        },
    },
    plugins: [require("flowbite/plugin")],
};
