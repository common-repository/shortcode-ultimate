<?php if ( ! defined( 'ABSPATH' ) ) exit; 
global $modules, $bootstart;
$bootstart->load_js('quotation'); ?>
<div id="sp_quotation">
<hr />
<h4><span class="dashicons <?php echo $modules['Quotation']['icon'] ?>"></span><?php _e('Quotations', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_quotation_text"><?php _e('Text', MK_SPLUS_TD);?></label></th>
<td>
<textarea name="sp_quotation_text" id="sp_quotation_text" class="large-text code" rows="3">Add Text</textarea>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_quotation_class"><?php _e('Class', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_quotation_class" id="sp_quotation_class" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_quotation_id"><?php _e('ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_quotation_id" id="sp_quotation_id" value="" class="regular-text" type="text"></td>
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