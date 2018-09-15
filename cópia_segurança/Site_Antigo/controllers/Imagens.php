<?php 
	/**
	* 
	*/
	class Imagens 
	{
		private $imagem;


		function __construct()
		{
			require 'models/Imagem.php';
			$this->imagem = new Imagem;
			isset($_SESSION['user']) || header("Location: ".site_url()."Auths/index");

		}

		function nome_ext($nome,$arquivo)
		{
			$path = $_FILES[$arquivo]['name'];
			$ext = pathinfo($path, PATHINFO_EXTENSION);
			return $nome.'.'.$ext;
		}
		public function index()
		{
			$data['titulo'] = 'Lista de Imagens Operacionais';
			$data['layout'] = 'views/layouts/admin';
			$data['view'] = 'views/imagens/index';
			$data['imagens'] = $this->imagem->get_all_imagens();

			return $data;
		}

		public function add()
		{
			$data['titulo'] = 'Adicionar Imagem Operacional';
			$data['layout'] = 'views/layouts/admin';
			$data['view'] = 'views/imagens/add';
			if ($_SERVER['REQUEST_METHOD'] === 'POST')
			{
				if (isset($_FILES['imagem'])) 
				{
					if (($_FILES['imagem']['type'] == 'image/jpeg' OR $_FILES['imagem']['type'] == 'image/png') AND $_FILES['imagem']['size'] <= 2000000 )
					{
						$caminho = "resources/site/images/";
						$uniqid = md5(uniqid(rand(), true));
						$nome = $this->nome_ext($uniqid,'imagem');
						$arquivo = $caminho . $nome;
						if (move_uploaded_file($_FILES['imagem']['tmp_name'], $arquivo))
						{
							$_POST['imagem'] = $arquivo;
							if (!$this->imagem->insert_imagem($_POST))
							{
								// deletar a imagem que acabou de subir...
								die("ERRO AO CADASTRAR!");
							}
							$data = $this->index();
						}
						else{
							die("ERRO AO MOVER ARQUIVO");
						}
					}
					else{
						die("IMAGEM FORA DO PADRÃO");
					}
				}
				else{
					die("VOCÊ PRECISAR SELECIONAR UMA IMAGEM");
				}
			}
			return $data;

		}

		public function remove($id)
		{
			$data['imagem'] = $this->imagem->get_imagem($id);
			$id = $data['imagem']['id'];

			if ($id > 0 )
			{
				
				if (!$this->imagem->delete_imagem($id))
				{
					die("ERRO AO REMOVER!");
				}
				$data = $this->index();

			}

			return $data;

		}
	}
	?>

