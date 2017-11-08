<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();
		
		$this->load->model('M_home');
		$this->load->model('Fungsi');
		
	}
	
	public function index() {
		$i = 0;
		$data['page'] 				= "home";
		$data["feed"]				= $this->Fungsi->fetch_berita_bbplk();
		$data["berita_naker"]		= $this->Fungsi->fetch_berita_bbplk();
		$data["pengumuman"]			= $this->Fungsi->fetch_pengumuman();
		$data["info_kerja"]			= $this->Fungsi->fetch_info_kerja();
		$data["galeri"]				= $this->Fungsi->fetch_galeri();
		$data["headline"]			= $this->Fungsi->fetch_headline();
		
		
		foreach($data["berita_naker"] as $result){
			if($i=="0"){
				$data["feed"][$i]->active	= "active";
				$data["headline"][$i]->active	= "active";

			}
			else{
				$data["feed"][$i]->active	= "";
				$data["headline"][$i]->active	= "";
			}
			$i++;
		}
		$this->template->frontend('home/home.php',$data);
	}

}

/* End of file Pekerjaan.php */
/* Location: ./application/controllers/Pekerjaan.php */