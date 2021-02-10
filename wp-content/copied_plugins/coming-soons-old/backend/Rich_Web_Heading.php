<?php 
	if ( ! defined( 'ABSPATH' ) ) exit;
	$rw_cs_heading = unserialize(get_option('rw_cs_heading'));
?>
<form>
	<div class="form-group" style="width:100%;margin-bottom:0px;margin-top:10px;">
		<div class="row">
			<div class="col-md-12 col-lg-8">
				<label class="RW_Label">Heading :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="If you would like to display Heading then you would need to choose Show from drop down or vice versa"></i></label>
				<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_heading_show" name="rw_cs_heading_show" value="<?php echo $rw_cs_heading['rw_cs_heading_show']; ?>" onchange="Rich_CS_Heading_Clicked()">
					<option value='show' <?php if($rw_cs_heading['rw_cs_heading_show']=='show'){ echo 'selected';}?>> Show </option>
					<option value='hide' <?php if($rw_cs_heading['rw_cs_heading_show']=='hide'){ echo 'selected';}?>> Hide </option>
				</select>
			</div>
		</div>
		<div class="row rw_heading_show_div">
			<div class="col-md-6">
				<label class="RW_Label">Heading Text :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide content for Heading, which you would like to display"></i></label>
				<input type="text" class="form-control RW_inp RW_marg" id="rw_cs_heading_T" name="rw_cs_heading_T" value="<?php echo $rw_cs_heading['rw_cs_heading_T']; ?>">
			</div>
			<div style="margin-bottom:15px;" class="col-md-6">
				<label class="RW_Label">Font Size(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Font Size for Heading"></i></label>
				<div class="range-cs">
					<input class="range-cs__range" type="range" id="rw_cs_heading_FS" name="rw_cs_heading_FS" value="<?php echo $rw_cs_heading['rw_cs_heading_FS']; ?>" min="8" max="100">
					<span class="range-cs__value" id="rw_cs_heading_FS_Span"><?php echo $rw_cs_heading['rw_cs_heading_FS']; ?></span>
				</div>
			</div>
			<div class="col-md-6">
				<label style="margin-top:10px;" class="RW_Label">Font Family :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Font Family"></i></label>
				<select class="form-control RW_F RW_inp" id="rw_cs_heading_FF" name="rw_cs_heading_FF">
					<?php for($i=0;$i<count($Rich_WebFontCount);$i++){ ?> 
						<?php if($Rich_WebFontCount[$i]->Font_family==$rw_cs_heading['rw_cs_heading_FF']){ ?><option value="<?php echo $Rich_WebFontCount[$i]->Font_family;?>" selected><?php echo $Rich_WebFontCount[$i]->Font_family;?></option>
						<?php } else { ?> 
							<option value="<?php echo $Rich_WebFontCount[$i]->Font_family;?>"><?php echo $Rich_WebFontCount[$i]->Font_family;?></option>
						<?php }?>
					<?php }?>
				</select>
			</div>
			<div class="col-md-6" style="margin-bottom:15px;">
				<label style="margin-top:10px;" class="RW_Label">Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Color for Heading"></i></label>
				<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_heading_C" name="rw_cs_heading_C" value="<?php echo $rw_cs_heading['rw_cs_heading_C']; ?>">
			</div>
			<div class="col-md-6">
				<label class="RW_Label">HTML Tag Property :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Heading Tags for text Heading"></i></label>
				<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_heading_HTML" name="rw_cs_heading_HTML" value="<?php echo $rw_cs_heading['rw_cs_heading_HTML']; ?>">
					<option value='h1' <?php if($rw_cs_heading['rw_cs_heading_HTML']=='h1'){ echo 'selected';}?>> H1       </option>
					<option value='h2' <?php if($rw_cs_heading['rw_cs_heading_HTML']=='h2'){ echo 'selected';}?>> H2       </option>
					<option value='h3' <?php if($rw_cs_heading['rw_cs_heading_HTML']=='h3'){ echo 'selected';}?>> H3       </option>
					<option value='h4' <?php if($rw_cs_heading['rw_cs_heading_HTML']=='h4'){ echo 'selected';}?>> H4       </option>
					<option value='h5' <?php if($rw_cs_heading['rw_cs_heading_HTML']=='h5'){ echo 'selected';}?>> H5       </option>
					<option value='h6' <?php if($rw_cs_heading['rw_cs_heading_HTML']=='h6'){ echo 'selected';}?>> H6       </option>
					<option value='p'  <?php if($rw_cs_heading['rw_cs_heading_HTML']=='p'){ echo 'selected';}?>>  Paragraf </option>
				</select>
			</div>
			<div class="col-md-6">
				<label class="RW_Label">Text Align :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Text Align for text Heading"></i></label>
				<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_heading_TA" name="rw_cs_heading_TA" value="<?php echo $rw_cs_heading['rw_cs_heading_TA']; ?>">
					<option value='center'  <?php if($rw_cs_heading['rw_cs_heading_TA']=='center'){ echo 'selected';}?>>  Center  </option>
					<option value='left'    <?php if($rw_cs_heading['rw_cs_heading_TA']=='left'){ echo 'selected';}?>>    Left    </option>
					<option value='right'   <?php if($rw_cs_heading['rw_cs_heading_TA']=='right'){ echo 'selected';}?>>   Right   </option>
					<option value='justify' <?php if($rw_cs_heading['rw_cs_heading_TA']=='justify'){ echo 'selected';}?>> Justify </option>
				</select>
			</div>
			<div class="col-md-6">
				<label class="RW_Label">Margin Top(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide Margin Top for Heading in pixels"></i></label>
				<div class="range-cs">
					<input class="range-cs__range" type="range" id="rw_cs_heading_MT" name="rw_cs_heading_MT" value="<?php echo $rw_cs_heading['rw_cs_heading_MT']; ?>" min="0" max="100">
					<span class="range-cs__value" id="rw_cs_heading_MT_Span"><?php echo $rw_cs_heading['rw_cs_heading_MT']; ?></span>
				</div>
			</div>
			<div class="col-md-6">
				<label class="RW_Label">Margin Bottom(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide Margin Bottom for Heading in pixels"></i></label>
				<div class="range-cs">
					<input class="range-cs__range" type="range" id="rw_cs_heading_MB" name="rw_cs_heading_MB" value="<?php echo $rw_cs_heading['rw_cs_heading_MB']; ?>" min="0" max="100">
					<span class="range-cs__value" id="rw_cs_heading_MB_Span"><?php echo $rw_cs_heading['rw_cs_heading_MB']; ?></span>
				</div>
			</div>
			<div class="col-md-12 col-lg-8" style="margin-top:10px;">
				<label class="RW_Label">Heading Animation :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Enable to show animation of the heading"></i></label>
				<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_heading_Anim" name="rw_cs_heading_Anim" value="<?php echo $rw_cs_heading['rw_cs_heading_Anim']; ?>">
					<option value='Yes' <?php if($rw_cs_heading['rw_cs_heading_Anim']=='Yes'){ echo 'selected';}?>> Yes </option>
					<option value='No'  <?php if($rw_cs_heading['rw_cs_heading_Anim']=='No'){ echo 'selected';}?>>  No  </option>
				</select>
			</div>
			<div class="col-md-12">
				<label class="RW_Label">Custom CSS :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide CSS code manually to add extra styling to the above mentioned fields"></i></label>
				<textarea type="text" class="form-control RW_marg" rows="5" id="rw_cs_heading_Custom_CSS" name="rw_cs_heading_Custom_CSS" ><?php echo $rw_cs_heading['rw_cs_heading_Custom_CSS']; ?>
				</textarea>
			</div>
		</div>
		<div class="RW_Line_Soperator"></div>
		<div style="text-align:right;">
			<input type="button" class="RW_CS_Button" onclick="RW_CS_Heading()" value="Save Changes">
			<input type="button" class="RW_CS_Button_Res" data-toggle="modal" data-target="#myModal_Heading" value="Reset Default Setting">
			<div class="modal fade" id="myModal_Heading" role="dialog">
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
							<button type="button" onclick="RW_CS_Res_Heading()" class="btn btn-primary" data-dismiss="modal">Yes</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<?php
	if(isset($_POST['action_heading'])=="rw_csp_heading")
	{
		$rw_cs_heading_show = sanitize_text_field($_POST['rw_cs_heading_show']); $rw_cs_heading_T = sanitize_text_field($_POST['rw_cs_heading_T']); $rw_cs_heading_FS = sanitize_text_field($_POST['rw_cs_heading_FS']); $rw_cs_heading_FF = sanitize_text_field($_POST['rw_cs_heading_FF']); $rw_cs_heading_C = sanitize_text_field($_POST['rw_cs_heading_C']); $rw_cs_heading_HTML = sanitize_text_field($_POST['rw_cs_heading_HTML']); $rw_cs_heading_TA = sanitize_text_field($_POST['rw_cs_heading_TA']); $rw_cs_heading_MT = sanitize_text_field($_POST['rw_cs_heading_MT']); $rw_cs_heading_MB = sanitize_text_field($_POST['rw_cs_heading_MB']); $rw_cs_heading_Anim = sanitize_text_field($_POST['rw_cs_heading_Anim']); $rw_cs_heading_Custom_CSS = sanitize_text_field($_POST['rw_cs_heading_Custom_CSS']); 
		$rw_heading = serialize( array( 'rw_cs_heading_show' => $rw_cs_heading_show, 'rw_cs_heading_T' => $rw_cs_heading_T, 'rw_cs_heading_FS' => $rw_cs_heading_FS, 'rw_cs_heading_FF' => $rw_cs_heading_FF, 'rw_cs_heading_C' => $rw_cs_heading_C, 'rw_cs_heading_HTML' => $rw_cs_heading_HTML, 'rw_cs_heading_TA' => $rw_cs_heading_TA, 'rw_cs_heading_MT' => $rw_cs_heading_MT, 'rw_cs_heading_MB' => $rw_cs_heading_MB, 'rw_cs_heading_Anim' => $rw_cs_heading_Anim, 'rw_cs_heading_Custom_CSS' => $rw_cs_heading_Custom_CSS, ));
		update_option('rw_cs_heading', $rw_heading);
	}
	if(isset($_POST['reset_action_heading'])=="action_heading_reset")
	{
		$rw_heading = serialize( array( 'rw_cs_heading_show' => "show", 'rw_cs_heading_T' => "Coming Soon", 'rw_cs_heading_FS' => "35", 'rw_cs_heading_FF' => "Abadi MT Condensed Light", 'rw_cs_heading_C' => "#ffffff", 'rw_cs_heading_HTML' => "h1", 'rw_cs_heading_TA' => "center", 'rw_cs_heading_MT' => "0", 'rw_cs_heading_MB' => "0", 'rw_cs_heading_Anim' => "No", 'rw_cs_heading_Custom_CSS' => "", ));
		update_option('rw_cs_heading', $rw_heading);
	}
?>