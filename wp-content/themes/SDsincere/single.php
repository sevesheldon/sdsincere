<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post title -->

			<h1 id="single-title">
				<?php the_title(); ?>
			</h1>
			<!-- /post title -->

			<div class="container">
				<div class="row" id="single-percents">

				<?php if ( get_field('gear') == 'no' ) : ?>

					<div class="col-sm-4 single-percent" id="single-thc">
    					<p>THC<p/>
    					<p class=""><?php the_field('thc'); ?>%</p>						
					</div>
					<div class="col-sm-4 single-percent" id="single-cbd">
    					<p>CBD<p/>
    					<p class=""><?php the_field('cbd'); ?>%</p>							
					</div>
					<div class="col-sm-4 single-percent" id="single-cbn">
    					<p>CBN<p/>
    					<p class=""><?php the_field('cbn'); ?>%</p>							
					</div>

    			<?php endif; ?>
    									
				</div>

				<div class="single-prices row">

				<?php if ( get_field('pricing') == 'flower' ) : ?>								

					<div class="col-sm-3 single-price-box single-flower">	
		    			<div class="single-weight" id="single-1/8"><h4>1/8</h4><h3 class="single-values single-price">$<?php the_field('1/8'); ?></h3></div>
		    		</div>		    		
		    		<div class="col-sm-3 single-price-box single-flower">		
		    			<div class="single-weight" id="single-1/4"><h4>1/4</h4><h3 class="single-values single-price">$<?php the_field('1/4'); ?></h3></div>
		    		</div>		    	
		    		<div class="col-sm-3 single-price-box single-flower">		
		    			<div class="single-weight" id="single-1/2"><h4>1/2</h4><h3 class="single-values single-price">$<?php the_field('1/2'); ?></h3></div>
		    		</div>		    	
		    		<div class="col-sm-3 single-price-box single-flower">		
		    			<div class="single-weight" id="single-oz"><h4>Oz.</h4><h3 class="single-values single-price">$<?php the_field('oz'); ?></h3></div>
		    		</div>

		    	<?php elseif ( get_field('pricing') == 'concentrates') : ?>

		    		<div class="col-sm-6 single-price-box single-concentrates">
		    			<div class="single-weight" id="single-half-g"><h4>.5g</h4><h3 class="single-values single-price">$<?php the_field('half_g'); ?></h3></div>
		    		</div>
		    		<div class="col-sm-6 single-price-box single-concentrates">
		    			<div class="single-weight" id="single-full-g"><h4>1g</h4><h3 class="single-values single-price">$<?php the_field('full_g'); ?></h3></div>
		    		</div>

		    	<?php elseif ( get_field('pricing') == 'edibles') : ?>	

		    		<div class="col-sm-12 single-price-box single-edibles">
		    			<div class="single-weight" id="single-each"><h4>Each</h4><h3 class="single-values single-price">$<?php the_field('each'); ?></h3></div>
		    		</div>			    		    	
		    				    		
		    	<?php endif; ?>				

				</div>
			</div>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<div id="single-pic">
					<?php the_post_thumbnail('medium_large'); ?>
				</div>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<div id="single-content">
			<?php the_content(); ?>
			</div>

			<p><?php the_category(', '); // Separated by commas ?></p>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
