<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Kejuruan extends CI_Controller {
	public function __construct() {
		parent::__construct();
		
		$this->load->model('M_kejuruan');
		$this->load->model('Fungsi');		
	}
	
	public function index() {
		$data['page'] 				= "kejuruan";
		
		$data["feed"]				= $this->Fungsi->fetch_berita_bbplk();
		$data["kejuruan"]			= $this->M_kejuruan->fetch_kejuruan();

		$this->template->frontend('kejuruan/home.php',$data);
	}
	

}

/* End of file Kejuruan.php */
/* Location: ./application/controllers/Kejuruan.php */