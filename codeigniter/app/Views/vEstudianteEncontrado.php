<!DOCTYPE html>
<html>

<head>
    <title>Estudiante encontrado</title>
    <?php echo view('vEnlaces'); ?>
</head>

<body>
    <?php echo view('vNavbar.php'); ?>
    
    <div class="container">
		<h1>Registro encontrado</h1>

		<form method="POST" action="../Home/actualizarRegistro">
			<input type="hidden" class="form-control" id="control" name="control" value="<?php echo $NoControl; ?>">
			<div>
				<label for="nombre" class="col-sm-2 col-form-label">Nombre
				</label>
				<div>
					<input type="nombre" class="form-control" id="nombre" name="nombre" value="<?php echo $Nombre; ?>">
				</div>
			</div>
			<div class="mb-3 row">
				<label for="foto" class="col-sm-2 col-form-label">Apellidos</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $Apellidos; ?>">					
				</div>
			</div>
            <div class="mb-3 row">
				<label for="foto" class="col-sm-2 col-form-label">Grado</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="grado" name="grado" value="<?php echo $Grado; ?>">					
				</div>
			</div>
            <div class="mb-3 row">
				<label for="foto" class="col-sm-2 col-form-label">Grupo</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="grupo" name="grupo" value="<?php echo $Grupo; ?>">					
				</div>
			</div>
            <div class="mb-3 row">
				<label for="foto" class="col-sm-2 col-form-label">Carrera</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="carrera" name="carrera" value="<?php echo $Carrera; ?>">					
				</div>
			</div>
			<div class="mb-3 row">
				<button type="submit" class="btn btn-primary mb-3">
					Actualizar Estudiante
				</button>
				<a type="button" class="btn btn-danger mb-3" href="<?php echo base_url(); ?>
				/Home/eliminarEstudiantes/<?php echo $NoControl; ?>">Eliminar</a>
			</div>
		</form>
	</div>
    <?php echo view('vFooter.php'); ?>
</body>

</html>