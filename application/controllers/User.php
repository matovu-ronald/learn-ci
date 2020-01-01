<?php

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['form', 'url']);
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
		// Get data from the form
		$data = $this->input->post();
		// $data = $this->input->get();
		// echo $data['name']. ", ". $data["email"]. ", ". $data["phone"]. ", ". $data["salary"];
		echo "<pre>";
			print_r($data);
		echo "</pre>";
	}
}
