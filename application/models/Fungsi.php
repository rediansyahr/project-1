<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fungsi extends CI_Model {
	public function __construct() {
        parent::__construct();
    }
	
	public function indonesian_date ($timestamp = '', $date_format = 'l, j F Y | H:i', $suffix = 'WIB') {
		if (trim ($timestamp) == '')
		{
				$timestamp = time ();
		}
		elseif (!ctype_digit ($timestamp))
		{
			$timestamp = strtotime ($timestamp);
		}
		# remove S (st,nd,rd,th) there are no such things in indonesia :p
		$date_format = preg_replace ("/S/", "", $date_format);
		$pattern = array (
			'/Mon[^day]/','/Tue[^sday]/','/Wed[^nesday]/','/Thu[^rsday]/',
			'/Fri[^day]/','/Sat[^urday]/','/Sun[^day]/','/Monday/','/Tuesday/',
			'/Wednesday/','/Thursday/','/Friday/','/Saturday/','/Sunday/',
			'/Jan[^uary]/','/Feb[^ruary]/','/Mar[^ch]/','/Apr[^il]/','/May/',
			'/Jun[^e]/','/Jul[^y]/','/Aug[^ust]/','/Sep[^tember]/','/Oct[^ober]/',
			'/Nov[^ember]/','/Dec[^ember]/','/January/','/February/','/March/',
			'/April/','/June/','/July/','/August/','/September/','/October/',
			'/November/','/December/',
		);
		$replace = array ( 'Sen','Sel','Rab','Kam','Jum','Sab','Min',
			'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu',
			'Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep','Okt','Nov','Des',
			'Januari','Februari','Maret','April','Juni','Juli','Agustus','Sepember',
			'Oktober','November','Desember',
		);
		$date = date ($date_format, $timestamp);
		$date = preg_replace ($pattern, $replace, $date);
		$date = "{$date} {$suffix}";
		return $date;
	}

	public function trim($teks){
		$hasil = str_replace(array("\\r\\n","\\n","\\r","\r\n","\n","\r"),array("<br />","<br />","<br />","<br />","<br />","<br />"),$teks);
		return $hasil;
	}
	
	public function fetch_berita_bbplk() {
        $this->db->limit(4, 0);
		
		$this->db->order_by("tanggal","desc");
        $query = $this->db->get("cevest_berita");

        if ($query->num_rows() > 0) {
			$i = 0;
            foreach ($query->result() as $row) {
                $data[] = $row;
				$data[$i]->tanggal = $this->indonesian_date($row->tanggal,'j F Y','');
				$i++;
            }
            return $data;
        }
        return false;
	}
   
	public function fetch_pengumuman() {
        $this->db->limit(4, 0);
		$query = $this->db->get("view_pengumuman");

        if ($query->num_rows() > 0) {
			$i=0;
            foreach ($query->result() as $row) {
                $data[] = $row;
				$data[$i]->tanggal = $this->indonesian_date($row->tanggal,'j F Y','');
				$i++;
            }
            return $data;
        }
        return false;
	}
	
	public function fetch_galeri() {
        $this->db->limit(4, 0);
		
		$this->db->order_by("tanggal","desc");
        $query = $this->db->get("view_galeri");

        if ($query->num_rows() > 0) {
        	$i=0;
            foreach ($query->result() as $row) {
                $data[] = $row;
                $data[$i]->tanggal = $this->indonesian_date($row->tanggal,'j F Y','');
                $i++;
            }
            return $data;
        }
        return false;
	}
	
	public function fetch_info_kerja() {
        $this->db->limit(4, 0);
		$query = $this->db->get("view_lowongan");

        if ($query->num_rows() > 0) {
			$i=0;
            foreach ($query->result() as $row) {
                $data[] = $row;
				$data[$i]->tglposting = $this->indonesian_date($row->tglposting,'j F Y','');
				$data[$i]->tglberlaku = $this->indonesian_date($row->tglberlaku,'j F Y','');
				$i++;
            }
            return $data;
        }
        return false;
	}

	public function fetch_headline() {
		$query = $this->db->where('aktif','Y')->get("cevest_headline");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;            }
            return $data;
        }
        return false;
	}     

}

/* End of file Fungsi.php */
/* Location: ./application/models/Fungsi.php */