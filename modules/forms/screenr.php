<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('screenr');
?>
<div id="sp_screenr">
<hr />
<h4><span class="dashicons <?php echo $modules['Screenr']['icon'] ?>"></span><?php _e('Screenr', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_screenr_video_id"><?php _e('Video ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_screenr_video_id" id="sp_screenr_video_id" value="" class="regular-text" type="text">
<p class="tagline-description"><?php _e('Screenr Video ID e.g mCj8 , Demo <a href = "http://www.screenr.com/embed/mCj8" target="_blank">screenr</a>', MK_SPLUS_TD);?></p>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_screenr_video_width"><?php _e('Width', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_screenr_video_width" id="sp_screenr_video_width" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_screenr_video_height"><?php _e('Height', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_screenr_video_height" id="sp_screenr_video_height" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_screenr_fullscreen"><?php _e('Allow Fullscreen', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_screenr_fullscreen" id="sp_screenr_fullscreen" value="" class="regular-text">
<option value="1"><?php _e('Yes', MK_SPLUS_TD);?></option>
<option value="0"><?php _e('No', MK_SPLUS_TD);?></option>
</select>
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