<?php 
	class Operacionais  extends Ext
	{
		private $operacional;


		function __construct()
		{
			require 'models/Operacional.php';
			$this->operacional = new Operacional;
			isset($_SESSION['user']) || header("Location: ".site_url()."Auths/index");

		}

	
		public function index()
		{
			$data['titulo'] = 'Lista de Imagens Operacionais';
			$data['layout'] = 'views/layouts/admin';
			$data['view'] = 'views/operacionais/index';
			$data['operacionais'] = $this->operacional->get_all_operacionais();

			return $data;
		}

		public function add()
		{
			$data['titulo'] = 'Adicionar Imagem Operacional';
			$data['layout'] = 'views/layouts/admin';
			$data['view'] = 'views/operacionais/add';

			if ($_SERVER['REQUEST_METHOD'] === 'POST')
			{
				if (isset($_FILES['imagem'])) 
				{
					if (($_FILES['imagem']['type'] == 'image/jpeg' OR $_FILES['imagem']['type'] == 'image/png') AND $_FILES['imagem']['size'] <= 2000000 )
					{
						$caminho = "resources/site/images/operacionais/";
						$uniqid = md5(uniqid(rand(), true));
						$nome = $this->nome_ext($uniqid,'imagem');
						$arquivo = $caminho . $nome;
						if (move_uploaded_file($_FILES['imagem']['tmp_name'], $arquivo))
						{
							$_POST['imagem'] = $arquivo;
							if (!$this->operacional->insert_operacional($_POST))
							{
								unlink($arquivo); // apaga a imagem que tinha subido
								die("ERRO AO CADASTRAR!");
							}
							$data = $this->index();
						}
						else{
							die("ERRO AO MOVER IMAGEM OPERACIONAL");
						}
					}
					else{
						die("IMAGEM PERMITIDA SOMENTE .JPG E .PNG E MENOR QUE 2MB");
					}
				}
				else
				{
					$imgantiga = $this->operacional->get_operacional($id);
					$_POST['imagem'] = $imgantiga['imagem'];

					if (!$this->operacional->insert_operacional($_POST))
					 {
						die('ERRO AO CADASTRAR!');
					}
				}
			}
			return $data;
		}




		public function edit($id){

			$data['titulo'] = "Editar Imagem Operacional";
			$data['layout'] = "views/layouts/admin";
			$data['view'] = "views/operacionais/edit";
			$data['operacional'] = $this->operacional->get_operacional($id);
			$id = $data['operacional']['id'];

			if ($id > 0 AND $_SERVER['REQUEST_METHOD'] === 'POST')
			{

				if ( isset($_FILES['imagem'])AND $_FILES['imagem']['size'] > 0 )
				{

					if (($_FILES['imagem']['type'] == 'image/jpeg' OR $_FILES['imagem']['type'] == 'image/png') AND $_FILES['imagem']['size'] <= 2000000 )
					{
						$caminho = "resources/site/images/operacionais/";
						$uniqid = md5(uniqid(rand(), true));
						$nome = $this->nome_ext($uniqid,'imagem');
						$arquivo = $caminho . $nome;

						if (move_uploaded_file($_FILES['imagem']['tmp_name'], $arquivo))
						{
							$_POST['imagem'] = $arquivo;
							if (!$this->operacional->update_operacional($id, $_POST))
							{
							   unlink($arquivo);

								die("ERRO AO ATUALIZAR!");
							}

							else
							{
								unlink($data['operacional']['imagem']);
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
				$imagemanterior = $this->operacional->get_operacional($id);
				$_POST['imagem'] = $imagemanterior['imagem'];
				
					if (!$this->operacional->update_operacional($id, $_POST))
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
			$data['operacional'] = $this->operacional->get_operacional($id);

			if ($data['operacional'] )
			{
				
				if (!$this->operacional->delete_operacional($id))
				{
					die("ERRO AO REMOVER!");
				}
				else
				{
					unlink($data['operacional']['imagem']);
				}
				$data = $this->index();
				return $data;
			}

			else
			{
				die('ESSA IMAGEM OPERACIONAL NÃO EXISTE');
			}
		}
	}
	?>

