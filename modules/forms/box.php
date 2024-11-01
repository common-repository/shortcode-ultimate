<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('box');
?>
<div id="sp_box">
<hr />
<h4><span class="dashicons <?php echo $modules['Box']['icon'] ?>"></span><?php _e('Box', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_box_class"><?php _e('Class', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_box_class" id="sp_box_class" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_box_id"><?php _e('ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_box_id" id="sp_box_id" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_box_title"><?php _e('Box Title', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_box_title" id="sp_box_title" value="Box Title" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_box_title_background_color"><?php _e('Box Title Background Color', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_box_title_background_color" id="sp_box_title_background_color" value="#060" class="regular-text color" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_box_title_text_color"><?php _e('Box Title Text Color', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_box_title_text_color" id="sp_box_title_text_color" value="#fff" class="regular-text color" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_box_content"><?php _e('Box Content', MK_SPLUS_TD);?></label></th>
<td>
<textarea name="sp_box_content" id="sp_box_content" value="" class="regular-text">Box Content</textarea>
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