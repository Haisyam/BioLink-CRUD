/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./public/**/*.{html, js, php, blade.php}",
    "./public/admin/login.php",
  ],
  theme: {
    container: {
      center: true,
      padding: "16px",
    },

    extend: {
      screens: {
        "2xl": "1300px",
      },
    },
  },
  plugins: [require("@tailwindcss/forms")],
};
