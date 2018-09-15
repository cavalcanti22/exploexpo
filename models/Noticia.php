<?php 

class Noticia extends Model
{

	public function get_all_noticias(){

		$q = "SELECT * FROM noticias ORDER BY horario DESC";
		return $this->execute($q);
	}

	public function insert_noticia($s)
	{
		$nome = $s['nome'];
		$titulo = $s['titulo'];
		$textolongo = $s['textolongo'];
		$imagem = $s['imagem'];
		$link = $s['link'];
		$q = "INSERT INTO noticias (nome, titulo, imagem, link, textolongo) VALUES ('$nome','$titulo','$imagem', '$link', '$textolongo')";
		return $this->execute($q);
	}

	public function get_noticia($id)
	{
		$q = "SELECT * FROM noticias WHERE id = '$id'";
		return mysqli_fetch_assoc($this->execute($q));
	}

	public function delete_noticia($id)
	{
		$q = "DELETE FROM noticias WHERE id = '$id'";
		return $this->execute($q);
	}

	public function update_noticia($id, $o)
	{
			$nome 		= $o['nome'];
			$titulo 	= $o['titulo'];
			$textolongo 	= $o['textolongo'];
			$imagem 	= $o['imagem'];
			$link 	= $o['link'];

			$q =
			"
			UPDATE noticias
			SET 
			nome 		= '$nome',
			titulo 		= '$titulo',
			textolongo 		= '$textolongo',
			imagem 		= '$imagem',
			link 		= '$link'
			WHERE
			id 			= '$id'
			";

			return $this->execute($q);
	}
}
?>