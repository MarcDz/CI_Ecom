<?php

/*
 * getProductURL : Récuppere l'URL d'un produit par rapport à sa base de données.
 * @variable : $name_product ( required )
 *             $id_product ( required )
 * @return : http://exemple.com/
 *         OR FALSE if options are empty
 *
 */

if ( ! function_exists('getProductURL'))
{
    function getProductURL($id_product, $name_product)
    {
        if ( empty($id_product) || empty($name_product) )
            return FALSE;
        else
            return base_url("produit/".$id_product."/".url_title($name_product));
    }
}

if( ! function_exists('getProductTitle'))
{
    function getProductTitle ($p, $return = FALSE) {
        if($return)
            return $p['titre'];
        else
            echo $p['titre'];
    }
}

if( ! function_exists('getProductRef'))
{
    function getProductRef ($p, $return = FALSE) {
        if($return)
            return $p['ref_produit'];
        else
            echo $p['ref_produit'];
    }
}

if( ! function_exists('getProductBrand'))
{
    function getProductBrand ($p, $return = FALSE) {
        if($return)
            return $p['marque'];
        else
            echo $p['marque'];
    }
}

if( ! function_exists('getProductID'))
{
    function getProductID ($p, $return = FALSE) {
        if( $return)
            return $p['id_produits'];
        else
            echo $p['id_produits'];
    }
}

if( ! function_exists('getProductShortDescription'))
{
    function getProductShortDescription ($p, $return = FALSE) {
        if( ! $return)
            return $p['description_courte'];
        else
            echo $p['description_courte'];
    }

}

if( ! function_exists('getProductDescription'))
{
    function getProductDescription ($p, $return = FALSE) {
        if( ! $return)
            return $p['description_longue'];
        else
            echo $p['description_longue'];
    }

}

if( ! function_exists('getProductImg'))
{
    function getProductImg ($p, $return = FALSE) {
        if( ! $return)
            return $p['img'];
        else
            echo $p['img'];
    }
}

if( ! function_exists('getProductPrice'))
{
    function getProductPrice ($p, $return = FALSE) {
        if( ! $return)
            return $p['prix'];
        else
            echo $p['prix'];
    }
}

?>