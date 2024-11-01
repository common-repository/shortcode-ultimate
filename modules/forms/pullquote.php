<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('pullquote');
?>
<div id="sp_pullquote">
<hr />
<h4><span class="dashicons <?php echo $modules['Pullquote']['icon'] ?>"></span><?php _e('Pullquote', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_pullquote_class"><?php _e('Class', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_pullquote_class" id="sp_pullquote_class" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_pullquote_id"><?php _e('ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_pullquote_id" id="sp_pullquote_id" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_pullquote_align"><?php _e('Align', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_pullquote_align" id="sp_pullquote_align" class="sp_pullquote_align regular-text">
	<option value="left" selected="selected">Left</option>
	<option value="right">Right</option>
</select>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_pullquote_content"><?php _e('Content', MK_SPLUS_TD);?></label></th>
<td>
<textarea name="sp_pullquote_content" id="sp_pullquote_content" value="" class="regular-text">Content</textarea>
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