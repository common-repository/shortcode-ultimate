<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('siblings');
?>
<div id="sp_siblings">
<hr />
<h4><span class="dashicons <?php echo $modules['Siblings']['icon'] ?>"></span><?php _e('Siblings', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_siblings_class"><?php _e('Class', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_siblings_class" id="sp_siblings_class" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_siblings_id"><?php _e('ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_siblings_id" id="sp_siblings_id" value="" class="regular-text" type="text"></td>
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