<?php
	require'php/conexion.php';

	$localidad = localidad();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro de empresa</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">

</head>
<body>
	<div class="container">
        <!-- HEADER -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-info">
            <div class="container">

              <!--- NAV BAR --->

              <img src="http://www.lorempixel.com/60/60">
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
                            <a class="dropdown-item" href="registrodeempresa.php" class="disable">Registro</a>
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
        <div class="row justify-content-center">
            	<div class="col-12 text-center mt-5" >
            		<div class="alert alert-info">
            			<h1>Registro de empresa</h1>
            		</div>
            	</div>
        </div>
        <!--Div registro de empresa-->

    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
  		<div class="row justify-content-between ">
  			<div class="col-12 col-lg-4 mt-5">
  				<div class="card border border-info rounded d-flex div-registro">
  					<div class="card-heading mt-3">
  						<h1 class="text-center"><p class="text-secondary">empresa</p></h1>
  					</div>
  					<div class="card-body ">
  						<input type="text" name="cuit" placeholder="Ingrese CUIT" class="mt-3 bg-transparent border border-secondary text-center form-control" >
  						<input type="text" name="cuit" placeholder="Ingrese Nombre" class="mt-3 bg-transparent border border-secondary text-center form-control" >
  						<input type="text" name="cuit" placeholder="Ingrese Correo" class="mt-3 bg-transparent border border-secondary text-center form-control" >
  						<input type="password" name="cuit" placeholder="Ingrese Contraseña" class="mt-3 bg-transparent border border-secondary text-center form-control" >
  					</div>
  				</div>
  			</div>
  		<!--END Div registro-->

  		<!--Div registro de ubicacion-->
  			<div class="col-12 col-lg-4 mt-5">
  				<div class="card border border-info  d-flex div-registro">
  					<div class="card-heading mt-3">
  						<h1 class="text-center"><p class="text-secondary">ubicacion</p></h1>
  					</div>
  					<div class="card-body ">
  						<input type="text" name="cuit" placeholder="Ingrese calle" class="mt-3 bg-transparent border border-secondary text-center form-control" >
  						<input type="text" name="cuit" placeholder="Ingrese Numero" class="mt-3 bg-transparent border border-secondary text-center form-control" >
  						<a class="nav-link dropdown-toggle btn btn-info btn-block mt-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Localidad
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="registro.html"><?php echo $localidad[0]['descripcion'];?></a>
                              <a class="dropdown-item" href="registro.html"><?php echo $localidad[1]['descripcion'];?></a>
                              <a class="dropdown-item" href="registro.html"><?php echo $localidad[2]['descripcion'];?></a>
                              <a class="dropdown-item" href="registro.html"><?php echo $localidad[3]['descripcion'];?></a>
                              <a class="dropdown-item" href="registro.html"><?php echo $localidad[4]['descripcion'];?></a>
                              <a class="dropdown-item" href="registro.html"><?php echo $localidad[5]['descripcion'];?></a>
                              <a class="dropdown-item" href="registro.html"><?php echo $localidad[6]['descripcion'];?></a>
                              <a class="dropdown-item" href="registro.html"><?php echo $localidad[7]['descripcion'];?></a>
                              <a class="dropdown-item" href="registro.html"><?php echo $localidad[8]['descripcion'];?></a>
                              <a class="dropdown-item" href="registro.html"><?php echo $localidad[9]['descripcion'];?></a>
                              <a class="dropdown-item" href="registro.html"><?php echo $localidad[10]['descripcion'];?></a>
                              <a class="dropdown-item" href="registro.html"><?php echo $localidad[11]['descripcion'];?></a>
                              <a class="dropdown-item" href="registro.html"><?php echo $localidad[12]['descripcion'];?></a>
                              <a class="dropdown-item" href="registro.html"><?php echo $localidad[13]['descripcion'];?></a>
                              <a class="dropdown-item" href="registro.html"><?php echo $localidad[14]['descripcion'];?></a>
                              <a class="dropdown-item" href="registro.html"><?php echo $localidad[15]['descripcion'];?></a>
                              <a class="dropdown-item" href="registro.html"><?php echo $localidad[16]['descripcion'];?></a>
                              <a class="dropdown-item" href="registro.html"><?php echo $localidad[17]['descripcion'];?></a>
                              <a class="dropdown-item" href="registro.html"><?php echo $localidad[18]['descripcion'];?></a>
                              <a class="dropdown-item" href="registro.html"><?php echo $localidad[19]['descripcion'];?></a>
                              <a class="dropdown-item" href="registro.html"><?php echo $localidad[20]['descripcion'];?></a>
                              <a class="dropdown-item" href="registro.html"><?php echo $localidad[21]['descripcion'];?></a>
                              <a class="dropdown-item" href="registro.html"><?php echo $localidad[22]['descripcion'];?></a>
                              <a class="dropdown-item" href="registro.html"><?php echo $localidad[23]['descripcion'];?></a>
                              <a class="dropdown-item" href="registro.html"><?php echo $localidad[24]['descripcion'];?></a>
                          </div>
  						<input type="text" name="cuit" placeholder="Ingrese piso" class="mt-3 bg-transparent border border-secondary text-center form-control" >
  						<input type="text" name="cuit" placeholder="Ingrese depto" class="mt-3 bg-transparent border border-secondary text-center form-control" >
  					</div>
  				</div>
  			</div>
  		<!--END Div registro-->

  		<!--Div registro de contacto-->
  			<div class="col-12 col-lg-4 mt-5">
  				<div class="card border border-info  d-flex div-registro">
  					<div class="card-heading mt-3">
  						<h1 class="text-center"><p class="text-secondary">contacto</p></h1>
  					</div>
  					<div class="card-body ">
  						<input type="text" name="txt-mail" placeholder="Ingrese mail" class="mt-3 bg-transparent border border-secondary text-center form-control" >
  						<input type="text" name="txt-celular" placeholder="Ingrese celular" class="mt-3 bg-transparent border border-secondary text-center form-control" >
  						<input type="text" name="txt-documento" placeholder="Ingrese telefono" class="mt-3 bg-transparent border border-secondary text-center form-control" >
  						<input type="text" name="cuit" placeholder="Ingrese pagina" class="mt-3 bg-transparent border border-secondary text-center form-control" >
  						<input type="text" name="cuit" placeholder="Ingrese linkedin" class="mt-3 bg-transparent border border-secondary text-center form-control" >
              <input type="text" name="cuit" placeholder="Ingrese documento" class="mt-3 bg-transparent border border-secondary text-center form-control" >
  					</div>
  				</div>
  			</div>
  		<!--END Div registro-->
  		
      <input type="submit" name="btn-registrar" class="btn btn-info btn-lg btn-block mt-5" value="REGISTRAR">
      
      </div>
    </form>

	</div>

	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>