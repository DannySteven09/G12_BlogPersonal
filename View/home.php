<?php
require_once('../Controller/blogController.php');

$AllBlogs = blogController::ctl_getBlogs();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Personal</title>
    
    <!-- bootstrap css: Carga los estilos de Bootstrap desde una CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
    <!-- Enlace a tu archivo CSS personalizado -->
    <link rel="stylesheet" href="assets/styles.css">

</head>

<body>
    <!-- encabezado -->
    <header class="bg-light py-3 mb-4">
        <div class="container text-center">
            <h1 class="text-center">Mi Blog Personal</h1>
            <!-- Botón para alternar entre el modo oscuro y claro -->
            <button id="tema-toggle" class="btn btn-secondary">modo oscuro</button>
        </div>
    </header>

    <!-- barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">Inicio</a>
            <!-- boton que contrae la barra, crea un encapsulado de los titulos de la barra -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Elementos de la barra de navegación -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <!-- Links de navegación -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre Mi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <main class="container">
    <?php foreach ($AllBlogs as $blogs) {
         ?>


        <article class="mb-3">
            <h2 class="mb-2"><?= $blogs['Titulo'] ?></h2>
            <p>Autor: <?= $blogs['Autor'] ?></p>
            <p>
                <?= $blogs['Resumen'] ?>
            </p>
            <a href="#" class="btn btn-primary">Leer más</a>
        </article>
    <?php }
    
    ?>
    
    </main>

    <!-- pie de pagina -->
    <footer class="bg-dark text-white py-3">
        <div class="container text-center">
            <p>&copy; 2024 Mi Blog personal. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Carga el JavaScript de Bootstrap desde la CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!-- Enlace a tu archivo JS personalizado para el modo oscuro -->
    <script src="assets/darkmode.js"></script>
</body>

</html>
