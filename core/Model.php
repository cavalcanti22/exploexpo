<?php 

	class Model 
	{
		   private $host = "localhost";
		// private $host = "exploexpo.mysql.dbaas.com.br";
		   private $usuario = "root";
		// private $usuario = "exploexpo";
		private $senha = "";
		// private $senha = "vitoria22";
		private $db = "explo";
		// private $db = "exploexpo";

		public function execute($q){
			
			$mysqli = new mysqli($this->host, $this->usuario, $this->senha, $this->db);
			$result = $mysqli->query($q);
			$mysqli->close();
			return $result;
		}
	}
 ?>