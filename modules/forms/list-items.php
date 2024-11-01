<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('list_items'); ?>
<div id="sp_listitems">
<hr />
<h4><span class="dashicons <?php echo $modules['List-Items']['icon'] ?>"></span><?php _e('List Items', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_listitems_style"><?php _e('List Style', MK_SPLUS_TD);?></label></th>
<td>
<select name="sp_listitems_style" id="sp_listitems_style" class="postform regular-text">
<option value="1" selected="selected"><?php _e('Round', MK_SPLUS_TD);?></option> 
<option value="2" selected="selected"><?php _e('Tick', MK_SPLUS_TD);?></option> 
</select>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_listitems_class"><?php _e('UL Class', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_listitems_class" id="sp_listitems_class" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_listitems_id"><?php _e('UL ID', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_listitems_id" id="sp_listitems_id" value="" class="regular-text" type="text"></td>
</tr>
<tr>
<th scope="row"><label for="sp_listitems_id"><?php _e('Click to add list (li) items', MK_SPLUS_TD);?></label></th>
<td>
<div id="load_list"></div>
<button id="add_ul_item" class="button button-primary"><?php _e('Add Item +', MK_SPLUS_TD);?></button>
</td>
</tr>
<tr>
<th scope="row"><label for="generated_shortcode"><?php _e('Generated Shortcode', MK_SPLUS_TD);?></label></th>
<td>
<input type="hidden" class="hide_for_li" value="" />
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