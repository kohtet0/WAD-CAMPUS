/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: "class",
  content: [
    "*.php",
    "node_modules/preline/dist/*.js",
    "./src/**/*.{html,js,php}",
    "./src/*.php",
  ],
  theme: {
    extend: {},
  },
  plugins: [require("preline/plugin")],
};
