<?php 
if (isset($_GET['id'])){
	include('database.php');
	$actividad = new Database();
	$id=intval($_GET['id']);
	$res = $actividad->delete($id);
	if($res){
		header('location: index.php');
	}else{
		echo "Error al eliminar el registro";
	}
}
?>