<?php 
	/**
	* 
	*/
	class Imagens2 
	{
		private $imagem2;


		function __construct()
		{
			require 'models/Imagem2.php';
			$this->imagem2 = new Imagem2;
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
			$data['titulo'] = 'Lista de Imagens Institucionais';
			$data['layout'] = 'views/layouts/admin';
			$data['view'] = 'views/imagens2/index';
			$data['imagens2'] = $this->imagem2->get_all_imagens2();

			return $data;
		}

		public function add()
		{
			$data['titulo'] = 'Adicionar Imagem Institucional';
			$data['layout'] = 'views/layouts/admin';
			$data['view'] = 'views/imagens2/add';
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
							if (!$this->imagem2->insert_imagem($_POST))
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
			$data['imagem'] = $this->imagem2->get_imagem($id);
			$id = $data['imagem']['id'];

			if ($id > 0 )
			{
				
				if (!$this->imagem2->delete_imagem($id))
				{
					die("ERRO AO REMOVER!");
				}
				$data = $this->index();

			}

			return $data;

		}
	}
	?>

