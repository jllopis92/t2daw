
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Controlador extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->helper('url');	
			$this->load->model('Modelo');
		}

		function index(){
			$this->load->view('inicio');
		}

		public function simple(){
    		$datos['respuesta'] = $this->Modelo->c_simple();
    		$this->load->view('simple', $datos);
    	}

    	public function mediana(){
    		$datos['respuesta'] = $this->Modelo->c_mediana();
    		$this->load->view('mediana', $datos);
    	}

    	public function grande(){
    		$datos['respuesta'] = $this->Modelo->c_grande();
    		$this->load->view('grande', $datos);
    	}

	}
