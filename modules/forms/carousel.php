<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('carousel');
?>
<div id="sp_carousel">
<hr />
<h4><span class="dashicons <?php echo $modules['Carousel']['icon'] ?>"></span><?php _e('Carousel', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_carousel_class"><?php _e('Class', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_carousel_class" id="sp_carousel_class" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_carousel_id"><?php _e('ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_carousel_id" id="sp_carousel_id" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_carousel_source"><?php _e('Source', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_carousel_source" id="sp_carousel_source" value="" class="regular-text ">
<option value=""><?php _e('Select', MK_SPLUS_TD);?></option>
<option value="media"><?php _e('Media library', MK_SPLUS_TD);?></option>
<option value="recent_post"><?php _e('Recent posts', MK_SPLUS_TD);?></option>
</select></td>
<td><input type="button" name="sp_carousel_img_source" id="sp_carousel_img_source" class="sp_carousel_img_source button" value="Add Images" style="display:none;" onclick="open_media_uploader_image();">
<input type="hidden" name="sp_carousel_img_val" id="sp_carousel_img_val" class="sp_carousel_img_val" value="" >
</td>
</tr>
<tr class="img_dta" style="display:none;">
<th></th>
<td><div class="imageData" id="imageData"></div></td>
</tr>
<tr>
<th scope="row"><label for="sp_carousel_animation"><?php _e('Animation', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_carousel_animation" id="sp_carousel_animation" value="" class="regular-text ">
<option value="slide"><?php _e('Slide', MK_SPLUS_TD);?></option>
<option value="fade"><?php _e('Fade', MK_SPLUS_TD);?></option>
</select></td>
</tr>
<tr>
<th scope="row"><label for="sp_carousel_animation_loop"><?php _e('Animation Loop', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_carousel_animation_loop" id="sp_carousel_animation_loop" value="" class="regular-text ">
<option value="true"><?php _e('Yes', MK_SPLUS_TD);?></option>
<option value="false"><?php _e('No', MK_SPLUS_TD);?></option>
</select>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_carousel_width"><?php _e('Item Width', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_carousel_width" id="sp_carousel_width" value="210" class="regular-text" type="number"></td>
</tr>
<tr>
<th scope="row"><label for="sp_carousel_margin"><?php _e('Item Margin', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_carousel_margin" id="sp_carousel_margin" value="5" class="regular-text" type="number"></td>
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