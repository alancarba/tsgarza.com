<!DOCTYPE html>
<html lang="es-MX">
<head>
	<meta charset="UTF-8">
	<title>TS & Garza</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,500,700,900" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
		<div class="topHeader">
			<div class="login float-right">
				<a href="#">Iniciar Sesión > </a>
			</div>
		</div>
		<div class="bottomHeader" id="bottomHeader">
			<div class="logo float-left">
				<img src="img/logo.png" alt="TS & Garza Logo">
			</div>
			<nav>
				<ul>
					<li><a href="#">Inicio</a></li>
					<li><a href="#">Nosotros</a></li>
					<li class="activo"><a href="#">Servicios</a></li>
					<li><a href="#">Contacto</a></li>
					<li><a href="#">Noticias</a></li>
				</ul>
			</nav>
		</div>
		<div id="slider"></div>
	</header>
	<section id="contenedorNosotros">
		<div class="container" id="containerNosotros">
			<div class="row">
				<div class="col-sm-12">
					<h2>Nosotros</h2>
					<h1>CREAMOS<br/>SOLUCIONES</h1>
					<h3>a tus necesidades</h3>
					<p>El éxito de un negocio es dar un excelente servicio o producto a todos nuestros clientes. Toda empresa con éxito va de la mano con una <b>Asesoría Contable, Fiscal y Financiera</b>; es por eso sometemos a su consideración nuestra propuesta de servicios proponiendo el mejor esquema diseñado para atender sus necesidades, buscando rentabilidad, legalidad y profesionalismo.</p>
					<p>Nuestro equipo de trabajo reúne el conocimiento y la experiencia de varios años de trabajo en diversas empresas que nos han permitido unir esfuerzos y desarrollar los esquemas de control contable, fiscal y legal que harán más eficiente a su empresa.
					</p>
				</div>
			</div>
		</div>
	</section>
	<section id="topServicios">
		<div class="container" id="containertopServicios">
			<div class="row">
				<div class="col-sm-3">
					<div class="flex">
						<h2>5</br></h2>
						<h3>Sucursales</h3>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="flex">
						<h2>10</br></h2>
						<h3>Años de experiencia</h3>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="flex">
						<h2>1,080</br></h2>
						<h3>Clientes Satisfechos</h3>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="flex">
						<h2>235</br></h2>
						<h3>Empleados de TS</h3>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="servicios">
		<div class="container" id="containerServicios">
			<div class="row">
				<div class="col-sm-6 offset-sm-3">
					<h2>NUESTROS SERVICIOS</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<div class="flex" id="imagen1">
						<h4><b>ADMINISTRACIÓN</b> DE NÓMINA</h4>
						<h5><br/>CREAMOS UNA ESTRATÉGIA QUE OPTIMIZE LA ADMINISTRACIÓN DE SU EMPRESA</h5>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="flex" id="imagen2">
						<h4><b>SELECCIÓN Y RECLUTAMIENTO</b><br/> DE PERSONAL</h4>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="flex" id="imagen3">
						<h4><b>ESTUDIOS</b> SOCIOECONÓMICOS</h4>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="flex" id="imagen4">
						<h4><b>REGISTROS</b> CONTABLES</h4>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="flex" id="imagen5">
						<h4><b>ESTRATÉGIAS</b> FISCALES</h4>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="flex" id="imagen6">
						<h4><b>GESTORÍA Y REGISTRO</b><br/> DE PERSONAL</h4>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="app">
		<div class="container" id="containerApp">
			<div class="row">
				<div class="col-sm-12">
					<h2>CONÉCTATE CON NUESTRA ACCOUNTING APP</h2>
					<h3></br>Ingresa a nuestra aplicación para obtener toda tu documentación</h3>
				</div>
				<div class="col-sm-8 offset-sm-4">
					<button type="button" class="btn btn-primary btnApp">VER MÁS</button>
				</div>
			</div>
		</div>
	</section>
	<section id="topContacto"></section>
	<section id="contacto">
		<div class="container" id="containerContacto">
			<div class="row">
				<div class="col-sm-6">
					<h3>CONTÁCTANOS</h3>
					<form action="#" id="frmContacto" method="POST">
						<div class="form-group">
							<label for="nombre">Nombre Completo:</label>
							<input type="text" id="nombre" name="nombre" class="form-control">
						</div>
						<div class="form-group">
							<label for="telefono">Número Telefónico:</label>
							<input type="tel" id="telefono" name="telefono" class="form-control">
						</div>
						<div class="form-group">
							<label for="correo">Correo Electrónico:</label>
							<input type="text" id="correo" name="correo" class="form-control">
						</div>
						<div class="form-group">
							<label for="comentario">Comentario:</label>
							<textarea name="comentario" id="comentario" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<div class="col-sm-3 offset-sm-3">
								<button type="button" class="btn btn-primary btnContacto">Enviar</button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-sm-6">
					<h4>OFICINAS CORPORATIVAS</h4>
					<h5>Calle Chilam Balam 248</br>SM-50 Fracc. Lomas Virreyes</br>C.P. 77533</br>Cancún Quintana Roo.</br></br>INFO@TSDELAGARZA.COM</br></br>(998) 206-3256</h5>
				</div>
			</div>
		</div>
	</section>
	<section id="topFooter">
		<div class="container" id="containertopFooter">
			<div class="row">
				<div class="col-sm-4" id="logoFooter">
					<div class="row">
						<div class="col-sm-4">
							<div class="logoFooter float-left">
								<img src="img/logo.png" alt="TS & Garza Logo">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="flex">
								<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada laoreet leo, sit amet laoreet massa hendrerit sit amet. Praesent semper massa vel lectus dapibus, sit amet dapibus diam faucibus. Aenean id eros quis lorem viverra tincidunt.</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4" id="redesSociales">
					<div class="row">
						<div class="col-sm-9 offset-sm-3">
							<div class="flex">
								<h4>REDES SOCIALES</h4>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-9 offset-sm-3">
							<div class="flex">
								<div class="facebook-twitter float-left">
									<img id="facebook" src="img/imgfacebook_footer.png" alt="facebook">
									<img id="twitter" src="img/imgtwitter_footer.jpg" alt="twitter">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4" id="serviciosFooter">
					<div class="row">
						<div class="col-sm-4">
							<div class="flex">
								<h4>SERVICIOS</h4>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="flex">
								<nav>
									<ul>
										<li><img src="img/logoservicios_footer.png"><a href="#"> Administración de Nómina</a></li>
										<li><img src="img/logoservicios_footer.png"><a href="#"> Selección y Reclutamiento de personal</a></li>
										<li><img src="img/logoservicios_footer.png"><a href="#"> Estudios Socioeconómicos</a></li>
										<li><img src="img/logoservicios_footer.png"><a href="#"> Registros Contables</a></li>
										<li><img src="img/logoservicios_footer.png"><a href="#"> Estrategias Fiscales</a></li>
										<li><img src="img/logoservicios_footer.png"><a href="#"> Gestoría y Registro de Marca</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</section>
	<section id="bottomFooter">
		<div class="row">
			<div class="col-sm-12">
				<div class="flex">
					<h4>Copyright - TS & DE LA GARZA Consultores</h4>
				</div>
			</div>
		</div>
	</section>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>












