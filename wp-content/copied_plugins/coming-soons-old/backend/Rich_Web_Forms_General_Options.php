<?php
	if ( ! defined( 'ABSPATH' ) ) exit;
	global $wpdb;
	$table_name2 = $wpdb->prefix . "rich_web_cs_forms_options";

	$Rich_Web_CS_Forms_GO=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE id > %d order by id", 0));
	if($Rich_Web_CS_Forms_GO[0]->Rich_Web_CS_Forms_O_6=='on'){ $Rich_Web_CS_Forms_O_6='checked' ;}
	if($Rich_Web_CS_Forms_GO[0]->Rich_Web_CS_Forms_O_16=='on'){ $Rich_Web_CS_Forms_O_16='checked' ;}
	if($Rich_Web_CS_Forms_GO[0]->Rich_Web_CS_Forms_O_17=='on'){ $Rich_Web_CS_Forms_O_17='checked' ;}
?>
<form id="Rich_Web_CCS_Form_GO">
	<div class='Rich_Web_CS_Forms_Content_Option'>
		<div class='Rich_Web_CS_Forms_Content_Data2_Option'>
			<table class="Rich_Web_CS_Forms_Content_Table_Option3">
				<tr>
					<td colspan="2">Your Form Settings</td>
				</tr>
				<tr>
					<td>Send Emails From Name</td>
					<td>Send Emails From Email <i class="Rich_web_Subject_Icon rich_web rich_web-question-circle-o" title="Make sure the email is from the same domain as your website to avoid being marked as spam."></i></td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_O_2" id="Rich_Web_CS_Forms_O_2" value="<?php echo html_entity_decode($Rich_Web_CS_Forms_GO[0]->Rich_Web_CS_Forms_O_2);?>">
					</td>
					<td>
						<input type="email" name="Rich_Web_CS_Forms_O_3" id="Rich_Web_CS_Forms_O_3" value="<?php echo $Rich_Web_CS_Forms_GO[0]->Rich_Web_CS_Forms_O_3;?>">
					</td>
				</tr>
				<tr>
					<td>Captcha Public Key <a href="https://www.google.com/recaptcha/admin" target="_blank">Get Key</a></td>
					<td>Captcha Private Key <a href="https://www.google.com/recaptcha/intro/index.html" target="_blank">About Captcha</a></td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_O_4" id="Rich_Web_CS_Forms_O_4" value="<?php echo $Rich_Web_CS_Forms_GO[0]->Rich_Web_CS_Forms_O_4;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_O_5" id="Rich_Web_CS_Forms_O_5" value="<?php echo $Rich_Web_CS_Forms_GO[0]->Rich_Web_CS_Forms_O_5;?>">
					</td>
				</tr>
				<tr>
					<td>Save Submissions To Database</td>
					<td>API Key for Map <a href="https://developers.google.com/maps/documentation/javascript/get-api-key" target="_blank">Get Key</a></td>
				</tr>
				<tr>
					<td>
						<label class="RWCSswitch RWCSswitch-light">
							<input class="RWCSswitch-input" type="checkbox" name="Rich_Web_CS_Forms_O_6" id="Rich_Web_CS_Forms_O_6" <?php echo $Rich_Web_CS_Forms_O_6;?>/>
							<span class="RWCSswitch-label" data-on="Yes" data-off="No"></span> 
							<span class="RWCSswitch-handle"></span> 
						</label>
					</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_O_8" id="Rich_Web_CS_Forms_O_8" value="<?php echo html_entity_decode($Rich_Web_CS_Forms_GO[0]->Rich_Web_CS_Forms_O_8);?>">
					</td>
				</tr>
			</table>
			<table class="Rich_Web_CS_Forms_Content_Table_Option3">
				<tr>
					<td colspan="2">Form Messages</td>
				</tr>
				<tr>
					<td>Sender's message was sent successfully</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_O_7" id="Rich_Web_CS_Forms_O_7" value="<?php echo html_entity_decode($Rich_Web_CS_Forms_GO[0]->Rich_Web_CS_Forms_O_7);?>">
					</td>
				</tr>
				<tr>
					<td>Submission was referred to as spam</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_O_9" id="Rich_Web_CS_Forms_O_9" value="<?php echo html_entity_decode($Rich_Web_CS_Forms_GO[0]->Rich_Web_CS_Forms_O_9);?>">
					</td>
				</tr>
				<tr>
					<td>Captcha is Not Validated</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_O_10" id="Rich_Web_CS_Forms_O_10" value="<?php echo html_entity_decode($Rich_Web_CS_Forms_GO[0]->Rich_Web_CS_Forms_O_10);?>">
					</td>
				</tr>
				<tr>
					<td>Required Field Is Empty</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_O_11" id="Rich_Web_CS_Forms_O_11" value="<?php echo html_entity_decode($Rich_Web_CS_Forms_GO[0]->Rich_Web_CS_Forms_O_11);?>">
					</td>
				</tr>
				<tr>
					<td>Email address that the sender entered is invalid</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_O_12" id="Rich_Web_CS_Forms_O_12" value="<?php echo html_entity_decode($Rich_Web_CS_Forms_GO[0]->Rich_Web_CS_Forms_O_12);?>">
					</td>
				</tr>
			</table>
			<table class="Rich_Web_CS_Forms_Content_Table_Option4">
				<tr>
					<td colspan="2">Email To Administrator</td>
					<td colspan="2">Email To User</td>
				</tr>
				<tr>
					<td>Send Email For Each Submission</td>
					<td>
						<label class="RWCSswitch RWCSswitch-light">
							<input class="RWCSswitch-input" type="checkbox" name="Rich_Web_CS_Forms_O_16" id="Rich_Web_CS_Forms_O_16" <?php echo $Rich_Web_CS_Forms_O_16;?>/>
							<span class="RWCSswitch-label" data-on="Yes" data-off="No"></span> 
							<span class="RWCSswitch-handle"></span> 
						</label>
					</td>
					<td>Send Email To User</td>
					<td>
						<label class="RWCSswitch RWCSswitch-light">
							<input class="RWCSswitch-input" type="checkbox" name="Rich_Web_CS_Forms_O_17" id="Rich_Web_CS_Forms_O_17" <?php echo $Rich_Web_CS_Forms_O_17;?>/>
							<span class="RWCSswitch-label" data-on="Yes" data-off="No"></span> 
							<span class="RWCSswitch-handle"></span> 
						</label>
					</td>
				</tr>
				<tr>
					<td>Administrator Email</td>
					<td>
						<input type="email" name="Rich_Web_CS_Forms_O_18" id="Rich_Web_CS_Forms_O_18" value="<?php echo $Rich_Web_CS_Forms_GO[0]->Rich_Web_CS_Forms_O_18;?>">
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>Message Subject <i class="Rich_web_Subject_Icon rich_web rich_web-question-circle-o" title="If you leave this field empty, the name of the form will be used as the subject of the email."></i></td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_O_19" id="Rich_Web_CS_Forms_O_19" value="<?php echo html_entity_decode($Rich_Web_CS_Forms_GO[0]->Rich_Web_CS_Forms_O_19);?>">
					</td>
					<td>Message Subject <i class="Rich_web_Subject_Icon rich_web rich_web-question-circle-o" title="If you leave this field empty, the name of the form will be used as the subject of the email."></i></td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_O_20" id="Rich_Web_CS_Forms_O_20" value="<?php echo html_entity_decode($Rich_Web_CS_Forms_GO[0]->Rich_Web_CS_Forms_O_20);?>">
					</td>
				</tr>
				<tr>
					<td colspan="2">Message</td>
					<td colspan="2">Message</td>
				</tr>
				<tr>
					<td colspan="2">
						<textarea id="Rich_Web_CS_Forms_O_21">
							<?php echo html_entity_decode($Rich_Web_CS_Forms_GO[0]->Rich_Web_CS_Forms_O_21);?>
						</textarea>
						<input type="text" style="display: none;" id="Rich_Web_CS_Forms_O_21_1" name="Rich_Web_CS_Forms_O_21">
					</td>
					<td colspan="2">
						<textarea id="Rich_Web_CS_Forms_O_22">
							<?php echo html_entity_decode($Rich_Web_CS_Forms_GO[0]->Rich_Web_CS_Forms_O_22);?>
						</textarea>
						<input type="text" style="display: none;" id="Rich_Web_CS_Forms_O_22_1" name="Rich_Web_CS_Forms_O_22">
					</td>
				</tr>
			</table>
		</div>
		<div style="text-align: right;">
			<input type="button" class="RW_CS_Button" onclick="RW_CS_Form_GO()" value="Save Changes">
		</div>
	</div>
