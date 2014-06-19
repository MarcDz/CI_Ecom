<?php
 
class categoryModel extends CI_Model {

    function getCategory($id)
    {
    	$data = array();
    	$where = array('cat_id' => $id);
        $query = $this->db->getwhere('prods_cat',$where,1);
        
        $data = $query->row_array();
    
        $query->free_result();
        return $data;
    }

    function getCategoryByURL($url)
    {
        $data = array();
        $where = array('nom_url' => $url);
        $query = $this->db->get_where('prods_cat',$where,1);

        $data = $query->row_array();

        $query->free_result();
        return $data;
    }

    function getAllCategories()
    {
        $data = array();
        $query = $this->db->get('prods_cat');
        
        foreach($query->result_array() as $row) {
            $data[] = $row;
        }

        return $data;
    }
}

?>