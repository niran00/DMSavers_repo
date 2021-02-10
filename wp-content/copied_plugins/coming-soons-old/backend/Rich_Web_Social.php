<?php 
	if ( ! defined( 'ABSPATH' ) ) exit;
	$rw_cs_social = unserialize(get_option('rw_cs_social')); $rw_cs_soc_type = $rw_cs_social['rw_cs_social_Type']; $rw_soc_type_array=explode(';',$rw_cs_soc_type); $rw_cs_soc_url = $rw_cs_social['rw_cs_social_Url']; $rw_soc_url_array=explode(';',$rw_cs_soc_url); $rw_cs_soc_bgc = $rw_cs_social['rw_cs_social_BgC']; $rw_soc_bgc_array=explode(';',$rw_cs_soc_bgc); $rw_cs_soc_c = $rw_cs_social['rw_cs_social_C']; $rw_soc_c_array=explode(';',$rw_cs_soc_c); $rw_cs_soc_bc = $rw_cs_social['rw_cs_social_BC']; $rw_soc_bc_array=explode(';',$rw_cs_soc_bc); $rw_cs_soc_hbgc = $rw_cs_social['rw_cs_social_HBgC']; $rw_soc_hbgc_array=explode(';',$rw_cs_soc_hbgc); $rw_cs_soc_hc = $rw_cs_social['rw_cs_social_HC']; $rw_soc_hc_array=explode(';',$rw_cs_soc_hc); $rw_cs_soc_hbc = $rw_cs_social['rw_cs_social_HBC']; $rw_soc_hbc_array=explode(';',$rw_cs_soc_hbc);
?>
<style>
	.rw_sb_icc
	{
		padding:0px !important;
		width:<?php echo $rw_cs_social['rw_cs_social_S']; ?>px;
		height:<?php echo $rw_cs_social['rw_cs_social_S']; ?>px;
		border-radius:<?php echo $rw_cs_social['rw_cs_social_BR']; ?>%;
		border-width:<?php echo $rw_cs_social['rw_cs_social_BW']; ?>px;
		line-height:<?php echo $rw_cs_social['rw_cs_social_S']; ?>px;
		box-sizing:initial !important;
		background:#fff;
		text-shadow:1px 1px 1px #000000;
		box-shadow:0px 0px 0px #000000;
		color:#6ecae9;
		font-size:<?php echo $rw_cs_social['rw_cs_social_FS']; ?>px;
		border-style:solid;
		border-color:#ffffff;
		transition:all 0.3s linear;
	}
	<?php for($i=0;$i<count($rw_soc_type_array);$i++){ ?>
		<?php if($rw_soc_type_array[0] != ''){ ?>
			.rw_sb_ic_<?php echo $rw_soc_type_array[$i]; ?>
			{
				background-color:<?php echo $rw_soc_bgc_array[$i]; ?>;
				text-shadow:1px 1px 1px #000000;
				box-shadow:0px 0px 0px #000000;
				color:<?php echo $rw_soc_c_array[$i]; ?>;
				border-style:solid;
				border-color:<?php echo $rw_soc_bc_array[$i]; ?>;
				transition:all 0.3s linear;
			}
		<?php } ?>
	<?php } ?>
	<?php for($i=0;$i<count($rw_soc_type_array);$i++){ ?>
		<?php if($rw_soc_type_array[0] != ''){ ?>
			.rw_sb_ic_<?php echo $rw_soc_type_array[$i]; ?>:hover
			{
				background-color:<?php echo $rw_soc_hbgc_array[$i]; ?>;
				color:<?php echo $rw_soc_hc_array[$i]; ?>;
				border-style:solid;
				border-color:<?php echo $rw_soc_hbc_array[$i]; ?>;
			}
		<?php } ?>
	<?php } ?>
	<?php for($i=0;$i<count($rw_soc_type_array);$i++){ ?>
		<?php if($rw_soc_type_array[0] != ''){ ?>
			.rw_sb_ic_<?php echo $rw_soc_type_array[$i]; ?>_hov
			{
				background:#6ecae9 !important;
				color:#ffffff !important;
				border-style:solid !important;
				border-color:#ffffff !important;
			}
		<?php } ?>
	<?php } ?>
