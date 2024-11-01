<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('dummy_text');
?>
<div id="sp_dummy">
<hr />
<h4><span class="dashicons <?php echo $modules['Dummy-Text']['icon'] ?>"></span><?php _e('Dummy Text', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_dummy_type"><?php _e('Text Type', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_dummy_type" id="sp_dummy_type" class="sp_dummy_type regular-text">
<option value="paras" selected="selected"><?php _e('Paragraphs', MK_SPLUS_TD);?></option>
<option value="words"><?php _e('Words', MK_SPLUS_TD);?></option>
<option value="bytes"><?php _e('Bytes', MK_SPLUS_TD);?></option>
</select>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_dummy_amount"><?php _e('Amount', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_dummy_amount" id="sp_dummy_amount" value="1" class="regular-text" type="number" min="1" max="100"></td>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_dummy_cache"><?php _e('Cache', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_dummy_cache" id="sp_dummy_cache" class="sp_dummy_cache regular-text">
<option value="yes" selected="selected"><?php _e('Yes', MK_SPLUS_TD);?></option>
<option value="no"><?php _e('No', MK_SPLUS_TD);?></option>
</select>
</tr>
<tr>
<th scope="row"><label for="sp_dummy_class"><?php _e('Class', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_dummy_class" id="sp_dummy_class" value="" class="regular-text" type="text"></td>
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