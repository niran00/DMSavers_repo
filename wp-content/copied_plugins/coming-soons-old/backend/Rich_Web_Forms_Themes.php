<?php
	if(!defined('ABSPATH')) exit;
	global $wpdb;

	$table_name  = $wpdb->prefix . "rich_web_cs_font_family";
	$table_name3 = $wpdb->prefix . "rich_web_cs_forms_themes1";
	$table_name4 = $wpdb->prefix . "rich_web_cs_forms_themes2";
	$table_name5 = $wpdb->prefix . "rich_web_cs_forms_themes3";

	$Rich_WebFontCount=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name WHERE id>%d", 0));
	$Rich_Web_CS_Forms_T1=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE id>%d", 0));
	$Rich_Web_CS_Forms_T2=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE id>%d", 0));
	$Rich_Web_CS_Forms_T3=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name5 WHERE id>%d", 0));

	if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_BoxShShow=='on'){ $Rich_Web_CS_Forms_T_BoxShShow='checked'; }
	if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_BoxShType=='on'){ $Rich_Web_CS_Forms_T_BoxShType='checked'; }
	if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_TBHBg=='on'){ $Rich_Web_CS_Forms_T_TBHBg='checked'; }
	if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_TAHBg=='on'){ $Rich_Web_CS_Forms_T_TAHBg='checked'; }
	if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_SMHBg=='on'){ $Rich_Web_CS_Forms_T_SMHBg='checked'; }
	if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_EBHBg=='on'){ $Rich_Web_CS_Forms_T_EBHBg='checked'; }
	if($Rich_Web_CS_Forms_T3[0]->Rich_Web_CS_Forms_T_02=='on'){ $Rich_Web_CS_Forms_T_ButAn='checked'; }
	if($Rich_Web_CS_Forms_T3[0]->Rich_Web_CS_Forms_T_03=='on'){ $Rich_Web_CS_Forms_T_ShForm='checked'; }
