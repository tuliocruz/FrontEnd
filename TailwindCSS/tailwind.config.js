/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.php",          // Arquivo principal
    "./views/**/*.php",     // Todas as páginas dentro de 'views'
    "./components/**/*.php" // Todos os componentes dentro de 'components'
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