</style>
<form>
	<div class="form-group" style="width:100%;margin-bottom:0px;margin-top:10px;">
		<div class="row">
			<div class="col-md-12 col-lg-8">
				<label class="RW_Label">Social :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="If you would like to show Social then you would need to choose Show from drop down or vice versa"></i></label>
				<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_social_Show" name="rw_cs_social_Show" value="<?php echo $rw_cs_social['rw_cs_social_Show']; ?>" onchange="Rich_CS_Social_Clicked()">
					<option value='Show' <?php if($rw_cs_social['rw_cs_social_Show']=='Show'){ echo 'selected';}?>> Show </option>
					<option value='Hide' <?php if($rw_cs_social['rw_cs_social_Show']=='Hide'){ echo 'selected';}?>> Hide </option>
				</select>
			</div>
			<div class="col-md-12 rw_social_show_div">
				<form>
					<label class="checkbox-inline SL">
						<input class="SChb facebook" type="checkbox" value="0" onclick="RW_Add_Social('facebook')">Facebook
					</label>
					<label class="checkbox-inline SL">
						<input class="SChb twitter" type="checkbox" value="0" onclick="RW_Add_Social('twitter')">Twitter
					</label>
					<label class="checkbox-inline SL">
						<input class="SChb linkedin" type="checkbox" value="0" onclick="RW_Add_Social('linkedin')">Linkedin
					</label>
					<label class="checkbox-inline SL">
						<input class="SChb google-plus" type="checkbox" value="0" onclick="RW_Add_Social('google-plus')">Google
					</label>
					<label class="checkbox-inline SL">
						<input class="SChb youtube-play" type="checkbox" value="0" onclick="RW_Add_Social('youtube-play')">Youtube
					</label>
					<label class="checkbox-inline SL">
						<input class="SChb pinterest-p" type="checkbox" value="0" onclick="RW_Add_Social('pinterest-p')">Pinterest
					</label>
					<label class="checkbox-inline SL">
						<input class="SChb tumblr" type="checkbox" value="0" onclick="RW_Add_Social('tumblr')">Tumblr
					</label>
					<label class="checkbox-inline SL">
						<input class="SChb vimeo" type="checkbox" value="0" onclick="RW_Add_Social('vimeo')">Vimeo
					</label>
					<label class="checkbox-inline SL">
						<input class="SChb wordpress" type="checkbox" value="0" onclick="RW_Add_Social('wordpress')">Wordpress
					</label>
					<label class="checkbox-inline SL">
						<input class="SChb deviantart" type="checkbox" value="0" onclick="RW_Add_Social('deviantart')">Deviantart
					</label>
					<label class="checkbox-inline SL">
						<input class="SChb skype" type="checkbox" value="0" onclick="RW_Add_Social('skype')">Skype
					</label>
					<label class="checkbox-inline SL">
						<input class="SChb foursquare" type="checkbox" value="0" onclick="RW_Add_Social('foursquare')">Foursquare
					</label>
					<label class="checkbox-inline SL">
						<input class="SChb yahoo" type="checkbox" value="0" onclick="RW_Add_Social('yahoo')">Yahoo
					</label>
					<label class="checkbox-inline SL">
						<input class="SChb instagram" type="checkbox" value="0" onclick="RW_Add_Social('instagram')">Instagram
					</label>
					<label class="checkbox-inline SL">
						<input class="SChb odnoklassniki" type="checkbox" value="0" onclick="RW_Add_Social('odnoklassniki')">Odnoklassniki
					</label>
					<input type="text" style="display:none;" id="rw_cs_SB_HidNum" name="rw_cs_SB_HidNum" value="<?php echo $rw_cs_social['rw_cs_SB_HidNum']; ?>">
					<input type="text" style="display:none;" id="rw_cs_social_Type" name="rw_cs_social_Type" value="<?php echo $rw_cs_social['rw_cs_social_Type']; ?>">
					<input type="text" style="display:none;" id="rw_cs_social_Url" name="rw_cs_social_Url" value="<?php echo $rw_cs_social['rw_cs_social_Url']; ?>">
					<input type="text" style="display:none;" id="rw_cs_social_BgC" name="rw_cs_social_BgC" value="<?php echo $rw_cs_social['rw_cs_social_BgC']; ?>">
					<input type="text" style="display:none;" id="rw_cs_social_C" name="rw_cs_social_C" value="<?php echo $rw_cs_social['rw_cs_social_C']; ?>">
					<input type="text" style="display:none;" id="rw_cs_social_BC" name="rw_cs_social_BC" value="<?php echo $rw_cs_social['rw_cs_social_BC']; ?>">
					<input type="text" style="display:none;" id="rw_cs_social_HBgC" name="rw_cs_social_HBgC" value="<?php echo $rw_cs_social['rw_cs_social_HBgC']; ?>">
					<input type="text" style="display:none;" id="rw_cs_social_HC" name="rw_cs_social_HC" value="<?php echo $rw_cs_social['rw_cs_social_HC']; ?>">
					<input type="text" style="display:none;" id="rw_cs_social_HBC" name="rw_cs_social_HBC" value="<?php echo $rw_cs_social['rw_cs_social_HBC']; ?>">
				</form>
				<div class="panel-group" id="accordion1" style="margin-top:15px;" onmousemove='rw_cs_soc_Sortable()'>
					<?php for($i=0;$i<count($rw_soc_type_array);$i++){ ?>
						<?php if($rw_soc_type_array[0] != ''){ ?>
						<div class="panel panel-default fadeout div<?php echo $rw_soc_type_array[$i]; ?> fadein" name="<?php echo $rw_soc_type_array[$i]; ?>">
							<div class="panel-heading RW_Panel_Heading">
								<h4 class="panel-title">
									<div class="panel-body rw_SB">
										<table class="table rw_SB_T">
											<thead>
												<tr>
													<th><i class="rich_web rich_web-<?php echo $rw_soc_type_array[$i]; ?> rw_sb_ic_<?php echo $rw_soc_type_array[$i]; ?> rw_sb_ic rw_sb_icc" data-toggle="collapse" data-parent="#accordion1" href="#collapse_ShB<?php echo $i+1; ?>" onclick="rw_cs_sb_edit()"></i></th>
													<th id="rw_cs_th_<?php echo $rw_soc_type_array[$i]; ?>_url"><?php echo $rw_soc_url_array[$i]; ?></th>
													<th><i class="rwIcPencil rich_web rich_web-pencil rw_sb_ic" data-toggle="collapse" data-parent="#accordion1" href="#collapse_ShB<?php echo $i+1; ?>" onclick="rw_cs_sb_edit()" style="padding:10px;"></i></th>
												</tr>
											</thead>
										</table>
									</div>
								</h4>
							</div>
							<div id="collapse_ShB<?php echo $i+1; ?>" class="panel-collapse collapse rw_sb_collapse">
								<div class="row" style="padding:10px;">
									<div class="col-lg-9 col-md-12" style="margin-bottom:20px;">
										<input type="text" class="form-control RW_inp RW_SB_inp" placeholder="Enter <?php echo $rw_soc_type_array[$i]; ?> url.." id="rw_cs_sb_<?php echo $rw_soc_type_array[$i]; ?>_url" value="<?php echo $rw_soc_url_array[$i]; ?>">
									</div>
									<div class="col-lg-4 col-md-6" style="margin-bottom:10px;">
										<label class="RW_Label">Background Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Background Color for this Icon"></i></label>
										<input type="text" class="form-control RW_inp RW_marg alpha-color-picker RW_inp_BgC" name="<?php echo $rw_soc_type_array[$i]; ?>" id="rw_cs_<?php echo $rw_soc_type_array[$i]; ?>_icon_BgC" value="<?php echo $rw_soc_bgc_array[$i]; ?>">
									</div>
									<div class="col-lg-4 col-md-6" style="margin-bottom:10px;">
										<label class="RW_Label">Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Color for this Icon"></i></label>
										<input type="text" class="form-control RW_inp RW_marg alpha-color-picker RW_inp_C" name="<?php echo $rw_soc_type_array[$i]; ?>" id="rw_cs_<?php echo $rw_soc_type_array[$i]; ?>_icon_C" value="<?php echo $rw_soc_c_array[$i]; ?>">
									</div>
									<div class="col-lg-4 col-md-6" style="margin-bottom:10px;">
										<label class="RW_Label">Border Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Border Color for this Icon"></i></label>
										<input type="text" class="form-control RW_inp RW_marg alpha-color-picker RW_inp_BC" name="<?php echo $rw_soc_type_array[$i]; ?>" id="rw_cs_<?php echo $rw_soc_type_array[$i]; ?>_icon_BC" value="<?php echo $rw_soc_bc_array[$i]; ?>">
									</div>
									<div class="col-lg-4 col-md-6" style="margin-bottom:10px;">
										<label class="RW_Label">Hover Background Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Hover Background Color for this Icon"></i></label>
										<input type="text" class="form-control RW_inp RW_marg alpha-color-picker RW_inp_HBgC" name="<?php echo $rw_soc_type_array[$i]; ?>" id="rw_cs_<?php echo $rw_soc_type_array[$i]; ?>_icon_HBgC" value="<?php echo $rw_soc_hbgc_array[$i]; ?>">
									</div>
									<div class="col-lg-4 col-md-6" style="margin-bottom:10px;">
										<label class="RW_Label">Hover Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Hover Color for this Icon"></i></label>
										<input type="text" class="form-control RW_inp RW_marg alpha-color-picker RW_inp_HC" name="<?php echo $rw_soc_type_array[$i]; ?>" id="rw_cs_<?php echo $rw_soc_type_array[$i]; ?>_icon_HC" value="<?php echo $rw_soc_hc_array[$i]; ?>">
									</div>
									<div class="col-lg-4 col-md-6" style="margin-bottom:10px;">
										<label class="RW_Label">Hover Border Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Hover Border Color for this Icon"></i></label>
										<input type="text" class="form-control RW_inp RW_marg alpha-color-picker RW_inp_HBC" name="<?php echo $rw_soc_type_array[$i]; ?>" id="rw_cs_<?php echo $rw_soc_type_array[$i]; ?>_icon_HBC" value="<?php echo $rw_soc_hbc_array[$i]; ?>">
									</div>
									<div class="col-md-12" style="text-align:center;margin-top:15px;display:none;" >
										<input type="button" class="RW_CS_Button RW_CS_SB_Save" onclick="RW_CS_SB_Type_Save('<?php echo $rw_soc_type_array[$i]; ?>',<?php echo $i+1; ?>)" value="Save">
									</div>
								</div>
							</div>
						</div>
						<?php } ?>
					<?php } ?>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6" style="margin-bottom:10px;">
						<label class="RW_Label">Size(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose this icons Size"></i></label>
						<div class="range-cs">
							<input class="range-cs__range" name="rw_cs_social_S" type="range" id="rw_cs_social_S" value="<?php echo $rw_cs_social['rw_cs_social_S']; ?>" min="20" max="100" onchange="rw_change_soc_sizes('S')">
							<span class="range-cs__value" id="rw_cs_social_S_Span"></span>
						</div>
					</div>
					<div class="col-lg-4 col-md-6" style="margin-bottom:10px;">
						<label class="RW_Label">Font Size(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose this icons Font Size"></i></label>
						<div class="range-cs">
							<input class="range-cs__range" name="rw_cs_social_FS" type="range" id="rw_cs_social_FS" value="<?php echo $rw_cs_social['rw_cs_social_FS']; ?>" min="10" max="80" onchange="rw_change_soc_sizes('FS')">
							<span class="range-cs__value" id="rw_cs_social_FS_Span"></span>
						</div>
					</div>
					<div class="col-lg-4 col-md-6" style="margin-bottom:10px;">
						<label class="RW_Label">Border Width(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose this icons Border Width"></i></label>
						<div class="range-cs">
							<input class="range-cs__range" name="rw_cs_social_BW" type="range" id="rw_cs_social_BW" value="<?php echo $rw_cs_social['rw_cs_social_BW']; ?>" min="0" max="10" onchange="rw_change_soc_sizes('BW')">
							<span class="range-cs__value" id="rw_cs_social_BW_Span"></span>
						</div>
					</div>
					<div class="col-lg-4 col-md-6" style="margin-bottom:10px;">
						<label class="RW_Label">Radius(%) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose this icons Radius"></i></label>
						<div class="range-cs">
							<input class="range-cs__range" name="rw_cs_social_BR" type="range" id="rw_cs_social_BR" value="<?php echo $rw_cs_social['rw_cs_social_BR']; ?>" min="0" max="50" onchange="rw_change_soc_sizes('BR')">
							<span class="range-cs__value" id="rw_cs_social_BR_Span"></span>
						</div>
					</div>
					<div class="col-lg-4 col-md-6" style="margin-bottom:10px;">
						<label class="RW_Label">Shadow(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose this icons shadow"></i></label>
						<div class="range-cs">
							<input class="range-cs__range" name="rw_cs_social_BSh" type="range" id="rw_cs_social_BSh" value="<?php echo $rw_cs_social['rw_cs_social_BSh']; ?>" min="0" max="30">
							<span class="range-cs__value" id="rw_cs_social_BSh_Span"></span>
						</div>
					</div>
					<div class="col-lg-4 col-md-6" style="margin-bottom:10px;">
						<label class="RW_Label">Hover Shadow(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose icons Hover Shadow"></i></label>
						<div class="range-cs">
							<input class="range-cs__range" name="rw_cs_social_HBSh" type="range" id="rw_cs_social_HBSh" value="<?php echo $rw_cs_social['rw_cs_social_HBSh']; ?>" min="0" max="30">
							<span class="range-cs__value" id="rw_cs_social_HBSh_Span"></span>
						</div>
					</div>
					<div class="col-lg-4 col-md-6" style="margin-bottom:10px;">
						<label class="RW_Label">Margin(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose icons margin"></i></label>
						<div class="range-cs">
							<input class="range-cs__range" name="rw_cs_social_M" type="range" id="rw_cs_social_M" value="<?php echo $rw_cs_social['rw_cs_social_M']; ?>" min="2" max="20">
							<span class="range-cs__value" id="rw_cs_<?php echo $rw_soc_type_array[$i]; ?>_icon_s_Span"></span>
						</div>
					</div>
					<div class="col-md-6">
						<label class="RW_Label">Target :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title=""></i></label>
						<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_social_target" name="rw_cs_social_target" value="<?php echo $rw_cs_social['rw_cs_social_target']; ?>" onchange="Rich_CS_Social_Clicked()">
							<option value='_blank' <?php if($rw_cs_social['rw_cs_social_target']=='_blank'){ echo 'selected';}?>> Blank </option>
							<option value='_self'  <?php if($rw_cs_social['rw_cs_social_target']=='_self'){ echo 'selected';}?>>  Self  </option>
						</select>
					</div>
					<div class="col-md-6">
						<label class="RW_Label">Animation :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title=""></i></label>
						<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_social_anim" name="rw_cs_social_anim" value="<?php echo $rw_cs_social['rw_cs_social_anim']; ?>" onchange="Rich_CS_Social_Clicked()">
							<option value='Yes' <?php if($rw_cs_social['rw_cs_social_anim']=='Yes'){ echo 'selected';}?>> Yes </option>
							<option value='No'  <?php if($rw_cs_social['rw_cs_social_anim']=='No'){ echo 'selected';}?>>  No  </option>
						</select>
					</div>
					<div class="col-md-12">
						<label class="RW_Label">Custom CSS :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide CSS code manually to add extra styling to the above mentioned fields"></i></label>
						<textarea type="text" class="form-control RW_marg" rows="5" id="rw_cs_social_Custom_CSS" name="rw_cs_social_Custom_CSS" ><?php echo $rw_cs_social['rw_cs_social_Custom_CSS']; ?>
						</textarea>
					</div>
				</div>
			</div>
		</div>
		<div class="RW_Line_Soperator"></div>
		<div style="text-align:right;">
			<input type="button" class="RW_CS_Button" onclick="RW_CS_Soc()" value="Save Changes">
			<input type="button" class="RW_CS_Button_Res" data-toggle="modal" data-target="#myModal_Soc" value="Reset Default Setting">
			<div class="modal fade" id="myModal_Soc" role="dialog">
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
							<button type="button" onclick="RW_CS_Res_Soc()" class="btn btn-primary" data-dismiss="modal">Yes</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<?php
	if(isset($_POST['action_soc'])=="rw_csp_soc")
	{
		$rw_cs_social_Show = sanitize_text_field($_POST['rw_cs_social_Show']); $rw_cs_social_Type = sanitize_text_field($_POST['rw_cs_social_Type']); $rw_cs_social_Url = sanitize_text_field($_POST['rw_cs_social_Url']); $rw_cs_social_BgC = sanitize_text_field($_POST['rw_cs_social_BgC']); $rw_cs_social_C = sanitize_text_field($_POST['rw_cs_social_C']); $rw_cs_social_BC = sanitize_text_field($_POST['rw_cs_social_BC']); $rw_cs_social_BSh = sanitize_text_field($_POST['rw_cs_social_BSh']); $rw_cs_social_HBgC = sanitize_text_field($_POST['rw_cs_social_HBgC']); $rw_cs_social_HC = sanitize_text_field($_POST['rw_cs_social_HC']); $rw_cs_social_HBC = sanitize_text_field($_POST['rw_cs_social_HBC']); $rw_cs_social_HBSh = sanitize_text_field($_POST['rw_cs_social_HBSh']); $rw_cs_social_PH = sanitize_text_field($_POST['rw_cs_social_PH']); $rw_cs_social_M = sanitize_text_field($_POST['rw_cs_social_M']); $rw_cs_social_target = sanitize_text_field($_POST['rw_cs_social_target']); $rw_cs_social_anim = sanitize_text_field($_POST['rw_cs_social_anim']); $rw_cs_social_S = sanitize_text_field($_POST['rw_cs_social_S']); $rw_cs_social_FS = sanitize_text_field($_POST['rw_cs_social_FS']); $rw_cs_social_BW = sanitize_text_field($_POST['rw_cs_social_BW']); $rw_cs_social_BR = sanitize_text_field($_POST['rw_cs_social_BR']); $rw_cs_SB_HidNum = sanitize_text_field($_POST['rw_cs_SB_HidNum']); $rw_cs_social_Custom_CSS = sanitize_text_field($_POST['rw_cs_social_Custom_CSS']);
		$rw_social = serialize( array( 'rw_cs_social_Show' => $rw_cs_social_Show, 'rw_cs_social_Type' => $rw_cs_social_Type, 'rw_cs_social_Url' => $rw_cs_social_Url, 'rw_cs_social_BgC' => $rw_cs_social_BgC, 'rw_cs_social_C' => $rw_cs_social_C, 'rw_cs_social_BC' => $rw_cs_social_BC, 'rw_cs_social_BSh' => $rw_cs_social_BSh, 'rw_cs_social_HBgC' => $rw_cs_social_HBgC, 'rw_cs_social_HC' => $rw_cs_social_HC, 'rw_cs_social_HBC' => $rw_cs_social_HBC, 'rw_cs_social_HBSh' => $rw_cs_social_HBSh, 'rw_cs_social_M' => $rw_cs_social_M, 'rw_cs_social_target' => $rw_cs_social_target, 'rw_cs_social_anim' => $rw_cs_social_anim, 'rw_cs_social_S' => $rw_cs_social_S, 'rw_cs_social_FS' => $rw_cs_social_FS, 'rw_cs_social_BW' => $rw_cs_social_BW, 'rw_cs_social_BR' => $rw_cs_social_BR, 'rw_cs_SB_HidNum' => $rw_cs_SB_HidNum, 'rw_cs_social_Custom_CSS' => $rw_cs_social_Custom_CSS, ));
		update_option('rw_cs_social', $rw_social);
	}
	if(isset($_POST['reset_action_soc'])=="action_soc_reset")
	{
		$rw_social = serialize( array( 'rw_cs_social_Show' => "Show", 'rw_cs_social_Type' => "facebook;twitter;linkedin;google-plus", 'rw_cs_social_Url' => "#;#;#;#", 'rw_cs_social_BgC' => "#ffffff;#ffffff;#ffffff;#ffffff", 'rw_cs_social_C' => "#6ecae9;#6ecae9;#6ecae9;#6ecae9", 'rw_cs_social_BC' => "#ffffff;#ffffff;#ffffff;#ffffff", 'rw_cs_social_BSh' => "0", 'rw_cs_social_HBgC' => "#ffffff;#ffffff;#ffffff;#ffffff", 'rw_cs_social_HC' => "#3ebde8;#3ebde8;#3ebde8;#3ebde8", 'rw_cs_social_HBC' => "#ffffff;#ffffff;#ffffff;#ffffff", 'rw_cs_social_HBSh' => "0", 'rw_cs_social_M' => "6", 'rw_cs_social_target' => "_blank", 'rw_cs_social_anim' => "No", 'rw_cs_social_S' => "40", 'rw_cs_social_FS' => "20", 'rw_cs_social_BW' => "0", 'rw_cs_social_BR' => "50", 'rw_cs_SB_HidNum' => "4", 'rw_cs_social_Custom_CSS' => "", ));
		update_option('rw_cs_social', $rw_social);
	}
?>