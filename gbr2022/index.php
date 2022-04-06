<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
   
     <head>
        <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <jdoc:include type="head" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/index.f31f9d09.css" type="text/css" />
    </head>

    <body class="bg-black bg-opacity-10">
    <header>
        <div class="bg-danger">
          <nav class="navbar navbar-dark navbar-expand-lg">
                <div class="container"> <a class="d-md-none navbar-brand"
                        style="margin-top:-5px;margin-bottom:-35px;z-index:100;" href="<?php echo JURI::root(); ?>"><img
                            src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/logo_ico_a.46ebc986.svg" alt="Gallardo Bienes Raíces" class="me-2" height="64"></a> <a
                        class="bg-white d-md-block d-none navbar-brand p-3"
                        style="margin-top:-15px;margin-bottom:-35px;z-index:100;" href="<?php echo JURI::root(); ?>"><img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/logo.625825ed.svg"
                            alt="Gallardo Bienes Raíces" width="160"></a> <button class="navbar-toggler" type="button"
                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span> </button>
                    <div class="fs-5 offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">Enlaces Rápidos</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <jdoc:include type="modules" name="navbar" />
                        <hr class="d-lg-none text-white"> <span class="navbar-text"><a
                                    href="https://wa.me/529818290301" class="link-light me-2 text-decoration-none"><i
                                        class="fa-brands fa-whatsapp"></i></a> <a
                                    href="https://www.facebook.com/gallardobienesraices"
                                    class="link-light me-2 text-decoration-none"><i
                                        class="fa-brands fa-facebook"></i></a> <a href="tel:+529818290301"
                                    class="link-light text-decoration-none"><i class="fa-phone-flip fa-solid"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
            </nav>


        </div>
        <div>
            <jdoc:include type="modules" name="cover" />
        </div>
    </header>
    <div class="bg-primary sticky-lg-top">
            <jdoc:include type="modules" name="searchbar" />
    </div>
    <section id="breadcrumbs">
            <jdoc:include type="modules" name="breadcrumb" />
    </section>
    <section id="top">
            <jdoc:include type="modules" name="top" />
    </section>
    <section id="component">
            <jdoc:include type="component" />
    </section>
    <section id="bottom">
            <jdoc:include type="modules" name="bottom" />
    </section>
    <footer class="bg-primary bg-gradient text-white">
            <jdoc:include type="modules" name="footer" />
    </footer>

    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/index.49bfa73c.js"></script>
    </body> 
</html> 
    