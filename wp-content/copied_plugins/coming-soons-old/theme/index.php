<!DOCTYPE html>
<html lang="en">
	<?php
	if ( ! defined( 'ABSPATH' ) ) exit;
	global $wpdb;
	$table_name1 = $wpdb->prefix . "rich_web_cs_form_fields";
	$table_name2 = $wpdb->prefix . "rich_web_cs_forms_options";
	$table_name3 = $wpdb->prefix . "rich_web_cs_forms_themes1";
	$table_name4 = $wpdb->prefix . "rich_web_cs_forms_themes2";
	$table_name5 = $wpdb->prefix . "rich_web_cs_forms_themes3";

	$Rich_Web_CS_Forms_Fields = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name1 WHERE id > %d order by id", 0));
	$Rich_Web_CS_Forms_Option = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE id > %d order by id", 0));
	$Rich_Web_CS_Forms_Theme1 = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE id > %d order by id", 0));
	$Rich_Web_CS_Forms_Theme2 = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE id > %d order by id", 0));
	$Rich_Web_CS_Forms_Theme3 = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name5 WHERE id > %d order by id", 0));
	$Rich_Web_CS_Forms_Fields_File = $wpdb->get_var($wpdb->prepare("SELECT CS_Rich_Web_Forms_Fields_O2 FROM $table_name1 WHERE CS_Forms_Fields_Type = %s order by id", 'File'));
	$Rich_Web_CS_Forms_Fields_FileExist = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name1 WHERE CS_Forms_Fields_Type = %s order by id", 'File'));
	$Rich_Web_CS_Forms_Fields_DateExist = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name1 WHERE CS_Forms_Fields_Type = %s order by id", 'DatePicker'));
	$Rich_Web_CS_Forms_Fields_TimeExist = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name1 WHERE CS_Forms_Fields_Type = %s order by id", 'TimePicker'));
	$Rich_Web_CS_Forms_Fields_Phone = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name1 WHERE CS_Forms_Fields_Type = %s order by id", 'Phone'));
	$Rich_Web_CS_Forms_Fields_Country = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name1 WHERE CS_Forms_Fields_Type = %s order by id", 'Country'));
	$Rich_Web_CS_Forms_Fields_Privacy = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name1 WHERE CS_Forms_Fields_Type = %s order by id", 'Privacy Policy'));

	$rw_cs_seo = unserialize(get_option('rw_cs_seo')); $rw_cs_fic = unserialize(get_option('rw_cs_fic')); $rw_cs_loader = unserialize(get_option('rw_cs_loader')); $rw_cs_logo = unserialize(get_option('rw_cs_logo')); $rw_cs_heading = unserialize(get_option('rw_cs_heading')); $rw_cs_description = unserialize(get_option('rw_cs_description')); $rw_cs_footer = unserialize(get_option('rw_cs_footer')); $rw_cs_countdown = unserialize(get_option('rw_cs_countdown')); $rw_cs_background = unserialize(get_option('rw_cs_background')); $rw_cs_bgsl_array = $rw_cs_background['rw_cs_bg_image_slideshow']; $img_sl_array=explode(';',$rw_cs_bgsl_array); $rw_cs_bgslv_array = $rw_cs_background['rw_cs_bg_image_video_slideshow']; $img_slv_array=explode(';',$rw_cs_bgslv_array); $rw_cs_button = unserialize(get_option('rw_cs_button')); $rw_cs_order = unserialize(get_option('rw_cs_order')); $rw_cs_ord_text = $rw_cs_order['rw_cs_cont_ordering']; $rw_cs_ord_array=explode(';',$rw_cs_ord_text); $rw_cs_info = unserialize(get_option('rw_cs_info'));

	$rw_cs_social = unserialize(get_option('rw_cs_social')); $rw_cs_soc_type = $rw_cs_social['rw_cs_social_Type']; $rw_soc_type_array=explode(';',$rw_cs_soc_type); $rw_cs_soc_url = $rw_cs_social['rw_cs_social_Url']; $rw_soc_url_array=explode(';',$rw_cs_soc_url); $rw_cs_soc_bw = $rw_cs_social['rw_cs_social_BW']; $rw_soc_bw_array=explode(';',$rw_cs_soc_bw); $rw_cs_soc_r = $rw_cs_social['rw_cs_social_BR']; $rw_soc_r_array=explode(';',$rw_cs_soc_r); $rw_cs_soc_s = $rw_cs_social['rw_cs_social_S']; $rw_soc_s_array=explode(';',$rw_cs_soc_s); $rw_cs_soc_bgc = $rw_cs_social['rw_cs_social_BgC']; $rw_soc_bgc_array=explode(';',$rw_cs_soc_bgc); $rw_cs_soc_c = $rw_cs_social['rw_cs_social_C']; $rw_soc_c_array=explode(';',$rw_cs_soc_c); $rw_cs_soc_bc = $rw_cs_social['rw_cs_social_BC']; $rw_soc_bc_array=explode(';',$rw_cs_soc_bc); $rw_cs_soc_hbgc = $rw_cs_social['rw_cs_social_HBgC']; $rw_soc_hbgc_array=explode(';',$rw_cs_soc_hbgc); $rw_cs_soc_hc = $rw_cs_social['rw_cs_social_HC']; $rw_soc_hc_array=explode(';',$rw_cs_soc_hc); $rw_cs_soc_hbc = $rw_cs_social['rw_cs_social_HBC']; $rw_soc_hbc_array=explode(';',$rw_cs_soc_hbc); $rw_cs_soc_pv = $rw_cs_social['rw_cs_social_PV']; $rw_soc_pv_array=explode(';',$rw_cs_soc_pv); $rw_cs_soc_ph = $rw_cs_social['rw_cs_social_PH']; $rw_soc_ph_array=explode(';',$rw_cs_soc_ph);

	$rw_cs_content = unserialize(get_option('rw_cs_content'));
	?>
	<head>
		<?php require_once('RW_Seo_Theme.php'); ?>
	</head>
	<body>
	<style>
		#RW_CS_Content { text-align:center; }
		.RW_Content
		{
			overflow:auto;
			padding-top:<?php echo $rw_cs_content["rw_cs_content_padding_top"]; ?>px;
			padding-left:<?php echo $rw_cs_content["rw_cs_content_padding_left"]; ?>px;
			padding-right:<?php echo $rw_cs_content["rw_cs_content_padding_right"]; ?>px;
			box-sizing:border-box;
			width:<?php echo $rw_cs_content["rw_cs_content_width"]; ?>px;
			max-width:100%;
			display:inline-block;
			
		}
		<?php if($rw_cs_content["rw_cs_content_position"]=="left"){ ?>
			.RW_Content { float:left; }
		<?php }else if($rw_cs_content["rw_cs_content_position"]=="right"){ ?>
			.RW_Content { float:right; }
		<?php } ?>
	</style>
	<div id="RW_CS_Content">
		<div class="RW_Content" >
		<?php
			require_once('RW_Background_Theme.php');
			for($i=0;$i<count($rw_cs_ord_array);$i++)
			{
				if($rw_cs_ord_array[$i]=="Logo") { require_once('RW_Logo_Theme.php'); }
				else if($rw_cs_ord_array[$i]=="Heading") { require_once('RW_Heading_Theme.php'); }
				else if($rw_cs_ord_array[$i]=="Countdown") { require_once('RW_Countdown_Theme.php'); }
				else if($rw_cs_ord_array[$i]=="Description") { require_once('RW_Description_Theme.php'); }
				else if($rw_cs_ord_array[$i]=="Buttons") { require_once('RW_Buttons_Theme.php'); }
				else if($rw_cs_ord_array[$i]=="Social Buttons") { require_once('RW_Social_Theme.php'); }
			}
			require_once('RW_Footer_Theme.php');
		?>
		</div>
	</div>
	<?php require_once('RW_Loader_Theme.php'); ?>
	<input type="text" style="display:none;" class="rw_cs_content_padding_top" value="<?php echo $rw_cs_content["rw_cs_content_padding_top"]; ?>" />
	<script src="<?php echo plugins_url('/js/init.js',__FILE__);?>" ></script>
	<script type="text/javascript">
		jQuery(document).ready(function(){
			var rw_cs_content_padding_top=parseInt(jQuery('.rw_cs_content_padding_top').val());
			function resp(){ jQuery('.RW_Content').css("padding-top",rw_cs_content_padding_top*jQuery(window).height()/1000); }
			resp();
			jQuery(window).resize(function(){ resp(); })
		})
	</script>
	</body>
</html>