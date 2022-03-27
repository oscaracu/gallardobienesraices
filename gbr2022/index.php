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
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/index.6f8723d7.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/index.e5264d3b.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/index.ab70d727.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/index.9a515bc7.css" type="text/css" />
    </head>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/index.3287fdc4.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/index.9d222439.js"></script>

    <body class="bg-black bg-opacity-10">
    <header>
        <div class="bg-danger">
            <nav class="bg-white d-block d-lg-none navbar navbar-light">
                <div class="container-fluid"> <a class="navbar-brand" href="<?php echo JURI::root(); ?>"><img class="mx-auto" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/logo.aaaf9e15.png" alt="Gallardo Bienes Raices"></a>
                             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                            <jdoc:include type="modules" name="navbar-hidden" />
                </div>
            </nav>
            <nav class="bg-black bg-gradient bg-opacity-25 d-lg-block d-none navbar navbar-dark navbar-expand" id="barNavLg">
                <div class="container"> <a class="bg-white navbar-brand p-3" style="margin-top:-15px;margin-bottom:-45px;z-index:100;" href="<?php echo JURI::root(); ?>"><img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/logo.aaaf9e15.png" alt="Gallardo Bienes Raices"></a>
                            <jdoc:include type="modules" name="navbar" />
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
    <footer class="bg-primary text-white">
            <jdoc:include type="modules" name="footer" />
    </footer>
    <script type="module" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/index.f1f1f8b9.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/index.4e7765de.js"></script>
    </body>
</html>
    