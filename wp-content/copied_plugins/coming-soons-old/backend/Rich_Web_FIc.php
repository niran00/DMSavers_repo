<?php 
	if ( ! defined( 'ABSPATH' ) ) exit;
	$rw_fic_url = ''; 
	$rw_cs_fic = unserialize(get_option('rw_cs_fic'));
?>
<form>
	<div class="form-group" style="width:100%;margin-bottom:0px;margin-top:10px;">
		<div class="row">
			<div class="col-md-6">
				<label class="RW_Label">Fav Icon Settings :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="If you would like to display Fav Icon on the browser address bar then you would need to choose Show from drop down or vice versa"></i></label>
				<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_fic_show" name="rw_cs_fic_show" value="<?php echo $rw_cs_fic['rw_cs_fic_show']; ?>">
					<option value='show' <?php if($rw_cs_fic['rw_cs_fic_show']=='show'){ echo 'selected';}?>>Show</option>
					<option value='hide' <?php if($rw_cs_fic['rw_cs_fic_show']=='hide'){ echo 'selected';}?>>Hide</option>
				</select>
			</div>
			<div class="col-md-6">
				<label class="RW_Label">Upload Fav Icon :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="If you would like to display Fav Icon on the browser address bar then you would need to upload it from gallery"></i></label>
				<div>
					<div class="col-md-9" style="padding:0px;">
						<input class="form-control RW_inp RW_marg" id="rich_web_cs_imgSrc_2" name="rw_cs_fic_img" type="text" value="<?php echo $rw_cs_fic['rw_cs_fic_img']; ?>" disabled>
					</div>
					<div class="col-md-3" style="padding-right:0px;">
						<div id="wp-content-media-buttons" class="wp-media-buttons" style="text-align:center;">
							<a href="#" class="button insert-media add_media" style="border:1px solid rgba(0, 73, 107, 0.8); color:rgba(0, 73, 107, 0.8); background-color:#f4f4f4" data-editor="rich_web_cs_imgSrc_1" title="Add Image" id="rich_web_cs_ImgSrc" onclick="rich_web_cs_Img_Src_Clicked()">
								<span class="wp-media-buttons-icon"></span>Add Image
							</a>
						</div>
						<input type="text" style="display:none;" id="rich_web_cs_imgSrc_1" class='RWCSInput RWCSInput2'>
					</div>
				</div>
			</div>
		</div>
		<div class="RW_Line_Soperator"></div>
		<div style="text-align:right;">
			<input type="button" class="RW_CS_Button" onclick="RW_CS_FIc()" value="Save Changes">
			<input type="button" class="RW_CS_Button_Res" data-toggle="modal" data-target="#myModal_FIc" value="Reset Default Setting">
			<div class="modal fade" id="myModal_FIc" role="dialog">
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
							<button type="button" onclick="RW_CS_Res_FIc()" class="btn btn-primary" data-dismiss="modal">Yes</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<input type="text" style="display:none;" class="RW_Upload_FIc" value="<?php echo $rw_fic_url; ?>">
<?php
	if(isset($_POST['action_fic'])=="rw_csp_fic")
	{
		$rw_cs_fic_show = sanitize_text_field($_POST['rw_cs_fic_show']);
		$rw_cs_fic_img = sanitize_text_field($_POST['rw_cs_fic_img']);
		$rw_fic = serialize( array( 'rw_cs_fic_show' => $rw_cs_fic_show, 'rw_cs_fic_img' => $rw_cs_fic_img, ));
		update_option('rw_cs_fic', $rw_fic);
	}
	if(isset($_POST['reset_action_fic'])=="action_fic_reset")
	{
		$rw_fic = serialize( array( 'rw_cs_fic_show' => "hide", 'rw_cs_fic_img' => $rw_fic_url, ));
		update_option('rw_cs_fic', $rw_fic);
	}
?>