<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('members');
?>
<div id="sp_members">
<hr />
<h4><span class="dashicons <?php echo $modules['Members']['icon'] ?>"></span><?php _e('Members', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_members_class"><?php _e('Class', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_members_class" id="sp_members_class" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_members_id"><?php _e('ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_members_id" id="sp_members_id" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_members_message"><?php _e('Message', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_members_message" id="sp_members_message" value="This content is for registered users only." class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_members_background_color"><?php _e('Box Background Color', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_members_background_color" id="sp_members_background_color" value="#d0edc0" class="regular-text color" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_members_text_color"><?php _e('Box Text Color', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_members_text_color" id="sp_members_text_color" value="#000" class="regular-text color" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_members_login_text"><?php _e('Login Link Text', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_members_login_text" id="sp_members_login_text" value="login" class="regular-text" type="text">
</td>
</tr>
<tr>
<th scope="row"><label for="sp_members_login_url"><?php _e('Login Link Url', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_members_login_url" id="sp_members_login_url" value="<?php echo site_url().'/wp-login.php';?>" class="regular-text" type="text">
</td>
</tr>
<tr>
<th scope="row"><label for="sp_members_login_content"><?php _e('Content', MK_SPLUS_TD);?></label></th>
<td>
<textarea name="sp_members_login_content" id="sp_members_login_content"  class="regular-text"><?php _e('Content for logged members', MK_SPLUS_TD);?></textarea>
</td>
</tr>
<tr>
<th scope="row"><label for="generated_shortcode"><?php _e('Generated Shortcode', MK_SPLUS_TD);?></label></th>
<td>
<textarea name="generated_shortcode" id="generated_shortcode" class="large-text code" rows="3"></textarea>
</td>
</tr>
<tr>
<th scope="row"></th>
<td>
<p class="submit"><input name="insert_shortcode" id="insert_shortcode" class="button button-primary" value="Insert Shortcode" type="submit"></p>
</td>
</tr>
</tbody></table>
</div>