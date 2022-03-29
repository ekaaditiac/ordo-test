module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./Modules/**/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
              'red-hat': ['Red Hat Display', 'sans-serif']
            }
          }
    },
    plugins: [],
}