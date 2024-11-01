<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('audio');?>
<div id="sp_audio">
<hr />
<h4><span class="dashicons <?php echo $modules['Audio']['icon'] ?>"></span><?php _e('Audio', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_audio_src"><?php _e('Source', MK_SPLUS_TD);?></label></th>
<td>
<input type="text" name="sp_audio_src" id="sp_audio_src" value="" placeholder="Paste Audio Source or Click to Upload" class="regular-text"/><input type="button" name="sp_audio_source" id="sp_audio_source" class="button" value="Add Audio Source" onclick="open_audio_uploader_image();">
<p><?php _e('The source of your audio file. If not included it will auto-populate with the first audio file attached to the post. You can use the following options to define specific filetypes, allowing for graceful fallbacks:
    "mp3", "m4a", "ogg", "wav", "wma"', MK_SPLUS_TD);?></p>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_audio_loop"><?php _e('Loop', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_audio_loop" id="sp_audio_loop" class="regular-text">
<option value="off"><?php _e('Off', MK_SPLUS_TD);?></option>
<option value="on"><?php _e('On', MK_SPLUS_TD);?></option>
</select>
<p><?php _e('Allows for the looping of media.', MK_SPLUS_TD);?></p>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_audio_autoplay"><?php _e('Autoplay', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_audio_autoplay" id="sp_audio_autoplay" class="regular-text">
<option value="0"><?php _e('No', MK_SPLUS_TD);?></option>
<option value="1"><?php _e('Yes', MK_SPLUS_TD);?></option>
</select>
<p><?php _e('Causes the media to automatically play as soon as the media file is ready.', MK_SPLUS_TD);?></p>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_audio_preload"><?php _e('Preload', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_audio_preload" id="sp_audio_preload" class="regular-text">
<option value="none"><?php _e('None', MK_SPLUS_TD);?></option>
<option value="auto"><?php _e('auto', MK_SPLUS_TD);?></option>
</select>
<p><?php _e('Specifies if and how the audio should be loaded when the page loads. Defaults to "none".', MK_SPLUS_TD);?></p>
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