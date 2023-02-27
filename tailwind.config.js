/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
				"./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {},
        fontFamily: {
            rubik: ["Rubik", "ui-sans-serif"],
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
    plugins: [
			require('flowbite/plugin')
		],
};
