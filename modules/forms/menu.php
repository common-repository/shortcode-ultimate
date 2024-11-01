<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('menu');?>
<div id="sp_menu">
<hr />
<h4><span class="dashicons <?php echo $modules['Menu']['icon'] ?>"></span><?php _e('Menu', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_menu_name"><?php _e('Menu Name', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_menu_name" id="sp_menu_name" value="" class="regular-text" type="text">
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