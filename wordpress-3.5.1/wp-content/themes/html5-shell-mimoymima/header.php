<?php
// store a few user agent variables, don't delete, we'll use these later
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$chrome = strpos($_SERVER['HTTP_USER_AGENT'],"Chrome");
?>

<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://ogp.me/ns#">

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	
	<!--Forces latest IE rendering engine & chrome frame-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title><?php // title tag inspired by 2010
		global $page, $paged;
		wp_title( '|', true, 'right' );
		bloginfo( 'name' );
		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', '' ), max( $paged, $page ) );
	?></title>
	
	<!-- Meta description and keywords Handled by All In One SEO plugin, don't add your own here just activate the plugin -->
	
	<!-- Open Graph meta tags for Facebook...  Add in your App ID and or Admin IDs here-->
    <meta property="fb:app_id" content="your_app_id" />
    <meta property="fb:admins" content="your_admin_id" />

    <meta property="og:url" content="<?php the_permalink() ?>"/>
	
	<?php if (is_home() || is_front_page()): ?>
		<meta property="og:site_name" content="<?php global $page, $paged; wp_title( '|', true, 'right' ); bloginfo( 'name' );/* Add a page number if necessary: */if ( $paged >= 2 || $page >= 2 ) echo ' | ' . sprintf( __( 'Page %s', '' ), max( $paged, $page ) ); ?>" />
	<?php else : ?>
		<meta property="og:title" content="<?php global $page, $paged; wp_title( '|', true, 'right' ); bloginfo( 'name' );/* Add a page number if necessary: */if ( $paged >= 2 || $page >= 2 ) echo ' | ' . sprintf( __( 'Page %s', '' ), max( $paged, $page ) ); ?>" />
	<?php endif; ?>
	
	<?php if (is_single()): ?>
	    <meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
	    <meta property="og:type" content="article" />
	    <meta property="og:image" content="<?php echo wp_get_attachment_thumb_url( get_post_thumbnail_id( $post->ID ) ) ?>" />
	<?php else: ?>
	    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
	    <meta property="og:type" content="website" />
	    <meta property="og:image" content="<?php bloginfo('template_url') ?>/path/to-your/logo.jpg" />
	<?php endif; ?>
	
	<!--*******  link relationships:  ******-->
	<link rel="profile" href="http://gmpg.org/xfn/11" /><!--this link tag helps with microformat support-->
	<link rel="copyright" href="#copyright" /> 
	<link rel="icon" href="/favicon.ico" type="image/x-icon" />  
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="apple-touch-icon" href="/images/custom_icon.png"/><!-- 114x114 icon for iphones and ipads -->

	<!--*******  CSS:  ******-->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/basic.css" media="all" />
	<!--link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/print.css" media="print" /-->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" media="screen" />

	<!--Stylesheet for chrome, you can delete this if you don't need it-->
	<?php if ($chrome == true) : ?><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/chrome.css" media="screen" /><?php endif; ?>

	<!--BEGIN: IE Specific Stylesheets-->
	<!--[if IE 8]><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie8.css" media="screen" /><![endif]-->
	<!--[if IE 7]><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie7.css" media="screen" /><![endif]-->
	<!--[if lt IE 7]><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie6.css" media="screen" /><![endif]-->
	<!--END: IE Specific Stylesheets-->

	<!--*******  iPhone:  ******-->
	<?php if ($iphone == true) : ?>
		<link href="<?php bloginfo('template_url'); ?>/css/iphone.css" type="text/css" rel="stylesheet" />
		<meta name="viewport" width="device-width">
	<?php endif; ?>
	
	<?php if(!is_home() || !is_front_page()): // if not on the home page preload the home page, doesn't work in all browsers but doesn't do any harm if they don't support it ?>
	<link rel="prefetch" href="/" />
	<?php endif;?>

	<!--wp_head hook for Plugins-->
	<?php wp_head(); ?>
	
	<!--functions.js ~ keep this after wp_head()-->
	<script type="text/JavaScript" src="<?php bloginfo('template_url'); ?>/js/functions.js"></script>
	
	<!--jQuery UI : This bit allows you to include jQueryUI into your pages by setting jqui = true as a custom field -->
	<?php if(get_post_meta($post->ID, "addOns", true) == "jqui"): ?>
		<link type="text/css" href="http://jqueryui.com/latest/themes/base/ui.all.css" rel="stylesheet" />
		<script type="text/javascript" src="http://jquery-ui.googlecode.com/svn/tags/latest/themes/base/jquery-ui.css"></script>
	<?php endif; ?>
	
	<!--BEGIN: Google Analytics ~ for more info on why this is here and not at the end of the document read: http://code.google.com/apis/analytics/docs/tracking/asyncTracking.html-->
	<?php $GAAccount = "UA-000000-0"; //change this number to your google analytics acct number ?>
	<?php if ($GAAccount != "UA-000000-0") : //**DO NOT** change this number to your acct number ?>

	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', '<?php echo $GAAccount; ?>']);
	  _gaq.push(['_trackPageview']);
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
	<?php endif; ?>
	<!--END: Google Analytics -->
		
</head>

<!--we prefer this method to <?php body_class(); ?> it will give you the page's parent and slug as id and class -->
<body id="<?php $post_parent = get_post($post->post_parent); $parentSlug = $post_parent->post_name; if (is_category()) { echo "category-template"; } elseif (is_archive()) { echo "archive-template"; } elseif (is_search()) { echo "search-results"; } elseif (is_tag()) { echo "tag-template"; } else { echo $parentSlug; } ?>" class="<?php if (is_category()) { echo 'category'; } elseif (is_search()) { echo 'search'; } elseif (is_tag()) { echo "tag"; } elseif (is_home()) { echo "home"; } elseif (is_404()) { echo "page404"; } else { echo $post->post_name; } ?>">

<!--div id="preloader"></div-->

<!--BEGIN: page~wrapper-->
<div id="page-wrapper">
			
<header id="site-header" role="banner">
	
	<?php if (is_home() || is_front_page()): ?>
		<hgroup id="masthead">
			<h1 class="title"><?php wp_title(); ?><?php if(!is_home() || !is_front_page()):?> &mdash; <?php endif; ?><?php bloginfo('name'); ?></h1>
			<h2 class="description"><?php echo get_bloginfo ( 'description' ); ?></h2>
		</hgroup>
	<?php else: ?>
		<div id="masthead">
			<div class="title"><a href="/"><?php bloginfo('name'); ?></a></div>
			<div class="description"><?php echo get_bloginfo ( 'description' ); ?></div>
		</div>
	<?php endif; ?>
	
</header>

<nav id="main-nav" class="horiz-list" role="navigation">
	<h1>Main Navigation</h1>
	<?php wp_nav_menu('menu=mainNav'); // create the mainNav menu inside Appearance menus and go to town -- for more on menus see: http://templatic.com/news/wordpress-3-0-menu-management ?>
</nav>
