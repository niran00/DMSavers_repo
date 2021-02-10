<?php 
	if ( ! defined( 'ABSPATH' ) ) exit;
	$rw_cs_info = unserialize(get_option('rw_cs_info'));
?>
<form>
	<div class="form-group" style="width:100%;margin-bottom:0px;">
		<div class="row">
			<div class="col-md-12 col-lg-8">
				<label class="RW_Label">More Information :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="If you would like to display More Information on the layout then you would need to choose Show from drop down"></i></label>
				<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_info_text_Show" name="rw_cs_info_text_Show" value="<?php echo $rw_cs_info['rw_cs_info_text_Show']; ?>" onchange="Rich_CS_Info_Clicked()">
					<option value='Show' <?php if($rw_cs_info['rw_cs_info_text_Show']=='Show'){ echo 'selected';}?>> Show </option>
					<option value='Hide' <?php if($rw_cs_info['rw_cs_info_text_Show']=='Hide'){ echo 'selected';}?>> Hide </option>
				</select>
			</div>
			<div class="col-md-12 rw_cs_info_show_div">
				<label class="RW_Label">More Information Text :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide content for More Information which you would like to display"></i></label>
				<textarea type="text" class="form-control RW_marg" rows="5" id="rw_cs_info_text" name="rw_cs_info_text" ><?php echo $rw_cs_info['rw_cs_info_text']; ?>
				</textarea>
			</div>
		</div>
		<div class="RW_Line_Soperator"></div>
		<div style="text-align:right;">
			<input type="button" class="RW_CS_Button" onclick="RW_CS_Info()" value="Save Changes">
			<input type="button" class="RW_CS_Button_Res" data-toggle="modal" data-target="#myModal_Information" value="Reset Default Setting">
			<div class="modal fade" id="myModal_Information" role="dialog">
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
							<button type="button" onclick="RW_CS_Res_Info()" class="btn btn-primary" data-dismiss="modal">Yes</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<?php
	if(isset($_POST['action_info'])=="rw_csp_info")
	{
		$rw_cs_info_text_Show = sanitize_text_field($_POST['rw_cs_info_text_Show']);
		$rw_cs_info_text = str_replace("\&","&",sanitize_text_field(esc_html($_POST['rw_cs_info_text'])));
		$rw_info = serialize( array( 'rw_cs_info_text_Show' => $rw_cs_info_text_Show, 'rw_cs_info_text' => $rw_cs_info_text, ));
		update_option('rw_cs_info', $rw_info);
	}
	if(isset($_POST['reset_action_info'])=="action_info_reset")
	{
		$rw_info = serialize( array( 'rw_cs_info_text_Show' => "Show", 'rw_cs_info_text' => "<p style='text-align: justify;'><span style='color: #000000;'><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>", ));
		update_option('rw_cs_info', $rw_info);
	}
?>