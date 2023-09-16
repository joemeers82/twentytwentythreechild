/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{php,html,js}", "./blocks/**/*.{php,html,js,css}"],
  important: true,

  theme: {
    extend: {
      fontFamily: {
        poppins: ["Poppins", "sans-serif"],
      },
      borderRadius: {
        wacky: "60% 40% 30% 70%/60% 30% 70% 40%",
      },
    },
  },
  plugins: [],
};
