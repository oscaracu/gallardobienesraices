<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallardo Bienes Raices</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/node_modules/@splidejs/splide/dist/css/themes/splide-default.min.css">
</head>

<body>
    <header>

        <!-- Inicia barra de navegacion -->
        <div w3-include-html="navbar.htm" class="bg-danger"></div>
        <!-- Finaliza barra de navegacion -->

        <!-- Inicia Portada -->
        <div w3-include-html="portada-listados.htm"></div>
        <!-- Finaliza Portada -->

    </header>

    <!-- Inicia Barra de Busqueda -->
    <div w3-include-html="searchbar.htm" class="sticky-lg-top"></div>
    <!-- Finaliza Barra de Busqueda -->

    <!-- Inicia Contenido -->
    <section w3-include-html="" id="superior" class="bg-light"></section>
    <!-- Finaliza Contenido -->

    <!-- Inicia Area Breadcrumbs -->
    <section w3-include-html="breadcrumds.htm" id="breadcrumds" class="bg-black bg-opacity-10"></section>
    <!-- Finaliza Area Breadcrumbs -->

    <!-- Inicia Area Inmuebles Recientes -->
    <section id="recientes" class="bg-black bg-opacity-10"><?php include 'ficha-inmueble.htm';?></section>
    <!-- Finaliza Area Inmuebles Recientes -->

    <!-- Inicia Area de Contenido Principal -->
    <section id="principal"></section>
    <!-- Finaliza Area de Contenido Principal -->

    <!-- Inicia Pie de Pagina -->
    <footer w3-include-html="footer.htm" class="bg-primary text-white"></footer>
    <!-- Finaliza Pie de Pagina -->

    <script src="/node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/node_modules/masonry-layout/dist/masonry.pkgd.min.js"></script>
    <script src="/node_modules/@splidejs/splide/dist/js/splide.min.js"></script>
    <script src="js/main.js"></script>
    <script>includeHTML();</script>
</body>

</html>