<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules , $bootstart;
$bootstart->load_js('button');
?>
<div id="sp_button">
<hr />
<h4><span class="dashicons <?php echo $modules['Button']['icon'] ?>"></span><?php _e('Button', MK_SPLUS);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_button_text"><?php _e('Button Text', MK_SPLUS);?></label></th>
<td>
<textarea name="sp_button_text" id="sp_button_text" class="large-text code" rows="3"> Click Here</textarea>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_button_background"><?php _e('Background Color', MK_SPLUS);?></label></th>
<td>
<input name="sp_button_background" id="sp_button_background" value="#2D89EF" class="regular-text color" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_button_color"><?php _e('Color', MK_SPLUS);?></label></th>
<td>
<input name="sp_button_color" id="sp_button_color" value="#FFFFFF" class="color regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_button_size"><?php _e('Size', MK_SPLUS);?></label></th>
<td>
<input name="sp_button_size" id="sp_button_size" value="3" class="regular-text" type="number" min="3" max="20"></td>
</tr>
<tr>
<th scope="row"><label for="sp_button_class"><?php _e('Class', MK_SPLUS);?></label></th>
<td>
<input name="sp_button_class" id="sp_button_class" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_button_link"><?php _e('Link', MK_SPLUS);?></label></th>
<td>
<input name="sp_button_link" id="sp_button_link" value="#" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_button_target"><?php _e('Target', MK_SPLUS);?></label></th>
<td>
<select name="sp_button_target" id="sp_button_target" class="postform">
<option value="_blank" selected="selected"><?php _e('Blank', MK_SPLUS_TD);?></option> 
<option value="_self"><?php _e('Self', MK_SPLUS_TD);?></option> 
</select></tr>
<tr>
<th scope="row"><label for="sp_button_onclick"><?php _e('Onclick', MK_SPLUS);?></label></th>
<td>
<input name="sp_button_onclick" id="sp_button_onclick" value="" class="regular-text" type="text"><p><?php _e('Any Javascript function. as any_custom_function();', MK_SPLUS);?></p></td>
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