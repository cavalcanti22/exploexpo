<?php 
/**
* 
*/
class Imagem 
{
	private $model;
	function __construct()

	{
		require 'core/Model.php';
		$this->model = new Model;
	}

	public function get_all_imagens(){

		$q = "SELECT * FROM imagens";
		return $this->model->execute($q);
	}

	public function insert_imagem($s)
	{
		$nome = $s['nome'];
		$titulo = $s['titulo'];
		$imagem = $s['imagem'];
		$q = "INSERT INTO imagens (nome, titulo, imagem) VALUES ('$nome','$titulo','$imagem')";
		return $this->model->execute($q);
	}

	public function get_imagem($id)
	{
		$q = "SELECT * FROM imagens WHERE id = '$id'";
		return mysqli_fetch_assoc($this->model->execute($q));
	}

	public function delete_imagem($id)
	{
		$q = "DELETE FROM imagens WHERE id = '$id'";
		return $this->model->execute($q);
	}
}
?>