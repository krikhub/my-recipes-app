module.exports = {
  theme: {
    extend: {
        fontFamily: {
            'lato': ['Lato', 'sans-serif'],
            'cinzel': ['Cinzel', 'serif'],
        } 
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    // andere Plugins
  ],
}
