<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="favicon.ico">
        <title>Einco</title>

        <meta name="description" content="ingenieria civil y construccion">
        <meta name="keywords" content="contruccion, ingenieria">
        <meta name="author" content="YLIT">

        <!-- Mobile Specific Metas
        ================================================== -->        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
                                <!-- My Own Custom Twitter Bootstrs CSS -->
        <link rel="stylesheet" href="<?php base_url() ?>assets/bootstrap/dist/css/home.css">

        <link rel="stylesheet" href="<?php base_url() ?>assets/bootstrap/dist/css/bootstrap.min.css">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <!-- Ionicons Fonts Css -->
        <link rel="stylesheet" href="<?php base_url() ?>assets/home/plugins/ionicons/ionicons.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="<?php base_url() ?>assets/home/plugins/animate-css/animate.css">
        <!-- Hero area slider css-->
        <link rel="stylesheet" href="<?php base_url() ?>assets/home/plugins/slider/slider.css">
        <!-- owl craousel css -->
        <link rel="stylesheet" href="<?php base_url() ?>assets/home/plugins/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="<?php base_url() ?>assets/home/plugins/owl-carousel/owl.theme.css">
        <!-- Fancybox -->
        <link rel="stylesheet" href="<?php base_url() ?>assets/home/plugins/facncybox/jquery.fancybox.css">
        <!-- template main css file -->
        <link rel="stylesheet" href="<?php base_url() ?>assets/home/css/style.css">

    </head>

    <body>

        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
            <!-- logo -->
            <div class="navbar-brand">
                <a href="<?php base_url() ?>" >
                    <img src="<?php base_url() ?>assets/home/images/logo.jpg" alt="">
                </a>
            </div>
            <!-- /logo -->

            <!-- Brand -->
            <a class="navbar-brand" href="<?php base_url() ?>">EINCO</a>
            <!-- /Brand -->


            <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarT">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarT">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#about">Quienes Somos<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#mision">Misión/Visión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#values">Valores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#organigram">Organigrama</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php base_url() ?>mail/">Contacto</a>
                    </li>
                </ul>
            </div>
        </nav>
        

<!--
==================================================
Slider Section Start
================================================== 
<section id="hero-area" >
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="block wow fadeInUp" data-wow-delay=".3s">
                <!- Slider ->
                <section class="cd-intro">
                    <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >
                    <span>EINCO Soluciones.</span><br>
                    <span class="cd-words-wrapper">
                        <b class="is-visible">Ingeniería Civil</b>
                        <b class="is-visible">Obras</b>
                        <b class="is-visible">Construcción</b>
                    </span>
                    </h1>
                    </section> <!- cd-intro ->
                    <!- /.slider ->
                    <h2 class="wow fadeInUp animated" data-wow-delay=".6s" >
                        Empresa de servicios profesionales de alta calificación en ingeniería civil.
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>
    <!- /#main-slider ->
-->

<!--
==================================================
Carousel Section Start
================================================== -->
<section class="ecarousel" id="eincocarousel" >

    <span class="opacar">
        <img src="link de su imagen">
    </span> 
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="block wow fadeInUp" data-wow-delay=".3s">
                <!-- Slider -->
                <section class="cd-intro">
                    <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >
                    <span>EINCO Soluciones.</span><br>
                    <span class="cd-words-wrapper">
                        <b class="is-visible">Ingeniería Civil</b>
                        <b class="is-visible">Obras</b>
                        <b class="is-visible">Construcción</b>
                    </span>
                    </h1>
                    </section> <!-- cd-intro -->
                    <!-- /.slider -->
                    <h2 class="wow fadeInUp animated" data-wow-delay=".6s" >
                        Empresa de servicios profesionales de alta calificación en ingeniería civil.
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section><!--/#main-carousel-->

