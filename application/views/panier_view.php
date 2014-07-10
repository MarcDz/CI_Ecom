<?php

?>

<pre><?php print_r($product); ?></pre>

<?php echo $product['id_produits'];

echo '<br>';

echo $product['titre'];

echo '<br>';

?>

<img src="<?php relativeToAbsolute($product['img']); ?>" alt="dad"/>
