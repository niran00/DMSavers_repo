<?php
	add_action( 'wp_ajax_Rich_Web_CS_Forms_Submit', 'Rich_Web_CS_Forms_Submit_Callback' );
	add_action( 'wp_ajax_nopriv_Rich_Web_CS_Forms_Submit', 'Rich_Web_CS_Forms_Submit_Callback' );

	function Rich_Web_CS_Forms_Submit_Callback()
	{
		global $wpdb;

		$table_name  = $wpdb->prefix . "rich_web_cs_font_family";
		$table_name1 = $wpdb->prefix . "rich_web_cs_form_fields";
		$table_name2 = $wpdb->prefix . "rich_web_cs_forms_options";
		$table_name3 = $wpdb->prefix . "rich_web_cs_forms_themes1";
		$table_name4 = $wpdb->prefix . "rich_web_cs_forms_themes2";
		$table_name5 = $wpdb->prefix . "rich_web_cs_forms_themes3";
		$table_name6 = $wpdb->prefix . "rich_web_cs_forms_saved";
		$table_name7 = $wpdb->prefix . "rich_web_cs_forms_mails";
		$table_name8 = $wpdb->prefix . "rich_web_cs_forms_info";
		$table_name9 = $wpdb->prefix . "rich_web_cs_forms_cust_id";

		$Rich_Web_CS_Forms_all = $_POST['postData'];
		parse_str("$Rich_Web_CS_Forms_all",$myArray);
		$_POSTED = $myArray;
		$FilesCount = 0;
		$FilesCount1 = 0;

		$Rich_Web_CS_Forms_Fields = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name1 WHERE id > %d order by id", 0));
		$Rich_Web_CS_Forms_Option = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE id > %d order by id", 0));

		$Rich_Web_CS_Forms_Cust_ID =$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name9 WHERE id > %d order by id desc limit 1",0));
		$Rich_Web_CS_Forms_Cust_ID_New=$Rich_Web_CS_Forms_Cust_ID[0]->Customer_ID + 1;
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name9 (id, Customer_ID) VALUES (%d, %s)", '', $Rich_Web_CS_Forms_Cust_ID_New));

		if ( isset( $_SERVER['HTTP_CLIENT_IP'] ) ) {
			$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
		} elseif ( getenv( 'HTTP_X_FORWARDED_FOR' ) ) {
			$ipaddress = getenv( 'HTTP_X_FORWARDED_FOR' );
		} elseif ( getenv( 'HTTP_X_FORWARDED' ) ) {
			$ipaddress = getenv( 'HTTP_X_FORWARDED' );
		} elseif ( getenv( 'HTTP_FORWARDED_FOR' ) ) {
			$ipaddress = getenv( 'HTTP_FORWARDED_FOR' );
		} elseif ( getenv( 'HTTP_FORWARDED' ) ) {
			$ipaddress = getenv( 'HTTP_FORWARDED' );
		} elseif ( getenv( 'REMOTE_ADDR' ) ) {
			$ipaddress = getenv( 'REMOTE_ADDR' );
		} else {
			$ipaddress = 'UNKNOWN';
		}

		$Recaptcha = '';
		for( $i = 0; $i < count($Rich_Web_CS_Forms_Fields); $i++ )
		{
			if( $Rich_Web_CS_Forms_Fields[$i]->CS_Forms_Fields_Type == 'Captcha' )
			{
				$url='https://www.google.com/recaptcha/api/siteverify';
				$privatekey=$Rich_Web_CS_Forms_Option[0]->Rich_Web_CS_Forms_O_5;
				$response=file_get_contents($url."?secret=".$privatekey."&response=".$_POSTED['g-recaptcha-response']."&remoteip=".$ipaddress);
				$dataOfCaptcha=json_decode($response);
				if( !isset($dataOfCaptcha->success) || $dataOfCaptcha->success!=true )
				{
					$Recaptcha = json_encode(array("ReCaptchaError"=>$Rich_Web_CS_Forms_Option[0]->Rich_Web_CS_Forms_O_10));
				}
			}
		}

		if( $Recaptcha == '')
		{
			$ip_info = [];
			
			
				$ip_info['geoplugin_city'] = 'Unknown';
				$ip_info['geoplugin_region'] = 'Unknown';
				$ip_info['geoplugin_countryName'] = 'Unknown';
				$ip_info['geoplugin_countryCode'] = 'UN';
			

			$wpdb->query($wpdb->prepare("INSERT INTO $table_name8 (id, IPaddress, City, Region, CountryCode, CountryName, ContinentCode, Latitude, Longitude, RegionCode, RegionName, CurrencyCode, CurrencySybmol, CurrencySybmol_UTF8, CountryFlag, Data, SpamText, ReadNoRead) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $ipaddress, $ip_info['geoplugin_city'], $ip_info['geoplugin_region'], $ip_info['geoplugin_countryCode'], $ip_info['geoplugin_countryName'], $ip_info['geoplugin_continentCode'], $ip_info['geoplugin_latitude'], $ip_info['geoplugin_longitude'], $ip_info['geoplugin_regionCode'], $ip_info['geoplugin_regionName'], $ip_info['geoplugin_currencyCode'], $ip_info['geoplugin_currencySymbol'], $ip_info['geoplugin_currencySymbol_UTF8'], $ip_info['geoplugin_countryCode'] . '.png', date("Y.m.d h:i:sa"), 'no spam', 'unread'));
			
			$attachments = array();

			for( $i = 0; $i < count($Rich_Web_CS_Forms_Fields); $i++ )
			{
				if( $Rich_Web_CS_Forms_Fields[$i]->CS_Forms_Fields_Type == 'File')
				{
					if ( ! function_exists( 'wp_handle_upload' ) ) 
					{
						include_once(ABSPATH . 'wp-admin/includes/file.php');
						include_once(ABSPATH . 'wp-admin/includes/image.php');
						include_once(ABSPATH . 'wp-admin/includes/media.php');
					}
					if(isset($_FILES['Rich_Web_CS_Contact_Form_' . $i]))
					{
						$files = $_FILES['Rich_Web_CS_Contact_Form_' . $i];
						if ($files['name']) 
						{
							$file = array(
								'name' => $files['name'],
								'type' => $files['type'],
								'tmp_name' => $files['tmp_name'],
								'error' => $files['error'],
								'size' => $files['size']
							);
							$upload_overrides = array( 'test_form' => false );
							$upload = wp_handle_upload($file, $upload_overrides);

							if ( $upload && !isset( $upload['error'] ) ) 
							{
								array_push($attachments, $upload['url']);
							}
						}
					}
				}
			}
			if( $Rich_Web_CS_Forms_Option[0]->Rich_Web_CS_Forms_O_6 == 'on' )
			{
				for( $i = 0; $i < count($Rich_Web_CS_Forms_Fields); $i++ )
				{
					if( $Rich_Web_CS_Forms_Fields[$i]->CS_Forms_Fields_Type == 'Text Box' || $Rich_Web_CS_Forms_Fields[$i]->CS_Forms_Fields_Type == 'Textarea' || $Rich_Web_CS_Forms_Fields[$i]->CS_Forms_Fields_Type == 'Select Menu' || $Rich_Web_CS_Forms_Fields[$i]->CS_Forms_Fields_Type == 'Phone' || $Rich_Web_CS_Forms_Fields[$i]->CS_Forms_Fields_Type == 'Radio Box' || $Rich_Web_CS_Forms_Fields[$i]->CS_Forms_Fields_Type == 'Country' )
					{
						$wpdb->query($wpdb->prepare("INSERT INTO $table_name6 (id, Customer_ID, CS_Forms_Fields_Type, CS_Forms_Fields_Text) VALUES (%d, %s, %s, %s)", '', $Rich_Web_CS_Forms_Cust_ID_New, $Rich_Web_CS_Forms_Fields[$i]->CS_Rich_Web_Forms_Fields_O1, str_replace("\&","&", sanitize_text_field(esc_html($_POSTED['Rich_Web_CS_Contact_Form_' . $i])))));
					}
					else if( $Rich_Web_CS_Forms_Fields[$i]->CS_Forms_Fields_Type == 'Email' )
					{
						$wpdb->query($wpdb->prepare("INSERT INTO $table_name6 (id, Customer_ID, CS_Forms_Fields_Type, CS_Forms_Fields_Text) VALUES (%d, %s, %s, %s)", '', $Rich_Web_CS_Forms_Cust_ID_New, $Rich_Web_CS_Forms_Fields[$i]->CS_Rich_Web_Forms_Fields_O1, sanitize_email($_POSTED['Rich_Web_CS_Contact_Form_Email_' . $i])));
					}
					else if($Rich_Web_CS_Forms_Fields[$i]->CS_Forms_Fields_Type == 'DatePicker')
					{
						if($Rich_Web_CS_Forms_Fields[$i]->CS_Rich_Web_Forms_Fields_O7 == 'FromTo')
						{
							$FromToDate = str_replace("\&","&", sanitize_text_field(esc_html($_POSTED['Rich_Web_CS_Contact_Form_' . $i . '_1']))) . ' - ' . str_replace("\&","&", sanitize_text_field(esc_html($_POSTED['Rich_Web_CS_Contact_Form_' . $i . '_2'])));
							$wpdb->query($wpdb->prepare("INSERT INTO $table_name6 (id, Customer_ID, CS_Forms_Fields_Type, CS_Forms_Fields_Text) VALUES (%d, %s, %s, %s)", '', $Rich_Web_CS_Forms_Cust_ID_New, $Rich_Web_CS_Forms_Fields[$i]->CS_Rich_Web_Forms_Fields_O1, $FromToDate));
						}
						else
						{
							$wpdb->query($wpdb->prepare("INSERT INTO $table_name6 (id, Customer_ID, CS_Forms_Fields_Type, CS_Forms_Fields_Text) VALUES (%d, %s, %s, %s)", '', $Rich_Web_CS_Forms_Cust_ID_New, $Rich_Web_CS_Forms_Fields[$i]->CS_Rich_Web_Forms_Fields_O1, str_replace("\&","&", sanitize_text_field(esc_html($_POSTED['Rich_Web_CS_Contact_Form_' . $i])))));
						}
					}
					else if($Rich_Web_CS_Forms_Fields[$i]->CS_Forms_Fields_Type == 'TimePicker')
					{
						if($Rich_Web_CS_Forms_Fields[$i]->CS_Rich_Web_Forms_Fields_O7 == 'FromTo')
						{
							$FromToTime = str_replace("\&","&", sanitize_text_field(esc_html($_POSTED['Rich_Web_CS_Contact_Form_' . $i . '_1']))) . ' - ' . str_replace("\&","&", sanitize_text_field(esc_html($_POSTED['Rich_Web_CS_Contact_Form_' . $i . '_2'])));
							$wpdb->query($wpdb->prepare("INSERT INTO $table_name6 (id, Customer_ID, CS_Forms_Fields_Type, CS_Forms_Fields_Text) VALUES (%d, %s, %s, %s)", '', $Rich_Web_CS_Forms_Cust_ID_New, $Rich_Web_CS_Forms_Fields[$i]->CS_Rich_Web_Forms_Fields_O1, $FromToTime));
						}
						else
						{
							$wpdb->query($wpdb->prepare("INSERT INTO $table_name6 (id, Customer_ID, CS_Forms_Fields_Type, CS_Forms_Fields_Text) VALUES (%d, %s, %s, %s)", '', $Rich_Web_CS_Forms_Cust_ID_New, $Rich_Web_CS_Forms_Fields[$i]->CS_Rich_Web_Forms_Fields_O1, str_replace("\&","&", sanitize_text_field(esc_html($_POSTED['Rich_Web_CS_Contact_Form_' . $i])))));
						}
					}
					else if( $Rich_Web_CS_Forms_Fields[$i]->CS_Forms_Fields_Type == 'Full Name' )
					{
						$wpdb->query($wpdb->prepare("INSERT INTO $table_name6 (id, Customer_ID, CS_Forms_Fields_Type, CS_Forms_Fields_Text) VALUES (%d, %s, %s, %s)", '', $Rich_Web_CS_Forms_Cust_ID_New, $Rich_Web_CS_Forms_Fields[$i]->CS_Rich_Web_Forms_Fields_O1, str_replace("\&","&", sanitize_text_field(esc_html($_POSTED['Rich_Web_CS_Contact_Form_' . $i . '_1']))) . '  ' . str_replace("\&","&", sanitize_text_field(esc_html($_POSTED['Rich_Web_CS_Contact_Form_' . $i . '_2'])))));
					}
					else if( $Rich_Web_CS_Forms_Fields[$i]->CS_Forms_Fields_Type == 'File' )
					{
						$wpdb->query($wpdb->prepare("INSERT INTO $table_name6 (id, Customer_ID, CS_Forms_Fields_Type, CS_Forms_Fields_Text) VALUES (%d, %s, %s, %s)", '', $Rich_Web_CS_Forms_Cust_ID_New, $Rich_Web_CS_Forms_Fields[$i]->CS_Rich_Web_Forms_Fields_O1, $attachments[$FilesCount]));
						$FilesCount++;
					}
					else if($Rich_Web_CS_Forms_Fields[$i]->CS_Forms_Fields_Type == 'Check Box')
					{
						$Rich_Web_CS_Forms_FEditing_CB_Names = explode('qwertyh', $Rich_Web_CS_Forms_Fields[$i]->CS_Rich_Web_Forms_Fields_O5);
						$Rich_Web_CS_Forms_FEditing_CB_NamesCh = array();
						for($j=0; $j<count($Rich_Web_CS_Forms_FEditing_CB_Names); $j++)
						{
							if(strlen(sanitize_text_field($_POSTED['Rich_Web_CS_Contact_Form_' . $i . '_' . $j])) != 0)
							{
								array_push($Rich_Web_CS_Forms_FEditing_CB_NamesCh, str_replace("\&","&", sanitize_text_field(esc_html($_POSTED['Rich_Web_CS_Contact_Form_' . $i . '_' . $j]))));
							}
						}
						$wpdb->query($wpdb->prepare("INSERT INTO $table_name6 (id, Customer_ID, CS_Forms_Fields_Type, CS_Forms_Fields_Text) VALUES (%d, %s, %s, %s)", '', $Rich_Web_CS_Forms_Cust_ID_New, $Rich_Web_CS_Forms_Fields[$i]->CS_Rich_Web_Forms_Fields_O1, implode(", ",$Rich_Web_CS_Forms_FEditing_CB_NamesCh)));
					}
				}
			}
			// Mail to Administrator
			if( $Rich_Web_CS_Forms_Option[0]->Rich_Web_CS_Forms_O_16 == 'on' )
			{
				$Rich_Web_CS_Contact_Form_Message_Body = '<table>';

				for( $i = 0; $i < count($Rich_Web_CS_Forms_Fields); $i++ )
				{
					if( $Rich_Web_CS_Forms_Fields[$i]->CS_Forms_Fields_Type == 'Text Box' || $Rich_Web_CS_Forms_Fields[$i]->CS_Forms_Fields_Type == 'Textarea' || $Rich_Web_CS_Forms_Fields[$i]->CS_Forms_Fields_Type == 'Select Menu' || $Rich_Web_CS_Forms_Fields[$i]->CS_Forms_Fields_Type == 'Phone' || $Rich_Web_CS_Forms_Fields[$i]->CS_Forms_Fields_Type == 'Radio Box' || $Rich_Web_CS_Forms_Fields[$i]->CS_Forms_Fields_Type == 'Country' )
					{
						$Rich_Web_CS_Contact_Form_Message_Body .= '<tr><td><strong>' . $Rich_Web_CS_Forms_Fields[$i]->CS_Rich_Web_Forms_Fields_O1 . '</strong>:</td><td>' . str_replace("\&","&", sanitize_text_field(esc_html($_POSTED['Rich_Web_CS_Contact_Form_' . $i]))) . '</td></tr>';
					}
					else if( $Rich_Web_CS_Forms_Fields[$i]->CS_Forms_Fields_Type == 'Email' )
					{
						$Rich_Web_CS_Contact_Form_Message_Body .= '<tr><td><strong>' . $Rich_Web_CS_Forms_Fields[$i]->CS_Rich_Web_Forms_Fields_O1 . '</strong>:</td><td>' . sanitize_email($_POSTED['Rich_Web_CS_Contact_Form_Email_' . $i]) . '</td></tr>';
					}
					else if($Rich_Web_CS_Forms_Fields[$i]->CS_Forms_Fields_Type == 'DatePicker')
					{
						if($Rich_Web_CS_Forms_Fields[$i]->CS_Rich_Web_Forms_Fields_O7 == 'FromTo')
						{
							$FromToDate = str_replace("\&","&", sanitize_text_field(esc_html($_POSTED['Rich_Web_CS_Contact_Form_' . $i . '_1']))) . ' - ' . str_replace("\&","&", sanitize_text_field(esc_html($_POSTED['Rich_Web_CS_Contact_Form_' . $i . '_2'])));
							$Rich_Web_CS_Contact_Form_Message_Body .= '<tr><td><strong>' . $Rich_Web_CS_Forms_Fields[$i]->CS_Rich_Web_Forms_Fields_O1 . '</strong>:</td><td>' . $FromToDate . '</td></tr>';
						}
						else
						{
							$Rich_Web_CS_Contact_Form_Message_Body .= '<tr><td><strong>' . $Rich_Web_CS_Forms_Fields[$i]->CS_Rich_Web_Forms_Fields_O1 . '</strong>:</td><td>' . str_replace("\&","&", sanitize_text_field(esc_html($_POSTED['Rich_Web_CS_Contact_Form_' . $i]))) . '</td></tr>';
						}
					}
					else if($Rich_Web_CS_Forms_Fields[$i]->CS_Forms_Fields_Type == 'TimePicker')
					{
						if($Rich_Web_CS_Forms_Fields[$i]->CS_Rich_Web_Forms_Fields_O7 == 'FromTo')
						{
							$FromToTime = str_replace("\&","&", sanitize_text_field(esc_html($_POSTED['Rich_Web_CS_Contact_Form_' . $i . '_1']))) . ' - ' . str_replace("\&","&", sanitize_text_field(esc_html($_POSTED['Rich_Web_CS_Contact_Form_' . $i . '_2'])));
							$Rich_Web_CS_Contact_Form_Message_Body .= '<tr><td><strong>' . $Rich_Web_CS_Forms_Fields[$i]->CS_Rich_Web_Forms_Fields_O1 . '</strong>:</td><td>' . $FromToTime . '</td></tr>';
						}
						else
						{
							$Rich_Web_CS_Contact_Form_Message_Body .= '<tr><td><strong>' . $Rich_Web_CS_Forms_Fields[$i]->CS_Rich_Web_Forms_Fields_O1 . '</strong>:</td><td>' . str_replace("\&","&", sanitize_text_field(esc_html($_POSTED['Rich_Web_CS_Contact_Form_' . $i]))) . '</td></tr>';
						}
					}
					else if( $Rich_Web_CS_Forms_Fields[$i]->CS_Forms_Fields_Type == 'Full Name' )
					{
						$Rich_Web_CS_Contact_Form_Message_Body .= '<tr><td><strong>' . $Rich_Web_CS_Forms_Fields[$i]->CS_Rich_Web_Forms_Fields_O1 . '</strong>:</td><td>' . str_replace("\&","&", sanitize_text_field(esc_html($_POSTED['Rich_Web_CS_Contact_Form_' . $i . '_1']))) . '  ' . str_replace("\&","&", sanitize_text_field(esc_html($_POSTED['Rich_Web_CS_Contact_Form_' . $i . '_2']))) . '</td></tr>';
					}
					else if( $Rich_Web_CS_Forms_Fields[$i]->CS_Forms_Fields_Type == 'File' )
					{
						$Rich_Web_CS_Contact_Form_Message_Body .= '<tr><td><strong>' . $Rich_Web_CS_Forms_Fields[$i]->CS_Rich_Web_Forms_Fields_O1 . '</strong>:</td><td>' . $attachments[$FilesCount1] . '</td></tr>';
						$FilesCount1++;
					}
					else if($Rich_Web_CS_Forms_Fields[$i]->CS_Forms_Fields_Type == 'Check Box')
					{
						$Rich_Web_CS_Forms_FEditing_CB_Names = explode('qwertyh', $Rich_Web_CS_Forms_Fields[$i]->CS_Rich_Web_Forms_Fields_O5);
						$Rich_Web_CS_Forms_FEditing_CB_NamesCh = array();
						for($j=0; $j<count($Rich_Web_CS_Forms_FEditing_CB_Names); $j++)
						{
							if(strlen(sanitize_text_field($_POSTED['Rich_Web_CS_Contact_Form_' . $i . '_' . $j])) != 0)
							{
								array_push($Rich_Web_CS_Forms_FEditing_CB_NamesCh, str_replace("\&","&", sanitize_text_field(esc_html($_POSTED['Rich_Web_CS_Contact_Form_' . $i . '_' . $j]))));
							}
						}

						$Rich_Web_CS_Contact_Form_Message_Body .= '<tr><td><strong>' . $Rich_Web_CS_Forms_Fields[$i]->CS_Rich_Web_Forms_Fields_O1 . '</strong>:</td><td>' . implode(", ",$Rich_Web_CS_Forms_FEditing_CB_NamesCh) . '</td></tr>';
					}
				}
				
				$Rich_Web_CS_Contact_Form_Message_Body .= '</table>';

				function wpdocs_set_html_mail_content_type1() {
					return 'text/html';
				}
				add_filter( 'wp_mail_content_type', 'wpdocs_set_html_mail_content_type1' );
				
				$to = $Rich_Web_CS_Forms_Option[0]->Rich_Web_CS_Forms_O_18;
				$subject = html_entity_decode($Rich_Web_CS_Forms_Option[0]->Rich_Web_CS_Forms_O_19);
				if(empty($subject))
				{
					$subject='Coming Soon';
				}
				$body = html_entity_decode($Rich_Web_CS_Forms_Option[0]->Rich_Web_CS_Forms_O_21) . '<br>' . html_entity_decode($Rich_Web_CS_Contact_Form_Message_Body);
				$headers = array('From: ' . html_entity_decode($Rich_Web_CS_Forms_Option[0]->Rich_Web_CS_Forms_O_2) . ' <' . $Rich_Web_CS_Forms_Option[0]->Rich_Web_CS_Forms_O_3 . '>');

				wp_mail( $to, $subject, $body, $headers, $attachments );

				remove_filter( 'wp_mail_content_type', 'wpdocs_set_html_mail_content_type1' );
			}
			// Mail to User
			for( $i = 0; $i < count($Rich_Web_CS_Forms_Fields); $i++ )
			{
				if( $Rich_Web_CS_Forms_Fields[$i]->CS_Forms_Fields_Type == 'Email')
				{
					$Rich_Web_CS_Contact_Form_Email = $_POSTED['Rich_Web_CS_Contact_Form_Email_' . $i];
					$wpdb->query($wpdb->prepare("INSERT INTO $table_name7 (id, Email) VALUES (%d, %s)", '', $Rich_Web_CS_Contact_Form_Email));
				}
			}
			if( $Rich_Web_CS_Contact_Form_Email )
			{
				if( $Rich_Web_CS_Forms_Option[0]->Rich_Web_CS_Forms_O_17 == 'on' )
				{
					function wpdocs_set_html_mail_content_type2() {
						return 'text/html';
					}
					add_filter( 'wp_mail_content_type', 'wpdocs_set_html_mail_content_type2' );
					
					$to = $Rich_Web_CS_Contact_Form_Email;
					$subject = html_entity_decode($Rich_Web_CS_Forms_Option[0]->Rich_Web_CS_Forms_O_20);
					if(empty($subject))
					{
						$subject='Coming Soon';
					}
					$body = html_entity_decode($Rich_Web_CS_Forms_Option[0]->Rich_Web_CS_Forms_O_22);
					$headers = array('From: ' . html_entity_decode($Rich_Web_CS_Forms_Option[0]->Rich_Web_CS_Forms_O_2) . ' <' . $Rich_Web_CS_Forms_Option[0]->Rich_Web_CS_Forms_O_3 . '>');
					wp_mail( $to, $subject, $body, $headers );

					remove_filter( 'wp_mail_content_type', 'wpdocs_set_html_mail_content_type2' );
				}
			}
			
			for( $i = 0; $i < count($Rich_Web_CS_Forms_Fields); $i++ )
			{
				if( $Rich_Web_CS_Forms_Fields[$i]->CS_Forms_Fields_Type == 'Button')
				{
					echo json_encode(array("RichSubmit"=>$Rich_Web_CS_Forms_Fields[$i]->CS_Rich_Web_Forms_Fields_O3,"RichSubmitURL"=>$Rich_Web_CS_Forms_Fields[$i]->CS_Rich_Web_Forms_Fields_O4,"RichSubmitMessage"=>html_entity_decode($Rich_Web_CS_Forms_Option[0]->Rich_Web_CS_Forms_O_7)));
				}
			}
		}
		else
		{
			echo $Recaptcha;
		}

		die();
	}
?>