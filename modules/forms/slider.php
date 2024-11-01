<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('slider');?>
<div id="sp_slider">
<hr />
<h4><span class="dashicons <?php echo $modules['Slider']['icon'] ?>"></span><?php _e('Slider', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_slider_class"><?php _e('Class', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_slider_class" id="sp_slider_class" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_slider_speed"><?php _e('Speed', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_slider_speed" id="sp_slider_speed" value="800" class="regular-text" type="number"></td>
</tr>
<tr>
<th scope="row"><label for="sp_slider_delay"><?php _e('Deplay', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_slider_delay" id="sp_slider_delay" value="3000" class="regular-text" type="number"></td>
</tr>
<tr>
<th scope="row"><label for="sp_slider_autoplay"><?php _e('Autoplay', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_slider_autoplay" id="sp_slider_autoplay" class="regular-text postform">
<option value="true" selected="selected"><?php _e('True', MK_SPLUS_TD);?></option> 
<option value="false"><?php _e('False', MK_SPLUS_TD);?></option> 
</select>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_slider_show_control"><?php _e('Show Control', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_slider_show_control" id="sp_slider_show_control" class=" regular-text postform">
<option value="true" selected="selected"><?php _e('True', MK_SPLUS_TD);?></option> 
<option value="false"><?php _e('False', MK_SPLUS_TD);?></option> 
</select>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_slider_show_arrow"><?php _e('Show Arrow', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_slider_show_control" id="sp_slider_show_arrow" class=" regular-text postform">
<option value="true" selected="selected"><?php _e('True', MK_SPLUS_TD);?></option> 
<option value="false"><?php _e('False', MK_SPLUS_TD);?></option> 
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