<?php 
	class Auth 
	{
		private $model;
		
		function __construct()
		{
			require 'core/Model.php';
			$this->model = new Model;
		}

		public function login($u){
			$email = $u['email'];
			$senha = $u['senha'];
			$q = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
			return mysqli_fetch_assoc($this->model->execute($q));
		}
	}
 ?>