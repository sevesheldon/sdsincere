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

						<div class="cat-name">

							<h1>Indica</h1>

						</div>		

					<?php if( have_rows('indica') ): ?>
							<?php while( have_rows('indica') ): the_row(); 
									$image_object = get_sub_field('image-indica');
									$image_size = 'thumbnail';
									$image_url = $image_object['sizes'][$image_size];
									?>

									<div class="content col-sm-12" id="indica-content">

										<div class="row">

											<div class="row1 col-1 col-sm-2">
			    		    			
					    		    			<img src="<?php echo $image_url; ?>" />

					    		    		</div>						    		    						 

											<div class="row1 col-2 col-sm-7">

												<div class="row">

													<div class="col-sm-9">	
			    		    				
					    		    					<h2><?php the_sub_field('name-indica'); ?></h2>

					    		    					<p>Indica | <?php the_sub_field('description-indica'); ?></p>

					    		    				</div>
					    		    				
					    		    				<div class="col-sm-1">	

					    		    					<p>THC<p/>

					    		    					<p class="values"><?php the_sub_field('thc-indica'); ?>%</p>

					    		    				</div>	

					    		    				<div class="col-sm-1">

					    		    					<p>CBD<p/>

					    		    					<p class="values"><?php the_sub_field('cbd-indica'); ?>%</p>

					    		    				</div>

					    		    				<div class="col-sm-1">

					    		    					<p>CBN<p/>

					    		    					<p class="values"><?php the_sub_field('cbn-indica'); ?>%</p>

					    		    				</div>	

					    		    			</div>

					    		    		</div>			
					    		    	

											<div class="row1 col-3 col-sm-3">

												<div class="prices row">

													<div class="col-sm-3">	

							    		    			<div class="weight" id="1/8-indica"><p>1/8</p><h4 class="values price">$<?php the_sub_field('1/8-indica'); ?></h4></div>

							    		    		</div>
							    		    		
							    		    		<div class="col-sm-3">		

							    		    			<div class="weight" id="1/4-indica"><p>1/4</p><h4 class="values price">$<?php the_sub_field('1/4-indica'); ?></h4></div>

							    		    		</div>
							    		    		
							    		    		<div class="col-sm-3">		

							    		    			<div class="weight" id="1/2-indica"><p>1/2</p><h4 class="values price">$<?php the_sub_field('1/2-indica'); ?></h4></div>

							    		    		</div>
							    		    		
							    		    		<div class="col-sm-3">		

							    		    			<div class="weight" id="oz-indica"><p>Oz.</p><h4 class="values price">$<?php the_sub_field('oz-indica'); ?></h4></div>

							    		    		</div>	

						    		    		</div>		

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
