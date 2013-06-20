<?php get_header(); ?>

<?php // to disable this sidebar on a page by page basis just add a custom field to your page or post of disableSidebarLeft = true
	$disableSidebarLeft = get_post_meta($post->ID, 'disableSidebarLeft', $single = true);
	if ($disableSidebarLeft !== 'true') { get_sidebar('SidebarLeft'); }
?>

<!--BEGIN: Content-->
<div id="content" class="taxonomy-template" role="main">

	<!--BEGIN: Archive-->
	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

		<h1><?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); echo $term->name; // this show's the taxonomy term ?></h1>
		
		<?php if (have_posts()) : ?>
		
		<?php while (have_posts()) : the_post(); ?>
			<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<small><?php the_time('l, F jS, Y') ?></small>

			<div class="entry">
				<?php the_content() ?>
			</div>

			<!--BEGIN: Post Meta Data-->
			<ul class="post-meta-data horiz-list">
				<li class="add-comment"><?php comments_popup_link('Share your comments', '1 Comment', '% Comments'); ?></li>
				<li>Posted in <?php the_category(', ') ?></li>
				<li><?php edit_post_link('[Edit]', '<small>', '</small>'); ?></li>
				<li><?php the_tags('Tags: ', ', ', '<br />'); ?></li>
			</ul>
			<!--END: Post Meta Data-->
				
		<?php endwhile; ?>

		<nav class="navigation">
			<h1>Page Navigation</h1>
			<?php posts_nav_link('&nbsp;','<div class="alignright">Newer Entries &raquo;</div>','<div class="alignleft">&laquo; Older Entries</div>') ?>
		</nav>
		
		<?php else : // ERROR: nothing found ?>

			<h2>No posts were found :(</h2>
			
	<?php endif; ?>

	</article>
	<!--END: Archive-->

</div>
<!--END: Content-->

<?php // look to see if we've disabled sidebar in a custom field, if not show it
	$disableSidebarRight = get_post_meta($post->ID, 'disableSidebarRight', $single = true);
	if ($disableSidebarRight !== 'true') { get_sidebar('SidebarRight'); }
?>

<?php get_footer(); ?>