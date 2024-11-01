<?php
if (!defined('ABSPATH'))
    exit;
global $modules;
ksort($modules);
?>
<a class='button load_sp_popup' title='Shortcode +' href='javascript:void(0)'>
 <span class="code_icon" style="margin-top:3px"><img src="<?php echo plugins_url( '../images/code_btn_icon.png', __FILE__ )?>" ></span>
  <?php _e('Insert Shortcode', MK_SPLUS_TD); ?>
</a>
<div id="shortcode_plus_container" class="shortcode_plus_container_pop" style="display:none;">
  <div class="pop_overlay">
  </div>
  <div class="shortcode_plus_container_pop_tbl">
    <div class="shortcode_plus_container_pop_cel">
      <div class="shortcode_plus_container_pop_inner">
        <h2 class="shortcode_plus_h2">
          <a class="close_sp" href="javascript:void(0)" title="Dismiss">
            <span class="dashicons dashicons-dismiss">
            </span>
          </a>
		  <a href="javascript:void(0)" id="go_back" class="go_back" style="display:none;">&larr; Back</a>
        </h2>
        <div class="sp_search_input">
          <form>
            <input type="text" name="search" id="search-shrtcode" placeholder="Search..">
          </form>
		</div>
		 <span class="load_sp_form" style="margin-left:500px;">
                      <img src="<?php echo MK_SPLUS_PATH . '/images/spinner.gif'; ?>" />
                   </span>
           <div style="display: block;" class="shortcode_plus_bottom_form">
		     
              <?php  if (!empty($modules) && is_array($modules)) { ?>
             <ul class="shortcode_plus_module_section" id="shortcode_plus_module_section">
                <?php foreach ($modules as $key => $module) {
								$icon = 'dashicons-admin-network';
								if (!empty($module['icon'])) {
									$icon = $module['icon'];
								}
				?>
               <li>
                  <a href="#sp_<?php echo strtolower($key); ?>" id="<?php echo strtolower($key); ?>" data-module="<?php echo strtolower($key); ?>" class="modules ">
                    <span class="dashicons <?php echo $icon; ?>"></span><span class="abc"><?php echo $key; ?></span>
                  </a>
               </li>
                <?php } ?>
             </ul>
              <?php } ?>
               <p>
                  <div id="shortcode_plus_show_form" class="shortcode_plus_show_form">
				  
                    <span class="sp_error">
                      <?php _e('Click any module from list to display shortcode setting form.', MK_SPLUS_TD); ?>
                   </span>
                  </div>
               </p>
            </div>
          </div>
       </div>
    </div>
</div>