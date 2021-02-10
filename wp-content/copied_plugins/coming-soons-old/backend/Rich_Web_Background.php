<?php 
	if ( ! defined( 'ABSPATH' ) ) exit;
	$rw_cs_background = unserialize(get_option('rw_cs_background'));
	$rw_cs_bgsl_array = $rw_cs_background['rw_cs_bg_image_slideshow'];
	$img_sl_array=explode(';',$rw_cs_bgsl_array);
	$rw_cs_bgslv_array = $rw_cs_background['rw_cs_bg_image_video_slideshow'];
	$img_slv_array=explode(';',$rw_cs_bgslv_array);
?>
<form>
	<div class="form-group" style="width:100%;margin-bottom:0px;">
		<form>
			<label class="radio-inline rw_rad_l">
				<input class="rw_rad rw_rad1" type="radio" name="optradio" value="Color" onclick='Rich_CS_Bg_Clicked("Color")'>Color
			</label>
			<label class="radio-inline rw_rad_l">
				<input class="rw_rad rw_rad2" type="radio" name="optradio" value="Image" onclick='Rich_CS_Bg_Clicked("Image")'>Image
			</label>
			<label class="radio-inline rw_rad_l">
				<input class="rw_rad rw_rad3" type="radio" name="optradio" value="Image Slideshow" onclick='Rich_CS_Bg_Clicked("Image Slideshow")'>Image Slideshow
			</label>
			<label class="radio-inline rw_rad_l">
				<input class="rw_rad rw_rad4" type="radio" name="optradio" value="Video" onclick='Rich_CS_Bg_Clicked("Video")'>Youtube Video
			</label>
			<label class="radio-inline rw_rad_l">
				<input class="rw_rad rw_rad5" type="radio" name="optradio" value="Video Slieshow" onclick='Rich_CS_Bg_Clicked("Video Slieshow")'>Youtube Video Slieshow
			</label>
			<input type="text" style="display:none;" id="rw_cs_bg_type" name="rw_cs_bg_type" value="<?php echo $rw_cs_background['rw_cs_bg_type']; ?>">
		</form>
		<div class="row rw_BgC_show_div">
			<div class="col-md-12">
				<label style="margin-top:10px;" class="RW_Label">Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Background Color"></i></label>
				<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_bg_color" name="rw_cs_bg_color"  value="<?php echo $rw_cs_background['rw_cs_bg_color']; ?>">
			</div>
		</div>
		<div class="row rw_BgI_show_div">
			<div class="col-md-12">
				<label class="RW_Label">Image :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to upload image for Background"></i></label>
				<div>
					<div class="col-md-9" style="padding:0px;">
						<input class="form-control RW_inp RW_marg" id="rich_web_cs_bg_imgSrc_2" name="rw_cs_bg_image" type="text" value="<?php echo $rw_cs_background['rw_cs_bg_image']; ?>" disabled>
					</div>
					<div class="col-md-3" style="padding-right:0px;">
						<div id="wp-content-media-buttons" class="wp-media-buttons" style="text-align:center;"><a href="#" class="button insert-media add_media" style="border:1px solid rgba(0, 73, 107, 0.8); color:rgba(0, 73, 107, 0.8); background-color:#f4f4f4" data-editor="rich_web_cs_bg_imgSrc_1" title="Add Image" id="rich_web_cs_bg_ImgSrc" onclick="rich_web_cs_bg_Img_Src_Clicked()">
								<span class="wp-media-buttons-icon"></span>Add Image
							</a>
						</div>
						<input type="text" style="display:none;" id="rich_web_cs_bg_imgSrc_1"  class='RWCSInput RWCSInput2'>
					</div>
				</div>
			</div>
		</div>
		<div class="row rw_BgISlSh_show_div">
			<div> 
				<div style="margin-bottom:15px;margin-top:10px;" class="col-md-6">
					<label class="RW_Label">Duration(s) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Slideshow Duration secund"></i></label>
					<div class="range-cs">  
						<input class="range-cs__range" type="range" id="rw_cs_bg_image_slideshow_dur" name="rw_cs_bg_image_slideshow_dur"  value="<?php echo $rw_cs_background['rw_cs_bg_image_slideshow_dur']; ?>" min="1000" max="100000">
						<span class="range-cs__value" id="rw_cs_bg_image_slideshow_dur_Span"><?php echo $rw_cs_background['rw_cs_bg_image_slideshow_dur'];?></span>
					</div>
				</div> 
				<div class="col-md-6" style="margin-bottom:15px;margin-top:10px;">
					<label class="RW_Label">Slideshow Bar :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="If you would like to display Slideshow Bar on the layout then you would need to choose Show from drop down"></i></label>
					<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_bg_image_slideshow_bar" name="rw_cs_bg_image_slideshow_bar" value="<?php echo $rw_cs_background['rw_cs_bg_image_slideshow_bar']; ?>" onchange="RW_CS_Bar_Clicked()">
						<option value='Show' <?php if($rw_cs_background['rw_cs_bg_image_slideshow_bar']=='Show'){ echo 'selected';}?>> Show </option>
						<option value='Hide' <?php if($rw_cs_background['rw_cs_bg_image_slideshow_bar']=='Hide'){ echo 'selected';}?>> Hide </option>
					</select>
				</div>
				<div class="col-md-12 RW_CS_Show_Bar_Div"> 
					<div class="row">
						<div style="margin-bottom:15px;" class="col-md-6">
							<label class="RW_Label">Bar Height(s) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Slideshow Bar Height Size"></i></label>
							<div class="range-cs">  
								<input class="range-cs__range" type="range" id="rw_cs_bg_image_slideshow_bar_height" name="rw_cs_bg_image_slideshow_bar_height"  value="<?php echo $rw_cs_background['rw_cs_bg_image_slideshow_bar_height']; ?>" min="3" max="15">
								<span class="range-cs__value" id="rw_cs_bg_image_slideshow_bar_height_Span"><?php echo $rw_cs_background['rw_cs_bg_image_slideshow_bar_height']; ?></span>
							</div>
						</div> 
						<div class="col-md-6" style="margin-bottom:20px;">
							<label  class="RW_Label">Bar Background Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Bar Background Color"></i></label>
							<input type="text" class="form-control RW_inp RW_marg alpha-color-picker"  id="rw_cs_bg_image_slideshow_bar_BgC" name="rw_cs_bg_image_slideshow_bar_BgC"  value="<?php echo $rw_cs_background['rw_cs_bg_image_slideshow_bar_BgC']; ?>">
						</div>
						<div class="col-md-6" style="margin-bottom:15px;">
							<label  class="RW_Label">Bar Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Bar Color"></i></label>
							<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_bg_image_slideshow_bar_FgC" name="rw_cs_bg_image_slideshow_bar_FgC"  value="<?php echo $rw_cs_background['rw_cs_bg_image_slideshow_bar_FgC']; ?>">
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<table class="table">
						<thead>
							<tr>
								<th class="info" colspan="2" style="text-align:center;color:#ffffff;text-shadow:1px 1px 1px #000;background:#47bde5;">Add Image</th>
							</tr>
						</thead>
						<tbody>
							<tr class="RW_CS_Table">
								<td><input class="form-control RW_inp RW_marg" id="rich_web_cs_bgISl_imgSrc_2" name=""  type="text" disabled></td>
								<td>
									<div id="wp-content-media-buttons" class="wp-media-buttons" style="text-align:center;">
										<a href="#" class="button insert-media add_media" style="border:1px solid rgba(0, 73, 107, 0.8); color:rgba(0, 73, 107, 0.8); background-color:#f4f4f4" data-editor="rich_web_cs_bgISl_imgSrc_1" title="Add Image" id="rich_web_cs_bgISl_ImgSrc" onclick="rich_web_cs_bgISl_Img_Src_Clicked()">
											<span class="wp-media-buttons-icon"></span>Add Image
										</a>
									</div>
									<input type="text" style="display:none;" id="rich_web_cs_bgISl_imgSrc_1" class='RWCSInput RWCSInput2'>
								</td>
							</tr>
							<tr>
								<td colspan="3" style="background:#47bde5;text-align:center; height:25px;">
									<input type='button' class='RW_CS_SVBut' onclick="rw_cs_ISSh_Save()" value='Save'/>
									<input type='button' class='RW_CS_UPBut' onclick="rw_cs_ISSh_Update()" value='Update'/>
									<input type='button' class='RW_CS_RBut' onclick="rw_cs_ISSh_Res()" value='Reset'/>
									<input type="text" style="display:none;" id="rw_cs_ISSh_HidNum" name="rw_cs_ISSh_HidNum" value="<?php echo $rw_cs_background['rw_cs_ISSh_HidNum']; ?>">
									<input type="text" style="display:none;" id="rw_cs_bg_image_slideshow" name="rw_cs_bg_image_slideshow" value="<?php echo $rw_cs_background['rw_cs_bg_image_slideshow']; ?>">
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-md-12">
					<table class='rw_cs_SaveISl_Table2 table-bordered'>
						<tr>
							<td> No </td>
							<td> Image </td>
							<td> Image Url </td>
							<td> Edit </td>
							<td> Delete </td>
						</tr>
					</table>
					<table class='rw_cs_SaveISl_Table3 table-bordered' onmousemove='rw_cs_ISSh_Sortable()'>
						<?php for($i=0;$i<count($img_sl_array);$i++){ ?>
							<?php if($img_sl_array[0] != ''){ ?>
							<tr id="tr_<?php echo $i+1; ?>"><td name="rw_cs_number_<?php echo $i+1; ?>" id="rw_cs_number_<?php echo $i+1; ?>"><?php echo $i+1; ?></td><td id="rw_cs_Add_Img_<?php echo $i+1; ?>"><img src="<?php echo $img_sl_array[$i]; ?>" id="rw_cs_Add_Img_Src_<?php echo $i+1; ?>" name="rw_cs_Add_Img_Src_<?php echo $i+1; ?>" style="max-height:60px;"></td><td><input type="text" class="form-control RW_inp RW_marg" id="rw_cs_ISSh_Url_<?php echo $i+1; ?>" name="rw_cs_ISSh_Url_<?php echo $i+1; ?>"  value="<?php echo $img_sl_array[$i]; ?>"></td><td id="tdEdit_<?php echo $i+1; ?>"><i class="rwIcPencil rich_web  rich_web-pencil" onclick="rw_cs_ISSh_EditId(<?php echo $i+1; ?>)"></i></td><td id="tdDelet_<?php echo $i+1; ?>"><i class="rwIcDelete rich_web  rich_web-trash" onclick="rw_cs_ISSh_DeletId(<?php echo $i+1; ?>)"></i></td></tr>
							<?php } ?>
						<?php } ?>
					</table>
				</div>
			</div>
		</div>
		<div class="row rw_BgV_show_div">
			<!-- <div class="col-md-6">
				<label class="RW_Label">Video Sound :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="If you would like to turn on the sound while displaying a video on background, then you would need to choose True from dropdown"></i></label>
				<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_bg_image_video_sound" name="rw_cs_bg_image_video_sound" value="<?php// echo $rw_cs_background['rw_cs_bg_image_video_sound']; ?>">
					<option value='true'  <?php //if($rw_cs_background['rw_cs_bg_image_video_sound']=='true'){ //echo 'selected';}?>>  True  </option>
					<option value='false' <?php //if($rw_cs_background['rw_cs_bg_image_video_sound']=='false'){// echo 'selected';}?>> False </option>
				</select>
			</div> -->
			<div class="col-md-6">
				<label class="RW_Label">Video Quality :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title=""></i></label>
				<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_bg_image_video_quality" name="rw_cs_bg_image_video_quality" value="<?php echo $rw_cs_background['rw_cs_bg_image_video_quality']; ?>">
					<option value='default' <?php if($rw_cs_background['rw_cs_bg_image_video_quality']=='default'){ echo 'selected';}?>> Auto   </option>
					<option value='small'   <?php if($rw_cs_background['rw_cs_bg_image_video_quality']=='small'){ echo 'selected';}?>>   Small  </option>
					<option value='medium'  <?php if($rw_cs_background['rw_cs_bg_image_video_quality']=='medium'){ echo 'selected';}?>>  Medium </option>
					<option value='large'   <?php if($rw_cs_background['rw_cs_bg_image_video_quality']=='large'){ echo 'selected';}?>>   Large  </option>
					<option value='hd720'   <?php if($rw_cs_background['rw_cs_bg_image_video_quality']=='hd720'){ echo 'selected';}?>>   hd720  </option>
					<option value='hd1080'  <?php if($rw_cs_background['rw_cs_bg_image_video_quality']=='hd1080'){ echo 'selected';}?>>  hd1080 </option>
					<option value='hd1440'  <?php if($rw_cs_background['rw_cs_bg_image_video_quality']=='hd1440'){ echo 'selected';}?>>  hd1440 </option>
					<option value='hd2160'  <?php if($rw_cs_background['rw_cs_bg_image_video_quality']=='hd2160'){ echo 'selected';}?>>  hd2160 </option>
				</select>
			</div>
			<div class="col-md-6 ">
				<label class="RW_Label">Player Controls :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose True to display Player Controls on video"></i></label>
				<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_bg_image_video_PlC" name="rw_cs_bg_image_video_PlC" value="<?php echo $rw_cs_background['rw_cs_bg_image_video_PlC']; ?>" onchange="Rich_CS_VC_Clicked()">
					<option value='true'  <?php if($rw_cs_background['rw_cs_bg_image_video_PlC']=='true'){ echo 'selected';}?>>  True  </option>
					<option value='false' <?php if($rw_cs_background['rw_cs_bg_image_video_PlC']=='false'){ echo 'selected';}?>> False </option>
				</select>
			</div>
			<div class="col-md-12 rw_show_controls_video_div">
				<div class="row">
					<div class="col-md-6" style="margin-bottom:15px;">
						<label  class="RW_Label">Controls Background Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Controls Background Color"></i></label>
						<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_bg_image_video_PlC_BgC" name="rw_cs_bg_image_video_PlC_BgC"  value="<?php echo $rw_cs_background['rw_cs_bg_image_video_PlC_BgC']; ?>">
					</div>
					<div class="col-md-6" style="margin-bottom:15px;">
						<label  class="RW_Label">Controls Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Controls Color"></i></label>
						<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_bg_image_video_PlC_C" name="rw_cs_bg_image_video_PlC_C"  value="<?php echo $rw_cs_background['rw_cs_bg_image_video_PlC_C']; ?>">
					</div>

					<div class="col-md-6" style="margin-bottom:15px;">
						<label  class="RW_Label">Controls Hover Background Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Controls Hover Background Color"></i></label>
						<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_bg_image_video_PlC_HBgC" name="rw_cs_bg_image_video_PlC_HBgC"  value="<?php echo $rw_cs_background['rw_cs_bg_image_video_PlC_HBgC']; ?>">
					</div>
					<div class="col-md-6" style="margin-bottom:15px;">
						<label  class="RW_Label">Controls Hover Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Controls Hover Color"></i></label>
						<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_bg_image_video_PlC_HC" name="rw_cs_bg_image_video_PlC_HC"  value="<?php echo $rw_cs_background['rw_cs_bg_image_video_PlC_HC']; ?>">
					</div>
					<div class="col-md-6">
						<label class="RW_Label">Controls Radius(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide Radius for Video Player Controls"></i></label>
						<div class="range-cs">  
							<input class="range-cs__range" type="range" id="rw_cs_bg_image_video_PlC_BR" name="rw_cs_bg_image_video_PlC_BR"  value="<?php echo $rw_cs_background['rw_cs_bg_image_video_PlC_BR']; ?>" min="0" max="200">
							<span class="range-cs__value" id="rw_cs_bg_image_video_PlC_BR_Span"><?php echo $rw_cs_background['rw_cs_bg_image_video_PlC_BR']; ?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label class="RW_Label">Controls Shadow(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide Shadow for Video Player Controls"></i></label>
						<div class="range-cs">  
							<input class="range-cs__range" type="range" id="rw_cs_bg_image_video_PlC_BSh" name="rw_cs_bg_image_video_PlC_BSh"  value="<?php echo $rw_cs_background['rw_cs_bg_image_video_PlC_BSh']; ?>" min="0" max="30">
							<span class="range-cs__value" id="rw_cs_bg_image_video_PlC_BSh_Span"><?php echo $rw_cs_background['rw_cs_bg_image_video_PlC_BSh']; ?></span>
						</div>
					</div>
					<div class="col-md-6" style="margin-top:15px;margin-bottom:15px;">
						<label  class="RW_Label">Shadow Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Controls Shadow Color"></i></label>
						<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_bg_image_video_PlC_ShC" name="rw_cs_bg_image_video_PlC_ShC"  value="<?php echo $rw_cs_background['rw_cs_bg_image_video_PlC_ShC']; ?>">
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<label class="RW_Label">Video :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to upload Video for Background"></i></label>
				<div>
					<div class="col-md-9" style="padding:0px;">
						<input class="form-control RW_inp RW_marg" id="rich_web_cs_bg_vSrs_2" name="rw_cs_bg_image_video" type="text" value="<?php echo $rw_cs_background['rw_cs_bg_image_video']; ?>" disabled>
					</div>
					<div class="col-md-3" style="padding-right:0px;">
						<div id="wp-content-media-buttons" class="wp-media-buttons" style="text-align:center;"><a href="#" class="button insert-media add_media" style="border:1px solid rgba(0, 73, 107, 0.8); color:rgba(0, 73, 107, 0.8); background-color:#f4f4f4" data-editor="rich_web_cs_bg_vSrs_1" title="Add Video" id="rich_web_cs_bg_vSrs" onclick="rich_web_cs_bg_Video_Src_Clicked()">
								<span class="wp-media-buttons-icon"></span>Add Video
							</a>
						</div>
						<input type="text" style="display:none;" id="rich_web_cs_bg_vSrs_1"  class='RWCSInput RWCSInput2'>
					</div>
				</div>
			</div>
		</div>
		<div class="row rw_BgVSlSh_show_div">
			<div class="col-md-6">
				<label class="RW_Label">Video Sound :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="If you would like to turn on the sound while displaying a video on background, then you would need to choose True from dropdown"></i></label>
				<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_bg_image_vsl_sound" name="rw_cs_bg_image_vsl_sound" value="<?php echo $rw_cs_background['rw_cs_bg_image_vsl_sound']; ?>">
					<option value='true'  <?php if($rw_cs_background['rw_cs_bg_image_vsl_sound']=='true'){ echo 'selected';}?>>  True  </option>
					<option value='false' <?php if($rw_cs_background['rw_cs_bg_image_vsl_sound']=='false'){ echo 'selected';}?>> False </option>
				</select>
			</div>
			<div class="col-md-6">
				<label class="RW_Label">Video Quality :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title=""></i></label>
				<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_bg_image_vsl_quality" name="rw_cs_bg_image_vsl_quality" value="<?php echo $rw_cs_background['rw_cs_bg_image_vsl_quality']; ?>">
					<option value='default' <?php if($rw_cs_background['rw_cs_bg_image_vsl_quality']=='default'){ echo 'selected';}?>> Auto   </option>
					<option value='small'   <?php if($rw_cs_background['rw_cs_bg_image_vsl_quality']=='small'){ echo 'selected';}?>>   Small  </option>
					<option value='medium'  <?php if($rw_cs_background['rw_cs_bg_image_vsl_quality']=='medium'){ echo 'selected';}?>>  Medium </option>
					<option value='large'   <?php if($rw_cs_background['rw_cs_bg_image_vsl_quality']=='large'){ echo 'selected';}?>>   Large  </option>
					<option value='hd720'   <?php if($rw_cs_background['rw_cs_bg_image_vsl_quality']=='hd720'){ echo 'selected';}?>>   hd720  </option>
					<option value='hd1080'  <?php if($rw_cs_background['rw_cs_bg_image_vsl_quality']=='hd1080'){ echo 'selected';}?>>  hd1080 </option>
					<option value='hd1440'  <?php if($rw_cs_background['rw_cs_bg_image_vsl_quality']=='hd1440'){ echo 'selected';}?>>  hd1440 </option>
					<option value='hd2160'  <?php if($rw_cs_background['rw_cs_bg_image_vsl_quality']=='hd2160'){ echo 'selected';}?>>  hd2160 </option>
				</select>
			</div>
			<div class="col-md-6">
				<label class="RW_Label">Player Controls :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose True to display Player Controls on video"></i></label>
				<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_bg_image_vsl_PlC" name="rw_cs_bg_image_vsl_PlC" value="<?php echo $rw_cs_background['rw_cs_bg_image_vsl_PlC']; ?>" onchange="Rich_CS_VSlC_Clicked()">
					<option value='true'  <?php if($rw_cs_background['rw_cs_bg_image_vsl_PlC']=='true'){ echo 'selected';}?>>  True  </option>
					<option value='false' <?php if($rw_cs_background['rw_cs_bg_image_vsl_PlC']=='false'){ echo 'selected';}?>> False </option>
				</select>
			</div>
			<div class="col-md-12 rw_show_controls_vsl_div">
				<div class="row">
					<div class="col-md-6" style="margin-bottom:15px;">
						<label  class="RW_Label">Controls Background Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Controls Background Color"></i></label>
						<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_bg_image_vsl_PlC_BgC" name="rw_cs_bg_image_vsl_PlC_BgC"  value="<?php echo $rw_cs_background['rw_cs_bg_image_vsl_PlC_BgC']; ?>">
					</div>
					<div class="col-md-6" style="margin-bottom:15px;">
						<label  class="RW_Label">Controls Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Controls Color"></i></label>
						<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_bg_image_vsl_PlC_C" name="rw_cs_bg_image_vsl_PlC_C"  value="<?php echo $rw_cs_background['rw_cs_bg_image_vsl_PlC_C']; ?>">
					</div>
					<div class="col-md-6" style="margin-bottom:15px;">
						<label  class="RW_Label">Controls Hover Background Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Controls Hover Background Color"></i></label>
						<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_bg_image_vsl_PlC_HBgC" name="rw_cs_bg_image_vsl_PlC_HBgC"  value="<?php echo $rw_cs_background['rw_cs_bg_image_vsl_PlC_HBgC']; ?>">
					</div>
					<div class="col-md-6" style="margin-bottom:15px;">
						<label  class="RW_Label">Controls Hover Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Controls Hover Color"></i></label>
						<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_bg_image_vsl_PlC_HC" name="rw_cs_bg_image_vsl_PlC_HC"  value="<?php echo $rw_cs_background['rw_cs_bg_image_vsl_PlC_HC']; ?>">
					</div>
					<div class="col-md-6">
						<label class="RW_Label">Controls Radius(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide Radius for Video Player Controls"></i></label>
						<div class="range-cs">  
							<input class="range-cs__range" type="range" id="rw_cs_bg_image_vsl_PlC_BR" name="rw_cs_bg_image_vsl_PlC_BR"  value="<?php echo $rw_cs_background['rw_cs_bg_image_vsl_PlC_BR']; ?>" min="0" max="200">
							<span class="range-cs__value" id="rw_cs_bg_image_vsl_PlC_BR_Span"><?php echo $rw_cs_background['rw_cs_bg_image_vsl_PlC_BR']; ?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label class="RW_Label">Controls Shadow(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide Shadow for Video Player Controls"></i></label>
						<div class="range-cs">  
							<input class="range-cs__range" type="range" id="rw_cs_bg_image_vsl_PlC_BSh" name="rw_cs_bg_image_vsl_PlC_BSh"  value="<?php echo $rw_cs_background['rw_cs_bg_image_vsl_PlC_BSh']; ?>" min="0" max="30">
							<span class="range-cs__value" id="rw_cs_bg_image_vsl_PlC_BSh_Span"><?php echo $rw_cs_background['rw_cs_bg_image_vsl_PlC_BSh']; ?></span>
						</div>
					</div>
					<div class="col-md-6" style="margin-top:15px;margin-bottom:15px;">
						<label  class="RW_Label">Shadow Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Controls Shadow Color"></i></label>
						<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_bg_image_vsl_PlC_ShC" name="rw_cs_bg_image_vsl_PlC_ShC"  value="<?php echo $rw_cs_background['rw_cs_bg_image_vsl_PlC_ShC']; ?>">
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<table class="table">
					<thead>
						<tr>
							<th class="info" colspan="2" style="text-align:center;color:#ffffff;text-shadow:1px 1px 1px #000;background:#47bde5;">Add Videos</th>
						</tr>
					</thead>
					<tbody>
						<tr class="RW_CS_Table">
							<td>
								<input class="form-control RW_inp RW_marg" id="rich_web_cs_bgVSl_vSrc_2" name="rw_cs_bg_image_video" type="text"  disabled>
							</td>
							<td>
								<div id="wp-content-media-buttons" class="wp-media-buttons" style="text-align:center;"><a href="#" class="button insert-media add_media" style="border:1px solid rgba(0, 73, 107, 0.8); color:rgba(0, 73, 107, 0.8); background-color:#f4f4f4" data-editor="rich_web_cs_bgVSl_vSrc_1" title="Add Video" id="rich_web_cs_bgVSl_vSrc" onclick="rich_web_cs_bgVSl_Src_Clicked()">
										<span class="wp-media-buttons-icon"></span>Add Video
									</a>
								</div>
								<input type="text" style="display:none;" id="rich_web_cs_bgVSl_vSrc_1"  class='RWCSInput RWCSInput2'>
							</td>
						</tr>
						<tr>
							<td colspan="3" style="background:#47bde5;text-align:center; height:25px;">
								<input type='button' class='RW_CS_SVBut' onclick="rw_cs_VSSh_Save()" value='Save' />
								<input type='button' class='RW_CS_UPBut' onclick="rw_cs_VSSh_Update()" value='Update' />
								<input type='button' class='RW_CS_RBut' onclick="rw_cs_VSSh_Res()" value='Reset'/>
								<input type="text" style="display:none;" id="rw_cs_VSSh_HidNum" name="rw_cs_VSSh_HidNum" value="<?php echo $rw_cs_background['rw_cs_VSSh_HidNum']; ?>">
								<input type="text" style="display:none;" id="rw_cs_bg_image_video_slideshow" name="rw_cs_bg_image_video_slideshow" value="<?php echo $rw_cs_background['rw_cs_bg_image_video_slideshow']; ?>">
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-md-12">
				<table class='rw_cs_SaveVSl_Table2 table-bordered'>
					<tr>
						<td> No </td>
						<td> Image </td>
						<td> Image Url </td>
						<td> Edit </td>
						<td> Delete </td>
					</tr>
				</table>
				<table class='rw_cs_SaveVSl_Table3 table-bordered' onmousemove='rw_cs_VSSh_Sortable()'>
					<?php for($i=0;$i<count($img_slv_array);$i++){ ?>
						<?php if($img_slv_array[0] != ''){ ?>
						<tr id="tr_<?php echo $i+1; ?>"><td name="rw_cs_number_<?php echo $i+1; ?>" id="rw_cs_number_<?php echo $i+1; ?>"><?php echo $i+1; ?></td><td id="rw_cs_Add_Video_<?php echo $i+1; ?>"><img src="http://img.youtube.com/vi/<?php echo $img_slv_array[$i]; ?>/mqdefault.jpg" id="rw_cs_Add_Video_Src_<?php echo $i+1; ?>" name="rw_cs_Add_Video_Src_<?php echo $i+1; ?>" style="max-height:60px;"></td><td><input type="text" class="form-control RW_inp RW_marg" id="rw_cs_VSSh_Url_<?php echo $i+1; ?>" name="rw_cs_VSSh_Url_<?php echo $i+1; ?>"  value="<?php echo $img_slv_array[$i]; ?>"></td><td id="tdEdit_<?php echo $i+1; ?>"><i class="rwIcPencil rich_web  rich_web-pencil" onclick="rw_cs_VSSh_EditId(<?php echo $i+1; ?>)"></i></td><td id="tdDelet_<?php echo $i+1; ?>"><i class="rwIcDelete rich_web  rich_web-trash" onclick="rw_cs_VSSh_DeletId(<?php echo $i+1; ?>)"></i></td></tr>
						<?php } ?>
					<?php } ?>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<label class="RW_Label">Animation :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Show to show animation in the background"></i></label>
				<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_bg_anim" name="rw_cs_bg_anim" value="<?php echo $rw_cs_background['rw_cs_bg_anim']; ?>">
					<option value='Show' <?php if($rw_cs_background['rw_cs_bg_anim']=='Show'){ echo 'selected';}?>> Show </option>
					<option value='Hide' <?php if($rw_cs_background['rw_cs_bg_anim']=='Hide'){ echo 'selected';}?>> Hide </option>
				</select>
			</div>
			<div class="col-md-6">
				<label class="RW_Label">Animation Type :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose a type of Animation which would like to display on the background"></i></label>
				<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_bg_anim_type" name="rw_cs_bg_anim_type" value="<?php echo $rw_cs_background['rw_cs_bg_anim_type']; ?>">
					<option value='Particle' <?php if($rw_cs_background['rw_cs_bg_anim_type']=='Particle'){ echo 'selected';}?>>Particle</option>
					<option value='Bubble' <?php if($rw_cs_background['rw_cs_bg_anim_type']=='Bubble'){ echo 'selected';}?>>Bubble</option>
					<option value='Constellationel' <?php if($rw_cs_background['rw_cs_bg_anim_type']=='Constellationel'){ echo 'selected';}?>>Constellationel</option>
					<option value='Snowland' <?php if($rw_cs_background['rw_cs_bg_anim_type']=='Snowland'){ echo 'selected';}?>>Snowland</option>
					<option value='Hover' <?php if($rw_cs_background['rw_cs_bg_anim_type']=='Hover'){ echo 'selected';}?>>Hover</option>
				</select>
			</div>
			<div class="col-md-12">
				<label class="RW_Label">Custom CSS :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide CSS code manually to add extra styling to the above mentioned fields"></i></label>
				<textarea type="text" class="form-control RW_marg" rows="5"  id="rw_cs_bg_Custom_CSS" name="rw_cs_bg_Custom_CSS" ><?php echo $rw_cs_background['rw_cs_bg_Custom_CSS']; ?>
				</textarea>
			</div>
		</div>
		<div class="RW_Line_Soperator">
		</div>
		<div style="text-align:right;">
			<input type="button" class="RW_CS_Button" onclick="RW_CS_Bg()" value="Save Changes">
			<input type="button" class="RW_CS_Button_Res"  data-toggle="modal" data-target="#myModal_Bg" value="Reset Default Setting">
			<div class="modal fade" id="myModal_Bg" role="dialog">
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
							<button type="button" onclick="RW_CS_Res_Bg()" class="btn btn-primary" data-dismiss="modal">Yes</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<?php
	if(isset($_POST['action_bg'])=="rw_csp_bg")
	{
		$rw_cs_bg_type = sanitize_text_field($_POST['rw_cs_bg_type']); $rw_cs_bg_color = sanitize_text_field($_POST['rw_cs_bg_color']); $rw_cs_bg_image = sanitize_text_field($_POST['rw_cs_bg_image']); $rw_cs_bg_image_slideshow = sanitize_text_field($_POST['rw_cs_bg_image_slideshow']); $rw_cs_bg_image_slideshow_dur = sanitize_text_field($_POST['rw_cs_bg_image_slideshow_dur']); $rw_cs_bg_image_slideshow_bar = sanitize_text_field($_POST['rw_cs_bg_image_slideshow_bar']); $rw_cs_bg_image_slideshow_bar_height = sanitize_text_field($_POST['rw_cs_bg_image_slideshow_bar_height']); $rw_cs_bg_image_slideshow_bar_BgC = sanitize_text_field($_POST['rw_cs_bg_image_slideshow_bar_BgC']); $rw_cs_bg_image_slideshow_bar_FgC = sanitize_text_field($_POST['rw_cs_bg_image_slideshow_bar_FgC']); $rw_cs_bg_image_video = sanitize_text_field($_POST['rw_cs_bg_image_video']); $rw_cs_bg_image_video_sound = sanitize_text_field($_POST['rw_cs_bg_image_video_sound']); $rw_cs_bg_image_video_quality = sanitize_text_field($_POST['rw_cs_bg_image_video_quality']); $rw_cs_bg_image_video_PlC = sanitize_text_field($_POST['rw_cs_bg_image_video_PlC']); $rw_cs_bg_image_video_PlC_BgC = sanitize_text_field($_POST['rw_cs_bg_image_video_PlC_BgC']); $rw_cs_bg_image_video_PlC_C = sanitize_text_field($_POST['rw_cs_bg_image_video_PlC_C']); $rw_cs_bg_image_video_PlC_HBgC = sanitize_text_field($_POST['rw_cs_bg_image_video_PlC_HBgC']); $rw_cs_bg_image_video_PlC_HC = sanitize_text_field($_POST['rw_cs_bg_image_video_PlC_HC']); $rw_cs_bg_image_video_PlC_BR = sanitize_text_field($_POST['rw_cs_bg_image_video_PlC_BR']); $rw_cs_bg_image_video_PlC_BSh = sanitize_text_field($_POST['rw_cs_bg_image_video_PlC_BSh']); $rw_cs_bg_image_video_PlC_ShC = sanitize_text_field($_POST['rw_cs_bg_image_video_PlC_ShC']); $rw_cs_bg_image_video_slideshow = sanitize_text_field($_POST['rw_cs_bg_image_video_slideshow']); $rw_cs_bg_image_vsl_sound = sanitize_text_field($_POST['rw_cs_bg_image_vsl_sound']); $rw_cs_bg_image_vsl_quality = sanitize_text_field($_POST['rw_cs_bg_image_vsl_quality']); $rw_cs_bg_image_vsl_PlC = sanitize_text_field($_POST['rw_cs_bg_image_vsl_PlC']); $rw_cs_bg_image_vsl_PlC_BgC = sanitize_text_field($_POST['rw_cs_bg_image_vsl_PlC_BgC']); $rw_cs_bg_image_vsl_PlC_C = sanitize_text_field($_POST['rw_cs_bg_image_vsl_PlC_C']); $rw_cs_bg_image_vsl_PlC_HBgC = sanitize_text_field($_POST['rw_cs_bg_image_vsl_PlC_HBgC']); $rw_cs_bg_image_vsl_PlC_HC = sanitize_text_field($_POST['rw_cs_bg_image_vsl_PlC_HC']); $rw_cs_bg_image_vsl_PlC_BR = sanitize_text_field($_POST['rw_cs_bg_image_vsl_PlC_BR']); $rw_cs_bg_image_vsl_PlC_BSh = sanitize_text_field($_POST['rw_cs_bg_image_vsl_PlC_BSh']); $rw_cs_bg_image_vsl_PlC_ShC = sanitize_text_field($_POST['rw_cs_bg_image_vsl_PlC_ShC']); $rw_cs_bg_anim = sanitize_text_field($_POST['rw_cs_bg_anim']); $rw_cs_bg_anim_type = sanitize_text_field($_POST['rw_cs_bg_anim_type']); $rw_cs_ISSh_HidNum = sanitize_text_field($_POST['rw_cs_ISSh_HidNum']); $rw_cs_VSSh_HidNum = sanitize_text_field($_POST['rw_cs_VSSh_HidNum']); $rw_cs_bg_Custom_CSS = sanitize_text_field($_POST['rw_cs_bg_Custom_CSS']);
		$rw_background = serialize( array( 'rw_cs_bg_type' => $rw_cs_bg_type, 'rw_cs_bg_color' => $rw_cs_bg_color, 'rw_cs_bg_image' => $rw_cs_bg_image, 'rw_cs_bg_image_slideshow' => $rw_cs_bg_image_slideshow, 'rw_cs_bg_image_slideshow_dur' => $rw_cs_bg_image_slideshow_dur, 'rw_cs_bg_image_slideshow_bar' => $rw_cs_bg_image_slideshow_bar, 'rw_cs_bg_image_slideshow_bar_height' => $rw_cs_bg_image_slideshow_bar_height, 'rw_cs_bg_image_slideshow_bar_BgC' => $rw_cs_bg_image_slideshow_bar_BgC, 'rw_cs_bg_image_slideshow_bar_FgC' => $rw_cs_bg_image_slideshow_bar_FgC, 'rw_cs_bg_image_video' => $rw_cs_bg_image_video, 'rw_cs_bg_image_video_sound' => $rw_cs_bg_image_video_sound, 'rw_cs_bg_image_video_quality' => $rw_cs_bg_image_video_quality, 'rw_cs_bg_image_video_PlC' => $rw_cs_bg_image_video_PlC, 'rw_cs_bg_image_video_PlC_BgC' => $rw_cs_bg_image_video_PlC_BgC, 'rw_cs_bg_image_video_PlC_C' => $rw_cs_bg_image_video_PlC_C, 'rw_cs_bg_image_video_PlC_HBgC' => $rw_cs_bg_image_video_PlC_HBgC, 'rw_cs_bg_image_video_PlC_HC' => $rw_cs_bg_image_video_PlC_HC, 'rw_cs_bg_image_video_PlC_BR' => $rw_cs_bg_image_video_PlC_BR, 'rw_cs_bg_image_video_PlC_BSh' => $rw_cs_bg_image_video_PlC_BSh, 'rw_cs_bg_image_video_PlC_ShC' => $rw_cs_bg_image_video_PlC_ShC, 'rw_cs_bg_image_video_slideshow' => $rw_cs_bg_image_video_slideshow, 'rw_cs_bg_image_vsl_sound' => $rw_cs_bg_image_vsl_sound, 'rw_cs_bg_image_vsl_quality' => $rw_cs_bg_image_vsl_quality, 'rw_cs_bg_image_vsl_PlC' => $rw_cs_bg_image_vsl_PlC, 'rw_cs_bg_image_vsl_PlC_BgC' => $rw_cs_bg_image_vsl_PlC_BgC, 'rw_cs_bg_image_vsl_PlC_C' => $rw_cs_bg_image_vsl_PlC_C, 'rw_cs_bg_image_vsl_PlC_HBgC' => $rw_cs_bg_image_vsl_PlC_HBgC, 'rw_cs_bg_image_vsl_PlC_HC' => $rw_cs_bg_image_vsl_PlC_HC, 'rw_cs_bg_image_vsl_PlC_BR' => $rw_cs_bg_image_vsl_PlC_BR, 'rw_cs_bg_image_vsl_PlC_BSh' => $rw_cs_bg_image_vsl_PlC_BSh, 'rw_cs_bg_image_vsl_PlC_ShC' => $rw_cs_bg_image_vsl_PlC_ShC, 'rw_cs_bg_anim' => $rw_cs_bg_anim, 'rw_cs_bg_anim_type' => $rw_cs_bg_anim_type, 'rw_cs_ISSh_HidNum' => $rw_cs_ISSh_HidNum, 'rw_cs_VSSh_HidNum' => $rw_cs_VSSh_HidNum, 'rw_cs_bg_Custom_CSS' => $rw_cs_bg_Custom_CSS, ));
		update_option('rw_cs_background', $rw_background);
	}
	if(isset($_POST['reset_action_bg'])=="action_bg_reset")
	{
		$rw_background = serialize( array( 'rw_cs_bg_type' => "Color", 'rw_cs_bg_color' => "#30a9d1", 'rw_cs_bg_image' => "", 'rw_cs_bg_image_slideshow' => "", 'rw_cs_bg_image_slideshow_dur' => "12000", 'rw_cs_bg_image_slideshow_bar' => "Hide", 'rw_cs_bg_image_slideshow_bar_height' => "3", 'rw_cs_bg_image_slideshow_bar_BgC' => "rgba(48,169,209,0.2)", 'rw_cs_bg_image_slideshow_bar_FgC' => "#ffffff", 'rw_cs_bg_image_video' => "", 'rw_cs_bg_image_video_sound' => "true", 'rw_cs_bg_image_video_quality' => "default", 'rw_cs_bg_image_video_PlC' => "true", 'rw_cs_bg_image_video_PlC_BgC' => "#30a9d1", 'rw_cs_bg_image_video_PlC_C' => "#ffffff", 'rw_cs_bg_image_video_PlC_HBgC' => "#47bde5", 'rw_cs_bg_image_video_PlC_HC' => "#ffffff", 'rw_cs_bg_image_video_PlC_BR' => "200", 'rw_cs_bg_image_video_PlC_BSh' => "1", 'rw_cs_bg_image_video_PlC_ShC' => "#47bde5", 'rw_cs_bg_image_video_slideshow' => "", 'rw_cs_bg_image_vsl_sound' => "true", 'rw_cs_bg_image_vsl_quality' => "default", 'rw_cs_bg_image_vsl_PlC' => "true", 'rw_cs_bg_image_vsl_PlC_BgC' => "#30a9d1", 'rw_cs_bg_image_vsl_PlC_C' => "#ffffff", 'rw_cs_bg_image_vsl_PlC_HBgC' => "#47bde5", 'rw_cs_bg_image_vsl_PlC_HC' => "#ffffff", 'rw_cs_bg_image_vsl_PlC_BR' => "0", 'rw_cs_bg_image_vsl_PlC_BSh' => "0", 'rw_cs_bg_image_vsl_PlC_ShC' => "#47bde5", 'rw_cs_bg_anim' => "Show", 'rw_cs_bg_anim_type' => "Particle", 'rw_cs_ISSh_HidNum' => "0", 'rw_cs_VSSh_HidNum' => "0", 'rw_cs_bg_Custom_CSS' => "", ));
		update_option('rw_cs_background', $rw_background);
	}
?>