<?php 
	class Fotos  extends Ext
	{
		private $foto;


		function __construct()
		{
			require 'models/Foto.php';
			$this->foto = new Foto;
			isset($_SESSION['user']) || header("Location: ".site_url()."Auths/index");

		}

	
		public function index()
		{
			$data['titulo'] = 'Lista de Fotos';
			$data['layout'] = 'views/layouts/admin';
			$data['view'] = 'views/fotos/index';
			$data['fotos'] = $this->foto->get_all_fotos();

			return $data;
		}

		public function add()
		{
			$data['titulo'] = 'Adicionar Foto';
			$data['layout'] = 'views/layouts/admin';
			$data['view'] = 'views/fotos/add';

			if ($_SERVER['REQUEST_METHOD'] === 'POST')
			{
				if (isset($_FILES['imagem'])) 
				{
					if (($_FILES['imagem']['type'] == 'image/jpeg' OR $_FILES['imagem']['type'] == 'image/png') AND $_FILES['imagem']['size'] <= 2000000 )
					{
						$caminho = "resources/site/images/fotos/";
						$uniqid = md5(uniqid(rand(), true));
						$nome = $this->nome_ext($uniqid,'imagem');
						$arquivo = $caminho . $nome;
						if (move_uploaded_file($_FILES['imagem']['tmp_name'], $arquivo))
						{
							$_POST['imagem'] = $arquivo;
							if (!$this->foto->insert_foto($_POST))
							{
								unlink($arquivo); // apaga a imagem que tinha subido
								die("ERRO AO CADASTRAR!");
							}
							$data = $this->index();
						}
						else{
							die("ERRO AO MOVER IMAGEM");
						}
					}
					else{
						die("IMAGEM PERMITIDA SOMENTE .JPG E .PNG E MENOR QUE 2MB");
					}
				}
				else
				{
					$imgantiga = $this->foto->get_foto($id);
					$_POST['imagem'] = $imgantiga['imagem'];

					if (!$this->foto->insert_foto($_POST))
					 {
						die('ERRO AO CADASTRAR!');
					}
				}
			}
			return $data;
		}




		public function edit($id){

			$data['titulo'] = "Editar Foto";
			$data['layout'] = "views/layouts/admin";
			$data['view'] = "views/fotos/edit";
			$data['foto'] = $this->foto->get_foto($id);
			$id = $data['foto']['id'];

			if ($id > 0 AND $_SERVER['REQUEST_METHOD'] === 'POST')
			{

				if ( isset($_FILES['imagem'])AND $_FILES['imagem']['size'] > 0 )
				{

					if (($_FILES['imagem']['type'] == 'image/jpeg' OR $_FILES['imagem']['type'] == 'image/png') AND $_FILES['imagem']['size'] <= 2000000 )
					{
						$caminho = "resources/site/images/fotos/";
						$uniqid = md5(uniqid(rand(), true));
						$nome = $this->nome_ext($uniqid,'imagem');
						$arquivo = $caminho . $nome;

						if (move_uploaded_file($_FILES['imagem']['tmp_name'], $arquivo))
						{
							$_POST['imagem'] = $arquivo;
							if (!$this->foto->update_foto($id, $_POST))
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
				$imagemanterior = $this->foto->get_foto($id);
				$_POST['imagem'] = $imagemanterior['imagem'];
				
					if (!$this->foto->update_foto($id, $_POST))
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
			$data['foto'] = $this->foto->get_foto($id);

			if ($data['foto'] )
			{
				
				if (!$this->foto->delete_foto($id))
				{
					die("ERRO AO REMOVER!");
				}
				else
				{
					unlink($data['foto']['imagem']);
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

