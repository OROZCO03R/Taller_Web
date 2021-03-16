
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Bienvenida</title>

<div class="polig">
	<center><h1><font color="#19E187">Bienvenid@</font></h1>
	<?php echo view('vHead.php');?>
	
 	<img src="<?php echo base_url('fotos/equipo.jpg'); ?>" />
 	<p>Espacio de prueba de comunicacion de la vista con el controlador</p>
 	</center>
</div>

</head>
<font face="Product Sans,arial,verdana" size="5" color="#19E187">
</head>
<body >
<center>
<h1>Eliminar estudiante</h1>
<p>Ingresa correctamente los datos del estudiante</p>


<form method="post">
	<div class="form-group">
		<label for="id_estud">Id de estudiante</label>
		<input type="text" requiered="true" name="ID" placeholder="ID" id="ID"><br>
	</div>
	<div class="form-group">
		<label for="correo">Correo electronico</label>
		<input type="text" requiered="true" name="EMAIL" placeholder="correo electronico" id="EMAIL"> 
		<br>
	</div>
	<div class="form-group">
		<label for="contraseña">Contraseña</label>
 		<input type="password" requiered="true" name="PASSWORD" placeholder="Contraseña" id="PASSWORD"> 
 		<br>
 	</div>
	<input type="submit" name="eliminar" value="eliminar" class="btn btn-primary"><br>

	<div class="form-group"> 
		<br><br>
		<p>En este formulario, se busca que se tenga una busqueda con una base de datos dependiendo de los datos que se ingresen, asi buscando al registro  encontrandolo se logre eliminar, sino puede que mande un mensaje de error de que no se encuentra el registro. </p>
</font>

</body>


 <?php echo view('vFooter.php');?>
</div>
</html>
