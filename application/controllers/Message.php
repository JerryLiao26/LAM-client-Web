<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {

	public function index() {
    $conf = array();
		$conf['hostname'] = $this->session->db_hostname;
		$conf['username'] = $this->session->db_username;
		$conf['password'] = $this->session->db_password;
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
      $db_res = $this->db->query('SELECT * FROM message');
      if ($db_res) {
        $data = array();
        $data['title'] = 'Messages';
        $data['messages'] = $db_res->result_array();

    		$this->load->view('public/header', $data);
    		$this->load->view('messages', $data);
    		$this->load->view('public/footer');
      }
      else {
        $this->output->set_output('DB Query error');
      }
		}
		// Connect failed
		else {
      $this->output->set_output('DB Connection error');
		}
	}
}
