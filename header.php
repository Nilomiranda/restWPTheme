<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title><?php echo bloginfo('name')?> | <?php wp_title('') ?></title>
		<link href='https://fonts.googleapis.com/css?family=Alegreya+SC' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css">
        <?php wp_head(); ?>
	</head>

	<body>
		
		<header>
			<nav>
				<?php
					$args = array(
						'menu' => 'principal',
						'container' => false
					);
					wp_nav_menu( $args );
				?>
				<!-- 
				<ul>
					<li class="current_page_item"><a href="/">Menu</a></li>
					<li><a href="/sobre/">Sobre</a></li>
					<li><a href="/contato/">Contato</a></li>
				</ul>
				-->
			</nav>

			<h1><img src="<?php echo get_stylesheet_directory_uri() ?>/img/rest.png" alt="Rest"></h1>

			<?php $contato =  get_page_by_title('contato') ?>
			<p><?php the_field('header_address', $contato) ?><p>
			<p class="telefone"><?php the_field('header_tel', $contato) ?></p>
		</header>