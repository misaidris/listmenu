<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriModel extends CI_Model {
	var $table = "buku";

	public function getDataKategori()
	{
		return $this->db->query("SELECT * FROM kategori");
	}
	
}
