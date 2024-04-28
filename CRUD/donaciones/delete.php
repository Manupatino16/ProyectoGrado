<?php 
if (isset($_GET['id'])){
	include('database.php');
	$donacion = new Database();
	$id=intval($_GET['id']);
	$res = $donacion->delete($id);
	if($res){
		header('location: index.php');
	}else{
		echo "Error al eliminar el registro";
	}
}
?>