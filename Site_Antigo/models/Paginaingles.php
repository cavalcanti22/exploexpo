<?php 
	class Paginaingles extends Model
	{


		public function get_all_paginasingleses(){

			$q = "SELECT * FROM paginaingles";
			return $this->execute($q);
		}

		public function get_paginaingles($id){
			$q = "SELECT * FROM paginaingles WHERE id = '$id'";
			return mysqli_fetch_assoc($this->execute($q));
		}

		public function update_paginaingles($id, $p)
		{
			$nome 		= $p['nome'];
			$titulo 	= $p['titulo'];
			$subtitulo 	= $p['subtitulo'];
			$imagem 	= $p['imagem'];
			$email 		= $p['email'];
			$telefone 	= $p['telefone'];
			$whats 		= $p['whats'];
			$endereco 	= $p['endereco'];
			$facebook 	= $p['facebook'];
			$instagram 	= $p['instagram'];
			$textolongo 		= $p['textolongo'];

			$q =
			"
			UPDATE paginaingles
			SET 
			nome 		= '$nome',
			titulo 		= '$titulo',
			subtitulo 	= '$subtitulo',
			imagem 		= '$imagem',
			email 		= '$email',
			telefone 	= '$telefone',
			whats 		= '$whats',
			endereco 	= '$endereco',
			facebook 	= '$facebook',
			instagram 	= '$instagram',
			textolongo 		= '$textolongo'
			WHERE
			id 			= '$id'
			";

			return $this->execute($q);
		}
	}
	?>