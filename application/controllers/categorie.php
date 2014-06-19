<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categorie extends CI_Controller {

    public function __construct () {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('array');
        $this->load->helper('tools');
        $this->load->helper('product');
        $this->load->helper('text');
        $this->load->model('categoryModel');
        $this->load->model('productsModel');
        $this->load->library('pagination');
    }

	public function index() {
        redirect('/', 'location');
	}

	public function display ($catURL = "", $page = "0")
	{

        $productPerPage = 50;

            $allCategories = $this->categoryModel->getAllCategories();

            $idCat = $this->categoryModel->getCategoryByURL($catURL);

            $products = $this->productsModel->getProductsByCategoryID($idCat['categorie_id'], $page, $page+$productPerPage);

            $productCount = $this->productsModel->getProductNumberOnCategory($idCat['categorie_id']);

            $data['products'] = $products;
			$data['allCategories'] = $allCategories;
            $data['tenPromo'] = $this->productsModel->getAllProducts(10, 0, "id_produits", "dasc",
                                                                        "promotion = 1
                                                                        AND activation = 1
                                                                        AND categorie_id = ".$idCat['categorie_id']);

            $config['base_url'] = site_url("categorie/".$catURL."/");
            $config['total_rows'] = $productCount;
            $config['per_page'] = $productPerPage;
            $config['num_links'] = 9;

            $this->pagination->initialize($config);

        $this->load->view('_header', $data);

        $this->load->view('search_top', $data);

        $this->load->view('product_list.php', $data);

		$this->load->view('_footer', $data);
	}
}

?>