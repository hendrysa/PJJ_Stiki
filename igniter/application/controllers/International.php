<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class International extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->view('template/theme');
		$this->load->model('Model_international');
	}

	public function index()
	{
		$delete = $this->input->post('delete');
		$update = $this->input->post('update');

		if(isset($update))
		{
			redirect("international/update/$update");
		}

		if(isset($delete))
		{
			$this->Model_international->delete_data($delete);
		}

		$data['data'] = $this->Model_international->get_data("All");
		$this->load->view('International/Read', $data);
	}

	public function insert()
	{	
		$input=$this->input->post(NULL, TRUE);

		if($this->input->post('submit') !== NULL)
		{
			$stat = $this->Model_international->insert_data($input);
			$this->load->view('International/Insert', $stat);	
		}
		else
		{
			$this->load->view('International/Insert');
		}
	}

	public function update($id=-1)
	{
		$input=$this->input->post(NULL, TRUE);
		if($this->input->post('submit') !== NULL)
		{
			$this->Model_international->update_data($id, $input);
			redirect("/international/");
		}


		if($id >= 1)
		{
			$data['data'] = $this->Model_international->get_data($id);
			$this->load->view('International/Update', $data);
		}
		else
		{
			redirect("/");
		}
		
	}
}