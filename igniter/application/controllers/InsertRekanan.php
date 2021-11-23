<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InsertRekanan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Rekanan');
	}

	public function index()
	{
		$input=$this->input->post(NULL, TRUE);
		if($this->input->post('submit') !== NULL)
		{
			$stat = $this->Rekanan->insert_data($input);
			$this->load->view('Insert_rekanan', $stat);
				
		}
		else
		{
			$this->load->view('Insert_rekanan');
		}
	}
}
