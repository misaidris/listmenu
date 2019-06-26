<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuModel extends CI_Model {
	var $table = "v_menu";
	var $table2 = "menu";

	public function getDataMenu()
	{
		return $this->db->query("SELECT * FROM v_menu");
	}

	public function tambahDataMenu($data)
	{
		$val = [
			"nama_menu" => $data['nama_menu'],
			"status" => $data['status'],
			"harga" => $data['harga'],
			"id_kategori" => $data['kategori']
		];

		// $this->db->query("INSERT INTO kelas VALUES $data");
		$this->db->insert($this->table2, $val);
	}

	public function hapusDataMenu()
	{
		$id = $this->input->get('id');
		$this->db->where('id_menu', $id);
		$this->db->delete('menu');
		if ( $this->db->affected_rows() > 0 )
			{
				return true;
			}
		else
			{
				return false;
			}
	}

	public function ubahDataMenu($data)
	{
		$id = $this->input->post('ubah_id_menu');
		$val = [
			"status" => $data['ubah_status'],
			"nama_menu" => $data['ubah_nama_menu'],
			"id_kategori" => $data['ubah_kategori'],
			"harga" => $data['ubah_harga'],
		];
		$this->db->where('id_menu', $id)
				 ->update('menu', $val);
		if($this->db->affected_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function getDataMenu2($id)
	{
		return $this->db->where('id_menu',$id)
						->get("menu");
	}
	
	public function filterData($keyword)
	{
		if($keyword == '1')
		{
			return $this->db->get($this->table);
		}
		else{
			return $this->db->like("nama_menu",$keyword)
							->or_like("nama_kategori",$keyword)
							->or_like("harga",$keyword)
							->or_like("status",$keyword)
							->get($this->table);
		}
	}
}
