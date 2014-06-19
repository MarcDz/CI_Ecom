<?php
 
class productsModel extends CI_Model 
{ 
    function getProduct($id, $customWhere = "" ){
        $data = array();
        $where = array('id_produits' => $id);

        if ( ! empty($customWhere) )
           $query = $this->db->where($customWhere);

        $query = $this->db->get_where('prods',$where,1);

        if ($query-> num_rows() > 0)
            $data = $query->row_array();

        $query->free_result();

        return $data;
    }

    function getAllProducts($minLimit = "", $maxLimit = "", $orderBy = "", $sort = "", $where = "")
    {
        $data = array();

        /* Test si Order By ou Sort est renseigné
           et trie les informations dans l'ordre donné
        */
        if( ! empty($orderBy) && ! empty($sort))
            $this->db->order_by($orderBy, $sort);

        /* Test si WHERE est renseigné
           et applique un WHERE à la query.
        */
        if(empty($where) == FALSE)
            $this->db->where($where);

        $query = $this->db->get('prods', $minLimit, $maxLimit);

        foreach($query->result_array() as $row) {
            $data[] = $row;
        }

        $query->free_result();

        return $data;
    }

    function getProductsByCategoryID($id_category, $minLimit = "0", $maxLimit = "")
    {
        $data = array();

        if( ! empty($minLimit) || ! empty($maxLimit))
            $this->db->limit($minLimit, $maxLimit);

        $query = $this->db->get_where('prods', 'categorie_id ='.$id_category);


        if ($query-> num_rows() > 0){
            foreach ($query->result_array() as $row){
                $data[] = $row;
            }
        }

        $query->free_result();

        return $data;
    }

    function getProductNumberOnCategory ( $id_category )
    {

    }
}

?>