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
      'roboto': ['Roboto', 'sans-serif'],
      'fasthand' : ["'Fasthand'", 'cursive'],
      'wibu' : ["'Fasthand'", 'cursive'],
      'another' : ["'Just Another Hand'", 'cursive'],
      'dosis' : ["'Dosis'", 'sans-serif'],
    },
  },
  plugins: [],
}