?>
<form id="Rich_Web_CCS_Form_TO">
	<div class='Rich_Web_CS_Forms_Content_Theme'>
		<div class='Rich_Web_CS_Forms_Content_Data2_Theme'>
			<table class="Rich_Web_CS_Forms_Content_Table_Theme3">
				<tr>
					<td colspan="4">General Options</td>
				</tr>
				<tr>
					<td>Show Form</td>
					<td>Background Type</td>
					<td>Background Color</td>
					<td>Background Color 2</td>
				</tr>
				<tr>
					<td>
						<label class="RWCSswitch RWCSswitch-light">
							<input class="RWCSswitch-input" type="checkbox" name="Rich_Web_CS_Forms_T_ShForm" id="Rich_Web_CS_Forms_T_ShForm" <?php echo $Rich_Web_CS_Forms_T_ShForm;?>/>
							<span class="RWCSswitch-label" data-on="On" data-off="Off"></span> 
							<span class="RWCSswitch-handle"></span> 
						</label>
					</td>
					<td>
						<select name="Rich_Web_CS_Forms_T_BgT" id="Rich_Web_CS_Forms_T_BgT">
							<option value="color"       <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_BgT=='color'){ echo 'selected';}?>>       Color       </option>
							<option value="transparent" <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_BgT=='transparent'){ echo 'selected';}?>> Transparent </option>
							<option value="gradient"    <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_BgT=='gradient'){ echo 'selected';}?>>    Gradient    </option>
						</select>
					</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_BgC" id="Rich_Web_CS_Forms_T_BgC" class="Rich_Web_Contact_Form_Col1 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_BgC;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_BgC2" id="Rich_Web_CS_Forms_T_BgC2" class="Rich_Web_Contact_Form_Col1 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_BgC2;?>">
					</td>
				</tr>
				<tr>
					<td>Border Width (px)</td>
					<td>Border Style</td>
					<td>Border Color</td>
					<td>Border Radius (px)</td>
				</tr>
				<tr>
					<td>
						<div class="Rich_Web_CS_Forms_Range">
							<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_T_BW" name="Rich_Web_CS_Forms_T_BW" value="<?php echo $Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_BW;?>" min="0" max="10">
							<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_T_BW_Span">0</span>
						</div>
					</td>
					<td>
						<select name="Rich_Web_CS_Forms_T_BS" id="Rich_Web_CS_Forms_T_BS">
							<option value="none"   <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_BS=='none'){ echo 'selected';}?>>   None   </option>
							<option value="solid"  <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_BS=='solid'){ echo 'selected';}?>>  Solid  </option>
							<option value="dashed" <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_BS=='dashed'){ echo 'selected';}?>> Dashed </option>
							<option value="dotted" <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_BS=='dotted'){ echo 'selected';}?>> Dotted </option>
						</select>
					</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_BC" id="Rich_Web_CS_Forms_T_BC" class="Rich_Web_Contact_Form_Col1 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_BC;?>">
					</td>
					<td>
						<div class="Rich_Web_CS_Forms_Range">
							<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_T_BR" name="Rich_Web_CS_Forms_T_BR" value="<?php echo $Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_BR;?>" min="0" max="50">
							<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_T_BR_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Box Shadow</td>
					<td>Shadow Type</td>
					<td>Shadow (px)</td>
					<td>Shadow Color</td>
				</tr>
				<tr>
					<td>
						<label class="RWCSswitch RWCSswitch-light">
							<input class="RWCSswitch-input" type="checkbox" name="Rich_Web_CS_Forms_T_BoxShShow" id="Rich_Web_CS_Forms_T_BoxShShow" <?php echo $Rich_Web_CS_Forms_T_BoxShShow;?>/>
							<span class="RWCSswitch-label" data-on="On" data-off="Off"></span> 
							<span class="RWCSswitch-handle"></span> 
						</label>
					</td>
					<td>
						<label class="RWCSswitch RWCSswitch-light">
							<input class="RWCSswitch-input" type="checkbox" name="Rich_Web_CS_Forms_T_BoxShType" id="Rich_Web_CS_Forms_T_BoxShType" <?php echo $Rich_Web_CS_Forms_T_BoxShType;?>/>
							<span class="RWCSswitch-label" data-on="1" data-off="2"></span> 
							<span class="RWCSswitch-handle"></span> 
						</label>
					</td>
					<td>
						<div class="Rich_Web_CS_Forms_Range">
							<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_T_BoxSh" name="Rich_Web_CS_Forms_T_BoxSh" value="<?php echo $Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_BoxSh;?>" min="0" max="50">
							<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_T_BoxSh_Span">0</span>
						</div>
					</td>
						<td>
						<input type="text" name="Rich_Web_CS_Forms_T_BoxShC" id="Rich_Web_CS_Forms_T_BoxShC" class="Rich_Web_Contact_Form_Col1 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_BoxShC;?>">
					</td>
				</tr>
				<tr>
					<td>Forms Width (%)</td>
					<td>Position</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<div class="Rich_Web_CS_Forms_Range">
							<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_T_W" name="Rich_Web_CS_Forms_T_W" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_W;?>" min="0" max="100">
							<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_T_W_Span">0</span>
						</div>
					</td>
					<td>
						<select name="Rich_Web_CS_Forms_T_Pos" id="Rich_Web_CS_Forms_T_Pos">
							<option value="left"   <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_Pos=='left'){ echo 'selected';}?>>   Left   </option>
							<option value="center" <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_Pos=='center'){ echo 'selected';}?>> Center </option>
							<option value="right"  <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_Pos=='right'){ echo 'selected';}?>>  Right  </option>
						</select>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Label Options</td>
				</tr>
				<tr>
					<td>Font Size (px)</td>
					<td>Font Family</td>
					<td>Color</td>
					<td>* Color</td>
				</tr>
				<tr>
					<td>
						<div class="Rich_Web_CS_Forms_Range">
							<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_T_LFS" name="Rich_Web_CS_Forms_T_LFS" value="<?php echo $Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_LFS;?>" min="8" max="48">
							<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_T_LFS_Span">0</span>
						</div>
					</td>
					<td>
						<select id="Rich_Web_CS_Forms_T_LFF" name="Rich_Web_CS_Forms_T_LFF">
							<?php for($i=0;$i<count($Rich_WebFontCount);$i++){ ?> 
								<?php if($Rich_WebFontCount[$i]->Font_family==$Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_LFF){ ?> 
									<option value="<?php echo $Rich_WebFontCount[$i]->Font_family;?>" selected><?php echo $Rich_WebFontCount[$i]->Font_family;?></option>
								<?php } else { ?> 
									<option value="<?php echo $Rich_WebFontCount[$i]->Font_family;?>"><?php echo $Rich_WebFontCount[$i]->Font_family;?></option>
								<?php }?>
							<?php }?>
						</select>
					</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_LC" id="Rich_Web_CS_Forms_T_LC" class="Rich_Web_Contact_Form_Col1 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_LC;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_LRC" id="Rich_Web_CS_Forms_T_LRC" class="Rich_Web_Contact_Form_Col1 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_LRC;?>">
					</td>
				</tr>
				<tr>
					<td>Error Color</td>
					<td>Background Color</td>
					<td>Border Radius</td>
					<td>Border Color</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_LEC" id="Rich_Web_CS_Forms_T_LEC" class="Rich_Web_Contact_Form_Col1 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_LEC;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_LBgC" id="Rich_Web_CS_Forms_T_LBgC" class="Rich_Web_Contact_Form_Col1 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_LBgC;?>">
					</td>
					<td>
						<div class="Rich_Web_CS_Forms_Range">
							<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_T_LBR" name="Rich_Web_CS_Forms_T_LBR" value="<?php echo $Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_LBR;?>" min="0" max="50">
							<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_T_LBR_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_LBC" id="Rich_Web_CS_Forms_T_LBC" class="Rich_Web_Contact_Form_Col1 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_LBC;?>">
					</td>
				</tr>
				<tr>
					<td colspan="4">Text Box Options</td>
				</tr>
				<tr>
					<td>Has Background</td>
					<td>Background Color</td>
					<td>Border Width (px)</td>
					<td>Border Color</td>
				</tr>
				<tr>
					<td>
						<label class="RWCSswitch RWCSswitch-light">
							<input class="RWCSswitch-input" type="checkbox" name="Rich_Web_CS_Forms_T_TBHBg" id="Rich_Web_CS_Forms_T_TBHBg" <?php echo $Rich_Web_CS_Forms_T_TBHBg;?>/>
							<span class="RWCSswitch-label" data-on="On" data-off="Off"></span> 
							<span class="RWCSswitch-handle"></span> 
						</label>
					</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_TBBgC" id="Rich_Web_CS_Forms_T_TBBgC" class="Rich_Web_Contact_Form_Col1 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_TBBgC;?>">
					</td>
					<td>
						<div class="Rich_Web_CS_Forms_Range">
							<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_T_TBBW" name="Rich_Web_CS_Forms_T_TBBW" value="<?php echo $Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_TBBW;?>" min="0" max="5">
							<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_T_TBBW_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_TBBC" id="Rich_Web_CS_Forms_T_TBBC" class="Rich_Web_Contact_Form_Col1 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_TBBC;?>">
					</td>
				</tr>
				<tr>
					<td>Border Radius (px)</td>
					<td>Font Size (px)</td>
					<td>Color</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<div class="Rich_Web_CS_Forms_Range">
							<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_T_TBBR" name="Rich_Web_CS_Forms_T_TBBR" value="<?php echo $Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_TBBR;?>" min="0" max="50">
							<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_T_TBBR_Span">0</span>
						</div>
					</td>
					<td>
						<div class="Rich_Web_CS_Forms_Range">
							<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_T_TBFS" name="Rich_Web_CS_Forms_T_TBFS" value="<?php echo $Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_TBFS;?>" min="8" max="48">
							<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_T_TBFS_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_TBC" id="Rich_Web_CS_Forms_T_TBC" class="Rich_Web_Contact_Form_Col1 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_TBC;?>">
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Textarea Options</td>
				</tr>
				<tr>
					<td>Has Background</td>
					<td>Background Color</td>
					<td>Border Width (px)</td>
					<td>Border Color</td>
				</tr>
				<tr>
					<td>
						<label class="RWCSswitch RWCSswitch-light">
							<input class="RWCSswitch-input" type="checkbox" name="Rich_Web_CS_Forms_T_TAHBg" id="Rich_Web_CS_Forms_T_TAHBg" <?php echo $Rich_Web_CS_Forms_T_TAHBg;?>/>
							<span class="RWCSswitch-label" data-on="On" data-off="Off"></span> 
							<span class="RWCSswitch-handle"></span> 
						</label>
					</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_TABgC" id="Rich_Web_CS_Forms_T_TABgC" class="Rich_Web_Contact_Form_Col1 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_TABgC;?>">
					</td>
					<td>
						<div class="Rich_Web_CS_Forms_Range">
							<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_T_TABW" name="Rich_Web_CS_Forms_T_TABW" value="<?php echo $Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_TABW;?>" min="0" max="5">
							<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_T_TABW_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_TABC" id="Rich_Web_CS_Forms_T_TABC" class="Rich_Web_Contact_Form_Col1 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_TABC;?>">
					</td>
				</tr>
				<tr>
					<td>Border Radius (px)</td>
					<td>Font Size (px)</td>
					<td>Color</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<div class="Rich_Web_CS_Forms_Range">
							<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_T_TABR" name="Rich_Web_CS_Forms_T_TABR" value="<?php echo $Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_TABR;?>" min="0" max="50">
							<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_T_TABR_Span">0</span>
						</div>
					</td>
					<td>
						<div class="Rich_Web_CS_Forms_Range">
							<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_T_TAFS" name="Rich_Web_CS_Forms_T_TAFS" value="<?php echo $Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_TAFS;?>" min="8" max="48">
							<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_T_TAFS_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_TAC" id="Rich_Web_CS_Forms_T_TAC" class="Rich_Web_Contact_Form_Col1 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_TAC;?>">
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Select Menu Options</td>
				</tr>
				<tr>
					<td>Has Background</td>
					<td>Background Color</td>
					<td>Border Width (px)</td>
					<td>Border Color</td>
				</tr>
				<tr>
					<td>
						<label class="RWCSswitch RWCSswitch-light">
							<input class="RWCSswitch-input" type="checkbox" name="Rich_Web_CS_Forms_T_SMHBg" id="Rich_Web_CS_Forms_T_SMHBg" <?php echo $Rich_Web_CS_Forms_T_SMHBg;?>/>
							<span class="RWCSswitch-label" data-on="On" data-off="Off"></span> 
							<span class="RWCSswitch-handle"></span> 
						</label>
					</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_SMBgC" id="Rich_Web_CS_Forms_T_SMBgC" class="Rich_Web_Contact_Form_Col1 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_SMBgC;?>">
					</td>
					<td>
						<div class="Rich_Web_CS_Forms_Range">
							<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_T_SMBW" name="Rich_Web_CS_Forms_T_SMBW" value="<?php echo $Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_SMBW;?>" min="0" max="5">
							<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_T_SMBW_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_SMBC" id="Rich_Web_CS_Forms_T_SMBC" class="Rich_Web_Contact_Form_Col1 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_SMBC;?>">
					</td>
				</tr>
				<tr>
					<td>Border Radius (px)</td>
					<td>Font Size (px)</td>
					<td>Color</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<div class="Rich_Web_CS_Forms_Range">
							<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_T_SMBR" name="Rich_Web_CS_Forms_T_SMBR" value="<?php echo $Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_SMBR;?>" min="0" max="50">
							<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_T_SMBR_Span">0</span>
						</div>
					</td>
					<td>
						<div class="Rich_Web_CS_Forms_Range">
							<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_T_SMFS" name="Rich_Web_CS_Forms_T_SMFS" value="<?php echo $Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_SMFS;?>" min="8" max="48">
							<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_T_SMFS_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_SMC" id="Rich_Web_CS_Forms_T_SMC" class="Rich_Web_Contact_Form_Col1 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_SMC;?>">
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Checkbox Options</td>
				</tr>
				<tr>
					<td>Size</td>
					<td>Type Before Checking</td>
					<td>Type After Checking</td>
					<td>Color Before Checking</td>
				</tr>
				<tr>
					<td>
						<select name="Rich_Web_CS_Forms_T_CBS" id="Rich_Web_CS_Forms_T_CBS">
							<option value="Big"    <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_CBS=='Big'){ echo 'selected';}?>>    Big    </option>
							<option value="Medium" <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_CBS=='Medium'){ echo 'selected';}?>> Medium </option>
							<option value="Small"  <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_CBS=='Small'){ echo 'selected';}?>>  Small  </option>
						</select>
					</td>
					<td>
						<select name="Rich_Web_CS_Forms_T_CBT" id="Rich_Web_CS_Forms_T_CBT">
							<option value="f10c" <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_CBT=='f10c'){ echo 'selected';}?>> Circle O       </option>
							<option value="f111" <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_CBT=='f111'){ echo 'selected';}?>> Circle         </option>
							<option value="f096" <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_CBT=='f096'){ echo 'selected';}?>> Square O       </option>
							<option value="f0c8" <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_CBT=='f0c8'){ echo 'selected';}?>> Square         </option>
							<option value="f147" <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_CBT=='f147'){ echo 'selected';}?>> Minus Square O </option>
							<option value="f146" <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_CBT=='f146'){ echo 'selected';}?>> Minus Square   </option>
						</select>
					</td>
					<td>
						<select name="Rich_Web_CS_Forms_T_CBBgC" id="Rich_Web_CS_Forms_T_CBBgC">
							<option value="f00c" <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_CBBgC=='f00c'){ echo 'selected';}?>> Check          </option>
							<option value="f058" <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_CBBgC=='f058'){ echo 'selected';}?>> Check Circle   </option>
							<option value="f05d" <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_CBBgC=='f05d'){ echo 'selected';}?>> Check Circle O </option>
							<option value="f14a" <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_CBBgC=='f14a'){ echo 'selected';}?>> Check Square   </option>
							<option value="f046" <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_CBBgC=='f046'){ echo 'selected';}?>> Check Square O </option>
							<option value="f111" <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_CBBgC=='f111'){ echo 'selected';}?>> Circle         </option>
							<option value="f192" <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_CBBgC=='f192'){ echo 'selected';}?>> Dot Circle O   </option>
							<option value="f196" <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_CBBgC=='f196'){ echo 'selected';}?>> Plus Square O  </option>
							<option value="f0fe" <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_CBBgC=='f0fe'){ echo 'selected';}?>> Plus Square    </option>
						</select>
					</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_CBBC" id="Rich_Web_CS_Forms_T_CBBC" class="Rich_Web_Contact_Form_Col1 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_CBBC;?>">
					</td>
				</tr>
				<tr>
					<td>Text Font Size (px)</td>
					<td>Text Color</td>
					<td>Color After Checking</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<div class="Rich_Web_CS_Forms_Range">
							<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_T_CBHBgC" name="Rich_Web_CS_Forms_T_CBHBgC" value="<?php echo $Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_CBHBgC;?>" min="8" max="48">
							<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_T_CBHBgC_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_CBHBC" id="Rich_Web_CS_Forms_T_CBHBC" class="Rich_Web_Contact_Form_Col1 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_CBHBC;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_CBCBgC" id="Rich_Web_CS_Forms_T_CBCBgC" class="Rich_Web_Contact_Form_Col1 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_CBCBgC;?>">
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Radiobox Options</td>
				</tr>
				<tr>
					<td>Size</td>
					<td>Type Before Checking</td>
					<td>Type After Checking</td>
					<td>Color Before Checking</td>
				</tr>
				<tr>
					<td>
						<select name="Rich_Web_CS_Forms_T_RBS" id="Rich_Web_CS_Forms_T_RBS">
							<option value="Big"    <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_RBS=='Big'){ echo 'selected';}?>>    Big    </option>
							<option value="Medium" <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_RBS=='Medium'){ echo 'selected';}?>> Medium </option>
							<option value="Small"  <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_RBS=='Small'){ echo 'selected';}?>>  Small  </option>
						</select>
					</td>
					<td>
						<select name="Rich_Web_CS_Forms_T_RBT" id="Rich_Web_CS_Forms_T_RBT">
							<option value="f10c" <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_RBT=='f10c'){ echo 'selected';}?>> Circle O       </option>
							<option value="f111" <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_RBT=='f111'){ echo 'selected';}?>> Circle         </option>
							<option value="f096" <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_RBT=='f096'){ echo 'selected';}?>> Square O       </option>
							<option value="f0c8" <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_RBT=='f0c8'){ echo 'selected';}?>> Square         </option>
							<option value="f147" <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_RBT=='f147'){ echo 'selected';}?>> Minus Square O </option>
							<option value="f146" <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_RBT=='f146'){ echo 'selected';}?>> Minus Square   </option>
						</select>
					</td>
					<td>
						<select name="Rich_Web_CS_Forms_T_RBBgC" id="Rich_Web_CS_Forms_T_RBBgC">
							<option value="f00c" <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_RBBgC=='f00c'){ echo 'selected';}?>> Check          </option>
							<option value="f058" <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_RBBgC=='f058'){ echo 'selected';}?>> Check Circle   </option>
							<option value="f05d" <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_RBBgC=='f05d'){ echo 'selected';}?>> Check Circle O </option>
							<option value="f14a" <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_RBBgC=='f14a'){ echo 'selected';}?>> Check Square   </option>
							<option value="f046" <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_RBBgC=='f046'){ echo 'selected';}?>> Check Square O </option>
							<option value="f111" <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_RBBgC=='f111'){ echo 'selected';}?>> Circle         </option>
							<option value="f192" <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_RBBgC=='f192'){ echo 'selected';}?>> Dot Circle O   </option>
							<option value="f196" <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_RBBgC=='f196'){ echo 'selected';}?>> Plus Square O  </option>
							<option value="f0fe" <?php if($Rich_Web_CS_Forms_T1[0]->Rich_Web_CS_Forms_T_RBBgC=='f0fe'){ echo 'selected';}?>> Plus Square    </option>
						</select>
					</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_RBBC" id="Rich_Web_CS_Forms_T_RBBC" class="Rich_Web_Contact_Form_Col2 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_RBBC;?>">
					</td>
				</tr>
				<tr>
					<td>Text Font Size (px)</td>
					<td>Text Color</td>
					<td>Color After Checking</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<div class="Rich_Web_CS_Forms_Range">
							<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_T_RBHBgC" name="Rich_Web_CS_Forms_T_RBHBgC" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_RBHBgC;?>" min="8" max="48">
							<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_T_RBHBgC_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_RBHBC" id="Rich_Web_CS_Forms_T_RBHBC" class="Rich_Web_Contact_Form_Col2 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_RBHBC;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_RBCBgC" id="Rich_Web_CS_Forms_T_RBCBgC" class="Rich_Web_Contact_Form_Col2 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_RBCBgC;?>">
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">File Uploader Options</td>
				</tr>
				<tr>
					<td>Background Color</td>
					<td>Border Width (px)</td>
					<td>Border Color</td>
					<td>Border Radius (px)</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_FUBgC" id="Rich_Web_CS_Forms_T_FUBgC" class="Rich_Web_Contact_Form_Col2 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_FUBgC;?>">
					</td>
					<td>
						<div class="Rich_Web_CS_Forms_Range">
							<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_T_FUBW" name="Rich_Web_CS_Forms_T_FUBW" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_FUBW;?>" min="0" max="5">
							<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_T_FUBW_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_FUBC" id="Rich_Web_CS_Forms_T_FUBC" class="Rich_Web_Contact_Form_Col2 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_FUBC;?>">
					</td>
					<td>
						<div class="Rich_Web_CS_Forms_Range">
							<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_T_FUBR" name="Rich_Web_CS_Forms_T_FUBR" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_FUBR;?>" min="0" max="50">
							<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_T_FUBR_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Text Color</td>
					<td>Font Size (px)</td>
					<td>Icon Type</td>
					<td>Icon Align</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_FUTC" id="Rich_Web_CS_Forms_T_FUTC" class="Rich_Web_Contact_Form_Col2 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_FUTC;?>">
					</td>
					<td>
						<div class="Rich_Web_CS_Forms_Range">
							<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_T_FUFS" name="Rich_Web_CS_Forms_T_FUFS" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_FUFS;?>" min="8" max="48">
							<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_T_FUFS_Span">0</span>
						</div>
					</td>
					<td>
						<select name="Rich_Web_CS_Forms_T_FUIT" id="Rich_Web_CS_Forms_T_FUIT">
							<option value=""     <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_FUIT==''){ echo 'selected';}?>>     None    </option>
							<option value="f093" <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_FUIT=='f093'){ echo 'selected';}?>> Type 1  </option>
							<option value="f083" <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_FUIT=='f083'){ echo 'selected';}?>> Type 2  </option>
							<option value="f1c5" <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_FUIT=='f1c5'){ echo 'selected';}?>> Type 3  </option>
							<option value="f07c" <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_FUIT=='f07c'){ echo 'selected';}?>> Type 4  </option>
							<option value="f115" <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_FUIT=='f115'){ echo 'selected';}?>> Type 5  </option>
							<option value="f1c8" <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_FUIT=='f1c8'){ echo 'selected';}?>> Type 6  </option>
							<option value="f0f6" <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_FUIT=='f0f6'){ echo 'selected';}?>> Type 7  </option>
							<option value="f15c" <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_FUIT=='f15c'){ echo 'selected';}?>> Type 8  </option>
							<option value="f1c2" <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_FUIT=='f1c2'){ echo 'selected';}?>> Type 9  </option>
							<option value="f1c3" <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_FUIT=='f1c3'){ echo 'selected';}?>> Type 10 </option>
							<option value="f0c7" <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_FUIT=='f0c7'){ echo 'selected';}?>> Type 11 </option>
							<option value="f0ee" <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_FUIT=='f0ee'){ echo 'selected';}?>> Type 12 </option>
						</select>
					</td>
					<td>
						<select name="Rich_Web_CS_Forms_T_FUIA" id="Rich_Web_CS_Forms_T_FUIA">
							<option value="after text"  <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_FUIA=='after text'){ echo 'selected';}?>>  After Text  </option>
							<option value="before text" <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_FUIA=='before text'){ echo 'selected';}?>> Before Text </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Icon Size (px)</td>
					<td>Button Align</td>
					<td>Hover Background Color</td>
					<td>Hover Text Color</td>
				</tr>
				<tr>
					<td>
						<div class="Rich_Web_CS_Forms_Range">
							<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_T_FUIFS" name="Rich_Web_CS_Forms_T_FUIFS" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_FUIFS;?>" min="8" max="48">
							<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_T_FUIFS_Span">0</span>
						</div>
					</td>
					<td>
						<select name="Rich_Web_CS_Forms_T_FUBA" id="Rich_Web_CS_Forms_T_FUBA">
							<option value="left"  <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_FUBA=='left'){ echo 'selected';}?>>  Left       </option>
							<option value="right" <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_FUBA=='right'){ echo 'selected';}?>> Right      </option>
							<option value="full"  <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_FUBA=='full'){ echo 'selected';}?>>  Full Width </option>
						</select>
					</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_FUHBgC" id="Rich_Web_CS_Forms_T_FUHBgC" class="Rich_Web_Contact_Form_Col2 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_FUHBgC;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_FUHTC" id="Rich_Web_CS_Forms_T_FUHTC" class="Rich_Web_Contact_Form_Col2 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_FUHTC;?>">
					</td>
				</tr>
				<tr>
					<td colspan="4">Email Box Options</td>
				</tr>
				<tr>
					<td>Has Background</td>
					<td>Background Color</td>
					<td>Border Width (px)</td>
					<td>Border Color</td>
				</tr>
				<tr>
					<td>
						<label class="RWCSswitch RWCSswitch-light">
							<input class="RWCSswitch-input" type="checkbox" name="Rich_Web_CS_Forms_T_EBHBg" id="Rich_Web_CS_Forms_T_EBHBg" <?php echo $Rich_Web_CS_Forms_T_EBHBg;?>/>
							<span class="RWCSswitch-label" data-on="On" data-off="Off"></span> 
							<span class="RWCSswitch-handle"></span> 
						</label>
					</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_EBBgC" id="Rich_Web_CS_Forms_T_EBBgC" class="Rich_Web_Contact_Form_Col2 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_EBBgC;?>">
					</td>
					<td>
						<div class="Rich_Web_CS_Forms_Range">
							<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_T_EBBW" name="Rich_Web_CS_Forms_T_EBBW" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_EBBW;?>" min="0" max="5">
							<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_T_EBBW_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_EBBC" id="Rich_Web_CS_Forms_T_EBBC" class="Rich_Web_Contact_Form_Col2 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_EBBC;?>">
					</td>
				</tr>
				<tr>
					<td>Border Radius (px)</td>
					<td>Font Size (px)</td>
					<td>Color</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<div class="Rich_Web_CS_Forms_Range">
							<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_T_EBBR" name="Rich_Web_CS_Forms_T_EBBR" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_EBBR;?>" min="0" max="50">
							<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_T_EBBR_Span">0</span>
						</div>
					</td>
					<td>
						<div class="Rich_Web_CS_Forms_Range">
							<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_T_EBFS" name="Rich_Web_CS_Forms_T_EBFS" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_EBFS;?>" min="8" max="48">
							<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_T_EBFS_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_EBC" id="Rich_Web_CS_Forms_T_EBC" class="Rich_Web_Contact_Form_Col2 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_EBC;?>">
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Submit Button Options</td>
				</tr>
				<tr>
					<td>Background Color</td>
					<td>Border Width (px)</td>
					<td>Border Color</td>
					<td>Border Radius (px)</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_SBBgC" id="Rich_Web_CS_Forms_T_SBBgC" class="Rich_Web_Contact_Form_Col2 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_SBBgC;?>">
					</td>
					<td>
						<div class="Rich_Web_CS_Forms_Range">
							<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_T_SBBW" name="Rich_Web_CS_Forms_T_SBBW" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_SBBW;?>" min="0" max="5">
							<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_T_SBBW_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_SBBC" id="Rich_Web_CS_Forms_T_SBBC" class="Rich_Web_Contact_Form_Col2 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_SBBC;?>">
					</td>
					<td>
						<div class="Rich_Web_CS_Forms_Range">
							<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_T_SBBR" name="Rich_Web_CS_Forms_T_SBBR" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_SBBR;?>" min="0" max="50">
							<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_T_SBBR_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Button Align</td>
					<td>Font Size (px)</td>
					<td>Color</td>
					<td>Icon Type</td>
				</tr>
				<tr>
					<td>
						<select name="Rich_Web_CS_Forms_T_SBBA" id="Rich_Web_CS_Forms_T_SBBA">
							<option value="left"  <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_SBBA=='left'){ echo 'selected';}?>>  Left       </option>
							<option value="right" <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_SBBA=='right'){ echo 'selected';}?>> Right      </option>
							<option value="full"  <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_SBBA=='full'){ echo 'selected';}?>>  Full Width </option>
						</select>
					</td>
					<td>
						<div class="Rich_Web_CS_Forms_Range">
							<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_T_SBFS" name="Rich_Web_CS_Forms_T_SBFS" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_SBFS;?>" min="8" max="48">
							<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_T_SBFS_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_SBC" id="Rich_Web_CS_Forms_T_SBC" class="Rich_Web_Contact_Form_Col2 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_SBC;?>">
					</td>
					<td>
						<select name="Rich_Web_CS_Forms_T_SBIT" id="Rich_Web_CS_Forms_T_SBIT">
							<option value=""     <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_SBIT==''){ echo 'selected';}?>>     None    </option>
							<option value="f25a" <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_SBIT=='f25a'){ echo 'selected';}?>> Type 1  </option>
							<option value="f0fb" <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_SBIT=='f0fb'){ echo 'selected';}?>> Type 2  </option>
							<option value="f072" <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_SBIT=='f072'){ echo 'selected';}?>> Type 3  </option>
							<option value="f1d8" <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_SBIT=='f1d8'){ echo 'selected';}?>> Type 4  </option>
							<option value="f1d9" <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_SBIT=='f1d9'){ echo 'selected';}?>> Type 5  </option>
							<option value="f124" <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_SBIT=='f124'){ echo 'selected';}?>> Type 6  </option>
							<option value="f00c" <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_SBIT=='f00c'){ echo 'selected';}?>> Type 7  </option>
							<option value="f1ae" <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_SBIT=='f1ae'){ echo 'selected';}?>> Type 8  </option>
							<option value="f0f3" <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_SBIT=='f0f3'){ echo 'selected';}?>> Type 9  </option>
							<option value="f0c9" <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_SBIT=='f0c9'){ echo 'selected';}?>> Type 10 </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Icon Align</td>
					<td>Icon Size (px)</td>
					<td>Hover Background Color</td>
					<td>Hover Color</td>
				</tr>
				<tr>
					<td>
						<select name="Rich_Web_CS_Forms_T_SBIA" id="Rich_Web_CS_Forms_T_SBIA">
							<option value="after text"  <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_SBIA=='after text'){ echo 'selected';}?>>  After Text  </option>
							<option value="before text" <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_SBIA=='before text'){ echo 'selected';}?>> Before Text </option>
						</select>
					</td>
					<td>
						<div class="Rich_Web_CS_Forms_Range">
							<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_T_SBIFS" name="Rich_Web_CS_Forms_T_SBIFS" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_SBIFS;?>" min="8" max="48">
							<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_T_SBIFS_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_SBHBgC" id="Rich_Web_CS_Forms_T_SBHBgC" class="Rich_Web_Contact_Form_Col2 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_SBHBgC;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_SBHC" id="Rich_Web_CS_Forms_T_SBHC" class="Rich_Web_Contact_Form_Col2 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_SBHC;?>">
					</td>
				</tr>
				<tr>
					<td colspan="4">Reset Button Options</td>
				</tr>
				<tr>
					<td>Background Color</td>
					<td>Border Width (px)</td>
					<td>Border Color</td>
					<td>Border Radius (px)</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_ReBBgC" id="Rich_Web_CS_Forms_T_ReBBgC" class="Rich_Web_Contact_Form_Col2 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_ReBBgC;?>">
					</td>
					<td>
						<div class="Rich_Web_CS_Forms_Range">
							<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_T_ReBBW" name="Rich_Web_CS_Forms_T_ReBBW" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_ReBBW;?>" min="0" max="5">
							<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_T_ReBBW_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_ReBBC" id="Rich_Web_CS_Forms_T_ReBBC" class="Rich_Web_Contact_Form_Col2 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_ReBBC;?>">
					</td>
					<td>
						<div class="Rich_Web_CS_Forms_Range">
							<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_T_ReBBR" name="Rich_Web_CS_Forms_T_ReBBR" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_ReBBR;?>" min="0" max="50">
							<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_T_ReBBR_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Button Align</td>
					<td>Font Size (px)</td>
					<td>Color</td>
					<td>Icon Type</td>
				</tr>
				<tr>
					<td>
						<select name="Rich_Web_CS_Forms_T_ReBBA" id="Rich_Web_CS_Forms_T_ReBBA">
							<option value="left"  <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_ReBBA=='left'){ echo 'selected';}?>>  Left       </option>
							<option value="right" <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_ReBBA=='right'){ echo 'selected';}?>> Right      </option>
							<option value="full"  <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_ReBBA=='full'){ echo 'selected';}?>>  Full Width </option>
						</select>
					</td>
					<td>
						<div class="Rich_Web_CS_Forms_Range">
							<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_T_ReBFS" name="Rich_Web_CS_Forms_T_ReBFS" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_ReBFS;?>" min="8" max="48">
							<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_T_ReBFS_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_ReBC" id="Rich_Web_CS_Forms_T_ReBC" class="Rich_Web_Contact_Form_Col2 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_ReBC;?>">
					</td>
					<td>
						<select name="Rich_Web_CS_Forms_T_ReBIT" id="Rich_Web_CS_Forms_T_ReBIT">
							<option value=""     <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_ReBIT==''){ echo 'selected';}?>>     None   </option>
							<option value="f1f8" <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_ReBIT=='f1f8'){ echo 'selected';}?>> Type 1 </option>
							<option value="f110" <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_ReBIT=='f110'){ echo 'selected';}?>> Type 2 </option>
							<option value="f021" <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_ReBIT=='f021'){ echo 'selected';}?>> Type 3 </option>
							<option value="f079" <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_ReBIT=='f079'){ echo 'selected';}?>> Type 4 </option>
							<option value="f00d" <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_ReBIT=='f00d'){ echo 'selected';}?>> Type 5 </option>
							<option value="f1ce" <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_ReBIT=='f1ce'){ echo 'selected';}?>> Type 6 </option>
							<option value="f1f7" <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_ReBIT=='f1f7'){ echo 'selected';}?>> Type 7 </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Icon Align</td>
					<td>Icon Size (px)</td>
					<td>Hover Background Color</td>
					<td>Hover Color</td>
				</tr>
				<tr>
					<td>
						<select name="Rich_Web_CS_Forms_T_ReBIA" id="Rich_Web_CS_Forms_T_ReBIA">
							<option value="after text"  <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_ReBIA=='after text'){ echo 'selected';}?>>  After Text  </option>
							<option value="before text" <?php if($Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_ReBIA=='before text'){ echo 'selected';}?>> Before Text </option>
						</select>
					</td>
					<td>
						<div class="Rich_Web_CS_Forms_Range">
							<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_T_ReBIFS" name="Rich_Web_CS_Forms_T_ReBIFS" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_ReBIFS;?>" min="8" max="48">
							<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_T_ReBIFS_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_ReBHBgC" id="Rich_Web_CS_Forms_T_ReBHBgC" class="Rich_Web_Contact_Form_Col2 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_ReBHBgC;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_ReBHC" id="Rich_Web_CS_Forms_T_ReBHC" class="Rich_Web_Contact_Form_Col2 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_ReBHC;?>">
					</td>
				</tr>
				<tr>
					<td>Divider Color</td>
					<td>DatePicker Format</td>
					<td>Map Width (%)</td>
					<td>Map Height (px)</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_T_DC" id="Rich_Web_CS_Forms_T_DC" class="Rich_Web_Contact_Form_Col2 alpha-color-picker" value="<?php echo $Rich_Web_CS_Forms_T2[0]->Rich_Web_CS_Forms_T_DC;?>">
					</td>
					<td>
						<select name="Rich_Web_CS_Forms_T_DF" id="Rich_Web_CS_Forms_T_DF">
							<option value="yy-mm-dd"  <?php if($Rich_Web_CS_Forms_T3[0]->Rich_Web_CS_Forms_T_01=='yy-mm-dd'){ echo 'selected';}?>>  yy-mm-dd  </option>
							<option value="yy MM dd"  <?php if($Rich_Web_CS_Forms_T3[0]->Rich_Web_CS_Forms_T_01=='yy MM dd'){ echo 'selected';}?>>  yy MM dd  </option>
							<option value="dd-mm-yy"  <?php if($Rich_Web_CS_Forms_T3[0]->Rich_Web_CS_Forms_T_01=='dd-mm-yy'){ echo 'selected';}?>>  dd-mm-yy  </option>
							<option value="dd MM yy"  <?php if($Rich_Web_CS_Forms_T3[0]->Rich_Web_CS_Forms_T_01=='dd MM yy'){ echo 'selected';}?>>  dd MM yy  </option>
							<option value="mm-dd-yy"  <?php if($Rich_Web_CS_Forms_T3[0]->Rich_Web_CS_Forms_T_01=='mm-dd-yy'){ echo 'selected';}?>>  mm-dd-yy  </option>
							<option value="MM dd, yy" <?php if($Rich_Web_CS_Forms_T3[0]->Rich_Web_CS_Forms_T_01=='MM dd, yy'){ echo 'selected';}?>> MM dd, yy </option>
						</select>
					</td>
					<td>
						<div class="Rich_Web_CS_Forms_Range">
							<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_T_MapW" name="Rich_Web_CS_Forms_T_MapW" value="<?php echo $Rich_Web_CS_Forms_T3[0]->Rich_Web_CS_Forms_T_02;?>" min="0" max="100">
							<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_T_MapW_Span">0</span>
						</div>
					</td>
					<td>
						<div class="Rich_Web_CS_Forms_Range">
							<input class="Rich_Web_CS_Forms_Range__range" type="range" id="Rich_Web_CS_Forms_T_MapH" name="Rich_Web_CS_Forms_T_MapH" value="<?php echo $Rich_Web_CS_Forms_T3[0]->Rich_Web_CS_Forms_T_04;?>" min="50" max="1200">
							<span class="Rich_Web_CS_Forms_Range__value" id="Rich_Web_CS_Forms_T_MapH_Span">0</span>
						</div>
					</td>
				</tr>
			</table>
		</div>
		<div style="text-align: right;">
			<input type="button" class="RW_CS_Button" onclick="RW_CS_Form_TO()" value="Save Changes">
		</div>
	</div>
