<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index() {
		$data = array();
		$data['title'] = 'Hello, LAM here';

		$this->load->view('public/header', $data);
		$this->load->view('welcome_message');
		$this->load->view('public/footer');
	}
}
