<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Pengumuman extends CI_Controller {
	public function __construct() {
		parent::__construct();
		
		$this->load->model('Fungsi');
		$this->load->model('M_pengumuman');
        $this->load->library('pagination');
		
	}
	
	public function index() {
		$this->tampil();
	}
	
	public function tampil() {
		$i = 0;
		$data['page'] 				= "pengumuman";
        $config = array();
        $config["base_url"] 		= base_url() . "Pengumuman/tampil/";
        $config["total_rows"] 		= $this->M_pengumuman->record_count();
        $config["per_page"] 		= 4;
        $config["uri_segment"] 		= 3;
		$config["use_page_numbers"] = TRUE;
		$config["full_tag_open"] 	= '<ul class="pagination">';
        $config["full_tag_close"] 	= '</ul>';
		$config["first_link"] 		= 'Pertama';
		$config["first_tag_open"] 	= '<li><a>';
        $config["first_tag_close"] 	= '</a></li>';
        $config["last_link"] 		= 'Terakhir';
		$config["last_tag_open"] 	= '<li>';
        $config["last_tag_close"] 	= '</li>';
		$config["next_link"] 		= '<i class="fa fa-angle-right"></i>';
		$config["next_tag_open"]	= '<li>';
        $config["next_tag_close"] 	= '</li>';
		$config["prev_link"] 		= '<i class="fa fa-angle-left"></i>';
		$config["prev_tag_open"]	= '<li>';
        $config["prev_tag_close"] 	= '</li>';
		$config["cur_tag_open"] 	= '<li class="active"><a>';
        $config["cur_tag_close"] 	= '</a></li>';
        $config["num_tag_open"] 	= '<li>';
        $config["num_tag_close"] 	= '</li>';
		
        $this->pagination->initialize($config);

        $page 						= ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		
        $data["results"] 			= $this->M_pengumuman->fetch_pengumuman($config["per_page"],$page);
		
		$data["feed"]				= $this->Fungsi->fetch_berita_bbplk();
		$data["info_kerja"]			= $this->Fungsi->fetch_info_kerja();			
		$data["paging"] 			= $this->pagination->create_links();
		
		if(isset($data["results"])){
			$this->template->frontend('pengumuman/home.php',$data);
		}
		else{
			$this->template->frontend('errors/html/error_404.php');
		}
    }
	
	public function detail() {
		$i = 0;
		$data['page']				= 'pengumuman';
		$data["feed"]				= $this->Fungsi->fetch_berita_bbplk();
		$data["info_kerja"]			= $this->Fungsi->fetch_info_kerja();
		$id 						= $this->uri->segment(3);
		$data["results"]			= $this->M_pengumuman->detail_pengumuman($id);
		if(isset($id)){
			$this->template->frontend('pengumuman/detail.php',$data);
		}
		else{
			$this->template->frontend('errors/html/error_404.php',$data);
		}
	}

}

/* End of file Pengumuman.php */
/* Location: ./application/controllers/Pengumuman.php */