<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Autos_model extends CI_Model {

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
		
	}

	public function get_years()
	{
		//SELECT DISTINCT anio_auto FROM autos 
		$consulta = $this->db->select('anio_auto')->distinct('anio_auto')->order_by('anio_auto','desc')->get('autos');
		if ($consulta->num_rows()){
			$data = $consulta->result();

		}else{
			$data = false;

		}
		$consulta->free_result();
		return $data;
	}
	public function get_all()
	{
		//SELECT DISTINCT anio_auto FROM autos 
		$consulta = $this->db->select()->order_by('anio_auto','desc')->get('autos');
		if ($consulta->num_rows()){
			$data = $consulta->result();

		}else{
			$data = false;

		}
		$consulta->free_result();
		return $data;
	}

	public function get_byid($id_auto)
	{
		//SELECT DISTINCT anio_auto FROM autos 
		$consulta = $this->db->select()->where("id_auto", $id_auto)->order_by('anio_auto','desc')->get('autos');
		if ($consulta->num_rows()){
			$data = $consulta->result();

		}else{
			$data = false;

		}
		$consulta->free_result();
		return $data;
	}

}

/* End of file welcome.php */
 /* Location: ./application/controllers/welcome.php */