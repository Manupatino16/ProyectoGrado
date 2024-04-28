<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PATITAS</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/custom.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Agregar <b>Animal</b></h2></div>
                    <div class="col-sm-4">
                        <a href="index.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
                    </div>
                </div>
            </div>
            <?php
				include ("database.php");
				$animales= new Database();
				if(isset($_POST) && !empty($_POST)){
					$especie = $animales->sanitize($_POST['especie']);
					$nombre = $animales->sanitize($_POST['nombre']);
					$raza = $animales->sanitize($_POST['raza']);
					$edad = $animales->sanitize($_POST['edad']);
					$sexo = $animales->sanitize($_POST['sexo']);
					$caracteristicas = $animales->sanitize($_POST['caracteristicas']);
					
					$res = $animales->create($especie, $nombre, $raza, $edad, $sexo, $caracteristicas);
					if($res){
						$message= "Datos insertados con éxito";
						$class="alert alert-success";
					}else{
						$message="No se pudieron insertar los datos";
						$class="alert alert-danger";
					}
					
					?>
				<div class="<?php echo $class?>">
				  <?php echo $message;?>
				</div>	
					<?php
				}
	
			?>
			<div class="row">
				<form method="post">
				<div class="col-md-6">
					<label>Especie:</label>
					<input type="text" name="especie" id="especie" class='form-control' maxlength="100" required >
				</div>
				<div class="col-md-6">
					<label>Nombre:</label>
					<input type="text" name="nombre" id="nombre" class='form-control' maxlength="100" required >
				</div>
				<div class="col-md-6">
					<label>Raza:</label>
					<input type="text" name="raza" id="raza" class='form-control' maxlength="100" required>
				</div>
				<div class="col-md-6">
					<label>Edad:</label>
					<input type="text" name="edad" id="edad" class='form-control' maxlength="100" required>
				</div>
				<div class="col-md-6">
					<label>Sexo:</label>
					<input type="text" name="sexo" id="sexo" class='form-control' maxlength="64" required>
				</div>
				<div class="col-md-6">
					<label>Características:</label>
					<textarea  name="caracteristicas" id="caracteristicas" class='form-control' maxlength="255" required></textarea>
				</div>
				<div class="col-md-12 pull-right">
				<hr>
					<button type="submit" class="btn btn-success">Guardar datos</button>
				</div>
				</form>
			</div>
        </div>
    </div>     
</body>
</html>                            