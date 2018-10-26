<?php 
class depoimento extends Model
{
	
	public function get_all_depoimentos(){
	$q = "SELECT * FROM depoimentos";
	return $this->execute($q);
	}

	public function insert_depoimento($u){

		$nome  = $u['nome'];
		$texto = $u['texto'];

		$q = "INSERT INTO depoimentos (nome, texto ) VALUES ('$nome', '$texto')";
		return $this->execute($q);

	}

	public function get_depoimento($id){

		$q = "SELECT * FROM depoimentos WHERE id = '$id'";
		return mysqli_fetch_assoc($this->execute($q));
	}

	public function update_depoimento($id, $d){

		$nome  = $d['nome'];
		$texto = $d['texto'];

		$q = "UPDATE depoimentos SET nome = '$nome', texto = '$texto'  WHERE id = '$id'";
		return $this->execute($q);
	}

	public function delete_depoimento($id){

		$q = "DELETE FROM depoimentos WHERE id = '$id'";
		return $this->execute($q);
	}
}
?>