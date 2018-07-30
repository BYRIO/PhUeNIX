<?php get_header(); ?>

<div id="ctn">
<div id="content">

<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>

<article <?php post_class(); ?>>

<?php get_template_part('content'); ?>

</article>

	<?php endwhile; ?>

<div id="page_nav"><?php dpt_pagenav(); ?></div>

<?php else : ?>

	<p>404</p>

<?php endif; ?>


<?php // get_sidebar(); ?>

<?php get_footer(); ?>