<!--
==================================================
QSomos Section Start
================================================== -->
<section class="qsomos" id="about">
    <div class="container" style="margin-top:30px">
        <div class="row">
            <div id="module" class="container">
                <h1>Quienes Somos</h1>
                <h5>EINCO SOLUCIONES SpA.</h5>
                <p>Es una empresa chilena de servicios profesionales de 
                    alta calificación en ingeniería civil, referente en el mercado por su 
                    especialización y excelencia en los servicios que ofrece a sus clientes 
                    tanto en ingeniería como en consultoría multidisciplinar.</p>
                <!--<button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#collapseQsomos">Leer más</button>-->
                <a role="button" class="collapsed" data-toggle="collapse" 
                    href="#collapseQsomos" aria-expanded="false" aria-controls="collapseQsomos">
                </a>
                <div id="collapseQsomos" class="collapse">
                    Con una trayectoria 
                    profesional ejemplar y un servicio basado siempre en la excelencia, la 
                    proyección de EINCO SOLUCIONES destaca significativamente en el mercado 
                    nacional y su crecimiento es emergente en el ámbito internacional. 
                    Las áreas de actividad de EINCO SOLUCIONES incluyen sectores tales como:

                    <ul>
                        <li>- Estructuras en hormigón y acero.</li>
                        <li>- Ingeniería de Puentes y vialidades.</li>
                        <li>- Análisis dinámico y sismorresistente.</li>
                        <li>- Obras civiles, restauración y mantenimiento.</li>
                        <li>- Alcantarillados y drenajes.</li>
                        <li>- Acueductos.</li>
                        <li>- Análisis de costos.</li>
                        <li>- Movimientos de tierra, topografía y geomensura.</li>
                        <li>- Obras eléctricas baja y media tensión.</li>
                        <li>- Inspección de obras civiles y de electricidad.</li>
                        <li>- Ingeniería Geotécnica y prospección.</li>
                    </ul> 
                </div>
            </div>
            <div class="col-sm-4">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <img src="<?php base_url() ?>assets/home/images/qsomos.jpg" alt="">
                    </li>
                </ul>
                <hr class="d-sm-none">
            </div>
        </div>
    </div>
</section> 
<!-- /#about -->

<!--
==================================================
Mision Section Start
================================================== -->
<section class="mvision" id="mision">
    <div class="container" style="margin-top:30px">
        <div class="row">

            <!-- Columna Derecha  -->
            <div class="col-sm-4">
                <div>
                    <div class="fakeimg"><h1>Misión</h1></div>
                    <a role="button" class="collapsed" data-toggle="collapse" 
                    href="#collapseQsomos" aria-expanded="false" aria-controls="collapseQsomos">
                    </a>
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <img src="<?php base_url() ?>assets/home/images/qsomos.jpg" alt="">
                        </li>
                    </ul>
                    
                    <hr class="d-sm-none">
                </div>

                <div>
                    <div class="fakeimg"><h1>Visión</h1></div>
                    <a role="button" class="collapsed" data-toggle="collapse" 
                    href="#collapseQsomos" aria-expanded="false" aria-controls="collapseQsomos">
                    </a>
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <img src="<?php base_url() ?>assets/home/images/qsomos.jpg" alt="">
                        </li>
                    </ul>
                    <hr class="d-sm-none">
                </div>

            </div>
            <!-- Columna Derecha  -->

            <!-- Columna Izquierda  -->
            <div class="col-sm-8">
                <div id="module" class="container">
                    <h1>Misión</h1>
                    <h5>EINCO SOLUCIONES SpA.</h5>
                    <p>Somos un grupo de profesionales altamente motivado, que tienen muy claro el papel 
                    y las responsabilidades asociadas a los valores de nuestro trabajo, para proporcionar 
                    a nuestros consumidores, un servicio de excelencia en consultoría, 
                    ingeniería y construcción, a través de metas y objetivos comunes con nuestros 
                    clientes: costo, calidad, seguridad, y cumplimiento de plazos. </p>
                    <a role="button" class="collapsed" data-toggle="collapse" 
                        href="#collapseMision" aria-expanded="false" aria-controls="collapseMision">
                    </a>
                    <div id="collapseMision" class="collapse">
                         Capaces de proporcionar
                     una amplia gama de habilidades técnicas, efectividad personal, liderazgo y el uso de
                      una lógica rigurosa y métodos para responder con soluciones efectivas a problemas 
                      complejos. Buscamos satisfacer al cliente en todas las perspectivas, siempre 
                      focalizados en la calidad, ya que nos basamos en la experiencia y excelencia
                       profesional.
                    </div>
                </div>

                <div id="module" class="container">
                    <h1>Visión</h1>
                    <h5>EINCO SOLUCIONES SpA.</h5>
                    <p>De nuestra empresa, es ser considerada por nuestros clientes, competidores, trabajadores 
                    y la sociedad en general, como una Empresa seria, con altos estándares de seguridad, 
                    calidad y productividad, Por lo que se proyecta como una empresa estable y confiable 
                    en el mercado laboral. </p>
                    <a role="button" class="collapsed" data-toggle="collapse" 
                        href="#collapseVision" aria-expanded="false" aria-controls="collapseVision">
                    </a>
                    <div id="collapseVision" class="collapse">
                        Estamos en continua búsqueda de soluciones constructivas y 
                    técnicas para satisfacer las necesidades de nuestros clientes.
                    </div>
                </div>
            </div>
        </div>
    </div>    
