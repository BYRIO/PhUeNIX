<?php get_header(); ?>

<div id="ctn">
<div id="content">

<article <?php post_class(); ?>>
	<?php the_post(); ?>
	<div class="post_ctn">
	<div class="post_bg">
		<div class="post_main">
			<div class="post_h">
				<h2 class="post_title">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); the_time('y/m/j - H:i') ?>">
						<?php the_title(); ?>
					</a>
				</h2>
				<div class="post_time">
					<?php the_time('y/m/j H:i') ?>
				</div>
			</div>
			<div class="post_content">
				<?php the_content('Read More →'); ?>
			</div>
		</div>
	</div>
</div>

	<?php comments_template( '', true ); ?>
</article>

</div>
</div>

<?php // get_sidebar(); ?>

<?php get_footer(); ?>