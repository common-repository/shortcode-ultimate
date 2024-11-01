<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('permalink');?>
<div id="sp_permalink">
<hr />
<h4><span class="dashicons <?php echo $modules['Permalink']['icon'] ?>"></span><?php _e('Permalink', MK_SPLUS);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_permalink_id"><?php _e('ID', MK_SPLUS);?></label></th>
<td>
<input name="sp_permalink_id" id="sp_permalink_id" value="" class="regular-text" type="text"><p><?php _e('Post or Page or Custom Post ID', MK_SPLUS);?></p></td>
</tr>
<tr>
<th scope="row"><label for="sp_heading_type"><?php _e('Target', MK_SPLUS);?></label></th>
<td>
<select name="sp_permalink_target" id="sp_permalink_target" class="postform regular-text">
	<option value="self" selected="selected"><?php _e('Same tab', MK_SPLUS);?></option>
    <option value="blank"><?php _e('New tab', MK_SPLUS);?></option>
</select>
<p><?php _e('Link target. blank - link will be opened in new window/tab', MK_SPLUS);?></p>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_permalink_class"><?php _e('Class', MK_SPLUS);?></label></th>
<td>
<input name="sp_permalink_class" id="sp_permalink_class" value="" class="regular-text" type="text"><p><?php _e('Extra CSS class', MK_SPLUS);?></p></td>
</tr>
<tr>
<th scope="row"><label for="sp_permalink_content"><?php _e('Content', MK_SPLUS);?></label></th>
<td>
<textarea name="sp_permalink_content" id="sp_permalink_content" class="large-text code" rows="3"></textarea>
</td>
</tr>
<tr>
<th scope="row"><label for="generated_shortcode"><?php _e('Generated Shortcode', MK_SPLUS);?></label></th>
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