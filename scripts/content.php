<?php

function new_content($content) {

if (is_single()) {

$url=get_permalink(); 

// Facebook LIKE
$choix_like = get_option('etb_choix_like');
if ($choix_like != "") {
	$fb_like='<iframe src="http://www.facebook.com/plugins/like.php?locale='.bloginfo('language').'&href='.urlencode(get_permalink($post->ID)).'&amp;layout=standard&amp;show_faces=true&amp;width=430&amp;action=like&amp;colorscheme=evil" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:100%; height:60px; padding-top:10px;"></iframe>';  

//$fb_like='<fb:like layout="standard" show-faces="true" width="450" action="like" colorscheme="light" font="arial"></fb:like>';

}  

// Twitter button
	$choix_tweet = get_option('etb_choix_tweet');
	$choix_tweet_format = get_option('etb_tweet_format');
	$twitter_login = get_option('etb_twitter');
	
	if (!empty($twitter_login) and $choix_tweet != "") {
	$twitter='<a href="http://twitter.com/share" rel="nofollow" class="twitter-share-button" data-count="'.$choix_tweet_format.'" data-via="'.$twitter_login.'">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js" style="padding-left:10px;vertical-align:middle;" ></script>';
	}
	
	if (empty($twitter_login) and $choix_tweet != "") {
	$twitter='<a href="http://twitter.com/share" rel="nofollow" class="twitter-share-button" data-count="'.$choix_tweet_format.'" data-via="easytoolbox" style="padding-left:10px;vertical-align:middle;">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>';
	}
	
	 

//Share	 
$choix_share = get_option('etb_choix_share');
if ($choix_share != "") {   
	global $post;
	setup_postdata($post);
	$description=strip_tags(substr($post->post_content,0,300));

	$partager = '<a href="http://easytoolbox.net" alt="Plugin All in One for Wordpress : Easytoolbox" title="Plugin All in One for Wordpress : Easytoolbox" target="blanck" style="cursor:default;text-decoration:none;color:#666666;">'. __('Share', 'easytoolbox').' </a>';     

// Facebook
	$facebook='<a href="http://www.facebook.com/sharer.php?u='.htmlspecialchars($url).'&t='.get_the_title().'" rel="nofollow" target="_blank"><img src="'.get_bloginfo('wpurl').'/wp-content/plugins/easy-toolbox/scripts/icon-share/facebook.gif" alt="Facebook" title="share on facebook"></a>';
	
	// netvibes
	$netvibes='<a href="http://www.netvibes.com/share?url='.htmlspecialchars($url).'&title='.get_the_title().'" rel="nofollow" target="_blank"><img src="'.get_bloginfo('wpurl').'/wp-content/plugins/easy-toolbox/scripts/icon-share/netvibes.png" alt="Netvibes" title="share on netvibes" ></a>';
	    
	// Delicious
	    $etb_delicious='<a href="http://del.icio.us/post?url='.urlencode(get_permalink($post->ID)).'&title='.urlencode(get_the_title()).'&notes='.$description.'" rel="nofollow" target="_blank"><img src="'.get_bloginfo('wpurl').'/wp-content/plugins/easy-toolbox/scripts/icon-share/delicious.png" alt="Delicious" title="Share on Del.ico.us"></a>';

	// Technoratie	    
	    $technoratie='<a href="http://technorati.com/cosmos/search.html?url='.urlencode(get_permalink($post->ID)).'" rel="nofollow" target="_blank"><img src="'.get_bloginfo('wpurl').'/wp-content/plugins/easy-toolbox/scripts/icon-share/technorati.png" alt="Technorati" title="Save on Technorati"></a>';
	    
	// Wikio
	$wikio='<a href="http://www.wikio.fr/vote?domain='.$siteurl.'&title='.$url.'" target="_blank" rel="nofollow"><img src="'.get_bloginfo('wpurl').'/wp-content/plugins/easy-toolbox/scripts/icon-share/wikio.gif" alt="Wikio" title="Share on Wikio"></a>';

	// DIGG  
	    $digg='<a href="http://digg.com/submit?phase=2&url='.urlencode(get_permalink($post->ID)).'" rel="nofollow" target="_blank"><img src="'.get_bloginfo('wpurl').'/wp-content/plugins/easy-toolbox/scripts/icon-share/digg.gif" alt="Digg" title="Share on DIGG"></a>';	    
}	

	// Adsense

$choix_adsense = get_option('etb_choix_adsense');
$ad_content = get_option('etb_ad_content');
$google_ad_content = get_option('etb_google_ad_content');
$count = get_option('etb_count_content');
$gadsense = get_option('gadsense');
$adsense = get_option('etb_google_id');

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
	margin:0px;
	padding:0px;
	height:22px;
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
	margin:0px;
	padding:0px;
}

.social img {
	border:0 none;
	width:20px;
	height:20px;
	margin:0px;
	padding:0px 0px 0px 8px;
}

--></STYLE><?php
	
	$logo_share = '<li>'.$facebook.'</li><li>'.$netvibes.'</li><li>'.$etb_delicious.'</li><li>'.$technoratie.'</li><li>'.$wikio.'</li><li>'.$digg.'</li>';
	
	$content=$ad_top.$content.$twitter.$fb_like.'<div class="social"><ul><li>'.$partager.'</li>'.$logo_share.'</ul></div>'.$ad_bottom;
	}
	   
	   return $content;
}
	
add_filter('the_content', 'new_content');	

?>