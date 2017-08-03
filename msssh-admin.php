<?php
// Techlineinfo Social Share and Counter Plugin Admin Settings ---------------------------
//-------------------------------------------------------
function msssh_backend_menu()
{
?>
<div id="msssh-admin-wrap">

	<div class="wrap">
	<div id="icon-themes" class="icon32"></div>
	<h2><?php _e('Techlineinfo Social Count and Share '.msssh_plugin_version().' Settings','msssh'); ?></h2>
	</div>
	<div class="social"> <b>If you like this plugin Please share:</b>
<script type="text/javascript">
window.twttr=(function(d,s,id){var t,js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return}js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);return window.twttr||(t={_e:[],ready:function(f){t._e.push(f)}})}(document,"script","twitter-wjs"));
</script></span><span class="google"><script src="https://apis.google.com/js/platform.js" async defer></script>
<g:plusone size="medium" href="http://goo.gl/s04X09"></g:plusone>
</span>
<span class="Facebook">
<iframe src="http://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fwww.techlineinfo.com%2Fmashable-inspired-social-count-and-share-plugin-for-wordpress&layout=button_count" scrolling="no" frameborder="0" style="height: 21px; width: 100px" allowTransparency="true"></iframe>
</span>
<span class="twitter"><a href="https://twitter.com/home?status=Mashable%20like%20Social%20Count%20and%20Share%20buttons%20Wordpress%20Plugin%20:%20http://goo.gl/s04X09" target="blank" ><b>Share on Twitter</b></a>
</span>
</div> 
<div id="poststuff" style="position:relative;">
		<div class="postbox" id="msssh_admin">
			<div class="handlediv" title="Click to toggle"><br/></div>
			<h3 class="hndle"><span><?php _e("Plugin Settings",'msssh'); ?></span></h3>
			<div class="inside" style="padding: 15px;margin: 0;">
				<form method="post" action="options.php">
					<?php
						wp_nonce_field('update-options');
						$options = get_option('msssh_options');	
					?>
					<table>
						<tr>
							<td width="52%"><?php _e("Enable Plugin",'msssh'); ?> :</td>
							<td width="48%">
								<select name="msssh_options[enable]">
									<option value="1" <?php selected('1', $options['enable']); ?>><?php _e('Enable','msssh'); ?></option>
									<option value="0" <?php selected('0', $options['enable']); ?>><?php _e('Disable','msssh'); ?></option>
								</select>							</td>
					    </tr>
						
						<tr>
							<td>Minimum Count to Show (Default is Zero):</td>
							<td><input name="msssh_options[minimum_count]" value="<?php echo $options['minimum_count']; ?>"type="text" />														</td>
					    </tr>
						<tr>
						  <td>Pinterest default image URL : </td>
						  <td>&nbsp;<input name="msssh_options[pinterest_default_img]" value="<?php echo $options['pinterest_default_img']; ?>"type="text"  width="250px"/></td>
					  </tr>
						<tr>
						  <td>Enable Google Analytics Tracking:<br />Read More:<a href="https://support.google.com/analytics/answer/1683971?hl=en" target=\"_blank\">Social Interaction Analytics</a></p></td>
						  <td>&nbsp;<select name="msssh_options[analytics]">
									<option value="true" <?php selected('true', $options['analytics']); ?>>Enable</option>
									<option value="false" <?php selected('false', $options['analytics']); ?>>Disable</option>
								</select>		</td>
					  </tr>
					</table>
					<input type="hidden" name="action" value="update" />
					<input type="hidden" name="page_options" value="msssh_options" />					
					<p class="button-controls"><input type="submit" value="<?php _e('Save Settings','mssshlider'); ?>" class="button-primary" id="msssh_update" name="msssh_update"></p>
			</div>
		</div>
	</div>
	<div id="poststuff" style="position:relative;">
		<div class="postbox" id="msssh_admin">
			<div class="handlediv" title="Click to toggle"><br/></div>
			<h3 class="hndle"><span><?php _e("Short Code and Embedded Settings",'msssh'); ?></span></h3>
			<div class="inside" style="padding: 15px;margin: 0;">
					<table>			
						<!-- Share Button Embedded Code Start -->
							<tr>
							<td><?php _e("Embedded Type",'msssh'); ?> :</td>
							<td>
								<select id="msssh_embeded" class="share_button" name="msssh_options[msssh_embed]">
									<option value="auto_embed" <?php selected('auto_embed', $options['msssh_embed']); ?>><?php _e('Auto Embedded','msssh'); ?></option>
									<option value="template_code" <?php selected('template_code', $options['msssh_embed']); ?>><?php _e('Template code','msssh'); ?></option>
								</select>
							</td>
						</tr>
						<!-- Share Button Embedded Code Ends -->
					</table>
					<table id="msssh_place_type" style="<?php if($options['msssh_embed'] === "template_code"){?>display:none<?php } ?>">			
						<!-- Share Button Embedded Code Start -->
						
							<tr><td width="20%">
									<?php _e('Pages:','msssh'); ?>
							  </td>
								<td width="32%">
									<select name="msssh_options[show_page]">
										<option value="1" <?php selected('1', $options['show_page']); ?>><?php _e('Enable','msssh'); ?></option>
										<option value="0" <?php selected('0', $options['show_page']); ?>><?php _e('Disable','msssh'); ?></option>
									</select>								</td>
							    <td width="23%">Position</td>
							    <td width="25%">&nbsp;<select name="msssh_options[above_below_page]">
										<option value="1"<?php selected('1', $options['above_below_page']); ?> >Above</option>
										<option value="0"<?php selected('0', $options['above_below_page']); ?>>Below</option>
									</select>	</td>
							</tr>
							<tr>
								<td>
									<?php _e('Posts:','msssh'); ?>								</td>
								<td>
									<select name="msssh_options[show_single]">
										<option value="1" <?php selected('1', $options['show_single']); ?>><?php _e('Enable','msssh'); ?></option>
										<option value="0" <?php selected('0', $options['show_single']); ?>><?php _e('Disable','msssh'); ?></option>
									</select>								</td>
							    <td>Position</td>
							    <td>&nbsp;<select name="msssh_options[above_below_post]">
										<option value="1"<?php selected('1', $options['above_below_post']); ?> >Above</option>
										<option value="0"<?php selected('0', $options['above_below_post']); ?>>Below</option>
									</select></td>
							</tr>
							
							
							
						<!-- Share Button Embedded Code Ends -->
					</table>
					<div id="msssh_template_code" style="<?php if($options['msssh_embed'] === "auto_embed"){?>display:none<?php } ?>">
					
						<?php _e('Use Shortcode (inside post/page editor)','msssh'); ?><br>
						<h4>[msssh_social_share]</h4>
						<div class="msssh_or"><?php _e('"OR"','msssh'); ?></div>
						<?php _e('Use Template Code (inside the post loop)','msssh'); ?><br>
						<h4>&lt;?php if(function_exists('msssh_social_share')){ echo msssh_social_share(); } ?&gt;</h4>

					</div>
					<input type="hidden" name="action" value="update" />
					<input type="hidden" name="page_options" value="msssh_options" />		
					<p class="button-controls"><input type="submit" value="<?php _e('Save Settings','msssh'); ?>" class="button-primary" id="msssh_update" name="msssh_update"></p>
				</form>
			</div>
		</div>
	</div>
</div>

<script>
jQuery('#msssh_embeded').change(function(e) { 
	if(this.value==='template_code'){
		jQuery('#msssh_template_code').fadeIn();
		jQuery('#msssh_place_type').fadeOut();
	}
	else{
		jQuery('#msssh_place_type').fadeIn();
		jQuery('#msssh_template_code').fadeOut();
	}
});
</script>
<?php
}
