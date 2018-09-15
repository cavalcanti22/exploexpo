<?php 
	class Paginasingleses
	{
		private $paginaingles;

		function __construct()
		{
			require 'models/Paginaingles.php';
			$this->paginaingles = new Paginaingles;
			isset($_SESSION['user']) || header("Location: ".site_url()."Auths/index");

		}


		public function index(){

			$data['titulo'] = "Título Páginas Inglês";
			$data['layout'] = "views/layouts/admin";
			$data['view'] = "views/paginasingleses/index";
			$data['paginasingleses'] = $this->paginaingles->get_all_paginasingleses();
			return $data;
		}

		public function edit($id){

			$data['titulo'] = "Editar Página Inglês";
			$data['layout'] = "views/layouts/admin";
			$data['view'] = "views/paginasingleses/edit";
			$data['paginaingles'] = $this->paginaingles->get_paginaingles($id);
			$id = $data['paginaingles']['id'];

			if ($id > 0 AND $_SERVER['REQUEST_METHOD'] === 'POST')
			{

				if ( isset($_FILES['imagem'])AND $_FILES['imagem']['size'] > 0 )
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
							if (!$this->paginaingles->update_paginaingles($id, $_POST))
							{
							   unlink($arquivo);

								die("ERRO AO ATUALIZAR!");
							}

							else
							{
								unlink($data['paginaingles']['imagem']);
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
				$imagemanterior = $this->paginaingles->get_paginaingles($id);
				$_POST['imagem'] = $imagemanterior['imagem'];
				
					if (!$this->paginaingles->update_paginaingles($id, $_POST))
					{
						die("ERRO AO ATUALIZAR!");
					}
					$data = $this->index();				
				}

			}
			return $data;
		}
	}
	?>