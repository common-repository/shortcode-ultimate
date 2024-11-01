<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('gallery');
?>
<div id="sp_gallery">
<hr />
<h4><span class="dashicons <?php echo $modules['Gallery']['icon'] ?>"></span><?php _e('Gallery', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_gallery_class"><?php _e('Class', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_gallery_class" id="sp_gallery_class" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_gallery_id"><?php _e('ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_gallery_id" id="sp_gallery_id" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_gallery_source"><?php _e('Source', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_gallery_source" id="sp_gallery_source" value="" class="regular-text ">
<option value=""><?php _e('Select', MK_SPLUS_TD);?></option>
<option value="media"><?php _e('Media library', MK_SPLUS_TD);?></option>
<option value="recent_post"><?php _e('Recent posts', MK_SPLUS_TD);?></option>
</select></td>
<td><input type="button" name="sp_gallery_img_source" id="sp_gallery_img_source" class="sp_gallery_img_source button" value="Add Images" style="display:none;" onclick="open_media_uploader_image();">
<input type="hidden" name="sp_gallery_img_val" id="sp_gallery_img_val" class="sp_gallery_img_val" value="" >
</td>
</tr>
<tr class="gllry_dta" style="display:none;">
<th></th>
<td><div class="galleryImageData" id="galleryImageData"></td>
</tr>
<tr>
<th scope="row"><label for="sp_gallery_width"><?php _e('Width', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_gallery_width" id="sp_gallery_width" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_gallery_height"><?php _e('Height', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_gallery_height" id="sp_gallery_height" value="" class="regular-text" type="text"></td>
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