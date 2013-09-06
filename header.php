<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @package medium
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>

<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Crete+Round:400,400italic' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
<!--
<div class="post-author-card">
   <a href="/@__tosh" class="post-author-image" data-action="stat-link"
      data-action-value="post-discovery.author.image" title="Go to the profile of Thomas Schranz"><img
      src="https://d233eq3e3p3cv0.cloudfront.net/fit/c/190/190/0*UOomKJ8KMUPq8GcY.jpg" title="Thomas
      Schranz"></a>
   <div class="post-author-info">
      <a href="/@__tosh" data-id="d34837036bb7" title="Go to
         the profile of Thomas Schranz" rel="author" class="post-author-name" data-action="stat-link"
         data-action-value="post-discovery.author.name">Thomas Schranz</a>
      <p> Co-founder, CEO &amp; Product
         at <a href="http://twitter.com/blossom_io" target="_blank" title="Twitter profile for
            @blossom_io">@blossom_io</a>
      </p>
      <p></p>
   </div>
   <div
      class="post-published-date">
      <strong>Published</strong>
      <p><time class="post-date">September 3,
         2013</time>
      </p>
   </div>
</div>
-->
		<!--<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'medium' ); ?></h1>
			<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'medium' ); ?>"><?php _e( 'Skip to content', 'medium' ); ?></a></div>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

		</nav>--><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
