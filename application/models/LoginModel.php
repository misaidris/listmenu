<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {
	var $table = "buku";

	public function login($username,$password)
	{
		return $this->db->query("SELECT * FROM kasir WHERE username='$username' AND password='$password'");
	}
	
}
