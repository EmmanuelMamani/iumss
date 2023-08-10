// tailwind.config.js
module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // Puede ser 'media' o 'class'
  theme: {
    extend: {
      // Aquí puedes agregar estilos adicionales o personalizar el tema
    },
  },
  variants: {
    extend: {
      // Aquí puedes extender o personalizar las variantes de estilos
    },
  },
  plugins: [
    // Aquí puedes agregar plugins de terceros
  ],
}
