<?php if ( ! defined( 'ABSPATH' ) ) exit;
$opt = $this->options;
if(isset($_POST['save_sp_settings']) && wp_verify_nonce( $_POST['sp_settings_nonce_field'], 'sp_settings_action' )) {
	  _e("<strong>Saving Please wait...</strong>", MK_SPLUS_TD);
	  $sp_settings_page_options['shortcode_plus_cpt'] = array_map( 'sanitize_text_field', wp_unslash( $_POST['sp_allowed_cpt'] ) );
	  $saveSettings = update_option($this->optionname, $sp_settings_page_options );
	  if($saveSettings) { $this->redirect('admin.php?page=shortcode_ultimate&msg=1'); } else { $this->redirect('admin.php?page=shortcode_ultimate&msg=2'); }
}
?>
<div class="wrap sp_wrap">
<h2><?php _e('Settings', MK_SPLUS_TD);?></h2>
<hr />
<?php if(isset($_GET['msg'])) {
    if($_GET['msg'] == '1') { $this->flash(1, 'Settings Saved!');} else {$this->flash(2, 'Settings Not Saved!');}
 } ?>
<form action="" method="post" name="sp_settings_page_form">
<?php wp_nonce_field('sp_settings_action', 'sp_settings_nonce_field'); ?>
<table class="form-table">
  <tbody>
  <tr>
<th scope="row"><?php _e('Show Insert Shortcode Button?', MK_SPLUS_TD);?></th>
<td> <fieldset><legend class="screen-reader-text"><span><?php _e('Shortcode', MK_SPLUS_TD);?></span></legend>
<?php foreach($this->post_types  as $post_type) {
	if(!empty($opt['shortcode_plus_cpt']) && is_array($opt['shortcode_plus_cpt'])) {
	  if(in_array($post_type, $opt['shortcode_plus_cpt'])) { ?>
		<label for="sp_allowed_cpt">
        <input name="sp_allowed_cpt[]" id="<?php echo $post_type; ?>" value="<?php echo $post_type; ?>" type="checkbox" checked ><?php echo ucfirst($post_type); ?>
        </label>
		<?php } else { ?>
        <label for="sp_allowed_cpt">
<input name="sp_allowed_cpt[]" id="<?php echo $post_type; ?>" value="<?php echo $post_type; ?>" type="checkbox"><?php echo ucfirst($post_type); ?>
</label>
        <?php } 
	} else { ?>
 <label for="sp_allowed_cpt">
<input name="sp_allowed_cpt[]" id="<?php echo $post_type; ?>" value="<?php echo $post_type; ?>" type="checkbox"><?php echo ucfirst($post_type); ?>
</label>
   
<?php } }?>
</fieldset></td>
</tr>
  </tbody>
</table>
<p class="submit"><input type="submit" value="Save Changes" class="button button-primary" id="submit" name="save_sp_settings"></p>
</form>
</div>