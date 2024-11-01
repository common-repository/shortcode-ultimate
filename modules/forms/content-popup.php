<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('content_popup');
?>
<div id="sp_lightbox_content">
<hr />
<h4><span class="dashicons <?php echo $modules['Content-Popup']['icon'] ?>"></span><?php _e('Content-Popup', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_lightbox_content_class"><?php _e('Class', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_lightbox_content_class" id="sp_lightbox_content_class" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_lightbox_content_id"><?php _e('ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_lightbox_content_id" id="sp_lightbox_content_id" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_lightbox_content_text"><?php _e('Link Popup Text', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_lightbox_content_text" id="sp_lightbox_content_text" value="Click Here" class="regular-text" type="text">
</td>
</tr>
<tr>
<th scope="row"><label for="sp_lightbox_content_text_align"><?php _e('Text Alignment', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_lightbox_content_text_align" id="sp_lightbox_content_text_align" value="" class="regular-text" >
<option value="center"><?php _e('Center', MK_SPLUS_TD);?></option>
<option value="left"><?php _e('Left', MK_SPLUS_TD);?></option>
<option value="right"><?php _e('Right', MK_SPLUS_TD);?></option>
<select></td>
</tr>
<tr>
<th scope="row"><label for="sp_lightbox_content_margin"><?php _e('Margin', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_lightbox_content_margin" id="sp_lightbox_content_margin" value="55" class="regular-text" type="number"></td>
</tr>
<tr>
<th scope="row"><label for="sp_lightbox_content_width"><?php _e('Width', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_lightbox_content_width" id="sp_lightbox_content_width" value="500" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_lightbox_content_padding"><?php _e('Padding', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_lightbox_content_padding" id="sp_lightbox_content_padding" value="40" class="regular-text" type="number"></td>
</tr>
<tr>
<th scope="row"><label for="sp_lightbox_content_background_color"><?php _e('Background Color', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_lightbox_content_background_color" id="sp_lightbox_content_background_color" value="#fff" class="regular-text color" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_lightbox_content_text_color"><?php _e('Text Color', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_lightbox_content_text_color" id="sp_lightbox_content_text_color" value="#000" class="regular-text color" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_lightbox_content_source"><?php _e('Content Source', MK_SPLUS_TD);?></label></th>
<td>
<textarea name="sp_lightbox_content_source" id="sp_lightbox_content_source" value="" class="regular-text" >Add Content</textarea>
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