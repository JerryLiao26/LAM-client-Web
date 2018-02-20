<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {
    $data = array();
    $data['title'] = 'Login';

		$this->load->view('public/header', $data);
		$this->load->view('login');
		$this->load->view('public/footer');
	}

	public function validate() {
		$conf = array();
		$conf['hostname'] = $this->input->post('address');
		$conf['username'] = $this->input->post('username');
		$conf['password'] = $this->input->post('password');
		$conf['database'] = 'LAM';
		$conf['dbdriver'] = 'mysqli';
		$conf['dbprefix'] = '';
		$conf['pconnect'] = FALSE;
		$conf['db_debug'] = TRUE;
		$conf['cache_on'] = FALSE;
		$conf['cachedir'] = '';
		$conf['char_set'] = 'utf8';
		$conf['dbcollat'] = 'utf8_general_ci';
		$res = $this->load->database($conf);
		// Connect successful
		if ($res) {
			$this->session->db_hostname = $conf['hostname'];
			$this->session->db_username = $conf['username'];
			$this->session->db_password = $conf['password'];
			$this->output
				->set_content_type('appication/json')
				->set_output(json_encode(site_url('message/index')));
		}
		// Connect failed
		else {
			$this->output
				->set_content_type('appication/json')
				->set_output(json_encode(false));
		}
	}
}
