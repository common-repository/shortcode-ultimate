<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('guests');
?>
<div id="sp_guests">
<hr />
<h4><span class="dashicons <?php echo $modules['Guests']['icon'] ?>"></span><?php _e('Guests', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_guests_class"><?php _e('Class', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_guests_class" id="sp_guests_class" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_guests_id"><?php _e('ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_guests_id" id="sp_guests_id" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_guests_content"><?php _e('Content', MK_SPLUS_TD);?></label></th>
<td>
<textarea name="sp_guests_content" id="sp_guests_content"  class="regular-text">Content</textarea>
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