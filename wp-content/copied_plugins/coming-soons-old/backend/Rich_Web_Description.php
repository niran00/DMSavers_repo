<?php 
	if ( ! defined( 'ABSPATH' ) ) exit;
	$rw_cs_description = unserialize(get_option('rw_cs_description'));
?>
<form>
	<div class="form-group" style="width:100%;margin-bottom:0px;margin-top:10px;">
		<div class="row">
			<div class="col-md-12 col-lg-8">
				<label class="RW_Label">Description :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="If you would like to show Description then you would need to choose Show from drop down or vice versa"></i></label>
				<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_desc_show" name="rw_cs_desc_show" value="<?php echo $rw_cs_description['rw_cs_desc_show']; ?>" onchange="Rich_CS_Desc_Clicked()">
					<option value='show' <?php if($rw_cs_description['rw_cs_desc_show']=='show'){ echo 'selected';}?>> Show </option>
					<option value='hide' <?php if($rw_cs_description['rw_cs_desc_show']=='hide'){ echo 'selected';}?>> Hide </option>
				</select>
			</div>
		</div>
		<div class="row rw_desc_show_div">
			<div class="col-md-12 col-lg-8">
				<label class="RW_Label">Description Type :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose a type of Description which you would like to display. You can choose either Text Animation or Description"></i></label>
				<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_desc_Type" name="rw_cs_desc_Type" value="<?php echo $rw_cs_description['rw_cs_desc_Type']; ?>" onchange="Rich_CS_Desc_Type_Clicked()">
					<option value='Text Animation' <?php if($rw_cs_description['rw_cs_desc_Type']=='Text Animation'){ echo 'selected';}?>> Write Animation </option>
					<option value='Description'    <?php if($rw_cs_description['rw_cs_desc_Type']=='Description'){ echo 'selected';}?>>    Description     </option>
				</select>
			</div>
			<div class="col-md-12 rw_desc_type_show_div_text">
				<label class="RW_Label">Description Text :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide content for Description which you would like to display"></i></label>
				<textarea type="text" class="form-control RW_marg" rows="5" id="rw_cs_desc_HTML_Text" name="rw_cs_desc_HTML_Text" ><?php echo $rw_cs_description['rw_cs_desc_HTML_Text']; ?>
				</textarea>
			</div>
			<div class="col-md-12 rw_desc_type_show_div_text2">
				<div class="row">
					<div class="col-md-12">
						<label class="RW_Label">Write Animation Text :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide Text for Write Animation"></i></label>
						<textarea type="text" class="form-control RW_marg" rows="5" id="rw_cs_desc_Text_Anim" name="rw_cs_desc_Text_Anim" ><?php echo $rw_cs_description['rw_cs_desc_Text_Anim']; ?>
						</textarea>
					</div>
					<div class="col-md-6">
						<label class="RW_Label">Font Size(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Font Size"></i></label>
						<div class="range-cs">
							<input class="range-cs__range" type="range" id="rw_cs_desc_Text_FS" name="rw_cs_desc_Text_FS" value="<?php echo $rw_cs_description['rw_cs_desc_Text_FS']; ?>" min="0" max="100">
							<span class="range-cs__value" id="rw_cs_desc_Text_FS_Span"><?php echo $rw_cs_description['rw_cs_desc_Text_FS']; ?></span>
						</div>
					</div>
					<div class="col-md-6" style="margin-top:15px;">
						<label class="RW_Label">Font Family :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Font Family"></i></label>
						<select class="form-control RW_F RW_inp" id="rw_cs_desc_Text_FF" name="rw_cs_desc_Text_FF">
							<?php for($i=0;$i<count($Rich_WebFontCount);$i++){ ?> 
								<?php if($Rich_WebFontCount[$i]->Font_family==$rw_cs_description['rw_cs_desc_Text_FF']){ ?><option value="<?php echo $Rich_WebFontCount[$i]->Font_family;?>" selected><?php echo $Rich_WebFontCount[$i]->Font_family;?></option>
								<?php } else { ?> 
									<option value="<?php echo $Rich_WebFontCount[$i]->Font_family;?>"><?php echo $Rich_WebFontCount[$i]->Font_family;?></option>
								<?php }?>
							<?php }?>
						</select>
					</div>
					<div class="col-md-6" style="margin-bottom:15px;margin-top:15px;">
						<label class="RW_Label">Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Font Color for Write Animation"></i></label>
						<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_desc_Text_C" name="rw_cs_desc_Text_C" value="<?php echo $rw_cs_description['rw_cs_desc_Text_C']; ?>">
					</div>
				</div>
			</div>
			<div class="col-md-6" style="margin-top:15px;">
				<label class="RW_Label">Margin Top(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide Margin Top for Desctiption in pixels"></i></label>
				<div class="range-cs">
					<input class="range-cs__range" type="range" id="rw_cs_desc_MT" name="rw_cs_desc_MT" value="<?php echo $rw_cs_description['rw_cs_desc_MT']; ?>" min="0" max="100">
					<span class="range-cs__value" id="rw_cs_desc_MT_Span"><?php echo $rw_cs_description['rw_cs_desc_MT']; ?></span>
				</div>
			</div>
			<div class="col-md-6" style="margin-top:15px;">
				<label class="RW_Label">Margin Bottom(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide Margin Bottom for Desctiption in pixels"></i></label>
				<div class="range-cs">
					<input class="range-cs__range" type="range" id="rw_cs_desc_MB" name="rw_cs_desc_MB" value="<?php echo $rw_cs_description['rw_cs_desc_MB']; ?>" min="0" max="100">
					<span class="range-cs__value" id="rw_cs_desc_MB_Span"><?php echo $rw_cs_description['rw_cs_desc_MB']; ?></span>
				</div>
			</div>
			<div class="col-md-6" style="margin-top:15px;">
				<label class="RW_Label">Animation :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="If you would like to show Description Animation then you would need to choose Show from drop down"></i></label>
				<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_desc_Anim" name="rw_cs_desc_Anim" value="<?php echo $rw_cs_description['rw_cs_desc_Anim']; ?>">
					<option value='show' <?php if($rw_cs_description['rw_cs_desc_Anim']=='show'){ echo 'selected';}?>> Show </option>
					<option value='hide' <?php if($rw_cs_description['rw_cs_desc_Anim']=='hide'){ echo 'selected';}?>> Hide </option>
				</select>
			</div>
			<div class="col-md-6" style="margin-top:15px;">
				<label class="RW_Label">Text Align :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Text Align for text Description"></i></label>
				<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_desc_Text_TA" name="rw_cs_desc_Text_TA" value="<?php echo $rw_cs_description['rw_cs_desc_Text_TA']; ?>" onchange="Rich_CS_Desc_Type_Clicked()">
					<option value='left'    <?php if($rw_cs_description['rw_cs_desc_Text_TA']=='left'){ echo 'selected';}?>>    Left    </option>
					<option value='right'   <?php if($rw_cs_description['rw_cs_desc_Text_TA']=='right'){ echo 'selected';}?>>   Right   </option>
					<option value='center'  <?php if($rw_cs_description['rw_cs_desc_Text_TA']=='center'){ echo 'selected';}?>>  Center  </option>
					<option value='justify' <?php if($rw_cs_description['rw_cs_desc_Text_TA']=='justify'){ echo 'selected';}?>> Justify </option>
				</select>
			</div>
			<div class="col-md-12" style="margin-top:15px;">
				<label class="RW_Label">Custom CSS :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide CSS code manually to add extra styling to the above mentioned fields"></i></label>
				<textarea type="text" class="form-control RW_marg" rows="5" id="rw_cs_desc_Custom_CSS" name="rw_cs_desc_Custom_CSS" ><?php echo $rw_cs_description['rw_cs_desc_Custom_CSS']; ?>
				</textarea>
			</div>
		</div>
		<div class="RW_Line_Soperator"></div>
		<div style="text-align:right;">
			<input type="button" class="RW_CS_Button" onclick="RW_CS_Description()" value="Save Changes">
			<input type="button" class="RW_CS_Button_Res" data-toggle="modal" data-target="#myModal_Description" value="Reset Default Setting">
			<div class="modal fade" id="myModal_Description" role="dialog">
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
							<button type="button" onclick="RW_CS_Res_Description()" class="btn btn-primary" data-dismiss="modal">Yes</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<?php
	if(isset($_POST['action_desc'])=="rw_csp_desc")
	{
		$rw_cs_desc_show = sanitize_text_field($_POST['rw_cs_desc_show']); $rw_cs_desc_Type = sanitize_text_field($_POST['rw_cs_desc_Type']); $rw_cs_desc_HTML_Text = str_replace("\&","&",sanitize_text_field(esc_html($_POST['rw_cs_desc_HTML_Text']))); $rw_cs_desc_Text_Anim = sanitize_text_field($_POST['rw_cs_desc_Text_Anim']); $rw_cs_desc_Text_FS = sanitize_text_field($_POST['rw_cs_desc_Text_FS']); $rw_cs_desc_Text_FF = sanitize_text_field($_POST['rw_cs_desc_Text_FF']); $rw_cs_desc_Text_C = sanitize_text_field($_POST['rw_cs_desc_Text_C']); $rw_cs_desc_Text_TA = sanitize_text_field($_POST['rw_cs_desc_Text_TA']); $rw_cs_desc_Anim = sanitize_text_field($_POST['rw_cs_desc_Anim']); $rw_cs_desc_MT = sanitize_text_field($_POST['rw_cs_desc_MT']); $rw_cs_desc_MB = sanitize_text_field($_POST['rw_cs_desc_MB']); $rw_cs_desc_Custom_CSS = sanitize_text_field($_POST['rw_cs_desc_Custom_CSS']);
		$rw_description = serialize( array( 'rw_cs_desc_show' => $rw_cs_desc_show, 'rw_cs_desc_Type' => $rw_cs_desc_Type, 'rw_cs_desc_HTML_Text' => $rw_cs_desc_HTML_Text, 'rw_cs_desc_Text_Anim' => $rw_cs_desc_Text_Anim, 'rw_cs_desc_Text_FS' => $rw_cs_desc_Text_FS, 'rw_cs_desc_Text_FF' => $rw_cs_desc_Text_FF, 'rw_cs_desc_Text_C' => $rw_cs_desc_Text_C, 'rw_cs_desc_Text_TA' => $rw_cs_desc_Text_TA, 'rw_cs_desc_Anim' => $rw_cs_desc_Anim, 'rw_cs_desc_MT' => $rw_cs_desc_MT, 'rw_cs_desc_MB' => $rw_cs_desc_MB, 'rw_cs_desc_Custom_CSS' => $rw_cs_desc_Custom_CSS, ));
		update_option('rw_cs_description', $rw_description);
	}
	if(isset($_POST['reset_action_desc'])=="action_desc_reset")
	{
		$rw_description = serialize( array( 'rw_cs_desc_show' => "show", 'rw_cs_desc_Type' => "Description", 'rw_cs_desc_HTML_Text' => "<p style='text-align: justify;'><span style='color: #004e69; font-size: 10pt; font-family: arial, helvetica, sans-serif;'><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>", 'rw_cs_desc_Text_Anim' => "", 'rw_cs_desc_Text_FS' => "28", 'rw_cs_desc_Text_FF' => "Abadi MT Condensed Light", 'rw_cs_desc_Text_C' => "#ffffff", 'rw_cs_desc_Text_TA' => "center", 'rw_cs_desc_Anim' => "hide", 'rw_cs_desc_MT' => "0", 'rw_cs_desc_MB' => "0", 'rw_cs_desc_Custom_CSS' => "", ));
		update_option('rw_cs_description', $rw_description);
	}
?>