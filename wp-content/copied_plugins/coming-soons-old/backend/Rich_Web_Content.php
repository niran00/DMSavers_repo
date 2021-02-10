<?php
	if ( ! defined( 'ABSPATH' ) ) exit;
	$rw_cs_content = unserialize(get_option('rw_cs_content'));
?>
<form>
	<div class="form-group" style="width:100%;margin-bottom:0px;margin-top:10px;">
		<div class="row">
			<div class="col-md-6" style="margin-bottom:10px;">
				<label class="RW_Label">Width(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Content Width"></i></label>
				<div class="range-cs">
					<input class="range-cs__range" name="rw_cs_content_width" type="range" id="rw_cs_content_width" value="<?php echo $rw_cs_content['rw_cs_content_width']; ?>" min="500" max="1400" >
					<span class="range-cs__value" id="rw_cs_content_width_Span"></span>
				</div>
			</div>
			<div class="col-md-6">
				<label class="RW_Label">Position :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Content Position"></i></label>
				<select class="form-control RW_F RW_inp RW_marg selectpicker" id="rw_cs_content_position" name="rw_cs_content_position" value="<?php echo $rw_cs_content['rw_cs_content_position']; ?>" onchange="Rich_CS_Count_Clicked()">
					<option value='left'   <?php if($rw_cs_content['rw_cs_content_position']=='left'){ echo 'selected';}?>>   Left   </option>
					<option value='right'  <?php if($rw_cs_content['rw_cs_content_position']=='right'){ echo 'selected';}?>>  Right  </option>
					<option value='center' <?php if($rw_cs_content['rw_cs_content_position']=='center'){ echo 'selected';}?>> Center </option>
				</select>
			</div>
			<div class="col-md-6" style="margin-bottom:10px;">
				<label class="RW_Label">Padding Top(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Content padding-top"></i></label>
				<div class="range-cs">
					<input class="range-cs__range" name="rw_cs_content_padding_top" type="range" id="rw_cs_content_padding_top" value="<?php echo $rw_cs_content['rw_cs_content_padding_top']; ?>" min="0" max="250" >
					<span class="range-cs__value" id="rw_cs_content_padding_top_Span"></span>
				</div>
			</div>
			<div class="col-md-6" style="margin-bottom:10px;">
				<label class="RW_Label">Padding Left(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Content padding-left"></i></label>
				<div class="range-cs">
					<input class="range-cs__range" name="rw_cs_content_padding_left" type="range" id="rw_cs_content_padding_left" value="<?php echo $rw_cs_content['rw_cs_content_padding_left']; ?>" min="0" max="250" >
					<span class="range-cs__value" id="rw_cs_content_padding_left_Span"></span>
				</div>
			</div>
			<div class="col-md-6" style="margin-bottom:10px;">
				<label class="RW_Label">Padding Right(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Content padding-right"></i></label>
				<div class="range-cs">
					<input class="range-cs__range" name="rw_cs_content_padding_right" type="range" id="rw_cs_content_padding_right" value="<?php echo $rw_cs_content['rw_cs_content_padding_right']; ?>" min="0" max="250" >
					<span class="range-cs__value" id="rw_cs_content_padding_right_Span"></span>
				</div>
			</div>
		</div>
		<div class="RW_Line_Soperator"></div>
		<div style="text-align:right;">
			<input type="button" class="RW_CS_Button" onclick="RW_CS_Content()" value="Save Changes">
			<input type="button" class="RW_CS_Button_Res" data-toggle="modal" data-target="#myModal_Content" value="Reset Default Setting">
			<div class="modal fade" id="myModal_Content" role="dialog">
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
							<button type="button" onclick="RW_CS_Res_Content()" class="btn btn-primary" data-dismiss="modal">Yes</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<?php
	if(isset($_POST['action_soc'])=="rw_csp_content")
	{
		$rw_cs_content_width = sanitize_text_field($_POST['rw_cs_content_width']); $rw_cs_content_position = sanitize_text_field($_POST['rw_cs_content_position']); $rw_cs_content_padding_top = sanitize_text_field($_POST['rw_cs_content_padding_top']); $rw_cs_content_padding_left = sanitize_text_field($_POST['rw_cs_content_padding_left']); $rw_cs_content_padding_right = sanitize_text_field($_POST['rw_cs_content_padding_right']);
		$rw_content = serialize( array( 'rw_cs_content_width' => $rw_cs_content_width, 'rw_cs_content_position' => $rw_cs_content_position, 'rw_cs_content_padding_top' => $rw_cs_content_padding_top, 'rw_cs_content_padding_left' => $rw_cs_content_padding_left, 'rw_cs_content_padding_right' => $rw_cs_content_padding_right, ));
		update_option('rw_cs_content', $rw_content);
	}
	if(isset($_POST['reset_action_content'])=="action_content_reset")
	{
		$rw_content = serialize( array( 'rw_cs_content_width' => "850", 'rw_cs_content_position' => "center", 'rw_cs_content_padding_top' => "0", 'rw_cs_content_padding_left' => "0", 'rw_cs_content_padding_right' => "0", ));
		update_option('rw_cs_content', $rw_content);
	}
?>