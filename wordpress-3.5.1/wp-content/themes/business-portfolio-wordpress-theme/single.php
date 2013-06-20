<?php get_header();?> 
  <!--grid_12 start here-->
  <div class="grid_12"> 
    
    <!--main_heading start here-->
    	<div class="main_heading">		 
			<?php $heading = of_get_option('slogan_text');
			if(!empty($heading)){
				$heading_parts = explode('|',$heading);
			?>
				<h2><?php echo $heading_parts[0] . '<font class="pink">' . $heading_parts[1] . '</font>' . $heading_parts[2];?></h2>
			<?php
			}?>
			
		</div>
    <!--main_heading end here--> 
    
  </div>
  
	  <div class="grid_9" id="contents">
	  <!--grid_12 end here--> 
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<!--blog start here-->
				  <div class="blog">
					<div class="grid_3">
					 <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
					</div>
					<!--grid_3 end here--> 					
					<!--grid_3 start here-->
					<div class="grid_9">
					  <h1><?php echo get_the_title();?></h1>					  
					<?php the_content(); ?>
					</div>
					<!--grid_9 end here--> 
					<div class="clear"></div>
					<div  id="comments-container">		
						<?php comments_template(); ?>
					</div>					
				  </div>
				 
			  <!--blog end here--> 
			 
		<?php endwhile; ?>
		
		<?php else : ?>

			<h2>Not Found</h2>

		<?php endif; ?>
		</div>
		<div class="grid_3" id="sidebar">
			<?php get_sidebar(); ?>
		</div>		
	
	
		<!--<nav id="nav-single">
			<div class="nav-next btn"><?php next_post_link( '%link', __( 'Next Post &raquo;', 'cleanbusiness' ) ); ?></div>
			<div class="nav-previous btn"><?php previous_post_link( '%link', __( '&laquo; Previous Post', 'cleanbusiness' ) ); ?></div>
		</nav>-->
<?php get_footer(); ?>