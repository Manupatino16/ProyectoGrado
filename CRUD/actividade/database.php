<?php
	class Database{
		private $con;
		private $dbhost="localhost";
		private $dbuser="root";
		private $dbpass="";
		private $dbname="patitas";
		function __construct(){
			$this->connect_db();
		}
		public function connect_db(){
			$this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
			if(mysqli_connect_error()){
				die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
			}
		}
		
		public function sanitize($var){
			$return = mysqli_real_escape_string($this->con, $var);
			return $return;
		}
		public function create($fecha_vacunacion,$lugar_vacunacion,$fecha_esterilizacion,$lugar_esterilizacion,$fecha_adopcion,$lugar_adopcion){
			$sql = "INSERT INTO `actividades` (fecha_vacunacion, lugar_vacunacion, fecha_esterilizacion, lugar_esterilizacion, fecha_adopcion, lugar_adopcion) VALUES ('$fecha_vacunacion', '$lugar_vacunacion', '$fecha_esterilizacion', '$lugar_esterilizacion', '$fecha_adopcion', '$lugar_adopcion')";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
		public function read(){
			$sql = "SELECT * FROM actividades";
			$res = mysqli_query($this->con, $sql);
			return $res;
		}
		
		public function single_record($id){
			$sql = "SELECT * FROM actividades where id='$id'";
			$res = mysqli_query($this->con, $sql);
			$return = mysqli_fetch_object($res );
			return $return ;
		}
		public function update($fecha_vacunacion,$lugar_vacunacion,$fecha_esterilizacion,$lugar_esterilizacion,$fecha_adopcion,$lugar_adopcion,$id){
			$sql = "UPDATE actividades SET fecha_vacunacion='$fecha_vacunacion', lugar_vacunacion='$lugar_vacunacion', fecha_esterilizacion='$fecha_esterilizacion', lugar_esterilizacion='$lugar_esterilizacion', fecha_adopcion='$fecha_adopcion', lugar_adopcion='$lugar_adopcion' WHERE id=$id";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
		public function delete($id){
			$sql = "DELETE FROM actividades WHERE id=$id";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
	}
	
	

?>	

