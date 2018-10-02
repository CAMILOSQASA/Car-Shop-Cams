<!DOCTYPE html>

<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->

<html class="no-js" lang="en">
    <!--<![endif]-->
    <head>
        <!--- basic page needs
        ================================================== -->
        <meta charset="utf-8">
        <title>Car Shop Cams</title>
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- mobile specific metas
    ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS
        ================================================== -->
        <link href="resources/css/base.css" rel="stylesheet" type="text/css"/>
        <link href="resources/css/vendor.css" rel="stylesheet" type="text/css"/>
        <link href="resources/css/main.css" rel="stylesheet" type="text/css"/>

        <!-- script
    ================================================== -->
        <script src="resources/js/modernizr.js" type="text/javascript"></script>
        <script src="resources/js/pace.min.js" type="text/javascript"></script>
        <script src="resources/js/login.js" type="text/javascript"></script>

        <!-- favicons   
        ================================================== -->
        <link rel="shortcut icon" href="resources/icono.ico" type="image/x-icon">
        <link rel="icon" href="resources/icono.ico" type="image/x-icon">

    </head>
    <body id="top">
        <!-- header
     ================================================== -->
        <header class="s-header">
            <div class="header-logo">
                <a class="site-logo" href="index.php">
                    <img src="resources/images/LOGO.png" alt="Homepage"/>
                </a>
            </div>
            <nav class="header-nav">
                <a href="#0" class="header-nav__close" title="close"><span>Cerrar</span></a>
                <div class="header-nav__content">
                    <h3>Bienvenido a Car Shop CAMS</h3>
                    <ul class="header-nav__list">
                        <li class="current"><a class="smoothscroll"  href="#home" title="home">Inicio</a></li>
                        <li><a class="smoothscroll"  href="#about" title="about">Sobre Nosotros</a></li>
                        <li><a class="smoothscroll"  href="#services" title="services">Servicios</a></li>
                        <li><a class="smoothscroll"  href="#works" title="works">Trabajo</a></li>
                        <li><a class="smoothscroll"  href="#clients" title="clients">Clientes</a></li>
                        <li><a class="smoothscroll"  href="#contact" title="contact">Contacto</a></li>
                    </ul>
                    <p>Te damos la bienvenida de parte del gerente del aplicativo Camilo Andres Amaya Granados <a href='https://www.facebook.com/CAMILO12RAP2'>FACEBOOK CAMS</a> que disfrutes tu experiencia.</p>
                    <ul class="header-nav__social">
                        <li>
                            <a href="https://www.facebook.com/CAMILO12RAP2"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/camilo12rap2"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/camilo12rap2/"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div> <!-- end header-nav__content -->
            </nav>  <!-- end header-nav -->
            <a class="header-menu-toggle" href="#0">
                <span class="header-menu-text">Menú</span>
                <span class="header-menu-icon"></span>
            </a>
        </header> <!-- end s-header -->
        <!-- home
    ================================================== -->
        <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="resources/images/hero-bg.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>
            <div class="overlay"></div>
            <div class="shadow-overlay"></div>
            <div class="home-content">
                <div class="row home-content__main">
                    <h3>BIENVENIDO A CAR SHOP CAMS</h3>
                    <h1>
                        Somos un concesionario virtual <br>
                        para las personas que desean <br>
                        buscar un vehículo nuevo o <br>
                        usado para facilitar su movilidad.
                    </h1>
                    <div class="home-content__buttons">
                        <a href="login.php" class="smoothscroll btn btn--stroke" onclick="login();" id="login">
                            Ingresar
                        </a>
                        <a href="#about" class="smoothscroll btn btn--stroke">
                            Registrarse
                        </a>
                    </div>
                </div>
                <div class="home-content__scroll">
                    <a href="#about" class="scroll-link smoothscroll">
                        <span>Baja y conocenos</span>
                    </a>
                </div>
                <div class="home-content__line"></div>
            </div> <!-- end home-content -->
            <ul class="home-social">
                <li>
                    <a href="https://www.facebook.com/CAMILO12RAP2"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a>
                </li>
                <li>
                    <a href="https://twitter.com/camilo12rap2"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twiiter</span></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/camilo12rap2/"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
                </li>
            </ul> 
            <!-- end home-social -->
        </section> <!-- end s-home -->
        <!-- about
            ================================================== -->
        <section id='about' class="s-about">

            <div class="row section-header has-bottom-sep" data-aos="fade-up">
                <div class="col-full">
                    <h3 class="subhead subhead--dark">BIENVENIDOS A CAR SHOP CAMS</h3>
                    <h1 class="display-1 display-1--light">¿QUIENES SOMOS?</h1>
                </div>
            </div> <!-- end section-header -->

            <div class="row about-desc" data-aos="fade-up">
                <div class="col-full">
                    <p>
                        Car Shop Cams es una compañía de ventas de autos de fabrica o de segunda mano para que nuestros clientes tomen la decisión de movilizarse en su propio automotor.
                    </p>
                </div>
            </div> <!-- end about-desc -->

            <div class="row about-stats stats block-1-4 block-m-1-2 block-mob-full" data-aos="fade-up">

                <div class="col-block stats__col ">
                    <div class="stats__count">5000</div>
                    <h5>Autos Registrados</h5>
                </div>
                <div class="col-block stats__col">
                    <div class="stats__count">250</div>
                    <h5>Marcas Registradas</h5>
                </div>
                <div class="col-block stats__col">
                    <div class="stats__count">600</div>
                    <h5>Autos Vendidos</h5>
                </div>
                <div class="col-block stats__col">
                    <div class="stats__count">12500</div>
                    <h5>Autos Comprados</h5> 
                </div>

            </div> <!-- end about-stats -->

            <div class="about__line"></div>

        </section> <!-- end s-about -->


        <!-- services
        ================================================== -->
        <section id='services' class="s-services">

            <div class="row section-header has-bottom-sep" data-aos="fade-up">
                <div class="col-full">
                    <h3 class="subhead">¿Que hacemos?</h3>
                    <h1 class="display-2">Dentro de nuestras funciones están las siguientes: </h1>
                </div>
            </div> <!-- end section-header -->

            <div class="row services-list block-1-2 block-tab-full">

                <div class="col-block service-item" data-aos="fade-up">
                    <div class="service-icon">
                        <i class="icon-attachment"></i>
                    </div>
                    <div class="service-text">
                        <h3 class="h2">Publicación de anuncios.</h3>
                        <p class="pb">Publicamos tu automovil por un asequible precio para que pueda vender su auto de primera o de segunda mano.
                        </p>
                    </div>
                </div>

                <div class="col-block service-item" data-aos="fade-up">
                    <div class="service-icon">
                        <i class="icon-badge"></i>
                    </div>
                    <div class="service-text">
                        <h3 class="h2">Calificación del vendedor.</h3>
                        <p class="pb">Si desea puede calificar al vendedor del automotor para que en el futuro este tenga mayor credibilidad y pueda crecer dentro del aplicativo.  
                        </p>
                    </div>
                </div>

                <div class="col-block service-item" data-aos="fade-up">
                    <div class="service-icon">
                        <i class="icon-at"></i>
                    </div>  
                    <div class="service-text">
                        <h3 class="h2">Manejo de correos electrónicos.</h3>
                        <p class="pb">En el aplicativo se le confirmara su correo de contacto y las publicaciones de ventas y compras que fueron finalizadas con éxito.    
                        </p>
                    </div>
                </div>

                <div class="col-block service-item" data-aos="fade-up">
                    <div class="service-icon">
                        <i class="icon-bank-note"></i>
                    </div>
                    <div class="service-text">
                        <h3 class="h2">Manejo financiero.</h3>
                        <p class="pb">El aplicativo maneja tus finanzas sobre los procesos de venta y compra de los productos ofrecidos por los demás usuarios.
                        </p>
                    </div>
                </div>

                <div class="col-block service-item" data-aos="fade-up">
                    <div class="service-icon">
                        <i class="icon-car"></i>
                    </div>
                    <div class="service-text">
                        <h3 class="h2">Autos usuados y nuevos.</h3>
                        <p class="pb">Busca el vehículo que quiera y acuerda el precio con el vendedor para realizarlo.
                        </p>
                    </div>
                </div>

                <div class="col-block service-item" data-aos="fade-up">
                    <div class="service-icon">
                        <i class="icon-comment"></i>
                    </div>
                    <div class="service-text">
                        <h3 class="h2">Comenta publicaciones de los demas usuarios.</h3>
                        <p class="pb">Colabora y comenta las publicaciones que te interesen.
                        </p>
                    </div>
                </div>

            </div> <!-- end services-list -->

        </section> <!-- end s-services -->


        <!-- works
        ================================================== -->
        <section id='works' class="s-works">

            <div class="intro-wrap">

                <div class="row section-header has-bottom-sep light-sep" data-aos="fade-up">
                    <div class="col-full">
                        <h3 class="subhead2">Autos</h3>
                        <h1 class="display-2 display-2--light">
                            Nos encanta lo que hacemos, echa un vistazo a algunos de nuestros autos</h1>
                    </div>
                </div> <!-- end section-header -->

            </div> <!-- end intro-wrap -->

            <div class="row works-content">
                <div class="col-full masonry-wrap">
                    <div class="masonry">

                        <div class="masonry__brick" data-aos="fade-up">
                            <div class="item-folio">

                                <div class="item-folio__thumb">
                                    <a href="resources/images/portfolio/gallery/R8.jpg" class="thumb-link" title="Shutterbug" data-size="1050x700">
                                        <img src="resources/images/portfolio/R8.jpg" 
                                             srcset="resources/images/portfolio/R8.jpg 1x, resources/images/portfolio/R8.jpg 2x" alt="">
                                    </a>
                                </div>

                                <div class="item-folio__text">
                                    <h3 class="item-folio__title">
                                        Audi R8
                                    </h3>
                                    <p class="item-folio__cat">
                                        Marca : Audi <br>
                                        Modelo: R8<br>
                                        Año: 2018
                                    </p>
                                </div>

                                <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                    <i class="icon-link"></i>
                                </a>

                                <div class="item-folio__caption">
                                    <p>El nuevo Audi R8 Coupé establece nuevos estándares: Con 610 caballos de fuerza, 330 km / hy una aceleración de 0 a 100 km / h en 3,2 segundos tiene la versión tope de gama del Audi R8 V10 además de un impresionante rendimiento que subraya el diseño más riguroso. El Audi R8 Coupé lleva sin lugar a dudas el deporte del motor en sus genes.</p>
                                </div>

                            </div>
                        </div> <!-- end masonry__brick -->

                        <div class="masonry__brick" data-aos="fade-up">
                            <div class="item-folio">

                                <div class="item-folio__thumb">
                                    <a href="resources/images/portfolio/gallery/LaFerrari.jpg" class="thumb-link" title="Woodcraft" data-size="1050x700">
                                        <img src="resources/images/portfolio/LaFerrari.jpg" 
                                             srcset="resources/images/portfolio/LaFerrari.jpg 1x, resources/images/portfolioLaFerrariX2.jpg 2x" alt="">
                                    </a>
                                </div>

                                <div class="item-folio__text">
                                    <h3 class="item-folio__title">
                                        Ferrari LaFerrari
                                    </h3>
                                    <p class="item-folio__cat">
                                        Marca: Ferrari <br>
                                        Modelo: LaFerrari <br>
                                        Año: 2018
                                    </p>
                                </div>

                                <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                    <i class="icon-link"></i>
                                </a>

                                <div class="item-folio__caption">
                                    <p>El Ferrari LaFerrari (también conocido por su nombre de proyecto, F150 o F70) es un automóvil superdeportivo híbrido de edición limitada del fabricante italiano Ferrari. El automóvil y su nombre definitivo fueron revelados oficialmente en el Salón del Automóvil de Ginebra de 2013. Es el sucesor del Ferrari Enzo, y se fabricarán 499 unidades del modelo; su precio inicial es de 2 millones de dólares.
                                    </p>
                                </div>

                            </div>
                        </div> <!-- end masonry__brick -->

                        <div class="masonry__brick" data-aos="fade-up">
                            <div class="item-folio">

                                <div class="item-folio__thumb">
                                    <a href="resources/images/portfolio/gallery/KTM.jpg" class="thumb-link" title="2015 Magna Steyr MILA Plus Hybrid" data-size="1050x700">
                                        <img src="resources/images/portfolio/KTM.jpg"
                                             srcset="resources/images/portfolio/KTM.jpg 1x, resources/images/portfolio/KTMX2.jpg 2x" alt="">
                                    </a>
                                </div>

                                <div class="item-folio__text">
                                    <h3 class="item-folio__title">
                                        KTM X BOW
                                    </h3>
                                    <p class="item-folio__cat">
                                        Marca: KTM <br>
                                        Modelo: X Bow <br>
                                        Año: 2013
                                    </p>
                                </div>

                                <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                    <i class="icon-link"></i>
                                </a>

                                <div class="item-folio__caption">
                                    <p>El KTM X-Bow es un automóvil deportivo producido por el fabricante austríaco KTM desde 2008. Es un biplaza, con motor central trasero y tracción trasera. Se destaca por ser el primer y único automóvil construido por la marca desde su fundación.</p>
                                </div>

                            </div>
                        </div> <!-- end masonry__brick -->

                        <div class="masonry__brick" data-aos="fade-up">
                            <div class="item-folio">

                                <div class="item-folio__thumb">
                                    <a href="resources/images/portfolio/gallery/OPEL.jpg" class="thumb-link" title="Grow Green" data-size="1050x700">
                                        <img src="resources/images/portfolio/OPEL.jpg" 
                                             srcset="resources/images/portfolio/OPEL.jpg 1x, resources/images/portfolio/OPELX2.jpg 2x" alt="">
                                    </a>
                                </div>

                                <div class="item-folio__text">
                                    <h3 class="item-folio__title">
                                        OPEL Vivaro.
                                    </h3>
                                    <p class="item-folio__cat">
                                        Marca: OPEL <br>
                                        Modelo: Vivaro <br>
                                        Año: 2010 
                                    </p>
                                </div>

                                <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                    <i class="icon-link"></i>
                                </a>

                                <div class="item-folio__caption">
                                    <p>El Vivaro Furgón no sólo será tu mejor tarjeta de visita, su diseño contribuye a facilitar el día a día. Por ejemplo, con una amplia visión general gracias a sus amplias superficies acristaladas. El  Sistema de Iluminación Diurna LED.</p>
                                </div>

                            </div>
                        </div> <!-- end masonry__brick -->

                        <div class="masonry__brick" data-aos="fade-up">
                            <div class="item-folio">

                                <div class="item-folio__thumb">
                                    <a href="resources/images/portfolio/gallery/Subaru.jpg" class="thumb-link" title="Guitarist" data-size="1050x700">
                                        <img src="resources/images/portfolio/Subaru.jpg" 
                                             srcset="resources/images/portfolio/Subaru.jpg 1x, resources/images/portfolio/SubaruX2.jpg 2x" alt="">
                                    </a>
                                </div>

                                <div class="item-folio__text">
                                    <h3 class="item-folio__title">
                                        Subaru WRX STI
                                    </h3>
                                    <p class="item-folio__cat">
                                        Marca: Subaru <br>
                                        Modelo: WRX STI <br>
                                        Año: 2018
                                    </p>
                                </div>

                                <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                    <i class="icon-link"></i>
                                </a>

                                <div class="item-folio__caption">
                                    <p>Descubra Subaru WRX STI, un impresionante deportivo único en su especie. Su avanzada tecnología aumenta su confianza y desata pasión en cada curva.</p>
                                </div>

                            </div>
                        </div> <!-- end masonry__brick -->

                        <div class="masonry__brick" data-aos="fade-up">
                            <div class="item-folio">

                                <div class="item-folio__thumb">
                                    <a href="resources/images/portfolio/gallery/Jetta.jpg" class="thumb-link" title="Palmeira" data-size="1050x700">
                                        <img src="resources/images/portfolio/Jetta.jpg"
                                             srcset="resources/images/portfolio/Jetta.jpg 1x, resources/images/portfolio/JettaX2.jpg 2x" alt="">
                                    </a>
                                </div>

                                <div class="item-folio__text">
                                    <h3 class="item-folio__title">
                                        Volkswagen Jetta GLI
                                    </h3>
                                    <p class="item-folio__cat">
                                        Marca: Volkswagen <br>
                                        Modelo: Jetta GLI <br>
                                        Año: 2017
                                    </p>
                                </div>

                                <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                    <i class="icon-link"></i>
                                </a>

                                <div class="item-folio__caption">
                                    <p>El Volkswagen Jetta es un automóvil del segmento C, producido por el fabricante alemán Volkswagen desde 1979. El Jetta existe en versiones sedán y familiar (vagoneta "Variant"); es básicamente una variante del Volkswagen Golf, que es un hatchback (aunque algunos familiares han llevado el nombre "Golf Variant").</p>
                                </div>

                            </div>
                        </div> <!-- end masonry__brick -->

                    </div> <!-- end masonry -->
                </div> <!-- end col-full -->
            </div> <!-- end works-content -->

        </section> <!-- end s-works -->


        <!-- clients
        ================================================== -->
        <section id="clients" class="s-clients">

            <div class="row section-header" data-aos="fade-up">
                <div class="col-full">
                    <h3 class="subhead">Nuestros Cliente</h3>
                    <h1 class="display-2">Car Shop Cams ha tenido el honor de
                        asociarse con estos clientes</h1>
                </div>
            </div> <!-- end section-header -->

            <div class="row clients-outer" data-aos="fade-up">
                <div class="col-full">
                    <div class="clients">

                        <a href="#0" title="" class="clients__slide"><img src="resources/images/clients/apple.png" /></a>
                        <a href="#0" title="" class="clients__slide"><img src="resources/images/clients/atom.png" /></a>
                        <a href="#0" title="" class="clients__slide"><img src="resources/images/clients/blackberry.png" /></a>
                        <a href="#0" title="" class="clients__slide"><img src="resources/images/clients/dropbox.png" /></a>
                        <a href="#0" title="" class="clients__slide"><img src="resources/images/clients/envato.png" /></a>
                        <a href="#0" title="" class="clients__slide"><img src="resources/images/clients/firefox.png" /></a>
                        <a href="#0" title="" class="clients__slide"><img src="resources/images/clients/joomla.png" /></a>
                        <a href="#0" title="" class="clients__slide"><img src="resources/images/clients/magento.png" /></a>

                    </div> <!-- end clients -->
                </div> <!-- end col-full -->
        </section> <!-- end s-clients -->
        <!-- contact
        ================================================== -->
        <section id="contact" class="s-contact">

            <div class="overlay"></div>
            <div class="contact__line"></div>

            <div class="row section-header" data-aos="fade-up">
                <div class="col-full">
                    <h3 class="subhead2">Comunicate con nosotros</h3>
                    <h1 class="display-2 display-2--light">Si quieres comunicarte llena el formulario.</h1>
                </div>
            </div>

            <div class="row contact-content" data-aos="fade-up">

                <div class="contact-primary">

                    <h3 class="h6">Envia un mensaje</h3>

                    <form name="contactForm" id="contactForm" method="post" action="" novalidate="novalidate">
                        <fieldset>

                            <div class="form-field">
                                <input name="contactName" type="text" id="contactName" placeholder="Nombre: " value="" minlength="2" required="" aria-required="true" class="full-width">
                            </div>
                            <div class="form-field">
                                <input name="contactEmail" type="email" id="contactEmail" placeholder="Email: " value="" required="" aria-required="true" class="full-width">
                            </div>
                            <div class="form-field">
                                <input name="contactSubject" type="text" id="contactSubject" placeholder="Asunto: " value="" class="full-width">
                            </div>
                            <div class="form-field">
                                <textarea name="contactMessage" id="contactMessage" placeholder="Mensaje; " rows="10" cols="50" required="" aria-required="true" class="full-width"></textarea>
                            </div>
                            <div class="form-field">
                                <button class="full-width btn--primary">Enviar</button>
                                <div class="submit-loader">
                                    <div class="text-loader">Enviando...</div>
                                    <div class="s-loader">
                                        <div class="bounce1"></div>
                                        <div class="bounce2"></div>
                                        <div class="bounce3"></div>
                                    </div>
                                </div>
                            </div>

                        </fieldset>
                    </form>

                    <!-- contact-warning -->
                    <div class="message-warning">
                        Correo no enviado verfique los campos ingresados.
                    </div> 

                    <!-- contact-success -->
                    <div class="message-success">
                        Correo enviado.<br>
                    </div>

                </div> <!-- end contact-primary -->

                <div class="contact-secondary">
                    <div class="contact-info">

                        <h3 class="h6 hide-on-fullwidth">INFORMACIÓN DE CONTACTO</h3>

                        <div class="cinfo">
                            <h5>Encuentranos en: </h5>
                            <p class="blanco">
                                Carrera 77 # 70-96 <br>
                                Bogota D.C.
                            </p>
                        </div>

                        <div class="cinfo">
                            <h5>Correo de contacto</h5>
                            <p class="blanco">
                                camiloamayagr@gmail.com <br>
                                caamaya906@misena.edu.co
                            </p>
                        </div>

                        <div class="cinfo">
                            <h5>Llamanos a:</h5>
                            <p class="blanco">
                                Phone: (+57) 2514730<br>
                                Mobile: (+57) 312 571 2537<br>
                                Mobile: (+57) 315 735 2372
                            </p>
                        </div>

                        <ul class="contact-social">
                            <li>
                                <a href="https://www.facebook.com/CAMILO12RAP2"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/camilo12rap2"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/camilo12rap2/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
                        </ul> <!-- end contact-social -->

                    </div> <!-- end contact-info -->
                </div> <!-- end contact-secondary -->

            </div> <!-- end contact-content -->

        </section> <!-- end s-contact -->


        <!-- footer
        ================================================== -->
        <footer>

            <div class="row footer-main">

                <div class="col-six tab-full left footer-desc">

                    <div class="footer-logo"></div>
                    Somos un concesionario virtual 
                    para las personas que desean 
                    buscar un vehículo nuevo o 
                    usado para facilitar su movilidad.

                </div>

                <div class="col-six tab-full right footer-subscribe">

                    <h4>Mantente Informado</h4>
                    <p>Ingresa tu correo para poder recibir notificaiones al mismo.</p>

                    <div class="subscribe-form">
                        <form id="mc-form" class="group" novalidate="true">
                            <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Ingrese su correo" required="">
                            <input type="submit" name="subscribe" value="Suscribete">
                            <label for="mc-email" class="subscribe-message"></label>
                        </form>
                    </div>

                </div>

            </div> <!-- end footer-main -->

            <div class="row footer-bottom">

                <div class="col-twelve">
                    <div class="copyright">
                        <span>© Copyright CAR SHOP CAMS 2018</span> 
                        <span>Lugar de recursos graficos: <a href="https://www.colorlib.com/">Colorlib</a></span>	
                    </div>

                    <div class="go-top">
                        <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
                    </div>
                </div>

            </div> <!-- end footer-bottom -->

        </footer> <!-- end footer -->


        <!-- photoswipe background
        ================================================== -->
        <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

            <div class="pswp__bg"></div>
            <div class="pswp__scroll-wrap">

                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>

                <div class="pswp__ui pswp__ui--hidden">
                    <div class="pswp__top-bar">
                        <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                                                                                                                                                "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                                                                                                                                                "Zoom in/out"></button>
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                                <div class="pswp__preloader__cut">
                                    <div class="pswp__preloader__donut"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div>
                    </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                                                                                                                                 "Next (arrow right)"></button>
                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>
                </div>

            </div>

        </div> <!-- end photoSwipe background -->


        <!-- preloader
        ================================================== -->
        <div id="preloader">
            <div id="loader">
                <div class="line-scale-pulse-out">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>


        <!-- Java Script
        ================================================== -->
        <script src="resources/js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="resources/js/plugins.js" type="text/javascript"></script>
        <script src="resources/js/main.js" type="text/javascript"></script>
    </body>
</html>
