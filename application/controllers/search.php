<?php

class Search extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('tools');
        $this->load->helper('product');
        $this->load->helper('text');
        $this->load->model('searchModel');
    }



    public function index()
    {

        $keyword = trim(strip_tags($_GET['searchKeyword']));

        $data['searchResults'] = $this->searchModel->getSearchResults($keyword);

        $this->load->view('_header', $data);
        $this->load->view('search_top', $data);
        $this->load->view('product_list', $data);
        $this->load->view('_footer', $data);

    }

}

?>