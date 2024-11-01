<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('headings');
?>
<div id="sp_headings">
<hr />
<h4><span class="dashicons <?php echo $modules['Headings']['icon'] ?>"></span><?php _e('Headings', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_heading_type"><?php _e('Select Heading Type', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_heading_type" id="sp_heading_type" class="postform regular-text">
<?php for($hd = 1; $hd <= 4 ; $hd++) { ?>
	<option class="level-<?php echo $hd;?>" value="<?php echo 'h'.$hd ?>" selected="selected"><?php echo 'h'.$hd ?></option>
<?php } ?>    
</select>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_heading_title"><?php _e('Title', MK_SPLUS_TD);?></label></th>
<td>
<textarea name="sp_heading_title" id="sp_heading_title" class="large-text code" rows="3"></textarea>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_heading_class"><?php _e('Class', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_heading_class" id="sp_heading_class" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_heading_id"><?php _e('ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_heading_id" id="sp_heading_id" value="" class="regular-text" type="text"></td>
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