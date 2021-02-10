<?php
	if ( ! defined( 'ABSPATH' ) ) exit;
	global $wpdb;
	$table_name1 = $wpdb->prefix . "rich_web_cs_form_fields";

	$Rich_Web_CS_Forms_Dat=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name1 WHERE id > %d order by id", 0));
?>
<form id="Rich_Web_CCS_Form">
	<div class="Rich_Web_CS_Forms_Fixed_Div"></div>
	<div class="Rich_Web_CS_Forms_Absolute_Div">
		<div class="Rich_Web_CS_Forms_Relative_Div">
			<p> Are you sure you want to remove ? </p>
			<span class="Rich_Web_CS_Forms_Relative_No">No</span>
			<span class="Rich_Web_CS_Forms_Relative_Yes">Yes</span>
		</div>
	</div>
	<input type='text' style='display:none;' id="Rich_Web_CS_Forms_New_Co" name='Rich_Web_CS_Forms_New_Co' value="<?php echo count($Rich_Web_CS_Forms_Dat);?>">
	<table class="Rich_Web_CS_Forms_Fields">
		<tr>
			<td onclick="Rich_Web_CS_Forms_Fields_Clicked('Text Box')">Text Box <i style="margin-left: 10px;" class="rich_web rich_web-server" aria-hidden="true"></i></td>
			<td onclick="Rich_Web_CS_Forms_Fields_Clicked('Textarea')">Textarea <i style="margin-left: 10px;" class="rich_web rich_web-text-height" aria-hidden="true"></i></td>
			<td onclick="Rich_Web_CS_Forms_Fields_Clicked('Select Menu')">Select Menu <i style="margin-left: 10px;" class="rich_web rich_web-bars" aria-hidden="true"></i></td>
		</tr>
		<tr>
			<td onclick="Rich_Web_CS_Forms_Fields_Clicked('Check Box')">Check Box <i style="margin-left: 10px;" class="rich_web rich_web-check-square-o" aria-hidden="true"></i></td>
			<td onclick="Rich_Web_CS_Forms_Fields_Clicked('Radio Box')">Radio Box <i style="margin-left: 10px;" class="rich_web rich_web-dot-circle-o" aria-hidden="true"></i></td>
			<td onclick="Rich_Web_CS_Forms_Fields_Clicked('File')">File <i style="margin-left: 10px;" class="rich_web rich_web-folder-open-o" aria-hidden="true"></i></td>
		</tr>
		<tr>
			<td onclick="Rich_Web_CS_Forms_Fields_Clicked('Custom Text')">Custom Text <i style="margin-left: 10px;" class="rich_web rich_web-header" aria-hidden="true"></i></td>
			<td onclick="Rich_Web_CS_Forms_Fields_Clicked('Email')">Email <i style="margin-left: 10px;" class="rich_web rich_web-envelope-o" aria-hidden="true"></i></td>
			<td onclick="Rich_Web_CS_Forms_Fields_Clicked('Button')">Button <i style="margin-left: 10px;" class="rich_web rich_web-paper-plane-o" aria-hidden="true"></i></td>
		</tr>
		<tr>
			<td onclick="Rich_Web_CS_Forms_Fields_Clicked('Captcha')">Captcha <i style="margin-left: 10px;" class="rich_web rich_web-user-secret" aria-hidden="true"></i></td>
			<td onclick="Rich_Web_CS_Forms_Fields_Clicked('Divider')">Divider <i style="margin-left: 10px;" class="rich_web rich_web-minus" aria-hidden="true"></i></td>
			<td onclick="Rich_Web_CS_Forms_Fields_Clicked('Space')">Space <i style="margin-left: 10px;" class="rich_web rich_web-arrows-v" aria-hidden="true"></i></td>
		</tr>
		<tr>
			<td onclick="Rich_Web_CS_Forms_Fields_Clicked('Google Map')">Google Map <i style="margin-left: 10px;" class="rich_web rich_web-map-marker" aria-hidden="true"></i></td>
			<td onclick="Rich_Web_CS_Forms_Fields_Clicked_Pro('DatePicker')">DatePicker <i style="margin-left: 10px; margin-right: 10px;" class="rich_web rich_web-calendar" aria-hidden="true"></i> (Pro)</td>
			<td onclick="Rich_Web_CS_Forms_Fields_Clicked_Pro('TimePicker')">TimePicker <i style="margin-left: 10px; margin-right: 10px;" class="rich_web rich_web-clock-o" aria-hidden="true"></i> (Pro)</td>
		</tr>
		<tr>
			<td onclick="Rich_Web_CS_Forms_Fields_Clicked_Pro('Full Name')">Full Name <i style="margin-left: 10px; margin-right: 10px;" class="rich_web rich_web-user-plus" aria-hidden="true"></i> (Pro)</td>
			<td onclick="Rich_Web_CS_Forms_Fields_Clicked_Pro('Phone')">Phone <i style="margin-left: 10px; margin-right: 10px;" class="rich_web rich_web-phone" aria-hidden="true"></i> (Pro)</td>
			<td onclick="Rich_Web_CS_Forms_Fields_Clicked_Pro('Country')">Country <i style="margin-left: 10px; margin-right: 10px;" class="rich_web rich_web-globe" aria-hidden="true"></i> (Pro)</td>
		</tr>
		<tr>
			<td onclick="Rich_Web_CS_Forms_Fields_Clicked_Pro('Privacy Policy')">Privacy Policy <i style="margin-left: 10px; margin-right: 10px;" class="rich_web rich_web-check-square-o" aria-hidden="true"></i> (Pro)</td>
			<td colspan="2"></td>
		</tr>
	</table>
	<div class="Rich_Web_CS_Forms_Fields_Content" id="Rich_Web_CS_Forms_Fields_Content" onmousemove="Rich_Web_CS_Forms_FC_Sortable()">
		<?php for($i = 0; $i < count($Rich_Web_CS_Forms_Dat); $i++){
			if($Rich_Web_CS_Forms_Dat[$i]->CS_Forms_Fields_Width == '100%')
			{
				$Width='100%';
				$Width1='1/1';
			}
			else
			{
				$Width='50%';
				$Width1='1/2';
			}?>
			<div style="width:<?php echo $Width;?>;" class="Rich_Web_CS_Forms_FC" id="Rich_Web_CS_Forms_Field_<?php echo absint($i)+1;?>">
				<div class="Rich_Web_CS_Forms_FC_No">
					<span><?php echo absint($i)+1;?></span>
				</div>
				<div class="Rich_Web_CS_Forms_FC_C">
					<span class="Rich_Web_CS_Forms_FC_C_Span" data-type="minus" onclick="Rich_Web_CS_Forms_FC_C_Span_Clicked(<?php echo absint($i)+1;?>)">-</span>
					<span class="Rich_Web_CS_Forms_FC_C_Span" data-type="plus" onclick="Rich_Web_CS_Forms_FC_C_Span_Clicked(<?php echo absint($i)+1;?>)">+</span>
				</div>
				<div class="Rich_Web_CS_Forms_FC_Lab">
					<label><?php echo $Width1;?></label>
					<label><?php echo $Rich_Web_CS_Forms_Dat[$i]->CS_Forms_Fields_Type;?></label>
					<input type="text" style="display:none" class="Rich_Web_CS_Forms_FF" id="Rich_Web_CS_Forms_Field_<?php echo absint($i)+1;?>" name="Rich_Web_CS_Forms_Field_<?php echo absint($i)+1;?>" value='<?php echo html_entity_decode($Rich_Web_CS_Forms_Dat[$i]->CS_Forms_Fields);?>'>
					<input type="text" style="display:none" class="Rich_Web_CS_Forms_FW" id="Rich_Web_CS_Forms_Field_W_<?php echo absint($i)+1;?>" name="Rich_Web_CS_Forms_Field_W_<?php echo absint($i)+1;?>" value="<?php echo $Rich_Web_CS_Forms_Dat[$i]->CS_Forms_Fields_Width;?>">
					<input type="text" style="display:none" class="Rich_Web_CS_Forms_FT" id="Rich_Web_CS_Forms_Field_T_<?php echo absint($i)+1;?>" name="Rich_Web_CS_Forms_Field_T_<?php echo absint($i)+1;?>" value="<?php echo $Rich_Web_CS_Forms_Dat[$i]->CS_Forms_Fields_Type;?>">
					<input type="text" style="display:none" class="Rich_Web_CS_Forms_FO1" id="Rich_Web_CS_Forms_Field_O1_<?php echo absint($i)+1;?>" name="Rich_Web_CS_Forms_Field_O1_<?php echo absint($i)+1;?>" value='<?php echo html_entity_decode($Rich_Web_CS_Forms_Dat[$i]->CS_Rich_Web_Forms_Fields_O1);?>'>
					<input type="text" style="display:none" class="Rich_Web_CS_Forms_FO2" id="Rich_Web_CS_Forms_Field_O2_<?php echo absint($i)+1;?>" name="Rich_Web_CS_Forms_Field_O2_<?php echo absint($i)+1;?>" value="<?php echo $Rich_Web_CS_Forms_Dat[$i]->CS_Rich_Web_Forms_Fields_O2;?>">
					<input type="text" style="display:none" class="Rich_Web_CS_Forms_FO3" id="Rich_Web_CS_Forms_Field_O3_<?php echo absint($i)+1;?>" name="Rich_Web_CS_Forms_Field_O3_<?php echo absint($i)+1;?>" value="<?php echo $Rich_Web_CS_Forms_Dat[$i]->CS_Rich_Web_Forms_Fields_O3;?>">
					<input type="text" style="display:none" class="Rich_Web_CS_Forms_FO4" id="Rich_Web_CS_Forms_Field_O4_<?php echo absint($i)+1;?>" name="Rich_Web_CS_Forms_Field_O4_<?php echo absint($i)+1;?>" value="<?php echo $Rich_Web_CS_Forms_Dat[$i]->CS_Rich_Web_Forms_Fields_O4;?>">
					<input type="text" style="display:none" class="Rich_Web_CS_Forms_FO5" id="Rich_Web_CS_Forms_Field_O5_<?php echo absint($i)+1;?>" name="Rich_Web_CS_Forms_Field_O5_<?php echo absint($i)+1;?>" value="<?php echo $Rich_Web_CS_Forms_Dat[$i]->CS_Rich_Web_Forms_Fields_O5;?>">
					<input type="text" style="display:none" class="Rich_Web_CS_Forms_FO6" id="Rich_Web_CS_Forms_Field_O6_<?php echo absint($i)+1;?>" name="Rich_Web_CS_Forms_Field_O6_<?php echo absint($i)+1;?>" value="<?php echo $Rich_Web_CS_Forms_Dat[$i]->CS_Rich_Web_Forms_Fields_O6;?>">
					<input type="text" style="display:none" class="Rich_Web_CS_Forms_FO7" id="Rich_Web_CS_Forms_Field_O7_<?php echo absint($i)+1;?>" name="Rich_Web_CS_Forms_Field_O7_<?php echo absint($i)+1;?>" value="<?php echo $Rich_Web_CS_Forms_Dat[$i]->CS_Rich_Web_Forms_Fields_O7;?>">
					<input type="text" style="display:none" class="Rich_Web_CS_Forms_FO8" id="Rich_Web_CS_Forms_Field_O8_<?php echo absint($i)+1;?>" name="Rich_Web_CS_Forms_Field_O8_<?php echo absint($i)+1;?>" value="">
					<i class="Rich_Web_CS_Forms_FC_LabEdit rich_web rich_web-pencil" aria-hidden="true"></i>
					<i class="Rich_Web_CS_Forms_FC_LabCopy rich_web rich_web-files-o" aria-hidden="true" onclick="Rich_Web_CS_Forms_FC_LabCopy_Clicked(<?php echo absint($i)+1;?>)"></i>
					<i class="Rich_Web_CS_Forms_FC_LabRemove rich_web rich_web-trash" aria-hidden="true" onclick="Rich_Web_CS_Forms_FC_LabRemove_Clicked(<?php echo absint($i)+1;?>)"></i>
				</div>
			</div>
		<?php } ?>
	</div>
	<div style="text-align: right;">
		<input type="button" class="RW_CS_Button RW_CS_Form_But" onclick="RW_CS_Form()" value="Save Changes">
	</div>
	<div class="Rich_Web_CS_Forms_Fields_Editing Rich_Web_CS_Forms_Fields_Editing_Text" rel="">
		<div class="Rich_Web_CS_Forms_Fields_Edit_Title">
			<span>Text Box</span>
			<i class="Rich_Web_CS_Forms_FC_EditSave rich_web rich_web-floppy-o" aria-hidden="true"></i>
			<i class="Rich_Web_CS_Forms_FC_EditUndo rich_web rich_web-undo" aria-hidden="true"></i>
		</div>
		<div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div1">
				<label>Label:</label> 
					<input type="text" name="Rich_Web_CS_Forms_FEditing_Text_L">
				<label>Label Position:</label> 
					<select name="Rich_Web_CS_Forms_FEditing_Text_LP">
						<option value="Left">        Left        </option>
						<option value="Right">       Right       </option>
						<option value="Placeholder"> Placeholder </option>
						<option value="Above Field"> Above Field </option>
					</select>
				<label>Placeholder Text:</label> 
					<input type="text" name="Rich_Web_CS_Forms_FEditing_Text_P">
			</div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div2">
				<label>Type:</label> 
				<label class="radio-inline">
					<input class="rw_rad" type="radio" name="Rich_Web_CS_Forms_FEditing_Text_T" value="text" checked>Simple Text
				</label>
				<label class="radio-inline">
					<input class="rw_rad" type="radio" name="Rich_Web_CS_Forms_FEditing_Text_T" value="number">Number
				</label>
			</div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div2">
				<label>Required Field:</label>
				<input class="SChbF" type="checkbox" name="Rich_Web_CS_Forms_FEditing_Text_R">
			</div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div2">
				<label>Active Field:</label>
				<input class="SChbF" type="checkbox" name="Rich_Web_CS_Forms_FEditing_Text_A" checked>
			</div>
		</div>
	</div>
	<div class="Rich_Web_CS_Forms_Fields_Editing Rich_Web_CS_Forms_Fields_Editing_Textarea" rel="">
		<div class="Rich_Web_CS_Forms_Fields_Edit_Title">
			<span>Textarea</span>
			<i class="Rich_Web_CS_Forms_FC_EditSave rich_web rich_web-floppy-o" aria-hidden="true"></i>
			<i class="Rich_Web_CS_Forms_FC_EditUndo rich_web rich_web-undo" aria-hidden="true"></i>
		</div>
		<div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div1">
				<label>Label:</label>
					<input type="text" name="Rich_Web_CS_Forms_FEditing_TA_L">
				<label>Label Position:</label>
					<select name="Rich_Web_CS_Forms_FEditing_TA_LP">
						<option value="Left">        Left        </option>
						<option value="Right">       Right       </option>
						<option value="Placeholder"> Placeholder </option>
						<option value="Above Field"> Above Field </option>
					</select>
				<label>Placeholder Text:</label>
					<input type="text" name="Rich_Web_CS_Forms_FEditing_TA_P">
			</div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div2">
				<label>Field Height (px):</label> 
				<div class="Rich_Web_CS_Forms_Range">
					<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_FEditing_TA_H" name="Rich_Web_CS_Forms_FEditing_TA_H" value="80" min="50" max="500">
					<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_FEditing_TA_H_Span">0</span>
				</div>
			</div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div2">
				<label>Required Field:</label>
				<input class="SChbF" type="checkbox" name="Rich_Web_CS_Forms_FEditing_TA_R">
			</div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div2">
				<label>Active Field:</label>
				<input class="SChbF" type="checkbox" name="Rich_Web_CS_Forms_FEditing_TA_A" checked>
			</div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div2">
				<label>Possibility to Resize:</label>
				<input class="SChbF" type="checkbox" name="Rich_Web_CS_Forms_FEditing_TA_ReS">
			</div>
		</div>
	</div>
	<div class="Rich_Web_CS_Forms_Fields_Editing Rich_Web_CS_Forms_Fields_Editing_Select" rel="">
		<div class="Rich_Web_CS_Forms_Fields_Edit_Title">
			<span>Select Menu</span>
			<i class="Rich_Web_CS_Forms_FC_EditSave rich_web rich_web-floppy-o" aria-hidden="true"></i>
			<i class="Rich_Web_CS_Forms_FC_EditUndo rich_web rich_web-undo" aria-hidden="true"></i>
		</div>
		<div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div1">
				<label>Label:</label> 
					<input type="text" name="Rich_Web_CS_Forms_FEditing_SM_L">
				<label>Label Position:</label> 
					<select name="Rich_Web_CS_Forms_FEditing_SM_LP">
						<option value="Left">        Left        </option>
						<option value="Right">       Right       </option>
						<option value="Placeholder"> Placeholder </option>
						<option value="Above Field"> Above Field </option>
					</select>
				<label>Placeholder Text:</label> 
					<input type="text" name="Rich_Web_CS_Forms_FEditing_SM_P">
			</div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div2">
				<label>Field Options:</label>
				<input type="text" name="">
				<i class="Rich_Web_CS_Forms_FC_EditOption rich_web rich_web-plus" aria-hidden="true"></i>
			</div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div3"></div>
		</div>
	</div>
	<div class="Rich_Web_CS_Forms_Fields_Editing Rich_Web_CS_Forms_Fields_Editing_Check" rel="">
		<div class="Rich_Web_CS_Forms_Fields_Edit_Title">
			<span>Check Box</span>
			<i class="Rich_Web_CS_Forms_FC_EditSave rich_web rich_web-floppy-o" aria-hidden="true"></i>
			<i class="Rich_Web_CS_Forms_FC_EditUndo rich_web rich_web-undo" aria-hidden="true"></i>
		</div>
		<div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div1">
				<label>Label:</label> 
					<input type="text" name="Rich_Web_CS_Forms_FEditing_CB_L">
				<label>Label Position:</label> 
					<select name="Rich_Web_CS_Forms_FEditing_CB_LP">
						<option value="Left">        Left        </option>
						<option value="Right">       Right       </option>
						<option value="Above Field"> Above Field </option>
					</select>
			</div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div2">
				<label>Active Field(s):</label>
				<input class="SChbF" type="checkbox" name="Rich_Web_CS_Forms_FEditing_CB_A" checked>
			</div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div2">
				<label>Column Count:</label> 
				<div class="Rich_Web_CS_Forms_Range">
					<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_FEditing_CB_CC" name="Rich_Web_CS_Forms_FEditing_CB_CC" value="1" min="1" max="10">
					<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_FEditing_CB_CC_Span">0</span>
				</div>
				<label>Field Options:</label>
				<input type="text" name="">
				<i class="Rich_Web_CS_Forms_FC_EditChecks rich_web rich_web-plus" aria-hidden="true"></i>
			</div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div3"></div>
		</div>
	</div>
	<div class="Rich_Web_CS_Forms_Fields_Editing Rich_Web_CS_Forms_Fields_Editing_Radio" rel="">
		<div class="Rich_Web_CS_Forms_Fields_Edit_Title">
			<span>Radio Box</span>
			<i class="Rich_Web_CS_Forms_FC_EditSave rich_web rich_web-floppy-o" aria-hidden="true"></i>
			<i class="Rich_Web_CS_Forms_FC_EditUndo rich_web rich_web-undo" aria-hidden="true"></i>
		</div>
		<div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div1">
				<label>Label:</label> 
					<input type="text" name="Rich_Web_CS_Forms_FEditing_RB_L">
				<label>Label Position:</label> 
					<select name="Rich_Web_CS_Forms_FEditing_RB_LP">
						<option value="Left">        Left        </option>
						<option value="Right">       Right       </option>
						<option value="Above Field"> Above Field </option>
					</select>
			</div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div2">
				<label>Active Field(s):</label>
				<input class="SChbF" type="checkbox" name="Rich_Web_CS_Forms_FEditing_RB_A" checked>
			</div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div2">
				<label>Column Count:</label> 
				<div class="Rich_Web_CS_Forms_Range">
					<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_FEditing_RB_CC" name="Rich_Web_CS_Forms_FEditing_RB_CC" value="1" min="1" max="10">
					<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_FEditing_RB_CC_Span">0</span>
				</div>
				<label>Field Options:</label>
				<input type="text" name="">
				<i class="Rich_Web_CS_Forms_FC_EditRadios rich_web rich_web-plus" aria-hidden="true"></i>
			</div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div3"></div>
		</div>
	</div>
	<div class="Rich_Web_CS_Forms_Fields_Editing Rich_Web_CS_Forms_Fields_Editing_File" rel="">
		<div class="Rich_Web_CS_Forms_Fields_Edit_Title">
			<span>File Box</span>
			<i class="Rich_Web_CS_Forms_FC_EditSave rich_web rich_web-floppy-o" aria-hidden="true"></i>
			<i class="Rich_Web_CS_Forms_FC_EditUndo rich_web rich_web-undo" aria-hidden="true"></i>
		</div>
		<div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div1">
				<label>Label:</label> 
					<input type="text" name="Rich_Web_CS_Forms_FEditing_F_L">
				<label>Label Position:</label> 
					<select name="Rich_Web_CS_Forms_FEditing_F_LP">
						<option value="Left">        Left        </option>
						<option value="Right">       Right       </option>
						<option value="Above Field"> Above Field </option>
					</select>
			</div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div2">
				<label>Required Field:</label>
				<input class="SChbF" type="checkbox" name="Rich_Web_CS_Forms_FEditing_F_R">
			</div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div2">
				<label>Botton Text:</label>
				<input type="text" name="Rich_Web_CS_Forms_FEditing_F_FD" style="width: 40%;">
				<div></div>
				<label>Allowed Types:</label>
				<input type="text" name="Rich_Web_CS_Forms_FEditing_F_AT" value=".jpg, .png, .gif, .xlsx, .pdf, .xml, .xmlx, .xls, .xtx" style="width: 40%;">
			</div>
		</div>
	</div>
	<div class="Rich_Web_CS_Forms_Fields_Editing Rich_Web_CS_Forms_Fields_Editing_Custom" rel="">
		<div class="Rich_Web_CS_Forms_Fields_Edit_Title">
			<span>Custom Text</span>
			<i class="Rich_Web_CS_Forms_FC_EditSave rich_web rich_web-floppy-o" aria-hidden="true"></i>
			<i class="Rich_Web_CS_Forms_FC_EditUndo rich_web rich_web-undo" aria-hidden="true"></i>
		</div>
		<div style="padding: none !important;">
			<textarea id="Rich_Web_CS_Forms_Fields_Editing_Custom_ID"></textarea>
		</div>
	</div>
	<div class="Rich_Web_CS_Forms_Fields_Editing Rich_Web_CS_Forms_Fields_Editing_Email" rel="">
		<div class="Rich_Web_CS_Forms_Fields_Edit_Title">
			<span>Email Box</span>
			<i class="Rich_Web_CS_Forms_FC_EditSave rich_web rich_web-floppy-o" aria-hidden="true"></i>
			<i class="Rich_Web_CS_Forms_FC_EditUndo rich_web rich_web-undo" aria-hidden="true"></i>
		</div>
		<div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div1">
				<label>Label:</label> 
					<input type="text" name="Rich_Web_CS_Forms_FEditing_E_L">
				<label>Label Position:</label> 
					<select name="Rich_Web_CS_Forms_FEditing_E_LP">
						<option value="Left">        Left        </option>
						<option value="Right">       Right       </option>
						<option value="Placeholder"> Placeholder </option>
						<option value="Above Field"> Above Field </option>
					</select>
				<label>Placeholder Text:</label> 
					<input type="text" name="Rich_Web_CS_Forms_FEditing_E_P">
			</div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div2">
				<label>Required Field:</label>
				<input class="SChbF" type="checkbox" name="Rich_Web_CS_Forms_FEditing_E_R">
			</div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div2">
				<label>Active Field:</label>
				<input class="SChbF" type="checkbox" name="Rich_Web_CS_Forms_FEditing_E_A" checked>
			</div>
		</div>
	</div>
	<div class="Rich_Web_CS_Forms_Fields_Editing Rich_Web_CS_Forms_Fields_Editing_Button" rel="">
		<div class="Rich_Web_CS_Forms_Fields_Edit_Title">
			<span>Button</span>
			<i class="Rich_Web_CS_Forms_FC_EditSave rich_web rich_web-floppy-o" aria-hidden="true"></i>
			<i class="Rich_Web_CS_Forms_FC_EditUndo rich_web rich_web-undo" aria-hidden="true"></i>
		</div>
		<div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div1">
				<label>Button Text:</label> 
					<input type="text" name="Rich_Web_CS_Forms_FEditing_B_BT">
				<label>Reset Button Text:</label> 
					<input type="text" name="Rich_Web_CS_Forms_FEditing_B_RBT">
			</div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div2">
				<label>Actions After Clicking:</label>
				<select name="Rich_Web_CS_Forms_FEditing_B_AAC" class="Rich_Web_CS_Forms_FC_Edit_AAC" onchange="Rich_Web_CS_Forms_FC_Edit_AAC_Clicked()">
					<option value="Go to URL">        Go to URL        </option>
					<option value="Printing Message"> Printing Message </option>
					<option value="Refresh Page">     Refresh Page     </option>
				</select>
				<label>URL:</label> 
					<input type="text" name="Rich_Web_CS_Forms_FEditing_B_URL">
			</div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div2">
				<label>Show Reset Button:</label>
					<input class="SChbF" type="checkbox" name="Rich_Web_CS_Forms_FEditing_B_SRB">
			</div>
		</div>
	</div>
	<div class="Rich_Web_CS_Forms_Fields_Editing Rich_Web_CS_Forms_Fields_Editing_Divider" rel="">
		<div class="Rich_Web_CS_Forms_Fields_Edit_Title">
			<span>Divider</span>
			<i class="Rich_Web_CS_Forms_FC_EditSave rich_web rich_web-floppy-o" aria-hidden="true"></i>
			<i class="Rich_Web_CS_Forms_FC_EditUndo rich_web rich_web-undo" aria-hidden="true"></i>
		</div>
		<div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div1">
				<label>Width (px):</label> 
					<div class="Rich_Web_CS_Forms_Range">
						<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_FEditing_D_H" name="Rich_Web_CS_Forms_FEditing_D_H" value="0" min="0" max="5">
						<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_FEditing_D_H_Span">0</span>
					</div>
				<label>Style:</label> 
					<select name="Rich_Web_CS_Forms_FEditing_D_S" class="Rich_Web_CS_Forms_DividerS_Field">
						<option value="none">   None   </option>
						<option value="solid">  Solid  </option>
						<option value="dotted"> Dotted </option>
						<option value="dashed"> Dashed </option>
					</select>
			</div>
		</div>
	</div>
	<div class="Rich_Web_CS_Forms_Fields_Editing Rich_Web_CS_Forms_Fields_Editing_Space" rel="">
		<div class="Rich_Web_CS_Forms_Fields_Edit_Title">
			<span>Space</span>
			<i class="Rich_Web_CS_Forms_FC_EditSave rich_web rich_web-floppy-o" aria-hidden="true"></i>
			<i class="Rich_Web_CS_Forms_FC_EditUndo rich_web rich_web-undo" aria-hidden="true"></i>
		</div>
		<div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div1">
				<label>Height (px):</label> 
					<div class="Rich_Web_CS_Forms_Range">
						<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_FEditing_S_W" name="Rich_Web_CS_Forms_FEditing_S_W" value="0" min="0" max="50">
						<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_FEditing_S_W_Span">0</span>
					</div>
			</div>
		</div>
	</div>
	<div class="Rich_Web_CS_Forms_Fields_Editing Rich_Web_CS_Forms_Fields_Editing_Captcha" rel="">
		<div class="Rich_Web_CS_Forms_Fields_Edit_Title">
			<span>Captcha</span>
			<i class="Rich_Web_CS_Forms_FC_EditSave rich_web rich_web-floppy-o" aria-hidden="true"></i>
			<i class="Rich_Web_CS_Forms_FC_EditUndo rich_web rich_web-undo" aria-hidden="true"></i>
		</div>
		<div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div1">
				<label>Theme:</label> 
					<select name="Rich_Web_CS_Forms_FEditing_Captcha_Theme">
						<option value="light"> Light </option>
						<option value="dark">  Dark </option>
					</select>
				<label>Size:</label> 
					<select name="Rich_Web_CS_Forms_FEditing_Captcha_Size">
						<option value="normal">  Normal </option>
						<option value="compact"> Compact </option>
					</select>
			</div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div2">
				<label>Type:</label> 
					<select name="Rich_Web_CS_Forms_FEditing_Captcha_Type">
						<option value="audio"> Audio </option>
						<option value="image"> Image </option>
					</select>
				<label>Position:</label> 
					<select name="Rich_Web_CS_Forms_FEditing_Captcha_Pos">
						<option value="left">  Left  </option>
						<option value="right"> Right </option>
					</select>
			</div>
		</div>
	</div>
	<div class="Rich_Web_CS_Forms_Fields_Editing Rich_Web_CS_Forms_Fields_Editing_DatePicker" rel="">
		<div class="Rich_Web_CS_Forms_Fields_Edit_Title">
			<span>DatePicker</span>
			<i class="Rich_Web_CS_Forms_FC_EditSave rich_web rich_web-floppy-o" aria-hidden="true"></i>
			<i class="Rich_Web_CS_Forms_FC_EditUndo rich_web rich_web-undo" aria-hidden="true"></i>
		</div>
		<div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div1">
				<label>Label:</label> 
					<input type="text" name="Rich_Web_CS_Forms_FEditing_DateP_L">
				<label>Label Position:</label> 
					<select name="Rich_Web_CS_Forms_FEditing_DateP_LP">
						<option value="Left">        Left        </option>
						<option value="Right">       Right       </option>
						<option value="Placeholder"> Placeholder </option>
						<option value="Above Field"> Above Field </option>
					</select>
				<label>Placeholder Text:</label> 
					<input type="text" name="Rich_Web_CS_Forms_FEditing_DateP_P">
			</div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div2">
				<label>Current Date:</label> 
				<input class="SChbF" type="checkbox" name="Rich_Web_CS_Forms_FEditing_DateP_Cur" checked>
			</div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div2">
				<label>Required Field:</label>
				<input class="SChbF" type="checkbox" name="Rich_Web_CS_Forms_FEditing_DateP_R">
			</div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div2">
				<label>Active Field:</label>
				<input class="SChbF" type="checkbox" name="Rich_Web_CS_Forms_FEditing_DateP_A" checked>
			</div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div2">
				<label>From/To:</label>
				<input class="SChbF" type="checkbox" name="Rich_Web_CS_Forms_FEditing_DateP_FT">
			</div>
		</div>
	</div>
	<div class="Rich_Web_CS_Forms_Fields_Editing Rich_Web_CS_Forms_Fields_Editing_TimePicker" rel="">
		<div class="Rich_Web_CS_Forms_Fields_Edit_Title">
			<span>TimePicker</span>
			<i class="Rich_Web_CS_Forms_FC_EditSave rich_web rich_web-floppy-o" aria-hidden="true"></i>
			<i class="Rich_Web_CS_Forms_FC_EditUndo rich_web rich_web-undo" aria-hidden="true"></i>
		</div>
		<div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div1">
				<label>Label:</label> 
					<input type="text" name="Rich_Web_CS_Forms_FEditing_TimeP_L">
				<label>Label Position:</label> 
					<select name="Rich_Web_CS_Forms_FEditing_TimeP_LP">
						<option value="Left">        Left        </option>
						<option value="Right">       Right       </option>
						<option value="Above Field"> Above Field </option>
					</select>
			</div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div2">
				<label>Current Time:</label> 
				<input class="SChbF" type="checkbox" name="Rich_Web_CS_Forms_FEditing_TimeP_Cur" checked>
			</div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div2">
				<label>Required Field:</label>
				<input class="SChbF" type="checkbox" name="Rich_Web_CS_Forms_FEditing_TimeP_R">
			</div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div2">
				<label>Active Field:</label>
				<input class="SChbF" type="checkbox" name="Rich_Web_CS_Forms_FEditing_TimeP_A" checked>
			</div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div2">
				<label>From/To:</label>
				<input class="SChbF" type="checkbox" name="Rich_Web_CS_Forms_FEditing_TimeP_FT">
			</div>
		</div>
	</div>
	<div class="Rich_Web_CS_Forms_Fields_Editing Rich_Web_CS_Forms_Fields_Editing_Full_Name" rel="">
		<div class="Rich_Web_CS_Forms_Fields_Edit_Title">
			<span>Full Name</span>
			<i class="Rich_Web_CS_Forms_FC_EditSave rich_web rich_web-floppy-o" aria-hidden="true"></i>
			<i class="Rich_Web_CS_Forms_FC_EditUndo rich_web rich_web-undo" aria-hidden="true"></i>
		</div>
		<div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div1">
				<label>Label:</label> 
					<input type="text" name="Rich_Web_CS_Forms_FEditing_FullN_L">
				<label>Label Position:</label> 
					<select name="Rich_Web_CS_Forms_FEditing_FullN_LP">
						<option value="Left">        Left        </option>
						<option value="Right">       Right       </option>
						<option value="Placeholder"> Placeholder </option>
						<option value="Above Field"> Above Field </option>
					</select>
				<label>Placeholder Text 1:</label> 
					<input type="text" name="Rich_Web_CS_Forms_FEditing_FullN_P_1">
			</div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div1">
				<label>Placeholder Text 2:</label> 
					<input type="text" name="Rich_Web_CS_Forms_FEditing_FullN_P_2">
			</div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div2">
				<label>Required Field:</label>
				<input class="SChbF" type="checkbox" name="Rich_Web_CS_Forms_FEditing_FullN_R">
			</div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div2">
				<label>Active Field:</label>
				<input class="SChbF" type="checkbox" name="Rich_Web_CS_Forms_FEditing_FullN_A" checked>
			</div>
		</div>
	</div>
	<div class="Rich_Web_CS_Forms_Fields_Editing Rich_Web_CS_Forms_Fields_Editing_Phone" rel="">
		<div class="Rich_Web_CS_Forms_Fields_Edit_Title">
			<span>Phone</span>
			<i class="Rich_Web_CS_Forms_FC_EditSave rich_web rich_web-floppy-o" aria-hidden="true"></i>
			<i class="Rich_Web_CS_Forms_FC_EditUndo rich_web rich_web-undo" aria-hidden="true"></i>
		</div>
		<div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div1">
				<label>Label:</label> 
					<input type="text" name="Rich_Web_CS_Forms_FEditing_Phone_L">
				<label>Label Position:</label> 
					<select name="Rich_Web_CS_Forms_FEditing_Phone_LP">
						<option value="Left">        Left        </option>
						<option value="Right">       Right       </option>
						<option value="Placeholder"> Placeholder </option>
						<option value="Above Field"> Above Field </option>
					</select>
				<label>Placeholder Text:</label> 
					<input type="text" name="Rich_Web_CS_Forms_FEditing_Phone_P">
			</div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div2">
				<label>Required Field:</label>
				<input class="SChbF" type="checkbox" name="Rich_Web_CS_Forms_FEditing_Phone_R">
			</div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div2">
				<label>Active Field:</label>
				<input class="SChbF" type="checkbox" name="Rich_Web_CS_Forms_FEditing_Phone_A" checked>
			</div>
		</div>
	</div>
	<div class="Rich_Web_CS_Forms_Fields_Editing Rich_Web_CS_Forms_Fields_Editing_Country" rel="">
		<div class="Rich_Web_CS_Forms_Fields_Edit_Title">
			<span>Country</span>
			<i class="Rich_Web_CS_Forms_FC_EditSave rich_web rich_web-floppy-o" aria-hidden="true"></i>
			<i class="Rich_Web_CS_Forms_FC_EditUndo rich_web rich_web-undo" aria-hidden="true"></i>
		</div>
		<div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div1">
				<label>Label:</label> 
					<input type="text" name="Rich_Web_CS_Forms_FEditing_Country_L">
				<label>Label Position:</label> 
					<select name="Rich_Web_CS_Forms_FEditing_Country_LP">
						<option value="Left">        Left        </option>
						<option value="Right">       Right       </option>
						<option value="Placeholder"> Placeholder </option>
						<option value="Above Field"> Above Field </option>
					</select>
				<label>Placeholder Text:</label> 
					<input type="text" name="Rich_Web_CS_Forms_FEditing_Country_P">
			</div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div2">
				<label>Active Field:</label>
				<input class="SChbF" type="checkbox" name="Rich_Web_CS_Forms_FEditing_Country_A" checked>
			</div>
		</div>
	</div>
	<div class="Rich_Web_CS_Forms_Fields_Editing Rich_Web_CS_Forms_Fields_Editing_Privacy" rel="">
		<div class="Rich_Web_CS_Forms_Fields_Edit_Title">
			<span>Privacy Policy</span>
			<i class="Rich_Web_CS_Forms_FC_EditSave rich_web rich_web-floppy-o" aria-hidden="true"></i>
			<i class="Rich_Web_CS_Forms_FC_EditUndo rich_web rich_web-undo" aria-hidden="true"></i>
		</div>
		<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div1">
			<label>Field Position:</label> 
				<select name="Rich_Web_CS_Forms_FEditing_Privacy_FPos">
					<option value="left">  Left  </option>
					<option value="right"> Right </option>
				</select>
			<label>CheckBox Position:</label> 
				<select name="Rich_Web_CS_Forms_FEditing_Privacy_Pos">
					<option value="Left">  Left  </option>
					<option value="Right"> Right </option>
				</select>
			<label>Required Field:</label>
				<input class="SChbF" type="checkbox" name="Rich_Web_CS_Forms_FEditing_Privacy_R">
		</div>
		<div style="padding: none !important; margin-top: 50px;">
			<textarea id="Rich_Web_CS_Forms_Fields_Editing_Privacy_ID"></textarea>
		</div>
	</div>
	<div class="Rich_Web_CS_Forms_Fields_Editing Rich_Web_CS_Forms_Fields_Editing_Map" rel="">
		<div class="Rich_Web_CS_Forms_Fields_Edit_Title">
			<span>Google Map</span>
			<i class="Rich_Web_CS_Forms_FC_EditSave rich_web rich_web-floppy-o" aria-hidden="true"></i>
			<i class="Rich_Web_CS_Forms_FC_EditUndo rich_web rich_web-undo" aria-hidden="true"></i>
		</div>
		<div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div1">
				<label>Latitude:</label> 
					<input type="text" id="Rich_Web_CS_Forms_FEditing_Map_Lat">
				<label>Longitude:</label> 
					<input type="text" id="Rich_Web_CS_Forms_FEditing_Map_Long">
			</div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div2">
				<label>Zoom:</label>
					<div class="Rich_Web_CS_Forms_Range">
						<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_FEditing_Map_Zoom" name="Rich_Web_CS_Forms_FEditing_Map_Zoom" value="1" min="1" max="20">
						<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_FEditing_Map_Zoom_Span">0</span>
					</div>
			</div>
			<div class="Rich_Web_CS_Forms_Fields_Editing_Text_div2">
				<label>Map Type:</label> 
					<select id="Rich_Web_CS_Forms_FEditing_Map_Type">
						<option value="ROADMAP">   Roadmap   </option>
						<option value="SATELLITE"> Satellite </option>
						<option value="HYBRID">    Hybrid    </option>
						<option value="TERRAIN">   Terrain   </option>
					</select>
			</div>
		</div>
	</div>
