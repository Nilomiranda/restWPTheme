<?php
	// Template Name: Sobre
	/**
	 * This section contains advanced custom fields settings
	 * You may identify this fields by the code 'the_field()'
	 */
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ): the_post(); ?>
<section class="container sobre">
	<h2 class="subtitulo">Sobre</h2>

	<div class="grid-8">
		<img src="<?php the_field('about_feat_image') ?>" alt="<?php the_field('feat_image_desc') ?>" >
	</div>

	<div class="grid-8">
		<h2><?php the_field('title_hist') ?></h2>
		<?php the_field('hist_content') ?>
		<h2><?php the_field('vision_title') ?></h2>
		<?php the_field('vision_content') ?>
		<h2><?php the_field('value_title') ?></h2>
		<?php the_field('value_content') ?>
	</div>
</section>
<?php endwhile; else: ?>
	<p>Sorry, no posts matched your criteria</p>
<?php endif ?>

<?php get_footer(); ?>