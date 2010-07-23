<?php

function facebook() {

if (is_single()) {
global $post, $posts;

//get_the_post_thumbnail( $post->ID,'facebook') );

//$image_id = get_post_thumbnail_id( $post->ID, 'facebook' );  
//$image_url = wp_get_attachment_image_src($image_id,'facebook');  
//$image_url = $image_url[0]; 
$facebook = get_option('etb_facebook');
$facebookid = get_option('etb_facebookid');

	if (isset($facebookid) && !empty($facebookid)) {
		echo '<meta property="fb:admins" content="'.$facebookid.'"/>'."\n";
	}
echo '<meta property="og:site_name" content="'.get_bloginfo('name').'"/>'."\n";
echo '<meta property="og:title" content="'.get_the_title().'"/>'."\n";
//echo '<meta property="og:description" content="'.get_description($post).' ..."/>'."\n";
//echo '<meta property="og:image" content="'.$image_url.'"/>'."\n";

}
		
}

add_action('wp_head', 'facebook');


?>