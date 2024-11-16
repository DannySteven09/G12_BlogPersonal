// Cuando todo el contenido de la página esté cargado, ejecuta esta función
document.addEventListener('DOMContentLoaded', function() {

    // Selecciona el botón que tiene el id 'tema-toggle' y guárdalo en una variable
    const temaToggleBtn = document.getElementById('tema-toggle');

    // Selecciona el elemento <body> de la página, porque es donde vamos a aplicar el modo oscuro
    const body = document.body;

    // Añade un evento al botón para escuchar cuando se le haga clic
    temaToggleBtn.addEventListener('click', function() {
        
        // Cuando el botón se hace clic, alterna la clase 'dark-mode' en el <body>
        // Si el body tiene la clase 'dark-mode', la quita; si no la tiene, la añade.
        body.classList.toggle('dark-mode');

        // Después de alternar la clase, comprobamos si el body tiene la clase 'dark-mode'
        if (body.classList.contains('dark-mode')) {
            // Si el body tiene la clase 'dark-mode', cambiamos el texto del botón a 'modo claro'
            temaToggleBtn.textContent = 'modo claro';
        } else {
            // Si el body no tiene la clase 'dark-mode', cambiamos el texto del botón a 'modo oscuro'
            temaToggleBtn.textContent = 'modo oscuro';
        }
    });

});
