<div>
<?php

    foreach ($products as $product)
    {
        echo "Marque du produit : ".$product['marque'];
        echo '<br/>';
        echo "Titre du produit : ".$product['titre'];
        echo '<br/>';
        echo "Description courte du produit : ".$product['description_courte'];
        echo '<br/>';
        echo "Prix du produit : ".$product['prix'];
        echo '<br/>';
        echo "Img du produit : ".relativeToAbsolute($product['img']);
        echo '<br/>';
        echo '<hr/>';
    }

?>
</div>

<?php if(empty($tenPromo) == FALSE): ?>
    <div style="position: absolute; right: 0px; top: 0px; width: 500px;">
        <h2>Les 10 dernières promotions</h2>
        <ul>
        <?php foreach ($tenPromo as $promo):
            $urlProduct = array($promo['id_produits'], url_title($promo['titre'], "_")); ?>
            <li>
                <a href="<?php echo site_url($urlProduct); ?>"><?php echo character_limiter($promo['titre'], 15); ?> - <?php echo converterPrice($promo['prix'], "€"); ?></a>
            </li>
        <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>