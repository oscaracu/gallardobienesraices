<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
   
     <head>
        <jdoc:include type="head" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/index.6f8723d7.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/index.e5264d3b.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/index.f982ddc7.css" type="text/css" />
    </head>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/index.3287fdc4.js"></script>
   
<body class="bg-black bg-opacity-10">
    <header>
        <div class="bg-danger">
            <nav class="bg-white d-block d-lg-none navbar navbar-light">
                <div class="container-fluid"> <a class="navbar-brand" href="#"><img class="mx-auto"
                            src="logo.aaaf9e15.png" alt="Gallardo Bienes Raices"></a> <button class="navbar-toggler"
                        type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse fs-3 navbar-collapse pt-3 text-center" id="menu">
                        <ul class="mb-2 mb-lg-0 navbar-nav">
                            <li class="nav-item"> <a class="active nav-link" aria-current="page" href="#">Inicio</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="#">¿Quienes Somos?</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Casas</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Locales</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Fraccionamientos</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Terrenos</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Contacto</a> </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <nav class="bg-black bg-opacity-25 d-lg-block d-none navbar navbar-dark navbar-expand" id="barNavLg">
                <div class="container"> <a class="logo navbar-brand" href="#"><img src="images/logo.aaaf9e15.png"
                            alt="Gallardo Bienes Raices"></a>
                    <div class="navbar-collapse">
                        <ul class="fw-bold mb-2 mb-lg-0 navbar-nav">
                            <li class="nav-item"> <a class="active nav-link" aria-current="page" href="#">Inicio</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="#">¿Quienes Somos?</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Casas</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Locales</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Fraccionamientos</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Terrenos</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Contacto</a> </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div>
            <div class="cover-image text-center"
                style="background-image:url(images/slide01.1fa60d2e.jpg);height:580px;">
                <div class="bg-dark bg-opacity-75 h-100">
                    <div class="align-items-center container d-flex h-100 justify-content-center">
                        <div class="p-2 text-white">
                            <h3 class="mb-3">¿NECESITA VENDER, COMPRAR O RENTAR?</h3>
                            <h1 class="mb-3">GALLARDO BIENES RAÍCES <span class="text-warning">ES LA SOLUCIÓN</span>
                            </h1>
                            <p>Somos una empresa 100% campechana que nos distinguimos por prestar servicios <br> de
                                promoción inmobiliaria a la comunidad, con una trayectoria exitosa de más de 35 años.
                            </p> <a class="btn btn-danger btn-lg mt-5" href="#!" role="button">CONTÁCTENOS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="sticky-lg-top">
        <div class="bg-primary">
            <div class="py-4">
                <div class="container">
                    <form class="align-items-center g-3 row">
                        <div class="col-lg-2 col-md-6 col-sm-12"> <select class="form-select form-select-lg"
                                aria-label="inmuebles">
                                <option value="Casas" selected>Casas</option>
                                <option value="Locales">Locales</option>
                                <option value="Terrenos">Terrenos</option>
                                <option value="Fraccionamientos">Fraccionamientos</option>
                            </select> </div>
                        <div class="col-lg-2 col-md-6 col-sm-12"> <select class="form-select form-select-lg"
                                aria-label="contratos">
                                <option value="En venta" selected>En venta</option>
                                <option value="En renta">En renta</option>>
                            </select> </div>
                        <div class="col-lg-6 col-sm-12"> <input type="text" class="form-control form-control-lg"
                                id="keywordsSearch" placeholder="Ingresa colonia, ciudad, estado, municipio, etc.">
                        </div>
                        <div class="col-lg-2 col-sm-12 d-grid gap-2"> <button type="submit"
                                class="btn btn-lg btn-outline-light">Buscar</button> </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <section id="breadcrumbs">
        <div class="container pt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                    <li class="active breadcrumb-item" aria-current="page">Data</li>
                </ol>
            </nav>
        </div>
    </section>
    <section id="top">
        <div class="container p-3">
            <div class="row"
                data-masonry='{ "itemSelector": ".grid-item", "columnWidth": ".grid-sizer", "percentPosition": true }'>
                <div class="col-12 col-lg-4 grid-sizer"></div>
                <div class="col-12 col-lg-8 grid-item">
                    <div id="main-slider" class="splide">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide"> <img src="images/inmueble01.e7fd8ed9.jpeg"> </li>
                                <li class="splide__slide"> <img src="images/images/inmueble02.65ccaf61.jpeg"> </li>
                                <li class="splide__slide"> <img src="images/inmueble03.53000a3e.jpeg"> </li>
                                <li class="splide__slide"> <img src="images/inmueble01.e7fd8ed9.jpeg"> </li>
                                <li class="splide__slide"> <img src="images/inmueble02.65ccaf61.jpeg"> </li>
                                <li class="splide__slide"> <img src="images/inmueble03.53000a3e.jpeg"> </li>
                                <li class="splide__slide"> <img src="images/inmueble01.e7fd8ed9.jpeg"> </li>
                                <li class="splide__slide"> <img src="images/inmueble02.65ccaf61.jpeg"> </li>
                                <li class="splide__slide"> <img src="images/inmueble03.53000a3e.jpeg"> </li>
                                <li class="splide__slide"> <img src="images/inmueble01.e7fd8ed9.jpeg"> </li>
                                <li class="splide__slide"> <img src="images/inmueble02.65ccaf61.jpeg"> </li>
                                <li class="splide__slide"> <img src="images/inmueble03.53000a3e.jpeg"> </li>
                            </ul>
                        </div>
                    </div>
                    <div id="thumbnail-slider" class="py-4 splide">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide"> <img src="images/inmueble01.e7fd8ed9.jpeg"> </li>
                                <li class="splide__slide"> <img src="images/inmueble02.65ccaf61.jpeg"> </li>
                                <li class="splide__slide"> <img src="images/inmueble03.53000a3e.jpeg"> </li>
                                <li class="splide__slide"> <img src="images/inmueble01.e7fd8ed9.jpeg"> </li>
                                <li class="splide__slide"> <img src="images/inmueble02.65ccaf61.jpeg"> </li>
                                <li class="splide__slide"> <img src="images/inmueble03.53000a3e.jpeg"> </li>
                                <li class="splide__slide"> <img src="images/inmueble01.e7fd8ed9.jpeg"> </li>
                                <li class="splide__slide"> <img src="images/inmueble02.65ccaf61.jpeg"> </li>
                                <li class="splide__slide"> <img src="images/inmueble03.53000a3e.jpeg"> </li>
                                <li class="splide__slide"> <img src="images/inmueble01.e7fd8ed9.jpeg"> </li>
                                <li class="splide__slide"> <img src="images/inmueble02.65ccaf61.jpeg"> </li>
                                <li class="splide__slide"> <img src="images/inmueble03.53000a3e.jpeg"> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 grid-item">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Casa Colonial restaurada, en muy buenas condiciones.</h3>
                            <h5 class="card-subtitle mb-2 text-muted">Centro Histórico, Campeche.</h5> <span
                                class="badge bg-primary fs-4">$4,500,000.00</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Descripción:</h5>
                            <p class="card-text">Cuenta con sala, comedor, cocina, 3 baños, alberca, dos recámaras y
                                área de descanso. (Muebles y equipos a tratar).</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="fw-bold list-group-item">Disponibilidad: <span
                                    class="badge bg-danger float-end fw-normal text-uppercase">En Venta</span></li>
                            <li class="fw-bold list-group-item">Terreno: <span class="float-end fw-normal">511.00
                                    m<sup>2</sup></span> </li>
                            <li class="fw-bold list-group-item">Construcción: <span class="float-end fw-normal">167.00
                                    m<sup>2</sup></span></li>
                            <li class="fw-bold list-group-item">Baños: <span class="float-end fw-normal">3</span></li>
                            <li class="fw-bold list-group-item">Recámaras: <span class="float-end fw-normal">2</span>
                            </li>
                        </ul>
                    </div>
                    <div class="my-4"> <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1876.388436553379!2d-90.5311660357943!3d19.849391762493287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa3ae2eee08a00744!2sGallardo%20Bienes%20Ra%C3%ADces!5e0!3m2!1ses-419!2smx!4v1647162082232!5m2!1ses-419!2smx"
                            width="100%" height="240" style="border:0;" allowfullscreen loading="lazy"></iframe> </div>
                </div>
                <div class="col-12 col-lg-8 grid-item">
                    <form class="bg-white p-3">
                        <h3 class="pb-2 text-center text-md-start text-muted">Solicite más información aquí:</h3>
                        <div class="form-floating g-3 row">
                            <div class="col-12 col-md-6"><input type="text" class="form-control" id="contact-name"
                                    placeholder="Nombre" aria-label="mombre" required></div>
                            <div class="col-12 col-md-6"><input type="email" class="form-control" id="contact-email"
                                    placeholder="usuario@ejemplo.com" aria-label="e-mail" required></div>
                            <div class="col-12"><input type="text" class="form-control" id="contact-subject"
                                    placeholder="Asunto" aria-label="asunto" required></div>
                            <div class="col-12"><textarea class="form-control" id="message" rows="5"
                                    placeholder="Escriba aquí su mensaje o comentarios." aria-label="comentarios"
                                    required></textarea></div> <button type="submit"
                                class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="p-3">
            <div class="container pt-3">
                <div class="text-center">
                    <h1>Inmuebles recientes</h1>
                    <p>Tenemos una gran variedad de opciones a escoger que se pueden adaptar a sus necesidades, esto es
                        solo una muestra de los más reciente en nuestra cartera de inmuebles.</p>
                </div>
            </div>
            <div class="container pb-3">
                <div class="g-4 row row-cols-1 row-cols-lg-3 row-cols-md-2">
                    <div class="col">
                        <div class="card h-100 overflow-hidden">
                            <div style="position:relative;">
                                <div class="bg-danger tag">En Venta</div>
                                <div class="bg-primary price">$1'100,000.00</div> <img
                                    src="images/inmueble01.e7fd8ed9.jpeg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body text-center"> <a href="" class="stretched-link">
                                    <h5 class="card-title">Casa Amueblada en calle 20</h5>
                                </a>
                                <p class="card-text">Col. El Carmelo, Campeche.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 overflow-hidden">
                            <div style="position:relative;">
                                <div class="bg-danger tag">En Venta</div>
                                <div class="bg-primary price">$850,000.00</div> <img
                                    src="images/inmueble02.65ccaf61.jpeg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body text-center"> <a href="" class="stretched-link">
                                    <h5 class="card-title">Casa ubicada en calle 14</h5>
                                </a>
                                <p class="card-text">Col. México, Campeche.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 overflow-hidden">
                            <div style="position:relative;">
                                <div class="bg-danger tag">En Renta</div>
                                <div class="bg-primary price">$8,000.00 mensual</div> <img
                                    src="images/inmueble03.53000a3e.jpeg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body text-center"> <a href="" class="stretched-link">
                                    <h5 class="card-title">Departamento Amueblado en calle 10</h5>
                                </a>
                                <p class="card-text">Col. Centro, Campeche.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="component">
        <div class="bg-light p-3">
            <div class="container-fluid container-md py-3">
                <div class="py-3 row">
                    <div class="col-xl-7">
                        <div class="pb-4 pb-md-5 text-center">
                            <h2>¡Bienvenido a <span class="text-primary">Gallardo Bienes Raíces</span>!</h2>
                            <p>Nos especializamos en la promoción de compra, venta, renta de desarrollos habitacionales,
                                casas, terrenos, condominios y locales comerciales. Cualquiera puede vender una casa
                                pero nosotros le ofrecemos:</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div style="position:absolute;"><img src="images/shield-check.337f1d05.svg" width="32">
                                </div>
                                <div style="margin-left:42px;">
                                    <h5>Seguridad.</h5>
                                    <p>Les brindamos la asesoría y conocimiento necesario para que tome la mejor
                                        decisión. </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div style="position:absolute;"><img src="images/briefcase.fc756b49.svg" width="32">
                                </div>
                                <div style="margin-left:42px;">
                                    <h5>Confidencialidad.</h5>
                                    <p>La privacidad con la que manejamos la información de nuestros clientes y de las
                                        operaciones nos permite garantizarle la absoluta discreción.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div style="position:absolute;"><img src="images/piggy-bank.77d01532.svg" width="32">
                                </div>
                                <div style="margin-left:42px;">
                                    <h5>Ahorro.</h5>
                                    <p>Al acudir con nosotros usted cuenta con el respaldo de que las operaciones de
                                        compra o venta están respaldadas por la asesoría de expertos valuadores,
                                        garantizando un servicio con los mejores precios del mercado. Todo esto con un
                                        costo de honorarios módico.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div style="position:absolute;"><img src="images/award.81d0d713.svg" width="32"> </div>
                                <div style="margin-left:42px;">
                                    <h5>Profesionalismo.</h5>
                                    <p>Nuestra experiencia y conocimiento de más de 25 años nos respaldan, por lo que
                                        usted acude con un experto en la materia, además de que contamos con el apoyo de
                                        un cuerpo de profesionales, abogados, peritos valuadores y las constructoras más
                                        prestigiadas de la localidad.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="align-self-center col-xl-5 d-none d-xl-block"> <img
                            src="images/houses-306337.5832c767.svg" alt=""> </div>
                </div>
            </div>
        </div>
    </section>
    <section id="bottom">
        <div class="container p-3">
            <div class="py-4">
                <nav class="bg-light border nav-pills navbar px-3">
                    <div class="text-secondary">
                        <div class="d-md-block d-none fs-2"> <i class="bi-card-list" role="img"></i><span
                                style="margin-left:.5em;">Lista de casas</span> </div>
                        <div class="d-block d-md-none"> <i class="bi-card-list" role="img"></i><span
                                style="margin-left:.5em;">Lista de casas</span> </div>
                    </div>
                    <div class="dropdown nav-item"> <a class="active dropdown-toggle nav-link" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Ordenar por:</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Menor precio</a></li>
                            <li><a class="dropdown-item" href="#">Mayor precio</a></li>
                            <li><a class="dropdown-item" href="#">Fecha</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="g-4 row row-cols-1 row-cols-md-2 row-cols-xl-3" data-masonry='{ "percentPosition": true }'>
                <div class="col">
                    <div class="bg-light card mb-4 overflow-hidden">
                        <div style="position:relative;">
                            <div class="bg-danger tag">En Venta</div>
                            <div class="bg-primary price">$800,000.00</div> <img src="images/inmueble01.e7fd8ed9.jpeg"
                                class="card-img-top" alt="...">
                        </div>
                        <div class="card-body"> <a href="" class="stretched-link">
                                <h5 class="card-title">Casa nueva en calle 14</h5>
                            </a>
                            <p class="card-text h6 text-muted">Col. Carmelo, Campeche.</p>
                            <p>Casa ubicada en calle Tierra del Fraccionamiento Valle del Sol que consta de 5 recamaras,
                                3 baños, Lorem ipsum dolor sit amet... </p>
                            <div class="card-text">
                                <div class="row">
                                    <div class="col-auto text-center">
                                        <div> <img src="images/Terreno.85d8656a.svg" alt=""> 165 m<sup>2</sup> </div>
                                    </div>
                                    <div class="col-auto text-center">
                                        <div> <img src="images/Construccion.2d5e16d7.svg" alt=""> 95 m<sup>2</sup>
                                        </div>
                                    </div>
                                    <div class="col-auto text-center">
                                        <div> <img src="images/Recamaras.80bb5ca6.svg" alt=""> 1 </div>
                                    </div>
                                    <div class="col-auto text-center">
                                        <div> <img src="images/Baños.0bb6462c.svg" alt=""> 1 </div>
                                    </div>
                                    <div class="col-auto text-center">
                                        <div> <img src="images/Estacionamiento.8ec53b8f.svg" alt=""> 1 </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="bg-light card mb-4 overflow-hidden">
                        <div style="position:relative;">
                            <div class="bg-danger tag">En Renta</div>
                            <div class="bg-primary price">$10,000.00 mensual</div> <img
                                src="images/inmueble02.65ccaf61.jpeg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body"> <a href="" class="stretched-link">
                                <h5 class="card-title">Departamento Amueblado en Av. Hidalgo</h5>
                            </a>
                            <p class="card-text h6 text-muted">El Huanal, Campeche.</p>
                            <p>Casa ubicada en calle Tierra del Fraccionamiento Valle del Sol que consta de 5 recamaras,
                                3 baños, Lorem ipsum dolor sit amet... </p>
                            <div class="card-text">
                                <div class="row">
                                    <div class="col-auto text-center">
                                        <div> <img src="images/Terreno.85d8656a.svg" alt=""> 165 m<sup>2</sup> </div>
                                    </div>
                                    <div class="col-auto text-center">
                                        <div> <img src="images/Construccion.2d5e16d7.svg" alt=""> 95 m<sup>2</sup>
                                        </div>
                                    </div>
                                    <div class="col-auto text-center">
                                        <div> <img src="images/Recamaras.80bb5ca6.svg" alt=""> 1 </div>
                                    </div>
                                    <div class="col-auto text-center">
                                        <div> <img src="images/Baños.0bb6462c.svg" alt=""> 1 </div>
                                    </div>
                                    <div class="col-auto text-center">
                                        <div> <img src="images/Estacionamiento.8ec53b8f.svg" alt=""> 1 </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="bg-light card mb-4 overflow-hidden">
                        <div style="position:relative;">
                            <div class="bg-danger tag">En Venta</div>
                            <div class="bg-primary price">$1'100,000.00</div> <img src="images/inmueble03.53000a3e.jpeg"
                                class="card-img-top" alt="...">
                        </div>
                        <div class="card-body"> <a href="" class="stretched-link">
                                <h5 class="card-title">Casa ubicada en calle 20</h5>
                            </a>
                            <p class="card-text h6 text-muted">Col. México, Campeche.</p>
                            <p>Casa ubicada en calle Tierra del Fraccionamiento Valle del Sol que consta de 5 recamaras,
                                3 baños, Lorem ipsum dolor sit amet... </p>
                            <div class="card-text">
                                <div class="row">
                                    <div class="col-auto text-center">
                                        <div> <img src="images/Terreno.85d8656a.svg" alt=""> 165 m<sup>2</sup> </div>
                                    </div>
                                    <div class="col-auto text-center">
                                        <div> <img src="images/Construccion.2d5e16d7.svg" alt=""> 95 m<sup>2</sup>
                                        </div>
                                    </div>
                                    <div class="col-auto text-center">
                                        <div> <img src="images/Recamaras.80bb5ca6.svg" alt=""> 1 </div>
                                    </div>
                                    <div class="col-auto text-center">
                                        <div> <img src="images/Baños.0bb6462c.svg" alt=""> 1 </div>
                                    </div>
                                    <div class="col-auto text-center">
                                        <div> <img src="images/Estacionamiento.8ec53b8f.svg" alt=""> 1 </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="bg-light card mb-4 overflow-hidden">
                        <div style="position:relative;">
                            <div class="bg-danger tag">En Venta</div>
                            <div class="bg-primary price">$800,000.00</div> <img src="images/inmueble01.e7fd8ed9.jpeg"
                                class="card-img-top" alt="...">
                        </div>
                        <div class="card-body"> <a href="" class="stretched-link">
                                <h5 class="card-title">Casa nueva en calle 14</h5>
                            </a>
                            <p class="card-text h6 text-muted">Col. Carmelo, Campeche.</p>
                            <p>Casa ubicada en calle Tierra del Fraccionamiento Valle del Sol que consta de 5 recamaras,
                                3 baños, Lorem ipsum dolor sit amet... </p>
                            <div class="card-text">
                                <div class="row">
                                    <div class="col-auto text-center">
                                        <div> <img src="images/Terreno.85d8656a.svg" alt=""> 165 m<sup>2</sup> </div>
                                    </div>
                                    <div class="col-auto text-center">
                                        <div> <img src="images/Construccion.2d5e16d7.svg" alt=""> 95 m<sup>2</sup>
                                        </div>
                                    </div>
                                    <div class="col-auto text-center">
                                        <div> <img src="images/Recamaras.80bb5ca6.svg" alt=""> 1 </div>
                                    </div>
                                    <div class="col-auto text-center">
                                        <div> <img src="images/Baños.0bb6462c.svg" alt=""> 1 </div>
                                    </div>
                                    <div class="col-auto text-center">
                                        <div> <img src="images/Estacionamiento.8ec53b8f.svg" alt=""> 1 </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="bg-light card mb-4 overflow-hidden">
                        <div style="position:relative;">
                            <div class="bg-danger tag">En Renta</div>
                            <div class="bg-primary price">$10,000.00 mensual</div> <img
                                src="images/inmueble02.65ccaf61.jpeg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body"> <a href="" class="stretched-link">
                                <h5 class="card-title">Departamento Amueblado en Av. Hidalgo</h5>
                            </a>
                            <p class="card-text h6 text-muted">El Huanal, Campeche.</p>
                            <p>Casa ubicada en calle Tierra del Fraccionamiento Valle del Sol que consta de 5 recamaras,
                                3 baños, Lorem ipsum dolor sit amet... </p>
                            <div class="card-text">
                                <div class="row">
                                    <div class="col-auto text-center">
                                        <div> <img src="images/Terreno.85d8656a.svg" alt=""> 165 m<sup>2</sup> </div>
                                    </div>
                                    <div class="col-auto text-center">
                                        <div> <img src="images/Construccion.2d5e16d7.svg" alt=""> 95 m<sup>2</sup>
                                        </div>
                                    </div>
                                    <div class="col-auto text-center">
                                        <div> <img src="images/Recamaras.80bb5ca6.svg" alt=""> 1 </div>
                                    </div>
                                    <div class="col-auto text-center">
                                        <div> <img src="images/Baños.0bb6462c.svg" alt=""> 1 </div>
                                    </div>
                                    <div class="col-auto text-center">
                                        <div> <img src="images/Estacionamiento.8ec53b8f.svg" alt=""> 1 </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="bg-light card mb-4 overflow-hidden">
                        <div style="position:relative;">
                            <div class="bg-danger tag">En Venta</div>
                            <div class="bg-primary price">$1'100,000.00</div> <img src="images/inmueble03.53000a3e.jpeg"
                                class="card-img-top" alt="...">
                        </div>
                        <div class="card-body"> <a href="" class="stretched-link">
                                <h5 class="card-title">Casa ubicada en calle 20</h5>
                            </a>
                            <p class="card-text h6 text-muted">Col. México, Campeche.</p>
                            <p>Casa ubicada en calle Tierra del Fraccionamiento Valle del Sol que consta de 5 recamaras,
                                3 baños, Lorem ipsum dolor sit amet... </p>
                            <div class="card-text">
                                <div class="row">
                                    <div class="col-auto text-center">
                                        <div> <img src="images/Terreno.85d8656a.svg" alt=""> 165 m<sup>2</sup> </div>
                                    </div>
                                    <div class="col-auto text-center">
                                        <div> <img src="images/Construccion.2d5e16d7.svg" alt=""> 95 m<sup>2</sup>
                                        </div>
                                    </div>
                                    <div class="col-auto text-center">
                                        <div> <img src="images/Recamaras.80bb5ca6.svg" alt=""> 1 </div>
                                    </div>
                                    <div class="col-auto text-center">
                                        <div> <img src="images/Baños.0bb6462c.svg" alt=""> 1 </div>
                                    </div>
                                    <div class="col-auto text-center">
                                        <div> <img src="images/Estacionamiento.8ec53b8f.svg" alt=""> 1 </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav aria-label="Paginacion Inmuebles">
                <ul class="justify-content-center my-4 pagination">
                    <li class="page-item"> <span class="page-link">Previous</span> </li>
                    <li class="active page-item" aria-current="page"><span class="page-link">1</span></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
                </ul>
            </nav>
        </div>
    </section>
    <footer class="bg-primary text-white">
        <section class="pb-3 pt-1">
            <div class="container mt-5">
                <div class="mt-3 row">
                    <div class="col-lg-5 col-md-8 col-xl-5 mb-4 mx-auto text-center text-md-start">
                        <h6 class="fw-bold mb-4 text-uppercase"> ¿Quienes Somos? </h6>
                        <p> Somos una empresa 100% campechana que nos distinguimos por prestar servicios de promoción
                            inmobiliaria a la comunidad, con una trayectoria exitosa de más de 35 años. ¡Somos los
                            líderes en el mercado a sus órdenes! </p>
                        <p>Miembro de la Asociación Mexicana de Profesionales Inmobiliarios, A.C. </p>
                        <p> Asesor Inmobiliario con Certificación Estatal.</p>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xl-2 mb-4 mx-auto text-center text-md-start">
                        <h6 class="fw-bold mb-4 text-uppercase"> Inmuebles </h6>
                        <p> <a href="#!" class="text-reset">Casas</a> </p>
                        <p> <a href="#!" class="text-reset">Locales</a> </p>
                        <p> <a href="#!" class="text-reset">Fraccionamientos</a> </p>
                        <p> <a href="#!" class="text-reset">Terrenos</a> </p>
                    </div>
                    <div class="col-lg-4 col-lx-5 col-md-12 mb-4 mb-md-0 mx-auto">
                        <div class="row">
                            <div class="col-12">
                                <h6 class="fw-bold mb-4 text-center text-lg-start text-uppercase"> Contacto </h6>
                            </div>
                            <div class="col-12 mb-auto mb-sm-4 mb-xxl-0">
                                <div style="position:absolute;"><i class="bi-house-fill"></i></div>
                                <div style="margin-left:32px;">
                                    <p>Av. Miguel Alemán No. 22 planta baja entre 47 y 49-A, Barrio de Guadalupe. San
                                        Francisco de Campeche, Campeche, México.</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div style="position:absolute;"><i class="bi-phone-fill"></i></div>
                                <div style="margin-left:32px;">
                                    <p>Móvil: 981.829.0301</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div style="position:absolute;"><i class="bi-telephone-fill"></i></div>
                                <div style="margin-left:32px;">
                                    <p>Oficina: 981.816.2326</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="bg-black bg-opacity-25 p-3 text-center"> ©2021 Todos los derechos reservados -
            www.gallardobienesraices.com </div>
    </footer>

    