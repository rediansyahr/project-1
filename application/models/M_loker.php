<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_loker extends CI_Model {
	public function __construct() {
        parent::__construct();
		$this->load->model('Fungsi');
    }

    public function fetch_loker() {
        $query = $this->db->get("view_lowongan");
        if ($query->num_rows() > 0) {
			$i=0;
            foreach ($query->result() as $row) {
                $data[] = $row;
				$data[$i]->tglposting = date('d M Y', strtotime($row->tglposting));
                $data[$i]->tglberlaku = date('d M Y', strtotime($row->tglberlaku));
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

   public function detail_loker($link) {
        $this->db->where('id_loker',$link);
		$query = $this->db->get("view_lowongan");
		
		if ($query->num_rows() > 0) {
            $i = 0;
            $temp = $query->row();
            $temp->tglposting = $this->Fungsi->indonesian_date($temp->tglposting,'l, j F Y','');
            $temp->tglberlaku = $this->Fungsi->indonesian_date($temp->tglberlaku,'l, j F Y','');
            $temp->lowongan = $this->Fungsi->trim($temp->lowongan);
            $data = $temp;
            return $data;
        }
        return false;
    }

}

/* End of file M_loker.php */
/* Location: ./application/models/M_loker.php */