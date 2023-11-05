<?php

class ActionController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper("cookie");
	}

	public function download_cv()
	{
		$this->load->helper(["download"]);
		$data = [
			'name' => ($this->input->post('name') == "") ? "" : $this->input->post('name'),
			'email' => ($this->input->post('email') == "") ? "" : $this->input->post('email'),
		];
		$this->load->model("leads/DownloadsModel", "DownloadModel");
		$this->DownloadModel->insert($data);
		$filename = date("U") . "_" . random_string('alnum', 16);
		force_download($filename . ".pdf", file_get_contents(base_url("assets/cv.pdf")));
		redirect($_SERVER["HTTP_REFERER"]);
	}

	// public function test(){
	//     print_r($this->db->get('cv_downloads')->result_array());
	// }
}
