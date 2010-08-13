<div class="postbox" >
	
	<h3><?php _e('Social networks and analysis tools','easytoolbox'); ?></h3>
		<div class="inside" >
		<P><?php _e('NB: We strongly recommend to complete all these fields. Your site will have much more chance to increase its frequentation','easytoolbox'); ?></p>
		    
		    <table class="form-table" style="margin-bottom:10px">
		        <tr valign="top">
		        <th scope="row" ><a href="http://twitter.com" target="blank"><img src="../wp-content/plugins/easy-toolbox/images/icon/twitter.png" width="20px" height="20px"/></a><?php _e('Login Twitter', 'easytoolbox'); ?><a id="inline" class="gallery" href="#help_twitter" style="cursor:help;">?</a></th>		        
				<div style="display:none"><div id="help_twitter"><img src="<?PHP echo WP_PLUGIN_URL ?>/easy-toolbox/HTML/help/help-twitter.png" /><br><?php _e('Enter your Twitter username here, if you do not already have it, you can get one here : ','easytoolbox'); ?><a target="blank" href="http://www.twitter.com"><?php _e('Subscribe', 'easytoolbox'); ?></a>
</div></div>
				<td><input type="text" name="etb_twitter" value="<?php echo get_option('etb_twitter'); ?>"/></td>
		        
		        <th scope="row"><a href="http://feedburner.google.com/" target="blank"><img src="../wp-content/plugins/easy-toolbox/images/icon/feedburner.png" width="20px" height="20px"/></a><?php _e('Login feedburner ', 'easytoolbox'); ?><a id="inline" class="gallery" href="#help_feedburner" style="cursor:help;">?</a></th>
		       	<div style="display:none"><div id="help_feedburner"><img src="<?PHP echo WP_PLUGIN_URL ?>/easy-toolbox/HTML/help/help-feedburner.png"/><br><?php _e('Enter your Feedburner code here, if you do not already it, have you can get one here : ','easytoolbox'); ?><a target="blank" href="http://www.feedburner.com"><?php _e('Subscribe', 'easytoolbox'); ?></a>
</div></div>

		        <td><input type="text" name="etb_feedburner" value="<?php echo get_option('etb_feedburner'); ?>" /></td>
		        </tr>
		         
		        <tr valign="top">
		        <th scope="row"><a href="http://facebook.com" target="blank"><img src="../wp-content/plugins/easy-toolbox/images/icon/facebook.png" width="20px" height="20px"/></a><?php _e('Login Facebook ', 'easytoolbox'); ?><a id="inline" class="gallery" href="#help_facebook" style="cursor:help;">?</a></th>
		        		        
				<div style="display:none"><div id="help_facebook"><img src="<?PHP echo WP_PLUGIN_URL ?>/easy-toolbox/HTML/help/help-facebook.png"/><br><?php _e('Enter your Facebook Username here, if you do not already have it, you can get one here : ','easytoolbox'); ?><a target="blank" href="http://www.facebook.com/username/"><?php _e('Subscribe', 'easytoolbox'); ?></a>