</section> <!-- /#feature -->

<!--
==================================================
Values Section Start
================================================== -->
<section class="vals" id="values">
    <div class="container" style="margin-top:30px">
        <div class="row">
            <div id="module" class="container">
                <h1>Valores</h1>
                <h5>EINCO SOLUCIONES SpA.</h5>
                <p>Para llevar a cabo nuestro trabajo y los proyectos de nuestros clientes, 
                    nos basamos en la siguiente cadena de valor;</p>

                    <ul>
                        <li>Confianza.</li>
                        <li>Eficiencia.</li>
                        <li>Transparencia.</li>
                        <li>Compromiso.</li>
                        <li>Responsabilidad.</li>
                    </ul>
            </div>
        </div>
    </div>    
</section> <!-- /#feature -->

<!--
==================================================
Organigram Section Start
================================================== -->
<section class="organization" id="organigram">
    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-4">
                <h2>-----</h2>
                <h5>-----</h5>
            <div class="fakeimg"><h2>Organigrama</h2></div>
                <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
                <h3>Some Links</h3>
                <p>Lorem ipsum dolor sit ame.</p>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <hr class="d-sm-none">
            </div>
            <div class="col-sm-8">
                <h2>TITLE HEADING</h2>
                <h5>Title description, Dec 7, 2017</h5>
            <div class="fakeimg">Fake Image</div>
                <p>Some text..</p>
                <p>

                    Estructura Organizativa
EINCO SOLUCIONES se estructura en los departamentos asociados a la producción que a su vez se subdivide en las cinco áreas estratégicas de la empresa. La actividad de los departamentos muestra la vocación de la empresa de especializarse en sectores estratégicos que se complementen.
Las áreas que conforman esta estructura son las siguientes:
•   Dirección General
•   Servicios Generales
•   Dirección Técnica
•   Departamento de Edificación y Obra Civil
•   Departamento de Ingeniería Geotécnica
•   Departamento de topografía y geomensura
•   Departamento de Ingeniería Eléctrica
•   Asistencias Técnicas y Direcciones de obra
Organigrama


<a href="<?php base_url() ?>" >
                    <img src="<?php base_url() ?>assets/home/images/organigrama.jpg" alt="">
                </a>








Dirección General
EINCO SOLUCIONES tiene sus oficinas en Av. Irarrázaval nº2821, oficina nº1110, en la ciudad de  Santiago de Chile.  Su  actividad  siempre  ha  estado   relacionada   con   la   consultoría y construcción.
Por otra parte, para las tareas de ingeniería y consultoría que desarrolla ha puesto a punto diferentes metodologías de inspección, auscultación y diagnosis de estructuras y materiales.
Edificación y Obra Civil
EINCO SOLUCIONES, ofrece consultoría de apoyo técnico en todas las fases comprendidas durante la definición y construcción de una obra. Ha participado en numerosos proyectos, desde las grandes obras, como son los Centros Comerciales, a las pequeñas obras de detalle, que hace que sus profesionales estén en condiciones óptimas para asesorar, colaborar y desarrollar proyectos o dirigir obras.
•   Obras Viales
•   Puentes y Pasarelas
•   Obras de V Infraestructura civil
•   Obras Industriales
•   Centros Comerciales
•   Edificios de Oficinas
•   Alcantarillados y Drenajes
•   Viviendas
•   Acueductos
Ingeniería Geotécnica
•   Estudios geológicos y geotécnicos
•   Estudios de estabilidad de desmontes y rellenos
•   Conductividad térmica en suelo
•   Estudios y consultorías
•   Estudios de factibilidad minera
•   Prospectos de explotación minera
•   Evaluación geológica económica de reservas
•   Peritajes topográficos y de mensuras

                    
                </p>
                <br>
                <h2>TITLE HEADING</h2>
                <h5>Title description, Sep 2, 2017</h5>
            <div class="fakeimg">Fake Image</div>
                <p>Some text..</p>
                <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            </div>
        </div>
    </div>    
