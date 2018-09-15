<?php 
	class Pagina 
	{
		private $model;

		function __construct()
		{
			require 'core/Model.php';
			$this->model = new Model;
		}

		public function get_all_paginas(){

			$q = "SELECT * FROM paginas";
			return $this->model->execute($q);
		}

		public function get_pagina($id){
			$q = "SELECT * FROM paginas WHERE id = '$id'";
			return mysqli_fetch_assoc($this->model->execute($q));
		}

		public function update_pagina($id, $p)
		{
			$nome 		= $p['nome'];
			$titulo 	= $p['titulo'];
			$subtitulo 	= $p['subtitulo'];
			$imagem 	= $p['imagem'];
			$email 		= $p['email'];
			$telefone 	= $p['telefone'];
			$facebook 	= $p['facebook'];
			$instagram 	= $p['instagram'];
			$texto 		= $p['texto'];

			$q =
			"
			UPDATE paginas
			SET 
			nome 		= '$nome',
			titulo 		= '$titulo',
			subtitulo 	= '$subtitulo',
			imagem 		= '$imagem',
			email 		= '$email',
			telefone 	= '$telefone',
			facebook 	= '$facebook',
			instagram 	= '$instagram',
			texto 		= '$texto'
			WHERE
			id 			= '$id'
			";

			return $this->model->execute($q);
		}
			public function get_all_imagens()
		{
			$q = "SELECT * FROM imagens";
			return $this->model->execute($q);
		}	

		public function get_all_imagens2()
		
		{
			$q = "SELECT * FROM imagens2";
			return $this->model->execute($q);
		}
	}
	?>