</div></div>
				<td><input type="text" name="etb_facebook" value="<?php echo get_option('etb_facebook'); ?>" /><br></td>
		        
		       <th scope="row"><a href="http://facebook.com" target="blank"><img src="../wp-content/plugins/easy-toolbox/images/icon/facebook.png" width="20px" height="20px"/></a><?php _e('ID Facebook ', 'easytoolbox'); ?><a id="inline" class="gallery" href="#id_facebook" style="cursor:help;">?</a></th>
		        <div style="display:none"><div id="id_facebook"><img src="<?PHP echo WP_PLUGIN_URL ?>/easy-toolbox/HTML/help/help-id_facebook.png"/><br><?php _e('To obtain your Facebook ID, go to this ','easytoolbox'); ?><a target="blank" href="http://wiki.developers.facebook.com/index.php"><?php _e('page','easytoolbox'); ?></a><?php _e(' then click on your username.','easytoolbox'); ?></div></div>

		       	<td><input type="text" name="etb_facebookid" value="<?php echo get_option('etb_facebookid'); ?>" /></td>
		        </tr>
		    </table>
		     
		    <?php $choix_tweet_format = get_option('etb_tweet_format'); ?> 
		    
		    <table class="form-table">
		        <tr valign="top">
		        <th scope="row"><a href="http://twitter.com/share" class="twitter-share-button" data-url="http://easytoolbox.net" data-text="I love this plugin wordpress http://easytoolbox.net" data-count="<?php echo $choix_tweet_format ?>" data-via="easytoolbox">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></th>
		        <td><input type="checkbox" class="checkbox" id="etb_choix_tweet" name="etb_choix_tweet" value="1" <?php checked('1', get_option('etb_choix_tweet')); ?> /><?php _e('Add twiter button as a result of my content','easytoolbox'); ?><i> <?php _e('(advisable)','easytoolbox'); ?></i>. <?php _e('Format','easytoolbox'); ?> <select name="etb_tweet_format" id="etb_tweet_format">
		        	<option value="vertical" <?php if(get_option('etb_tweet_format') == 'vertical'){?>selected="selected"<?php }?>><?php _e('vertical count','easytoolbox'); ?></option>
		        	<option value="horizontal" <?php if(get_option('etb_tweet_format') == 'horizontal'){?>selected="selected"<?php }?>><?php _e('horizontal count','easytoolbox'); ?></option>
		        	<option value="none" <?php if(get_option('etb_tweet_format') == 'none'){?>selected="selected"<?php }?> ><?php _e('logo only','easytoolbox'); ?></option>
		        </select>
		        </td>
		        </tr>
		    </table>
 
		    <table class="form-table">
		        <tr valign="top">
		        <th scope="row"><iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Feasytoolbox.net&amp;layout=button_count&amp;show_faces=false&amp;width=150&amp;action=like&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150px; height:21px;" allowTransparency="true"></iframe></th>
		        <td><input type="checkbox" class="checkbox" id="etb_choix_like" name="etb_choix_like" value="1" <?php checked('1', get_option('etb_choix_like')); ?> /><?php _e('Add button "Like" facebook as a result of my content','easytoolbox'); ?><i> <?php _e('(advisable)','easytoolbox'); ?></i></td>
		        </tr>
		        
		        <tr valign="top">
		        <th scope="row"><img src="../wp-content/plugins/easy-toolbox/images/share.png" /></th>
		        <td><input type="checkbox" class="checkbox" name="etb_choix_share" id="etb_choix_share" value="1" <?php checked('1', get_option('etb_choix_share')); ?> /><?php _e('Add the \"share on social networks\" after my posts. ','easytoolbox'); ?></td>
		        
   
		        </tr>
		    </table>
		    
			
			<div class="more_options"><small><b><a id="open_options"><?php _e('More options','easytoolbox'); ?></a></b></small></div>
			
			<script>
			$('#open_options').toggle(function(){ $('#ls_balises').slideDown('slow'); },function(){ $('#ls_balises').slideUp('slow'); });
			</script>
			
			
						
			<div id="ls_balises"  style="display:none;">
			<div><img src="../wp-content/plugins/easy-toolbox/images/pointe_haute.png" style="margin:0px 0 0 260px" width="20px" height="9px"/></div>
			<div class="options">
			<p><b><?php _e('Here is the Geek\'s place!','easytoolbox'); ?></b> <i><?php _e('Optional fields:','easytoolbox'); ?></i><?php _e('  If you don\'t know these services, or if you haven\'t subscribed, please leave blank and go your way ...','easytoolbox'); ?></p>
				<table class="form-table">
		        <tr valign="top">
		        <th scope="row"><a href="http://flickr.com" target="blank"><img src="../wp-content/plugins/easy-toolbox/images/icon/flickr.png" width="20px" height="20px"/></a>Login Flickr</th>
		        <td><input type="text" name="etb_flickr" value="<?php echo get_option('etb_flickr'); ?>" /></td>
		        
		        <th scope="row" ><a href="http://netvibes.com" target="blank"><img src="../wp-content/plugins/easy-toolbox/images/icon/netvibes.png" width="20px" height="20px"/></a>Login Netvibes</th>
		        <td><input type="text" name="etb_netvibes" value="<?php echo get_option('etb_netvibes'); ?>" /></td>
		        </tr>
		         
		        <tr valign="top">
		        <th scope="row"><a href="https://buy.itunes.apple.com/WebObjects/MZFinance.woa/wa/publishPodcast" target="blank"><img src="../wp-content/plugins/easy-toolbox/images/icon/itunes.png" width="20px" height="20px"/></a><?php _e('Link for your Itunes Podcast', 'easytoolbox'); ?></th>
		        <td><input type="text" name="etb_itunes" value="<?php echo get_option('etb_itunes'); ?>" /><br></td>
		        
		 		<th scope="row"><a href="http://wikio.com" target="blank"><img src="../wp-content/plugins/easy-toolbox/images/icon/wikio.png" width="20px" height="20px"/></a>wikio</th>
		       	<td><input type="text" name="etb_wikio" value="<?php echo get_option('etb_wikio'); ?>" /></td>
		        </tr>
		        
		        <tr valign="top">
		        <th scope="row"><a href="http://youtube.com" target="blank"><img src="../wp-content/plugins/easy-toolbox/images/icon/youtube.png" width="20px" height="20px"/></a>YouTube</th>
		       	<td><input type="text" name="etb_youtube" value="<?php echo get_option('etb_youtube'); ?>" /></td>
		       	
		        <th scope="row"><a href="http://dailymotion.com" target="blank"><img src="../wp-content/plugins/easy-toolbox/images/icon/dailymotion.png" width="20px" height="20px"/></a>Dailymotion</th>
		        <td><input type="text" name="etb_dailymotion" value="<?php echo get_option('etb_dailymotion'); ?>" /></td>
		        </tr>
		        
		      
		        
		    </table>
		    </div>
		   </div>  <!-- plus d'options -->   
		</div>  <!-- inside --> 
</div>  <!-- postbox social --> 
