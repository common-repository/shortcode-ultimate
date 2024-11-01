<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('animation');
?>
<div id="sp_animation">
<hr />
<h4><span class="dashicons <?php echo $modules['Animation']['icon'] ?>"></span><?php _e('Animation', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_animation_class"><?php _e('Class', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_animation_class" id="sp_animation_class" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_animation_id"><?php _e('ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_animation_id" id="sp_animation_id" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_animation_type"><?php _e('Animation', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_animation_type" id="sp_animation_type" value="" class="regular-text" >
<option value="flash"><?php _e('flash', MK_SPLUS_TD);?></option>
<option value="bounce"><?php _e('bounce', MK_SPLUS_TD);?></option>
<option value="shake"><?php _e('shake', MK_SPLUS_TD);?></option>
<option value="tada"><?php _e('tada', MK_SPLUS_TD);?></option>
<option value="swing"><?php _e('swing', MK_SPLUS_TD);?></option>
<option value="wobble"><?php _e('wobble', MK_SPLUS_TD);?></option>
<option value="pulse"><?php _e('pulse', MK_SPLUS_TD);?></option>
<option value="flip"><?php _e('flip', MK_SPLUS_TD);?></option>
<option value="flipInX"><?php _e('flipInX', MK_SPLUS_TD);?></option>
<option value="flipOutX"><?php _e('flipOutX', MK_SPLUS_TD);?></option>
<option value="flipInY"><?php _e('flipInY', MK_SPLUS_TD);?></option>
<option value="flipOutY"><?php _e('flipOutY', MK_SPLUS_TD);?></option>
<option value="fadeIn"><?php _e('fadeIn', MK_SPLUS_TD);?></option>
<option value="fadeInUp"><?php _e('fadeInUp', MK_SPLUS_TD);?></option>
<option value="fadeInDown"><?php _e('fadeInDown', MK_SPLUS_TD);?></option>
<option value="fadeInLeft"><?php _e('fadeInLeft', MK_SPLUS_TD);?></option>
<option value="fadeInRight"><?php _e('fadeInRight', MK_SPLUS_TD);?></option>
<option value="fadeInUpBig"><?php _e('fadeInUpBig', MK_SPLUS_TD);?></option>
<option value="fadeInDownBig"><?php _e('fadeInDownBig', MK_SPLUS_TD);?></option>
<option value="fadeInLeftBig"><?php _e('fadeInLeftBig', MK_SPLUS_TD);?></option>
<option value="fadeInRightBig"><?php _e('fadeInRightBig', MK_SPLUS_TD);?></option>
<option value="fadeOut"><?php _e('fadeOut', MK_SPLUS_TD);?></option>
<option value="fadeOutUp"><?php _e('fadeOutUp', MK_SPLUS_TD);?></option>
<option value="fadeOutDown"><?php _e('fadeOutDown', MK_SPLUS_TD);?></option>
<option value="fadeOutLeft"><?php _e('fadeOutLeft', MK_SPLUS_TD);?></option>
<option value="fadeOutRight"><?php _e('fadeOutRight', MK_SPLUS_TD);?></option>
<option value="fadeOutUpBig"><?php _e('fadeOutUpBig', MK_SPLUS_TD);?></option>
<option value="fadeOutDownBig"><?php _e('fadeOutDownBig', MK_SPLUS_TD);?></option>
<option value="fadeOutLeftBig"><?php _e('fadeOutLeftBig', MK_SPLUS_TD);?></option>
<option value="fadeOutRightBig"><?php _e('fadeOutRightBig', MK_SPLUS_TD);?></option>
<option value="slideInDown"><?php _e('slideInDown', MK_SPLUS_TD);?></option>
<option value="slideInLeft"><?php _e('slideInLeft', MK_SPLUS_TD);?></option>
<option value="slideInRight"><?php _e('slideInRight', MK_SPLUS_TD);?></option>
<option value="slideOutUp"><?php _e('slideOutUp', MK_SPLUS_TD);?></option>
<option value="slideOutLeft"><?php _e('slideOutLeft', MK_SPLUS_TD);?></option>
<option value="slideOutRight"><?php _e('slideOutRight', MK_SPLUS_TD);?></option>
<option value="bounceIn" selected="selected"><?php _e('bounceIn', MK_SPLUS_TD);?></option>
<option value="bounceInDown"><?php _e('bounceInDown', MK_SPLUS_TD);?></option>
<option value="bounceInUp"><?php _e('bounceInUp', MK_SPLUS_TD);?></option>
<option value="bounceInLeft"><?php _e('bounceInLeft', MK_SPLUS_TD);?></option>
<option value="bounceInRight"><?php _e('bounceInRight', MK_SPLUS_TD);?></option>
<option value="bounceOut"><?php _e('bounceOut', MK_SPLUS_TD);?></option>
<option value="bounceOutDown"><?php _e('bounceOutDown', MK_SPLUS_TD);?></option>
<option value="bounceOutUp"><?php _e('bounceOutUp', MK_SPLUS_TD);?></option>
<option value="bounceOutLeft"><?php _e('bounceOutLeft', MK_SPLUS_TD);?></option>
<option value="bounceOutRight"><?php _e('bounceOutRight', MK_SPLUS_TD);?></option>
<option value="rotateIn"><?php _e('rotateIn', MK_SPLUS_TD);?></option>
<option value="rotateInDownLeft"><?php _e('rotateInDownLeft', MK_SPLUS_TD);?></option>
<option value="rotateInDownRight"><?php _e('rotateInDownRight', MK_SPLUS_TD);?></option>
<option value="rotateInUpLeft"><?php _e('rotateInUpLeft', MK_SPLUS_TD);?></option>
<option value="rotateInUpRight"><?php _e('rotateInUpRight', MK_SPLUS_TD);?></option>
<option value="rotateOut"><?php _e('rotateOut', MK_SPLUS_TD);?></option>
<option value="rotateOutDownLeft"><?php _e('rotateOutDownLeft', MK_SPLUS_TD);?></option>
<option value="rotateOutDownRight"><?php _e('rotateOutDownRight', MK_SPLUS_TD);?></option>
<option value="rotateOutUpLeft"><?php _e('rotateOutUpLeft', MK_SPLUS_TD);?></option>
<option value="rotateOutUpRight"><?php _e('rotateOutUpRight', MK_SPLUS_TD);?></option>
<option value="lightSpeedIn"><?php _e('lightSpeedIn', MK_SPLUS_TD);?></option>
<option value="lightSpeedOut"><?php _e('lightSpeedOut', MK_SPLUS_TD);?></option>
<option value="hinge"><?php _e('hinge', MK_SPLUS_TD);?>hinge</option>
<option value="rollIn"><?php _e('rollIn', MK_SPLUS_TD);?></option>
<option value="rollOut"><?php _e('rollOut', MK_SPLUS_TD);?></option>
</select>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_animation_inline"><?php _e('Inline', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_animation_inline" id="sp_animation_inline" value="1" class="regular-text " >
<option value="no">No</option>
<option value="yes">Yes</option>
<select>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_animation_duration"><?php _e('Duration', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_animation_duration" id="sp_animation_duration" value="1" class="regular-text color" type="number"></td>
</tr>
<tr>
<th scope="row"><label for="sp_animation_delay"><?php _e('Delay', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_animation_delay" id="sp_animation_delay" value="0" class="regular-text color" type="number"></td>
</tr>
<tr>
<th scope="row"><label for="sp_animation_content"><?php _e('Content', MK_SPLUS_TD);?></label></th>
<td>
<textarea name="sp_animation_content" id="sp_animation_content" value="" class="regular-text">Content</textarea>
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