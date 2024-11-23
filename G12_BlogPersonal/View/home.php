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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/styles.css">
</head>

<body>
    <header class="bg-light py-3 mb-4">
        <div class="container text-center">
            <h1 class="text-center">Mi Blog Personal</h1>
            <button id="tema-toggle" class="btn btn-secondary">modo oscuro</button>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
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

    <main class="container">
        <?php foreach ($AllBlogs as $blogs) { ?>
            <article class="mb-3">
                <h2 class="mb-2"><?= $blogs['Titulo'] ?></h2>
                <p>Autor: <?= $blogs['Autor'] ?></p>
                <p><?= $blogs['Resumen'] ?></p>
                <a href="#" class="btn btn-primary">Leer más</a>
            </article>
        <?php } ?>
    </main>

    <footer class="bg-dark text-white py-3">
        <div class="container text-center">
            <p>&copy; 2024 Mi Blog personal. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="assets/darkmode.js"></script>
</body>

</html>
