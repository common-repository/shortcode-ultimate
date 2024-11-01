<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('frame');
?>
<div id="sp_frame">
<hr />
<h4><span class="dashicons <?php echo $modules['Frame']['icon'] ?>"></span><?php _e('Frame', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_frame_class"><?php _e('Class', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_frame_class" id="sp_frame_class" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_frame_id"><?php _e('ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_frame_id" id="sp_frame_id" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_frame_content"><?php _e('Frame Content', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_frame_content" id="sp_frame_content" value="" class="regular-text">
<option value=""><?php _e('--Select--', MK_SPLUS_TD);?></option>
<option value="media"><?php _e('Media', MK_SPLUS_TD);?></option>
<option value="image_url"><?php _e('Add Image url', MK_SPLUS_TD);?></option>
</select>
</td>
<td><input type="button" name="sp_frame_img_source" id="sp_frame_img_source" class="sp_frame_img_source button" value="Add Images" style="display:none;" onclick="open_media_uploader_image();">
<input type="hidden" name="sp_frame_img_val" id="sp_frame_img_val" class="sp_frame_img_val" value="" >
<textarea name="sp_frame_img_content" id="sp_frame_img_content" class="sp_frame_img_content" style="display:none;"></textarea>
</td>
</tr>
<tr class="frame_img_dta" style="display:none;">
<th></th>
<td><div class="frameimageData" id="frameimageData"></div></td>
</tr>
<tr>
<th scope="row"><label for="sp_frame_text_align"><?php _e('Text Alignment', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_frame_text_align" id="sp_frame_text_align" value="" class="regular-text" >
<option value="center"><?php _e('Center', MK_SPLUS_TD);?></option>
<option value="left"><?php _e('Left', MK_SPLUS_TD);?></option>
<option value="right"><?php _e('Right', MK_SPLUS_TD);?></option>
<select></td>
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