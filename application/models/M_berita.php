<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_berita extends CI_Model {
	public function __construct() {
        parent::__construct();
		$this->load->model('Fungsi');
    }
	
	public function record_count() {
		$query = $this->db->get("cevest_berita");
		return $query->num_rows();
    }

    public function fetch_berita($limit, $start) {
		if($start==0){ $page=0; }
		else{ $page = $start-1; }
		$mulai = $page*4;
        $this->db->limit($limit, $mulai);
		
		$this->db->order_by("tanggal","desc");
        $query = $this->db->get("view_berita");

        if ($query->num_rows() > 0) {
			$i=0;
            foreach ($query->result() as $row) {
                $data[] = $row;
				$data[$i]->tanggal = $this->Fungsi->indonesian_date($row->tanggal,'l, j F Y','');
				$i++;
            }
            return $data;
        }
        return false;
   }
   
   public function detail_berita($link) {
        $this->db->where('judul_seo',$link);
		$query = $this->db->get("view_berita");
		
		if ($query->num_rows() > 0) {
			$i=0;
            foreach ($query->result() as $row) {
                $data[] = $row;
				$data[$i]->tanggal = $this->Fungsi->indonesian_date($row->tanggal,'l, j F Y','');
				$data[$i]->isi_berita = $this->Fungsi->trim($row->isi_berita);
				$i++;
            }
            return $data;
        }
        return false;
    }

}

/* End of file M_berita.php */
/* Location: ./application/models/M_berita.php */