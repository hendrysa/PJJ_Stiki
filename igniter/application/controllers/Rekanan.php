<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekanan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->view('template/theme');
		$this->load->model('Model_rekanan');
	}

	public function index()
	{
		$delete = $this->input->post('delete');
		$update = $this->input->post('update');

		if(isset($update))
		{
			redirect("rekanan/update/$update");
		}

		if(isset($delete))
		{
			$this->Model_rekanan->delete_data($delete);
		}

		$data['data'] = $this->Model_rekanan->get_data("All");
		$this->load->view('Rekanan/Read', $data);
	}

	public function insert()
	{	
		$input=$this->input->post(NULL, TRUE);
		if($this->input->post('submit') !== NULL)
		{
			$stat = $this->Model_rekanan->insert_data($input);
			$this->load->view('Rekanan/Insert', $stat);	
		}
		else
		{
			$this->load->view('Rekanan/Insert');
		}
	}

	public function update($id=-1)
	{
		$input=$this->input->post(NULL, TRUE);
		if($this->input->post('submit') !== NULL)
		{
			$this->Model_rekanan->update_data($id, $input);
			redirect("/rekanan/");
		}


		if($id >= 1)
		{
			$data['data'] = $this->Model_rekanan->get_data($id);
			$this->load->view('Rekanan/Update', $data);
		}
		else
		{
			redirect("/");
		}
		
	}
}
