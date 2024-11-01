<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('tooltip');?>
<div id="sp_tooltip">
<hr />
<h4><span class="dashicons <?php echo $modules['Tooltip']['icon'] ?>"></span><?php _e('Tooltip', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_tooltip_text"><?php _e('Text', MK_SPLUS_TD);?></label></th>
<td>
<textarea name="sp_tooltip_text" id="sp_tooltip_text" class="large-text code" rows="3">Text</textarea>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_tooltip_display_text"><?php _e('Display Text on Hover', MK_SPLUS_TD);?></label></th>
<td>
<textarea name="sp_tooltip_display_text" id="sp_tooltip_display_text" class="large-text code" rows="3">Tooltip</textarea>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_tooltip_class"><?php _e('Class', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_tooltip_class" id="sp_tooltip_class" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_tooltip_id"><?php _e('ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_tooltip_id" id="sp_tooltip_id" value="" class="regular-text" type="text"></td>
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