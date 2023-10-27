import forms from '@tailwindcss/forms';
/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/**.vue",
  ],
  theme: {
    extend: {
        spacing: {
            'calc-100-minus-280': 'calc(100% - 280px)',
            'calc-100-minus-50': 'calc(100% - 60px)',
        },
        fontFamily: {
            Montserrat: "'Montserrat', sans-serif",
        },
        boxShadow: {
            '3xl': '0 35px 60px -15px rgba(0, 0, 0, 0.3)',
        }
    },
  },
  plugins: [forms],
}

