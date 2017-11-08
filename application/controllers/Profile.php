<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Profile extends CI_Controller {
	public function __construct() {
		parent::__construct();
		
		$this->load->model('M_berita');
		$this->load->model('Fungsi');		
	}
	
	public function index() {
		$uri = $this->uri->segment(3);
		
		if($uri==""){
			$this->template->frontend('errors/html/error_404.php',$data);
		}
	}
	
	public function profile_singkat() {
		$data['page'] 				= "profile";
		$data["feed"]				= $this->Fungsi->fetch_berita_bbplk();
		
		$this->template->frontend('profile/profile_singkat.php',$data);
		
	}
	
	public function visi_misi() {
		$data['page'] 				= "profile";
		$data["feed"]				= $this->Fungsi->fetch_berita_bbplk();
		
		$this->template->frontend('profile/visi_misi.php',$data);
		
	}
	
	public function struktur_organisasi() {
		$data['page'] 				= "profile";
		$data["feed"]				= $this->Fungsi->fetch_berita_bbplk();
		
		$this->template->frontend('profile/struktur_organisasi.php',$data);
		
	}

}

/* End of file Profil.php */
/* Location: ./application/controllers/Profil.php */