<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('note');
?>
<div id="sp_box">
<hr />
<h4><span class="dashicons <?php echo $modules['Note']['icon'] ?>"></span><?php _e('Note', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_note_class"><?php _e('Class', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_note_class" id="sp_note_class" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_note_id"><?php _e('ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_box_id" id="sp_note_id" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_note_background_color"><?php _e('Note Background Color', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_note_background_color" id="sp_note_background_color" value="#F96" class="regular-text color" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_note_text_color"><?php _e('Note Text Color', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_note_text_color" id="sp_note_text_color" value="#FFF" class="regular-text color" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_note_content"><?php _e('Note Content', MK_SPLUS_TD);?></label></th>
<td>
<textarea name="sp_note_content" id="sp_note_content" value="" class="regular-text">Add Content</textarea>
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