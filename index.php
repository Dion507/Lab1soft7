	<!DOCTYPE html>
	<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="estilos\estilos.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
			<!--[if lt IE 9]>
				<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
				<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			<![endif]-->
			</head>
			<body>
				<!-- INICIA HEADER-->
				<div class="page-header">
					<img src="recursos\logo-utp.png" class="img-logo-header">
				</div>
				<!-- INICIA HEADER-->
				<!-- INICIA NAV-->
				<nav class="navbar navbar-default" id="navegacion" role="navigation">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">Laboratorio: Elementos de la POO y manejo de excepciones en PHP</a>
						</div>
						
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse navbar-ex1-collapse">
							<ul class="nav navbar-nav">
								<li ><a href="#">Programa 1</a></li>
								<li class="active"><a href="#">Programa 2 - Daniel Ubarte</a></li>
								<li ><a href="#">Programa 2 - Jose Ortega</a></li>
								<li ><a href="#">Programa 3</a></li>
							</ul>
							
						</div><!-- /.navbar-collapse -->
					</div>
				</nav>
				<!-- TERMINA NAV-->
				
				<!-- INICIA MAIN-->
				<main>
					<!-- INICIO: Contenedor principal -->
					<div class="container">

						<!-- INICIO: Fila -->
						<div class="row">

							<!-- INICIO: Columna 1 -->
							<div class="col-md-6">
								<div class="panel panel-default">
									<div class="panel-body" id="formulario"> <!-- INICIA PANEL-->
										<div></div>
										<form action="" method="POST" role="form"> <!-- INCIA FORM -->
											<legend><h1>Programa 2</h1></legend>  
											<fieldset> <!-- INCIA CAMPO CUADERNOS -->
												<div class="panel panel-default"> <!-- INCIA CAMPO CUADERNOS PANEL -->
													<div class="panel-body">
														<LABEl>Cuadernos</LABEl>
														<input type="number" name="" id="input" class="form-control" value="0" min="0" max="" step="" required="required" title="">
													</div> 
												</div><!-- TERMINA CAMPO CUADERNOS PANEL -->
											</fieldset> <!-- TERMINA CAMPO CUADERNOS -->
											
											<fieldset> <!-- INCIA CAMPO Bolígrafos  -->
												<div class="panel panel-default"> <!-- INCIA CAMPO Bolígrafos PANEL -->
													<div class="panel-body">
														<LABEl>Bolígrafos </LABEl>
														<input type="number" name="" id="input" class="form-control" value="0" min="0" max="" step="" required="required" title="">
													</div> 
												</div><!-- TERMINA CAMPO Bolígrafos PANEL -->
											</fieldset> <!-- TERMINA CAMPO Bolígrafos -->

											<fieldset> <!-- INCIA CAMPO Accesorios  -->
												<div class="panel panel-default"> <!-- INCIA CAMPO Accesorios PANEL -->
													<div class="panel-body">
														<LABEl>Accesorios </LABEl>
														<input type="number" name="" id="input" class="form-control" value="0" min="0" max="" step="" required="required" title="">
													</div> 
												</div><!-- TERMINA CAMPO Accesorios PANEL -->
											</fieldset> <!-- TERMINA CAMPO Accesorios -->

											<button type="submit" class="btn btn-primary">Comprar</button>  <!-- BOTON SUBMIT -->
											
										</form> <!-- INCIA FORM -->
									</div> <!-- TERMINA PANEL-->
								</div>
							</div>
							<!-- FIN: Columna 1 -->

							<!-- INICIO: Columna 2 -->
							<div class="col-md-6">
								<div> <!-- INICIA OUTPUT -->
									<div class="panel panel-default">
										<div class="panel-body" id="panel-output">
											aqui ira el resultado del calculo :v
										</div>
									</div>
								</div> <!-- TERMINA OUTPUT -->
							</div>
							<!-- FIN: Columna 2 -->

						</div>
						<!-- FIN: Fila -->

					</div>
					<!-- FIN: Contenedor principal -->


					<div class="container-fluid"> <!-- INICIA CONTENEDOR-->
						
					</div> <!-- TERMINA CONTENEDOR-->
				</main>
				<!-- TERMINA MAIN-->

				<!-- INICIA FOOTER-->
				<div class="panel panel-default">
					<div class="panel-body" id="panel-footer">
						<img src="recursos\logo-utp.png" class="img-logo-footer">
						<div class="contenido-footer">
							<h3>Universidad Tecnológica de Panamá</h3>
							<h4>Centro Regional De Cocle</h4>
							<h4>Licenciatura en Desarrollo y Gestión de Software</h4>
							<h4>Ing. María Yahaira Tejedor M. 	</h4>
							
							<h4>Laboratorio: Elementos de la POO y manejo de excepciones en PHP</h4>
						</div>
					</div>
					<div class="panel-footer" id="panelFooter">
						<p>Miguel Gomez - Daniel Ubarte - Oliver Gonzales - Gerardo Tejada</p>
					</div>
				</div>
				<!-- TERMINA FOOTER-->
				
				<!-- jQuery -->
				<script src="//code.jquery.com/jquery.js"></script>
				<!-- Bootstrap JavaScript -->
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
				<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
				<script src="Hello World"></script>
			</body>
			</html>