/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {
      colors: {
        neutral: {
          100: '#F0F0F0',
          200: '#F5F5F5',
          300: '#E0E0E0',
          400: '#CCCCCC',
          500: '#A4A4A4',
          600: '#7A7A7A',
          650: '#757575',
          700: '#353535',
          750: '#212933',
          800: '#191919',
          900: '#191919',
        },
      },
    },
  },
  plugins: [],
}
