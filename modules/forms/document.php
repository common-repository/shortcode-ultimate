<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('document');
?>
<div id="sp_document">
<hr />
<h4><span class="dashicons <?php echo $modules['Document']['icon'] ?>"></span><?php _e('document', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_document_url"><?php _e('Url', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_document_url" id="sp_document_url" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_document_width"><?php _e('Width', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_document_width" id="sp_document_width" value="600" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_document_height"><?php _e('Height', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_document_height" id="sp_document_height" value="400" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_document_responsive"><?php _e('Responsive', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_document_responsive" id="sp_document_responsive" value="" class="regular-text " >
<option value="yes"><?php _e('Yes', MK_SPLUS_TD);?></option>
<option value="no"><?php _e('No', MK_SPLUS_TD);?></option>
</select></td>
</tr>
<tr>
<th scope="row"><label for="sp_document_class"><?php _e('Class', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_document_class" id="sp_document_class" value="" class="regular-text" type="text"></td>
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