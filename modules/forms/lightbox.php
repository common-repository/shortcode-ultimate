<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('lightbox');
?>
<div id="sp_lightbox">
<hr />
<h4><span class="dashicons <?php echo $modules['Lightbox']['icon'] ?>"></span><?php _e('Lightbox', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_lightbox_class"><?php _e('Class', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_lightbox_class" id="sp_lightbox_class" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_lightbox_id"><?php _e('ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_lightbox_id" id="sp_lightbox_id" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_lightbox_text"><?php _e('Link Popup Text', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_lightbox_text" id="sp_lightbox_text" value="Click Here" class="regular-text" type="text">
</td>
</tr>
<tr>
<th scope="row"><label for="sp_lightbox_type"><?php _e('Lightbox Type', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_lightbox_type" id="sp_lightbox_type" value="" class="regular-text" >
<option value="iframe"><?php _e('Iframe', MK_SPLUS_TD);?></option>
<option value="image"><?php _e('Image', MK_SPLUS_TD);?></option>
<option value="webpage"><?php _e('Webpage', MK_SPLUS_TD);?></option>
<select></td>
</tr>
<tr>
<th scope="row"><label for="sp_lightbox_height"><?php _e('Height', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_lightbox_height" id="sp_lightbox_height" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_lightbox_width"><?php _e('Width', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_lightbox_width" id="sp_lightbox_width" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_lightbox_content_source"><?php _e('Content Source', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_lightbox_content_source" id="sp_lightbox_content_source" value="" class="regular-text" type="text">
<p>Insert here URL or CSS selector. Use URL for Iframe and Image content types. Use CSS selector for Inline content type.</p>
<p>Example values:</p>
<p>https://www.youtube.com/embed/VadWkrauOF0 -YouTube video (iframe)</p>
<p>http://example.com/wp-content/uploads/image.jpg - uploaded image (image)</p>
<p>http://example.com/ - any web page (iframe)</p>
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