</form>
<?php  

$ajax_nonce = wp_create_nonce(rand(1000,9000));


?>
<script type="text/javascript">
	var nonce = "<?php echo $ajax_nonce; ?>";
</script>



<?php


	if(isset($_POST['nonce']) == $ajax_nonce)
	{
		$Rich_Web_CS_Forms_all = $_POST['postData'];
		parse_str("$Rich_Web_CS_Forms_all",$myArray);
		$_POSTED = $myArray;

		global $wpdb;
		$table_name3 = $wpdb->prefix . "rich_web_cs_forms_themes1";
		$table_name4 = $wpdb->prefix . "rich_web_cs_forms_themes2";
		$table_name5 = $wpdb->prefix . "rich_web_cs_forms_themes3";

		$Rich_Web_CS_Forms_T_BgT=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_BgT']); $Rich_Web_CS_Forms_T_BgC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_BgC']); $Rich_Web_CS_Forms_T_BgC2=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_BgC2']); $Rich_Web_CS_Forms_T_BW=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_BW']); $Rich_Web_CS_Forms_T_BS=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_BS']); $Rich_Web_CS_Forms_T_BC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_BC']); $Rich_Web_CS_Forms_T_BR=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_BR']); $Rich_Web_CS_Forms_T_BoxShShow=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_BoxShShow']); $Rich_Web_CS_Forms_T_BoxShType=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_BoxShType']); $Rich_Web_CS_Forms_T_BoxSh=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_BoxSh']); $Rich_Web_CS_Forms_T_BoxShC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_BoxShC']); $Rich_Web_CS_Forms_T_LFS=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_LFS']); $Rich_Web_CS_Forms_T_LFF=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_LFF']); $Rich_Web_CS_Forms_T_LC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_LC']); $Rich_Web_CS_Forms_T_LRC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_LRC']); $Rich_Web_CS_Forms_T_LEC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_LEC']); $Rich_Web_CS_Forms_T_LBgC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_LBgC']); $Rich_Web_CS_Forms_T_TBHBg=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_TBHBg']); $Rich_Web_CS_Forms_T_TBBgC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_TBBgC']); $Rich_Web_CS_Forms_T_TBBW=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_TBBW']); $Rich_Web_CS_Forms_T_TBBC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_TBBC']); $Rich_Web_CS_Forms_T_TBBR=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_TBBR']); $Rich_Web_CS_Forms_T_TBFS=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_TBFS']); $Rich_Web_CS_Forms_T_TBC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_TBC']); $Rich_Web_CS_Forms_T_TAHBg=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_TAHBg']); $Rich_Web_CS_Forms_T_TABgC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_TABgC']); $Rich_Web_CS_Forms_T_TABW=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_TABW']); $Rich_Web_CS_Forms_T_TABC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_TABC']); $Rich_Web_CS_Forms_T_TABR=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_TABR']); $Rich_Web_CS_Forms_T_TAFS=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_TAFS']); $Rich_Web_CS_Forms_T_TAC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_TAC']); $Rich_Web_CS_Forms_T_SMHBg=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_SMHBg']); $Rich_Web_CS_Forms_T_SMBgC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_SMBgC']); $Rich_Web_CS_Forms_T_SMBW=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_SMBW']); $Rich_Web_CS_Forms_T_SMBC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_SMBC']); $Rich_Web_CS_Forms_T_SMBR=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_SMBR']); $Rich_Web_CS_Forms_T_SMFS=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_SMFS']); $Rich_Web_CS_Forms_T_SMC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_SMC']); $Rich_Web_CS_Forms_T_CBS=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_CBS']); $Rich_Web_CS_Forms_T_CBT=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_CBT']); $Rich_Web_CS_Forms_T_CBBgC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_CBBgC']); $Rich_Web_CS_Forms_T_CBBC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_CBBC']); $Rich_Web_CS_Forms_T_CBHBgC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_CBHBgC']); $Rich_Web_CS_Forms_T_CBHBC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_CBHBC']); $Rich_Web_CS_Forms_T_CBCBgC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_CBCBgC']); $Rich_Web_CS_Forms_T_CBCBC=''; $Rich_Web_CS_Forms_T_CBCC=''; $Rich_Web_CS_Forms_T_RBS=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_RBS']); $Rich_Web_CS_Forms_T_RBT=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_RBT']); $Rich_Web_CS_Forms_T_RBBgC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_RBBgC']); $Rich_Web_CS_Forms_T_RBBC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_RBBC']); $Rich_Web_CS_Forms_T_RBHBgC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_RBHBgC']); $Rich_Web_CS_Forms_T_RBHBC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_RBHBC']); $Rich_Web_CS_Forms_T_RBCBgC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_RBCBgC']); $Rich_Web_CS_Forms_T_RBCBC=''; $Rich_Web_CS_Forms_T_RBCC=''; $Rich_Web_CS_Forms_T_FUBgC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_FUBgC']); $Rich_Web_CS_Forms_T_FUBW=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_FUBW']); $Rich_Web_CS_Forms_T_FUBC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_FUBC']); $Rich_Web_CS_Forms_T_FUBR=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_FUBR']); $Rich_Web_CS_Forms_T_FUTC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_FUTC']); $Rich_Web_CS_Forms_T_FUFS=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_FUFS']); $Rich_Web_CS_Forms_T_FUIT=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_FUIT']); $Rich_Web_CS_Forms_T_FUIA=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_FUIA']); $Rich_Web_CS_Forms_T_FUIFS=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_FUIFS']); $Rich_Web_CS_Forms_T_FUBA=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_FUBA']); $Rich_Web_CS_Forms_T_FUHBgC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_FUHBgC']); $Rich_Web_CS_Forms_T_FUHTC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_FUHTC']); $Rich_Web_CS_Forms_T_EBHBg=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_EBHBg']); $Rich_Web_CS_Forms_T_EBBgC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_EBBgC']); $Rich_Web_CS_Forms_T_EBBW=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_EBBW']); $Rich_Web_CS_Forms_T_EBBC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_EBBC']); $Rich_Web_CS_Forms_T_EBBR=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_EBBR']); $Rich_Web_CS_Forms_T_EBFS=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_EBFS']); $Rich_Web_CS_Forms_T_EBC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_EBC']); $Rich_Web_CS_Forms_T_SBBgC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_SBBgC']); $Rich_Web_CS_Forms_T_SBBW=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_SBBW']); $Rich_Web_CS_Forms_T_SBBC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_SBBC']); $Rich_Web_CS_Forms_T_SBBR=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_SBBR']); $Rich_Web_CS_Forms_T_SBBA=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_SBBA']); $Rich_Web_CS_Forms_T_SBFS=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_SBFS']); $Rich_Web_CS_Forms_T_SBC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_SBC']); $Rich_Web_CS_Forms_T_SBIT=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_SBIT']); $Rich_Web_CS_Forms_T_SBIA=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_SBIA']); $Rich_Web_CS_Forms_T_SBIFS=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_SBIFS']); $Rich_Web_CS_Forms_T_SBHBgC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_SBHBgC']); $Rich_Web_CS_Forms_T_SBHC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_SBHC']); $Rich_Web_CS_Forms_T_ReBBgC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_ReBBgC']); $Rich_Web_CS_Forms_T_ReBBW=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_ReBBW']); $Rich_Web_CS_Forms_T_ReBBC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_ReBBC']); $Rich_Web_CS_Forms_T_ReBBR=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_ReBBR']); $Rich_Web_CS_Forms_T_ReBBA=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_ReBBA']); $Rich_Web_CS_Forms_T_ReBFS=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_ReBFS']); $Rich_Web_CS_Forms_T_ReBC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_ReBC']); $Rich_Web_CS_Forms_T_ReBIT=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_ReBIT']); $Rich_Web_CS_Forms_T_ReBIA=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_ReBIA']); $Rich_Web_CS_Forms_T_ReBIFS=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_ReBIFS']); $Rich_Web_CS_Forms_T_ReBHBgC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_ReBHBgC']); $Rich_Web_CS_Forms_T_ReBHC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_ReBHC']); $Rich_Web_CS_Forms_T_DC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_DC']); $Rich_Web_CS_Forms_T_W=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_W']); $Rich_Web_CS_Forms_T_Pos=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_Pos']); $Rich_Web_CS_Forms_T_LBR=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_LBR']); $Rich_Web_CS_Forms_T_LBC=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_LBC']); $Rich_Web_CS_Forms_T_DF=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_DF']); $Rich_Web_CS_Forms_T_ShForm=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_ShForm']); $Rich_Web_CS_Forms_T_MapW=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_MapW']); $Rich_Web_CS_Forms_T_MapH=sanitize_text_field($_POSTED['Rich_Web_CS_Forms_T_MapH']);

		$wpdb->query($wpdb->prepare("UPDATE $table_name3 set Rich_Web_CS_Forms_T_BgT=%s, Rich_Web_CS_Forms_T_BgC=%s, Rich_Web_CS_Forms_T_BgC2=%s, Rich_Web_CS_Forms_T_BW=%s, Rich_Web_CS_Forms_T_BS=%s, Rich_Web_CS_Forms_T_BC=%s, Rich_Web_CS_Forms_T_BR=%s, Rich_Web_CS_Forms_T_BoxShShow=%s, Rich_Web_CS_Forms_T_BoxShType=%s, Rich_Web_CS_Forms_T_BoxSh=%s, Rich_Web_CS_Forms_T_BoxShC=%s, Rich_Web_CS_Forms_T_LFS=%s, Rich_Web_CS_Forms_T_LFF=%s, Rich_Web_CS_Forms_T_LC=%s, Rich_Web_CS_Forms_T_LRC=%s, Rich_Web_CS_Forms_T_LEC=%s, Rich_Web_CS_Forms_T_LBgC=%s, Rich_Web_CS_Forms_T_TBHBg=%s, Rich_Web_CS_Forms_T_TBBgC=%s, Rich_Web_CS_Forms_T_TBBW=%s, Rich_Web_CS_Forms_T_TBBC=%s, Rich_Web_CS_Forms_T_TBBR=%s, Rich_Web_CS_Forms_T_TBFS=%s, Rich_Web_CS_Forms_T_TBC=%s, Rich_Web_CS_Forms_T_TAHBg=%s, Rich_Web_CS_Forms_T_TABgC=%s, Rich_Web_CS_Forms_T_TABW=%s, Rich_Web_CS_Forms_T_TABC=%s, Rich_Web_CS_Forms_T_TABR=%s, Rich_Web_CS_Forms_T_TAFS=%s, Rich_Web_CS_Forms_T_TAC=%s, Rich_Web_CS_Forms_T_SMHBg=%s, Rich_Web_CS_Forms_T_SMBgC=%s, Rich_Web_CS_Forms_T_SMBW=%s, Rich_Web_CS_Forms_T_SMBC=%s, Rich_Web_CS_Forms_T_SMBR=%s, Rich_Web_CS_Forms_T_SMFS=%s, Rich_Web_CS_Forms_T_SMC=%s, Rich_Web_CS_Forms_T_CBS=%s, Rich_Web_CS_Forms_T_CBT=%s, Rich_Web_CS_Forms_T_CBBgC=%s, Rich_Web_CS_Forms_T_CBBC=%s, Rich_Web_CS_Forms_T_CBHBgC=%s, Rich_Web_CS_Forms_T_CBHBC=%s, Rich_Web_CS_Forms_T_CBCBgC=%s, Rich_Web_CS_Forms_T_CBCBC=%s, Rich_Web_CS_Forms_T_CBCC=%s, Rich_Web_CS_Forms_T_RBS=%s, Rich_Web_CS_Forms_T_RBT=%s, Rich_Web_CS_Forms_T_RBBgC=%s, Rich_Web_CS_Forms_T_LBR=%s, Rich_Web_CS_Forms_T_LBC=%s WHERE id>%d", $Rich_Web_CS_Forms_T_BgT, $Rich_Web_CS_Forms_T_BgC, $Rich_Web_CS_Forms_T_BgC2, $Rich_Web_CS_Forms_T_BW, $Rich_Web_CS_Forms_T_BS, $Rich_Web_CS_Forms_T_BC, $Rich_Web_CS_Forms_T_BR, $Rich_Web_CS_Forms_T_BoxShShow, $Rich_Web_CS_Forms_T_BoxShType, $Rich_Web_CS_Forms_T_BoxSh, $Rich_Web_CS_Forms_T_BoxShC, $Rich_Web_CS_Forms_T_LFS, $Rich_Web_CS_Forms_T_LFF, $Rich_Web_CS_Forms_T_LC, $Rich_Web_CS_Forms_T_LRC, $Rich_Web_CS_Forms_T_LEC, $Rich_Web_CS_Forms_T_LBgC, $Rich_Web_CS_Forms_T_TBHBg, $Rich_Web_CS_Forms_T_TBBgC, $Rich_Web_CS_Forms_T_TBBW, $Rich_Web_CS_Forms_T_TBBC, $Rich_Web_CS_Forms_T_TBBR, $Rich_Web_CS_Forms_T_TBFS, $Rich_Web_CS_Forms_T_TBC, $Rich_Web_CS_Forms_T_TAHBg, $Rich_Web_CS_Forms_T_TABgC, $Rich_Web_CS_Forms_T_TABW, $Rich_Web_CS_Forms_T_TABC, $Rich_Web_CS_Forms_T_TABR, $Rich_Web_CS_Forms_T_TAFS, $Rich_Web_CS_Forms_T_TAC, $Rich_Web_CS_Forms_T_SMHBg, $Rich_Web_CS_Forms_T_SMBgC, $Rich_Web_CS_Forms_T_SMBW, $Rich_Web_CS_Forms_T_SMBC, $Rich_Web_CS_Forms_T_SMBR, $Rich_Web_CS_Forms_T_SMFS, $Rich_Web_CS_Forms_T_SMC, $Rich_Web_CS_Forms_T_CBS, $Rich_Web_CS_Forms_T_CBT, $Rich_Web_CS_Forms_T_CBBgC, $Rich_Web_CS_Forms_T_CBBC, $Rich_Web_CS_Forms_T_CBHBgC, $Rich_Web_CS_Forms_T_CBHBC, $Rich_Web_CS_Forms_T_CBCBgC, $Rich_Web_CS_Forms_T_CBCBC, $Rich_Web_CS_Forms_T_CBCC, $Rich_Web_CS_Forms_T_RBS, $Rich_Web_CS_Forms_T_RBT, $Rich_Web_CS_Forms_T_RBBgC, $Rich_Web_CS_Forms_T_LBR, $Rich_Web_CS_Forms_T_LBC, 0));
		$wpdb->query($wpdb->prepare("UPDATE $table_name4 set Rich_Web_CS_Forms_T_RBBC=%s, Rich_Web_CS_Forms_T_RBHBgC=%s, Rich_Web_CS_Forms_T_RBHBC=%s, Rich_Web_CS_Forms_T_RBCBgC=%s, Rich_Web_CS_Forms_T_RBCBC=%s, Rich_Web_CS_Forms_T_RBCC=%s, Rich_Web_CS_Forms_T_FUBgC=%s, Rich_Web_CS_Forms_T_FUBW=%s, Rich_Web_CS_Forms_T_FUBC=%s, Rich_Web_CS_Forms_T_FUBR=%s, Rich_Web_CS_Forms_T_FUTC=%s, Rich_Web_CS_Forms_T_FUFS=%s, Rich_Web_CS_Forms_T_FUIT=%s, Rich_Web_CS_Forms_T_FUIA=%s, Rich_Web_CS_Forms_T_FUIFS=%s, Rich_Web_CS_Forms_T_FUBA=%s, Rich_Web_CS_Forms_T_FUHBgC=%s, Rich_Web_CS_Forms_T_FUHTC=%s, Rich_Web_CS_Forms_T_EBHBg=%s, Rich_Web_CS_Forms_T_EBBgC=%s, Rich_Web_CS_Forms_T_EBBW=%s, Rich_Web_CS_Forms_T_EBBC=%s, Rich_Web_CS_Forms_T_EBBR=%s, Rich_Web_CS_Forms_T_EBFS=%s, Rich_Web_CS_Forms_T_EBC=%s, Rich_Web_CS_Forms_T_SBBgC=%s, Rich_Web_CS_Forms_T_SBBW=%s, Rich_Web_CS_Forms_T_SBBC=%s, Rich_Web_CS_Forms_T_SBBR=%s, Rich_Web_CS_Forms_T_SBBA=%s, Rich_Web_CS_Forms_T_SBFS=%s, Rich_Web_CS_Forms_T_SBC=%s, Rich_Web_CS_Forms_T_SBIT=%s, Rich_Web_CS_Forms_T_SBIA=%s, Rich_Web_CS_Forms_T_SBIFS=%s, Rich_Web_CS_Forms_T_SBHBgC=%s, Rich_Web_CS_Forms_T_SBHC=%s, Rich_Web_CS_Forms_T_ReBBgC=%s, Rich_Web_CS_Forms_T_ReBBW=%s, Rich_Web_CS_Forms_T_ReBBC=%s, Rich_Web_CS_Forms_T_ReBBR=%s, Rich_Web_CS_Forms_T_ReBBA=%s, Rich_Web_CS_Forms_T_ReBFS=%s, Rich_Web_CS_Forms_T_ReBC=%s, Rich_Web_CS_Forms_T_ReBIT=%s, Rich_Web_CS_Forms_T_ReBIA=%s, Rich_Web_CS_Forms_T_ReBIFS=%s, Rich_Web_CS_Forms_T_ReBHBgC=%s, Rich_Web_CS_Forms_T_ReBHC=%s, Rich_Web_CS_Forms_T_DC=%s, Rich_Web_CS_Forms_T_W=%s, Rich_Web_CS_Forms_T_Pos=%s WHERE id>%d", $Rich_Web_CS_Forms_T_RBBC, $Rich_Web_CS_Forms_T_RBHBgC, $Rich_Web_CS_Forms_T_RBHBC, $Rich_Web_CS_Forms_T_RBCBgC, $Rich_Web_CS_Forms_T_RBCBC, $Rich_Web_CS_Forms_T_RBCC, $Rich_Web_CS_Forms_T_FUBgC, $Rich_Web_CS_Forms_T_FUBW, $Rich_Web_CS_Forms_T_FUBC, $Rich_Web_CS_Forms_T_FUBR, $Rich_Web_CS_Forms_T_FUTC, $Rich_Web_CS_Forms_T_FUFS, $Rich_Web_CS_Forms_T_FUIT, $Rich_Web_CS_Forms_T_FUIA, $Rich_Web_CS_Forms_T_FUIFS, $Rich_Web_CS_Forms_T_FUBA, $Rich_Web_CS_Forms_T_FUHBgC, $Rich_Web_CS_Forms_T_FUHTC, $Rich_Web_CS_Forms_T_EBHBg, $Rich_Web_CS_Forms_T_EBBgC, $Rich_Web_CS_Forms_T_EBBW, $Rich_Web_CS_Forms_T_EBBC, $Rich_Web_CS_Forms_T_EBBR, $Rich_Web_CS_Forms_T_EBFS, $Rich_Web_CS_Forms_T_EBC, $Rich_Web_CS_Forms_T_SBBgC, $Rich_Web_CS_Forms_T_SBBW, $Rich_Web_CS_Forms_T_SBBC, $Rich_Web_CS_Forms_T_SBBR, $Rich_Web_CS_Forms_T_SBBA, $Rich_Web_CS_Forms_T_SBFS, $Rich_Web_CS_Forms_T_SBC, $Rich_Web_CS_Forms_T_SBIT, $Rich_Web_CS_Forms_T_SBIA, $Rich_Web_CS_Forms_T_SBIFS, $Rich_Web_CS_Forms_T_SBHBgC, $Rich_Web_CS_Forms_T_SBHC, $Rich_Web_CS_Forms_T_ReBBgC, $Rich_Web_CS_Forms_T_ReBBW, $Rich_Web_CS_Forms_T_ReBBC, $Rich_Web_CS_Forms_T_ReBBR, $Rich_Web_CS_Forms_T_ReBBA, $Rich_Web_CS_Forms_T_ReBFS, $Rich_Web_CS_Forms_T_ReBC, $Rich_Web_CS_Forms_T_ReBIT, $Rich_Web_CS_Forms_T_ReBIA, $Rich_Web_CS_Forms_T_ReBIFS, $Rich_Web_CS_Forms_T_ReBHBgC, $Rich_Web_CS_Forms_T_ReBHC, $Rich_Web_CS_Forms_T_DC, $Rich_Web_CS_Forms_T_W, $Rich_Web_CS_Forms_T_Pos, 0));
		$wpdb->query($wpdb->prepare("UPDATE $table_name5 set Rich_Web_CS_Forms_T_01=%s, Rich_Web_CS_Forms_T_02=%s, Rich_Web_CS_Forms_T_03=%s, Rich_Web_CS_Forms_T_04=%s, Rich_Web_CS_Forms_T_05=%s, Rich_Web_CS_Forms_T_06=%s, Rich_Web_CS_Forms_T_07=%s, Rich_Web_CS_Forms_T_08=%s, Rich_Web_CS_Forms_T_09=%s, Rich_Web_CS_Forms_T_10=%s, Rich_Web_CS_Forms_T_11=%s, Rich_Web_CS_Forms_T_12=%s, Rich_Web_CS_Forms_T_13=%s, Rich_Web_CS_Forms_T_14=%s, Rich_Web_CS_Forms_T_15=%s where id>%d", $Rich_Web_CS_Forms_T_DF, $Rich_Web_CS_Forms_T_MapW, $Rich_Web_CS_Forms_T_ShForm, $Rich_Web_CS_Forms_T_MapH, '', '', '', '', '', '', '', '', '', '', '', 0));
		die();
	}
?>