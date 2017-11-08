<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Loker extends CI_Controller {
	public function __construct() {
		parent::__construct();
		
		$this->load->model('M_loker');
		$this->load->model('Fungsi');
		
	}
	
	public function index() {
		$data['page'] 				= "loker";
		$data["feed"]				= $this->Fungsi->fetch_berita_bbplk();
		$data["info_kerja"]			= $this->Fungsi->fetch_info_kerja();
		$data["results"]			= $this->M_loker->fetch_loker();
		if(isset($data["results"])){
			$this->template->frontend('Loker/home.php',$data);
		}
		else{
			$this->template->frontend('errors/html/error_404.php',$data);
		}
	}
	
	public function detail() {
		$i = 0;
		$data['page']				= 'loker';
		$data["feed"]				= $this->Fungsi->fetch_berita_bbplk();
		$data["info_kerja"]			= $this->Fungsi->fetch_info_kerja();
		$link 						= $this->uri->segment(3);
		$data["results"]			= $this->M_loker->detail_loker($link);
		if(isset($link)){
			$this->template->frontend('loker/detail.php',$data);
		}
		else{
			$this->template->frontend('errors/html/error_404.php',$data);
		}
	}

}

/* End of file Berita.php */
/* Location: ./application/controllers/Berita.php */