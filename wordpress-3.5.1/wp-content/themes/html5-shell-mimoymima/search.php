<?php get_header(); ?>

<?php // to disable this sidebar on a page by page basis just add a custom field to your page or post of disableSidebarLeft = true
	$disableSidebarLeft = get_post_meta($post->ID, 'disableSidebarLeft', $single = true);
	if ($disableSidebarLeft !== 'true') { get_sidebar('SidebarLeft'); }
?>

<!--BEGIN: Content-->
<div id="content" class="clear-fix" role="main">
	
	<header>
		<h1>Search Results</h1>
	</header>
	
	<?php
	
	// Query Posts
	
	//BEGIN: The Loop
	if (have_posts()) : while (have_posts()) : the_post();?>
	
		<!--BEGIN: List Item-->
			<a <?php post_class('ClearFix') ?> id="post-<?php the_ID(); ?>" href="<?php the_permalink() ?>" title="Click to read more...">
			
				<strong><?php the_title(); ?></strong>

				<!--BEGIN: Large Thumbnail-->
				<?php $thumbLg = get_post_meta($post->ID, 'thumb_lg', $single = true); // if theres a thumbnail get it ?>
				
				<?php if ($thumbLg !== '') : ?>
					
					<img class="alignleft" alt="<?php echo the_title(); ?>" src="<?php echo '/wp-content' . "$thumbLg" ?>" />

				<?php endif; ?>
				<!--END: Large Thumbnail-->
				
				<!--BEGIN: Excerpt-->
				<span class="entry">
					<?php the_excerpt("Continue reading &rarr;"); ?>
				</span>
				<!--END: Excerpt-->
						
			</a>
		<!--END: List Item-->	
		
		<?php endwhile; ?>

			<div class="navigation">
				<?php posts_nav_link('&nbsp;','<div class="alignleft">&laquo; Previous Page</div>','<div class="alignright">Next Page &raquo;</div>') ?>
			</div>

		<?php else : // if no posts were found give the warning below ?>

		<div class="post sys error">
			<p>Nothing Found, there seems to be something wrong... Try searching instead:</p>
			<?php get_search_form(); ?>
		
			<h2>Topics of Interest</h2>
			<p><?php wp_tag_cloud(''); ?></p>
		</div>
		
	<?php endif; //END: The Loop ?>

</div>
<!--END: Content-->

<?php // look to see if we've disabled sidebar in a custom field, if not show it
	$disableSidebarRight = get_post_meta($post->ID, 'disableSidebarRight', $single = true);
	if ($disableSidebarRight !== 'true') { get_sidebar('SidebarRight'); }
?>

<?php get_footer(); ?>