<?php 
if (isset($_GET['id'])){
	include('database.php');
	$animal = new Database();
	$id=intval($_GET['id']);
	$res = $animal->delete($id);
	if($res){
		header('location: index.php');
	}else{
		echo "Error al eliminar el registro";
	}
}
?>