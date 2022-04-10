module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: "class",
    theme: {
        extend: {},
    },
    plugins: [require("daisyui"), require("@tailwindcss/forms")],
};
