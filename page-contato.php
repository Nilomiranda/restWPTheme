<?php 
	// Template Name: Contato
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
<section class="container contato">
	<h2 class="subtitulo"><?php the_title() ?></h2>

	<div class="grid-16">
		<a href="<?php the_field('google_maps_uri') ?>" target="_blank"><img src="<?php the_field('map_image') ?>" alt="Rest's map"></a>
	</div>

	<?php if ( have_rows('contact_data') ) : while ( have_rows('contact_data') ) : the_row() ?>
		<div class="grid-1-3 contato-item">
			<h2><?php the_sub_field('contact_title') ?></h2>
			<?php the_sub_field('contact_info') ?>
		</div>
	<?php endwhile; else: endif;?>

	<!-- 
	<div class="grid-1-3 contato-item">
		<h2>Dados</h2>
		<p>21 2422-9999</p>
		<p>contato@rest.com</p>
		<p>facebook.com/rest/</p>
	</div>
	<div class="grid-1-3 contato-item">
		<h2>Horários</h2>
		<p>Segunda à Sexta: 10 às 23</p>
		<p>Sábado: 14 às 23</p>
		<p>Domingo: 14 às 22</p>
	</div>
	<div class="grid-1-3 contato-item">
		<h2>Endereço</h2>
		<p>Rua Marechal, 29</p>
		<p>Copacabana - Rio de Janeiro</p>
		<p>Brasil - Terra - Via Láctea</p>
	</div>
	-->
</section>
<?php endwhile; else: ?>
	<p>Sorry, no posts matched your criteria</p>
<?php endif ?>

<?php get_footer(); ?>