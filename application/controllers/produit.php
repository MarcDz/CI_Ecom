<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Produit extends CI_Controller {

        public function __construct () {
            parent::__construct();
            $this->load->helper('url');
            $this->load->helper('tools');
            $this->load->model('categoryModel');
            $this->load->model('productsModel');
        }

        public function index() {
            redirect('/', 'location');
        }

        public function display($id_product = FALSE, $name_product = FALSE) {
            $allCategories = $this->categoryModel->getAllCategories();
            $data['allCategories'] = $allCategories;

            $name_product = strip_tags($name_product);
            $id_product = strip_tags($id_product);

            $askedProduct = $this->productsModel->getProduct($id_product);

            if( empty($askedProduct) == TRUE )
                redirect('/', 'location');

            else {
                $urlProduct = url_title($askedProduct['titre']);

                if ($urlProduct != url_title($name_product))
                    redirect('/', 'location');
                else {
                    $data['product'] = $askedProduct;

                    $this->load->view('_header', $data);
                    $this->load->view('search_top', $data);
                    $this->load->view('produit_view', $data);
                    $this->load->view('_footer', $data);
                }
            }

        }

    }
