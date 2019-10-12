<?php 
require('php/procesos.php');
$texto=procesos::textodb();
$listalinks=procesos::mostrarlista()
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Index</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/fontello.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body>
		<!-- <div class="container-fluid">-->
		<nav class="navbar navbar-exterior navbar-expand-lg navbar-dark bg-info">
			<div class="container">

				<!--- NAV BAR --->

				<img src="img/ico.ico" href="../www/index/index.php">
  				<a class="navbar-brand" href="../www/index/index.php">Tecnica 7 Banfield</a>
  				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    				<span class="navbar-toggler-icon"></span>
  				</button>
				<div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
			    	<ul class="navbar-nav ml-auto">
			    		<li class="nav-item active">
			        	<a class="nav-link" href="">Inicio<span class="sr-only">(current)</span></a>
			      		</li>
			      		
			      		<li>
			      			<a type="button" href="registro.html" id="botonsubircv" class="btn btn-primary">Subi tu CV</a>
			      		</li>
			      		<li>
			      			<a type="button" class="btn btn-dark">Empresas</a>
			      		</li>
			      		
			      		

			      		<!--- BARRA DE NOTIFICACIONES --->

			       		<li class="nav-item dropdown">
			                
			                <a class="nav-link text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			                <i class="icon-bell-alt"></i>
			                </a>
			                <ul class="dropdown-menu" style="">
			                	<li class="head text-light bg-dark">
			                  		<div class="row">
			                        	<div class="col-lg-12 col-sm-12 col-12">
			                        	<span>Notificaciones (3)</span>
			                            <a href="" class="float-right text-light">Marcar como leído</a>
			                          	</div>
			                        </div> 	
			                 	</li>
			                    <li class="notification-box">
			                        <div class="row">
			                        	<div class="col-lg-3 col-sm-3 col-3 text-center">
			                            	<img src="img/logos/generalelectric.ico" class="w-50 rounded-circle">
			                          	</div>    
			                          	<div class="col-lg-8 col-sm-8 col-8">
			                            	<strong class="text-info">General Electric</strong>
			                            	<div>
			                             		Ha pactado una entrevista para el 22.9 a las 9:30
			                            	</div>
			                            	<small class="text-warning">9.7.2019, 14:07</small>
			                          	</div>    
			                        </div>
			                    </li>
			                    <li class="notification-box bg-gray">
			                        <div class="row">
			                          	<div class="col-lg-3 col-sm-3 col-3 text-center">
			                            	<img src="img/logos/cocacola.ico" class="w-50 rounded-circle">
			                          	</div>    
				                        <div class="col-lg-8 col-sm-8 col-8">
				                        	<strong class="text-info">Coca Cola</strong>
				                            <div>
				                            	Ha creado una nueva busqueda que puede interesarte
				                            </div>
				                            <small class="text-warning">9.7.2019, 12:50</small>
				                        </div>    
			                        </div>
			                    </li>
			                    <li class="notification-box">
			                        <div class="row">
			                          	<div class="col-lg-3 col-sm-3 col-3 text-center">
			                            	<img src="img/logos/facebook.ico" class="w-50 rounded-circle">
			                          	</div>    
			                          	<div class="col-lg-8 col-sm-8 col-8">
			                            	<strong class="text-info">Facebook</strong>
			                            	<div>
			                            		Ha cambiado la fecha de tu entrevista al 25.8 a las 8:00
			                            	</div>
			                            	<small class="text-warning">9.7.2019, 9:27</small>
			                          	</div>    
			                        </div>
			                    </li>
			                    <li class="footer bg-dark text-center">
			                        <a href="" class="text-light">Ver todas</a>
			                    </li>
			                </ul>
			            </li>   
			        </ul>
			  	</div>
  			</div>
		</nav>

		<!--- MAIN --->
	<div class="container-fluid">
		<div class="row" style="background: #F5F5F5; margin-right: 0 !important; padding: 0;">
			<div class="Separador w-100"></div>
		
			<!--SLIDER-->
			<div class="row menu">
				<div id="carouseluno" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouseluno" data-slide-to="0" class="active"></li>
						<li data-target="#carouseluno" data-slide-to="1" ></li>
						<li data-target="#carouseluno" data-slide-to="2" ></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
						    <img src="img/slider (1).jpg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
						  	<img src="img/slider (2).jpg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
						  <img src="img/slider (3).jpg" class="d-block w-100" alt="...">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouseluno" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Anterior</span>
					</a>
					<a class="carousel-control-next" href="#carouseluno" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Siguiente</span>
					</a>
				</div>		
			</div>
		<!-- SLIDER END-->

		<!-- BARRA DE BUSQUEDA -->
			<div class="container" id="containerbarradebusqueda" style="padding-right: 5px;">
				<div class="barradebusqueda">
					<div class="row">
						<H3 CLASS="text-center">BUSCA TU TRABAJO IDEAL</H3>
					</div>
					<div class="row align-bottom align-items-end">

						<div class="col inputpuestos">
							<input type="text" class="inputs" name="" placeholder="Tu puesto ideal">
						</div>
						<div class="col inputlugar">
							<input type="text" class="inputs" name="" placeholder="Tu lugar ideal">
						</div>
						<div class="col-auto">
							<a class="inputbuscar btn btn-primary" href="busqueda.php">Buscar</a>
						</div>
					</div>
				</div>
			</div>

		 <!-- SEGUNDO CONTAINER ARRGEGLAR --->


			<div class="container">
				

				<!-- FILTROS -->
				<div class="row" id="maincontainer">
					<div class="col-4 mt-3">
						
						<div class="card filtros">
							<h2>Filtros</h2>
							<hr>
							<h3>Categorias</h3>
							<a href="">Programación(29)</a>
							<a href="">Diseño(21)</a>
							<a href="">Educacion(18)</a>
							<a href="">Administrativo(12)</a>
							<a href="">Marketing(8)</a>
							<a href="">Secretaria(7)</a>
				            
							<h4 class="mt-4">Empresas</h4>
							<a href=<?php echo $listalinks[0]['link'];?>>Coca-Cola(9)</a>
							<a href=<?php echo $listalinks[1]['link'];?>>Facebook(7)</a>
							<a href=<?php echo $listalinks[2]['link'];?>>Google(6)</a>
							<a href=<?php echo $listalinks[3]['link'];?>>Audi(4)</a>
							<a href=<?php echo $listalinks[4]['link'];?>>McDonalds(3)</a>
							<a href=<?php echo $listalinks[5]['link'];?>>Fiat(2)</a>
							<a href=<?php echo $listalinks[5]['link'];?>>Mitsubishi(2)</a>

							<h4 class="mt-4">Lugares</h4>
							<a href="">Buenos Aires(29)</a>
							<a href="">CABA(14)</a>
							<a href="">Zona Sur(8)</a>
							<a href="">Zona Norte(5)</a>
							<a href="">Zonas Este(3)</a>
							<a href="">Avellaneda(2)</a>
						</div>
							
					</div>
				

				<!-- OFERTAS DE TRABAJO -->

				<!-- SE NECESITAN ORDERNAR BIEN LAS CARDS -->
					<div class="col-8">
						
						<div class="card mt-3" style=" padding: 10px;">
							<div class="row">
								<div class="col-2" style="justify-content: center;">
									<img src="img/logos/mitsubishi.ico" class="my-2 mx-2 logo">
									
								</div>
								<div class="col-10">
									<div class="card-body" style="
									padding:0 !important; ">
									<div class="card-title font-weight-bold my-0">
	                  				Ingeniero Mecanico
	                  				<span class="badge badge-danger">Destacado</span> </div>
									<div class="card-text mb-0 ">Mitsubishi</div>
									<div style="font-size: 95%;" class="card-text mr-2 mb-0 font-weight-light text-justify">Mitsubishi Motors es una de las divisiones de la corporación japonesa Mitsubishi que desde 2016 es controlada por el grupo...</div>
									<div class="row align-items-end" style="padding-top: 0px; margin-top: 2rem !important;">
										<div class="col-9" style="">
											<div class="card-text font-italic" style="margin-bottom: 10px;"><i class="icon-clock icono" ></i>Hace 2 Semanas <span class="ml-2 font-weight-light">Avellaneda, Buenos Aires</span></div> 
										</div>
										<div class="col-3 d-flex justify-content-end">
											<div class="btn btn-primary card-link align-bottom mb-1 mr-2" style="display: inline-block;" >Más Info</div>
										</div>	
									</div>
									</div>
								</div>	
							</div>
						</div>
						<div class="card mt-3" style=" padding: 10px;">
							<div class="row">
								<div class="col-2" style="justify-content: center;">
									<img src="img/logos/intel.ico" class="my-2 mx-2 logo">
									
								</div>
								<div class="col-10">
									<div class="card-body" style="
									padding:0 !important; ">
									<div class="card-title font-weight-bold my-0">
	                  				Experto en Marketing Digital
	                  				<span class="badge badge-danger">NUEVO</span> </div>
									<div class="card-text mb-0 ">Intel</div>
									<div style="font-size: 95%;" class="card-text mr-2 mb-0 font-weight-light text-justify">Somos Intel, la empresa de microchips más grande del mundo, y apostamos al futuro. Por eso decidimos crear un equipo de trabajo totalmente... </div>
									<div class="row align-items-end" style="padding-top: 0px; margin-top: 2rem !important;">
										<div class="col-9" style="">
											<div class="card-text font-italic" style="margin-bottom: 10px;"><i class="icon-clock icono" ></i>Hoy <span class="ml-2 font-weight-light">CABA, Buenos Aires</span></div> 
										</div>
										<div class="col-3 d-flex justify-content-end">
											<div class="btn btn-primary card-link align-bottom mb-1 mr-2" style="display: inline-block;" >Más Info</div>
										</div>	
									</div>
									</div>
								</div>	
							</div>
						</div>
						<div class="card mt-3" style=" padding: 10px;">
							<div class="row">
								<div class="col-2" style="justify-content: center;">
									<img src="img/logos/ford.ico" class="my-2 mx-2 logo">
									
								</div>
								<div class="col-10">
									<div class="card-body" style="
									padding:0 !important; ">
									<div class="card-title font-weight-bold my-0">
	                  				Programador Web Full-Stack
	                  				</div>
									<div class="card-text mb-0 ">Ford</div>
									<div style="font-size: 95%;" class="card-text mr-2 mb-0 font-weight-light text-justify">La Ford Motor Company, mas conocida como Ford, es una empresa multinacional estadounidense con filiales como de Alemania, Argentina, Brasil, Canadá, Chile, España, India, México, Tailandia y Venezuela, ...</div>
									<div class="row align-items-end" style="padding-top: 0px; margin-top: 2rem !important;">
										<div class="col-9" style="">
											<div class="card-text font-italic" style="margin-bottom: 10px;"><i class="icon-clock icono" ></i>Hace 2 Semanas <span class="ml-2 font-weight-light">Berazategui, Buenos Aires</span></div> 
										</div>
										<div class="col-3 d-flex justify-content-end">
											<div class="btn btn-primary card-link align-bottom mb-1 mr-2" style="display: inline-block;" >Más Info</div>
										</div>	
									</div>
									</div>
								</div>	
							</div>
						</div>
						<div class="card mt-3" style=" padding: 10px;">
							<div class="row">
								<div class="col-2" style="justify-content: center;">
									<img src="img/logos/twitter.ico" class="my-2 mx-2 logo">
									
								</div>
								<div class="col-10">
									<div class="card-body" style="
									padding:0 !important; ">
									<div class="card-title font-weight-bold my-0">
	                  				Profesional de Ciencias de Datos
	                  				</div>
									<div class="card-text mb-0 ">Twitter</div>
									<div style="font-size: 95%;" class="card-text mr-2 mb-0 font-weight-light text-justify">Twitter es un servicio de microblogging, con sede en San Francisco, California, con filiales en San Antonio y Boston en Estados Unidos. Twitter, Inc. fue creado originalmente en California, pero está bajo la jurisdicción de Delaware desde... </div>
									<div class="row align-items-end" style="padding-top: 0px; margin-top: 2rem !important;">
										<div class="col-9" style="">
											<div class="card-text font-italic" style="margin-bottom: 10px;"><i class="icon-clock icono" ></i>Hace 2 meses <span class="ml-2 font-weight-light">CABA, Buenos Aires</span></div> 
										</div>
										<div class="col-3 d-flex justify-content-end">
											<div class="btn btn-primary card-link align-bottom mb-1 mr-2" style="display: inline-block;" >Más Info</div>
										</div>	
									</div>
									</div>
								</div>	
							</div>
						</div>
						<div class="card mt-3" style=" padding: 10px;">
							<div class="row">
								<div class="col-2" style="justify-content: center;">
									<img src="img/logos/pepsi.ico" class="my-2 mx-2 logo">
									
								</div>
								<div class="col-10">
									<div class="card-body" style="
									padding:0 !important; ">
									<div class="card-title font-weight-bold my-0">
	                  					Programador PHP SSR
	                  				<span class="badge badge-danger">URGENTE</span> </div>
									<div class="card-text mb-0 ">PepsiCo</div>
									<div style="font-size: 95%;" class="card-text mr-2 mb-0 font-weight-light text-justify">El área de Consultoría de PepsiCo Argentina está en la búsqueda de un perfil entusiasta que cuente con habilidades analíticas, visión de negocio y conocimientos de la industria... </div>
									<div class="row align-items-end" style="padding-top: 0px; margin-top: 2rem !important;">
										<div class="col-9" style="">
											<div class="card-text font-italic" style="margin-bottom: 10px;"><i class="icon-clock icono" ></i>Hace 4 dias <span class="ml-2 font-weight-light">Tigre, Buenos Aires</span></div> 
										</div>
										<div class="col-3 d-flex justify-content-end">
											<div class="btn btn-primary card-link align-bottom mb-1 mr-2" style="display: inline-block;" >Más Info</div>
										</div>	
									</div>
									</div>
								</div>	
							</div>
						</div>
						<div class="card mt-3" style=" padding: 10px;">
							<div class="row">
								<div class="col-2" style="justify-content: center;">
									<img src="img/logos/tesla.ico" class="my-2 mx-2 logo">
									
								</div>
								<div class="col-10">
									<div class="card-body" style="
									padding:0 !important; ">
									<div class="card-title font-weight-bold my-0">
	                  				Experto en Inteligencia Artificial
	                  				<span class="badge badge-danger">Termina Pronto</span> </div>
									<div class="card-text mb-0 ">Tesla</div>
									<div style="font-size: 95%;" class="card-text mr-2 mb-0 font-weight-light text-justify">Tesla, Inc. es una compañía estadounidense ubicada en Silicon Valley, California, y liderada por Elon Musk que diseña, fabrica y vende coches eléctricos, componentes para la propulsión de vehículos... </div>
									<div class="row align-items-end" style="padding-top: 0px; margin-top: 2rem !important;">
										<div class="col-9" style="">
											<div class="card-text font-italic" style="margin-bottom: 10px;"><i class="icon-clock icono" ></i>Hace 3 Semanas <span class="ml-2 font-weight-light">CABA, Buenos Aires</span></div> 
										</div>
										<div class="col-3 d-flex justify-content-end">
											<div class="btn btn-primary card-link align-bottom mb-1 mr-2" style="display: inline-block;" >Más Info</div>
										</div>	
									</div>
									</div>
								</div>	
							</div>
						</div>
						<div class="card mt-3" style=" padding: 10px;">
							<div class="row">
								<div class="col-2" style="justify-content: center;">
									<img src="img/logos/generalelectric.ico" class="my-2 mx-2 logo">
									
								</div>
								<div class="col-10">
									<div class="card-body" style="
									padding:0 !important; ">
									<div class="card-title font-weight-bold my-0">
	                  				Community Manager
	                  				</div>
									<div class="card-text mb-0 ">General Electric</div>
									<div style="font-size: 95%;" class="card-text mr-2 mb-0 font-weight-light text-justify">General Electric Company, también conocida como GE, es una corporación conglomerada multinacional de infraestructura, servicios financieros y medios de comunicación altamente diversificada... </div>
									<div class="row align-items-end" style="padding-top: 0px; margin-top: 2rem !important;">
										<div class="col-9" style="">
											<div class="card-text font-italic" style="margin-bottom: 10px;"><i class="icon-clock icono" ></i>Hace 6 dias <span class="ml-2 font-weight-light">CABA, Buenos Aires</span></div> 
										</div>
										<div class="col-3 d-flex justify-content-end">
											<div class="btn btn-primary card-link align-bottom mb-1 mr-2" style="display: inline-block;" >Más Info</div>
										</div>	
									</div>
									</div>
								</div>	
							</div>
						</div>
				
			


						<!--INFO EMPRESAS   Coca-Cola y Facebook
						<div class="card-deck">
							<div class="card empresa mt-3">
								<div class="card-body">
									<div class="card-title">Coca-Cola</div>
									<div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
									Lorem ipsum dolor sit amet, consectetur </div>
									<div class="mt-3 btn btn-primary card-link">Más Info</div>
								</div>
							</div>
						
							<div class="card empresa mt-3">
								<div class="card-body">
									<div class="card-title">Facebook</div>
									<div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
									Lorem ipsum dolor sit amet, consectetur </div>
									<div class="mt-3 btn btn-primary card-link">Más Info</div>
								</div>
							</div>
						</div>	
						 -->
					</div>
			

				</div>
					
			</div>
	

	<!--- FOOTER --->
			
					<div class="container-fluid">
					<div class="footer">
						<div class="col-12 HeaderFooter ">
							<footer class="footer" style="background-color: #303030; width: 100%; height: 300px;">
								
							</footer>
						</div>
					</div>
					</div>
			



		</div>
	</div>


	<!--Enlaces con archivos .js -->
	<script type="text/javascript" href="js/bootstrap.min.js"></script>
	<script type="text/javascript" href="js/jquery.min.js"></script>
</body>
</html>