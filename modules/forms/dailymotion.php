<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('dailymotion');
?>
<div id="sp_dailymotion">
<hr />
<h4><span class="dashicons <?php echo $modules['Dailymotion']['icon'] ?>"></span><?php _e('Dailymotion', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_dailymotion_video_id"><?php _e('Video ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_dailymotion_video_id" id="sp_dailymotion_video_id" value="" class="regular-text" type="text">
<p class="tagline-description"><?php _e('Dailymotion Video ID e.g x5gmqt7 , Demo <a href = "http://www.dailymotion.com/video/x5gmqt7" target="_blank">dailymotion</a>', MK_SPLUS_TD);?></p>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_dailymotion_video_width"><?php _e('Width', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_dailymotion_video_width" id="sp_dailymotion_video_width" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_dailymotion_video_height"><?php _e('Height', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_dailymotion_video_height" id="sp_dailymotion_video_height" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_dailymotion_autoplay"><?php _e('Autoplay', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_dailymotion_autoplay" id="sp_dailymotion_autoplay" value="" class="regular-text">
<option value="1"><?php _e('Yes', MK_SPLUS_TD);?></option>
<option value="0"><?php _e('No', MK_SPLUS_TD);?></option>
</select>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_dailymotion_fullscreen"><?php _e('Allow Fullscreen', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_dailymotion_fullscreen" id="sp_dailymotion_fullscreen" value="" class="regular-text">
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