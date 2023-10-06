<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{


	public $data = [];

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('file');

		$this->load->model("data/SkillsModel", "SkillsModel");

		$this->load->library('CaptchaLibrary');
		/**
		 * Create Captcha Helper with config that returns Captcha Array and returns below data.
		 */
	}
	public function index()
	{
		$skills = json_decode($this->SkillsModel->fetch(), true);
		$this->data = [
			'page' => [
				'title' => "Home"
			],
			'skills' => $skills
		];
		$this->load->view('pages/index', $this->data);
	}
}
