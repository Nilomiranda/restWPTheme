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
		<?php if ( have_rows('about_content') ) : while ( have_rows('about_content') ) : the_row(); ?>
			<h2><?php the_sub_field('about_title') ?></h2>
			<?php the_sub_field('about_desc') ?>
		<?php endwhile; endif?>
	</div>
</section>
<?php endwhile; else: ?>
	<p>Sorry, no posts matched your criteria</p>
<?php endif ?>

<?php get_footer(); ?>