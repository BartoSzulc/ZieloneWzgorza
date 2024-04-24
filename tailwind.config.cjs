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
      
    },
    fontFamily: {
      primary: ['Montserrat', 'Helvetica', 'Arial', 'sans-serif'],
      secondary: ['DM Sans', 'Helvetica', 'Arial', 'sans-serif'],

    },
    letterSpacing: {
      tightest: '1px',
    },
    extend: {
      borderRadius: {
        'hero': '0 0 clamp(4rem, 15.385vw + -5.846rem, 8rem) clamp(4rem, 15.385vw + -5.846rem, 8rem)',
      },
      gridTemplateColumns: {
        // Simple 16 column grid
        //'logo': 'repeat(6, minmax(264px, 264px));',
      },
      boxShadow: {
        'cien-1': '0px 24px 48px rgba(37, 34, 0, 0.0816067);',
        'form': '0px 12px 32px rgba(37, 34, 0, 0.08);',
        'pin': '0px 30px 60px -15px rgba(2, 26, 76, 0.15);',
       
      },
      dropShadow: {
        'lg': '0px 4px 8px rgba(0, 0, 0, 0.5);',
      },
    colors: {
      
      current: "currentColor",
      transparent: "transparent",
      primary: {
        10: "#F6FAE8",
        50: "#D6DFB8",
        100: "#CBD6A4",
        200: "#B4C37C",
        300: "#9CB154",
        400: "#859E2B",
        500: "#6E8C03",
      },
      secondary: {
       
        100: "#E8D7C1",
        300: "#D3B38B",
        500: "#BF8F54",
      },
      texter: {
        DEFAULT: '#333333',
      },
      lightSky: {
        DEFAULT: '#CEE4F2',
      },
      deepForest: {
        DEFAULT: '#274001',
      },
      olive: {
        DEFAULT: '#D3D3AF',
      },
    },
    spacing: {
      'half': '50px',
      'half-mobile': '25px',
      'full': '100px',
      '30': '30px',
      '60': '60px',
      '72': '72px',
    },
    fontSize: {
      'B16': ['16px', {
        lineHeight: '22.4px',
      }],
      'B20': ['20px', {
        lineHeight: '28px',
      }],
      'B12': ['12px', {
        lineHeight: '18px',
      }],
      'BQuote': ['16px', {
        lineHeight: '24px',
        fontStyle: 'italic',
      }],
      // 24px
      'h5': ['clamp(1.25rem, 0.446vw + 0.964rem, 1.5rem);', {
        lineHeight: 1.2,
        fontWeight: 600,
      }],
      // 28px
      'h4': ['clamp(1.5rem, 0.446vw + 1.214rem, 1.75rem);', {
        lineHeight: 1.2,
        fontWeight: 600,
      }],
      // 40px
      'h3': ['clamp(1.75rem, 1.339vw + 0.893rem, 2.5rem);', {
        lineHeight: 1.2,
        fontWeight: 600,
      }],
      // 48px
      'h2': ['clamp(2.5rem, 0.893vw + 1.929rem, 3rem);', {
        lineHeight: 1.2,
        fontWeight: 700,
        letterSpacing: '0.05em',
      }],
      // 64px
      'h1': ['clamp(3rem, 1.786vw + 1.857rem, 4rem);', {
        lineHeight: 'clamp(3.6rem, 3.571vw + 1.314rem, 5.6rem)',
        fontWeight: 700,
        letterSpacing: '0.05em',
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
          paddingLeft: "15px",
          paddingRight: "15px",
          width: "100%",
          maxWidth: "1158px",
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