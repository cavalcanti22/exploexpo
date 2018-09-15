<?php 
	/**
	* 
	*/
	class Paginas
	{
		private $pagina;

		function __construct()
		{
			require 'models/Pagina.php';
			$this->pagina = new Pagina;
			isset($_SESSION['user']) || header("Location: ".site_url()."Auths/index");

		}

		function nome_ext($nome,$arquivo)
		{
			$path = $_FILES[$arquivo]['name'];
			$ext = pathinfo($path, PATHINFO_EXTENSION);
			return $nome.'.'.$ext;
		}

		public function index(){

			$data['titulo'] = "Título Páginas";
			$data['layout'] = "views/layouts/admin";
			$data['view'] = "views/paginas/index";
			$data['paginas'] = $this->pagina->get_all_paginas();
			return $data;
		}

		public function edit($id){

			$data['titulo'] = "Editar Página";
			$data['layout'] = "views/layouts/admin";
			$data['view'] = "views/paginas/edit";
			$data['pagina'] = $this->pagina->get_pagina($id);
			$id = $data['pagina']['id'];
			if ($id > 0 AND $_SERVER['REQUEST_METHOD'] === 'POST')
			{

				if ( isset($_FILES['imagem']) )
				{

					if ($_FILES['imagem']['type'] == 'image/jpeg' AND $_FILES['imagem']['size'] <= 2000000 )
					{
						$caminho = "resources/site/images/";
						$uniqid = md5(uniqid(rand(), true));
						$nome = $this->nome_ext($uniqid,'imagem');
						$arquivo = $caminho . $nome;

						if (move_uploaded_file($_FILES['imagem']['tmp_name'], $arquivo))
						{
							$_POST['imagem'] = $arquivo;
							if (!$this->pagina->update_pagina($id, $_POST))
							{
							// deletar a imagem que acabou de subir...
								die("ERRO AO ATUALIZAR!");
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
						die("Permitido somente imagens do tipo .JPG com no máx. 2MB!");
					}
				}
				else
				{
				// $slide = $this->pagina->get_pagina($id);
				// $_POST['imagem'] = $slide['imagem'];
					if (!$this->pagina->update_pagina($id, $_POST))
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