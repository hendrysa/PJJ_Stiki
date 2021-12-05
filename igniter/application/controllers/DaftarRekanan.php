<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaftarRekanan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Rekanan');
	}

	public function index()
	{
		$delete = $this->input->post('delete');
		if(isset($delete))
		{
			$this->Rekanan->delete_data($delete);
		}

		$data['data'] = $this->Rekanan->get_data();
		$this->load->view('Daftar_rekanan', $data);
	}
}