<?php

function facebook() {
	
// admettre les thumbnails //
/* add_theme_support('post-thumbnails');
add_image_size( 'facebook', 50, 50, true ); */

$url=get_permalink();
$facebook_id = get_option('etb_facebookid');

	if (is_single() or is_page()) {
	global $post, $posts;
	$image_id = get_post_thumbnail_id( $post->ID, 'facebook' );  
	$image_url = wp_get_attachment_image_src($image_id,'facebook');  
	$image_url = $image_url[0]; 
	
	$facebook = get_option('etb_facebook');
	$id_apps_facebook = get_option('etb_idapps_facebook');
	
	echo "\n".'<!-- Config facebook -->'."\n";	
	echo '<meta property="og:site_name" content="'.get_bloginfo('name').'"/>'."\n";
	echo '<meta property="og:title" content="'.get_the_title().'"/>'."\n";
	echo '<meta property="og:description" content="'.get_description($post).' ..."/>'."\n";
	echo '<meta property="og:image" content="'.$image_url.'"/>'."\n";
	echo '<meta property="og:type" content="blog" />'."\n";
	echo '<meta property="fb:app_id" content="'.get_option('etb_idapps_facebook').'"/>'."\n";
	echo '<meta property="og:url" content="'.$url.'"/>'."\n";
		if (isset($facebook_id) && !empty($facebook_id)) {
			echo '<meta property="fb:admins" content="'.$facebook_id.'"/>'."\n";
		}	
	}
		
}

add_action('wp_head', 'facebook');

function facebook_script() {
	?>
	
<div id="fb-root"></div>
<script>
 window.fbAsyncInit = function() {
 FB.init({appId: '<?php echo get_option('etb_idapps_facebook') ?>', status: true, cookie: true,
  xfbml: true});
 };
 (function() {
 var e = document.createElement('script'); e.async = true;
 e.src = document.location.protocol +
  '//connect.facebook.net/<?php bloginfo('language') ?>/all.js';
 document.getElementById('fb-root').appendChild(e);
 }());
</script>
	<?
	}

add_action('wp_footer', 'facebook_script');

?>