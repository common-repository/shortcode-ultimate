function generate_listitem_shortcode(){
	var shortcode = '[msu_ul';
	 if(jQuery('#sp_listitems_style').val() != ''){
		 shortcode +=' type="'+jQuery('#sp_listitems_style').val()+'"';
	 }
	 if(jQuery('#sp_listitems_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_listitems_class').val()+'"';
	 }
	  if(jQuery('#sp_listitems_id').val() != ''){
		 shortcode +=' id="'+jQuery('#sp_listitems_id').val()+'"';
	 }
	 shortcode += ']';
	 /* LI Items */
	 if(jQuery('.hide_for_li').val() != '') {
	   shortcode += jQuery('.hide_for_li').val();
	 }
	 shortcode += '[/msu_ul]';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
generate_listitem_shortcode();
});
jQuery('#sp_listitems_style').change(function(e) {
   generate_listitem_shortcode(); 
});
jQuery('#sp_listitems_text').keyup(function(e) {
   generate_listitem_shortcode(); 
});
jQuery('#sp_listitems_class').keyup(function(e) {
   generate_listitem_shortcode(); 
});
jQuery('#sp_listitems_id').keyup(function(e) {
   generate_listitem_shortcode(); 
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
	jQuery('.shortcode_plus_container_pop').hide();
});
jQuery('#add_ul_item').click(function(e) {
	e.preventDefault();
 var li_html = '<table cellspacing="0" cellpadding="0" class="tbl_border">';
     li_html += "<tr><td>List Text</td><td><input name='sp_listitems_li_lt' value='' class='regular-text sp_listitems_li_lt' type='text'></td><td></td></tr>";
	 li_html += "<tr><td>List Class </td><td><input name='sp_listitems_li_class' value='' class='regular-text sp_listitems_li_class' type='text'></td><td><button class='button delete_item'>Remove</button></td></tr>";
     li_html += "<tr><td>List ID</td><td><input name='sp_listitems_li_id' value='' class='regular-text sp_listitems_li_id' type='text'></td><td></td></tr>";
	 li_html += '</table>';
	   
jQuery('#load_list').append(li_html);
});
jQuery('.delete_item').live('click', function(e){
		e.preventDefault();
		var point = jQuery(this).parents('.tbl_border');
		point.fadeOut(500, function(){ jQuery(this).replaceWith(''); jQuery(this).remove();});	
});
	
jQuery('.sp_listitems_li_lt').live('keyup', function(e){
   get_li_shortcode();
});	
jQuery('.sp_listitems_li_class').live('keyup', function(e){
   get_li_shortcode();
});	
jQuery('.sp_listitems_li_id').live('keyup', function(e){
   get_li_shortcode();
});	
function get_li_shortcode()
{
    jQuery('.hide_for_li').val('');
	var li_shortcode = '';
	jQuery('.sp_listitems_li_lt').each(function(index, element) {
		 li_shortcode += '[msu_li';
		 if(jQuery('.sp_listitems_li_class:eq('+index+')').val() != ''){
		   li_shortcode += ' class="'+jQuery('.sp_listitems_li_class:eq('+index+')').val()+'"';
	     }
	    if(jQuery('.sp_listitems_li_id:eq('+index+')').val() != ''){
		   li_shortcode += ' id="'+jQuery('.sp_listitems_li_id:eq('+index+')').val()+'"';
	     }
		 li_shortcode += ']';	
		 li_shortcode += jQuery('.sp_listitems_li_lt:eq('+index+')').val();	
		 li_shortcode += '[/msu_li]';
		 //alert(li_shortcode);
});	
if(li_shortcode) {
     jQuery('.hide_for_li').val(li_shortcode); 
	 generate_listitem_shortcode(); 
}
}