module.exports = {
  content: require('fast-glob').sync(['site/**/*.{php,ts,tsx,vue,js}']),
  theme: {
    extend: {},
  },
  plugins: [],
}
