<?php 
	if ( ! defined( 'ABSPATH' ) ) exit;
	$rw_cs_footer = unserialize(get_option('rw_cs_footer'));
?>
<form>
	<div class="form-group" style="width:100%;margin-bottom:0px;margin-top:10px;">
		<div class="row">
			<div class="col-md-12 col-lg-8">
				<label class="RW_Label">Footer :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="If you would like to display Footer then you would need to choose Show from drop down"></i></label>
				<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_footer_show" name="rw_cs_footer_show" value="<?php echo $rw_cs_footer['rw_cs_footer_show']; ?>" onchange="Rich_CS_Footer_Clicked()">
					<option value='show' <?php if($rw_cs_footer['rw_cs_footer_show']=='show'){ echo 'selected';}?>> Show </option>
					<option value='hide' <?php if($rw_cs_footer['rw_cs_footer_show']=='hide'){ echo 'selected';}?>> Hide </option>
				</select>
			</div>
		</div>
		<div class="row rw_footer_show_div">
			<div class="col-md-12">
				<label class="RW_Label">Footer Text :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide content for Footer which you would like to display"></i></label>
				<textarea type="text" class="form-control RW_marg" rows="5" id="rw_cs_footer_HTML_Text" name="rw_cs_footer_HTML_Text" ><?php echo $rw_cs_footer['rw_cs_footer_HTML_Text']; ?>
				</textarea>
			</div>
		</div>
		<div class="RW_Line_Soperator"></div>
		<div style="text-align:right;">
			<input type="button" class="RW_CS_Button" onclick="RW_CS_Footer()" value="Save Changes">
			<input type="button" class="RW_CS_Button_Res" data-toggle="modal" data-target="#myModal_Footer" value="Reset Default Setting">
			<div class="modal fade" id="myModal_Footer" role="dialog">
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
							<button type="button" onclick="RW_CS_Res_Footer()" class="btn btn-primary" data-dismiss="modal">Yes</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<?php
	if(isset($_POST['action_footer'])=="rw_csp_footer")
	{
		$rw_cs_footer_show = sanitize_text_field($_POST['rw_cs_footer_show']);
		$rw_cs_footer_HTML_Text = str_replace("\&","&",sanitize_text_field(esc_html($_POST['rw_cs_footer_HTML_Text'])));
		$rw_footer = serialize( array( 'rw_cs_footer_show' => $rw_cs_footer_show, 'rw_cs_footer_HTML_Text' => $rw_cs_footer_HTML_Text, ));
		update_option('rw_cs_footer', $rw_footer);
	}
	if(isset($_POST['reset_action_footer'])=="action_footer_reset")
	{
		$rw_footer = serialize( array( 'rw_cs_footer_show' => "show", 'rw_cs_footer_HTML_Text' => "<p style='text-align: center;'>Copyright 2020</p>", ));
		update_option('rw_cs_footer', $rw_footer);
	}
?>