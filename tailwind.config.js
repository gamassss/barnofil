/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
        fontFamily: {
            poppins: ["Poppins", "ui-sans-serif"],
            raleway: ["Raleway", "ui-sans-serif"],
            "open-sans": ["Open Sans", "ui-sans-serif"],
        },
        // colors: {
        //     primary: "#00AEEF"
        // },
				container: {
					center: true,
					padding: '16px'
				},
    },
    plugins: [],
};
