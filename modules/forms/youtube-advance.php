<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('you_tube_advance');
?>
<div id="sp_you_tube_advance">
<hr />
<h4><span class="dashicons <?php echo $modules['You Tube']['icon'] ?>"></span><?php _e('You Tube', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_you_tube_advance_video_id"><?php _e('Playlist', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_you_tube_advance_video_id" id="sp_you_tube_advance_video_id" value="" class="regular-text" type="text">
<p class="tagline-description"><?php _e('Add comma seperated value of Youtube Video ID e.g UkKv854vBgc,kMRRIMmICmM ', MK_SPLUS_TD);?></p>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_you_tube_advance_video_width"><?php _e('Width', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_you_tube_advance_video_width" id="sp_you_tube_advance_video_width" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_you_tube_advance_video_height"><?php _e('Height', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_you_tube_advance_video_height" id="sp_you_tube_advance_video_height" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_you_tube_advance_autoplay"><?php _e('Autoplay', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_you_tube_advance_autoplay" id="sp_you_tube_advance_autoplay" value="" class="regular-text">
<option value="1"><?php _e('Yes', MK_SPLUS_TD);?></option>
<option value="0"><?php _e('No', MK_SPLUS_TD);?></option>
</select>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_you_tube_advance_fullscreen"><?php _e('Allow Fullscreen', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_you_tube_advance_fullscreen" id="sp_you_tube_advance_fullscreen" value="" class="regular-text">
<option value="1"><?php _e('Yes', MK_SPLUS_TD);?></option>
<option value="0"><?php _e('No', MK_SPLUS_TD);?></option>
</select>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_you_tube_advance_controls"><?php _e('Controls', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_you_tube_advance_controls" id="sp_you_tube_advance_controls" value="" class="regular-text">
<option value="0"><?php _e('Hide controls', MK_SPLUS_TD);?></option>
<option value="1" selected="selected"><?php _e('Show controls', MK_SPLUS_TD);?></option>
<option value="2"><?php _e('Show controls when playback is started', MK_SPLUS_TD);?></option>
</select>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_you_tube_advance_autohide"><?php _e('Autohide', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_you_tube_advance_autohide" id="sp_you_tube_advance_autohide" value="" class="regular-text">
<option value="0"><?php _e('Do not hide controls', MK_SPLUS_TD);?></option>
<option value="1"><?php _e('Hide all controls on mouse out', MK_SPLUS_TD);?></option>
<option value="2" selected="selected"><?php _e('Hide progress bar on mouse out', MK_SPLUS_TD);?></option>
</select>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_you_tube_advance_loop"><?php _e('Loop', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_you_tube_advance_loop" id="sp_you_tube_advance_loop" value="" class="regular-text">
<option value="1"><?php _e('Yes', MK_SPLUS_TD);?></option>
<option value="0"><?php _e('No', MK_SPLUS_TD);?></option>
</select>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_you_tube_advance_related_videos"><?php _e('Related Videos', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_you_tube_advance_related_videos" id="sp_you_tube_advance_related_videos" value="" class="regular-text">
<option value="1"><?php _e('Yes', MK_SPLUS_TD);?></option>
<option value="0"><?php _e('No', MK_SPLUS_TD);?></option>
</select>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_you_tube_advance_modestbranding"><?php _e('Modestbranding', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_you_tube_advance_modestbranding" id="sp_you_tube_advance_modestbranding" value="" class="regular-text">
<option value="1"><?php _e('Yes', MK_SPLUS_TD);?></option>
<option value="0"><?php _e('No', MK_SPLUS_TD);?></option>
</select>
<p>This parameter lets you use a YouTube player that does not show a YouTube logo. Set the parameter value to YES to prevent the YouTube logo from displaying in the control bar.</p>
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