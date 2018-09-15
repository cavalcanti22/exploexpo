<?php 
class Usuario 
{
	private $model;

	function __construct()
	{
		require 'core/Model.php';
		$this->model = New Model;
	}

	public function get_all_usuarios(){
	$q = "SELECT * FROM usuarios";
	return $this->model->execute($q);
	}

	public function insert_usuario($u){

		$nome = $u['nome'];
		$email = $u['email'];
		$senha = $u['senha'];

		$q = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
		return $this->model->execute($q);

	}

	public function get_usuario($id){

		$q = "SELECT * FROM usuarios WHERE id = '$id'";
		return mysqli_fetch_assoc($this->model->execute($q));
	}

	public function update_usuario($id, $u){

		$nome = $u['nome'];
		$email = $u['email'];
		$senha = $u['senha'];

		$q = "UPDATE usuarios SET nome = '$nome', email = '$email' , senha = '$senha' WHERE id = '$id'";
		return $this->model->execute($q);


	}

	public function delete_usuario($id){

		$q = "DELETE FROM usuarios WHERE id = '$id'";
		return $this->model->execute($q);
	}
}
?>