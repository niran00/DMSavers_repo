<?php 
	if ( ! defined( 'ABSPATH' ) ) exit;
	$rw_cs_button = unserialize(get_option('rw_cs_button'));
?>
<form>
	<div class="form-group" style="width:100%;margin-bottom:0px;margin-top:10px;">
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#homeB">More Information Button</a></li>
			<li><a data-toggle="tab" href="#menuB1">More Information Popup</a></li>
			<li><a data-toggle="tab" href="#menuB2">Form Button</a></li>
			<li><a data-toggle="tab" href="#menuB3">Form Popup</a></li>
		</ul>
		<div class="tab-content">
			<div id="homeB" class="tab-pane fade in active">
				<div class="row" style="margin-top:10px;">
					<div class="col-md-6">
						<label class="RW_Label">Text :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide text that will be displayed on the button"></i></label>
						<input type="text" class="form-control RW_inp RW_marg" id="rw_cs_MIB_text" name="rw_cs_MIB_text" value="<?php echo $rw_cs_button['rw_cs_MIB_text']; ?>">
					</div>
					<div class="col-md-6" style="margin-bottom:14px;">
						<label class="RW_Label">Font Size(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Font Size for More Information Text"></i></label>
						<div class="range-cs">
							<input class="range-cs__range" type="range" id="rw_cs_MIB_text_FS" name="rw_cs_MIB_text_FS" value="<?php echo $rw_cs_button['rw_cs_MIB_text_FS']; ?>" min="0" max="36">
							<span class="range-cs__value" id="rw_cs_MIB_text_FS_Span"><?php echo $rw_cs_button['rw_cs_MIB_text_FS']; ?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label class="RW_Label">Font Family :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Font Family"></i></label>
						<select class="form-control RW_F RW_inp" id="rw_cs_MIB_text_FF" name="rw_cs_MIB_text_FF">
							<?php for($i=0;$i<count($Rich_WebFontCount);$i++){ ?> 
								<?php if($Rich_WebFontCount[$i]->Font_family==$rw_cs_button['rw_cs_MIB_text_FF']){ ?><option value="<?php echo $Rich_WebFontCount[$i]->Font_family;?>" selected><?php echo $Rich_WebFontCount[$i]->Font_family;?></option>
								<?php } else { ?> 
									<option value="<?php echo $Rich_WebFontCount[$i]->Font_family;?>"><?php echo $Rich_WebFontCount[$i]->Font_family;?></option>
								<?php }?>
							<?php }?>
						</select>
					</div>
					<div class="col-md-6" style="margin-bottom:14px;">
						<label class="RW_Label">Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Font Color for More Information"></i></label>
						<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_MIB_text_C" name="rw_cs_MIB_text_C" value="<?php echo $rw_cs_button['rw_cs_MIB_text_C']; ?>">
					</div>
					<div class="col-md-6" style="margin-bottom:14px;">
						<label class="RW_Label">Background Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Background Color for More Information"></i></label>
						<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_MIB_text_BgC" name="rw_cs_MIB_text_BgC" value="<?php echo $rw_cs_button['rw_cs_MIB_text_BgC']; ?>">
					</div>
					<div class="col-md-6" style="margin-bottom:14px;">
						<label class="RW_Label">Hover Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Hover Font Color for More Information"></i></label>
						<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_MIB_text_HC" name="rw_cs_MIB_text_HC" value="<?php echo $rw_cs_button['rw_cs_MIB_text_HC']; ?>">
					</div>
					<div class="col-md-6" style="margin-bottom:14px;">
						<label class="RW_Label">Hover Background Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Hover Background Color for More Information"></i></label>
						<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_MIB_text_HBgC" name="rw_cs_MIB_text_HBgC" value="<?php echo $rw_cs_button['rw_cs_MIB_text_HBgC']; ?>">
					</div>
					<div class="col-md-6" style="margin-bottom:14px;">
						<label class="RW_Label">Border Width(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Border Width for More Information Text"></i></label>
						<div class="range-cs">
							<input class="range-cs__range" type="range" id="rw_cs_MIB_BW" name="rw_cs_MIB_BW" value="<?php echo $rw_cs_button['rw_cs_MIB_BW']; ?>" min="0" max="5">
							<span class="range-cs__value" id="rw_cs_MIB_BW_Span"><?php echo $rw_cs_button['rw_cs_MIB_BW']; ?></span>
						</div>
					</div>
					<div class="col-md-6" style="margin-bottom:14px;">
						<label class="RW_Label">Border Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Hover Border Color for More Information"></i></label>
						<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_MIB_BC" name="rw_cs_MIB_BC" value="<?php echo $rw_cs_button['rw_cs_MIB_BC']; ?>">
					</div>
					<div class="col-md-6" style="margin-bottom:14px;">
						<label class="RW_Label">Hover Border Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Hover Border Color for More Information"></i></label>
						<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_MIB_HBC" name="rw_cs_MIB_HBC" value="<?php echo $rw_cs_button['rw_cs_MIB_HBC']; ?>">
					</div>
					<div class="col-md-6" style="margin-bottom:14px;">
						<label class="RW_Label">Border Radius(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Radius for More Information Text"></i></label>
						<div class="range-cs">
							<input class="range-cs__range" type="range" id="rw_cs_MIB_BR" name="rw_cs_MIB_BR" value="<?php echo $rw_cs_button['rw_cs_MIB_BR']; ?>" min="0" max="200">
							<span class="range-cs__value" id="rw_cs_MIB_BR_Span"><?php echo $rw_cs_button['rw_cs_MIB_BR']; ?></span>
						</div>
					</div>
					<div class="col-md-6" style="margin-bottom:14px;">
						<label class="RW_Label">Shadow(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Shadow for More Information Text"></i></label>
						<div class="range-cs">
							<input class="range-cs__range" type="range" id="rw_cs_MIB_BSh" name="rw_cs_MIB_BSh" value="<?php echo $rw_cs_button['rw_cs_MIB_BSh']; ?>" min="0" max="50">
							<span class="range-cs__value" id="rw_cs_MIB_BR_Span"><?php echo $rw_cs_button['rw_cs_MIB_BSh']; ?></span>
						</div>
					</div>
					<div class="col-md-6" style="margin-bottom:14px;">
						<label class="RW_Label">Shadow Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Shadow Color for More Information"></i></label>
						<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_MIB_BShC" name="rw_cs_MIB_BShC" value="<?php echo $rw_cs_button['rw_cs_MIB_BShC']; ?>">
					</div>
					<div class="col-md-6">
						<label class="RW_Label">Animation :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="If you would like to show More Information Button Animation then you would need to choose Yes from drop down"></i></label>
						<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_MIB_Anim" name="rw_cs_MIB_Anim" value="<?php echo $rw_cs_button['rw_cs_MIB_Anim']; ?>">
							<option value='Yes' <?php if($rw_cs_button['rw_cs_MIB_Anim']=='Yes'){ echo 'selected';}?>> Yes </option>
							<option value='No'  <?php if($rw_cs_button['rw_cs_MIB_Anim']=='No'){ echo 'selected';}?>>  No  </option>
						</select>
					</div>
				</div>
			</div>
			<div id="menuB1" class="tab-pane fade">
				<div class="row" style="margin-top:10px;">
					<div class="col-md-6" style="margin-bottom:14px;">
						<label class="RW_Label">Overlay Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Overlay Color for More Information"></i></label>
						<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_MIB_Pop_Ov_BgC" name="rw_cs_MIB_Pop_Ov_BgC" value="<?php echo $rw_cs_button['rw_cs_MIB_Pop_Ov_BgC']; ?>">
					</div>
					<div class="col-md-6" style="margin-bottom:14px;">
						<label class="RW_Label">Content Width(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Content Width for More Information Text"></i></label>
						<div class="range-cs">
							<input class="range-cs__range" type="range" id="rw_cs_MIB_Pop_Cont_W" name="rw_cs_MIB_Pop_Cont_W" value="<?php echo $rw_cs_button['rw_cs_MIB_Pop_Cont_W']; ?>" min="100" max="1000">
							<span class="range-cs__value" id="rw_cs_MIB_Pop_Cont_W_Span"><?php echo $rw_cs_button['rw_cs_MIB_Pop_Cont_W']; ?></span>
						</div>
					</div>
					<div class="col-md-6" style="margin-bottom:14px;display:none;">
						<label class="RW_Label">Content Height(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Content Height for More Information Text"></i></label>
						<div class="range-cs">
							<input class="range-cs__range" type="range" id="rw_cs_MIB_Pop_Cont_H" name="rw_cs_MIB_Pop_Cont_H" value="<?php echo $rw_cs_button['rw_cs_MIB_Pop_Cont_H']; ?>" min="100" max="1000">
							<span class="range-cs__value" id="rw_cs_MIB_Pop_Cont_H_Span"><?php echo $rw_cs_button['rw_cs_MIB_Pop_Cont_H']; ?></span>
						</div>
					</div>
					<div class="col-md-6" style="margin-bottom:14px;">
						<label class="RW_Label">Content Border Width(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Content Border Width for More Information Text"></i></label>
						<div class="range-cs">
							<input class="range-cs__range" type="range" id="rw_cs_MIB_Pop_Cont_BW" name="rw_cs_MIB_Pop_Cont_BW" value="<?php echo $rw_cs_button['rw_cs_MIB_Pop_Cont_BW']; ?>" min="0" max="20">
							<span class="range-cs__value" id="rw_cs_MIB_Pop_Cont_BW_Span"><?php echo $rw_cs_button['rw_cs_MIB_Pop_Cont_BW']; ?></span>
						</div>
					</div>
					<div class="col-md-6" style="margin-bottom:17px;">
						<label class="RW_Label">Content Border Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Content Border Color for More Information"></i></label>
						<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_MIB_Pop_Cont_BC" name="rw_cs_MIB_Pop_Cont_BC" value="<?php echo $rw_cs_button['rw_cs_MIB_Pop_Cont_BC']; ?>">
					</div>
					<div class="col-md-6" style="margin-bottom:14px;">
						<label class="RW_Label">Content Shadow(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Content Shadow for More Information Text"></i></label>
						<div class="range-cs">
							<input class="range-cs__range" type="range" id="rw_cs_MIB_Pop_Cont_BSh" name="rw_cs_MIB_Pop_Cont_BSh" value="<?php echo $rw_cs_button['rw_cs_MIB_Pop_Cont_BSh']; ?>" min="0" max="50">
							<span class="range-cs__value" id="rw_cs_MIB_Pop_Cont_BSh_Span"><?php echo $rw_cs_button['rw_cs_MIB_Pop_Cont_BSh']; ?></span>
						</div>
					</div>
					<div class="col-md-6" style="margin-bottom:17px;">
						<label class="RW_Label">Content Shadow Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Content Shadow Color for More Information"></i></label>
						<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_MIB_Pop_Cont_ShC" name="rw_cs_MIB_Pop_Cont_ShC" value="<?php echo $rw_cs_button['rw_cs_MIB_Pop_Cont_ShC']; ?>">
					</div>
					<div class="col-md-6" style="margin-bottom:14px;">
						<label class="RW_Label">Content Background Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Content Background Color for More Information"></i></label>
						<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_MIB_Pop_Cont_BgC" name="rw_cs_MIB_Pop_Cont_BgC" value="<?php echo $rw_cs_button['rw_cs_MIB_Pop_Cont_BgC']; ?>">
					</div>
					<div class="col-md-6">
						<label class="RW_Label">Popup Close Icon Type :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="If you would like to show More Information Close Icon Type"></i></label>
						<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_MIB_Pop_Ic_Type" name="rw_cs_MIB_Pop_Ic_Type" value="<?php echo $rw_cs_button['rw_cs_MIB_Pop_Ic_Type']; ?>">
							<option value='rich_web rich_web-times'          <?php if($rw_cs_button['rw_cs_MIB_Pop_Ic_Type']=='rich_web rich_web-times'){ echo 'selected';}?>>          Type 1 </option>
							<option value='rich_web rich_web-times-circle'   <?php if($rw_cs_button['rw_cs_MIB_Pop_Ic_Type']=='rich_web rich_web-times-circle'){ echo 'selected';}?>>   Type 2 </option>
							<option value='rich_web rich_web-times-circle-o' <?php if($rw_cs_button['rw_cs_MIB_Pop_Ic_Type']=='rich_web rich_web-times-circle-o'){ echo 'selected';}?>> Type 3 </option>
						</select>
					</div>
					<div class="col-md-6" style="margin-bottom:14px;">
						<label class="RW_Label">Close Icon Size(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Size for More Information Close Icon"></i></label>
						<div class="range-cs">
							<input class="range-cs__range" type="range" id="rw_cs_MIB_Pop_Ic_FS" name="rw_cs_MIB_Pop_Ic_FS" value="<?php echo $rw_cs_button['rw_cs_MIB_Pop_Ic_FS']; ?>" min="8" max="36">
							<span class="range-cs__value" id="rw_cs_MIB_Pop_Ic_FS_Span"><?php echo $rw_cs_button['rw_cs_MIB_Pop_Ic_FS']; ?></span>
						</div>
					</div>
					<div class="col-md-6" style="margin-bottom:14px;">
						<label class="RW_Label">Close Icon Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Color for More Information Close Icon"></i></label>
						<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_MIB_Pop_Ic_C" name="rw_cs_MIB_Pop_Ic_C" value="<?php echo $rw_cs_button['rw_cs_MIB_Pop_Ic_C']; ?>">
					</div>
				</div>
			</div>
			<div id="menuB2" class="tab-pane fade">
				<div class="row" style="margin-top:10px;">
					<div class="col-md-6">
						<label class="RW_Label">Text :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide text that will be displayed on the button"></i></label>
						<input type="text" class="form-control RW_inp RW_marg" id="rw_cs_FB_text" name="rw_cs_FB_text" value="<?php echo $rw_cs_button['rw_cs_FB_text']; ?>">
					</div>
					<div class="col-md-6" style="margin-bottom:14px;">
						<label class="RW_Label">Font Size(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Font Size for Form Text"></i></label>
						<div class="range-cs">
							<input class="range-cs__range" type="range" id="rw_cs_FB_text_FS" name="rw_cs_FB_text_FS" value="<?php echo $rw_cs_button['rw_cs_FB_text_FS']; ?>" min="0" max="36">
							<span class="range-cs__value" id="rw_cs_FB_text_FS_Span"><?php echo $rw_cs_button['rw_cs_FB_text_FS']; ?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label class="RW_Label">Font Family :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Font Family"></i></label>
						<select class="form-control RW_F RW_inp" id="rw_cs_FB_text_FF" name="rw_cs_FB_text_FF">
							<?php for($i=0;$i<count($Rich_WebFontCount);$i++){ ?> 
								<?php if($Rich_WebFontCount[$i]->Font_family==$rw_cs_button['rw_cs_FB_text_FF']){ ?><option value="<?php echo $Rich_WebFontCount[$i]->Font_family;?>" selected><?php echo $Rich_WebFontCount[$i]->Font_family;?></option>
								<?php } else { ?> 
									<option value="<?php echo $Rich_WebFontCount[$i]->Font_family;?>"><?php echo $Rich_WebFontCount[$i]->Font_family;?></option>
								<?php }?>
							<?php }?>
						</select>
					</div>
					<div class="col-md-6" style="margin-bottom:14px;">
						<label class="RW_Label">Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Font Color for Form"></i></label>
						<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_FB_text_C" name="rw_cs_FB_text_C" value="<?php echo $rw_cs_button['rw_cs_FB_text_C']; ?>">
					</div>
					<div class="col-md-6" style="margin-bottom:14px;">
						<label class="RW_Label">Background Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Background Color for Form"></i></label>
						<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_FB_text_BgC" name="rw_cs_FB_text_BgC" value="<?php echo $rw_cs_button['rw_cs_FB_text_BgC']; ?>">
					</div>
					<div class="col-md-6" style="margin-bottom:14px;">
						<label class="RW_Label">Hover Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Hover Font Color for Form"></i></label>
						<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_FB_text_HC" name="rw_cs_FB_text_HC" value="<?php echo $rw_cs_button['rw_cs_FB_text_HC']; ?>">
					</div>
					<div class="col-md-6" style="margin-bottom:14px;">
						<label class="RW_Label">Hover Background Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Hover Background Color for Form"></i></label>
						<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_FB_text_HBgC" name="rw_cs_FB_text_HBgC" value="<?php echo $rw_cs_button['rw_cs_FB_text_HBgC']; ?>">
					</div>
					<div class="col-md-6" style="margin-bottom:14px;">
						<label class="RW_Label">Border Width(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Border Width for Form Text"></i></label>
						<div class="range-cs">
							<input class="range-cs__range" type="range" id="rw_cs_FB_BW" name="rw_cs_FB_BW" value="<?php echo $rw_cs_button['rw_cs_FB_BW']; ?>" min="0" max="5">
							<span class="range-cs__value" id="rw_cs_FB_BW_Span"><?php echo $rw_cs_button['rw_cs_FB_BW']; ?></span>
						</div>
					</div>
					<div class="col-md-6" style="margin-bottom:14px;">
						<label class="RW_Label">Border Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Hover Border Color for Form"></i></label>
						<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_FB_BC" name="rw_cs_FB_BC" value="<?php echo $rw_cs_button['rw_cs_FB_BC']; ?>">
					</div>
					<div class="col-md-6" style="margin-bottom:14px;">
						<label class="RW_Label">Hover Border Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Hover Border Color for Form"></i></label>
						<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_FB_HBC" name="rw_cs_FB_HBC" value="<?php echo $rw_cs_button['rw_cs_FB_HBC']; ?>">
					</div>
					<div class="col-md-6" style="margin-bottom:14px;">
						<label class="RW_Label">Border Radius(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Radius for Form Text"></i></label>
						<div class="range-cs">
							<input class="range-cs__range" type="range" id="rw_cs_FB_BR" name="rw_cs_FB_BR" value="<?php echo $rw_cs_button['rw_cs_FB_BR']; ?>" min="0" max="200">
							<span class="range-cs__value" id="rw_cs_FB_BR_Span"><?php echo $rw_cs_button['rw_cs_FB_BR']; ?></span>
						</div>
					</div>
					<div class="col-md-6" style="margin-bottom:14px;">
						<label class="RW_Label">Shadow(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Shadow for Form Text"></i></label>
						<div class="range-cs">
							<input class="range-cs__range" type="range" id="rw_cs_FB_BSh" name="rw_cs_FB_BSh" value="<?php echo $rw_cs_button['rw_cs_FB_BSh']; ?>" min="0" max="50">
							<span class="range-cs__value" id="rw_cs_FB_BR_Span"><?php echo $rw_cs_button['rw_cs_FB_BSh']; ?></span>
						</div>
					</div>
					<div class="col-md-6" style="margin-bottom:14px;">
						<label class="RW_Label">Shadow Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Shadow Color for Form"></i></label>
						<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_FB_BShC" name="rw_cs_FB_BShC" value="<?php echo $rw_cs_button['rw_cs_FB_BShC']; ?>">
					</div>
					<div class="col-md-6">
						<label class="RW_Label">Animation :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="If you would like to show Form Button Animation then you would need to choose Yes from drop down"></i></label>
						<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_FB_Anim" name="rw_cs_FB_Anim" value="<?php echo $rw_cs_button['rw_cs_FB_Anim']; ?>">
							<option value='Yes' <?php if($rw_cs_button['rw_cs_FB_Anim']=='Yes'){ echo 'selected';}?>> Yes </option>
							<option value='No'  <?php if($rw_cs_button['rw_cs_FB_Anim']=='No'){ echo 'selected';}?>>  No  </option>
						</select>
					</div>
				</div>
			</div>
			<div id="menuB3" class="tab-pane fade">
				<div class="row" style="margin-top:10px;">
					<div class="col-md-6" style="margin-bottom:14px;">
						<label class="RW_Label">Overlay Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Overlay Color for Form"></i></label>
						<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_FB_Pop_Ov_BgC" name="rw_cs_FB_Pop_Ov_BgC" value="<?php echo $rw_cs_button['rw_cs_FB_Pop_Ov_BgC']; ?>">
					</div>
					<div class="col-md-6" style="margin-bottom:14px;">
						<label class="RW_Label">Content Width(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Content Width for Form Text"></i></label>
						<div class="range-cs">
							<input class="range-cs__range" type="range" id="rw_cs_FB_Pop_Cont_W" name="rw_cs_FB_Pop_Cont_W" value="<?php echo $rw_cs_button['rw_cs_FB_Pop_Cont_W']; ?>" min="100" max="1000">
							<span class="range-cs__value" id="rw_cs_FB_Pop_Cont_W_Span"><?php echo $rw_cs_button['rw_cs_FB_Pop_Cont_W']; ?></span>
						</div>
					</div>
					<div class="col-md-6" style="margin-bottom:14px;display:none;">
						<label class="RW_Label">Content Height(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Content Height for Form Text"></i></label>
						<div class="range-cs">
							<input class="range-cs__range" type="range" id="rw_cs_FB_Pop_Cont_H" name="rw_cs_FB_Pop_Cont_H" value="<?php echo $rw_cs_button['rw_cs_FB_Pop_Cont_H']; ?>" min="100" max="1000">
							<span class="range-cs__value" id="rw_cs_FB_Pop_Cont_H_Span"><?php echo $rw_cs_button['rw_cs_FB_Pop_Cont_H']; ?></span>
						</div>
					</div>
					<div class="col-md-6" style="margin-bottom:14px;display:none;">
						<label class="RW_Label">Content Border Width(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Content Border Width for Form Text"></i></label>
						<div class="range-cs">
							<input class="range-cs__range" type="range" id="rw_cs_FB_Pop_Cont_BW" name="rw_cs_FB_Pop_Cont_BW" value="<?php echo $rw_cs_button['rw_cs_FB_Pop_Cont_BW']; ?>" min="0" max="20">
							<span class="range-cs__value" id="rw_cs_FB_Pop_Cont_BW_Span"><?php echo $rw_cs_button['rw_cs_FB_Pop_Cont_BW']; ?></span>
						</div>
					</div>
					<div class="col-md-6" style="margin-bottom:14px;display:none;">
						<label class="RW_Label">Content Border Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Content Border Color for Form"></i></label>
						<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_FB_Pop_Cont_BC" name="rw_cs_FB_Pop_Cont_BC" value="<?php echo $rw_cs_button['rw_cs_FB_Pop_Cont_BC']; ?>">
					</div>
					<div class="col-md-6" style="margin-bottom:14px;display:none;">
						<label class="RW_Label">Content Shadow(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Content Shadow for Form Text"></i></label>
						<div class="range-cs">
							<input class="range-cs__range" type="range" id="rw_cs_FB_Pop_Cont_BSh" name="rw_cs_FB_Pop_Cont_BSh" value="<?php echo $rw_cs_button['rw_cs_FB_Pop_Cont_BSh']; ?>" min="0" max="50">
							<span class="range-cs__value" id="rw_cs_FB_Pop_Cont_BSh_Span"><?php echo $rw_cs_button['rw_cs_FB_Pop_Cont_BSh']; ?></span>
						</div>
					</div>
					<div class="col-md-6" style="margin-bottom:14px;display:none;">
						<label class="RW_Label">Content Shadow Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Content Shadow Color for Form"></i></label>
						<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_FB_Pop_Cont_ShC" name="rw_cs_FB_Pop_Cont_ShC" value="<?php echo $rw_cs_button['rw_cs_FB_Pop_Cont_ShC']; ?>">
					</div>
					<div class="col-md-6" style="margin-bottom:14px;display:none;">
						<label class="RW_Label">Content Background Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Content Background Color for Form"></i></label>
						<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_FB_Pop_Cont_BgC" name="rw_cs_FB_Pop_Cont_BgC" value="<?php echo $rw_cs_button['rw_cs_FB_Pop_Cont_BgC']; ?>">
					</div>
					<div class="col-md-6">
						<label class="RW_Label">Popup Close Icon Type :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="If you would like to show Forms Close Icon Type"></i></label>
						<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_FB_Pop_Ic_Type" name="rw_cs_FB_Pop_Ic_Type" value="<?php echo $rw_cs_button['rw_cs_FB_Pop_Ic_Type']; ?>">
							<option value='rich_web rich_web-times'          <?php if($rw_cs_button['rw_cs_FB_Pop_Ic_Type']=='rich_web rich_web-times'){ echo 'selected';}?>>          Type 1 </option>
							<option value='rich_web rich_web-times-circle'   <?php if($rw_cs_button['rw_cs_FB_Pop_Ic_Type']=='rich_web rich_web-times-circle'){ echo 'selected';}?>>   Type 2 </option>
							<option value='rich_web rich_web-times-circle-o' <?php if($rw_cs_button['rw_cs_FB_Pop_Ic_Type']=='rich_web rich_web-times-circle-o'){ echo 'selected';}?>> Type 3 </option>
						</select>
					</div>
					<div class="col-md-6" style="margin-bottom:14px;">
						<label class="RW_Label">Close Icon Size(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Size for Forms Close Icon"></i></label>
						<div class="range-cs">
							<input class="range-cs__range" type="range" id="rw_cs_FB_Pop_Ic_FS" name="rw_cs_FB_Pop_Ic_FS" value="<?php echo $rw_cs_button['rw_cs_FB_Pop_Ic_FS']; ?>" min="8" max="36">
							<span class="range-cs__value" id="rw_cs_FB_Pop_Ic_FS_Span"><?php echo $rw_cs_button['rw_cs_FB_Pop_Ic_FS']; ?></span>
						</div>
					</div>
					<div class="col-md-6" style="margin-bottom:14px;">
						<label class="RW_Label">Close Icon Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Color for Forms Close Icon"></i></label>
						<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_FB_Pop_Ic_C" name="rw_cs_FB_Pop_Ic_C" value="<?php echo $rw_cs_button['rw_cs_FB_Pop_Ic_C']; ?>">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<label class="RW_Label">Custom CSS :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide CSS code manually to add extra styling to the above mentioned fields"></i></label>
					<textarea type="text" class="form-control RW_marg" rows="5" id="rw_cs_but_Custom_CSS" name="rw_cs_but_Custom_CSS" ><?php echo $rw_cs_button['rw_cs_but_Custom_CSS']; ?>
					</textarea>
				</div>
			</div>
		</div>
		<div class="RW_Line_Soperator"></div>
		<div style="text-align:right;">
			<input type="button" class="RW_CS_Button" onclick="RW_CS_Button()" value="Save Changes">
			<input type="button" class="RW_CS_Button_Res" data-toggle="modal" data-target="#myModal_Button" value="Reset Default Setting">
			<div class="modal fade" id="myModal_Button" role="dialog">
				<div class="modal-dialog modal-sm">
					<div class="modal-content RW_Modal">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<br/>
						</div>
						<div class="modal-body">
							<p class="RW_Modal_Text" style="text-align:center;">Are you sure you want to resit this setting?</p>
						</div>
						<div class="modal-footer">
							<button type="button" onclick="RW_CS_Res_Button()" class="btn btn-primary" data-dismiss="modal">Yes</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<?php
	if(isset($_POST['action_but'])=="rw_csp_but")
	{
		$rw_cs_MIB_text = sanitize_text_field($_POST['rw_cs_MIB_text']); $rw_cs_MIB_text_FS = sanitize_text_field($_POST['rw_cs_MIB_text_FS']); $rw_cs_MIB_text_FF = sanitize_text_field($_POST['rw_cs_MIB_text_FF']); $rw_cs_MIB_text_C = sanitize_text_field($_POST['rw_cs_MIB_text_C']); $rw_cs_MIB_text_BgC = sanitize_text_field($_POST['rw_cs_MIB_text_BgC']); $rw_cs_MIB_text_HC = sanitize_text_field($_POST['rw_cs_MIB_text_HC']); $rw_cs_MIB_text_HBgC = sanitize_text_field($_POST['rw_cs_MIB_text_HBgC']); $rw_cs_MIB_BW = sanitize_text_field($_POST['rw_cs_MIB_BW']); $rw_cs_MIB_BC = sanitize_text_field($_POST['rw_cs_MIB_BC']); $rw_cs_MIB_HBC = sanitize_text_field($_POST['rw_cs_MIB_HBC']); $rw_cs_MIB_BR = sanitize_text_field($_POST['rw_cs_MIB_BR']); $rw_cs_MIB_BSh = sanitize_text_field($_POST['rw_cs_MIB_BSh']); $rw_cs_MIB_BShC = sanitize_text_field($_POST['rw_cs_MIB_BShC']); $rw_cs_MIB_Anim = sanitize_text_field($_POST['rw_cs_MIB_Anim']); $rw_cs_MIB_Pop_Ov_BgC = sanitize_text_field($_POST['rw_cs_MIB_Pop_Ov_BgC']); $rw_cs_MIB_Pop_Cont_W = sanitize_text_field($_POST['rw_cs_MIB_Pop_Cont_W']); $rw_cs_MIB_Pop_Cont_H = sanitize_text_field($_POST['rw_cs_MIB_Pop_Cont_H']); $rw_cs_MIB_Pop_Cont_BW = sanitize_text_field($_POST['rw_cs_MIB_Pop_Cont_BW']); $rw_cs_MIB_Pop_Cont_BC = sanitize_text_field($_POST['rw_cs_MIB_Pop_Cont_BC']); $rw_cs_MIB_Pop_Cont_BSh = sanitize_text_field($_POST['rw_cs_MIB_Pop_Cont_BSh']); $rw_cs_MIB_Pop_Cont_ShC = sanitize_text_field($_POST['rw_cs_MIB_Pop_Cont_ShC']); $rw_cs_MIB_Pop_Cont_BgC = sanitize_text_field($_POST['rw_cs_MIB_Pop_Cont_BgC']); $rw_cs_MIB_Pop_Ic_Type = sanitize_text_field($_POST['rw_cs_MIB_Pop_Ic_Type']); $rw_cs_MIB_Pop_Ic_FS = sanitize_text_field($_POST['rw_cs_MIB_Pop_Ic_FS']); $rw_cs_MIB_Pop_Ic_C = sanitize_text_field($_POST['rw_cs_MIB_Pop_Ic_C']); $rw_cs_FB_text = sanitize_text_field($_POST['rw_cs_FB_text']); $rw_cs_FB_text_FS = sanitize_text_field($_POST['rw_cs_FB_text_FS']); $rw_cs_FB_text_FF = sanitize_text_field($_POST['rw_cs_FB_text_FF']); $rw_cs_FB_text_C = sanitize_text_field($_POST['rw_cs_FB_text_C']); $rw_cs_FB_text_BgC = sanitize_text_field($_POST['rw_cs_FB_text_BgC']); $rw_cs_FB_text_HC = sanitize_text_field($_POST['rw_cs_FB_text_HC']); $rw_cs_FB_text_HBgC = sanitize_text_field($_POST['rw_cs_FB_text_HBgC']); $rw_cs_FB_BW = sanitize_text_field($_POST['rw_cs_FB_BW']); $rw_cs_FB_BC = sanitize_text_field($_POST['rw_cs_FB_BC']); $rw_cs_FB_HBC = sanitize_text_field($_POST['rw_cs_FB_HBC']); $rw_cs_FB_BR = sanitize_text_field($_POST['rw_cs_FB_BR']); $rw_cs_FB_BSh = sanitize_text_field($_POST['rw_cs_FB_BSh']); $rw_cs_FB_BShC = sanitize_text_field($_POST['rw_cs_FB_BShC']); $rw_cs_FB_Anim = sanitize_text_field($_POST['rw_cs_FB_Anim']); $rw_cs_FB_Pop_Ov_BgC = sanitize_text_field($_POST['rw_cs_FB_Pop_Ov_BgC']); $rw_cs_FB_Pop_Cont_W = sanitize_text_field($_POST['rw_cs_FB_Pop_Cont_W']); $rw_cs_FB_Pop_Cont_H = sanitize_text_field($_POST['rw_cs_FB_Pop_Cont_H']); $rw_cs_FB_Pop_Cont_BW = sanitize_text_field($_POST['rw_cs_FB_Pop_Cont_BW']); $rw_cs_FB_Pop_Cont_BC = sanitize_text_field($_POST['rw_cs_FB_Pop_Cont_BC']); $rw_cs_FB_Pop_Cont_BSh = sanitize_text_field($_POST['rw_cs_FB_Pop_Cont_BSh']); $rw_cs_FB_Pop_Cont_ShC = sanitize_text_field($_POST['rw_cs_FB_Pop_Cont_ShC']); $rw_cs_FB_Pop_Cont_BgC = sanitize_text_field($_POST['rw_cs_FB_Pop_Cont_BgC']); $rw_cs_FB_Pop_Ic_Type = sanitize_text_field($_POST['rw_cs_FB_Pop_Ic_Type']); $rw_cs_FB_Pop_Ic_FS = sanitize_text_field($_POST['rw_cs_FB_Pop_Ic_FS']); $rw_cs_FB_Pop_Ic_C = sanitize_text_field($_POST['rw_cs_FB_Pop_Ic_C']); $rw_cs_but_Custom_CSS = sanitize_text_field($_POST['rw_cs_but_Custom_CSS']);
		$rw_button = serialize( array( 'rw_cs_MIB_text' => $rw_cs_MIB_text, 'rw_cs_MIB_text_FS' => $rw_cs_MIB_text_FS, 'rw_cs_MIB_text_FF' => $rw_cs_MIB_text_FF, 'rw_cs_MIB_text_C' => $rw_cs_MIB_text_C, 'rw_cs_MIB_text_BgC' => $rw_cs_MIB_text_BgC, 'rw_cs_MIB_text_HC' => $rw_cs_MIB_text_HC, 'rw_cs_MIB_text_HBgC' => $rw_cs_MIB_text_HBgC, 'rw_cs_MIB_BW' => $rw_cs_MIB_BW, 'rw_cs_MIB_BC' => $rw_cs_MIB_BC, 'rw_cs_MIB_HBC' => $rw_cs_MIB_HBC, 'rw_cs_MIB_BR' => $rw_cs_MIB_BR, 'rw_cs_MIB_BSh' => $rw_cs_MIB_BSh, 'rw_cs_MIB_BShC' => $rw_cs_MIB_BShC, 'rw_cs_MIB_Anim' => $rw_cs_MIB_Anim, 'rw_cs_MIB_Pop_Ov_BgC' => $rw_cs_MIB_Pop_Ov_BgC, 'rw_cs_MIB_Pop_Cont_W' => $rw_cs_MIB_Pop_Cont_W, 'rw_cs_MIB_Pop_Cont_H' => $rw_cs_MIB_Pop_Cont_H, 'rw_cs_MIB_Pop_Cont_BW' => $rw_cs_MIB_Pop_Cont_BW, 'rw_cs_MIB_Pop_Cont_BC' => $rw_cs_MIB_Pop_Cont_BC, 'rw_cs_MIB_Pop_Cont_BSh' => $rw_cs_MIB_Pop_Cont_BSh, 'rw_cs_MIB_Pop_Cont_ShC' => $rw_cs_MIB_Pop_Cont_ShC, 'rw_cs_MIB_Pop_Cont_BgC' => $rw_cs_MIB_Pop_Cont_BgC, 'rw_cs_MIB_Pop_Ic_Type' => $rw_cs_MIB_Pop_Ic_Type, 'rw_cs_MIB_Pop_Ic_FS' => $rw_cs_MIB_Pop_Ic_FS, 'rw_cs_MIB_Pop_Ic_C' => $rw_cs_MIB_Pop_Ic_C, 'rw_cs_FB_text' => $rw_cs_FB_text, 'rw_cs_FB_text_FS' => $rw_cs_FB_text_FS, 'rw_cs_FB_text_FF' => $rw_cs_FB_text_FF, 'rw_cs_FB_text_C' => $rw_cs_FB_text_C, 'rw_cs_FB_text_BgC' => $rw_cs_FB_text_BgC, 'rw_cs_FB_text_HC' => $rw_cs_FB_text_HC, 'rw_cs_FB_text_HBgC' => $rw_cs_FB_text_HBgC, 'rw_cs_FB_BW' => $rw_cs_FB_BW, 'rw_cs_FB_BC' => $rw_cs_FB_BC, 'rw_cs_FB_HBC' => $rw_cs_FB_HBC, 'rw_cs_FB_BR' => $rw_cs_FB_BR, 'rw_cs_FB_BSh' => $rw_cs_FB_BSh, 'rw_cs_FB_BShC' => $rw_cs_FB_BShC, 'rw_cs_FB_Anim' => $rw_cs_FB_Anim, 'rw_cs_FB_Pop_Ov_BgC' => $rw_cs_FB_Pop_Ov_BgC, 'rw_cs_FB_Pop_Cont_W' => $rw_cs_FB_Pop_Cont_W, 'rw_cs_FB_Pop_Cont_H' => $rw_cs_FB_Pop_Cont_H, 'rw_cs_FB_Pop_Cont_BW' => $rw_cs_FB_Pop_Cont_BW, 'rw_cs_FB_Pop_Cont_BC' => $rw_cs_FB_Pop_Cont_BC, 'rw_cs_FB_Pop_Cont_BSh' => $rw_cs_FB_Pop_Cont_BSh, 'rw_cs_FB_Pop_Cont_ShC' => $rw_cs_FB_Pop_Cont_ShC, 'rw_cs_FB_Pop_Cont_BgC' => $rw_cs_FB_Pop_Cont_BgC, 'rw_cs_FB_Pop_Ic_Type' => $rw_cs_FB_Pop_Ic_Type, 'rw_cs_FB_Pop_Ic_FS' => $rw_cs_FB_Pop_Ic_FS, 'rw_cs_FB_Pop_Ic_C' => $rw_cs_FB_Pop_Ic_C, 'rw_cs_but_Custom_CSS' => $rw_cs_but_Custom_CSS, ));
		update_option('rw_cs_button', $rw_button);
	}
	if(isset($_POST['reset_action_but'])=="action_but_reset")
	{
		$rw_button = serialize( array( 'rw_cs_MIB_text' => "More Information", 'rw_cs_MIB_text_FS' => "14", 'rw_cs_MIB_text_FF' => "Abadi MT Condensed Light", 'rw_cs_MIB_text_C' => "#ffffff", 'rw_cs_MIB_text_BgC' => "#30a9d1", 'rw_cs_MIB_text_HC' => "#ffffff", 'rw_cs_MIB_text_HBgC' => "#47bde5", 'rw_cs_MIB_BW' => "1", 'rw_cs_MIB_BC' => "#ffffff", 'rw_cs_MIB_HBC' => "#ffffff", 'rw_cs_MIB_BR' => "24", 'rw_cs_MIB_BSh' => "11", 'rw_cs_MIB_BShC' => "#ffffff", 'rw_cs_MIB_Anim' => "No", 'rw_cs_MIB_Pop_Ov_BgC' => "rgba(31, 34, 46, 0.9)", 'rw_cs_MIB_Pop_Cont_W' => "650", 'rw_cs_MIB_Pop_Cont_H' => "500", 'rw_cs_MIB_Pop_Cont_BW' => "1", 'rw_cs_MIB_Pop_Cont_BC' => "#ffffff", 'rw_cs_MIB_Pop_Cont_BSh' => "10", 'rw_cs_MIB_Pop_Cont_ShC' => "#ffffff", 'rw_cs_MIB_Pop_Cont_BgC' => "#ffffff", 'rw_cs_MIB_Pop_Ic_Type' => "rich_web rich_web-times", 'rw_cs_MIB_Pop_Ic_FS' => "25", 'rw_cs_MIB_Pop_Ic_C' => "#ffffff", 'rw_cs_FB_text' => "Contuct Us", 'rw_cs_FB_text_FS' => "14", 'rw_cs_FB_text_FF' => "Abadi MT Condensed Light", 'rw_cs_FB_text_C' => "#ffffff", 'rw_cs_FB_text_BgC' => "#30a9d1", 'rw_cs_FB_text_HC' => "#ffffff", 'rw_cs_FB_text_HBgC' => "#47bde5", 'rw_cs_FB_BW' => "1", 'rw_cs_FB_BC' => "#ffffff", 'rw_cs_FB_HBC' => "#ffffff", 'rw_cs_FB_BR' => "24", 'rw_cs_FB_BSh' => "11", 'rw_cs_FB_BShC' => "#ffffff", 'rw_cs_FB_Anim' => "No", 'rw_cs_FB_Pop_Ov_BgC' => "rgba(31, 34, 46, 0.9)", 'rw_cs_FB_Pop_Cont_W' => "650", 'rw_cs_FB_Pop_Cont_H' => "500", 'rw_cs_FB_Pop_Cont_BW' => "1", 'rw_cs_FB_Pop_Cont_BC' => "#dd3333", 'rw_cs_FB_Pop_Cont_BSh' => "0", 'rw_cs_FB_Pop_Cont_ShC' => "#000000", 'rw_cs_FB_Pop_Cont_BgC' => "#000000", 'rw_cs_FB_Pop_Ic_Type' => "rich_web rich_web-times", 'rw_cs_FB_Pop_Ic_FS' => "25", 'rw_cs_FB_Pop_Ic_C' => "#ffffff", 'rw_cs_but_Custom_CSS' => "", ));
		update_option('rw_cs_button', $rw_button);
	}
?>