<main id="home-view">	
	<section id="registration">
		<div>
			<h2><?php echo (isset($shotline)) ? $shotline : "" ?></h2>
			<p>LEM Shop a tout ce dont vous avez besoin</p>
			<p>Pourquoi chercher ailleurs ?</p>
			<img src="assets/img/basket.png">
			<p>Commencez d'abord par vous inscrire ;)</p>
			<div id="input-box">
	            <input type="text" value="votre adresse mail" id="email" title="Adresse email">
	            <button type="submit" title="S'inscrire"><span>S'inscrire</span></button>
        	</div>
		</div>
		<img src="assets/img/mini-ipad.png">
	</section>
	<section id="overview-items">
		<article id="last-items">
			<h2>10 Derniers <em>Produits</em></h2>
			<strong>Découvrez les 10 nouveautés du site</strong>
			<ul>
				<?php foreach ($tenProducts as $product): 
					  $urlProduct = array($product['id_produits'], url_title($product['titre'],"_")); ?>
					<li><a href="<?php echo site_url($urlProduct); ?>"><img src="<?php echo $product['img']; ?>"><?php echo character_limiter($product['titre'], 15); ?></a></li>
				<?php endforeach; ?>
			</ul>
		</article>
		<article id="last-proms">
			<h2>Dernières <em>Promotions</em></h2>
			<strong>Nous pensons avant tout à nos clients</strong>
			<ul>
				<?php foreach ($tenPromo as $promo):
					  $urlProduct = array($promo['id_produits'], url_title($promo['titre'], "_")); ?>
					<li><a href="<?php echo site_url($urlProduct); ?>"><?php echo character_limiter($promo['titre'], 15); ?></a></li>
				<?php endforeach; ?>
			</ul>
		</article>
	</section>
	<aside>
		<h2>Panier</h2>
		<p>A venir</p>	
	</aside>
</main>