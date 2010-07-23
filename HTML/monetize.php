</div> 
 
<div class="postbox" >
	<h3><?php _e('Monetize', 'easytoolbox'); ?></h3>
	
		<div class="inside">
		<P><?php _e('You can put advertising on your site to monetize your hard work ...','easytoolbox'); ?></p>
		
		<table class="form-table">
		        <tr valign="top">
		        <th scope="row"><img src="../wp-content/plugins/easytoolbox/images/money.png" width="20px" height="20px"/><?php _e('Monetize your Blog','easytoolbox'); ?></th>
		        <td><input type="checkbox" class="checkbox" name="etb_choix_adsense" id="etb_choix_adsense" value="1" <?php checked('1', get_option('etb_choix_adsense')); ?> /><?php _e('I want to put advertising on my site.','easytoolbox'); ?></td>
		        </tr>
		        
		        <tr valign="top">
		        <th><?php _e('Put advertising in your content','easytoolbox'); ?></th>
		        <td>
		        <select name="etb_ad_content" id="etb_ad_content">
		        	<option value="0" <?php if(get_option('etb_ad_content') == '0'){?>selected="selected"<?php }?>><?php _e('I don&apos;t want put advertisement in my content','easytoolbox'); ?></option>
		        	<option value="1" <?php if(get_option('etb_ad_content') == '1'){?>selected="selected"<?php }?>><?php _e('At the top of my content (efficient)','easytoolbox'); ?></option>
		        	<option value="2" <?php if(get_option('etb_ad_content') == '2'){?>selected="selected"<?php }?> ><?php _e('At the Bottom of my content (moderatly good)','easytoolbox'); ?></option>
		        	<option value="3" <?php if(get_option('etb_ad_content') == '3'){?>selected="selected"<?php }?>><?php _e('At the top and bottom of my content (very efficient)','easytoolbox'); ?></option>
		        </select><br>
		        </td>
			</tr>  
		</table>

<!-- AJOUTER ou MODIFIER un Script -->
		<?php $google_ad_content = get_option('etb_google_ad_content'); ?>
		
		<div class="more_options"><small><b><a id="open_options_google"><?php _e('Configure','easytoolbox'); ?></a></b></small></div>
			
			
<!-- **************** GOOGLE **************** -->
			<script>
			$('#open_options_google').toggle(function(){ $('#google_options').slideDown('slow'); },function(){ $('#google_options').slideUp('slow'); });
			</script>
		   
	<div id="google_options" style="display:none" >
	
	<div><img src="../wp-content/plugins/easytoolbox/images/pointe_haute.png" style="margin:0px 0 0 255px" width="20px" height="9px"/></div>
		
		<div class="options">
		    
		<table class="form-table">
	
			<tr valign="top" >

		        <th scope="row"><img src="../wp-content/plugins/easytoolbox/images/google_adsense.png" /><br/><br/><?php _e('Enter your Adsense code for content','easytoolbox'); ?><br/><a target="blank" href="https://www.google.com/adsense/adsense-products"><b>&rarr; </b><?php _e('Get code','easytoolbox'); ?></a><br/><br/><hr><br/><i><?php _e('For add ads on your sidebar, just use the ','easytoolbox'); ?><a href="<?php echo admin_url('widgets.php'); ?>"><?php _e('Widgets','easytoolbox'); ?></a>.</i></th>
		        <td><textarea name="etb_google_ad_content" id="etb_google_ad_content" cols="70" rows="11"  /><?php echo get_option('etb_google_ad_content','easytoolbox'); ?></textarea></td>
			</tr>
		</table>
		</div>
					
	</div>  <!-- Google Options --> 
	
	<?php
	$pub=substr(strstr(get_option('etb_google_ad_content'), 'pub-'), 'p', 20); 
	update_option('etb_google_id',$pub);
	?>

	</div>  <!-- inside --> 
</div>  <!-- postbox pub --> 