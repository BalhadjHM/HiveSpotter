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
            'primary': '#E4F9F5',
            'secondary': '#30E3CA',
            'accent': '#11999E',
            'dark': '#40514E',
        }
    },
  },
  plugins: [],
}

