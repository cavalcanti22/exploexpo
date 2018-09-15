<?php 
	class Sites 
	{
		private $pagina;
		private $paginaingles;


		function __construct()
		{
			require 'models/Pagina.php';
			$this->pagina = new Pagina;

			require 'models/Paginaingles.php';
			$this->paginaingles = new Paginaingles;

		}

		public function index(){

			$data['layout'] = 'views/layouts/site';
			$data['view'] = 'views/sites/index';
			$data['imagens2'] = $this->pagina->get_all_imagens();
			$data['imagens3'] = $this->pagina->get_all_imagens2();

			return $data;
		}	


		public function ingles(){
			$data['layout'] = 'views/layouts/site';
			$data['view'] = 'views/sites/ingles';
			$data['imagens2'] = $this->pagina->get_all_imagens();
			$data['imagens3'] = $this->pagina->get_all_imagens2();
			$data['header'] = $this->paginaingles->get_paginaingles(1);
			$data['contato1'] = $this->paginaingles->get_paginaingles(2);
			$data['contato2'] = $this->paginaingles->get_paginaingles(3);
			return $data;

		}
	}
	?>