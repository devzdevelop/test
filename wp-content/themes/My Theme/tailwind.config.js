/** @type {import('tailwindcss').Config} */
module.exports = {
  purge: ["./**/*.php"],
  content: [],
  important: true,
  theme: {
    extend: {
      fontFamily: {
        montserrat: ["Montserrat", "sans-serif"],
        roboto: ["Roboto", "sans-serif"],
        inter: ["Inter", "sans-serif"],
      },
      lineHeight: {
        182: "1.82",
      },
      fontSize: {
        "20px": "20px",
      },
      colors: {
        primary: "#DAE3EA",
        secondary: "#265073",
        primaryText: "#19354D",
        secondaryBg: "#F6F6F6",
        altBg: "#2D3943",
      },
      screens: {
        xs: "416px",
      },
      keyframes: {
        scroll: {
          "0%": { transform: "translateX(0)" },
          "100%": { transform: "translateX(-100%)" },
        },
      },
      animation: {
        scroll: "scroll 60s linear infinite",
      },
      scale: {
        125: "1.25",
      },
      variants: {
        extend: {
          animation: ["hover"],
        },
      },
    },
  },
  plugins: [],
};
