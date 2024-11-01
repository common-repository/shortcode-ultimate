<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('highlighted_text');
?>
<div id="sp_highlighted_text">
<hr />
<h4><span class="dashicons <?php echo $modules['Highlighted-Text']['icon'] ?>"></span><?php _e('Highlighted-Text', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_highlighted_text_class"><?php _e('Class', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_highlighted_text_class" id="sp_highlighted_text_class" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_highlighted_text_id"><?php _e('ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_highlighted_text_id" id="sp_highlighted_text_id" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_highlighted_text_bgcolor"><?php _e('Background Color', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_highlighted_text_bgcolor" id="sp_highlighted_text_bgcolor" value="#424F5A" class="regular-text color" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_highlighted_text_text_color"><?php _e('Text Color', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_highlighted_text_text_color" id="sp_highlighted_text_text_color" value="#FF9500" class="regular-text color" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_highlighted_text_content"><?php _e('Content', MK_SPLUS_TD);?></label></th>
<td>
<textarea name="sp_highlighted_text_content" id="sp_highlighted_text_content" class="regular-text" >Add Content</textarea>
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