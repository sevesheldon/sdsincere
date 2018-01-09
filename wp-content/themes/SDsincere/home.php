<?php get_header(); ?>

	<main role="main">
	<!-- section -->

		<div class="extra-nav" role="navigation">
			<h5>Scroll to:</h5>
			<?php wp_nav_menu('extra-menu'); ?>
		</div>

	<section class="home">

<?php 

	$categories = get_categories( array ('orderby' => 'menu_order', 'order' => 'asc' ) );

	foreach ($categories as $category){

	   $catPosts = new WP_Query( array ( 'category_name' => $category->slug, 'orderby' => 'title' ) ); ?>

<!-- 	   	<div id="cat-scroll-menu">
	   		<h4><a href='#<?php echo $category->name ?>'> <?php echo $category->name ?></a></h4>
		</div> -->

	   <div class="cat-name" id="<?php echo $category->name ?>">
			<h1>
				<a href='/category/<?php echo $category->name ?>'> <?php echo $category->name ?> (<?php echo $catPosts->found_posts; ?>)</a>
			</h1>
		</div> 
		<br/>

	<?php

	   // print_r($catPosts);
	   if ( $catPosts->have_posts() ){

	       while ( $catPosts->have_posts() ){
	          $catPosts->the_post(); ?>

	        <div class="container desktop-container">

				<div id="indica-rows" class="row">

					<div class="content col-sm-12" id="indica-content">

						<div class="row">

							<div class="row1 col1 col-sm-2">
		    			
				    		    <?php if ( has_post_thumbnail()) : ?>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php the_post_thumbnail('thumbnail'); ?>
									</a>
								<?php endif; ?>

	    		    		</div>						    		    						 

							<div class="row1 col2 col-sm-7">

								<div class="row">

									<?php if ( get_field('gear') == 'no' ) : ?>

										<div class="col-sm-9">	
			    				
		    		    					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>	
	   										<div class='cat-name-content'><p><a href='/category/<?php echo $category->name ?>'><?php echo $category->name ?></a> | <?php the_field('descript'); ?></p></div>

	<!-- 			    		    					<p><?php the_content(); ?></p> <a href='/category/<?php echo $category->name ?>'> <?php echo $category->name ?>
	-->
		    		    				</div>
		    		    				
		    		    				<div class="col-sm-1 percents">	

		    		    					<p>THC<p/>

		    		    					<p class="values"><?php the_field('thc'); ?>%</p>

		    		    				</div>	

		    		    				<div class="col-sm-1 percents">

		    		    					<p>CBD<p/>

		    		    					<p class="values"><?php the_field('cbd'); ?>%</p>

		    		    				</div>

		    		    				<div class="col-sm-1 percents">

		    		    					<p>CBN<p/>

		    		    					<p class="values"><?php the_field('cbn'); ?>%</p>		    		    				

		    		    				</div>

	    		    				<?php else : ?>

		    		    				<div class="col-sm-12 gear-content">	
			    				
		    		    					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>	

		    		    					<div class='cat-name-content'><p><a href='/category/<?php echo $category->name ?>'><?php echo $category->name ?></a> | <?php the_field('descript'); ?></p></div>

		    		    				</div>

		    		    			<?php endif; ?>		

	    		    			</div>

	    		    		</div>    		    	

							<div class="row1 col3 col-sm-3">

								<div class="prices row">

								<?php if ( get_field('pricing') == 'flower' ) : ?>								

									<div class="col-sm-3 price-box flower">	

			    		    			<div class="weight" id="1/8"><p>1/8</p><h4 class="values price">$<?php the_field('1/8'); ?></h4></div>

			    		    		</div>
			    		    		
			    		    		<div class="col-sm-3 price-box flower">		

			    		    			<div class="weight" id="1/4"><p>1/4</p><h4 class="values price">$<?php the_field('1/4'); ?></h4></div>

			    		    		</div>
			    		    		
			    		    		<div class="col-sm-3 price-box flower">		

			    		    			<div class="weight" id="1/2"><p>1/2</p><h4 class="values price">$<?php the_field('1/2'); ?></h4></div>

			    		    		</div>
			    		    		
			    		    		<div class="col-sm-3 price-box flower">		

			    		    			<div class="weight" id="oz"><p>Oz.</p><h4 class="values price">$<?php the_field('oz'); ?></h4></div>

			    		    		</div>

			    		    	<?php elseif ( get_field('pricing') == 'concentrates') : ?>

			    		    		<div class="col-sm-6 price-box concentrates">
			    		    			<div class="weight" id="half-g"><p>.5g</p><h4 class="values price">$<?php the_field('half_g'); ?></h4></div>
			    		    		</div>

			    		    		<div class="col-sm-6 price-box concentrates">
			    		    			<div class="weight" id="full-g"><p>1g</p><h4 class="values price">$<?php the_field('full_g'); ?></h4></div>
			    		    		</div>

			    		    	<?php elseif ( get_field('pricing') == 'edibles') : ?>	

			    		    		<div class="col-sm-12 price-box" id="edibles">
			    		    			<div class="weight" id="each"><p>Each</p><h4 class="values price">$<?php the_field('each'); ?></h4></div>
			    		    		</div>			    		    	
			    		    		
			    		    		
			    		    	<?php endif; ?>
			    		    	

		    		    		</div>		

				    		</div>

				    	</div>

				    </div>

				</div>

			</div>

			<div class="container mobile-container">
				<div class="row">
					<div class="col-xs-4" id="mobile-pic-home">
					<?php if ( has_post_thumbnail()) : ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail('thumbnail'); ?>
						</a>
					<?php endif; ?>
					</div>
					<div class="col-xs-8" id="mobile-content-home">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>	
						<div class='mobile-cat-name-content'><p><a href='/category/<?php echo $category->name ?>'><?php echo $category->name ?></a> | <?php the_field('descript'); ?></p></div>
					</div>
				</div>
			</div>
	
					    	

		       <?php 
			   } //endwhile

		       // echo "<a href='/category/" . $category->slug . "'>More in this category</a></p>";

		   }//end if



		} //end foreach


wp_reset_postdata(); 

?>

	</section>
	<!-- /section -->

<!-- 		<div class="extra-nav" role="navigation">
			<h5>Scroll to:</h5>
			<?php wp_nav_menu('extra-menu'); ?>
		</div> -->
	</main>

<?php get_footer(); ?>