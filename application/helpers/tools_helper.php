<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * relativeToAbsolute : Permet de changer un lien relatif en absolu
 * @variable : $imgURL ( required )
 *             $website ( optional ) default : "http://www.mobile-users.net/"
 *
 */

if ( ! function_exists('relativeToAbsolute'))
{
    function relativeToAbsolute($imgURL, $website = "http://www.mobile-users.net/")
    {
        echo $website.$imgURL;
    }
}

/*
 * convertPrice : converti un prix au format demandée.
 * @variable : $price ( required )
 *             $devise ( optional ) default : €
 *
 */

if ( ! function_exists('converterPrice'))
{
    function converterPrice($price, $devise = "€")
    {
        if ($devise == "$")
            return $devise.str_replace(",", ".", $price);
        elseif ($devise == "€")
            return str_replace(".", ",", $price)." ".$devise;
        else
            return FALSE;
    }
}
