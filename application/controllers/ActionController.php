<?php

class ActionController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("cookie");
    }

    public function download_cv(){
        $this->load->helper(["download"]);
        // $this->load->model("leads/DownloadModel", "DownloadModel");

        // $this->DownloadModel->new();
        $cookie = [
            "name" => 'cvConsentUserToken', 
            "value" => random_string('alnum', 8),
            "expire" => 300
        ];
        $this->input->set_cookie($cookie);
        $filename = date("U") . "_" . random_string('alnum', 16);
        force_download($filename . ".pdf", file_get_contents(base_url("assets/cv.pdf")));
        redirect($_SERVER["HTTP_REFERER"]);
    }
}
