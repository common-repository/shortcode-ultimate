<div class="sp_example_wrap">

<div class="sp_basic_example">
<h2 class="sp-title"><?php _e('Basic examples', MK_SPLUS_TD);?></h2>

<div class="sp_example_box_wrap">

<div class="sp_example_box">
<div class="sp_example_box_inner sp-example-pop-clik" data-modal-id="Accordions-spoilers">
<div class="display_table">
<div class="verticle_align">
<div class="sp_ex_icon"><i class="fa fa-tasks"></i></div>
<div class="sp_ex_txt"><?php _e('Accordions, spoilers', MK_SPLUS_TD);?></div>
</div>
</div>
</div>
</div> <!--sp_example_box-->

<div class="sp_example_box">
<div class="sp_example_box_inner sp-example-pop-clik" data-modal-id="Tabs-Vertical">
<div class="display_table">
<div class="verticle_align">
<div class="sp_ex_icon"><i class="fa fa-folder"></i></div>
<div class="sp_ex_txt"><?php _e(' Tabs,Tooltip,', MK_SPLUS_TD);?></div>
</div>
</div>
</div>
</div> <!--sp_example_box-->

<div class="sp_example_box">
<div class="sp_example_box_inner sp-example-pop-clik" data-modal-id="Column-Vertical">
<div class="display_table">
<div class="verticle_align">
<div class="sp_ex_icon"><i class="fa fa-th-large"></i></div>
<div class="sp_ex_txt"><?php _e('Column layouts', MK_SPLUS_TD);?></div>
</div>
</div>
</div>
</div> <!--sp_example_box-->

<div class="sp_example_box">
<div class="sp_example_box_inner sp-example-pop-clik" data-modal-id="Video-Vertical">
<div class="display_table">
<div class="verticle_align">
<div class="sp_ex_icon"><i class="fa fa-play-circle"></i></div>
<div class="sp_ex_txt"><?php _e('Media elements, YouTube, Vimeo, Screenr and self-hosted videos', MK_SPLUS_TD);?> </div>
</div>
</div>
</div>
</div> <!--sp_example_box-->

<div class="sp_example_box">
<div class="sp_example_box_inner sp-example-pop-clik" data-modal-id="Button-Vertical">
<div class="display_table">
<div class="verticle_align">
<div class="sp_ex_icon"><i class="fa fa-heart"></i></div>
<div class="sp_ex_txt"><?php _e('Unlimited buttons', MK_SPLUS_TD);?></div>
</div>
</div>
</div>
</div> <!--sp_example_box-->

<div class="sp_example_box">
<div class="sp_example_box_inner sp-example-pop-clik" data-modal-id="Animation-Vertical">
<div class="display_table">
<div class="verticle_align">
<div class="sp_ex_icon"><i class="fa fa-bolt"></i></div>
<div class="sp_ex_txt"><?php _e('Animations', MK_SPLUS_TD);?></div>
</div>
</div>
</div>
</div> <!--sp_example_box-->


</div> <!--example_box_wrap-->

</div> <!--basic_example-->

<div class="sp_advanced_example">
<h2 class="sp-title"><?php _e('Advanced examples', MK_SPLUS_TD);?></h2>
<div class="sp_example_box_wrap">

<div class="sp_example_box">
<div class="sp_example_box_inner sp-example-pop-clik" data-modal-id="Posts-Vertical">
<div class="display_table">
<div class="verticle_align">
<div class="sp_ex_icon"><i class="fa fa-list"></i></div>
<div class="sp_ex_txt"><?php _e('Interacting with posts,users,widget shortcode', MK_SPLUS_TD);?></div>
</div>
</div>
</div>
</div> <!--sp_example_box-->

<div class="sp_example_box">
<div class="sp_example_box_inner sp-example-pop-clik" data-modal-id="Popup-Vertical">
<div class="display_table">
<div class="verticle_align">
<div class="sp_ex_icon"><i class="fa fa-indent"></i></div>
<div class="sp_ex_txt"><?php _e('Popup shortcodes', MK_SPLUS_TD);?></div>
</div>
</div>
</div>
</div> <!--sp_example_box-->

<div class="sp_example_box">
<div class="sp_example_box_inner sp-example-pop-clik" data-modal-id="Additional-Vertical">
<div class="display_table">
<div class="verticle_align">
<div class="sp_ex_icon"><i class="fa fa-plus"></i></div>
<div class="sp_ex_txt"><?php _e('Popup shortcodes', MK_SPLUS_TD);?></div>
</div>
</div>
</div>
</div> <!--sp_example_box-->

</div> <!--sp_example_box_wrap-->

</div>

</div>

<div class="sp_example_pop_wrap" id="Tabs-Vertical">
<div class="sp_example_pop_container">
<div class="sp_example_pop_content">
<div class="sp_example_pop_content_inner">
<span class="sp_close_wrap">
<a href="javascript:void(0)" class="sp_close"> &times; </a>
</span>

<h2><?php _e('Tabs, Tips, Toggle,Tooltip', MK_SPLUS_TD);?></h2> <div class="sp_outer_layout">
<?php 
/**Tabs**/
echo do_shortcode('[msu_tabs][msu_tab title="Title 1" active="true"]Content 1[/msu_tab][msu_tab title="Title 2"]Content 2[/msu_tab][msu_tab title="Title 3"]Content 3[/msu_tab][/msu_tabs]');
?>
<div class="toggle_content">
 <a href="javascript:void(0)"><div class="toggle_expander"><?php _e('Get the shortcode', MK_SPLUS_TD);?></div></a>
