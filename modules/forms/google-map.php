<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('google_map');
?>
<div id="sp_map">
<hr />
<h4><span class="dashicons <?php echo $modules['Google-Map']['icon'] ?>"></span><?php _e('Google Map', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_map_class"><?php _e('Class', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_map_class" id="sp_map_class" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_map_id"><?php _e('ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_map_id" id="sp_map_id" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_map_marker"><?php _e('Marker', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_map_marker" id="sp_map_marker" value="" class="regular-text" type="text">
<p><?php _e('Address for the marker. You can type it in any language', MK_SPLUS_TD);?></p>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_map_height"><?php _e('Height', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_map_height" id="sp_map_height" value="600" class="regular-text" type="number"></td>
</tr>
<tr>
<th scope="row"><label for="sp_map_width"><?php _e('Width', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_map_width" id="sp_map_width" value="600" class="regular-text" type="number"></td>
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