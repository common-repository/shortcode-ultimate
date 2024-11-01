<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('spacer');?>
<div id="sp_spacer">
<hr />
<h4><span class="dashicons <?php echo $modules['Spacer']['icon'] ?>"></span><?php _e('Spacer', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_spacer_size"><?php _e('Height', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_spacer_size" id="sp_spacer_size" value="" class="regular-text" type="text"></td>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_spacer_class"><?php _e('Class', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_spacer_class" id="sp_spacer_class" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_spacer_id"><?php _e('ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_spacer_id" id="sp_spacer_id" value="" class="regular-text" type="text"></td>
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