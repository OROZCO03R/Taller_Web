<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
<div class="polig">
	
	<h1><center> Bienvenid@ </center> </h1>
	<?php echo view('vHead.php');?>
	
	</div>
</head>
<body>

	<center>
	<font face="Product Sans,arial,verdana" size="5" color="black">
		
	<p> Registro de Docentes a Imparticiones de Cursos</p>
		<h1>Registra un Nuevo Docente</h1>
			
	<p>Ingresa Corectamente los datos de los Docentes</p>
  <form method="POST" action="../Home/insertarForm">
	<div class="form-group">
		<label for="nombre">Nombre</label>
		<input type="text" requiered="true" name="Nombre" placeholder="nombre" id="Nombre">
		<br>
	</div>
	<div class="form-group">
		<label for="apellidos">Apellidos</label>
		<input type="text" requiered="true" name="Apellidos" placeholder="Apellidos" id="Apellidos"><br>
	</div>
	<div class="form-group">
		<label for="correo">Correo electronico</label>
		<input type="text" requiered="true" name="Correo" placeholder="correo electronico" id="Correo">
	<br>
	</div>
	<div class="form-group">
		<label for="contraseña">Contraseña</label>
		<input type="password" requiered="true" name="Contrasena" placeholder="Contraseña" id="Contrasena">
		<br>
	</div>
	<div class="form-group">
		<label for="carrera">Carrera Acreditada</label>
		<input type="text" requiered="true" name="Carrera" placeholder="Carrera" id="Carrera">
	<br>
	</div>
	<div class="form-group">
		<label for="contraseña">Numero de Telefono</label>
		<input type="text" requiered="true" name="Telefono" placeholder="Telefono" id="Telefono">
	<br>
	</div>
	<div class="form-group">
		<label for="contraseña">Domicilio</label>
		<input type="text" requiered="true" name="Domicilio" placeholder="Domicilio" id="Domicilio">
	<br>
	</div>
	<div class="form-group">
		<label for="contraseña">Estado de Residencia</label>
		<input type="text" requiered="true" name="Residencia" placeholder="Estado" id="Residencia">
	<br>
	</div>
	<input type="submit" name="Registrar" value="Registrar" class="btn btn-primary"><br><br>

	</font>
 
<br>
 </center>
</body>
<?php echo view('vFooter.php');?>
</html>