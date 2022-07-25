const colors = require("tailwindcss/colors");

module.exports = {
  mode: "jit",
  content: ["./*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        sky: colors.sky,
        teal: colors.teal,
      },
    },
  },
  plugins: [require("@tailwindcss/forms")],
};
