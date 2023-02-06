/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './build/*.{html,php,js}',
  ],
  theme: {
    extend: {
      backgroundImage: {
        'github' : "url('/build/img/GitHub_Logo.png')"
      }
    },
    letterSpacing: {
      '1': '0em',
      '2': '0.025em',
      '3': '0.05em',
      '4': '0.1em',
      '5': '0.15em',
      '6': '0.2em',
      '7': '0.25em',
    },
    colors: {
      'white':{
        DEFAULT : '#fff',
      },
      'main-color': {
        DEFAULT : '#333',
      },
      'main-pink' : {
        DEFAULT : '#FF00D1',
      },
      'main-green' : {
        DEFAULT : '#54ECC4',
      },
      'grey-color' : {
        DEFAULT : '#9B9B9B',
      },
    },
    keyframes:{
      'open-menu':{
        '0%': { transform :'scaleY(0)' },
        '100%': { transform :'scaleY(1)' },
      },
    },
    animation: {
      'open-menu' : 'open-menu 0.5s ease-in-out forwards',
    },
  },
  plugins: [],
  
}