<pre class="toggle_text" rows="10" >

<?php _e('[msu_tabs]

	[msu_tab title="Title 1" active="true"] Content 1 [/msu_tab]
	
	[msu_tab title="Title 2"] Content 2 [ /msu_tab]
	
	[msu_tab title="Title 3"] Content 3 [/msu_tab]
	
[/msu_tabs]', MK_SPLUS_TD);?>

</pre>
</div>
</div>
<h2><?php _e('Tooltip', MK_SPLUS_TD);?></h2> <div class="sp_outer_layout">	
<?php
/**Tooltip**/
echo do_shortcode('[msu_tooltip text="tooltips" class="" id=""]Tooltip[/msu_tooltip]');
?>
 <div class="toggle_content">
 <a href="javascript:void(0)"><div class="toggle_expander"><?php _e('Get the shortcode', MK_SPLUS_TD);?></div></a>
        <pre class="toggle_text" rows="10" ><?php _e('[msu_tooltip text="tooltips" class="" id=""] Tooltip [/msu_tooltip]', MK_SPLUS_TD);?></pre>
</div>
</div>
<h2>
</div></div></div></div>

<div class="sp_example_pop_wrap" id="Video-Vertical">
<div class="sp_example_pop_container">
<div class="sp_example_pop_content">
<div class="sp_example_pop_content_inner">
<span class="sp_close_wrap">
<a href="javascript:void(0)" class="sp_close"> &times; </a>
</span>
<h2><?php _e('Youtube', MK_SPLUS_TD);?></h2> <div class="sp_outer_layout">
<?php 
/**youtube**/
echo do_shortcode('[msu_you_tube you_tube_id="UkKv854vBgc" width="650" height="400" autoplay="0" fullscreen="1"]');
?>
<div class="toggle_content">
 <a href="javascript:void(0)"><div class="toggle_expander"><?php _e('Get the shortcode', MK_SPLUS_TD);?></div></a>
       <pre class="toggle_text" rows="10" ><?php _e('[msu_you_tube you_tube_id="YouTube ID" width="650" height="400" autoplay="1" fullscreen="1"]', MK_SPLUS_TD);?></pre>
</div>
</div>

<h2><?php _e('Vimeo', MK_SPLUS_TD);?></h2> <div class="sp_outer_layout">
<?php
/**Vimeo**/
echo do_shortcode('[msu_vimeo vimeo_id="155111085" width="650" height="400" autoplay="0" fullscreen="1"]');
?>
<div class="toggle_content">
 <a href="javascript:void(0)"><div class="toggle_expander"><?php _e('Get the shortcode', MK_SPLUS_TD);?></div></a>
      <pre class="toggle_text" rows="10" ><?php _e('[msu_vimeo vimeo_id="Vimeo ID" width="650" height="400" autoplay="1" fullscreen="1"]', MK_SPLUS_TD);?></pre>
</div>
</div>
<h2><?php _e('Dailymotion', MK_SPLUS_TD);?></h2> <div class="sp_outer_layout">
<?php
/**Dailymotion**/
echo do_shortcode('[msu_dailymotion dailymotion_id="x5gmqt7 " width="650" height="400" autoplay="0" fullscreen="1"]');
?>
<div class="toggle_content">
 <a href="javascript:void(0)"><div class="toggle_expander"><?php _e('Get the shortcode', MK_SPLUS_TD);?></div></a>
        <pre class="toggle_text" rows="10" ><?php _e('[msu_dailymotion dailymotion_id="Dailymotion ID " width="650" height="400" autoplay="1" fullscreen="1"]', MK_SPLUS_TD);?></pre>
</div>
</div>
<h2><?php _e('Screenr', MK_SPLUS_TD);?></h2> <div class="sp_outer_layout">
<?php
/**Screenr**/
echo do_shortcode('[msu_screenr screenr_id="mCj8 " width="650" height="400" fullscreen="1"]');
?>
<div class="toggle_content">
 <a href="javascript:void(0)"><div class="toggle_expander"><?php _e('Get the shortcode', MK_SPLUS_TD);?></div></a>
       <pre class="toggle_text" rows="10" ><?php _e('[msu_screenr screenr_id="Screenr ID " width="650" height="400" fullscreen="1"]', MK_SPLUS_TD);?></pre>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="sp_example_pop_wrap" id="Column-Vertical">
<div class="sp_example_pop_container">
<div class="sp_example_pop_content">
<div class="sp_example_pop_content_inner">
<span class="sp_close_wrap">
<a href="javascript:void(0)" class="sp_close"> &times; </a>
</span>
<h2><?php _e('Fullwidth', MK_SPLUS_TD);?></h2> <div class="sp_outer_layout">
<?php 
/**Column**/
echo do_shortcode('[msu_row class="" id=""][msu_column type="1"]
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.
[/msu_column][msu_column type="1"]
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.
[/msu_column][/msu_row]');
?>
<div class="toggle_content">
 <a href="javascript:void(0)"><div class="toggle_expander"><?php _e('Get the shortcode', MK_SPLUS_TD);?></div></a>
        <pre class="toggle_text" rows="10" >
		<?php _e('[msu_row class="" id=""]

	[msu_column type="1/2"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.
	[/msu_column]
	
	[msu_column type="1/2"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.
	[/msu_column]
	
[/msu_row]', MK_SPLUS_TD);?>

</pre>
</div>
</div>
<h2><?php _e('1/2 + 1/2', MK_SPLUS_TD);?></h2> <div class="sp_outer_layout">
<?php

echo do_shortcode('[msu_row class="" id=""][msu_column type="1/2"]
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.
[/msu_column][msu_column type="1/2"]
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.
[/msu_column][/msu_row]');
?>
<div class="toggle_content">
 <a href="javascript:void(0)"><div class="toggle_expander"><?php _e('Get the shortcode', MK_SPLUS_TD);?></div></a>
        <pre class="toggle_text" rows="10" >
		<?php _e('[msu_row class="" id=""]

	[msu_column type="1/2"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.
	[/msu_column]
	
	[msu_column type="1/2"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.
	[/msu_column]
	
[/msu_row]', MK_SPLUS_TD);?>

</pre>
</div>
</div>
<h2><?php _e('1/3 + 1/3 + 1/3', MK_SPLUS_TD);?></h2> <div class="sp_outer_layout">
<?php
/**Tip**/
echo do_shortcode('[msu_row class="" id=""][msu_column type="1/3"]
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.
[/msu_column][msu_column type="1/3"]
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.
[/msu_column][msu_column type="1/3"]
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.
[/msu_column][/msu_row]');
?>
<div class="toggle_content">
 <a href="javascript:void(0)"><div class="toggle_expander"><?php _e('Get the shortcode', MK_SPLUS_TD);?></div></a>
         <pre class="toggle_text" rows="10" >
		 <?php _e('[msu_row class="" id=""]
	[msu_column type="1/3"]
	
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.
	[/msu_column]
	
	[msu_column type="1/3"]
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.
	[/msu_column]
	
	[msu_column type="1/3"]
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.
	[/msu_column]
	
[/msu_row]', MK_SPLUS_TD);?>

</pre>
</div>
</div>
<h2><?php _e('1/2 + 1/4 + 1/4', MK_SPLUS_TD);?></h2> <div class="sp_outer_layout">
<?php
/**Toggle**/
echo do_shortcode('[msu_row class="" id=""][msu_column type="1/2"]
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.
[/msu_column][msu_column type="1/4"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.[/msu_column][msu_column type="1/4"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.[/msu_column][/msu_row]
');
?>
<div class="toggle_content">
 <a href="javascript:void(0)"><div class="toggle_expander"><?php _e('Get the shortcode', MK_SPLUS_TD);?></div></a>
        <pre class="toggle_text" rows="10" >
		<?php _e('[msu_row class="" id=""]

	[msu_column type="1/2"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.
	[/msu_column]
	
	[msu_column type="1/4"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.
	[/msu_column]
	
	[msu_column type="1/4"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.
	[/msu_column]
	
[/msu_row]', MK_SPLUS_TD);?>

</pre>
</div>
</div>
<h2><?php _e('3/4 + 1/4', MK_SPLUS_TD);?></h2> <div class="sp_outer_layout">
<?php
/**Tooltip**/
echo do_shortcode('[msu_row class="" id=""][msu_column type="3/4"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.[/msu_column][msu_column type="1/4"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.[/msu_column][/msu_row]
');
?>
<div class="toggle_content">
 <a href="javascript:void(0)"><div class="toggle_expander"><?php _e('Get the shortcode', MK_SPLUS_TD);?></div></a>
         <pre class="toggle_text" rows="10" >
		 <?php _e('[msu_row class="" id=""]

	[msu_column type="3/4"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.
	[/msu_column]

	[msu_column type="1/4"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.
	[/msu_column]

[/msu_row]', MK_SPLUS_TD);?>

</pre>
</div>
</div>
<h2><?php _e('1/5 + 4/5', MK_SPLUS_TD);?></h2> <div class="sp_outer_layout">
<?php
echo do_shortcode('[msu_row class="" id=""][msu_column type="1/5"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.[/msu_column][msu_column type="4/5"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.[/msu_column][/msu_row]
');
?>
<div class="toggle_content">
 <a href="javascript:void(0)"><div class="toggle_expander"><?php _e('Get the shortcode', MK_SPLUS_TD);?></div></a>
       <pre class="toggle_text" rows="10" >
	   <?php _e('[msu_row class="" id=""]

	[msu_column type="1/5"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.
	[/msu_column]

	[msu_column type="4/5"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.
	[/msu_column]

[/msu_row]', MK_SPLUS_TD);?>

</pre>
</div>
</div>
<h2><?php _e('2/5 + 3/5', MK_SPLUS_TD);?></h2> <div class="sp_outer_layout">
<?php
echo do_shortcode('[msu_row class="" id=""][msu_column type="2/5"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.[/msu_column][msu_column type="3/5"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.[/msu_column][/msu_row]
');
?>
<div class="toggle_content">
 <a href="javascript:void(0)"><div class="toggle_expander"><?php _e('Get the shortcode', MK_SPLUS_TD);?></div></a>
      <pre class="toggle_text" rows="10" >
	  <?php _e('[msu_row class="" id=""]

	[msu_column type="2/5"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.
	[/msu_column]

	[msu_column type="3/5"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.
	[/msu_column]

[/msu_row]', MK_SPLUS_TD);?>

</pre>
</div>
</div>
<h2><?php _e('2/3 + 1/6 + 1/6', MK_SPLUS_TD);?></h2> <div class="sp_outer_layout">
<?php
echo do_shortcode('[msu_row class="" id=""][msu_column type="2/3"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.[/msu_column][msu_column type="1/6"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.[/msu_column][msu_column type="1/6"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.[/msu_column][/msu_row]
');

?>
<div class="toggle_content">
 <a href="javascript:void(0)"><div class="toggle_expander"><?php _e('Get the shortcode', MK_SPLUS_TD);?></div></a>
        <pre class="toggle_text" rows="10" >
		<?php _e('[msu_row class="" id=""]

	[msu_column type="2/3"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.
	[/msu_column]

	[msu_column type="1/6"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.
	[/msu_column]

	[msu_column type="1/6"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.
	[/msu_column]

[/msu_row]', MK_SPLUS_TD);?>

</pre>
</div>
</div>
</div></div></div></div>
<div class="sp_example_pop_wrap" id="Accordions-spoilers">
<div class="sp_example_pop_container">
<div class="sp_example_pop_content">
<div class="sp_example_pop_content_inner">
<span class="sp_close_wrap">
<a href="javascript:void(0)" class="sp_close"> &times; </a>
</span>
<h2><?php _e('Accordion', MK_SPLUS_TD);?></h2> <div class="sp_outer_layout">
<?php 

echo do_shortcode('[msu_accordions][msu_accordion title="title-1"]Content-1[/msu_accordion][msu_accordion title="title-2"]Content-2[/msu_accordion][msu_accordion title="title-3"]Content-3[/msu_accordion][/msu_accordions]');
?>
<div class="toggle_content">
 <a href="javascript:void(0)"><div class="toggle_expander"><?php _e('Get the shortcode', MK_SPLUS_TD);?></div></a>
         <pre class="toggle_text" rows="10" >
		 <?php _e('[msu_accordions]

	[msu_accordion title="title-1"] Content-1 [/msu_accordion]
	
	[msu_accordion title="title-2"] Content-2 [/msu_accordion]
	
	[msu_accordion title="title-3"] Content-3 [/msu_accordion]
	
[/msu_accordions]', MK_SPLUS_TD);?>
</pre>
</div>
</div>
<h2><?php _e('Spoiler', MK_SPLUS_TD);?></h2> <div class="sp_outer_layout">
<?php
echo do_shortcode('[msu_spoiler title="click" open="no" style="default" icon="plus"]spoiler[/msu_spoiler]');
echo do_shortcode('[msu_spoiler title="click" open="no" style="default" icon="plus"]spoiler[/msu_spoiler]');
echo do_shortcode('[msu_spoiler title="click" open="no" style="default" icon="plus"]spoiler[/msu_spoiler]');
?>
<div class="toggle_content">
 <a href="javascript:void(0)"><div class="toggle_expander"><?php _e('Get the shortcode', MK_SPLUS_TD);?></div></a>
       <pre class="toggle_text" rows="10" >
	   <?php _e('[msu_spoiler title="click" open="no" style="default" icon="plus"] spoiler [/msu_spoiler]

[msu_spoiler title="click" open="no" style="default" icon="plus"] spoiler [/msu_spoiler]

[msu_spoiler title="click" open="no" style="default" icon="plus"] spoiler [/msu_spoiler]', MK_SPLUS_TD);?>


</pre>
</div>
</div>
<h2><?php _e('Fancy accordion', MK_SPLUS_TD);?></h2> <div class="sp_outer_layout">
<?php
/***Fancy Box***/
echo do_shortcode('[msu_spoiler title="click" open="no" style="fancy" icon="plus"]spoiler[/msu_spoiler]');
echo do_shortcode('[msu_spoiler title="click" open="no" style="fancy" icon="plus"]spoiler[/msu_spoiler]');
echo do_shortcode('[msu_spoiler title="click" open="no" style="fancy" icon="plus"]spoiler[/msu_spoiler]');
?>
<div class="toggle_content">
 <a href="javascript:void(0)"><div class="toggle_expander"><?php _e('Get the shortcode', MK_SPLUS_TD);?></div></a>
        <pre class="toggle_text" rows="10" >
		<?php _e('[msu_spoiler title="click" open="no" style="fancy" icon="plus"] spoiler [/msu_spoiler]

[msu_spoiler title="click" open="no" style="fancy" icon="plus"] spoiler [/msu_spoiler]

[msu_spoiler title="click" open="no" style="fancy" icon="plus"] spoiler [/msu_spoiler]', MK_SPLUS_TD);?>


</pre>
</div>
</div>
<h2><?php _e('Different Spoiler', MK_SPLUS_TD);?></h2> <div class="sp_outer_layout">
<?php
/***Different Spoiler Style***/
echo do_shortcode('[msu_spoiler title="click" open="no" style="default" icon="plus"]spoiler[/msu_spoiler]');
echo do_shortcode('[msu_spoiler title="click" open="no" style="fancy" icon="plus"]spoiler[/msu_spoiler]');
echo do_shortcode('[msu_spoiler title="click" open="no" style="simple" icon="plus"]spoiler[/msu_spoiler]');
?>
<div class="toggle_content">
 <a href="javascript:void(0)"><div class="toggle_expander"><?php _e('Get the shortcode', MK_SPLUS_TD);?></div></a>
        <pre class="toggle_text" rows="10" >
		<?php _e('[msu_spoiler title="click" open="no" style="default" icon="plus"] spoiler [/msu_spoiler]

[msu_spoiler title="click" open="no" style="fancy" icon="plus"] spoiler [/msu_spoiler]

[msu_spoiler title="click" open="no" style="simple" icon="plus"] spoiler [/msu_spoiler]', MK_SPLUS_TD);?>


</pre>
</div>
</div>
<h2><?php _e('Open Spoiler', MK_SPLUS_TD);?></h2> <div class="sp_outer_layout">
<?php
/***Open Spoiler***/
echo do_shortcode('[msu_spoiler title="click" open="yes" style="simple" icon="plus"]spoiler[/msu_spoiler]');
echo do_shortcode('[msu_spoiler title="click" open="yes" style="simple" icon="plus"]spoiler[/msu_spoiler]');
echo do_shortcode('[msu_spoiler title="click" open="yes" style="simple" icon="plus"]spoiler[/msu_spoiler]');
?>
<div class="toggle_content">
 <a href="javascript:void(0)"><div class="toggle_expander"><?php _e('Get the shortcode', MK_SPLUS_TD);?></div></a>
      <pre class="toggle_text" rows="10" >
	  <?php _e('[msu_spoiler title="click" open="yes" style="simple" icon="plus"] spoiler [/msu_spoiler]

[msu_spoiler title="click" open="yes" style="simple" icon="plus"] spoiler [/msu_spoiler]

[msu_spoiler title="click" open="yes" style="simple" icon="plus"] spoiler [/msu_spoiler]', MK_SPLUS_TD);?>


</pre>
</div>
</div>
<h2><?php _e('Different icons', MK_SPLUS_TD);?></h2> <div class="sp_outer_layout">
<?php
/***Different icons***/
echo do_shortcode('[msu_spoiler title="click" open="yes" style="fancy" icon="plus"]spoiler[/msu_spoiler]');
echo do_shortcode('[msu_spoiler title="click" open="yes" style="fancy" icon="plus-circle"]spoiler[/msu_spoiler]');
echo do_shortcode('[msu_spoiler title="click" open="yes" style="fancy" icon="plus-square-1"]spoiler[/msu_spoiler]');
echo do_shortcode('[msu_spoiler title="click" open="yes" style="fancy" icon="plus-square-2"]spoiler[/msu_spoiler]');
echo do_shortcode('[msu_spoiler title="click" open="yes" style="fancy" icon="arrow"]spoiler[/msu_spoiler]');
echo do_shortcode('[msu_spoiler title="click" open="yes" style="fancy" icon="arrow-circle-1"]spoiler[/msu_spoiler]');
echo do_shortcode('[msu_spoiler title="click" open="yes" style="fancy" icon="caret"]spoiler[/msu_spoiler]');
echo do_shortcode('[msu_spoiler title="click" open="yes" style="fancy" icon="caret-square"]spoiler[/msu_spoiler]');
echo do_shortcode('[msu_spoiler title="click" open="yes" style="fancy" icon="folder-1"]spoiler[/msu_spoiler]');
echo do_shortcode('[msu_spoiler title="click" open="yes" style="fancy" icon="folder-2"]spoiler[/msu_spoiler]');
?>
<div class="toggle_content">
 <a href="javascript:void(0)"><div class="toggle_expander"><?php _e('Get the shortcode', MK_SPLUS_TD);?></div></a>
        <pre class="toggle_text" rows="10" >
		<?php _e('[msu_spoiler title="click" open="yes" style="fancy" icon="plus"] spoiler [/msu_spoiler]

[msu_spoiler title="click" open="yes" style="fancy" icon="plus-circle"] spoiler [/msu_spoiler]
 
[msu_spoiler title="click" open="yes" style="fancy" icon="plus-square-1"] spoiler [/msu_spoiler]

[msu_spoiler title="click" open="yes" style="fancy" icon="plus-square-2"] spoiler [/msu_spoiler]

[msu_spoiler title="click" open="yes" style="fancy" icon="arrow"] spoiler [/msu_spoiler]

[msu_spoiler title="click" open="yes" style="fancy" icon="arrow-circle-1"] spoiler [/msu_spoiler]

[msu_spoiler title="click" open="yes" style="fancy" icon="caret"] spoiler [/msu_spoiler]

[msu_spoiler title="click" open="yes" style="fancy" icon="caret-square"] spoiler [/msu_spoiler]

[msu_spoiler title="click" open="yes" style="fancy" icon="folder-1"] spoiler [/msu_spoiler]

[msu_spoiler title="click" open="yes" style="fancy" icon="folder-2"] spoiler [/msu_spoiler]', MK_SPLUS_TD);?>


</pre>
</div>
</div>
</div> <!--sp_example_pop_content_inner-->
</div> <!--sp_example_pop_content-->
</div> <!--sp_example_pop_container-->
</div> <!--sp_example_pop_wrap-->


<div class="sp_example_pop_wrap" id="Animation-Vertical">
<div class="sp_example_pop_container">
<div class="sp_example_pop_content">
<div class="sp_example_pop_content_inner">
<span class="sp_close_wrap">
<a href="javascript:void(0)" class="sp_close"> &times; </a>
</span>
<h2><?php _e('Different Animation', MK_SPLUS_TD);?></h2> <div class="sp_outer_layout">
<?php
echo do_shortcode('[msu_animation class="" id="" animation="bounceIn" duration="1" delay="1" inline="no"]Lorem ipsum[/msu_animation]');
echo do_shortcode('[msu_animation class="" id="" animation="shake" duration="1" delay="1" inline="no"]Lorem ipsum[/msu_animation]');
echo do_shortcode('[msu_animation class="" id="" animation="swing" duration="1" delay="1" inline="no"]Lorem ipsum[/msu_animation]');
echo do_shortcode('[msu_animation class="" id="" animation="flipInY" duration="1" delay="1" inline="no"]Lorem ipsum[/msu_animation]');
echo do_shortcode('[msu_animation class="" id="" animation="fadeInUp" duration="1" delay="1" inline="no"]Lorem ipsum[/msu_animation]');
echo do_shortcode('[msu_animation class="" id="" animation="fadeInDownBig" duration="1" delay="1" inline="no"]Lorem ipsum[/msu_animation]');
echo do_shortcode('[msu_animation class="" id="" animation="slideInDown" duration="1" delay="1" inline="no"]Lorem ipsum[/msu_animation]');
echo do_shortcode('[msu_animation class="" id="" animation="rotateInUpLeft" duration="1" delay="1" inline="no"]Lorem ipsum[/msu_animation]');
echo do_shortcode('[msu_animation class="" id="" animation="lightSpeedOut" duration="1" delay="1" inline="no"]Lorem ipsum[/msu_animation]');
?>
<div class="toggle_content">
 <a href="javascript:void(0)"><div class="toggle_expander"><?php _e('Get the shortcode', MK_SPLUS_TD);?></div></a>
        <pre class="toggle_text" rows="10" >
		<?php _e('[msu_animation class="" id="" animation="bounceIn" duration="1" delay="1" inline="no"]Lorem ipsum[/msu_animation]

[msu_animation class="" id="" animation="shake" duration="1" delay="1" inline="no"]Lorem ipsum[/msu_animation]

[msu_animation class="" id="" animation="swing" duration="1" delay="1" inline="no"]Lorem ipsum[/msu_animation]

[msu_animation class="" id="" animation="flipInY" duration="1" delay="1" inline="no"]Lorem ipsum[/msu_animation]

[msu_animation class="" id="" animation="fadeInUp" duration="1" delay="1" inline="no"]Lorem ipsum[/msu_animation]

[msu_animation class="" id="" animation="fadeInDownBig" duration="1" delay="1" inline="no"]Lorem ipsum[/msu_animation]

[msu_animation class="" id="" animation="slideInDown" duration="1" delay="1" inline="no"]Lorem ipsum[/msu_animation]

[msu_animation class="" id="" animation="rotateInUpLeft" duration="1" delay="1" inline="no"]Lorem ipsum[/msu_animation]

[msu_animation class="" id="" animation="lightSpeedOut" duration="1" delay="1" inline="no"]Lorem ipsum[/msu_animation]', MK_SPLUS_TD);?>


</pre>
</div>
</div>
</div> <!--sp_example_pop_content_inner-->
</div> <!--sp_example_pop_content-->
</div> <!--sp_example_pop_container-->
</div> <!--sp_example_pop_wrap-->

<div class="sp_example_pop_wrap" id="Button-Vertical">
<div class="sp_example_pop_container">
<div class="sp_example_pop_content">
<div class="sp_example_pop_content_inner">
<span class="sp_close_wrap">
<a href="javascript:void(0)" class="sp_close"> &times; </a>
</span>
<h2><?php _e('Different Button Size', MK_SPLUS_TD);?></h2> <div class="sp_outer_layout">
<?php
echo do_shortcode('[msu_button size="5" class="" background="#db2950" color="#303030" link="" target="_blank"]click[/msu_button]');
echo do_shortcode('[msu_button size="10" class="" background="#db2950" color="#303030" link="" target="_blank"]click[/msu_button]');
echo do_shortcode('[msu_button size="15" class="" background="#db2950" color="#303030" link="" target="_blank"]click[/msu_button]');
echo do_shortcode('[msu_button size="20" class="" background="#db2950" color="#303030" link="" target="_blank"]click[/msu_button]');
?>
<div class="toggle_content">
 <a href="javascript:void(0)"><div class="toggle_expander"><?php _e('Get the shortcode', MK_SPLUS_TD);?></div></a>
         <pre class="toggle_text" rows="10" >
		 <?php _e('[msu_button size="5" class="" background="#db2950" color="#303030" link="" target="_blank"] click [/msu_button]

[msu_button size="10" class="" background="#db2950" color="#303030" link="" target="_blank"] click [/msu_button]

[msu_button size="15" class="" background="#db2950" color="#303030" link="" target="_blank"] click [/msu_button]

[msu_button size="20" class="" background="#db2950" color="#303030" link="" target="_blank"] click [/msu_button]', MK_SPLUS_TD);?>


</pre>
</div>
</div>
<h2><?php _e('Different Button Color', MK_SPLUS_TD);?></h2> <div class="sp_outer_layout">
<?php
echo do_shortcode('[msu_button size="10" class="" background="#6BACF3" color="#fff" link=""]click[/msu_button]');
echo do_shortcode('[msu_button size="10" class="" background="#ba6bf3" color="#fff" link="" target="_blank"]click[/msu_button]');
echo do_shortcode('[msu_button size="10" class="" background="#f96cce" color="#fff" link="" target="_blank"]click[/msu_button]');
echo do_shortcode('[msu_button size="10" class="" background="#27cbd5" color="#fff" link="" target="_blank"]click[/msu_button]')
?>
<div class="toggle_content">
 <a href="javascript:void(0)"><div class="toggle_expander"><?php _e('Get the shortcode', MK_SPLUS_TD);?></div></a>
        <pre class="toggle_text" rows="10" >
		<?php _e('[msu_button size="10" class="" background="#6BACF3" color="#fff" link="" target="_blank"] click [/msu_button]

[msu_button size="10" class="" background="#ba6bf3" color="#fff" link="" target="_blank"] click [/msu_button]

[msu_button size="10" class="" background="#f96cce" color="#fff" link="" target="_blank"] click [/msu_button]

[msu_button size="10" class="" background="#27cbd5" color="#fff" link="" target="_blank"] click [/msu_button]', MK_SPLUS_TD);?>


</pre>
</div>
</div>
</div> <!--sp_example_pop_content_inner-->
</div> <!--sp_example_pop_content-->
</div> <!--sp_example_pop_container-->
</div> <!--sp_example_pop_wrap-->


<div class="sp_example_pop_wrap" id="Posts-Vertical">
<div class="sp_example_pop_container">
<div class="sp_example_pop_content">
<div class="sp_example_pop_content_inner">
<span class="sp_close_wrap">
<a href="javascript:void(0)" class="sp_close"> &times; </a>
</span>
<h2><?php _e('Add Post', MK_SPLUS_TD);?></h2> <div class="sp_outer_layout">
<?php
echo do_shortcode('[msu_posts ids="1" class="" id=""]');
?>
<div class="toggle_content">
 <a href="javascript:void(0)"><div class="toggle_expander"><?php _e('Get the shortcode', MK_SPLUS_TD);?></div></a>
<pre class="toggle_text" rows="10" >
		<?php _e('[msu_posts ids="1" class="" id=""]', MK_SPLUS_TD);?>


</pre>
</div>
</div>
<h2><?php _e('Add Post Data', MK_SPLUS_TD);?></h2> <div class="sp_outer_layout">
<?php
echo do_shortcode('[msu_post field="post_title" default="Default" before="Before" after="After" post_id="78"]');
?>
<div class="toggle_content">
 <a href="javascript:void(0)"><div class="toggle_expander"><?php _e('Get the shortcode', MK_SPLUS_TD);?></div></a>
<pre class="toggle_text" rows="10" >
		<?php _e('[msu_post field="post_title" default="Default" before="before" after="after" post_id="1"]', MK_SPLUS_TD);?>


</pre>
</div>
</div>
<h2><?php _e('Add Post In a Panel form', MK_SPLUS_TD);?></h2> <div class="sp_outer_layout">
<?php
echo do_shortcode('[msu_post_panels class="" id=""][msu_post_panel post_id="1"][/msu_post_panel][/msu_post_panels]');
?>
<div class="toggle_content">
 <a href="javascript:void(0)"><div class="toggle_expander"><?php _e('Get the shortcode', MK_SPLUS_TD);?></div></a>
<pre class="toggle_text" rows="10" >
		<?php _e('[msu_post_panels class="" id=""][msu_post_panel post_id="1"][/msu_post_panel][/msu_post_panels]', MK_SPLUS_TD);?>


</pre>
</div>
</div>
<h2><?php _e('Add Post Toggle', MK_SPLUS_TD);?></h2> <div class="sp_outer_layout">
<?php
echo do_shortcode('[msu_posttoggle ids="1" class="2" id="2"]');
?>
<div class="toggle_content">
 <a href="javascript:void(0)"><div class="toggle_expander"><?php _e('Get the shortcode', MK_SPLUS_TD);?></div></a>
<pre class="toggle_text" rows="10" >
		<?php _e('[msu_posttoggle ids="1" class="" id=""]', MK_SPLUS_TD);?>


</pre>
</div>
</div>
<h2><?php _e('Add User Data', MK_SPLUS_TD);?></h2> <div class="sp_outer_layout">
<?php
echo '<h2>Add User Data</h2>';
echo do_shortcode('[msu_user field="display_name" default="Default" before="Before" after="After" user_id="1"]');
?>
<div class="toggle_content">
 <a href="javascript:void(0)"><div class="toggle_expander"><?php _e('Get the shortcode', MK_SPLUS_TD);?></div></a>
<pre class="toggle_text" rows="10" >
		<?php _e('[msu_user field="display_name" default="Default" before="Before" after="After" user_id="1"]', MK_SPLUS_TD);?>


</pre>
</div>
</div>
<h2><?php _e('Add Widget', MK_SPLUS_TD);?></h2> <div class="sp_outer_layout">
<?php
echo do_shortcode('[msu_widget widget="sidebar-1"]');
?>
<div class="toggle_content">
 <a href="javascript:void(0)"><div class="toggle_expander"><?php _e('Get the shortcode', MK_SPLUS_TD);?></div></a>
<pre class="toggle_text" rows="10" >
		<?php _e('[msu_widget widget="sidebar-1"]', MK_SPLUS_TD);?>

</pre>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="sp_example_pop_wrap" id="Popup-Vertical">
<div class="sp_example_pop_container">
<div class="sp_example_pop_content">
<div class="sp_example_pop_content_inner">
<span class="sp_close_wrap">
<a href="javascript:void(0)" class="sp_close"> &times; </a>
</span>
<h2><?php _e('Content Popup', MK_SPLUS_TD);?></h2> <div class="sp_outer_layout">
<?php
echo do_shortcode('[msu_content_popup class="" id="" link_popup_text="Click Here" align="center" margin="55" width="500" padding="40" bgcolor="#424F5A" text_color="#FF9500"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.[/msu_content_popup]');
?>
<div class="toggle_content">
 <a href="javascript:void(0)"><div class="toggle_expander"><?php _e('Get the shortcode', MK_SPLUS_TD);?></div></a>
<pre class="toggle_text" rows="10" >
		<?php _e('[msu_content_popup class="" id="" link_popup_text="Click Here" align="center" margin="55" width="500" padding="40" bgcolor="#424F5A" text_color="#FF9500"]

	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quam nibh, euismod eget nulla a, tempor scelerisque lorem. Proin dignissim arcu tristique fermentum ullamcorper. Integer lacinia scelerisque enim eu pretium. Nam elementum turpis orci, ac porttitor diam suscipit sit amet.
	
[/msu_content_popup]', MK_SPLUS_TD);?>


</pre>
</div>
</div>
<h2><?php _e('Lightbox', MK_SPLUS_TD);?></h2> <div class="sp_outer_layout">
<?php
echo do_shortcode('[msu_lightbox class="" id="" link_popup_text="Click Here" type="iframe" src="https://www.youtube.com/embed/VadWkrauOF0" height="500" width="500"]

');
?>
<div class="toggle_content">
 <a href="javascript:void(0)"><div class="toggle_expander"><?php _e('Get the shortcode', MK_SPLUS_TD);?></div></a>
<pre class="toggle_text" rows="10" >
		<?php _e('[msu_lightbox class="" id="" link_popup_text="Click Here" type="iframe" src="https://www.youtube.com/embed/VadWkrauOF0" height="500" width="500"]', MK_SPLUS_TD);?>


</pre>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="sp_example_pop_wrap" id="Additional-Vertical">
<div class="sp_example_pop_container">
<div class="sp_example_pop_content">
<div class="sp_example_pop_content_inner">
<span class="sp_close_wrap">
<a href="javascript:void(0)" class="sp_close"> &times; </a>
</span>
<h2><?php _e('Box', MK_SPLUS_TD);?></h2> <div class="sp_outer_layout">
<?php
echo do_shortcode('[msu_box class="" id="" title="Box Title" bgcolor="#aa4c00" textcolor="#ededed"]Add Content[/msu_box]');
?>
<div class="toggle_content">
 <a href="javascript:void(0)"><div class="toggle_expander"><?php _e('Get the shortcode', MK_SPLUS_TD);?></div></a>
<pre class="toggle_text" rows="10" >
		<?php _e('[msu_box class="" id="" title="Box Title" bgcolor="#aa4c00" textcolor="#ededed"] Add Content [/msu_box]', MK_SPLUS_TD);?>


</pre>
</div>
</div>
<h2><?php _e('Note', MK_SPLUS_TD);?></h2> <div class="sp_outer_layout">
<?php
echo do_shortcode('[msu_note class="a" id="a" bgcolor="#F96" textcolor="#FFFFFF"]Add Your Note[/msu_note]');
?>
<div class="toggle_content">
 <a href="javascript:void(0)"><div class="toggle_expander"><?php _e('Get the shortcode', MK_SPLUS_TD);?></div></a>
<pre class="toggle_text" rows="10" >
		<?php _e('[msu_note class="" id="" bgcolor="#F96" textcolor="#FFFFFF"] Add Your Note [/msu_note]', MK_SPLUS_TD);?>


</pre>
</div>
</div>
<h2><?php _e('Label', MK_SPLUS_TD);?></h2> <div class="sp_outer_layout">
<?php
echo do_shortcode('[msu_label class="" id="" type="default"]Label[/msu_label]');
?>
<div class="toggle_content">
 <a href="javascript:void(0)"><div class="toggle_expander"><?php _e('Get the shortcode', MK_SPLUS_TD);?></div></a>
<pre class="toggle_text" rows="10" >
		<?php _e('[msu_label class="" id="" type="default"]Label[/msu_label]', MK_SPLUS_TD);?>


</pre>
</div>
</div>
<h2><?php _e('Quotation', MK_SPLUS_TD);?></h2> <div class="sp_outer_layout">
<?php
echo do_shortcode('[msu_quotation class="" id=""]Quotation[/msu_quotation]');
?>
<div class="toggle_content">
 <a href="javascript:void(0)"><div class="toggle_expander"><?php _e('Get the shortcode', MK_SPLUS_TD);?></div></a>
<pre class="toggle_text" rows="10" >
		<?php _e('[msu_quotation class="" id=""]Quotation[/msu_quotation]', MK_SPLUS_TD);?>


</pre>
</div>
</div>
<h2><?php _e('QR Code', MK_SPLUS_TD);?></h2> <div class="sp_outer_layout">
<?php
echo do_shortcode('[msu_qr class="" id="" title="Add Qr Title" size="none" target="blank" data="Add Qr Title" data="200" color="#fff" bgcolor="#000"]');
?>
<div class="toggle_content">
 <a href="javascript:void(0)"><div class="toggle_expander"><?php _e('Get the shortcode', MK_SPLUS_TD);?></div></a>
<pre class="toggle_text" rows="10" >
		<?php _e('[msu_qr class="" id="" title="Add Qr Title" size="none" target="blank" data="Add Qr Title" data="200" color="#fff" bgcolor="#000"]', MK_SPLUS_TD);?>


</pre>
</div>
</div>
<h2><?php _e('Dummy Text', MK_SPLUS_TD);?></h2> <div class="sp_outer_layout">
<?php
echo do_shortcode('[msu_dummy_text type="paras" amount="2" cache="yes" class=""]');
?>
<div class="toggle_content">
 <a href="javascript:void(0)"><div class="toggle_expander"><?php _e('Get the shortcode', MK_SPLUS_TD);?></div></a>
<pre class="toggle_text" rows="10" >
		<?php _e('[msu_dummy_text type="paras" amount="2" cache="yes" class=""]', MK_SPLUS_TD);?>


</pre>
</div>
</div>
<h2><?php _e('Dummy Image', MK_SPLUS_TD);?></h2> <div class="sp_outer_layout">
<?php
echo do_shortcode('[msu_dummy_image class="" id="" height="200" width="200" theme="any"]');
?>
<div class="toggle_content">
 <a href="javascript:void(0)"><div class="toggle_expander"><?php _e('Get the shortcode', MK_SPLUS_TD);?></div></a>
<pre class="toggle_text" rows="10" >
		<?php _e('[msu_dummy_image class="" id="" height="200" width="200" theme="any"]', MK_SPLUS_TD);?>


</pre>
</div>
</div>
</div>
</div>
</div>
</div>