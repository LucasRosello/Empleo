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
	<div class="container-fluid">
		<nav class="navbar navbar-exterior navbar-expand-lg navbar-dark bg-info">
			<div class="container">

				<!--- NAV BAR --->

				<img src="img/ico.ico">
  				<a class="navbar-brand" href="#">Tecnica 7 Banfield</a>
  				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    				<span class="navbar-toggler-icon"></span>
  				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
			    	<ul class="navbar-nav mr-auto">
			    		<li class="nav-item active">
			        	<a class="nav-link" href="indexPAG.php">Inicio</a>
			      		</li>
			      		
			      		<li>
			      			<button type="button" href="registro.html" id="botonsubircv" class="btn btn-outline-primary">Subi tu CV</button>
			      		</li>
			      		<li>
			      			<button type="button" class="btn btn-dark">Empresas</button>
			      		</li>
			      		
			      		

			      		<!--- BARRA DE NOTIFICACIONES --->

			       		<li class="nav-item dropdown">
			                
			                <a class="nav-link text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			                <i class="icon-bell-alt"></i>
			                </a>
			                <ul class="dropdown-menu">
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
			                            	<img src="/demo/man-profile.jpg" class="w-50 rounded-circle">
			                          	</div>    
			                          	<div class="col-lg-8 col-sm-8 col-8">
			                            	<strong class="text-info">David John</strong>
			                            	<div>
			                             		Lorem ipsum dolor sit amet, consectetur
			                            	</div>
			                            	<small class="text-warning">27.11.2015, 15:00</small>
			                          	</div>    
			                        </div>
			                    </li>
			                    <li class="notification-box bg-gray">
			                        <div class="row">
			                          	<div class="col-lg-3 col-sm-3 col-3 text-center">
			                            	<img src="/demo/man-profile.jpg" class="w-50 rounded-circle">
			                          	</div>    
				                        <div class="col-lg-8 col-sm-8 col-8">
				                        	<strong class="text-info">David John</strong>
				                            <div>
				                            	Lorem ipsum dolor sit amet, consectetur
				                            </div>
				                            <small class="text-warning">27.11.2015, 15:00</small>
				                        </div>    
			                        </div>
			                    </li>
			                    <li class="notification-box">
			                        <div class="row">
			                          	<div class="col-lg-3 col-sm-3 col-3 text-center">
			                            	<img src="/demo/man-profile.jpg" class="w-50 rounded-circle">
			                          	</div>    
			                          	<div class="col-lg-8 col-sm-8 col-8">
			                            	<strong class="text-info">David John</strong>
			                            	<div>
			                            		Lorem ipsum dolor sit amet, consectetur
			                            	</div>
			                            	<small class="text-warning">27.11.2015, 15:00</small>
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

		<div class="row">
			<div class="Separador w-100"></div>
		
		

		<!-- BARRA DE BUSQUEDA -->
		<div class="container" id="containerbarradebusqueda" style="margin-top:20px; padding-right: 5px;">
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
						<button class="inputbuscar">Buscar</button>
					</div>
				</div>
			</div>
		</div>

		 <!-- SEGUNDO CONTAINER ARRGEGLAR --->


		 <div class="container">
			<div class="Separador w-100"></div>

			<!-- FILTROS -->
			<div class="row" id="maincontainer">
				<div class="col-4 mt-3">
					
					<div class="card filtros">
						<h3>Destacados</h3>
						<a href="">Puestos</a>
						<a href="">programador(9)</a>
						<a href="">Administrativo(7)</a>
						<a href="">Administrativo(7)</a>
						<a href="">Administrativo(7)</a>
						<a href="">Administrativo(7)</a>
						<a href="">Administrativo(7)</a>
			            <p>
						<h4>Empresas</h4>
						<a href=<?php echo $listalinks[0]['link'];?>>cocacola(9)</a>
						<a href=<?php echo $listalinks[1]['link'];?>>Facebook(4)</a>
						<a href=<?php echo $listalinks[2]['link'];?>>Facebook(4)</a>
						<a href=<?php echo $listalinks[3]['link'];?>>Facebook(4)</a>
						<a href=<?php echo $listalinks[4]['link'];?>>Facebook(4)</a>
						<a href=<?php echo $listalinks[5]['link'];?>>Facebook(4)</a>
						<a href=<?php echo $listalinks[5]['link'];?>>Facebook(4)</a>
					</div>
						
				</div>
			

			<!-- OFERTAS DE TRABAJO -->


				<div class="col-8">
					<div class="card mt-3" style="height: 200px;">
						<div class="row">
							<div class="col-2" style="justify-content: center; padding-top: 15px;">
								<img src="http://lorempixel.com/100/100" class="my-2 mx-2">
								
							</div>
							<div class="col-10">
								<div class="card-body" style="padding: 5px;
								padding-left:20px; padding-top: 15px;">
								<div class="card-title font-weight-bold my-0">
                  <?php echo $texto[0]['titulo']; ?>
                  <span class="badge badge-danger">NUEVO</span> </div>
								<div class="card-text mb-0 ">Compañia compañia</div>
								<div style="font-size: 95%;" class="card-text mr-2 mb-0 font-weight-light text-justify"><?php echo $texto[0]['descripcion']; ?></div>
								<div class="row align-items-end mt-3" style="padding-top: 0px;">
									<div class="col-9" style="">
										<div class="card-text font-italic" style="margin-bottom: 10px;">Hace 2 dias <span class="ml-2 font-weight-light">CABA, Buenos Aires</span></div> 
									</div>
									<div class="col-3">
										<div class="btn btn-primary card-link align-bottom mb-1" style="display: inline-block;" >Más Info</div>
									</div>
									
									
								</div>
								</div>
							</div>
							
								
						</div>
					</div>
					<div class="card mt-3" style="height: 200px;">
						<div class="row">
							<div class="col-2" style="justify-content: center;">
								<img src="http://lorempixel.com/100/100" class="my-2 mx-2">
								
							</div>
							<div class="col-8">
								<div class="card-body" style="padding-top: 5px; padding-bottom: 5px; ">
								<div class="card-title font-weight-bold my-0">Programador PHP SSR <span class="badge badge-danger">NUEVO</span> </div>
								<div class="card-text mb-0 ">Compañia compañia</div>
								<div class="card-text mb-0 font-weight-light">descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción...</div>
								<div class="card-text font-italic" style="margin-top: 35px;">Hace 2 dias <span class="ml-2 font-weight-light">CABA, Buenos Aires</span></div>
								</div>
							</div>
							<div class="col-2 pl-0 align-self-end">
								
								<div class="btn btn-primary card-link mt-5 align-bottom mb-1" >Más Info</div>
							</div>
								
						</div>
					</div>
					<div class="card mt-3">
						<div class="card-body">
						<div class="card-title">Programador PHP SSR  <span class="badge badge-danger">Nuevo</span></div>
						<div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. </div>
						<div class="btn btn-primary card-link mt-3" >Más Info</div>
						</div>
					</div>
					<div class="card mt-3">
						<div class="card-body">
						<div class="card-title">Programador PHP SSR</div>
						<div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. </div>
						<div class="btn btn-primary card-link mt-3">Más Info</div>
						</div>
					</div>
			
		


					<!--INFO EMPRESAS   Coca-Cola y Facebook -->
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
					</div>
		

				</div>
			</div>
	

	<!--- FOOTER --->
				<div class="container-fluid mt-5">
					<div class="row">
						<div class="col-12 HeaderFooter ">
							<footer class="footer"></footer>
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