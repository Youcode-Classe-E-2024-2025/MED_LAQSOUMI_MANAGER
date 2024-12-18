/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.php",                    // Main file
    "./dashboard.php",                    // Main file
    "./reservation.php",                    // Main file
    "./assets/*/*.{js,html,php,css}", // All files in the assets folder (recursive)
    "./*/*.{html,php,js}",           // Any file in the root and subdirectories
  ],
  theme: {
    extend: {
      screens: {
        1000: "1000px",
        820: "820px",
        750: "750px",
        680: "680px",
        425: "425px",
      },
      fontFamily: {
        Bangers: ["Bangers", "serif"],
      },
    },
  },
  plugins: [],
};
