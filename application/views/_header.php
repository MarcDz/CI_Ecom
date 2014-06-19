<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo (isset($title)) ? $title : "LEM Shop" ?></title>
	<link rel="stylesheet" href="<?php echo(CSS.'main.css'); ?>">
</head>
<body>

<style> * { font-family: sans-serif; } </style>

<header class="cf">
	<h1><?php echo (isset($title)) ? $title : "LEM Shop" ?></h1>
	<nav>
		<ul>
			<?php foreach ($allCategories as $cat): ?>
			<?php if (empty($cat['nom']) == FALSE): ?>
				<li>
					<a href="<?php echo site_url("categorie/".$cat['nom_url'] ); ?>">
						<?php echo $cat['nom']; ?>
					</a>
				</li>
			<?php endif;
				  endforeach; ?>
		</ul>
	</nav>
</header>