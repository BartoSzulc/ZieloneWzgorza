// https://tailwindcss.com/docs/configuration
const defaultTheme = require('tailwindcss/defaultTheme');
const plugin = require('tailwindcss/plugin');

let leading = (level, lh, ratio = 1.125, base = 16) => {
  return lh / (base * (Math.pow(ratio, level)));
}

let toRem = (px, base = 16) => {
  return px / base + 'rem';
}

module.exports = {
  content: ["./index.php", "./app/**/*.php", "./resources/**/*.{php,vue,js}"],
  darkMode: 'class',
  theme: {
    screens: {
      'xs': '375px',
      ...defaultTheme.screens,
      '2xl': '1366px',
      '3xl': '1440px',
      '4xl': '1600px',
      '5xl': '1920px',
      'logo': '1744px',
      
    },
    fontFamily: {
      primary: ['Bai Jamjuree', 'Helvetica', 'Arial', 'sans-serif'],
      secondary: ['Saira Extra Condensed', 'Helvetica', 'Arial', 'sans-serif'],

    },
    letterSpacing: {
      tightest: '1px',
      wide: '10.4px',
    },
    extend: {
      gridTemplateColumns: {
        // Simple 16 column grid
        'logo': 'repeat(6, minmax(264px, 264px));',

      
      },
      boxShadow: {
        'cien-1': '0px 0px 32px rgba(0, 0, 0, 0.2);',
       
      },
      dropShadow: {
        'cien-1': '10px 10px 10px 0px rgba(255, 248, 50, 0.2);',
      },
    colors: {
      
      current: "currentColor",
      transparent: "transparent",
      colorObramowanie: 'rgb(13, 14, 22, 0.1);',
      color1: '#0D0E16',
      color2: '#4EB2B3',
      color3: '#00C1E7',
      color4: '#F3F3F3',
      color5: "#FFF",
      color6: "#0F1425",
      color7: '#8F94A5',
      primary100: '#F9B208',
      primary80: '#F9B208',
      primary60: '#FBCB57',
      primary40: '#FCD77F',
      primary20: '#FDE3A6',
      black10: '#B8B8B8',
      black80: '#222222',
      black60: '#525252',
      black40: '#7A7A7A',
      black20: '#A3A3A3',

    },
    spacing: {
      'half': '50px',
      'half-mobile': '25px',
      'full': '100px',
      '30': '30px',
      '60': '60px',
    },
    fontSize: {
      // 'smallest': [12, {
      //   lineHeight: 1.67,
      // }],
      // 'caption':[14, {
      //   lineHeight: 1.214,
      //   letterSpacing: '0.05em',
      // }],
      'menu' : ['18px', {
        lineHeight: 1.444, // Unitless, relative to the font size
        letterSpacing: '0.64px', // Rounded from 0.046875rem
        fontWeight: 600,
      }],
      'cytat' : ['20px', {
          lineHeight: 1.7, // Unitless, relative to the font size
          fontWeight: 400,
          fontStyle: 'italic',
      }],
      'base': ['1rem', 1.5], // Unitless, relative to the font size
      'desc': ['1.125rem', {
        lineHeight: 1.67, // Unitless, relative to the font size
      }],
      'button': [
        '0.75rem', { // Converted font size to rem
          lineHeight: '1.67', // You could use 1.25rem or keep it unitless as 1.25
          letterSpacing: '3.2px', // Converted letter spacing to rem
          fontWeight: 700,
        }
      ],
      // https://modern-fluid-typography.vercel.app/
      // where u can get fluid typography
      'B20': ['20px', {
        lineHeight: '30px',
      }],
      'B24': ['24px', {
        lineHeight: '36px',
      }],
      'BQuote': ['28px', {
        lineHeight: '42px',
        fontStyle: 'italic',
      }],
      'h5': ['clamp(1.5rem, 5vw - 1rem, 2rem)', {
        lineHeight: 'clamp(2rem, 5vw, 2.813rem);',
        fontWeight: 700,
      }],
      'h4': ['clamp(2rem, 3vw + 1rem, 2.75rem);', {
        lineHeight: 'clamp(2.813rem, 4vw + 1rem, 3.563rem);',
        fontWeight: 700,
      }],
      'h3': ['clamp(2.75rem, 4vw + 1rem, 4rem);', {
        lineHeight: 'clamp(3.563rem, 5vw + 1rem, 4.813rem);',
        fontWeight: 700,
      }],
      'h2': ['clamp(4rem, 4vw + 1.5rem, 4.5rem);', {
        lineHeight: 'clamp(4.813rem, 5vw + 1.25rem, 5.375rem);',
        fontWeight: 700,
      }],
      'h1': ['clamp(4.5rem, 5.5vw + 2rem, 6.625rem);', {
        lineHeight: 'clamp(5.375rem, 5.5vw + 2rem, 7.938rem);',
        fontWeight: 700,
      }],
    },
    keyframes: {
      scaleUp: {
        '0%': { transform: 'scale(0.95)', opacity: '0' },
        '100%': { transform: 'scale(1)', opacity: '1' },
      },
      scaleDown: {
        '0%': { transform: 'scale(1)', opacity: '1' },
        '100%': { transform: 'scale(0.95)', opacity: '0' },
      },
      fadeIn: {
        '0%': { opacity: '0' },
        '100%': { opacity: '1' },
      },
    },
    animation: {
      scaleUp: 'scaleUp 0.3s ease-out forwards',
      scaleDown: 'scaleDown 0.2s ease-out forwards',
      'fade-in': 'fadeIn 0.5s ease-out forwards',
    },
    },
  },
  plugins: [
    plugin(function ({addBase, addComponents, addUtilities, theme}) {
      addComponents({
        ".container": {
          paddingLeft: "1.25rem",
          paddingRight: "1.25rem",
          width: "100%",
          maxWidth: "1168px",
          margin: "0 auto",
        },

        '.font-size-inherit': {
          fontSize: 'inherit',
        },
        '.color-inherit': {
          color: 'currentColor !important',
        },
        '.theme-radius-base': {
          borderRadius: toRem(6)
        },
        '.theme-radius-base-md': {
          borderRadius: toRem(8)
        },
        '.theme-radius-base-lg': {
          borderRadius: toRem(10)
        },
        '.theme-radius-base-xl': {
          borderRadius: toRem(12)
        },
      })
    })
  ],
};