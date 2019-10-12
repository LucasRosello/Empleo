<?php
		require 'php/conexion.php';

	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Oferta de Empleo</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body style="background-color: white;">
	<div class="container-fluid">
		

		<!-- HEADER -->
		        <nav class="navbar navbar-expand-lg navbar-dark bg-info">
		            <div class="container">

		              <!--- NAV BAR --->

		              <img src="http://www.lorempixel.com/60/60" class="border border-info rounded-circle">
		                <a class="navbar-brand" href="#">Tecnica 7 Banfield</a>
		                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		                  <span class="navbar-toggler-icon"></span>
		                </button>
		              <div class="collapse navbar-collapse" id="navbarSupportedContent">
		                  <ul class="navbar-nav mr-auto">
		                    <li class="nav-item active">
		                      <a class="nav-link" href="../index/index.php">Home <span class="sr-only">(current)</span></a>
		                      </li>
		                      <li class="nav-item">
		                        <a class="nav-link" href="#">Link</a>
		                      </li>
		                      <li class="nav-item dropdown">
		                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                          Dropdown
		                        </a>
		                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		                            <a class="dropdown-item" href="registro.html">Registro</a>
		                            <a class="dropdown-item" href="login.html">iniciar secion</a>
		                            <div class="dropdown-divider"></div>
		                            <a class="dropdown-item" href="#">Something else here</a>
		                        </div>
		                      </li>

		                      <!--- BARRA DE NOTIFICACIONES --->

		                      <li class="nav-item dropdown">
		                            <a class="nav-link text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                            <i class="fa fa-bell"></i>
		                            </a>
		                            <ul class="dropdown-menu">
		                              <li class="head text-light bg-dark">
		                                  <div class="row">
		                                      <div class="col-lg-12 col-sm-12 col-12">
		                                      <span>Notifications (3)</span>
		                                        <a href="" class="float-right text-light">Mark all as read</a>
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
		                                    <a href="" class="text-light">View All</a>
		                                </li>
		                            </ul>
		                        </li>   
		                    </ul>
		                </div>
		              </div>
		        </nav>
		        <!--END HEADER-->

		
		<!--BODY-->
		<div class="container ">
			<div class="row body mt-3">
				<!--IMG-->
				<div class="col-4 img ">	
					<div class="foto"></div>
				</div>
				<!--END IMG-->

				<!--DESCRIPCION-->
				<div class="col-lg-8 col-md-12 col-xs-12 ">
					
					<div class="row ">
						<!--TITULO-->
						<div class="col-12 px-0">
							<div class="alert alert-primary" rol="alert">
								<h1 class="alert-heading text-center" style="font-weight: lighter;"><?php echo $textoanuncio[0]['titulo']; ?></h1>
								<p class="alert-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>						
						</div>

						<!--END TITULO-->

						<!--Descrip General-->

							<div class="card mt-2 descripcion border borde-primary " >
								<div class="card-body">
									<p class="card-heading text-center" style="font-weight: lighter; font-size: 22px; color:#004085; ">Descipcion General</p>

									<p class="card-text" style="font-weight: bolder; ">Lugar de trabajo: </p>
									<p class="card-text"  ><?php echo $textoanuncio[0]['descripcion'];?></p>
								</div>	
							</div>	
						<!--Descrip General FIN..-->

						<!--Descrip Detallada-->
							<div class="card mt-2 descripcion border borde-primary" >
								<div class="card-body">
									<p class="card-heading text-center" style="font-weight: lighter; font-size:22px ; color:#004085;">Descipcion Detallada</p>

									<p class="card-text" style="font-weight: bolder; ">Requerimientos: </p>
									<p class="card-text" ><?php echo $textoanuncio[0]['requerimiento'];?></p>

									<p class="card-text" style="font-weight: bolder; ">Requisitos: </p>
									<p class="card-text" ><?php echo $textoanuncio[0]['requisitos']?></p>

								</div>
								
							</div>

						<!--Descrip Detallada FIN..-->
					</div>
						<!--BTN-->
						
							<div class="row mt-3 justify-content-center">
								<div class="col-xs-12 col-lg-3 d-flex d-block" style="margin-left: 0px; margin-right: 0px;">
									<button type="button" class="btn btn-danger btn-lg btn-block " style="margin-left: 0px; margin-right: 0px;">Aplicar</button>
								</div>
							</div>							
						

						<!--ENDBTN-->

						
					
				</div>	
				<!--END DESCRIPCION-->
				
			</div>	
		</div>
		<!--END BODY-->	


		<!--FOOTER-->
		<div class="row">
			<div class="col-12 mt-5">
				<div class="alert alert-primary" rol="alert">
					<h1 class="alert-heading">footer</h1>
				</div>
			</div>

		</div>
		<!--END FOOTER-->
		
	</div>
	


	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>

</body>
</html>