
<?php
	$idCategoria = $datos[0]['id_categoria'];
	$nombre = $datos[0]['nombre'];
	$descripcion = $datos[0]['descripcion'];
	$fecha = $datos[0]['fecha'];
	
?>	  
<div class="container" style="background-color: #FFFFFF;"><br>
	<h3 class="text-center">Actualizar Contacto</h3><br>
	<div class="col-sm-10 mx-auto">

		<div class="container">
			<form class="form-control" method="POST" action="<?php echo base_url().'/actualizarC' ?>">
				<div class="form-row">
				<div class="col-md-2 mb-3 text-center">
					<label>ID_Categoría</label>
					<input type="text" name="id_categoria" id="id_categoria" class="form-control text-center" 
					placeholder="Primer Apellido" value="<?php echo $idCategoria ?>" required>
				</div>
				<div class="col-md-3 mb-3 text-center">
					<label>Nombre</label>
					<input type="text" value="<?php echo $nombre ?>" name="nombre" id="nombre" class="form-control text-center" 
					placeholder="Nombre (s)" required>
				</div>
				<div class="col-md-4 mb-4 text-center">
					<label>Descripción</label>
					<input type="text" name="descripcion" class="form-control text-center" 
					id="descripcion" value="<?php echo $descripcion ?>" placeholder="55 123456789" required>
				</div>
				<div class="col-md-3 mb-3 text-center">
					<label>Fecha</label>
					<input type="text" name="fecha" class="form-control text-center" 
					id="fecha" value="<?php echo $fecha ?>" placeholder="01/01/2020" required>
				</div>
				<button type="submit" class="btn mx-auto" style="background-color: #44BBA4; color: #FFFFFF;">Actualizar</button>
			</div><br>
		</form>
	</div>
</div><br><br><br><br><br>	