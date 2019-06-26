<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriController extends CI_Controller {

	public function __construct() //function untuk membentuk objek
	{
		parent::__construct();
		$this->load->model('KategoriModel');
	}

	public function index()
	{
		$this->load->view('data_menu');
	}

	public function getDataKategori()
	{
		$response = $this->KategoriModel->getDataKategori()->result();

		$this->output
			 ->set_status_header(200)
			 ->set_content_type('application/json')
			 ->set_output(json_encode($response, JSON_PRETTY_PRINT))
			 ->_display();
		exit;
	}

}