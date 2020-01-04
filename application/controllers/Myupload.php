<?php

class Myupload extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->helpers('url');
	}

	public function my_upload_form()
	{
		$this->load->view('myuploads/form');
	}

	public function upload_my_files()
	{
		$config["upload_path"] = "./uploads/";
		$config["allowed_types"] = "jpg|png";

		$this->load->library("upload", $config);

		if($this->upload->do_upload("file_upload")) {
			// File uploaded successfully
			print_r($this->upload->data());
		} else {
			// Some error while uploading file.
			print_r($this->upload->display_errors());
		}
	}
}
