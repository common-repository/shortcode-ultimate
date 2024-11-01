<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('accordion');?>
<div id="sp_accordian">
<hr />
<h4><span class="dashicons <?php echo $modules['Accordion']['icon'] ?>"></span><?php _e('Accordion', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_accordian_class"><?php _e('Class', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_accordian_class" id="sp_accordian_class" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_accordian_id"><?php _e('ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_accordian_id" id="sp_accordian_id" value="" class="regular-text" type="text"></td>
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