<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('divider');
?>
<div id="sp_divider">
<hr />
<h4><span class="dashicons <?php echo $modules['Divider']['icon'] ?>"></span><?php _e('Divider', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_divider_class"><?php _e('Class', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_divider_class" id="sp_divider_class" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_divider_style"><?php _e('ID', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_divider_style" id="sp_divider_style" value="" class="regular-text" >
<option value="default" selected="selected"><?php _e('Default', MK_SPLUS_TD);?></option>
<option value="dotted"><?php _e('Dotted', MK_SPLUS_TD);?></option>
<option value="dashed"><?php _e('Dashed', MK_SPLUS_TD);?></option>
<option value="double"><?php _e('Double', MK_SPLUS_TD);?></option>
</select>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_divider_background_color"><?php _e('Divider Color', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_divider_background_color" id="sp_divider_background_color" value="#000" class="regular-text color" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_divider_size"><?php _e('Size', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_divider_size" id="sp_divider_size" value="3" class="regular-text" type="number"></td>
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