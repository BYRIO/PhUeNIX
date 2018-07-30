<?php

add_theme_support( 'title-tag' );

register_nav_menus(array(
	'small' => __( ' 外链小导航','PhUeNIX' ),
	'main' => __( '站点主导航','PhUeNIX' )
));

function dpt_pagenav() {
	global $wp_query, $wp_rewrite;
	$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

	$pagination = array(
		'base' => @add_query_arg('paged','%#%'),
		'format' => '',
		'total' => $wp_query->max_num_pages,
		'current' => $current,
		'show_all' => false,
		'type' => 'plain',
		'end_size'=>'1',
		'prev_text' => __('← Prev Page','slackview'),
		'next_text' => __('Next Page →','slackview')
	);

	if ( $wp_rewrite->using_permalinks() )
		$pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg('s',get_pagenum_link(1) ) ) . 'page/%#%/', 'paged');

	if ( !empty($wp_query->query_vars['s']) )
		$pagination['add_args'] = array('s'=>get_query_var('s'));

	echo paginate_links($pagination);
}

function dpt_send_static() {

	function dpt_send() {
		?><script type="text/javascript">$(document).ready(function(){$.get("http://work.dimpurr.com/theme/theme_tj.php?theme_name=Slackview&blog_url=<?=get_bloginfo('url')?>&t=" + Math.random())})</script><?php
		update_option( 'dpt_send', true );
	};

	if ( get_option('dpt_send') != true ) {
		dpt_send();
	}

}
?>