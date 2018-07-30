<?php get_header(); ?>

<div id="ctn">
<div id="content">

<article <?php post_class(); ?>>
	<?php the_post(); ?>
	<?php get_template_part('content'); ?>

	<?php the_post_navigation( array(
		'next_text' => '<span class="post_nav_title">%title</span>',
		'prev_text' => '<span class="post_nav_title">%title</span>',
	) ); ?>

	<?php comments_template( '', true ); ?>
</article>

</div>
</div>

<?php // get_sidebar(); ?>

<?php get_footer(); ?>