<?php get_header(); ?>

<?php // to disable this sidebar on a page by page basis just add a custom field to your page or post of disableSidebarLeft = true
	$disableSidebarLeft = get_post_meta($post->ID, 'disableSidebarLeft', $single = true);
	if ($disableSidebarLeft !== 'true') { get_sidebar('SidebarLeft'); }
?>

<div id="content" class="clear-fix" role="main">
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); //BEGIN: The Loop ?>

		<!--BEGIN: Post-->
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<header>
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title='Click to read: "<?php strip_tags(the_title()); ?>"'><?php the_title(); ?></a></h1>
				<time datetime="<?php the_time('c'); ?>" pubdate="pubdate"><?php the_time('F jS, Y'); ?></time>
				<p>by <?php the_author() ?></p>
			</header>
			
			<div class="entry">
				<?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail(array(200,160), array("class" => "alignleft post_thumbnail")); } ?>
				<?php the_excerpt("Continue reading &rarr;"); ?>
			</div>
						
			<footer id="post-meta-data">
				<ul class="no-bullet">
					<li class="add-comment"><?php comments_popup_link('Share your comments', '1 Comment', '% Comments'); ?></li>
					<li>Posted in <?php the_category(', ') ?></li>
					<li><?php edit_post_link('[Edit]', '<small>', '</small>'); ?></li>
					<li><?php the_tags('Tags: ', ', ', '<br />'); ?></li>
				</ul>
			</footer>
		
		</article>
		<!--END: Post-->				
				
	<?php endwhile; ?>
		
		<?php wp_link_pages(); //this allows for multi-page posts -- not 100% sure this is the best spot for it ?>
		
	<?php else : ?>

		<h2>No posts were found :(</h2>

	<?php endif; ?>
	
	<?php if (  $wp_query->max_num_pages > 1 ) : // if there's more pages show next and previous links ?>
		
		<nav>
			<h1 class="hide">Main Navigation</h1>
			<?php posts_nav_link('&nbsp;','<div class="alignleft">&laquo; Previous Page</div>','<div class="alignright">Next Page &raquo;</div>') ?>
		</nav>
		
	<?php endif; ?>
	
</div>
<!--END: Content div-->

<?php // look to see if we've disabled sidebar in a custom field, if not show it
	$disableSidebarRight = get_post_meta($post->ID, 'disableSidebarRight', $single = true);
	if ($disableSidebarRight !== 'true') { get_sidebar('SidebarRight'); }
?>

<?php get_footer(); ?>