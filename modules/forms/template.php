<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('template');?>
<div id="sp_template">
<hr />
<h4><span class="dashicons <?php echo $modules['Template']['icon'] ?>"></span><?php _e('Template', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_template_name"><?php _e('Template Name', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_template_name" id="sp_template_name" value="" class="regular-text" type="text">
<p><?php _e('Include theme files or templates. Example: page, page.php, inc/custom.php. Note: .php is optional.', MK_SPLUS_TD);?></p>
</td>
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