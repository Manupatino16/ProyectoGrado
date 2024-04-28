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
                    <div class="col-sm-8"><h2>Editar <b>Actividades</b></h2></div>
                    <div class="col-sm-4">
                        <a href="index.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
                    </div>
                </div>
            </div>
            <?php
				
				include ("database.php");
				$actividades= new Database();
				
				if(isset($_POST) && !empty($_POST)){
					$fecha_vacunacion = $actividades->sanitize($_POST['fecha_vacunacion']);
					$lugar_vacunacion = $actividades->sanitize($_POST['lugar_vacunacion']);
					$fecha_esterilizacion = $actividades->sanitize($_POST['fecha_esterilizacion']);
					$lugar_esterilizacion = $actividades->sanitize($_POST['lugar_esterilizacion']);
					$fecha_adopcion = $actividades->sanitize($_POST['fecha_adopcion']);
					$lugar_adopcion = $actividades->sanitize($_POST['lugar_adopcion']);
					$id_actividad=intval($_POST['id_actividad']);
					$res = $actividades->update($fecha_vacunacion, $lugar_vacunacion, $fecha_esterilizacion, $lugar_esterilizacion, $fecha_adopcion, $lugar_adopcion, $id_actividad);
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
				$datos_actividad=$actividades->single_record($id);
			?>
			<div class="row">
				<form method="post">
				<div class="col-md-6">
					<label>Fecha de Vacunación:</label>
					<input type="date" name="fecha_vacunacion" id="fecha_vacunacion" class='form-control' maxlength="100" required  value="<?php echo $datos_actividad->fecha_vacunacion;?>">
					<input type="hidden" name="id_actividad" id="id_actividad" class='form-control' maxlength="100"   value="<?php echo $datos_actividad->id;?>">
				</div>
				<div class="col-md-6">
					<label>Lugar de Vacunación:</label>
					<input type="text" name="lugar_vacunacion" id="lugar_vacunacion" class='form-control' maxlength="100" required value="<?php echo $datos_actividad->lugar_vacunacion;?>">
				</div>
				<div class="col-md-6">
					<label>Fecha de Esterilización:</label>
					<input type="date" name="fecha_esterilizacion" id="fecha_esterilizacion" class='form-control' maxlength="100" required value="<?php echo $datos_actividad->fecha_esterilizacion;?>">
				</div>
				<div class="col-md-6">
					<label>Lugar de Esterilización:</label>
					<input type="text" name="lugar_esterilizacion" id="lugar_esterilizacion" class='form-control' maxlength="100" required value="<?php echo $datos_actividad->lugar_esterilizacion;?>">
				</div>
				<div class="col-md-6">
					<label>Fecha de Adopcióno:</label>
					<input type="date" name="fecha_adopcion" id="fecha_adopcion" class='form-control' maxlength="100" required value="<?php echo $datos_actividad->fecha_adopcion;?>">
				</div>
				<div class="col-md-6">
					<label>Lugar de Adopción:</label>
					<input type="text" name="lugar_adopcion" id="lugar_adopcion" class='form-control' maxlength="64" required value="<?php echo $datos_actividad->lugar_adopcion;?>">
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