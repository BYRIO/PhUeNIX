<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<script>
	window.onscroll = function() {scrollFunction()};
	function scrollFunction() {
		if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
			document.getElementById("footer_fixed").style.opacity = 1;
		} else {
			document.getElementById("footer_fixed").style.opacity = 0;
		}
	}
	</script> 
</head>

<body <?php body_class(); ?>>

<header class="page_header">

<nav id="nav_small" class="nav_small" role="navigation">
	<?php wp_nav_menu( array( 'theme_location' => 'small' ) ); ?>
</nav>

<div class="header_logo">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?=get_template_directory_uri(); ?>/img/logo.png" /></a>
</div>

<nav id="nav_huge" class="nav_huge">
	<ul>
		<li><a href="http://byrio.org/hello-world-alpha/">
			<h3 class="nav_huge_h">EXPLORER</h3>
			<span class="nav_huge_desc">打开新世界的大门</span>
		</a></li>
		<li><a href="http://wiki.byr.moe/">
			<h3 class="nav_huge_h">WIKI</h3>
			<span class="nav_huge_desc">技术与创造在北邮</span>
		</a></li>
		<li><a href="http://byrio.org/hello-world-alpha/">
			<h3 class="nav_huge_h">JOIN US</h3>
			<span class="nav_huge_desc">参与组织、讨论和活动</span>
		</a></li>
	</ul>
</nav>

<nav id="nav_main" class="nav_main" role="navigation">
	<?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
</nav>

</header>