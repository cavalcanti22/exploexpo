<?php 
class Institucional extends Model
{

	public function get_all_institucionais(){

		$q = "SELECT * FROM imagens2";
		return $this->execute($q);
	}

	public function insert_institucional($s)
	{
		$nome   = $s['nome'];
		$titulo = $s['titulo'];
		$imagem = $s['imagem'];
		$link   = $s['link'];
		$q = "INSERT INTO imagens2 (nome, titulo, imagem, link) VALUES ('$nome','$titulo','$imagem', '$link')";
		return $this->execute($q);
	}

	public function get_institucional($id)
	{
		$q = "SELECT * FROM imagens2 WHERE id = '$id'";
		return mysqli_fetch_assoc($this->execute($q));
	}

	public function delete_institucional($id)
	{
		$q = "DELETE FROM imagens2 WHERE id = '$id'";
		return $this->execute($q);
	}

	public function update_institucional($id, $o)
	{
			$nome 		= $o['nome'];
			$titulo 	= $o['titulo'];
			$imagem 	= $o['imagem'];
			$link 		= $o['link'];

			$q =
			"
			UPDATE imagens2
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