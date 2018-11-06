<?php 
	//Template Name: Menu da semana
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<section class="container">
		<h2 class="subtitulo"><?php the_title() ?></h2>
		<?php if ( have_rows('menu_category') ) : while ( have_rows('menu_category') ) : the_row(); ?>
			<div class="menu-item grid-8">
					<h2><?php the_sub_field('category_title') ?></h2>
					<ul>
						<?php if ( have_rows('category_content') ) : while ( have_rows('category_content') ) : the_row(); ?>
							<li>
								<span><sup>R$</sup><?php the_sub_field('item_price') ?></span>
								<div>
									<h3><?php the_sub_field('item_name') ?></h3>
									<p><?php the_sub_field('item_description') ?></p>
								</div>
							</li>
						<?php endwhile; else: endif; ?>
					</ul>
			</div>
		<?php endwhile; else: endif; ?>
	</section>
<?php endwhile; else: ?>
	<p>Sorry, no posts matched your criteria</p>
<?php endif; ?>
<?php get_footer(); ?>

