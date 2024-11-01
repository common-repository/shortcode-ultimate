<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('dropcap');
?>
<div id="sp_dropcap">
<hr />
<h4><span class="dashicons <?php echo $modules['Dropcap']['icon'] ?>"></span><?php _e('Dropcap', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_dropcap_class"><?php _e('Class', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_dropcap_class" id="sp_dropcap_class" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_dropcap_id"><?php _e('ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_dropcap_id" id="sp_dropcap_id" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_dropcap_style"><?php _e('Style', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_dropcap_style" id="sp_dropcap_style" value="" class="regular-text">
	<option value="default" selected="selected"><?php _e('Default', MK_SPLUS_TD);?></option>
	<option value="flat"><?php _e('Flat', MK_SPLUS_TD);?></option>
	<option value="light"><?php _e('Light', MK_SPLUS_TD);?></option>
	<option value="simple"><?php _e('Simple', MK_SPLUS_TD);?></option>
</select>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_dropcap_size"><?php _e('Size', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_dropcap_size" id="sp_dropcap_size" value="3" class="regular-text color" type="number"></td>
</tr>
<tr>
<th scope="row"><label for="sp_dropcap_content"><?php _e('Content', MK_SPLUS_TD);?></label></th>
<td>
<textarea name="sp_dropcap_content" id="sp_dropcap_content" value="" class="regular-text">Add Content</textarea>
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