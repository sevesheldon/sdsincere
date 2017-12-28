<?php /* Template Name: Menu Page Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="page-content container">

					<?php the_content(); ?>

					<div id="indica-rows" class="row">	

					<?php if( have_rows('indica') ): ?>
							<?php while( have_rows('indica') ): the_row(); 
									$image_object = get_sub_field('image-indica');
									$image_size = 'thumbnail';
									$image_url = $image_object['sizes'][$image_size];
									?>

									<div class="col-sm-12" id="indica-content">

										<div class="row">

											<div class="col-sm-3">
			    		    			
					    		    			<img src="<?php echo $image_url; ?>" />

					    		    		</div>						    		    						 

											<div class="col-sm-6">	
			    		    				
					    		    			<h2><?php the_sub_field('name-indica'); ?></h2>

					    		    			<p>Indica | <?php the_sub_field('description-indica'); ?></p>

					    		    			<p>THC<br><?php the_sub_field('thc-indica'); ?>%</p>

					    		    			<p>CBD<br><?php the_sub_field('cbd-indica'); ?>%</p>

					    		    			<p>CBN<br><?php the_sub_field('cbn-indica'); ?>%</p>

					    		    		</div>		
					    		    	

											<div class="col-sm-3">	

					    		    			<div id="1/8-indica"><p>1/8</p><h4>$<?php the_sub_field('1/8-indica'); ?></h4></div>

					    		    			<div id="1/4-indica"><p>1/4</p><h4>$<?php the_sub_field('1/4-indica'); ?></h4></div>

					    		    			<div id="1/2-indica"><p>1/2</p><h4>$<?php the_sub_field('1/2-indica'); ?></h4></div>

					    		    			<div id="oz-indica"><p>Oz.</p><h4>$<?php the_sub_field('oz-indica'); ?></h4></div>

					    		    		</div>

					    		    	</div>	
					    		    		
				    		    	</div>
			    		    		
							<?php endwhile; ?>
					<?php endif; ?>

					</div>

				</div>	

				<br class="clear">

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
