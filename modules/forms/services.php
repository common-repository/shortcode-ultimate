<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('services');
?>
<div id="sp_services">
<hr />
<h4><span class="dashicons <?php echo $modules['Services']['icon'] ?>"></span><?php _e('Services', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_services_class"><?php _e('Class', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_services_class" id="sp_services_class" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_services_id"><?php _e('ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_services_id" id="sp_services_id" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_services_title"><?php _e('Title', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_services_title" id="sp_services_title" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_services_icon_type"><?php _e('Icon', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_services_icon_type" id="sp_services_icon_type" class="sp_services_icon_type regular-text"  >
<option value="select">--Select--<option>
<option value="media">Media Library<option>
<option value="icon" >Icon<option>
</select>
<input type="button" name="sp_services_img_source_media" id="sp_services_img_source_media" class="sp_services_img_source_media button" value="Add Image" style="display:none;" onclick="open_media_uploader_image();">
<input type="hidden" name="sp_services_img_val" id="sp_services_img_val" class="sp_services_img_val" value="" >
<input type="text" name="sp_services_img_source_icon" id="sp_services_img_source_icon" class="sp_services_img_source_icon icon" value="Click To Select Icon" style="display:none;">
</td>
</tr>
<tr class="sp_services_img_dta" style="display:none;">
<th></th>
<td><div class="sp_services_imageData" id="sp_services_imageData"></div></td>
</tr>
<tr>
<th scope="row"><label for="sp_services_icon_color"><?php _e('Icon Color', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_services_icon_color" id="sp_services_icon_color" value="#000" class="regular-text color" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_services_icon_size"><?php _e('Icon Size', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_services_icon_size" id="sp_services_icon_size" value="50" class="regular-text" type="number"></td>
</tr>
<tr>
<th scope="row"><label for="sp_services_content"><?php _e('Content', MK_SPLUS_TD);?></label></th>
<td>
<textarea name="sp_services_content" id="sp_services_content" value="" class="regular-text">Content</textarea>
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