<?php 

class Operacional extends Model
{

	public function get_all_operacionais(){

		$q = "SELECT * FROM imagens";
		return $this->execute($q);
	}

	public function insert_operacional($s)
	{
		$nome = $s['nome'];
		$titulo = $s['titulo'];
		$imagem = $s['imagem'];
		$link   = $s['link'];
		$q = "INSERT INTO imagens (nome, titulo, imagem, link) VALUES ('$nome','$titulo','$imagem', '$link')";
		return $this->execute($q);
	}

	public function get_operacional($id)
	{
		$q = "SELECT * FROM imagens WHERE id = '$id'";
		return mysqli_fetch_assoc($this->execute($q));
	}

	public function delete_operacional($id)
	{
		$q = "DELETE FROM imagens WHERE id = '$id'";
		return $this->execute($q);
	}

	public function update_operacional($id, $o)
	{
			$nome 		= $o['nome'];
			$titulo 	= $o['titulo'];
			$imagem 	= $o['imagem'];
			$link 	    = $o['link'];

			$q =
			"
			UPDATE imagens
			SET 
			nome 		= '$nome',
			titulo 		= '$titulo',
			imagem 		= '$imagem',
			link 		= '$link'
			WHERE
			id 			= '$id'
			";

			return $this->execute($q);
	}
}
?>