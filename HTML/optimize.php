<div class="postbox" >	    
		<h3><?php _e('Optimize','easytoolbox'); ?></h3>
			<div class="inside"> 
			<P><?php _e('To optimize your ranking, please enter the information below','easytoolbox'); ?></p>
		
			<table class="form-table">
			    
			    	<tr valign="top">
			        <th scope="row"><?php _e('Search engine optimization','easytoolbox'); ?></th>
			        <td><input type="checkbox" class="checkbox" id="etb_choix_SEO" name="etb_choix_SEO" value="1" <?php checked('1', get_option('etb_choix_SEO')); ?> /><?php _e('I wish EasyToolbox optimize my site for search engines. If you check this box, you must disable all other SEO plugins on your blog ... We take care of everything.','easytoolbox'); ?></td>
			        </tr>

			        <tr valign="top">
			        <th scope="row"><?php _e('Keywords','easytoolbox'); ?></th>
			        <td><input type="text" name="etb_keyword_home" size="60" value="<?php echo get_option('etb_keyword_home'); ?>" /><br><small><?php _e('Some search engines still use META keywords. To enhance your Search Engine Optimization (SEO), please enter the important keywords related to your editorial line. Maximum 10 and separated by a comma <i>(eg house, deocration, ecology)','easytoolbox'); ?></i></small></td>
			        </tr>    
			</table>
			    
			    
			<table class="form-table">
		        <tr valign="top">
		       
		        
		        <th scope="row"><a href="http://www.google.com/analytics/" target="blank"><img src="http://www.google.com/analytics/favicon.ico" width="20px" height="20px"/></a>ID Analytics <a id="inline" class="gallery" href="#id_analytics" style="cursor:help;">?</a></th>
		        <div style="display:none"><div id="id_analytics"><img src="<?PHP echo WP_PLUGIN_URL ?>/easytoolbox/HTML/help/help-analytics.png"/><br><?php _e('Enter your Google Analytics here, if you do not already have you can get one here : ','easytoolbox'); ?><a target="blank" href="http://analytics.google.com">Souscrire</a>
</div></div>
				<td><input type="text" name="etb_analytics" value="<?php echo get_option('etb_analytics'); ?>" /></td>

		       	<th scope="row"><a href="http://www.google.com/webmasters/tools/" target="blank"><img src="../wp-content/plugins/easytoolbox/images/icon/google.png" width="20px" height="20px"/></a>ID Google WebmasterTools <a id="inline" class="gallery" href="#webmastertools" style="cursor:help;">?</a></th>
		        <div style="display:none"><div id="webmastertools"><img src="<?PHP echo WP_PLUGIN_URL ?>/easytoolbox/HTML/help/help-webmastertools.png"/><br><?php _e('Enter your Google WebmasterTools Code here, if you do not already have you can get one here : ','easytoolbox'); ?><a target="blank" href="http://www.google.com/webmasters/tools/"><?php _e('Subscribe','easytoolbox'); ?></a>
</div></div>
				<td><input type="text" name="etb_webmastertools" value="<?php echo get_option('etb_webmastertools'); ?>" /></td>
		        </tr>
		   </table>
			    
			    
			    
			</div>  <!-- inside --> 
</div>  <!-- postbox ref --> 