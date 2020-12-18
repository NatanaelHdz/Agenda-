
<div class="container" style="background-color: #FFFFFF;"><br>
	<h3 class="text-center">Categorías</h3><br>
	<div class="col-sm-10 mx-auto">

		<div class="container">
			<form class="form-control" method="POST" action="<?php echo base_url().'/CrearC' ?>">
				<div class="form-row">
					<div class="col-md-2 mb-3 text-center">
						<label>ID_Categoría</label>
						<input type="text" name="id_categoria" id="id_categoria" class="form-control text-center" 
						 placeholder="123" required>
					</div>

					<div class="col-md-4 mb-3 text-center">
						<label>Nombre</label>
						<input type="text" name="nombre" id="nombre" class="form-control text-center" 
						 placeholder="Nombre (s)" required>
					</div>
					<div class="col-md-3 mb-3 text-center">
						<label>Descripción</label>
						<input type="text" name="descripcion" id="descripcion" 
						class="form-control text-center" 
						 placeholder="Primer Apellido" required>
					</div>
					<div class="col-md-3 mb-3 text-center">
						<label>Fecha</label>
						<input type="text" name="fecha" class="form-control text-center" 
						id="fecha" placeholder="01/01/2020" required>
					</div>
					<button type="submit" class="btn mx-auto" style="background-color: #44BBA4; color: #FFFFFF;">Agregar</button>
				</div><br>
			</form>
		</div>
	</div><br>
	<h4 class="text-center">Información de Categorías</h4><br>
	<div class="container">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<table class="table table-hover table-dark text-center" id="tablaDatos">
						<tr>
							<th>ID_Categoria</th>
							<th>Nombre</th>
							<th>Descripción</th>
							<th>Fecha</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</tr>
						<?php foreach ($datos as $key):?>
							<tr>
								<td><?php echo $key->id_categoria ?> </td>
								<td><?php echo $key->nombre ?> </td>
								<td><?php echo $key->descripcion ?> </td>
								<td><?php echo $key->fecha ?> </td>
								<td>
									<a href="<?php echo base_url().'/obtenerC/'.$key->id_categoria ?>" class="btn btn-sm" style="background-color: #44BBA4; color: #FFFFFF;" >Editar</a>
								</td>
								<td>
									<a href="<?php echo base_url().'/eliminarC/'.$key->id_categoria ?>" class="btn btn-sm" style="background-color: #393E41; color: #FFFFFF;">Eliminar</a>								
								</td>
							</tr>
						<?php endforeach; ?>
					</table>
				</div>
			</div>
		</div>
	</div>
			

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">
		let mensaje = '<?php echo $mensaje ?>';

		if(mensaje == '0'){
			swal(':D', '¡Agregado con exito!', 'success');
		}else if(mensaje == '1'){
			swal(':(', '¡Fallo al agregar!', 'error');
		}else if(mensaje == '2'){
			swal(':D', '¡Actualizado con exito!', 'success');
		}else if(mensaje == '3'){
			swal(':(', '¡Fallo al actualizar!', 'error');
		}else if(mensaje == '4'){
			swal(':D', '¡Eliminado con exito!', 'success');
		}else if(mensaje == '5'){
			swal(':(', '¡Fallo al eliminar!', 'error');
		}
	</script>
    
  </body>
</html>