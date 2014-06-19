<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct () {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('text');
        $this->load->helper('tools');
        $this->load->model('categoryModel');
        $this->load->model('productsModel');
    }

    public function index() {

        $data['title']  = 'LEM Shop';
        $data['shotline']  = "Acheter online c'est facile !";
        $data['footer_txt']  = 'Texte du footer.';

        $data['allCategories'] = $this->categoryModel->getAllCategories();
        $data['tenProducts'] = $this->productsModel->getAllProducts(10, 0, "id_produits", "dasc", "promotion = 0 AND activation = 1");
        $data['tenPromo'] = $this->productsModel->getAllProducts(10, 0, "id_produits", "dasc", "promotion = 1 AND activation = 1");

        $this->load->view('_header', $data);
        $this->load->view('home_page', $data);
        $this->load->view('_footer', $data);
    }
}

