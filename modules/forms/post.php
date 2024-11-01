<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('post');
?>
<div id="sp_post">
<hr />
<h4><span class="dashicons <?php echo $modules['Post']['icon'] ?>"></span><?php _e('Post', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_post_field"><?php _e('Field', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_post_field" id="sp_post_field" value="" class="regular-text">
	<option value="ID"><?php _e('Post ID', MK_SPLUS_TD);?></option>	
	<option value="post_author"><?php _e('Post author', MK_SPLUS_TD);?></option>
	<option value="post_date"><?php _e('Post date', MK_SPLUS_TD);?></option>
	<option value="post_date_gmt"><?php _e('Post date GMT', MK_SPLUS_TD);?></option>
	<option value="post_content"><?php _e('Post content', MK_SPLUS_TD);?></option>
	<option value="post_title" selected="selected"><?php _e('Post title', MK_SPLUS_TD);?></option>
	<option value="post_excerpt"><?php _e('Post excerpt', MK_SPLUS_TD);?></option>
	<option value="post_status"><?php _e('Post status', MK_SPLUS_TD);?></option>
	<option value="comment_status"><?php _e('Comment status', MK_SPLUS_TD);?></option>
	<option value="ping_status"><?php _e('Ping status', MK_SPLUS_TD);?></option>
	<option value="post_name"><?php _e('Post name', MK_SPLUS_TD);?></option>
	<option value="post_modified"><?php _e('Post modified', MK_SPLUS_TD);?></option>
	<option value="post_modified_gmt"><?php _e('Post modified GMT', MK_SPLUS_TD);?></option>
	<option value="post_content_filtered"><?php _e('Filtered post content', MK_SPLUS_TD);?></option>
	<option value="post_parent"><?php _e('Post parent', MK_SPLUS_TD);?></option>
	<option value="guid"><?php _e('GUID', MK_SPLUS_TD);?></option>
	<option value="menu_order"><?php _e('Menu order', MK_SPLUS_TD);?></option>
	<option value="post_type"><?php _e('Post type', MK_SPLUS_TD);?></option>
	<option value="post_mime_type"><?php _e('Post mime type', MK_SPLUS_TD);?></option>
	<option value="comment_count"><?php _e('Comment count', MK_SPLUS_TD);?></option>
</select></td>
</tr>
<tr>
<th scope="row"><label for="sp_post_default"><?php _e('Default', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_post_default" id="sp_post_default" value="Default" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_post_before"><?php _e('Before', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_post_before" id="sp_post_before" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_post_after"><?php _e('After', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_post_after" id="sp_post_after" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_post_post_id"><?php _e('post ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_post_post_id" id="sp_post_post_id" value="" class="regular-text" type="text"></td>
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