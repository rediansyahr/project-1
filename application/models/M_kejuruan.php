<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kejuruan extends CI_Model {
	public function __construct() {
        parent::__construct();
		$this->load->model('Fungsi');
    }

    public function fetch_kejuruan() {
        $query = $this->db->get("cevest_kejuruan");

        if ($query->num_rows() > 0) {
			$i = 0;
			
            foreach ($query->result() as $row) {
                $data[] = $row;
				$data[$i]->deskripsi = $this->Fungsi->trim($data[$i]->deskripsi);
				$i++;
            }
			$data[0]->active = "active";
            return $data;
        }
        return false;
   }
   
	public function fetch_subkejuruan($idkejuruan) {
		$query = $this->db->where('idkejuruan',$idkejuruan)->get("cevest_subkejuruan");
		
		if ($query->num_rows() > 0) {			
            foreach ($query->result() as $row) {
                $data[] = $row;							
            }
            return $data;
        }
        return false;
	}

}

/* End of file M_kejuruan.php */
/* Location: ./application/models/M_kejuruan.php */