import typography from "@tailwindcss/typography";
import containerQueries from "@tailwindcss/container-queries";

export default {
  content: [
    "./site/**/*.php",
    "./assets/**/*.js"
  ],
  theme: {
    extend: {},
  },
  plugins: [typography, containerQueries]
}
