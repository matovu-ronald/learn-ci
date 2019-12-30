<?php

class Action extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('action_model');
	}
	
	public function get_all_data()
	{
		$data = $this->action_model->select_all_data();
		echo "<pre>";
			print_r($data);
		echo "</pre>";
	}

}