</form>
<?php
	if(isset($_POST['save_form_CS_GO']) == 'save_form_CS_GO')
	{
		$Rich_Web_CS_Forms_all = $_POST['postData'];
		parse_str("$Rich_Web_CS_Forms_all",$myArray);
		$_POSTED = $myArray;

		global $wpdb;
		$table_name2 = $wpdb->prefix . "rich_web_cs_forms_options";

		$Rich_Web_CS_Forms_O_1 = ''; $Rich_Web_CS_Forms_O_2 = str_replace("\&","&", sanitize_text_field(esc_html($_POSTED['Rich_Web_CS_Forms_O_2']))); $Rich_Web_CS_Forms_O_3 = sanitize_email($_POSTED['Rich_Web_CS_Forms_O_3']); $Rich_Web_CS_Forms_O_4 = sanitize_text_field($_POSTED['Rich_Web_CS_Forms_O_4']); $Rich_Web_CS_Forms_O_5 = sanitize_text_field($_POSTED['Rich_Web_CS_Forms_O_5']); $Rich_Web_CS_Forms_O_6 = sanitize_text_field($_POSTED['Rich_Web_CS_Forms_O_6']); $Rich_Web_CS_Forms_O_7 = str_replace("\&","&", sanitize_text_field(esc_html($_POSTED['Rich_Web_CS_Forms_O_7']))); $Rich_Web_CS_Forms_O_8 = str_replace("\&","&", sanitize_text_field(esc_html($_POSTED['Rich_Web_CS_Forms_O_8']))); $Rich_Web_CS_Forms_O_9 = str_replace("\&","&", sanitize_text_field(esc_html($_POSTED['Rich_Web_CS_Forms_O_9']))); $Rich_Web_CS_Forms_O_10 = str_replace("\&","&", sanitize_text_field(esc_html($_POSTED['Rich_Web_CS_Forms_O_10']))); $Rich_Web_CS_Forms_O_11 = str_replace("\&","&", sanitize_text_field(esc_html($_POSTED['Rich_Web_CS_Forms_O_11']))); $Rich_Web_CS_Forms_O_12 = str_replace("\&","&", sanitize_text_field(esc_html($_POSTED['Rich_Web_CS_Forms_O_12']))); $Rich_Web_CS_Forms_O_13 = ''; $Rich_Web_CS_Forms_O_14 = ''; $Rich_Web_CS_Forms_O_15 = ''; $Rich_Web_CS_Forms_O_16 = sanitize_text_field($_POSTED['Rich_Web_CS_Forms_O_16']); $Rich_Web_CS_Forms_O_17 = sanitize_text_field($_POSTED['Rich_Web_CS_Forms_O_17']); $Rich_Web_CS_Forms_O_18 = sanitize_email($_POSTED['Rich_Web_CS_Forms_O_18']); $Rich_Web_CS_Forms_O_19 = str_replace("\&","&", sanitize_text_field(esc_html($_POSTED['Rich_Web_CS_Forms_O_19']))); $Rich_Web_CS_Forms_O_20 = str_replace("\&","&", sanitize_text_field(esc_html($_POSTED['Rich_Web_CS_Forms_O_20']))); $Rich_Web_CS_Forms_O_21 = str_replace("\&","&", sanitize_text_field(esc_html($_POSTED['Rich_Web_CS_Forms_O_21']))); $Rich_Web_CS_Forms_O_22 = str_replace("\&","&", sanitize_text_field(esc_html($_POSTED['Rich_Web_CS_Forms_O_22'])));
		$wpdb->query($wpdb->prepare("UPDATE $table_name2 set Rich_Web_CS_Forms_O_1 = %s, Rich_Web_CS_Forms_O_2 = %s, Rich_Web_CS_Forms_O_3 = %s, Rich_Web_CS_Forms_O_4 = %s, Rich_Web_CS_Forms_O_5 = %s, Rich_Web_CS_Forms_O_6 = %s, Rich_Web_CS_Forms_O_7 = %s, Rich_Web_CS_Forms_O_8 = %s, Rich_Web_CS_Forms_O_9 = %s, Rich_Web_CS_Forms_O_10 = %s, Rich_Web_CS_Forms_O_11 = %s, Rich_Web_CS_Forms_O_12 = %s, Rich_Web_CS_Forms_O_13 = %s, Rich_Web_CS_Forms_O_14 = %s, Rich_Web_CS_Forms_O_15 = %s, Rich_Web_CS_Forms_O_16 = %s, Rich_Web_CS_Forms_O_17 = %s, Rich_Web_CS_Forms_O_18 = %s, Rich_Web_CS_Forms_O_19 = %s, Rich_Web_CS_Forms_O_20 = %s, Rich_Web_CS_Forms_O_21 = %s, Rich_Web_CS_Forms_O_22 = %s WHERE id > %d", $Rich_Web_CS_Forms_O_1, $Rich_Web_CS_Forms_O_2, $Rich_Web_CS_Forms_O_3, $Rich_Web_CS_Forms_O_4, $Rich_Web_CS_Forms_O_5, $Rich_Web_CS_Forms_O_6, $Rich_Web_CS_Forms_O_7, $Rich_Web_CS_Forms_O_8, $Rich_Web_CS_Forms_O_9, $Rich_Web_CS_Forms_O_10, $Rich_Web_CS_Forms_O_11, $Rich_Web_CS_Forms_O_12, $Rich_Web_CS_Forms_O_13, $Rich_Web_CS_Forms_O_14, $Rich_Web_CS_Forms_O_15, $Rich_Web_CS_Forms_O_16, $Rich_Web_CS_Forms_O_17, $Rich_Web_CS_Forms_O_18, $Rich_Web_CS_Forms_O_19, $Rich_Web_CS_Forms_O_20, $Rich_Web_CS_Forms_O_21, $Rich_Web_CS_Forms_O_22, 0));
		die();
	}
?>