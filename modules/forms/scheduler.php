<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $modules, $bootstart;
$bootstart->load_js('scheduler');
?>
<div id="sp_scheduler">
<hr />
<h4><span class="dashicons <?php echo $modules['Scheduler']['icon'] ?>"></span><?php _e('Scheduler', MK_SPLUS_TD);?></h4>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="sp_scheduler_time"><?php _e('Time', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_scheduler_time" id="sp_scheduler_time" value="" class="regular-text" type="text">
<p>6-12 - show content from 6:00 to 12:00
6-12, 14-22 - show content from 6:00 to 12:00 and from 14:00 to 22:00
9:30-10:15 - example with minutes (content will be visible each day, 45 minutes)
</p>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_scheduler_days_of_week"><?php _e('Days of the week', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_scheduler_days_of_week" id="sp_scheduler_days_of_week" value="" class="regular-text" type="text">
<p>0 - Sunday,1 - Monday,2 - Tuesday,3 - Wednesday,4 - Thursday,5 - Friday,6 - Saturday </p>
<p>1-5 - show content from Monday to Friday,0 - show content only at Sunday,0, 3-5 - show content at Sunday and from Wednesday to Friday</p>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_scheduler_days_of_month"><?php _e('Days of the month', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_scheduler_days_of_month" id="sp_scheduler_days_of_month" value="" class="regular-text" type="text">
<p>1 - show content only at first day of month,1-5 - show content from 1th to 5th,10-15, 20-25 - show content from 10th to 15th and from 20th to 25th</p>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_scheduler_month"><?php _e('Month', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_scheduler_month" id="sp_scheduler_month" value="" class="regular-text " type="text">
<p>1 - show content only in January,2-6 - show content from February to June,1, 3, 5-7 - show content in January, March and from May to July</p>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_scheduler_years"><?php _e('Years', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_scheduler_years" id="sp_scheduler_years" value="" class="regular-text" type="text">
<p>2014 - show content only in 2014,2014-2016 - show content from 2014 to 2016,2014, 2018, 2020-2022 - show content in 2014, 2018 and from 2020 to 2022</p>
</td>
</tr>
<tr>
<th scope="row"><label for="sp_scheduler_alt"><?php _e('Alternative text', MK_SPLUS_TD);?></label></th>
<td>
<input name="sp_scheduler_alt" id="sp_scheduler_alt" value="" class="regular-text" type="text">
</td>
</tr>
<tr>
<th scope="row"><label for="sp_scheduler_content"><?php _e('scheduler Content', MK_SPLUS_TD);?></label></th>
<td>
<textarea name="sp_scheduler_content" id="sp_scheduler_content" value="" class="regular-text"></textarea>
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