</section> <!-- /#feature -->

<!--
==================================================
Services Section Start
================================================== -->
<section class="servs" id="services">
    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-4">
                <h2>-----</h2>
                <h5>-----</h5>
            <div class="fakeimg"><h2>Servicios</h2></div>
            
                <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
                <h3>Some Links</h3>
                <p>Lorem ipsum dolor sit ame.</p>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <hr class="d-sm-none">
            </div>
            <div class="col-sm-8">
                <h2>TITLE HEADING</h2>
                <h5>Title description, Dec 7, 2017</h5>
            <div class="fakeimg">Fake Image</div>
                <p>Some text..</p>

                <br>
                <h2>TITLE HEADING</h2>
                <h5>Title description, Sep 2, 2017</h5>
            <div class="fakeimg">Fake Image</div>
                <p>Some text..</p>
                <p>

Edificación y Obra Civil
EINCO SOLUCIONES, ofrece consultoría de apoyo técnico en todas las fases comprendidas durante la definición y construcción de una obra. Ha participado en numerosos proyectos, desde las grandes obras, como son los Centros Comerciales, a las pequeñas obras de detalle, que hace que sus profesionales estén en condiciones óptimas para asesorar, colaborar y desarrollar proyectos o dirigir obras.
•   Obras Viales
•   Puentes y Pasarelas
•   Obras de V Infraestructura civil
•   Obras Industriales
•   Centros Comerciales
•   Edificios de Oficinas
•   Alcantarillados y Drenajes
•   Viviendas
•   Acueductos
Ingeniería Geotécnica
•   Estudios geológicos y geotécnicos
•   Estudios de estabilidad de desmontes y rellenos
•   Conductividad térmica en suelo
•   Estudios y consultorías
•   Estudios de factibilidad minera
•   Prospectos de explotación minera
•   Evaluación geológica económica de reservas
•   Peritajes topográficos y de mensuras
Consultoría de Estructuras
Dentro de los servicios de consultoría relacionados con el comportamiento estructural destacan estudios muy específicos, como la evolución de estructuras existentes ante nuevas condiciones de explotación (cargas y velocidades) o estudios de socavación y vulnerabilidad y estudios generalistas como pueden ser el estudio de soluciones tipológicas, la supervisión y revisión de proyectos.
Es importante destacar que existen un gran número de estructuras en la actualidad que fueron proyectados y construidos bajo otro contexto normativo, algunos de ellos bajo reglas pseudo-teóricas que llevan dando servicio, en ocasiones más de 150 años. Estas estructuras están sometidas a unas condiciones de carga muy diferentes a sus condiciones de explotación originales para lo que requieren que se estudie su comportamiento en servicio y agotamiento. En otras ocasiones, el paso de un transporte especial hace recomendable analizar la respuesta estructural ante estas nuevas cargas excepcionales.
 
Otro aspecto a destacar en el que EINCO SOLUCIONES ha invertido tiempo y energía en proyectos, profesionales, es el de analizar la vulnerabilidad de las diferentes tipologías estructurales de puentes ante la acción de los elementos y parámetros que los afectan.



Servicios de Topografía y Geomensura
•   Topografía
•   Estudios de Cartografías
•   Mensuras
•   Propiedad minera
•   Peritajes topográficos y de mensuras
•   Fotogravimetría aérea
•   Topografía Láser aerotransportada
•   Adquisición de datos láser y ortofotos
•   Procesamiento de datos topográficos masivos
(Curvas de nivel, MDT, planimetrías, cortes)
•   Georreferenciación


Servicios de Ingeniería Eléctrica
•   Proyectos de electrificación de media y baja tensión
•   Inspección de obras de electrificación
•   Obras de media y baja tensión


                </p>
            </div>
        </div>
    </div>    
</section> <!-- /#feature -->


            <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
            <section id="call-to-action">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">Te esperamos.</h2>
                                <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Ponte en contacto con nosotros y haznos saber tus inquietudes.</p>
                                <a href="<?php echo base_url() ?>mail/" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contactanos</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>

            <!--
            ==================================================
            Facebook Comments
            ================================================== -->
            <section id="facebook-comments">
                <div class="fb-comments" data-href="https://tutorials.ylit.cl" data-numposts="20"></div>
            </section>
