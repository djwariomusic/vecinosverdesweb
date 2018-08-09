<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="es">
<head>
<title>Vecinos Verdes - Comunidad de Cuidado Ambiental y Manejo de Basuras | Plantilla Suministrada :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">		<!-- font-awesome icons -->

<!--// css -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Montserrat+Alternates:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Libre+Franklin:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
	<!-- start-smooth-scrolling -->
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
			</script>
	<!-- //start-smoth-scrolling -->
		<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
</head>
<body data-spy="scroll" data-target="#navigation" data-offset="50">

    <div class="w3-banner-edu">
    	<div class="agileits_top_menu">

       <div class="w3l_header_left">
    				<ul>

    					<li><i class="fa fa-phone" aria-hidden="true"></i> +031 291 66 70</li>
    					<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">vecinoverdes@gmail.com</a></li>
    				</ul>
    			</div>
    			<div class="w3l_header_right">
    				<div class="w3ls-social-icons text-left">
    					<a class="facebook" href="https://www.facebook.com/www.engativa.gov.co/" target="_blank" alt="Ingresar a Facebook Alcaldía de Engativá"><i class="fa fa-facebook"></i></a>
    					<a class="youtube" href="https://www.youtube.com/user/engativa2011" target="_blank" alt="Ingresar a Youtube Alcaldía de Engativá"><i class="fa fa-youtube"></i></a>
    					<a class="instagram" href="https://www.instagram.com/alcaldiaengativa/" target="_blank" alt="Ingresar a Instagram Alcaldía de Engativá"><i class="fa fa-instagram"></i></a>
    					<a class="twitter" href="https://twitter.com/engativalcaldia?lang=es" target="_blank" alt="Ingresar a Twitter Alcaldía de Engativá"><i class="fa fa-twitter"></i></a>
    				</div>
    			</div>
    			<div class="clearfix"> </div>
    		</div>
       <div class="agileits_w3layouts_banner_nav">
    			<nav class="navbar navbar-default">
    				<div class="navbar-header navbar-left">
    					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="position:inherit;">
    						<span class="sr-only">Toggle navigation</span>
    						<span class="icon-bar"></span>
    						<span class="icon-bar"></span>
    						<span class="icon-bar"></span>
    					</button>
    				<h1><a class="navbar-brand" href="index.html"><i class="fa fa-recycle" aria-hidden="true"></i><span style="font-size:x-large;">VecinosVerdes</span></a></h1>

    				</div>
    				 <ul class="agile_forms" style="position:inherit;">
              @if (Auth::guest())
    					<li><a class="active" href="{{ url('/login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> Iniciar</a> </li>
    					<li><a href="{{ url('/register') }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Registrarse</a> </li>
              @else
              <li><a class="active" href="{{ url('/home') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> Home</a> </li>
              @endif
    				</ul>
    				<!-- Collect the nav links, forms, and other content for toggling -->
    				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
    					<nav>
    						<ul class="nav navbar-nav">
    							<li class="active"><a href="index.html" class="hvr-underline-from-center">Inicio</a></li>
    							<li><a href="#about"  class="scroll hvr-underline-from-center">Nosotros</a></li>
    							<li><a href="#services"  class="scroll hvr-underline-from-center">Servicios</a></li>
    							<li><a href="#blog" class="scroll hvr-underline-from-center">Noticias</a></li>
    							<li><a href="#team" class="scroll hvr-underline-from-center">Equipo</a></li>
    							<li><a href="#contact" class=" scroll hvr-underline-from-center">Contacto</a></li>
    						</ul>
    					</nav>

    				</div>
    			</nav>

    	<div class="clearfix"> </div>
    </div>




    <!-- Modal1 -->
    												<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
    														<div class="modal-dialog">
    														<!-- Modal content-->
    															<div class="modal-content">
    																<div class="modal-header">
    																	<button type="button" class="close" data-dismiss="modal">&times;</button>

    																	<div class="signin-form profile">
    																	<h3 class="agileinfo_sign">Sign In</h3>
    																			<div class="login-form">
    																				<form action="#" method="post">
    																					<input type="text" name="email" placeholder="E-mail" required="">
    																					<input type="password" name="password" placeholder="Password" required="">
    																					<div class="tp">
    																						<input type="submit" value="Sign In">
    																					</div>
    																				</form>
    																			</div>
    																			<div class="login-social-grids">
    																				<ul>
    																					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
    																					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
    																					<li><a href="#"><i class="fa fa-rss"></i></a></li>
    																				</ul>
    																			</div>
    																			<p><a href="#" data-toggle="modal" data-target="#myModal3" > Don't have an account?</a></p>
    																		</div>
    																</div>
    															</div>
    														</div>
    													</div>
    													<!-- //Modal1 -->
    													<!-- Modal2 -->
    													<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
    														<div class="modal-dialog">
    														<!-- Modal content-->
    															<div class="modal-content">
    																<div class="modal-header">
    																	<button type="button" class="close" data-dismiss="modal">&times;</button>

    																	<div class="signin-form profile">
    																	<h3 class="agileinfo_sign">Sign Up</h3>
    																			<div class="login-form">
    																				<form action="#" method="post">
    																				   <input type="text" name="name" placeholder="Username" required="">
    																					<input type="email" name="email" placeholder="Email" required="">
    																					<input type="password" name="password" placeholder="Password" required="">
    																					<input type="password" name="password" placeholder="Confirm Password" required="">
    																					<input type="submit" value="Sign Up">
    																				</form>
    																			</div>
    																			<p><a href="#"> By clicking register, I agree to your terms</a></p>
    																		</div>
    																</div>
    															</div>
    														</div>
    													</div>
    													<!-- //Modal2 -->

    													<div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
    														<div class="modal-dialog">
    														<!-- Modal content-->
    															<div class="modal-content">
    																<div class="modal-header">
    																	<button type="button" class="close" data-dismiss="modal">&times;</button>

    																	<div class="signin-form profile">
    																	<h3 class="agileinfo_sign">GRUPO DE TRABAJO</h3>
    																			<div class="col-md-6 mt-6 col-sm-12">
    																				<div class="card profile-card-5">
    																					<div class="card-img-block">
    																						<img class="card-img-top" src="images/fotoperfil1.jpg" style="width:60%;" alt="Card image cap">
    																					</div>
    																					<div class="card-body pt-0">
    																					<h5 class="card-title">Edwin Beltrán - Desarrollador FullStack</h5>
    																					<p class="card-text">Profesional en Ingeniería de Sistemas. Especialista en Base de Datos para Sistemas de Información Geográfica,
    																					conocimientos Desarrollo de Páginas WEB HTML5, CSS3, PHP, Javascript y diseño Responsive aplicando arquitecturas MVC (Modelo – Vista – Controlador).
    																					<br>Poseo habilidades comunicativas para expresar y organizar requerimientos a diferentes tipos de clientes, dedicado con enfoque al resultado hacia el desarrollo de Software,
    																					autodidacta lo cual no sólo me ha permitido destacarme académicamente si no profesionalmente.</p>
    																					<a href="https://www.linkedin.com/in/edwin-beltran-80b20641/" class="btn btn-warning" target="_blank"><i class="fa fa-linkedin"></i> Perfil Linked</a>
    																				  </div>
    																				</div>
    																			</div>

    																			<div class="col-md-6 mt-6 col-sm-12">
    																				<div class="card profile-card-5">
    																					<div class="card-img-block">
    																						<img class="card-img-top" src="images/fotoperfil2.jpg" style="width:60%;" alt="Card image cap">
    																					</div>
    																					<div class="card-body pt-0">
    																					<h5 class="card-title">Francisco Becerra - Desarrollador FullStack</h5>
    																					<p class="card-text">Tecnólogo en redes de computadores y seguridad informática, con experiencia de 2 años en el área de servicio e instalación del servicio de línea
    																					básica, internet, banda ancha y televisión residenciales.
    																					<br>Elaboración de inventarios y cumplimiento de metas de instalación.
    																					<br>Soporte telefónico en línea, manejo de fallas técnicas, generación de reportes y programación de visitas.
    																					<br>Con competencias en atención al detalle y orientación al resultado</p>
    																					<br><br><br>
    																					<a href="https://www.linkedin.com/in/francisco-becerra-rodriguez-038b17145/" class="btn btn-warning" target="_blank"><i class="fa fa-linkedin"></i> Perfil Linked</a>
    																				  </div>
    																				</div>

    																			</div>

    																		</div>
    																</div>
    															</div>
    														</div>
    													</div>


    	<div class="banner">
    		<h3>Que lo digital proteja  lo natural</h3>
    		<h2 class="test"><span>Bienvenido a </span>Vecinos Verdes</h2>
    		<p>La página que te enseñara a reciclar de una forma correcta ordenada y eficiente</p>

    		<h4><a href="#contact" class="scroll">Únete a nosotros<span></span></a></h4>

    	</div>
    </div>
    <!-- About -->
    	<div id="about" class="about">
    	<div class="container">
    		<div class="w3-about-head">
    		<h3>Sobre Nosotros</h3>
    		</div>
    		<div class="w3-agileitsline">
    		<p>Somos una propuesta tecnológica dirigida al sector distrital y público. Con el fin de incentivar la Cultura del Reciclaje como actitud proactiva de la ciudadanía y los organismos públicos, brindando en espacio digital que permita conocer sobre políticas ambientales para la recolección y el manejo de los desechos sólidos, con el fin de NO contaminar las ciudades e incentivando un patrón de conducta ecológico en la colectividad. Permitiendo vincular a los ciudadanos residentes o negociantes en una comunidad virtual que brinde espacios de formación, información, denuncias y acceder a beneficios que sean reportados por los operadores de aseo o reciclaje sobre las unidades de vivienda vinculadas a la cuenta usuario.</p>
    		<p>Conoce más sobre el grupo de desarrollo tecnológico.<br><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal4">Ver Más</button></p>
    		</div>
    	</div>
    </div>

    <!-- //services -->
    <div class="w3-services" id="services">

    	<div class="w3-services-head">
    	<h3>Nuestros Servicios</h3>
    	<!-- banner-bottom -->
    <div class="banner-bottom">
    <div class="col-md-4 agileits_banner_bottom_left">
    	<div class="agileinfo_banner_bottom_pos">
    		<div class="w3_agileits_banner_bottom_pos_grid">
    			<div class=" wthree_banner_bottom_grid_left">
    				<div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
    						<i class="fa fa-graduation-cap" aria-hidden="true"></i>
    				</div>
    			</div>
    			<div class=" wthree_banner_bottom_grid_right">
    				<h4>Educación</h4>
    				<p>"Disponemos de Formación Virtual para Ciudadanos Residentes y Comerciantes sobre el Manejo de Basuras y Buenas Practicas de Reciclaje"</p>
    			</div>
    			<div class="clearfix"> </div>
    		</div>
    	</div>
    </div>
    <div class="col-md-4 agileits_banner_bottom_left1">
    	<div class="agileinfo_banner_bottom_pos">
    		<div class="w3_agileits_banner_bottom_pos_grid">
    			<div class=" wthree_banner_bottom_grid_left">
    				<div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
    					<i class="fa fa-newspaper-o" aria-hidden="true"></i>
    				</div>
    			</div>
    			<div class=" wthree_banner_bottom_grid_right">
    				<h4>Noticias</h4>
    				<p>"Brindamos a nuestros usuarios Noticias sobre el Medio Ambiente y Lugares de Reciclaje"</p>
    			</div>
    			<div class="clearfix"> </div>
    		</div>
    	</div>
    </div>
    <div class="col-md-4 agileits_banner_bottom_left2">
    	<div class="agileinfo_banner_bottom_pos">
    		<div class="w3_agileits_banner_bottom_pos_grid">
    			<div class=" wthree_banner_bottom_grid_left">
    				<div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
    					<i class="fa fa-clock-o" aria-hidden="true"></i>
    				</div>
    			</div>
    			<div class=" wthree_banner_bottom_grid_right">
    				<h4>Horarios</h4>
    				<p>"Publicamos los horarios de recolección del Servicio de Aseo y demás datos de interes."</p>
    			</div>
    			<div class="clearfix"> </div>
    		</div>
    	</div>
    </div>
    <div class="clearfix"> </div>
    </div>
    	</div>


    <!-- our team -->
    <div class="team" id="team">
    	<div class="container">
    		<div class="w3ls-heading">
    			<h3>Nuestros Patrocinadores</h3>
    		</div>
    		<div class="w3-team-grids">
    		<div class="col-md-3 chef agile_team_grid">
    			<div class="agileits_w3layouts_team_grid">
    				<ul class="agileinfo_social_icons">
    					<li><a href="#" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
    					<li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
    					<li><a href="#" class="agileinfo_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
    				</ul>
    				<img src="images/mintic.jpg" alt=" " class="img-responsive">
    			</div>
    			<div class="w3-team-head">
    			<h3>Ministerio TIC's</h3>
    			</div>
    		</div>
    		<div class="col-md-3 chef agile_team_grid">
    			<div class="agileits_w3layouts_team_grid">
    				<ul class="agileinfo_social_icons">
    					<li><a href="#" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
    					<li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
    					<li><a href="#" class="agileinfo_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
    				</ul>
    				<img src="images/fedesoft.png" alt=" " class="img-responsive">
    			</div>
    			<div class="w3-team-head">
    			<h3>Fedesoft &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br></h3>
    		</div>
    		</div>
    		<div class="col-md-3 chef agile_team_grid">
    			<div class="agileits_w3layouts_team_grid">
    				<ul class="agileinfo_social_icons">
    					<li><a href="#" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
    					<li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
    					<li><a href="#" class="agileinfo_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
    				</ul>
    				<img src="images/digital.png" alt=" " class="img-responsive">
    			</div>
    			<div class="w3-team-head">
    			<h3>Piensa Digital</h3>
    			</div>
    		</div>
    		<div class="col-md-3 chef agile_team_grid">
    			<div class="agileits_w3layouts_team_grid">
    				<ul class="agileinfo_social_icons">
    					<li><a href="#" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
    					<li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
    					<li><a href="#" class="agileinfo_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
    				</ul>
    				<img src="images/colciencias.jpg" alt=" " class="img-responsive">
    			</div>
    			<div class="w3-team-head">
    			<h3>Colciencias &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br></h3>
    			</div>
    		</div>
    		<div class="clearfix"></div>
    		</div>


    	</div>
    </div>
    <!-- //our team -->

    <!-- news -->
    <section class="news" id="news">
    		<div class="container">
    			<div class="heading">
    				<h3>Noticias</h3>
    			</div>
    			<div class="news-grids">
    				<div class="col-md-4 news-grid1">
    					<img src="images/b11.jpg" alt="" />
    						<div class="absolute">
    							<div class="absolute-left">
    								<p class="p1"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>  2/3/2017</p>
    							<div class="clearfix"></div>
    							</div>
    							<div class="absolute-right">
    								<p class="left"><i class="fa fa-thumbs-up" aria-hidden="true"></i> <span class="span1">50</span></p>

    							<div class="clearfix"></div>
    							</div>
    							<div class="clearfix"></div>
    						</div>
    					<h3>Vesti id ipsum sit amet</h3>
    						<p>Phasellus fringilla faucibus ipsum, id pharetra massa consequat ac. Nullam at tempus urna. Praesent non dapibus.</p>
    						<div class="more">
    							<a href="#" data-toggle="modal" data-target="#myModal" >read more</a>
    						</div>
    				</div>
    				<div class="col-md-4 news-grid1">
    					<img src="images/b22.jpg" alt="" />
    						<div class="absolute">
    							<div class="absolute-left">
    								<p class="p1"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>  1/3/2017</p>
    							<div class="clearfix"></div>
    							</div>
    							<div class="absolute-right">
    								<p class="left"><i class="fa fa-thumbs-up" aria-hidden="true"></i> <span class="span1">70</span></p>

    							<div class="clearfix"></div>
    							</div>
    							<div class="clearfix"></div>
    						</div>
    					<h3>Quisque nisi elit portti</h3>
    						<p>Nullam sit amet ligula non ante dapibus facilisis. Donec nec sollicitudin lectus. Nam iaculis risus scelerisque lacus. </p>
    						<div class="more">
    							<a href="#" data-toggle="modal" data-target="#myModal" >read more</a>
    						</div>
    				</div>
    				<div class="col-md-4 news-grid1">
    					<img src="images/blog1.jpg" alt="" />
    						<div class="absolute">
    							<div class="absolute-left">
    								<p class="p1"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>  28/2/2017</p>
    							<div class="clearfix"></div>
    							</div>
    							<div class="absolute-right">
    								<p class="left"><i class="fa fa-thumbs-up" aria-hidden="true"></i> <span class="span1">64</span></p>

    							<div class="clearfix"></div>
    							</div>
    							<div class="clearfix"></div>
    						</div>
    					<h3> Etiam iaculis metus vitae</h3>
    						<p>Ut pulvinar erat in eros sodales tristique. Pellentesque risus dui, tincidunt id tincidunt eget, venenatis id lorem. tincidunt </p>
    						<div class="more">
    							<a href="#" data-toggle="modal" data-target="#myModal" >read more</a>
    						</div>
    				</div>
    				<div class="clearfix"></div>
    			</div>
    		</div>
    </section>
    <!-- news -->
    <!-- modal -->
    	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
    		<div class="modal-dialog" role="document">
    			<div class="modal-content">
    				<div class="modal-header">
    					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="span2" aria-hidden="true">&times;</span></button>
    						<h4 class="modal-title"> Merit education </h4>
    					</div>
    					<div class="modal-body">
    					<div class="agileits-w3layouts-info">
    						<img src="" alt="" />
    						<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper.  Cras tempor massa luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem.</p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    <!-- //modal -->
    <!--count-->
    			<div class="count-agileits">
    				<img class="mySlides w3-animate-fading" src="images/landing1.jpg">
    				<img class="mySlides w3-animate-fading" src="images/landing2.jpg">
    				<img class="mySlides w3-animate-fading" src="images/landing3.jpg">
    				<img class="mySlides w3-animate-fading" src="images/landing4.jpg">
    			</div>

    			</div>
    				<!--count-->


    	<!-- coureses online -->
    	<div class="w3-edu-main content " id="contact">
    		<div class="w3-edu-head">
    		<h3>Contactenos</h3>
    		</div>
    	<div class="w3-online-edu-grids">

    			<div class="col-md-12 w3-edu-online-form w3_mail_grids">
    			<h3>Formulario de Contacto</h3>
    			<form action="#" method="post">
    				<div class="w3_agile_mail_grid">
    					<input type="text" placeholder="Tu Nombre"  required="">
    					<input type="email" placeholder="Tu Correo" required="">
    					<input type="tel" placeholder="Tu Numero Telefonico" required="">
    					<select id="category1" required="">
    						<option value="">Tipo de curso*</option>
    						<option value="">Con Diploma</option>
    						<option value="">Tiempo Completo</option>
    						<option value="">Part time</option>
    						<option value="">Mayor grado</option>
    						<option value="">Graduado</option>
    						<option value="">Postgrado</option>
    						<option value="">Licenciatura</option>
    					</select>

    					<textarea name="Message" placeholder="Tu Mensaje" required=""></textarea>
    					<input type="submit" value="Enviar">
    				</div>
    			</form>

    			</div>
    			<div class="clearfix"></div>

    	</div>
    	</div>
    	<!-- map  -->
    	<!-- <div class="w3-agile-map1">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2481.2508055091607!2d-0.07901828417095903!3d51.54529987964132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761c91f36ba6cb%3A0xa3353c086b61a5e4!2s14+Tottenham+Rd%2C+London+N1+4EP%2C+UK!5e0!3m2!1sen!2sin!4v1484802856551" ></iframe>
    </div> -->
    <!-- map -->
    <!-- coureses online -->
    	<!-- footer-top -->
    	<div class="footer-top">
    		<div class="container">
    		<div class="w3-edu-footer-grids foot-left1">
    			<div class="col-md-4 foot-left">
    				<h3>Sobre Nosotros</h3>

    				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
    			</div>
    			<div class="col-md-4 foot-left">
    					<h3>Contactanos</h3>
    					<p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>

    						<div class="contact-btm">
    							<i class="fa fa-map-marker" aria-hidden="true"></i>
    							<!-- <p>90 Street, City, State 34789.</p> -->


    						</div>
    						<div class="contact-btm">
    							<i class="fa fa-phone" aria-hidden="true"></i>
    							<p>(057) 555 5555</p>
    						<div class="contact-btm">
    						</div>
    							<span class="fa fa-envelope-o" aria-hidden="true"></span>
    							<p><a href="mailto:example@email.com">ejemplo@gmail.com</a></p>
    						</div>
    						<div class="clearfix"></div>

    			</div>
    			<div class="col-md-4 foot-left">
    			<h3>Suscribete</h3>
    			<p>Lorem Ipsum is simply dummy text of the printing and Lorem Ipsum has </p>
    			<form action="#" method="post">
    					<input type="email" Name="Enter Your Email" placeholder="Enter Your Email" required="">
    				<input type="submit" value="Suscribirse">
    			</form>
    			</div>
    				<div class="clearfix"></div>
    		</div>

    		</div>
    	</div>
    <!-- /footer-top -->

    <!-- footer -->
    			<div class="copy-right">
    				<p>&copy; 2017 Merit. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
    			</div>

    <!-- //footer -->

          	<!--light-box-files -->
          <script src="js/jquery.chocolat.js"></script>
          <link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
          <!--//light-box-files -->
          		<script type="text/javascript">
          		$(function() {
          			$('.gallery a').Chocolat();
          		});
          		</script>

          <!-- text-effect -->
          		<script type="text/javascript" src="js/jquery.transit.js"></script>
          		<script type="text/javascript" src="js/jquery.textFx.js"></script>
          		<script type="text/javascript">
          			$(document).ready(function() {
          					$('.test').textFx({
          						type: 'fadeIn',
          						iChar: 100,
          						iAnim: 1000
          					});
          			});
          		</script>


          <script type="text/javascript">
          					jQuery(document).ready(function($) {
          						$(".scroll").click(function(event){
          							event.preventDefault();
          							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
          						});
          					});
          				</script>

          <!-- smooth scrolling -->
          	<script type="text/javascript">
          		$(document).ready(function() {
          		/*
          			var defaults = {
          			containerID: 'toTop', // fading element id
          			containerHoverID: 'toTopHover', // fading element hover id
          			scrollSpeed: 1200,
          			easingType: 'linear'
          			};
          		*/
          		$().UItoTop({ easingType: 'easeOutQuart' });
          		});
          	</script>

          	<script>
          var myIndex = 0;
          carousel();

          function carousel() {
              var i;
              var x = document.getElementsByClassName("mySlides");
              for (i = 0; i < x.length; i++) {
                 x[i].style.display = "none";
              }
              myIndex++;
              if (myIndex > x.length) {myIndex = 1}
              x[myIndex-1].style.display = "block";
              setTimeout(carousel, 9000);
          }
          </script>

          	<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
          <!-- //smooth scrolling -->

    </body>
    </html>
