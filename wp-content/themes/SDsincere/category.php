<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<div class="cat-page-title">
				<h1><?php _e(''); single_cat_title(); ?></h1>
			</div>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
