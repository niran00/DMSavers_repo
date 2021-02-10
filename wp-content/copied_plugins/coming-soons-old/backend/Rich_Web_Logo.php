<?php 
	if ( ! defined( 'ABSPATH' ) ) exit;
	$rw_cs_logo = unserialize(get_option('rw_cs_logo'));
	$rw_logo_url = RW_PLUGIN_URL.'backend/Images/rich-web-logo.png'; 
?>
<form>
	<div class="form-group" style="width:100%;margin-bottom:0px;margin-top:10px;">
		<div class="row">
			<div class="col-md-12 col-lg-8">
				<label class="RW_Label">Logo :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="If you would like to display Logo on the layout then you would need to choose Show from drop down or vice versa"></i></label>
				<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_logo_show" name="rw_cs_logo_show" value="<?php echo $rw_cs_logo['rw_cs_logo_show']; ?>" onchange="Rich_CS_Logo_Clicked()">
					<option value='show' <?php if($rw_cs_logo['rw_cs_logo_show']=='show'){ echo 'selected';}?>> Show </option>
					<option value='hide' <?php if($rw_cs_logo['rw_cs_logo_show']=='hide'){ echo 'selected';}?>> Hide </option>
				</select>
			</div>
		</div>
		<div class="row rw_logo_show_div">
			<div class="col-md-12 col-lg-8">
				<label class="RW_Label">Logo Type :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose a type of Logo which you would like to display. You can choose either Text or Image"></i></label>
				<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_logo_type" name="rw_cs_logo_type" value="<?php echo $rw_cs_logo['rw_cs_logo_type']; ?>" onchange="Rich_CS_Logo_Type_Clicked()">
					<option value='Text'  <?php if($rw_cs_logo['rw_cs_logo_type']=='Text'){ echo 'selected';}?>>  Text  </option>
					<option value='Image' <?php if($rw_cs_logo['rw_cs_logo_type']=='Image'){ echo 'selected';}?>> Image </option>
				</select>
			</div>
			<div class="col-md-12 rw_logo_type_show_div_text">
				<div class="row">
					<div class="col-md-6">
						<label class="RW_Label">Logo Text :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide Text for Logo"></i></label>
						<input type="text" class="form-control RW_inp RW_marg" id="rw_cs_logo_text" name="rw_cs_logo_text" value="<?php echo $rw_cs_logo['rw_cs_logo_text']; ?>">
					</div>
					<div style="margin-bottom:15px;" class="col-md-6">
						<label class="RW_Label">Font Size(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Font Size"></i></label>
						<div class="range-cs">
							<input class="range-cs__range" type="range" id="rw_cs_logo_text_FS" name="rw_cs_logo_text_FS" value="<?php echo $rw_cs_logo['rw_cs_logo_text_FS']; ?>" min="8" max="100">
							<span class="range-cs__value" id="rw_cs_logo_Text_FS_Span"><?php echo $rw_cs_logo['rw_cs_logo_text_FS']; ?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label style="margin-top:10px;" class="RW_Label">Font Family :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Font Family"></i></label>
						<select class="form-control RW_F RW_inp" id="rw_cs_logo_text_FF" name="rw_cs_logo_text_FF">
							<?php for($i=0;$i<count($Rich_WebFontCount);$i++){ ?> 
								<?php if($Rich_WebFontCount[$i]->Font_family==$rw_cs_logo['rw_cs_logo_text_FF']){ ?><option value="<?php echo $Rich_WebFontCount[$i]->Font_family;?>" selected><?php echo $Rich_WebFontCount[$i]->Font_family;?></option>
								<?php } else { ?> 
									<option value="<?php echo $Rich_WebFontCount[$i]->Font_family;?>"><?php echo $Rich_WebFontCount[$i]->Font_family;?></option>
								<?php }?>
							<?php }?>
						</select>
					</div>
					<div class="col-md-6" style="margin-bottom:15px;">
						<label style="margin-top:10px;" class="RW_Label">Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Font Color for Logo"></i></label>
						<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_logo_text_C" name="rw_cs_logo_text_C" value="<?php echo $rw_cs_logo['rw_cs_logo_text_C']; ?>">
					</div>
					<div class="col-md-6">
						<label class="RW_Label">HTML Tag Property :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Heading Tags for text logo"></i></label>
						<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_logo_text_HTML" name="rw_cs_logo_text_HTML" value="<?php echo $rw_cs_logo['rw_cs_logo_text_HTML']; ?>">
							<option value='h1' <?php if($rw_cs_logo['rw_cs_logo_text_HTML']=='h1'){ echo 'selected';}?>> H1       </option>
							<option value='h2' <?php if($rw_cs_logo['rw_cs_logo_text_HTML']=='h2'){ echo 'selected';}?>> H2       </option>
							<option value='h3' <?php if($rw_cs_logo['rw_cs_logo_text_HTML']=='h3'){ echo 'selected';}?>> H3       </option>
							<option value='h4' <?php if($rw_cs_logo['rw_cs_logo_text_HTML']=='h4'){ echo 'selected';}?>> H4       </option>
							<option value='h5' <?php if($rw_cs_logo['rw_cs_logo_text_HTML']=='h5'){ echo 'selected';}?>> H5       </option>
							<option value='h6' <?php if($rw_cs_logo['rw_cs_logo_text_HTML']=='h6'){ echo 'selected';}?>> H6       </option>
							<option value='p'  <?php if($rw_cs_logo['rw_cs_logo_text_HTML']=='p'){ echo 'selected';}?>>  Paragraf </option>
						</select>
					</div>
				</div>
			</div>
			<div class="col-md-12 rw_logo_type_show_div_image">
				<div class="row">
					<div class="col-md-6">
						<label class="RW_Label">Logo Image :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to upload image for Logo"></i></label>
						<div>
							<div class="col-md-9" style="padding:0px;">
								<input class="form-control RW_inp RW_marg" id="rich_web_cs_logo_imgSrc_2" name="rw_cs_logo_Image" type="text" value="<?php echo $rw_cs_logo['rw_cs_logo_Image']; ?>" disabled>
							</div>
							<div class="col-md-3" style="padding-right:0px;">
								<div id="wp-content-media-buttons" class="wp-media-buttons" style="text-align:center;" >
									<a href="#" class="button insert-media add_media" style="border:1px solid rgba(0, 73, 107, 0.8); color:rgba(0, 73, 107, 0.8); background-color:#f4f4f4" data-editor="rich_web_cs_logo_imgSrc_1" title="Add Image" id="rich_web_cs_logo_ImgSrc" onclick="rich_web_cs_logo_Img_Src_Clicked()">
										<span class="wp-media-buttons-icon"></span>Add Image
									</a>
								</div>
								<input type="text" style="display:none;" id="rich_web_cs_logo_imgSrc_1" class='RWCSInput RWCSInput2'>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<label class="RW_Label">Logo Size :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Custom or Default size for the logo"></i></label>
						<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_logo_Image_ST" name="rw_cs_logo_Image_ST" value="<?php echo $rw_cs_logo['rw_cs_logo_Image_ST']; ?>" onchange="Rich_CS_Logo_Tmage_ST_Clicked()">
							<option value='Default' <?php if($rw_cs_logo['rw_cs_logo_Image_ST']=='Default'){ echo 'selected';}?>> Default </option>
							<option value='Custom'  <?php if($rw_cs_logo['rw_cs_logo_Image_ST']=='Custom'){ echo 'selected';}?>>  Custom  </option>
						</select>
					</div>
					<div class="Rich_CS_Logo_Tmage_SShow col-md-12">
						<div class="row">
							<div class="col-md-6">
								<label class="RW_Label">Max Width(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide Maximum Width for Logo"></i></label>
								<div class="range-cs">
									<input class="range-cs__range" type="range" id="rw_cs_logo_Image_MW" name="rw_cs_logo_Image_MW" value="<?php echo $rw_cs_logo['rw_cs_logo_Image_MW']; ?>" min="10" max="500">
									<span class="range-cs__value" id="rw_cs_logo_Image_MW_Span"><?php echo $rw_cs_logo['rw_cs_logo_Image_MW']; ?></span>
								</div>
							</div>
							<div class="col-md-6">
								<label class="RW_Label">Max Height(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide Maximum Height for Logo"></i></label>
								<div class="range-cs">
									<input class="range-cs__range" type="range" id="rw_cs_logo_Image_MH" name="rw_cs_logo_Image_MH" value="<?php echo $rw_cs_logo['rw_cs_logo_Image_MH']; ?>" min="10" max="500">
									<span class="range-cs__value" id="rw_cs_logo_Image_MH_Span"><?php echo $rw_cs_logo['rw_cs_logo_Image_MH']; ?></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-lg-8">
				<label class="RW_Label">Logo Link :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="If you would like to provide a link on Logo then you would need to choose Show from drop down or vice versa"></i></label>
				<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_logo_Link_Show" name="rw_cs_logo_Link_Show" value="<?php echo $rw_cs_logo['rw_cs_logo_Link_Show']; ?>" onchange="Rich_CS_Logo_Link_Clicked()">
					<option value='show' <?php if($rw_cs_logo['rw_cs_logo_Link_Show']=='show'){ echo 'selected';}?>> Show </option>
					<option value='hide' <?php if($rw_cs_logo['rw_cs_logo_Link_Show']=='hide'){ echo 'selected';}?>> Hide </option>
				</select>
			</div>
			<div class="col-md-12 rw_logo_link_show">
				<div class="row">
					<div class="col-md-6">
						<label class="RW_Label">Logo Link URL :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide a valid Logo Link Path to display link on Logo"></i></label>
						<input type="text" class="form-control RW_inp RW_marg" id="rw_cs_logo_Link_Url" name="rw_cs_logo_Link_Url" value="<?php echo $rw_cs_logo['rw_cs_logo_Link_Url']; ?>">
					</div>
					<div class="col-md-6">
						<label class="RW_Label">Target :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Target for Logo Link. You can choose either Blank or Self"></i></label>
						<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_logo_Link_Target" name="rw_cs_logo_Link_Target" value="<?php echo $rw_cs_logo['rw_cs_logo_Link_Target']; ?>" >
							<option value='_blank' <?php if($rw_cs_logo['rw_cs_logo_Link_Target']=='_blank'){ echo 'selected';}?>> Blank </option>
							<option value='_self'  <?php if($rw_cs_logo['rw_cs_logo_Link_Target']=='_self'){ echo 'selected';}?>>  Self  </option>
						</select>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<label class="RW_Label">Margin Top(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide Margin Top for Logo in pixels"></i></label>
				<div class="range-cs">
					<input class="range-cs__range" type="range" id="rw_cs_logo_MT" name="rw_cs_logo_MT" value="<?php echo $rw_cs_logo['rw_cs_logo_MT']; ?>" min="0" max="100">
					<span class="range-cs__value" id="rw_cs_logo_Image_MH_Span"><?php echo $rw_cs_logo['rw_cs_logo_MT_Span']; ?></span>
				</div>
			</div>
			<div class="col-md-6">
				<label class="RW_Label">Margin Bottom(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide Margin Bottom for Logo in pixels"></i></label>
				<div class="range-cs">
					<input class="range-cs__range" type="range" id="rw_cs_logo_MB" name="rw_cs_logo_MB" value="<?php echo $rw_cs_logo['rw_cs_logo_MB']; ?>" min="0" max="100">
					<span class="range-cs__value" id="rw_cs_logo_Image_MH_Span"><?php echo $rw_cs_logo['rw_cs_logo_MB_Span']; ?></span>
				</div>
			</div>
			<div class="col-md-12">
				<label style="margin-top:15px;" class="RW_Label">Custom CSS :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide CSS code manually to add extra styling to the above mentioned fields"></i></label>
				<textarea type="text" class="form-control RW_marg" rows="5" id="rw_cs_logo_Link_Custom_CSS" name="rw_cs_logo_Link_Custom_CSS" ><?php echo $rw_cs_logo['rw_cs_logo_Link_Custom_CSS']; ?>
				</textarea>
			</div>
		</div>
		<div class="RW_Line_Soperator"></div>
		<div style="text-align:right;">
			<input type="button" class="RW_CS_Button" onclick="RW_CS_Logo()" value="Save Changes">
			<input type="button" class="RW_CS_Button_Res" data-toggle="modal" data-target="#myModal_Logo" value="Reset Default Setting">
			<div class="modal fade" id="myModal_Logo" role="dialog">
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
							<button type="button" onclick="RW_CS_Res_Logo()" class="btn btn-primary" data-dismiss="modal">Yes</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<input type="text" style="display:none;" class="RW_Upload_Logo" value="<?php echo $rw_logo_url; ?>">
<?php
	if(isset($_POST['action_logo'])=="rw_csp_logo")
	{
		$rw_cs_logo_show = sanitize_text_field($_POST['rw_cs_logo_show']); $rw_cs_logo_type = sanitize_text_field($_POST['rw_cs_logo_type']); $rw_cs_logo_text = sanitize_text_field($_POST['rw_cs_logo_text']); $rw_cs_logo_text_FS = sanitize_text_field($_POST['rw_cs_logo_text_FS']); $rw_cs_logo_text_FF = sanitize_text_field($_POST['rw_cs_logo_text_FF']); $rw_cs_logo_text_C = sanitize_text_field($_POST['rw_cs_logo_text_C']); $rw_cs_logo_text_HTML = sanitize_text_field($_POST['rw_cs_logo_text_HTML']); $rw_cs_logo_Image = sanitize_text_field($_POST['rw_cs_logo_Image']); $rw_cs_logo_Image_ST = sanitize_text_field($_POST['rw_cs_logo_Image_ST']); $rw_cs_logo_Image_MW = sanitize_text_field($_POST['rw_cs_logo_Image_MW']); $rw_cs_logo_Image_MH = sanitize_text_field($_POST['rw_cs_logo_Image_MH']); $rw_cs_logo_Link_Show = sanitize_text_field($_POST['rw_cs_logo_Link_Show']); $rw_cs_logo_Link_Url = sanitize_text_field($_POST['rw_cs_logo_Link_Url']); $rw_cs_logo_Link_Target = sanitize_text_field($_POST['rw_cs_logo_Link_Target']); $rw_cs_logo_MT = sanitize_text_field($_POST['rw_cs_logo_MT']); $rw_cs_logo_MB = sanitize_text_field($_POST['rw_cs_logo_MB']); $rw_cs_logo_Link_Custom_CSS = sanitize_text_field($_POST['rw_cs_logo_Link_Custom_CSS']);
		$rw_logo = serialize( array( 'rw_cs_logo_show' => $rw_cs_logo_show, 'rw_cs_logo_type' => $rw_cs_logo_type, 'rw_cs_logo_text' => $rw_cs_logo_text, 'rw_cs_logo_text_FS' => $rw_cs_logo_text_FS, 'rw_cs_logo_text_FF' => $rw_cs_logo_text_FF, 'rw_cs_logo_text_C' => $rw_cs_logo_text_C, 'rw_cs_logo_text_HTML' => $rw_cs_logo_text_HTML, 'rw_cs_logo_Image' => $rw_cs_logo_Image, 'rw_cs_logo_Image_ST' => $rw_cs_logo_Image_ST, 'rw_cs_logo_Image_MW' => $rw_cs_logo_Image_MW, 'rw_cs_logo_Image_MH' => $rw_cs_logo_Image_MH, 'rw_cs_logo_Link_Show' => $rw_cs_logo_Link_Show, 'rw_cs_logo_Link_Url' => $rw_cs_logo_Link_Url, 'rw_cs_logo_Link_Target' => $rw_cs_logo_Link_Target, 'rw_cs_logo_MT' => $rw_cs_logo_MT, 'rw_cs_logo_MB' => $rw_cs_logo_MB, 'rw_cs_logo_Link_Custom_CSS' => $rw_cs_logo_Link_Custom_CSS, ));
		update_option('rw_cs_logo', $rw_logo);
	}
	if(isset($_POST['reset_action_logo'])=="action_logo_reset")
	{
		$rw_logo = serialize( array( 'rw_cs_logo_show' => "show", 'rw_cs_logo_type' => "Image", 'rw_cs_logo_text' => "Rich Web", 'rw_cs_logo_text_FS' => "65", 'rw_cs_logo_text_FF' => "Abadi MT Condensed Light", 'rw_cs_logo_text_C' => "#ffffff", 'rw_cs_logo_text_HTML' => "h1", 'rw_cs_logo_Image' => $rw_logo_url, 'rw_cs_logo_Image_ST' => "Custom", 'rw_cs_logo_Image_MW' => "300", 'rw_cs_logo_Image_MH' => "150", 'rw_cs_logo_Link_Show' => "hide", 'rw_cs_logo_Link_Url' => "#", 'rw_cs_logo_Link_Target' => "_blank", 'rw_cs_logo_MT' => "22", 'rw_cs_logo_MB' => "4", 'rw_cs_logo_Link_Custom_CSS' => "", ));
			update_option('rw_cs_logo', $rw_logo);
	}
?>