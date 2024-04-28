<?php
	if (isset($_GET['id'])){
		$id=intval($_GET['id']);
	} else {
		header("location:index.php");
	}
?>
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
                    <div class="col-sm-8"><h2>Editar <b>Donaciones</b></h2></div>
                    <div class="col-sm-4">
                        <a href="index.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
                    </div>
                </div>
            </div>
            <?php
				
				include ("database.php");
				$donaciones= new Database();
				
				if(isset($_POST) && !empty($_POST)){
					$nombre = $donaciones->sanitize($_POST['nombre']);
					$telefono = $donaciones->sanitize($_POST['telefono']);
					$correo = $donaciones->sanitize($_POST['correo']);
					$cuenta_donaciones = $donaciones->sanitize($_POST['cuenta_donaciones']);
					$dir_donaciones = $donaciones->sanitize($_POST['dir_donaciones']);
					$id_donacion=intval($_POST['id_donacion']);
					$res = $donaciones->update($nombre, $telefono, $correo, $cuenta_donaciones, $dir_donaciones, $id_donacion);
					if($res){
						$message= "Datos actualizados con éxito";
						$class="alert alert-success";
						
					}else{
						$message="No se pudieron actualizar los datos";
						$class="alert alert-danger";
					}
					
					?>
				<div class="<?php echo $class?>">
				  <?php echo $message;?>
				</div>	
					<?php
				}
				$datos_donacion=$donaciones->single_record($id);
			?>
			<div class="row">
				<form method="post">
				<div class="col-md-6">
					<label>Nombre:</label>
					<input type="text" name="nombre" id="nombre" class='form-control' maxlength="100" required  value="<?php echo $datos_donacion->nombre;?>">
					<input type="hidden" name="id_donacion" id="id_donacion" class='form-control' maxlength="100"   value="<?php echo $datos_donacion->id;?>">
				</div>
				<div class="col-md-6">
					<label>Telefono:</label>
					<input type="text" name="telefono" id="telefono" class='form-control' maxlength="100" required value="<?php echo $datos_donacion->telefono;?>">
				</div>
				<div class="col-md-6">
					<label>Correo:</label>
					<input type="mail" name="correo" id="correo" class='form-control' maxlength="255" required value="<?php echo $datos_donacion->correo;?>">
				</div>
				<div class="col-md-6">
					<label>Cuenta Donaciones:</label>
					<input type="text" name="cuenta_donaciones" id="cuenta_donaciones" class='form-control' maxlength="15" required value="<?php echo $datos_donacion->cuenta_donaciones;?>">
				</div>
				<div class="col-md-6">
					<label>Dirección Donaciones:</label>
					<input type="text" name="dir_donaciones" id="dir_donaciones" class='form-control' maxlength="64" required value="<?php echo $datos_donacion->dir_donaciones;?>">
				
				</div>
				
				<div class="col-md-12 pull-right">
				<hr>
					<button type="submit" class="btn btn-success">Actualizar datos</button>
				</div>
				</form>
			</div>
        </div>
    </div>     
</body>
</html>                            