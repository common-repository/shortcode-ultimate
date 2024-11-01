<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('dummy_image');
?>
<div id="sp_dummy_image">
<hr />
<h4><span class="dashicons <?php echo $modules['Dummy-Image']['icon'] ?>"></span><?php _e('Dummy-Image', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_dummy_image_class"><?php _e('Class', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_dummy_image_class" id="sp_dummy_image_class" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_dummy_image_id"><?php _e('ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_dummy_image_id" id="sp_dummy_image_id" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_dummy_image_height"><?php _e('Height', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_dummy_image_height" id="sp_dummy_image_height" value="200" class="regular-text" type="number"></td>
</tr>
<tr>
<th scope="row"><label for="sp_dummy_image_theme"><?php _e('Theme', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_dummy_image_theme" id="sp_dummy_image_theme" value="200" class="regular-text" >
<option value="any" selected="selected"><?php _e('Any', MK_SPLUS_TD);?></option>
<option value="abstract"><?php _e('Abstract', MK_SPLUS_TD);?></option>
<option value="animals"><?php _e('Animals', MK_SPLUS_TD);?></option>
<option value="business"><?php _e('Business', MK_SPLUS_TD);?></option>
<option value="cats"><?php _e('Cats', MK_SPLUS_TD);?></option>
<option value="city"><?php _e('City', MK_SPLUS_TD);?></option>
<option value="food"><?php _e('Food', MK_SPLUS_TD);?></option>
<option value="nightlife"><?php _e('Night life', MK_SPLUS_TD);?></option>
<option value="fashion"><?php _e('Fashion', MK_SPLUS_TD);?></option>
<option value="people"><?php _e('People', MK_SPLUS_TD);?></option>
<option value="nature"><?php _e('Nature', MK_SPLUS_TD);?></option>
<option value="sports"><?php _e('Sports', MK_SPLUS_TD);?></option>
<option value="technics"><?php _e('Technics', MK_SPLUS_TD);?></option>
<option value="transport"><?php _e('Transport', MK_SPLUS_TD);?></option>
</select></td>
</tr>
<tr>
<th scope="row"><label for="sp_dummy_image_width"><?php _e('Width', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_dummy_image_width" id="sp_dummy_image_width" value="200" class="regular-text" type="number"></td>
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