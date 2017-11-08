<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_galeri extends CI_Model {
	public function __construct() {
        parent::__construct();
		$this->load->model('Fungsi');
    }
	
	public function record_count() {
		$query = $this->db->get("cevest_galeri");
		return $query->num_rows();
    }

    public function fetch_galeri($limit, $start) {
		if($start==0){ $page=0; }
		else{ $page = $start-1; }
		$mulai = $page*4;
        $this->db->limit($limit, $mulai);
		
		$this->db->order_by("tanggal","desc");
        $query = $this->db->get("view_galeri");

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

    public function detail_gambar_galeri($id) {
        $query = $this->db->where('id_galeri',$id)->get("cevest_galeri_detail");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }

   public function detail_galeri($link) {
        $this->db->where('judul_seo',$link);
		$query = $this->db->get("view_galeri");
		
		if ($query->num_rows() > 0) {
            $i = 0;
            $temp = $query->row();
            $temp->tanggal = $this->Fungsi->indonesian_date($temp->tanggal,'l, j F Y','');
            $temp->isi_galeri = $this->Fungsi->trim($temp->isi_galeri);
            $data = $temp;
            return $data;
        }
        return false;
    }

    public function header_galeri($link) {
        $this->db->where('judul_seo',$link);
        $query = $this->db->get("view_galeri");
        if ($query->num_rows() > 0) {
            $i=0;
            foreach ($query->result() as $row) {
                $data[] = $row;
                $data[$i]->tanggal = $this->Fungsi->indonesian_date($row->tanggal,'j F Y','');
                $i++;
            }
            return $data;
        }
        return false;
    }

}

/* End of file M_galeri.php */
/* Location: ./application/models/M_galeri.php */