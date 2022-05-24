module.exports = {
  content: ['./*.php'],
  // purge: {
  //   enabled: true,
  //   content: ['*.php'],
  // },
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        'verdeCustom': '#4dc247',
      },
      animation: {
        'ping-slow': 'ping 2s cubic-bezier(0, 0, 0.2, 1) infinite',
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
