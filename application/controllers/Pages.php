<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{


	public $data = [];

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('file');
		$this->load->library('CaptchaLibrary');
		/**
		 * Create Captcha Helper with config that returns Captcha Array and returns below data.
		 */
	}
	public function index()
	{
		
		$this->data = [
			'page' => [
				'title' => "Home"
			],
		];
		$this->load->view('pages/index', $this->data);
	}
}
