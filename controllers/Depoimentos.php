<?php 

class Depoimentos 
{
	private $depoimento;

	function __construct()
	{
		require 'models/Depoimento.php';
		$this->depoimento = new Depoimento;
		isset($_SESSION['user']) || header("Location: ".site_url()."Auths/index");

	}

	public function index()
	{
		$data['view'] = 'views/depoimentos/index';
		$data['layout'] = 'views/layouts/admin';
		$data['titulo'] = 'Depoimentos Explo Expo 2018';
		$data['depoimentos'] = $this->depoimento->get_all_depoimentos();

		return  $data;
	}

	public function add()
	{
		$data['view'] = 'views/depoimentos/add';
		$data['layout'] = 'views/layouts/admin';
		$data['titulo'] = 'Adicionar Depoimento';

		if ($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$u['nome']   = $_POST['nome'];
			$u['texto']  = $_POST['texto'];
			
			if (!$this->depoimento->insert_depoimento($u)) {
				
				die('ERRO AO ADICIONAR DEPOIMENTO!');

			}
			else
			{
				$_SESSION['feedback'] = "<h6 class='alert alert-success' role='alert'>DEPOIMENTO ADICIONADO!</h6>";
				
			}

			$data =  $this->index();				
		}

		return $data;
	}

	public function edit($id)
	{
		$data['view'] = 'views/depoimentos/edit';
		$data['layout'] = 'views/layouts/admin';
		$data['titulo'] = 'Adicionar Depoimento';
		$data['depoimento'] = $this->depoimento->get_depoimento($id);

		if ($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$u['nome']  = $_POST['nome'];
			$u['texto'] = $_POST['texto'];

			if(!$this->depoimento->update_depoimento($id,$u))
			{
				die('ERRO AO EDITAR DEPOIMENTO!');
			}

			else
			{
				$_SESSION['feedback'] = "<h6 class='alert alert-success' role='alert'>DEPOIMENTO EDITADO COM SUCESSO!</h6>";
			}

			$data = $this->index();
		}

		return $data;
	}

	public function remove($id)
	{
		$data['depoimento'] = $this->depoimento->get_depoimento($id);

		if ($data['depoimento']) {

			if (!$this->depoimento->delete_depoimento($id))
			{
				die('Erro ao excluir depoimento!');
			}
			else
			{
				$_SESSION['feedback'] = "<h6 class='alert alert-danger' role='alert'>DEPOIMENTO EXCLUIDO COM SUCESSO!</h6>";
			}

			$data = $this->index();
			return $data;

		}

		else 
		{
			die('Depoimento não existe!');
		}

	}
}
?>