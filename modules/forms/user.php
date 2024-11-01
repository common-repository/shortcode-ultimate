<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('user');
?>
<div id="sp_user">
<hr />
<h4><span class="dashicons <?php echo $modules['User']['icon'] ?>"></span><?php _e('user', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_user_field"><?php _e('Field', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_user_field" id="sp_user_field" value="" class="regular-text">
<option value="display_name" selected="selected"><?php _e('Display name', MK_SPLUS_TD);?></option>
<option value="ID"><?php _e('ID', MK_SPLUS_TD);?></option>
<option value="user_login"><?php _e('Login', MK_SPLUS_TD);?></option>
<option value="user_nicename"><?php _e('Nice name', MK_SPLUS_TD);?></option>
<option value="user_email"><?php _e('Email', MK_SPLUS_TD);?></option>
<option value="user_url"><?php _e('URL', MK_SPLUS_TD);?></option>
<option value="user_registered"><?php _e('Registered', MK_SPLUS_TD);?></option>
<option value="user_activation_key"><?php _e('Activation key', MK_SPLUS_TD);?></option>
<option value="user_status"><?php _e('Status', MK_SPLUS_TD);?></option>
</select></td>
</tr>
<tr>
<th scope="row"><label for="sp_user_default"><?php _e('Default', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_user_default" id="sp_user_default" value="Default" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_user_before"><?php _e('Before', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_user_before" id="sp_user_before" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_user_after"><?php _e('After', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_user_after" id="sp_user_after" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_user_user_id"><?php _e('User ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_user_user_id" id="sp_user_user_id" value="" class="regular-text" type="text"></td>
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