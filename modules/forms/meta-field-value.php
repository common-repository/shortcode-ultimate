<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('meta_field');?>
<div id="sp_paragraph">
<hr />
<h4><span class="dashicons <?php echo $modules['Meta-Field-Value']['icon'] ?>"></span><?php _e('Meta Field Value', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_meta_key"><?php _e('Meta Key', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_meta_key" id="sp_meta_key" value="" class="regular-text" type="text"><p><?php _e('Enter Any Post Meta Key.', MK_SPLUS_TD);?></p></td>
</tr>
<tr>
<th scope="row"><label for="sp_post_id"><?php _e('Post ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_post_id" id="sp_post_id" value="" class="regular-text" type="text"><p><?php _e('Enter Any Post ID.', MK_SPLUS_TD);?></p></td>
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