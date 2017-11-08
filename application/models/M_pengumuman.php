<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengumuman extends CI_Model {
	public function __construct() {
        parent::__construct();
		$this->load->model('Fungsi');
    }
	
	public function record_count() {
		$query = $this->db->get("cevest_pengumuman");
		return $query->num_rows();
    }

    public function fetch_pengumuman($limit, $start) {
		if($start==0){ $page=0; }
		else{ $page = $start-1; }
		$mulai = $page*4;
        $this->db->limit($limit, $mulai);
		
		$this->db->order_by("tanggal","desc");
        $query = $this->db->get("view_pengumuman");

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
   
   public function detail_pengumuman($id) {
        $this->db->where('id_pengumuman',$id);
		$query = $this->db->get("view_pengumuman");
		
		if ($query->num_rows() > 0) {
			$i=0;
            foreach ($query->result() as $row) {
                $data[] = $row;
				$data[$i]->tanggal = $this->Fungsi->indonesian_date($row->tanggal,'l, j F Y','');
				$data[$i]->isi_pengumuman = $this->Fungsi->trim($row->isi_pengumuman);
				$i++;
            }
            return $data;
        }
        return false;
    }

}

/* End of file M_pengumuman.php */
/* Location: ./application/models/M_pengumuman.php */