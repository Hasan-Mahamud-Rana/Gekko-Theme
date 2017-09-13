<?php
function doctype_opengraph($output) {
	return $output . '
	xmlns:og="http://opengraphprotocol.org/schema/"
	xmlns:fb="http://www.facebook.com/2008/fbml"';
}
add_filter('language_attributes', 'doctype_opengraph');

function fb_opengraph() {
	global $post;
		if($excerpt = $post->post_excerpt) {
			$excerpt = strip_tags($post->post_excerpt);
			$excerpt = str_replace("", "'", $excerpt);
		} else {
			$excerpt = get_bloginfo('description');
		}
?>
	<meta property="fb:app_id" content="" />
	<meta property="og:site_name" content="<?php echo get_bloginfo(); ?>"/>
	<meta property="og:url" content="<?php echo the_permalink(); ?>"/>
	<meta property="og:type" content="article"/>
	<meta property="og:title" content="<?php echo the_title(); ?>"/>
	<meta property="og:description" content="<?php echo $excerpt; ?>"/>
	<meta property="og:image" content="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>"/>

<?php
}
add_action('wp_head', 'fb_opengraph', 5);

add_action( 'init', 'add_excerpts_to_pages' );
function add_excerpts_to_pages() {
  add_post_type_support( 'page', 'excerpt' );
}
?>