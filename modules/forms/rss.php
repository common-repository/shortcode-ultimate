<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('rss');
?>
<div id="sp_rss">
<hr />
<h4><span class="dashicons <?php echo $modules['Rss']['icon'] ?>"></span><?php _e('Rss', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_rss_class"><?php _e('Class', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_rss_class" id="sp_rss_class" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_rss_id"><?php _e('ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_rss_id" id="sp_rss_id" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_rss_url"><?php _e('Url', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_rss_url" id="sp_rss_url" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_rss_limit"><?php _e('Limit', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_rss_limit" id="sp_rss_limit" value="3" class="regular-text" type="number"></td>
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