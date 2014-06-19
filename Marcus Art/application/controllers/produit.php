<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Produit extends CI_Controller {

        public function __construct () {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('categoryModel');
            $this->load->model('productsModel');
        }

        public function index() {
            redirect('/', 'location');
        }

        public function display($id_product = FALSE, $name_product = FALSE) {
            $allCategories = $this->categoryModel->getAllCategories();
            $data['allCategories'] = $allCategories;

            $checkProduct = getProduct($id_product);

            $data['id_product'] = strip_tags($id_product);
            $data['name_product'] = strip_tags($name_product);

            if($id_product === FALSE
                || $name_product === FALSE
                || empty($checkProduct) == TRUE)
                redirect('/', 'location');

            $this->load->view('_header', $data);
            $this->load->view('produit_view', $data);
            $this->load->view('_footer', $data);

        }

    }
