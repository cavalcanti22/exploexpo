<?php 

class Foto extends Model
{

	public function get_all_fotos(){

		$q = "SELECT * FROM fotos";
		return $this->execute($q);
	}

	public function insert_foto($s)
	{
		$imagem = $s['imagem'];
		$q = "INSERT INTO fotos (imagem) VALUES ('$imagem')";
		return $this->execute($q);
	}

	public function get_foto($id)
	{
		$q = "SELECT * FROM fotos WHERE id = '$id'";
		return mysqli_fetch_assoc($this->execute($q));
	}

	public function delete_foto($id)
	{
		$q = "DELETE FROM fotos WHERE id = '$id'";
		return $this->execute($q);
	}

	public function update_foto($id, $i)
	{
			$imagem 		= $i['imagem'];

			$q =
			"
			UPDATE fotos
			SET 
			imagem 		= '$imagem'
			WHERE
			id 			= '$id'
			";

			return $this->execute($q);
	}
}
?>