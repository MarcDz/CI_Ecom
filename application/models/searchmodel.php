<?php

class searchModel extends CI_Model
{
    function getSearchResults($keyword, $id_category = FALSE, $min_limit = "0", $max_limit = "")
    {
        $querySearch = $this->db->like('titre, ref_produit, marque, description_courte, description_longue', $keyword);
        $querySearch = $this->db->where('activation', 1);

        if( ! empty($min_limit) && ! empty($max_limit) )
            $querySearch = $this->db->limit($min_limit, $max_limit);

        if( $id_category === FALSE )
            $querySearch = $this->db->where('categorie_id', $id_category);

        if ($querySearch->num_rows() > 0){
            foreach ($querySearch-> result_array() as $row)
            {
                $searchResult['search'] = $row;
            }
        }

        $querySearch->free_result();

        return $searchResult;
    }
}

?>