<?php 
require_once("includes/_funciones.php");
$usuarios = consultarUsuarios();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Usuarios</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active"><a href="usuarios.php" class="nav-link">Usuarios</a></li>
			<li class="nav-item active"><a href="sucursales.php" class="nav-link">Sucursales</a></li>
		</ul>
	</nav>
	<section class="container">
		<div class="row">
			<div class="col-sm">
				<table class="table">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Teléfono</th>
							<th>Correo</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						foreach ($usuarios as $key => $value) {
							?>
							<tr>
								<td><?php echo $value['nombre_usr'] ?></td>
								<td><?php echo $value['telefono_usr'] ?></td>
								<td><?php echo $value['correo_usr'] ?></td>
								<td>
									<a href="#">Editar</a>
									<a href="#" class="eliminar" data-id="<?php echo $value['id_usr'] ?>">Eliminar</a>
								</td>
							</tr>
							<?php
						}
						?>
					</tbody>
				</table>
			</div>
		</div>		
	</section>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script>
		$(".eliminar").click(function(e){
			e.preventDefault();
			let id = $(this).data('id');
			let obj = {
				"accion" : "eliminarUsuario",
				"usuario" : id
			};
			$.post( "includes/_funciones.php",obj, function(data) {
				alert(data);
			});
		});
	</script>
</body>
</html>