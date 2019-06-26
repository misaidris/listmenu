<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuController extends CI_Controller {

	public function __construct() //function untuk membentuk objek
	{
		parent::__construct();
		$this->load->model('MenuModel');
	}

	public function index()
	{
		$this->load->view('data_menu');
	}

	public function getDataMenu()
	{
		$response = $this->MenuModel->getDataMenu()->result();

		$this->output
			 ->set_status_header(200)
			 ->set_content_type('application/json')
			 ->set_output(json_encode($response, JSON_PRETTY_PRINT))
			 ->_display();
		exit;
	}

	public function tambah()
	{
		parse_str(file_get_contents('php://input'), $data);
		$this->MenuModel->tambahDataMenu($data);

		$response = array(
			'info' => 'Data menu berhasil ditambah'
		);

		$this->output
			 ->set_status_header(200)
			 ->set_content_type('application/json')
			 ->set_output(json_encode($response, JSON_PRETTY_PRINT))
			 ->_display();
		exit;
	}

	public function hapus()
	{
		$result = $this->MenuModel->hapusDataMenu();
		$msg['success'] = false;
		if($result)
			{
				$msg['success'] = true;
			}

		$this->output
			 ->set_status_header(200)
			 ->set_content_type('application/json')
			 ->set_output(json_encode($msg, JSON_PRETTY_PRINT))
			 ->_display();
		exit;
	}

	public function ubah(){
		parse_str(file_get_contents('php://input'), $data);
		$this->MenuModel->ubahDataMenu($data);

		$response = array(
			'info' => 'Data menu berhasil diubah'
		);

		$this->output
			 ->set_status_header(200)
			 ->set_content_type('application/json')
			 ->set_output(json_encode($response, JSON_PRETTY_PRINT))
			 ->_display();
		exit;
	}

	public function getDataMenu2($id)
	{
		$response = $this->MenuModel->getDataMenu2($id)->row();

		$this->output
			 ->set_status_header(200)
			 ->set_content_type('application/json')
			 ->set_output(json_encode($response, JSON_PRETTY_PRINT))
			 ->_display();
		exit;
	}

	public function filterData($keyword)
	{
		$response = $this->MenuModel->filterData($keyword)->result();

		$this->output
			 ->set_status_header(200)
			 ->set_content_type('application/json')
			 ->set_output(json_encode($response, JSON_PRETTY_PRINT))
			 ->_display();
		exit;
	}
}