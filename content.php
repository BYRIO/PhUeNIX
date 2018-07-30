<div class="post_ctn">
	<div class="post_bg">
		<header class="post_header">
			<div class="post_author">
				<a class="post_author_avatar" href="<?php echo get_the_author_meta('user_url'); ?>">
					<?php echo get_avatar( get_the_author_meta('ID'), 44 ); ?>
				</a>
				<div class="post_author_n">
					<a class="post_author_name" href="<?php echo get_the_author_meta('user_url'); ?>">
						<?php echo get_the_author_meta('nickname'); ?>
					</a>
					<span class="post_author_org">
						<?php echo get_the_author_meta('first_name'); ?>
					</span>
					<span class="post_author_college">
						<?php echo get_the_author_meta('last_name'); ?>
					</span>
				</div>
				<span class="post_author_desc">
					<?php echo get_the_author_meta('description'); ?>
				</span>
			</div>
			<div class="post_cat">
				<h3 class="post_cat_name">
					<?php the_category(' ') ?>
				</h3>
				<div class="post_cat_desc">
					<?php echo category_description( get_the_category()[0] ); ?>
				</div>
			</div>
		</header>
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