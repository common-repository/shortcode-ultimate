<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $wpdb, $bootstart;
$bootstart->load_js('posts');
$wpb_all_query = $wpdb->get_results("select * from ".$wpdb->posts." where post_status = 'publish'");
?>
<div id="sp_posts">
<hr />
<h4><span class="dashicons <?php echo $modules['Posts']['icon'] ?>"></span><?php _e('Posts', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_post_ids"><?php _e('Select Posts', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_post_ids[]" id="sp_post_ids" multiple>
<?php foreach($wpb_all_query as $alltypes) {?>
<option value="<?php echo $alltypes->ID;?>"> <?php echo $alltypes->post_title .' ('.$alltypes->post_type.') ';?></option>
<?php } ?>
</select> 
</td>
</tr>
<tr>
<th scope="row"><label for="sp_posts_class"><?php _e('Class', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_posts_class" id="sp_posts_class" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_posts_id"><?php _e('ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_posts_id" id="sp_posts_id" value="" class="regular-text" type="text"></td>
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