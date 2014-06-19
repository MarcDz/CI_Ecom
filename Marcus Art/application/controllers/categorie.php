<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categorie extends CI_Controller {

    public function __construct () {
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('array');
    $this->load->helper('tools');
    $this->load->helper('text');
    $this->load->model('categoryModel');
    $this->load->model('productsModel');
    }

	public function index() {
        redirect('/', 'location');
	}

	public function display ($catURL = "")
	{
            $allCategories = $this->categoryModel->getAllCategories();
			$data['allCategories'] = $allCategories;

            $idCat = $this->categoryModel->getCategoryByURL($catURL);
            $products = $this->productsModel->getProductsByCategoryID($idCat['categorie_id']);
            $data['products'] = $products;

            $data['tenPromo'] = $this->productsModel->getAllProducts(10, 0, "id_produits", "dasc", "promotion = 1
                                                                                                    AND activation = 1
                                                                                                    AND categorie_id = ".$idCat['categorie_id']);

		$this->load->view('_header', $data);

        $this->load->view('product_list.php', $data);

		$this->load->view('_footer', $data);
	}

}

?>