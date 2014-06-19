<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Panier extends CI_Controller {

    public function __construct () {
        parent::__construct();
        $this->load->helper('tools');
        $this->load->model('categoryModel');
        $this->load->model('productsModel');
    }

    public function index() {
        $this->load->view('_header', $data);
        $this->load->view('_footer', $data);
    }

}