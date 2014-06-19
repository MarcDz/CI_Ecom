<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller 
{
    function index() {
    	$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		if($this->form_validation->run() == FALSE) {
			$this->load->view('admin_page');
		} else {
			$this->load->view('admin_page_submited');
		}
    }
}