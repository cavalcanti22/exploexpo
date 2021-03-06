<?php 
	class Sites 
	{
		private $pagina;
		private $paginaingles;
		private $operacional;
		private $institucional;
		private $noticia;

		function __construct()
		{
			require 'models/Pagina.php';
			$this->pagina = new Pagina;

			require 'models/Paginaingles.php';
			$this->paginaingles = new Paginaingles;

			require 'models/Operacional.php';
			$this->operacional = new Operacional;

			require 'models/Institucional.php';
			$this->institucional = new Institucional;

			require 'models/Noticia.php';
			$this->noticia = new Noticia;

		}

		public function index(){

			$data['layout'] = 'views/layouts/site';
			$data['view'] = 'views/sites/index';
			$data['imagens2'] = $this->operacional->get_all_operacionais();
			$data['imagens3'] = $this->institucional->get_all_institucionais();
			$data['noticias'] = $this->noticia->get_all_noticias();
			$data['header'] = $this->pagina->get_pagina(1);
			$data['contato1'] = $this->pagina->get_pagina(5);
			$data['contato2'] = $this->pagina->get_pagina(6);

			return $data;
		}	

		public function ingles(){
			$data['layout'] = 'views/layouts/site';
			$data['view'] = 'views/sites/ingles';
			$data['imagens2'] = $this->operacional->get_all_operacionais();
			$data['imagens3'] = $this->institucional->get_all_institucionais();
			$data['header'] = $this->paginaingles->get_paginaingles(1);
			$data['contato1'] = $this->paginaingles->get_paginaingles(2);
			$data['contato2'] = $this->paginaingles->get_paginaingles(3);
			return $data;

		}

		public function noticias(){
			$data['layout'] = 'views/layouts/noticias';
			$data['view'] = 'views/sites/noticias';
			$data['noticias'] = $this->noticia->get_all_noticias();
			$data['imagens2'] = $this->operacional->get_all_operacionais();
			$data['imagens3'] = $this->institucional->get_all_institucionais();
			$data['header'] = $this->pagina->get_pagina(1);
			$data['contato1'] = $this->pagina->get_pagina(5);
			$data['contato2'] = $this->pagina->get_pagina(6);
			return $data;

		}
	}
?>