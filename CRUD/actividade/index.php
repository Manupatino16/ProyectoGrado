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
                    <div class="col-sm-8"><h2>Listado de  <b>Actividades</b></h2></div>
                    <div class="col-sm-4">
                        <a href="create.php" class="btn btn-info add-new"><i class="fa fa-plus"></i> Agregar Actividad</a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Fecha de Vacunación</th>
                        <th>Lugar de Vacunación</th>
                        <th>Fecha de Esterilización</th>
						<th>Lugar de Esterilización</th>
                        <th>Fecha de Adopción</th>
                        <th>Lugar de Adopción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
				<?php 
				include ('database.php');
				$actividades = new Database();
				$listado=$actividades->read();
				?>
                <tbody>
				<?php 
					while ($row=mysqli_fetch_object($listado)){
						$id=$row->id;
						$fecha_vacunacion=$row->fecha_vacunacion;
						$lugar_vacunacion=$row->lugar_vacunacion;
						$fecha_esterilizacion=$row->fecha_esterilizacion;
						$lugar_esterilizacion=$row->lugar_esterilizacion;
                        $fecha_adopcion=$row->fecha_adopcion;
                        $lugar_adopcion=$row->lugar_adopcion;
				?>
					<tr>
                        <td><?php echo $fecha_vacunacion?></td>
                        <td><?php echo $lugar_vacunacion;?></td>
                        <td><?php echo $fecha_esterilizacion;?></td>
						<td><?php echo $lugar_esterilizacion;?></td>
                         <td><?php echo $fecha_adopcion;?></td>
                        <td><?php echo $lugar_adopcion;?></td>
                        <td>
						    <a href="update.php?id=<?php echo $id;?>" class="edit" title="Editar" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="delete.php?id=<?php echo $id;?>" class="delete" title="Eliminar" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>	
				<?php
					}
				?>
                    
                    
                          
                </tbody>
            </table>
        </div>
    </div>     
</body>
</html>                            