<?php

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['form', 'url']);
		$this->load->library('form_validation');
	}

	public function form_helper_study()
	{
		// echo base_url();
		// echo "<br>";
		// echo site_url();
		$this->load->view("user/form");
	}

	public function form_submit_method()
	{
		$this->form_validation->set_rules("name", "Name", "required");
		$this->form_validation->set_rules("email", "Email", "required");
		$this->form_validation->set_rules("phone", "Phone", "required");
		$this->form_validation->set_rules("salary", "Salary", "required");

		if ($this->form_validation->run() == FALSE) {
			$this->form_helper_study();
		} else {
			// Get data from the form
			$data = $this->input->post();
			// $data = $this->input->get();
			// echo $data['name']. ", ". $data["email"]. ", ". $data["phone"]. ", ". $data["salary"];
			echo "<pre>";
				print_r($data);
			echo "</pre>";
		}
		
	}
}
