<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('qr');
?>
<div id="sp_qr">
<hr />
<h4><span class="dashicons <?php echo $modules['Qr']['icon'] ?>"></span><?php _e('QR code', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_qr_class"><?php _e('Class', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_qr_class" id="sp_qr_class" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_qr_id"><?php _e('ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_qr_id" id="sp_qr_id" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_qr_title"><?php _e('Title', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_qr_title" id="sp_qr_title" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_qr_data"><?php _e('QR Data', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_qr_data" id="sp_qr_data" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_qr_link"><?php _e('Link', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_qr_link" id="sp_qr_link" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_qr_size"><?php _e('Size', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_qr_size" id="sp_qr_size" value="200" class="regular-text" type="number"></td>
</tr>
<tr>
<th scope="row"><label for="sp_qr_align"><?php _e('Align', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_qr_align" id="sp_qr_align" value="" class="regular-text">
<option value="none" selected="selected">None</option>
<option value="left">Left</option>
<option value="center">Center</option>
<option value="right">Right</option>
</select></td>
</tr>
<tr>
<th scope="row"><label for="sp_qr_link_target"><?php _e('Link Target', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_qr_link_target" id="sp_qr_link_target" value="" class="regular-text">
<option value="self">Open link in same window/tab</option>
<option value="blank" selected="selected">Open link in new window/tab</option>
</select></td>
</tr>
<tr>
<th scope="row"><label for="sp_qr_primary_color"><?php _e('Primary Color', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_qr_primary_color" id="sp_qr_primary_color" value="#000" class="regular-text color" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_qr_background_color"><?php _e('Background Color', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_qr_background_color" id="sp_qr_background_color" value="#fff" class="regular-text color" type="text"></td>
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