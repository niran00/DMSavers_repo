<?php
	add_action( 'wp_ajax_Rich_Web_CS_Forms_SCHF', 'Rich_Web_CS_Forms_SCHF_Callback' );
	add_action( 'wp_ajax_nopriv_Rich_Web_CS_Forms_SCHF', 'Rich_Web_CS_Forms_SCHF_Callback' );

	function Rich_Web_CS_Forms_SCHF_Callback()
	{
		global $wpdb;

		$table_name8 = $wpdb->prefix . "rich_web_cs_forms_info";

		$Rich_Web_CS_Forms_all = $_POST['postData'];
		parse_str("$Rich_Web_CS_Forms_all",$myArray);
		$_POSTED = $myArray;

		$Rich_Web_CS_Forms_Submission_CHFolder=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_Submission_CHFolder']);

		if($Rich_Web_CS_Forms_Submission_CHFolder=='all')
		{
			$Rich_Web_CS_Forms_Info=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name8 WHERE SpamText=%s", 'no spam'));
		}
		else if($Rich_Web_CS_Forms_Submission_CHFolder=='spam')
		{
			$Rich_Web_CS_Forms_Info=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name8 WHERE SpamText=%s", 'spam'));
		}
		else
		{
			$Rich_Web_CS_Forms_Info=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name8 WHERE SpamText=%s AND ReadNoRead=%s", 'no spam', $Rich_Web_CS_Forms_Submission_CHFolder));
		}

		if ($Rich_Web_CS_Forms_Info) 
		{
			print_r($Rich_Web_CS_Forms_Info);
		}
		die();
	}

	add_action( 'wp_ajax_Rich_Web_CS_Forms_Submission_Mess', 'Rich_Web_CS_Forms_Submission_Mess_Callback' );
	add_action( 'wp_ajax_nopriv_Rich_Web_CS_Forms_Submission_Mess', 'Rich_Web_CS_Forms_Submission_Mess_Callback' );

	function Rich_Web_CS_Forms_Submission_Mess_Callback()
	{
		global $wpdb;

		$table_name6 = $wpdb->prefix . "rich_web_cs_forms_saved";
		$table_name8 = $wpdb->prefix . "rich_web_cs_forms_info";

		$Rich_Web_CS_Forms_all = $_POST['postData'];
		parse_str("$Rich_Web_CS_Forms_all",$myArray);
		$_POSTED = $myArray;

		$Submission_ID = sanitize_text_field($_POST['Submission_ID']);

		$Rich_Web_CS_Forms_Message_RNR=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name8 WHERE id=%d", $Submission_ID));

		if($Rich_Web_CS_Forms_Message_RNR[0]->ReadNoRead == 'unread')
		{
			$wpdb->query($wpdb->prepare("UPDATE $table_name8 set ReadNoRead=%s WHERE id=%d", 'read', $Submission_ID));
		}

		$Rich_Web_CS_Forms_Message=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name6 WHERE Customer_ID=%s", $Submission_ID));
		if ($Rich_Web_CS_Forms_Message) 
		{
			print_r($Rich_Web_CS_Forms_Message);
		}
		die();
	}

	add_action( 'wp_ajax_Rich_Web_CS_Forms_Submission_SNS', 'Rich_Web_CS_Forms_Submission_SNS_Callback' );
	add_action( 'wp_ajax_nopriv_Rich_Web_CS_Forms_Submission_SNS', 'Rich_Web_CS_Forms_Submission_SNS_Callback' );

	function Rich_Web_CS_Forms_Submission_SNS_Callback()
	{
		global $wpdb;
		$table_name8 = $wpdb->prefix . "rich_web_cs_forms_info";

		$Rich_Web_CS_Forms_all = $_POST['postData'];
		parse_str("$Rich_Web_CS_Forms_all",$myArray);
		$_POSTED = $myArray;

		$Submission_ID = sanitize_text_field($_POST['Submission_ID']);

		$Rich_Web_Forms_Info=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name8 WHERE id=%d", $Submission_ID));

		if($Rich_Web_Forms_Info[0]->SpamText == 'spam')
		{
			$wpdb->query($wpdb->prepare("UPDATE $table_name8 set SpamText=%s WHERE id=%d", 'no spam', $Submission_ID));
		}
		else
		{
			$wpdb->query($wpdb->prepare("UPDATE $table_name8 set SpamText=%s WHERE id=%d", 'spam', $Submission_ID));
		}
		die();
	}

	add_action( 'wp_ajax_Rich_Web_CS_Forms_Submission_Del', 'Rich_Web_CS_Forms_Submission_Del_Callback' );
	add_action( 'wp_ajax_nopriv_Rich_Web_CS_Forms_Submission_Del', 'Rich_Web_CS_Forms_Submission_Del_Callback' );

	function Rich_Web_CS_Forms_Submission_Del_Callback()
	{
		$Rich_Web_CS_Forms_all = $_POST['postData'];
		parse_str("$Rich_Web_CS_Forms_all",$myArray);
		$_POSTED = $myArray;
		$Submission_ID = sanitize_text_field($_POST['Submission_ID']);

		global $wpdb;
		$table_name6 = $wpdb->prefix . "rich_web_cs_forms_saved";
		$table_name8 = $wpdb->prefix . "rich_web_cs_forms_info";


		$wpdb->query($wpdb->prepare("DELETE FROM $table_name6 WHERE Customer_ID=%s", $Submission_ID));
		$wpdb->query($wpdb->prepare("DELETE FROM $table_name8 WHERE id=%d", $Submission_ID));

		$Rich_Web_CS_Forms_Submission_CHFolder=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_Submission_CHFolder']);

		if($Rich_Web_CS_Forms_Submission_CHFolder=='all')
		{
			$Rich_Web_CS_Forms_Info=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name8 WHERE SpamText=%s", 'no spam'));
		}
		else if($Rich_Web_CS_Forms_Submission_CHFolder=='spam')
		{
			$Rich_Web_CS_Forms_Info=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name8 WHERE SpamText=%s", 'spam'));
		}
		else
		{
			$Rich_Web_CS_Forms_Info=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name8 WHERE SpamText=%s AND ReadNoRead=%s", 'no spam', $Rich_Web_CS_Forms_Submission_CHFolder));
		}

		if ($Rich_Web_CS_Forms_Info) 
		{
			print_r($Rich_Web_CS_Forms_Info);
		}
		die();
	}
?>