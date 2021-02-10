<?php 
	if ( ! defined( 'ABSPATH' ) ) exit;
	$rw_cs_seo = unserialize(get_option('rw_cs_seo'));
?>
<form>
	<div class="form-group" style="width:100%;margin-bottom:0px;margin-top:10px;">
		<div class="row">
			<div class="col-md-6">
				<label class="RW_Label">SEO Title :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide a unique title for SEO that you are hoping people will look for and find your webpage"></i></label>
				<input type="text" class="form-control RW_inp RW_marg" id="rw_cs_seo_title" name="rw_cs_seo_title" value="<?php echo $rw_cs_seo['rw_cs_seo_title']; ?>">
				<label class="RW_Label">Meta Description :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide Meta Description for SEO that describes your webpage"></i></label>
				<textarea type="text" class="form-control RW_marg" rows="3" id="rw_cs_seo_desc" name="rw_cs_seo_desc" ><?php echo $rw_cs_seo['rw_cs_seo_desc']; ?>
				</textarea>
				<label class="RW_Label">Meta Keywords :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide Meta Keywords to provide SEO with information about your webpage that is not visible on the webpage itself"></i></label>
				<textarea type="text" class="form-control RW_marg" rows="3" id="rw_cs_seo_keywords" name="rw_cs_seo_keywords" ><?php echo $rw_cs_seo['rw_cs_seo_keywords']; ?>
				</textarea>
			</div>
			<div class="col-md-6">
				<label class="RW_Label">Meta Robot Follow :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose whether to allow Meta Robot Follow or vice-versa"></i></label>
				<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_seo_robot_follow" name="rw_cs_seo_robot_follow" value="<?php echo $rw_cs_seo['rw_cs_seo_robot_follow']; ?>">
					<option value='follow'   <?php if($rw_cs_seo['rw_cs_seo_robot_follow']=='follow'){ echo 'selected';}?>>   Follow    </option>
					<option value='nofollow' <?php if($rw_cs_seo['rw_cs_seo_robot_follow']=='nofollow'){ echo 'selected';}?>> No Follow </option>
				</select>
				<label class="RW_Label">Canonical Url :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide Canonical URL for SEO that you would like Visitors to see at the Browser address bar"></i></label>
				<input type="text" class="form-control RW_inp RW_marg" id="rw_cs_seo_canonical_url" name="rw_cs_seo_canonical_url" value="<?php echo $rw_cs_seo['rw_cs_seo_canonical_url']; ?>">
				<label class="RW_Label">Google Analytics Script :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide Google analytical Tracking Code"></i></label>
				<textarea type="text" class="form-control RW_marg" rows="5" id="rw_cs_seo_google_analitics" name="rw_cs_seo_google_analitics" ><?php echo $rw_cs_seo['rw_cs_seo_google_analitics']; ?>
				</textarea>
			</div>
		</div>
		<div class="RW_Line_Soperator"></div>
		<div style="text-align:right;">
			<input type="button" class="RW_CS_Button" onclick="RW_CS_Seo()" value="Save Changes">
			<input type="button" class="RW_CS_Button_Res" data-toggle="modal" data-target="#myModal_Seo" value="Reset Default Setting">
			<div class="modal fade" id="myModal_Seo" role="dialog">
				<div class="modal-dialog modal-sm">
					<div class="modal-content RW_Modal">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<br/>
						</div>
						<div class="modal-body">
							<p class="RW_Modal_Text" style="text-align:center;">Are you sure you want to reset this setting?</p>
						</div>
						<div class="modal-footer">
							<button type="button" onclick="RW_CS_Res_Seo()" class="btn btn-primary" data-dismiss="modal">Yes</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<?php
	if(isset($_POST['action_seo_rw'])=="action_seo_rw") 
	{
		$rw_cs_seo_title = sanitize_text_field($_POST['rw_cs_seo_title']); $rw_cs_seo_desc = sanitize_text_field($_POST['rw_cs_seo_desc']); $rw_cs_seo_keywords = sanitize_text_field($_POST['rw_cs_seo_keywords']); $rw_cs_seo_robot_follow = sanitize_text_field($_POST['rw_cs_seo_robot_follow']); $rw_cs_seo_canonical_url = sanitize_text_field($_POST['rw_cs_seo_canonical_url']); $rw_cs_seo_google_analitics = sanitize_text_field($_POST['rw_cs_seo_google_analitics']);
		$rw_seo = serialize( array( 'rw_cs_seo_title' => $rw_cs_seo_title, 'rw_cs_seo_desc' => $rw_cs_seo_desc, 'rw_cs_seo_keywords' => $rw_cs_seo_keywords, 'rw_cs_seo_robot_follow' => $rw_cs_seo_robot_follow, 'rw_cs_seo_canonical_url' => $rw_cs_seo_canonical_url, 'rw_cs_seo_google_analitics' => $rw_cs_seo_google_analitics, ));
		update_option('rw_cs_seo', $rw_seo);
	}
	if(isset($_POST['reset_action_seo'])=="action_pl_seo")
	{
		$rw_seo = serialize( array( 'rw_cs_seo_title' => "", 'rw_cs_seo_desc' => "", 'rw_cs_seo_keywords' => "", 'rw_cs_seo_robot_follow' => "follow", 'rw_cs_seo_canonical_url' => "", 'rw_cs_seo_google_analitics' => "", ));
		update_option('rw_cs_seo', $rw_seo);
	}
?>