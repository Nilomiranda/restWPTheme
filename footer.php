<footer>
			<nav class="nav-footer">
				<ul>
					<?php
						$args = array(
							'menu' => 'principal',
							'container' => false
						);

						wp_nav_menu($args);
					?>
				</ul>
			</nav>

			<p><?php echo bloginfo('name') ?> © <?php the_date('Y') ?>. Alguns direitos reservados.</p>
		</footer>
    <?php wp_footer(); ?>
	</body>
</html>