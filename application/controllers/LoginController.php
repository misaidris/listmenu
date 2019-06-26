<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function __construct() //function untuk membentuk objek
	{
		parent::__construct();
		$this->load->model('LoginModel');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
 
		$user = $this->LoginModel->login($username,$password);
 
		$row = $user->row_array();
 
		$total_user = $user->num_rows();
 
		if ($total_user > 0){
			
			redirect('menu');
		}
		else{
			redirect('login');
			}
			

        $this->input->set_cookie('username', $username, 86500);
        $this->input->set_cookie('password', $password, 86500);
	}

}