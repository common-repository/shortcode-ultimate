<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('tabs');?>
<div id="sp_tabs">
<hr />
<h4><span class="dashicons <?php echo $modules['Tabs']['icon'] ?>"></span><?php _e('Tabs', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_tabs_class"><?php _e('Class', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_tabs_class" id="sp_tabs_class" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_tabs_id"><?php _e('ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_tabs_id" id="sp_tabs_id" value="" class="regular-text" type="text"></td>
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