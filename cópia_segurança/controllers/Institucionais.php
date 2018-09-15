<?php 
	class Institucionais extends Ext
	{
		private $institucional;


		function __construct()
		{
			require 'models/Institucional.php';
			$this->institucional = new Institucional;
			isset($_SESSION['user']) || header("Location: ".site_url()."Auths/index");

		}

	
		public function index()
		{
			$data['titulo'] = 'Lista de Imagens Institucionais';
			$data['layout'] = 'views/layouts/admin';
			$data['view'] = 'views/institucionais/index';
			$data['institucionais'] = $this->institucional->get_all_institucionais();

			return $data;
		}

		public function add()
		{
			$data['titulo'] = 'Adicionar Imagem Institucional';
			$data['layout'] = 'views/layouts/admin';
			$data['view'] = 'views/institucionais/add';

			if ($_SERVER['REQUEST_METHOD'] === 'POST')
			{
				if (isset($_FILES['imagem'])) 
				{
					if (($_FILES['imagem']['type'] == 'image/jpeg' OR $_FILES['imagem']['type'] == 'image/png') AND $_FILES['imagem']['size'] <= 2000000 )
					{
						$caminho = "resources/site/images/institucionais/";
						$uniqid = md5(uniqid(rand(), true));
						$nome = $this->nome_ext($uniqid,'imagem');
						$arquivo = $caminho . $nome;
						if (move_uploaded_file($_FILES['imagem']['tmp_name'], $arquivo))
						{
							$_POST['imagem'] = $arquivo;
							if (!$this->institucional->insert_institucional($_POST))
							{
								unlink($arquivo); // apaga a imagem que tinha subido
								die("ERRO AO CADASTRAR!");
							}
							$data = $this->index();
						}
						else{
							die("ERRO AO MOVER IMAGEM institucional");
						}
					}
					else{
						die("IMAGEM PERMITIDA SOMENTE .JPG E .PNG E MENOR QUE 2MB");
					}
				}
				else
				{
					$imgantiga = $this->institucional->get_institucional($id);
					$_POST['imagem'] = $imgantiga['imagem'];

					if (!$this->institucional->insert_institucional($_POST))
					 {
						die('ERRO AO CADASTRAR!');
					}
				}
			}
			return $data;
		}

		public function edit($id){

			$data['titulo'] = "Editar Imagem institucional";
			$data['layout'] = "views/layouts/admin";
			$data['view'] = "views/institucionais/edit";
			$data['institucional'] = $this->institucional->get_institucional($id);
			$id = $data['institucional']['id'];

			if ($id > 0 AND $_SERVER['REQUEST_METHOD'] === 'POST')
			{

				if ( isset($_FILES['imagem'])AND $_FILES['imagem']['size'] > 0 )
				{

					if (($_FILES['imagem']['type'] == 'image/jpeg' OR $_FILES['imagem']['type'] == 'image/png') AND $_FILES['imagem']['size'] <= 2000000 )
					{
						$caminho = "resources/site/images/institucionais/";
						$uniqid = md5(uniqid(rand(), true));
						$nome = $this->nome_ext($uniqid,'imagem');
						$arquivo = $caminho . $nome;

						if (move_uploaded_file($_FILES['imagem']['tmp_name'], $arquivo))
						{
							$_POST['imagem'] = $arquivo;
							if (!$this->institucional->update_institucional($id, $_POST))
							{
							   unlink($arquivo);

								die("ERRO AO ATUALIZAR!");
							}

							else
							{
								unlink($data['institucional']['imagem']);
							}
							$data = $this->index();
						}
						else
						{
							die('HOUVE UM ERRO NO UPLOAD DA IMAGEM!');
						}
					}
					else
					{
						die("Permitido somente imagens do tipo .JPG e .PNG com no máx. 2MB!");
					}
				}
				else
				{
				$imagemanterior = $this->institucional->get_institucional($id);
				$_POST['imagem'] = $imagemanterior['imagem'];
				
					if (!$this->institucional->update_institucional($id, $_POST))
					{
						die("ERRO AO ATUALIZAR!");
					}
					$data = $this->index();				
				}

			}
			return $data;
		}

		public function remove($id)
		{
			$data['institucional'] = $this->institucional->get_institucional($id);

			if ($data['institucional'] )
			{
				
				if (!$this->institucional->delete_institucional($id))
				{
					die("ERRO AO REMOVER!");
				}
				else
				{
					unlink($data['institucional']['imagem']);
				}
				$data = $this->index();
				return $data;
			}

			else
			{
				die('ESSA IMAGEM institucional NÃO EXISTE');
			}
		}
	}
	?>

