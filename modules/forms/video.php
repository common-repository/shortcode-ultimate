<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('video');?>
<div id="sp_video">
<hr />
<h4><span class="dashicons <?php echo $modules['Video']['icon'] ?>"></span><?php _e('Video', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_video_id"><?php _e('Youtube - ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_video_id" id="sp_video_id" value="" class="regular-text" type="text">
<p class="tagline-description"><?php _e('Youtube Video ID e.g UkKv854vBgc , Demo <a href = "https://www.youtube.com/watch?v=UkKv854vBgc" target="_blank">Youtube</a>', MK_SPLUS_TD);?></p>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_video_align"><?php _e('Video Align', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_video_align" id="sp_video_align" class="postform">
	<option value="left" selected="selected"><?php _e('Left', MK_SPLUS_TD);?></option> 
    <option value="right"><?php _e('Right', MK_SPLUS_TD);?></option> 
</select>
<p class="tagline-description"><?php _e('Alignment of video. Default: Left', MK_SPLUS_TD);?></p>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_heading_title"><?php _e('Title', MK_SPLUS_TD);?></label></th>
<td>
<textarea name="sp_video_title" id="sp_video_title" class="large-text code" rows="3"></textarea>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_video_desc"><?php _e('Description', MK_SPLUS_TD);?></label></th>
<td>
<textarea name="sp_video_desc" id="sp_video_desc" class="large-text code" rows="5"></textarea>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_video_desc_class"><?php _e('Description Class', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_video_desc_class" id="sp_video_desc_class" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_video_desc_id"><?php _e('Description ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_video_desc_id" id="sp_video_desc_id" value="" class="regular-text" type="text"></td>
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