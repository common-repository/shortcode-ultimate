<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('spoiler');
?>
<div id="sp_spoiler">
<hr />
<h4><span class="dashicons <?php echo $modules['spoiler']['icon'] ?>"></span><?php _e('Spoiler', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_spoiler_class"><?php _e('Class', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_spoiler_class" id="sp_spoiler_class" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_spoiler_id"><?php _e('ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_spoiler_id" id="sp_spoiler_id" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_spoiler_title"><?php _e('Title', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_spoiler_title" id="sp_spoiler_title" value="Add Title" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_spoiler_content"><?php _e('Content', MK_SPLUS_TD);?></label></th>
<td>
<textarea name="sp_spoiler_content" id="sp_spoiler_content" value="" class="regular-text">Add Content</textarea>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_spoiler_open"><?php _e('Open', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_spoiler_open" id="sp_spoiler_open" value="" class="regular-text">
<option value="no" selected="selected"><?php _e('No', MK_SPLUS_TD);?><option>
<option value="yes"><?php _e('Yes', MK_SPLUS_TD);?><option>
</select>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_spoiler_style"><?php _e('Style', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_spoiler_style" id="sp_spoiler_style" value="" class="regular-text">
<option value="default" selected="selected"><?php _e('Default', MK_SPLUS_TD);?></option>
<option value="fancy"><?php _e('Fancy', MK_SPLUS_TD);?></option>
<option value="simple"><?php _e('Simple', MK_SPLUS_TD);?></option>
</select>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_spoiler_icon"><?php _e('Icon', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_spoiler_icon" id="sp_spoiler_icon" value="" class="regular-text">
<option value="plus" selected="selected"><?php _e('Plus', MK_SPLUS_TD);?></option>
<option value="plus-circle"><?php _e('Plus circle', MK_SPLUS_TD);?></option>
<option value="plus-square-1"><?php _e('Plus square 1', MK_SPLUS_TD);?></option>
<option value="plus-square-2"><?php _e('Plus square 2', MK_SPLUS_TD);?></option>
<option value="arrow"><?php _e('Arrow', MK_SPLUS_TD);?></option>
<option value="arrow-circle-1"><?php _e('Arrow circle 1', MK_SPLUS_TD);?></option>
<option value="arrow-circle-2"><?php _e('Arrow circle 2', MK_SPLUS_TD);?></option>
<option value="chevron"><?php _e('Chevron', MK_SPLUS_TD);?></option>
<option value="chevron-circle"><?php _e('Chevron circle', MK_SPLUS_TD);?></option>
<option value="caret"><?php _e('Caret', MK_SPLUS_TD);?></option>
<option value="caret-square"><?php _e('Caret square', MK_SPLUS_TD);?></option>
<option value="folder-1"><?php _e('Folder 1', MK_SPLUS_TD);?></option>
<option value="folder-2"><?php _e('Folder 2', MK_SPLUS_TD);?></option>
</select>
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