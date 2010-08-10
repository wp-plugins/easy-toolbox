<?php

function new_content($content) {

if (is_single()) {

// Facebook LIKE
$choix_like = get_option('etb_choix_like');
if ($choix_like != "") {
	$fb_like='<iframe src="http://www.facebook.com/plugins/like.php?href='.urlencode(get_permalink($post->ID)).'&amp;layout=standard&amp;show_faces=true&amp;width=430&amp;action=like&amp;colorscheme=evil" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:100%; height:60px; padding-top:10px;"></iframe>';
}   

//Share	 
$choix_share = get_option('etb_choix_share');
if ($choix_share != "") {   
	global $post;
	setup_postdata($post);
	$description=strip_tags(substr($post->post_content,0,300));

	$partager = '<a href="http://easytoolbox.net" alt="Plugin All in One for Wordpress : Easytoolbox" title="Plugin All in One for Wordpress : Easytoolbox" target="blanck" style="cursor:default;text-decoration:none;color:#666666;vertical-align:middle;">'. __('Share', 'easytoolbox').'</a>';     

	
// Twitter + Bit.ly		

	$twitter = get_option('etb_twitter');
	$login = "your login";
	$api_key = "R_4d406bf094395c0bdcxxxxxxxxxxxxxx";
	$url=get_permalink(); 
	$shorten = wp_remote_fopen("http://api.bit.ly/v3/shorten?login=".$login."&apiKey=".$api_key."&uri=".urlencode($url)."&format=txt");
	// pour bit.ly remplacer $url par $shorten dans les boucles
	
	if (!empty($twitter)) {
	
	$twitter='<a href="http://twitter.com/home?status='.get_the_title().' | '.$url.' via @'.$twitter.' " rel="nofollow" target="_blank" onclick="javascript:pageTracker._trackPageview (\'/outbound/twitter.com\');"><img src="'.get_bloginfo('wpurl').'/wp-content/plugins/easy-toolbox/scripts/icon-share/twitter.jpeg" alt="Twitter" title="Twitter" style="width:16px;height:16px;vertical-align:middle"></a>';

	}
	
	if (empty($twitter)) {
	
	$twitter='<a href="http://twitter.com/home?status='.get_the_title().' | '.$url.' " rel="nofollow" target="_blank" onclick="javascript:pageTracker._trackPageview (\'/outbound/twitter.com\');"><img src="'.get_bloginfo('wpurl').'/wp-content/plugins/easy-toolbox/scripts/icon-share/twitter.jpeg" alt="Twitter" title="Share on Twitter" style="width:16px;height:16px;vertical-align:middle"></a>';
	
	}
	
	// Facebook
	$facebook='<a href="http://www.facebook.com/sharer.php?u='.htmlspecialchars($url).'&t='.get_the_title().'" rel="nofollow" target="_blank"><img src="'.get_bloginfo('wpurl').'/wp-content/plugins/easy-toolbox/scripts/icon-share/facebook.gif" alt="Facebook" title="share on facebook" style="width:16px;height:16px;vertical-align:middle" ></a>';
	
	// netvibes
	$netvibes='<a href="http://www.netvibes.com/share?url='.htmlspecialchars($url).'&title='.get_the_title().'" rel="nofollow" target="_blank"><img src="'.get_bloginfo('wpurl').'/wp-content/plugins/easy-toolbox/scripts/icon-share/netvibes.png" alt="Netvibes" title="share on netvibes" style="width:16px;height:16px;vertical-align:middle" ></a>';
	    
	// Delicious
	    $etb_delicious='<a href="http://del.icio.us/post?url='.urlencode(get_permalink($post->ID)).'&title='.urlencode(get_the_title()).'&notes='.$description.'" rel="nofollow" target="_blank"><img src="'.get_bloginfo('wpurl').'/wp-content/plugins/easy-toolbox/scripts/icon-share/delicious.png" alt="Delicious" title="Share on Del.ico.us" style="width:16px;height:16px;vertical-align:middle"></a>';

	// Technoratie	    
	    $technoratie='<a href="http://technorati.com/cosmos/search.html?url='.urlencode(get_permalink($post->ID)).'" rel="nofollow" target="_blank"><img src="'.get_bloginfo('wpurl').'/wp-content/plugins/easy-toolbox/scripts/icon-share/technorati.png" alt="Technorati" title="Save on Technorati" style="width:16px;height:16px;vertical-align:middle" ></a>';
	    
	// Wikio
	$wikio='<a href="http://www.wikio.fr/vote?domain='.$siteurl.'&title='.$url.'" target="_blank" rel="nofollow"><img src="'.get_bloginfo('wpurl').'/wp-content/plugins/easy-toolbox/scripts/icon-share/wikio.gif" alt="Wikio" title="Share on Wikio" style="width:16px;height:16px;vertical-align:middle"></a>';

	// DIGG  
	    $digg='<a href="http://digg.com/submit?phase=2&url='.urlencode(get_permalink($post->ID)).'" rel="nofollow" target="_blank"><img src="'.get_bloginfo('wpurl').'/wp-content/plugins/easy-toolbox/scripts/icon-share/digg.gif" alt="Digg" title="Share on DIGG" style="width:16px;height:16px;vertical-align:middle"></a>';	    
}	

	// Adsense

$choix_adsense = get_option('etb_choix_adsense');
$ad_content = get_option('etb_ad_content');
$google_ad_content = get_option('etb_google_ad_content');
$count = get_option('etb_count_content');
$gadsense = get_option('gadsense');
$adsense = get_option('etb_google_id');
if (isset($adsense_ad_content)) {
$adsense_ad_content = '<script type="text/javascript"><!--
google_ad_client = "pub-0748171959592934";
/* 234x60, date de création 08/07/10 */
google_ad_slot = "3618717795";
google_ad_width = 234;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>';
	
update_option('etb_google_ad_content',$adsense_ad_content);
}

	// Ad_haut
	if ($choix_adsense == "1" && ($ad_content == "1" || $ad_content == "3") && is_single()){
		$ad_top = $google_ad_content;
				}
	// Ad_bas
	if ($choix_adsense == "1" && ($ad_content == "2" || $ad_content == "3") && is_single()) {
		$ad_bottom = $google_ad_content;
		} 
	
?><STYLE type="text/css"><!--
	
.social  {
	margin:16px 0px 0px 0;
}

.social ul {
	display:inline;
	margin:0 !important;
	padding:0 !important;
}

.social ul li {
	display:block !important;
	float:left;
	list-style-type:none;
	margin:0;
	padding:1px;
}

.social img {
	border:0 none;
	float:none;
	height:16px;
	margin:0;
	padding:0 0.3em 0 0;
	width:16px;
}
	
--></STYLE><?php
	
	$logo_share = '<li>'.$twitter.'</li><li>'.$facebook.'</li><li>'.$netvibes.'</li><li>'.$etb_delicious.'</li><li>'.$technoratie.'</li><li>'.$wikio.'</li><li>'.$digg.'</li>';
	
	$content=$ad_top.$content.'<div class="social"><ul><li>'.$partager.'</li>'.$logo_share.'</ul></div>'.$fb_like.$ad_bottom;
	}
	   
	   return $content;
}
	
add_filter('the_content', 'new_content');	

?>