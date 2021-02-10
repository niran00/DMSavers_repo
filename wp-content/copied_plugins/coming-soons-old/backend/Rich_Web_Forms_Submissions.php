<?php
	if(!defined('ABSPATH')) exit;
	if(!current_user_can('manage_options'))
	{
		die('Access Denied');
	}
	global $wpdb;

	$table_name2 = $wpdb->prefix . "rich_web_cs_forms_options";
	$table_name8 = $wpdb->prefix . "rich_web_cs_forms_info";

	$Rich_Web_CS_Forms_Info=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name8 WHERE SpamText=%s", 'no spam'));
	$Rich_Web_CS_Forms_Options=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE id>%d", 0));
?>
<form id="save_form_CS_SO">
	<div class='Rich_Web_CS_Forms_Content_Submission'>
		<div class='Rich_Web_CS_Forms_Content_Data2_Submission'>
			<input type="text" style="display: none;" id="Rich_Web_CS_Forms_Spam" value="<?php echo $Rich_Web_CS_Forms_Options[0]->Rich_Web_CS_Forms_O_9;?>">
			<input type="text" style="display: none;" id="Rich_Web_CS_Forms_AAU" value="<?php echo admin_url("admin-ajax.php"); ?>">
			<input type="text" style="display: none;" id="Rich_Web_CS_Forms_LFI" value="<?php echo plugins_url('/Images/Flags/',__FILE__);?>">
			<img src="<?php echo plugins_url('/Images/Submissions.PNG',__FILE__);?>">
		</div>
		<div class="Rich_Web_CS_Forms_Submission_Div_Main" onclick="Rich_Web_CS_Forms_Submission_Div_Main_Cl()"></div>
		<div class="Rich_Web_CS_Forms_Submission_Div"></div>
	</div>
</form>