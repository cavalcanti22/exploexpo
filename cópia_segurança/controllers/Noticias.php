<?php 
class Noticias  extends Ext
{
	private $noticia;


	function __construct()
	{
		require 'models/Noticia.php';
		$this->noticia = new Noticia;
		isset($_SESSION['user']) || header("Location: ".site_url()."Auths/index");

	}

	
	public function index()
	{
		$data['titulo'] = 'Lista de Notícias';
		$data['layout'] = 'views/layouts/admin';
		$data['view'] = 'views/noticias/index';
		$data['noticias'] = $this->noticia->get_all_noticias();

		return $data;
	}

	public function add()
	{
		$data['titulo'] = 'Adicionar Noticia';
		$data['layout'] = 'views/layouts/admin';
		$data['view'] = 'views/noticias/add';

		if ($_SERVER['REQUEST_METHOD'] === 'POST')
		{
			if ( isset($_FILES['imagem'])AND $_FILES['imagem']['size'] > 0 ) 
			{
				if (($_FILES['imagem']['type'] == 'image/jpeg' OR $_FILES['imagem']['type'] == 'image/png') AND $_FILES['imagem']['size'] <= 2000000 )
				{
					$caminho = "resources/site/images/noticias/";
					$uniqid = md5(uniqid(rand(), true));
					$nome = $this->nome_ext($uniqid,'imagem');
					$arquivo = $caminho . $nome;
					if (move_uploaded_file($_FILES['imagem']['tmp_name'], $arquivo))
					{
						$_POST['imagem'] = $arquivo;
						if (!$this->noticia->insert_noticia($_POST))
						{
								unlink($arquivo); // apaga a imagem que tinha subido
								die("ERRO AO CADASTRAR!");
							}
							$data = $this->index();
						}
						else{
							die("ERRO AO MOVER IMAGEM DA NOTÍCIA");
						}
					}
					else{
						die("IMAGEM PERMITIDA SOMENTE .JPG E .PNG E MENOR QUE 2MB");
					}
				}
				else
				{

					$_POST['imagem'] = 'Sem imagem cadastrada';

					if (!$this->noticia->insert_noticia($_POST))
					{
						die('ERRO AO CADASTRAR!');
					}
					$data = $this->index();

				}
			}
			return $data;
		}




		public function edit($id){

			$data['titulo'] = "Editar Imagem NotÍcia";
			$data['layout'] = "views/layouts/admin";
			$data['view'] = "views/noticias/edit";
			$data['noticia'] = $this->noticia->get_noticia($id);
			$id = $data['noticia']['id'];

			if ($id > 0 AND $_SERVER['REQUEST_METHOD'] === 'POST')
			{

				if ( isset($_FILES['imagem'])AND $_FILES['imagem']['size'] > 0 )
				{

					if (($_FILES['imagem']['type'] == 'image/jpeg' OR $_FILES['imagem']['type'] == 'image/png') AND $_FILES['imagem']['size'] <= 2000000 )
					{
						$caminho = "resources/site/images/noticias/";
						$uniqid = md5(uniqid(rand(), true));
						$nome = $this->nome_ext($uniqid,'imagem');
						$arquivo = $caminho . $nome;

						if (move_uploaded_file($_FILES['imagem']['tmp_name'], $arquivo))
						{
							$_POST['imagem'] = $arquivo;
							if (!$this->noticia->update_noticia($id, $_POST))
							{
								unlink($arquivo);

								die("ERRO AO ATUALIZAR!");
							}

							else
							{
								unlink($data['noticia']['imagem']);
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
					$imagemanterior = $this->noticia->get_noticia($id);
					$_POST['imagem'] = $imagemanterior['imagem'];

					if (!$this->noticia->update_noticia($id, $_POST))
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
			$data['noticia'] = $this->noticia->get_noticia($id);

			if ($data['noticia'] )
			{
				

				if (!$this->noticia->delete_noticia($id)) {
					
					die("ERRO AO REMOVER!");
					
				}
				
				else
				{
					unlink($data['noticia']['imagem']);
					
				}
				$data = $this->index();
				return $data;
			}

			else
			{
				die('ESSA IMAGEM DA NOTÍCIA NÃO EXISTE');
			}
		}
	}
	?>

