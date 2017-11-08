<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {
	public function __construct() {
        parent::__construct();
    }

    public function fetch_berita_naker() {
		$this->db->where('kd_kategori','berita_naker');
        $this->db->limit(4, 0);
		
		$this->db->order_by("waktu_post","desc");
        $query = $this->db->get("berita");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	}
   
	public function fetch_pengumuman() {
		$this->db->where('kd_kategori','pengumuman');
        $this->db->limit(4, 0);
		
		$this->db->order_by("waktu_post","desc");
        $query = $this->db->get("berita");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	}
	
	public function fetch_galeri() {
		$this->db->where('kd_kategori','galeri');
        $this->db->limit(4, 0);
		
		$this->db->order_by("waktu_post","desc");
        $query = $this->db->get("berita");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	}
	
	public function fetch_info_kerja() {
		$this->db->where('kd_kategori','info_kerja');
        $this->db->limit(4, 0);
		
		$this->db->order_by("berlaku","desc");
        $query = $this->db->get("berita");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	}

}

/* End of file M_home.php */
/* Location: ./application/models/M_home.php */