<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->model("autos_model","autos");

		
	}

	public function index()
	{
		$data['anios'] = $this->autos->get_years();
		$data['autos'] =$this->autos->get_all();

		
		$this->load->view('welcome_message', $data);
	}

	public function res()
	{
		$this->load->view('resena');

	}
	public function mis()
	{
		$this->load->view('mision');


	}
	public function vis()
	{
		$this->load->view('vision');

		

	}
	public function ses()
	{
		$this->load->view('sesion');
		

	}

		public function details()
	{
		$data['anios'] = $this->autos->get_years();
		$data['auto'] =$this->autos->get_byid($this->uri->segment(3));

		
		$this->load->view('details', $data);
	}



}

/* End of file welcome.php */
 /* Location: ./application/controllers/welcome.php */