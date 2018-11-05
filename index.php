<?php get_header(); ?>
	<?php 
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 
			//
			the_title(); // post title (output of post title)
			the_content(); // post content (output of the post's content)
			//
		} // end while
	} else {
		_e('Sorry, no posts matched your criteria');
	} // end if
	?>
<?php get_footer(); ?>

