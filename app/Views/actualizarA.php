
<?php
	$mysqli = new mysqli('localhost', 'root', '', 'agenda');
	$idAgenda = $datos[0]['id_agenda'];
	$idCategoria = $datos[0]['id_categoria'];
	$nombre = $datos[0]['nombre'];
	$paterno = $datos[0]['paterno'];
	$materno = $datos[0]['materno'];
	$telefono = $datos[0]['telefono'];
	$email = $datos[0]['email'];
	$fecha = $datos[0]['fecha'];
	
?>	  
<div class="container" style="background-color: #FFFFFF;"><br>
	<h3 class="text-center">Actualizar Contacto</h3><br>
	<div class="col-sm-10 mx-auto">

		<div class="container">
			<form class="form-control" method="POST" action="<?php echo base_url().'/actualizar' ?>">
				<div class="form-row">
					<div class="col-md-2 mb-3 text-center">
						<input type="text" id="idAgenda" name="idAgenda" hidden="" 
						value="<?php echo $idAgenda ?>">
						<label>ID Categoría</label>
						<select name="id_categoria" id="id_categoria" class="form-control" required>
							<option disabled selected required>Categoría</option>
							<?php
							$query = $mysqli -> query ("SELECT id_categoria, descripcion FROM t_categoria");
							while ($valores = mysqli_fetch_array($query)) {?>
								<option value="<?php echo $valores[0]?>"><?php echo $valores[1]?>
							</option>
						<?php }?>
					</select>
				</div>
				<div class="col-md-4 mb-3 text-center">
					<label>Nombre</label>
					<input type="text" value="<?php echo $nombre ?>" name="nombre" id="nombre" class="form-control text-center" 
					placeholder="Nombre (s)" required>
				</div>
				<div class="col-md-3 mb-3 text-center">
					<label>Apellido Paterno</label>
					<input type="text" name="paterno" id="paterno" class="form-control text-center" 
					placeholder="Primer Apellido" value="<?php echo $paterno ?>" required>
				</div>
				<div class="col-md-3 mb-3 text-center">
					<label>Apellido Materno</label>
					<input type="text" name="materno" class="form-control text-center" 
					id="materno" value="<?php echo $materno ?>" placeholder="Segundo Apellido" required>
				</div>
				<div class="col-md-4 mb-3 text-center">
					<label>Telefono</label>
					<input type="Number" name="telefono" class="form-control text-center" 
					id="telefono" value="<?php echo $telefono ?>" placeholder="55 123456789" required>
				</div>
				<div class="col-md-4 mb-3 text-center">
					<label>Correo Electrónico</label>
					<input type="text" name="email" class="form-control text-center" 
					id="email" value="<?php echo $email ?>" placeholder="example@example.com" required>
				</div>
				<div class="col-md-4 mb-3 text-center">
					<label>Fecha</label>
					<input type="text" name="fecha" class="form-control text-center" 
					id="fecha" value="<?php echo $fecha ?>" placeholder="01/01/2020" required>
				</div>
				<button type="submit" class="btn mx-auto" style="background-color: #44BBA4; color: #FFFFFF;">Agregar</button>
			</div><br>
		</form>
	</div>
</div><br><br><br><br><br>	