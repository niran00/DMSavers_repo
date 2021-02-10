<?php 
	if ( ! defined( 'ABSPATH' ) ) exit;
	global $wpdb;
	$table_name = $wpdb->prefix . "rich_web_cs_font_family";
	$rw_cs_loader = unserialize(get_option('rw_cs_loader'));
	$Rich_WebFontCount=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name WHERE id>%d",0));
?>
<form>
	<div class="form-group" style="width:100%;margin-bottom:0px;margin-top:10px;">
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<label style="margin-top:10px;" class="RW_Label">Background Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Background Color for Loader"></i></label>
				<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_loader_BgC" name="rw_cs_loader_BgC" value="<?php echo $rw_cs_loader['rw_cs_loader_BgC']; ?>">
			</div>
			<div class="col-md-3 col-sm-6">
				<label style="margin-top:10px;" class="RW_Label">Loader1 Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Loader1 Color"></i></label>
				<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_loader1_C" name="rw_cs_loader1_C" value="<?php echo $rw_cs_loader['rw_cs_loader1_C']; ?>">
			</div>
			<div class="col-md-3 col-sm-6">
				<label style="margin-top:10px;" class="RW_Label">Loader2 Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Loader2 Color"></i></label>
				<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_loader2_C" name="rw_cs_loader2_C" value="<?php echo $rw_cs_loader['rw_cs_loader2_C']; ?>">
			</div>
			<div class="col-md-3 col-sm-6">
				<label style="margin-top:10px;" class="RW_Label">Loader3 Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Loader2 Color"></i></label>
				<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_loader3_C" name="rw_cs_loader3_C" value="<?php echo $rw_cs_loader['rw_cs_loader3_C']; ?>">
			</div>
			<div class="col-md-6">
				<label style="margin-top:10px;" class="RW_Label">Loader Text Show:<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Show to display Loader Text"></i></label>
				<select class="form-control RW_inp" id="rw_cs_loader_Text_Show" name="rw_cs_loader_Text_Show" value="<?php echo $rw_cs_loader['rw_cs_loader_Text_Show']; ?>">
					<option value='show' <?php if($rw_cs_loader['rw_cs_loader_Text_Show']=='show'){ echo 'selected';}?>> Show </option>
					<option value='hide' <?php if($rw_cs_loader['rw_cs_loader_Text_Show']=='hide'){ echo 'selected';}?>> Hide </option>
				</select>
			</div>
			<div class="col-md-6">
				<label style="margin-top:10px;" class="RW_Label">Loader Text Title :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide content for Loader Text"></i></label>
				<input type="text" class="form-control RW_inp" id="rw_cs_loader_Text" name="rw_cs_loader_Text" value="<?php echo $rw_cs_loader['rw_cs_loader_Text']; ?>">
			</div>
			<div class="col-md-3">
				<label style="margin-top:10px;" class="RW_Label">Font Size(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Font Size"></i></label>
				<div class="range-cs">
					<input class="range-cs__range" type="range" id="rw_cs_loader_Text_FS" name="rw_cs_loader_Text_FS" value="<?php echo $rw_cs_loader['rw_cs_loader_Text_FS']; ?>" min="8" max="36">
					<span class="range-cs__value" id="rw_cs_loader_Text_FS_Span"><?php echo $rw_cs_loader['rw_cs_loader_Text_FS']; ?></span>
				</div>
			</div>
			<div class="col-md-3">
				<label style="margin-top:10px;" class="RW_Label">Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Color for Loader Text"></i></label>
				<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_loader_Text_C" name="rw_cs_loader_Text_C" value="<?php echo $rw_cs_loader['rw_cs_loader_Text_C']; ?>">
			</div>
			<div class="col-md-6">
				<label style="margin-top:10px;" class="RW_Label">Font Family :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Font Family"></i></label>
				<select class="form-control RW_F RW_inp" id="rw_cs_loader_Text_FF" name="rw_cs_loader_Text_FF">
					<?php for($i=0;$i<count($Rich_WebFontCount);$i++){ ?> 
						<?php if($Rich_WebFontCount[$i]->Font_family==$rw_cs_loader['rw_cs_loader_Text_FF']){ ?><option value="<?php echo $Rich_WebFontCount[$i]->Font_family;?>" selected><?php echo $Rich_WebFontCount[$i]->Font_family;?></option>
						<?php } else { ?> 
							<option value="<?php echo $Rich_WebFontCount[$i]->Font_family;?>"><?php echo $Rich_WebFontCount[$i]->Font_family;?></option>
						<?php }?>
					<?php }?>
				</select>
			</div>
			<div class="col-md-12">
				<label style="margin-top:10px;" class="RW_Label">Custom CSS :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide CSS code manually to add extra styling to the above mentioned fields"></i></label>
				<textarea type="text" class="form-control RW_marg" rows="5" id="rw_cs_loader_Custom_CSS" name="rw_cs_loader_Custom_CSS" ><?php echo $rw_cs_loader['rw_cs_loader_Custom_CSS']; ?>
				</textarea>
			</div>
		</div>
		<div class="RW_Line_Soperator"></div>
		<div style="text-align:right;">
			<input type="button" class="RW_CS_Button" onclick="RW_CS_Loader()" value="Save Changes">
			<input type="button" class="RW_CS_Button_Res" data-toggle="modal" data-target="#myModal_Loader" value="Reset Default Setting">
			<div class="modal fade" id="myModal_Loader" role="dialog">
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
							<button type="button" onclick="RW_CS_Res_Loader()" class="btn btn-primary" data-dismiss="modal">Yes</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<?php
	if(isset($_POST['action_loader'])=="rw_csp_loader")
	{
		$rw_cs_loader_BgC = sanitize_text_field($_POST['rw_cs_loader_BgC']); $rw_cs_loader1_C = sanitize_text_field($_POST['rw_cs_loader1_C']); $rw_cs_loader2_C = sanitize_text_field($_POST['rw_cs_loader2_C']); $rw_cs_loader3_C = sanitize_text_field($_POST['rw_cs_loader3_C']); $rw_cs_loader_Text_Show = sanitize_text_field($_POST['rw_cs_loader_Text_Show']); $rw_cs_loader_Text = sanitize_text_field($_POST['rw_cs_loader_Text']); $rw_cs_loader_Text_FS = sanitize_text_field($_POST['rw_cs_loader_Text_FS']); $rw_cs_loader_Text_FF = sanitize_text_field($_POST['rw_cs_loader_Text_FF']); $rw_cs_loader_Text_C = sanitize_text_field($_POST['rw_cs_loader_Text_C']); $rw_cs_loader_Custom_CSS = sanitize_text_field($_POST['rw_cs_loader_Custom_CSS']);
		$rw_loader = serialize( array('rw_cs_loader_BgC' => $rw_cs_loader_BgC, 'rw_cs_loader1_C' => $rw_cs_loader1_C, 'rw_cs_loader2_C' => $rw_cs_loader2_C, 'rw_cs_loader3_C' => $rw_cs_loader3_C, 'rw_cs_loader_Text_Show' => $rw_cs_loader_Text_Show, 'rw_cs_loader_Text' => $rw_cs_loader_Text, 'rw_cs_loader_Text_FS' => $rw_cs_loader_Text_FS, 'rw_cs_loader_Text_FF' => $rw_cs_loader_Text_FF, 'rw_cs_loader_Text_C' => $rw_cs_loader_Text_C, 'rw_cs_loader_Custom_CSS' => $rw_cs_loader_Custom_CSS, ));
		update_option('rw_cs_loader', $rw_loader);
	}
	if(isset($_POST['reset_action_loader'])=="action_loader_reset")
	{
		$rw_loader = serialize( array( 'rw_cs_loader_BgC' => "#282931", 'rw_cs_loader1_C' => "#47bde5", 'rw_cs_loader2_C' => "#ffffff", 'rw_cs_loader3_C' => "#30a9d1", 'rw_cs_loader_Text_Show' => "show", 'rw_cs_loader_Text' => "Loading. Please Wait...", 'rw_cs_loader_Text_FS' => "13", 'rw_cs_loader_Text_FF' => "Abadi MT Condensed Light", 'rw_cs_loader_Text_C' => "#ffffff", 'rw_cs_loader_Custom_CSS' => "", ));
		update_option('rw_cs_loader', $rw_loader);
	}
?>
