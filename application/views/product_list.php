<div>

<?php echo $this->pagination->create_links(); ?>
    <ul>
<?php foreach ($products as $product): ?>
        <li>
            <p>Titre du produit : <a href="<?php echo getProductURL($product['id_produits'], $product['titre']); ?>"><?php getProductTitle($product); ?></a></p>
            <p>Marque du produit : <a href="<?php echo getProductURL($product['id_produits'], $product['titre']); ?>"><?php getProductBrand($product); ?></a></p>
            <p><?php getProductDescription($product); ?></p>
            <p>Prix : <?php echo converterPrice(getProductPrice($product, TRUE)); ?></p>
            <hr/>
        </li>
    <?php endforeach; ?>

    </ul>
</div>

<?php if(empty($tenPromo) == FALSE): ?>
    <div style="position: absolute; right: 0px; top: 150px; width: 250px;">
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