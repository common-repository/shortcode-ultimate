<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('label');
?>
<div id="sp_label">
<hr />
<h4><span class="dashicons <?php echo $modules['Label']['icon'] ?>"></span><?php _e('Label', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_label_class"><?php _e('Class', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_label_class" id="sp_label_class" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_label_id"><?php _e('ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_label_id" id="sp_label_id" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_label_type"><?php _e('Label Type', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_label_type" id="sp_label_type" value="" class="regular-text">
<option value="default"><?php _e('Default', MK_SPLUS_TD);?></option>
<option value="success"><?php _e('Success', MK_SPLUS_TD);?></option>
<option value="warning"><?php _e('Warning', MK_SPLUS_TD);?></option>
<option value="important"><?php _e('Important', MK_SPLUS_TD);?></option>
<option value="black"><?php _e('Black', MK_SPLUS_TD);?></option>
<option value="info"><?php _e('Info', MK_SPLUS_TD);?></option>
</select>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_label_content"><?php _e('Label Content', MK_SPLUS_TD);?></label></th>
<td>
<textarea name="sp_label_content" id="sp_label_content" value="" class="regular-text">Add Content</textarea>
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