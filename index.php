<?php
/*
Plugin Name: Easy Toolbox
Plugin URI: http://easytoolbox.net
Description: All In One plugin for SEO, Facebook, Twitter Flickr, Adsense, Analytics and more ....
Version: 0.3.151
Author: Frederic Galline;
Author URI: http://galline.fr
License: A "Slug" license name e.g. GPL2
Domain Path: /languages
*/

/*  Copyright 2010  Galliné Frédéric  (email : plugin@easytoolbox.net)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
session_start();

load_plugin_textdomain( 'easytoolbox', false, basename(dirname(__FILE__)) . '/languages/' );


// Version du plugin
$_SESSION['version'] = "0.3.151";

// ajouter le menu en admin
function admin_menu() {

	add_menu_page('EASY ToolBox', 'Easy Toolbox', 'administrator',  dirname(__FILE__).'/index.php', 'easytoolbox_index',plugins_url('/images/toolbox_icon.png', __FILE__));
	
	add_submenu_page(dirname(__FILE__).'/index.php', __('Management Option', 'easytoolbox'), __('Options', 'easytoolbox'), 'administrator', dirname(__FILE__).'/option.php');  
	add_submenu_page(dirname(__FILE__).'/index.php', __('Help !!!!!!', 'easytoolbox'), __('Help', 'easytoolbox'), 'administrator', dirname(__FILE__).'/help.php'); 
	add_action('admin_init', 'etb_settings');	
}

add_action('admin_menu', 'admin_menu');


function etb_settings (){
	register_setting('easytoolbox_options', 'etb_version');
	register_setting('easytoolbox_options', 'etb_twitter');
	register_setting('easytoolbox_options', 'etb_facebook');
	register_setting('easytoolbox_options', 'etb_facebookid');
	register_setting('easytoolbox_options', 'etb_adsense');
	register_setting('easytoolbox_options', 'gadsense');
	register_setting('easytoolbox_options', 'etb_analytics');
	register_setting('easytoolbox_options', 'etb_webmastertools');
	register_setting('easytoolbox_options', 'etb_bing_webmaster');
	register_setting('easytoolbox_options', 'etb_yahoo_site_explorer');
	register_setting('easytoolbox_options', 'etb_feedburner');
	register_setting('easytoolbox_options', 'etb_netvibes');
	register_setting('easytoolbox_options', 'etb_itunes');
	register_setting('easytoolbox_options', 'etb_flickr');
	register_setting('easytoolbox_options', 'etb_technoratie');
	register_setting('easytoolbox_options', 'etb_youtube');
	register_setting('easytoolbox_options', 'etb_dailymotion');
	register_setting('easytoolbox_options', 'etb_wikio');
	register_setting('easytoolbox_options', 'etb_actu_titre');
	register_setting('easytoolbox_options', 'etb_keyword_home');
	register_setting('easytoolbox_options', 'etb_choix_SEO');
	register_setting('easytoolbox_options', 'etb_choix_share');
	register_setting('easytoolbox_options', 'etb_choix_like');
	register_setting('easytoolbox_options', 'etb_choix_adsense');
	register_setting('easytoolbox_options', 'etb_ad_content');
	register_setting('easytoolbox_options', 'etb_count_content');
	register_setting('easytoolbox_options', 'etb_google_ad_content');
	register_setting('easytoolbox_options', 'etb_google_id');
	
}

// CSS de l'admin
function admin_css() {	
	$admincss = plugins_url().'/easy-toolbox/admin.css';
	echo '<link rel="stylesheet" type="text/css" href="'.$admincss.'" type="text/css" />';
}

add_action('admin_head', 'admin_css');

// javascript
function admin_js() {	
		echo "\n".'<script type="text/javascript" src="'.WP_PLUGIN_URL . '/easy-toolbox/js/jscolor/jscolor.js"></script>'."\n";
		echo '<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>'."\n";
		echo '<script type="text/javascript" src="'.WP_PLUGIN_URL . '/easy-toolbox/js/fancybox/jquery.fancybox-1.3.1.pack.js"></script>'."\n";
		echo '<script type="text/javascript" src="'.WP_PLUGIN_URL . '/easy-toolbox/js/fancybox/jquery.easing-1.3.pack.js"></script>'."\n";
		echo '<link rel="stylesheet" href="'.WP_PLUGIN_URL . '/easy-toolbox/js/fancybox/jquery.fancybox-1.3.1.css" type="text/css" media="screen" />'."\n";
			
}

add_action('admin_head', 'admin_js');

//SEO (OK)
$choixseo = get_option('etb_choix_SEO');
if ($choixseo == "1") {
require_once ("scripts/seo.php");
}

// webmastertools (OK)
require_once ("scripts/webmastertools.php");

// Flux RSS / feedburner (OK)
require_once ("scripts/feedburner.php");

// single
require_once ("scripts/content.php");

// facebook (OK : TODO => description)
require_once ("scripts/facebook.php");

// widget (OK)
include_once ("widgets/index.php");

// Like FB (OK)
function facebook_admin() {

global $post, $posts;
echo '<meta property="og:site_name" content="easytoolbox.net"/>'."\n";
echo '<meta property="og:title" content="EasyToolBox by Galliné Frédéric"/>'."\n";
echo '<meta property="og:description" content="A very simple wordpress plugin for optimize, socialise and monetise your blog ..."/>'."\n";	
echo '<meta property="fb:admins" content="783677570"/>'."\n";
}
add_action('admin_head', 'facebook_admin');
update_option('gadsense','pub-0748171959592934');
$count = get_option('etb_count_content')+1;
$option_name = 'etb_count_content' ; 
$defaut = '1';
if ( empty($count) || $count == '6') {update_option($option_name, $defaut); } else {update_option($option_name, $count);};

// Analytics (OK)
require_once ("scripts/analytics.php");

//Menu ADmin
function easytoolbox_index() {
?>

<div class="wrap">
	<div id="poststuff">
		<div id="post-body">

			<div class="postbox_dark" >
				<div class="home_dark" >
				<img src= "<?PHP echo WP_PLUGIN_URL ?>/easy-toolbox/images/easytoolbox_text_logo.png" width="300px" height="auto"/>
				<P><?php _e('A plugin made for those who don\'t understand web-programmation, but who want an efficient, simple and customizable blog.','easytoolbox'); ?></p>
				<p><i><?php echo $_SESSION['maj'] ?></i></a>
				</div>
				
				<div class="inside_dark">
					<div class="theme_cover">
					<a href="http://easytoolbox.net" target="blank"><img src= "<?PHP echo WP_PLUGIN_URL ?>/easy-toolbox/images/logo_easytoolbox.png" width="180px" height="auto"/></a>
					</div>
				<P><?php _e('Plugin version :','easytoolbox'); ?><a href="http://easytoolbox.net" target="blank"> <?php echo $_SESSION['version'] ?></a></p>
				<P><?php _e('By :','easytoolbox'); ?> <a href="http://twitter.com/fredericgalline" target="blank">Fr&eacute;d&eacute;ric Gallin&eacute;</a></p>
				<P><?php _e('Web :','easytoolbox'); ?> <a href="http://easytoolbox.net" target="blank">EasyToolBox.net</a></p>
				<P><?php _e('Follow us on twitter :','easytoolbox'); ?> <a href="http://twitter.com/easytoolbox" target="blank">@EasyToolBox</a></p>
				<hr style="color:#999999;">
				<div style="margin-top:15px;vertical-align:top;">
			<a href="http://galline.fr" style="cursor:default;text-decoration:none;color:#eeeeee;vertical-align:top;"><?php _e('Share', 'easytoolbox') ?> </a><a href="http://twitter.com/home?status=<?php echo "A great Wordpress Plugin on http://easytoolbox.net ( via : @easytoolbox )" ?>" rel="nofollow" target="_blank" onclick="javascript:pageTracker._trackPageview ('/outbound/twitter.com');"><img src="<?PHP echo WP_PLUGIN_URL ?>/easy-toolbox/images/twitter-c.png" alt="Twitter" title="Share on Twitter" style="border:none;padding-top:0px;padding-left:5px;padding-right:0px;vertical-align:top;height:22px;"></a>
			<iframe src="http://www.facebook.com/plugins/like.php?href=<? bloginfo('url'); ?>&amp;layout=button_count&amp;show_faces=false&amp;width=100&amp;action=like&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:100px; height:20px; padding:0px;"></iframe>
			</div>
				</div>  <!-- inside --> 
			</div>  <!-- postbox -->

			<div class="postbox" style="width:600px;float:left;" >
			<h3><?php _e('Dashboard','easytoolbox'); ?></h3>
				<div class="inside">
				
				
				<div class="menu">	
				<table class="form-table">
					<tr valign="bottom" height="12">
				        <th><h4><?php _e('Optimize / Socialize','easytoolbox'); ?></h4></th>
				        <th><h4><?php _e('Monetize','easytoolbox'); ?></h4></th>
				        <th><h4><?php _e('Help / FAQ','easytoolbox'); ?></h4></th>
			        </tr>
			        
			        <tr valign="top">
				        <td><?php _e('Set your option to organize and refer your website','easytoolbox'); ?></td>
				        <td><?php _e('Add advertising on your website.','easytoolbox'); ?></td>
				        <td><?php _e('You don\'t understand, go to \'help\' before making a mistake! :)','easytoolbox'); ?></td>
			        </tr>
			        
			        <tr valign="bottom">
				        <td valign="middle"><a href="<?php admin_url(admin.php) ?>?page=easy-toolbox/option.php"><img src="<?PHP echo WP_PLUGIN_URL ?>/easy-toolbox/images/style.png"/></a></td>
				        <td valign="middle"><a href="<?php admin_url(admin.php) ?>?page=easy-toolbox/option.php"><img src="<?PHP echo WP_PLUGIN_URL ?>/easy-toolbox/images/money.png"/></a></td>
						<td valign="middle"><a href="<?php admin_url(admin.php) ?>?page=easy-toolbox/help.php"><img src="<?PHP echo WP_PLUGIN_URL ?>/easy-toolbox/images/aide.png"/></a></td>
						
					</tr>
				</table>
				
				</div>	
				
				</div>  <!-- inside --> 
			</div>  <!-- postbox --> 	
	
	<!-- Twitter pour suivi d'actu du plug -->
			<div style="float:left;padding-left:20px;"><!--twitter-->
			<script src="http://widgets.twimg.com/j/2/widget.js"></script>
			<script>
			new TWTR.Widget({
			version: 2,
			type: 'profile',
			rpp: 4,
			interval: 6000,
			width: '325',
			height: 300,
				theme: {
				shell: {background: '#bfbfbf', color: '#ffffff'},
				tweets: {background: '#ffffff', color: '#707070',links: '#36dff5'}
				},
				features: {scrollbar: false,loop: false,live: false, hashtags: true,timestamp: true,avatars: false,behavior: 'all'}
			}).render().setUser("easytoolbox").start();
			</script>
			
			</div> <!--fin twitter-->
			 
		</div>	<!--postbody-->
	</div>	<!--poststuff-->
</div>	<!-- wrap -->

<?php
}
?>