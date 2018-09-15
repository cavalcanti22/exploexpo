<?php 
/**
* 
*/
class Imagem2 
{
	private $model;
	function __construct()

	{
		require 'core/Model.php';
		$this->model = new Model;
	}

	public function get_all_imagens2(){

		$q = "SELECT * FROM imagens2";
		return $this->model->execute($q);
	}

	public function insert_imagem($s)
	{
		$nome = $s['nome'];
		$titulo = $s['titulo'];
		$imagem = $s['imagem'];
		$q = "INSERT INTO imagens2 (nome, titulo, imagem) VALUES ('$nome','$titulo','$imagem')";
		return $this->model->execute($q);
	}

	public function get_imagem($id)
	{
		$q = "SELECT * FROM imagens2 WHERE id = '$id'";
		return mysqli_fetch_assoc($this->model->execute($q));
	}

	public function delete_imagem($id)
	{
		$q = "DELETE FROM imagens2 WHERE id = '$id'";
		return $this->model->execute($q);
	}
}
?>