</form>
<?php
	if(isset($_POST['save_form_CS']) == 'save_form_CS')
	{
		$Rich_Web_CS_Forms_all = $_POST['postData'];
		parse_str("$Rich_Web_CS_Forms_all",$myArray);
		$_POSTED = $myArray;

		global $wpdb;
		$table_name1 = $wpdb->prefix . "rich_web_cs_form_fields";
		$wpdb->query($wpdb->prepare("DELETE FROM $table_name1 WHERE id > %d", 0));

		$Rich_Web_CS_Forms_New_Co=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_New_Co']);

		$Rich_Web_CS_Forms_FF = array();
		$Rich_Web_CS_Forms_FW = array();
		$Rich_Web_CS_Forms_FT = array();
		$Rich_Web_CS_Forms_Fields_O1 = array();
		$Rich_Web_CS_Forms_Fields_O2 = array();
		$Rich_Web_CS_Forms_Fields_O3 = array();
		$Rich_Web_CS_Forms_Fields_O4 = array();
		$Rich_Web_CS_Forms_Fields_O5 = array();
		$Rich_Web_CS_Forms_Fields_O6 = array();
		$Rich_Web_CS_Forms_Fields_O7 = array();
		$Rich_Web_CS_Forms_Fields_O8 = array();

		for($i=1;$i<=$Rich_Web_CS_Forms_New_Co;$i++)
		{
			$Rich_Web_CS_Forms_FF[$i] = str_replace("\&","&", sanitize_text_field(esc_html($_POSTED['Rich_Web_CS_Forms_Field_' . $i])));
			$Rich_Web_CS_Forms_FW[$i] = sanitize_text_field($_POSTED['Rich_Web_CS_Forms_Field_W_' . $i]);
			$Rich_Web_CS_Forms_FT[$i] = sanitize_text_field($_POSTED['Rich_Web_CS_Forms_Field_T_' . $i]);
			$Rich_Web_CS_Forms_Fields_O1[$i] = str_replace("\&","&", sanitize_text_field(esc_html($_POSTED['Rich_Web_CS_Forms_Field_O1_' . $i])));
			$Rich_Web_CS_Forms_Fields_O2[$i] = sanitize_text_field($_POSTED['Rich_Web_CS_Forms_Field_O2_' . $i]);
			$Rich_Web_CS_Forms_Fields_O3[$i] = sanitize_text_field($_POSTED['Rich_Web_CS_Forms_Field_O3_' . $i]);
			$Rich_Web_CS_Forms_Fields_O4[$i] = sanitize_text_field($_POSTED['Rich_Web_CS_Forms_Field_O4_' . $i]);
			$Rich_Web_CS_Forms_Fields_O5[$i] = sanitize_text_field($_POSTED['Rich_Web_CS_Forms_Field_O5_' . $i]);
			$Rich_Web_CS_Forms_Fields_O6[$i] = sanitize_text_field($_POSTED['Rich_Web_CS_Forms_Field_O6_' . $i]);
			$Rich_Web_CS_Forms_Fields_O7[$i] = sanitize_text_field($_POSTED['Rich_Web_CS_Forms_Field_O7_' . $i]);
			$Rich_Web_CS_Forms_Fields_O8[$i] = sanitize_text_field($_POSTED['Rich_Web_CS_Forms_Field_O8_' . $i]);
		}
		for($i=1;$i<=$Rich_Web_CS_Forms_New_Co;$i++)
		{
			$wpdb->query($wpdb->prepare("INSERT INTO $table_name1 (id, CS_Forms_Fields, CS_Forms_Fields_Width, CS_Forms_Fields_Type, CS_Rich_Web_Forms_Fields_O1, CS_Rich_Web_Forms_Fields_O2, CS_Rich_Web_Forms_Fields_O3, CS_Rich_Web_Forms_Fields_O4, CS_Rich_Web_Forms_Fields_O5, CS_Rich_Web_Forms_Fields_O6, CS_Rich_Web_Forms_Fields_O7, CS_Rich_Web_Forms_Fields_O8) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $Rich_Web_CS_Forms_FF[$i], $Rich_Web_CS_Forms_FW[$i], $Rich_Web_CS_Forms_FT[$i], $Rich_Web_CS_Forms_Fields_O1[$i], $Rich_Web_CS_Forms_Fields_O2[$i], $Rich_Web_CS_Forms_Fields_O3[$i], $Rich_Web_CS_Forms_Fields_O4[$i], $Rich_Web_CS_Forms_Fields_O5[$i], $Rich_Web_CS_Forms_Fields_O6[$i], $Rich_Web_CS_Forms_Fields_O7[$i], $Rich_Web_CS_Forms_Fields_O8[$i]));
		}
		die();
	}
?>