<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('sub_pages');
?>
<div id="sp_sub_page">
<hr />
<h4><span class="dashicons <?php echo $modules['Sub-Pages']['icon'] ?>"></span><?php _e('Sub Pages', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_sub_page_class"><?php _e('Class', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_sub_page_class" id="sp_sub_page_class" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_sub_page_id"><?php _e('ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_sub_page_id" id="sp_sub_page_id" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_sub_page_parent_post_id"><?php _e('Parent Post ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_sub_page_parent_post_id" id="sp_sub_page_parent_post_id" value="" class="regular-text" type="text"></td>
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