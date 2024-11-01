<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('expand');
?>
<div id="sp_expand">
<hr />
<h4><span class="dashicons <?php echo $modules['Expand']['icon'] ?>"></span><?php _e('Expand', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_expand_class"><?php _e('Class', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_expand_class" id="sp_expand_class" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_expand_id"><?php _e('ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_expand_id" id="sp_expand_id" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_expand_more_text"><?php _e('More Text', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_expand_more_text" id="sp_expand_more_text" value="Show more" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_expand_less_text"><?php _e('Less Text', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_expand_less_text" id="sp_expand_less_text" value="Show less" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_expand_hide_less_link"><?php _e('Hide Less Link', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_expand_hide_less_link" id="sp_expand_hide_less_link" value="" class="regular-text" >
<option value="no"><?php _e('No', MK_SPLUS_TD);?></option>
<option value="yes"><?php _e('Yes', MK_SPLUS_TD);?></option>
</select></td>
</tr>
<tr>
<th scope="row"><label for="sp_expand_height"><?php _e('Height', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_expand_height" id="sp_expand_height" value="50" class="regular-text" type="number"></td>
</tr>
<tr>
<th scope="row"><label for="sp_expand_link_color"><?php _e('Link Color', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_expand_link_color" id="sp_expand_link_color" value="#0088FF" class="regular-text color" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_expand_text_color"><?php _e('Text Color', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_expand_text_color" id="sp_expand_text_color" value="#333333" class="regular-text color" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_expand_link_style"><?php _e('Link Style', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_expand_link_style" id="sp_expand_link_style" value="" class="regular-text">
<option value="default" selected="selected"><?php _e('Default ', MK_SPLUS_TD);?></option>
<option value="underlined"><?php _e('Underlined ', MK_SPLUS_TD);?></option>
<option value="dotted"><?php _e('Dotted ', MK_SPLUS_TD);?></option>
<option value="dashed"><?php _e('Dashed ', MK_SPLUS_TD);?></option>
<option value="button"><?php _e('Button ', MK_SPLUS_TD);?></option>
</select></td>
</tr>
<tr>
<th scope="row"><label for="sp_expand_link_align"><?php _e('Link Style', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_expand_link_align" id="sp_expand_link_align" value="" class="regular-text ">
<option value="left" selected="selected"><?php _e('Left ', MK_SPLUS_TD);?></option>
<option value="center"><?php _e('Center ', MK_SPLUS_TD);?></option>
<option value="right"><?php _e('Right ', MK_SPLUS_TD);?></option>
</select></td>
</tr>
<tr>
<th scope="row"><label for="sp_expand_content"><?php _e('Expand Content', MK_SPLUS_TD);?></label></th>
<td>
<textarea name="sp_expand_content" id="sp_expand_content" value="" class="regular-text">Add Content</textarea>
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