<?php 
	if ( ! defined( 'ABSPATH' ) ) exit;
	$rw_cs_countdown = unserialize(get_option('rw_cs_countdown'));
?>
<form>
	<div class="form-group" style="width:100%;margin-bottom:0px;">
		<div class="row">
			<div class="col-md-12 col-lg-8">
				<label class="RW_Label">Countdown Timer :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="If you would like to display Countdown Timer on coming soon page then you would need to choose Show from drop down or vice versa"></i></label>
				<select class="form-control RW_F RW_inp RW_marg selectpicker" id="rw_cs_cout_show" name="rw_cs_cout_show" value="<?php echo $rw_cs_countdown['rw_cs_cout_show']; ?>" onchange="Rich_CS_Count_Clicked()">
					<option value='show' <?php if($rw_cs_countdown['rw_cs_cout_show']=='show'){ echo 'selected';}?>> Show </option>
					<option value='hide' <?php if($rw_cs_countdown['rw_cs_cout_show']=='hide'){ echo 'selected';}?>> Hide </option>
				</select>
			</div>
		</div>
		<div class="row rw_count_show_div">
			<div class="col-md-6">
				<label class="RW_Label">Launch Date and Time :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Launch Date and Time for countdown to run"></i></label>
				<div id="datetimepicker1" class="input-append date">
					<input class="datInpRW" data-format="dd/MM/yyyy hh:mm:ss" value="<?php echo $rw_cs_countdown['rw_cs_count_datepicker']; ?>" name="rw_cs_count_datepicker" id="rw_cs_count_datepicker" type="text" readonly></input>
					<span class="add-on">
						<i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
					</span>
				</div>
			</div>
			<div class="col-md-6">
				<label class="RW_Label">Countdown Type :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose a type of Description which you would like to display. You can choose either Type1 or Type2"></i></label>
				<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_count_type" name="rw_cs_count_type" value="<?php echo $rw_cs_countdown['rw_cs_count_type']; ?>" onchange="Rich_CS_Count_Type_Clicked()">
					<option value='Type 1' <?php if($rw_cs_countdown['rw_cs_count_type']=='Type 1'){ echo 'selected';}?>> Type 1 </option>
					<option value='Type 2' <?php if($rw_cs_countdown['rw_cs_count_type']=='Type 2'){ echo 'selected';}?>> Type 2 </option>
				</select>
			</div>
			<div class="col-md-12 rw_count1_type_show_div">
				<div class="row">
					<div class="col-md-6">
						<label class="RW_Label">Number Font Size(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Number Font Size"></i></label>
						<div class="range-cs">
							<input class="range-cs__range" type="range" id="rw_cs_count_type1_Count_FS" name="rw_cs_count_type1_Count_FS" value="<?php echo $rw_cs_countdown['rw_cs_count_type1_Count_FS']; ?>" min="0" max="100">
							<span class="range-cs__value" id="rw_cs_desc_Text_FS_Span"><?php echo $rw_cs_countdown['rw_cs_count_type1_Count_FS_Span']; ?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label class="RW_Label">Number Font Family :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Number Font Family"></i></label>
						<select class="form-control RW_F RW_inp" id="rw_cs_count_type1_Count_FF" name="rw_cs_count_type1_Count_FF">
							<?php for($i=0;$i<count($Rich_WebFontCount);$i++){ ?> 
								<?php if($Rich_WebFontCount[$i]->Font_family==$rw_cs_countdown['rw_cs_count_type1_Count_FF']){ ?><option value="<?php echo $Rich_WebFontCount[$i]->Font_family;?>" selected><?php echo $Rich_WebFontCount[$i]->Font_family;?></option>
								<?php } else { ?> 
									<option value="<?php echo $Rich_WebFontCount[$i]->Font_family;?>"><?php echo $Rich_WebFontCount[$i]->Font_family;?></option>
								<?php }?>
							<?php }?>
						</select>
					</div>
					<div class="col-md-6" style="margin-top:10px;">
						<label class="RW_Label">Number Shadow(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Number Shadow"></i></label>
						<div class="range-cs">
							<input class="range-cs__range" type="range" id="rw_cs_count_type1_Count_TSh" name="rw_cs_count_type1_Count_TSh" value="<?php echo $rw_cs_countdown['rw_cs_count_type1_Count_TSh']; ?>" min="0" max="5">
							<span class="range-cs__value" id="rw_cs_desc_Text_FS_Span"><?php echo $rw_cs_countdown['rw_cs_count_type1_Count_TSh']; ?></span>
						</div>
					</div>
					<div class="col-md-6" style="margin-top:10px;">
						<label class="RW_Label">Text Font Size(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Text Font Size"></i></label>
						<div class="range-cs">
							<input class="range-cs__range" type="range" id="rw_cs_count_type1_text_FS" name="rw_cs_count_type1_text_FS" value="<?php echo $rw_cs_countdown['rw_cs_count_type1_text_FS']; ?>" min="0" max="100">
							<span class="range-cs__value" id="rw_cs_count_type1_text_FS_Span"><?php echo $rw_cs_countdown['rw_cs_count_type1_text_FS']; ?></span>
						</div>
					</div>
					<div class="col-md-6" style="margin-top:10px;">
						<label class="RW_Label">Text Font Family :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Text Font Family"></i></label>
						<select class="form-control RW_F RW_inp" id="rw_cs_count_type1_text_FF" name="rw_cs_count_type1_text_FF">
							<?php for($i=0;$i<count($Rich_WebFontCount);$i++){ ?> 
								<?php if($Rich_WebFontCount[$i]->Font_family==$rw_cs_countdown['rw_cs_count_type1_text_FF']){ ?><option value="<?php echo $Rich_WebFontCount[$i]->Font_family;?>" selected><?php echo $Rich_WebFontCount[$i]->Font_family;?></option>
								<?php } else { ?> 
									<option value="<?php echo $Rich_WebFontCount[$i]->Font_family;?>"><?php echo $Rich_WebFontCount[$i]->Font_family;?></option>
								<?php }?>
							<?php }?>
						</select>
					</div>
					<div class="col-md-6" style="margin:10px 0px 10px 0px;">
						<label class="RW_Label">Text Shadow(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Text Shadow"></i></label>
						<div class="range-cs">
							<input class="range-cs__range" type="range" id="rw_cs_count_type1_text_TSh" name="rw_cs_count_type1_text_TSh" value="<?php echo $rw_cs_countdown['rw_cs_count_type1_text_TSh']; ?>" min="0" max="5">
							<span class="range-cs__value" id="rw_cs_count_type1_text_TSh_Span"><?php echo $rw_cs_countdown['rw_cs_count_type1_text_TSh']; ?></span>
						</div>
					</div>
					<div class="col-md-6" style="margin-top:10px;">
						<label class="RW_Label">Font Weight :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Font Weight"></i></label>
						<div class="range-cs">
							<input class="range-cs__range" type="range" id="rw_cs_count_type1_FW" name="rw_cs_count_type1_FW" value="<?php echo $rw_cs_countdown['rw_cs_count_type1_FW']; ?>" min="0" max="1000">
							<span class="range-cs__value" id="rw_cs_count_type1_FW_Span"><?php echo $rw_cs_countdown['rw_cs_count_type1_FW']; ?></span>
						</div>
					</div>
					<div class="col-md-6" style="margin-top:10px;">
						<label class="RW_Label">Lines Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Lines Color for Countdown"></i></label>
						<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_count_type1_lines_C" name="rw_cs_count_type1_lines_C" value="<?php echo $rw_cs_countdown['rw_cs_count_type1_lines_C']; ?>">
					</div>
					<div class="col-md-12" style="margin-top:15px;">
						<ul class="nav nav-tabs">
							<li class="active"><a data-toggle="tab" href="#home_count">Days</a></li>
							<li><a data-toggle="tab" href="#menu1_count">Hours</a></li>
							<li><a data-toggle="tab" href="#menu2_count">Minutes</a></li>
							<li><a data-toggle="tab" href="#menu3_count">Seconds</a></li>
						</ul>
						<div class="tab-content">
							<div id="home_count" class="tab-pane fade in active">
								<div class="col-md-3 col-sm-6">
									<label style="margin-top:10px;" class="RW_Label">Number Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Day Number Color"></i></label>
									<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_count_type1_DC_C" name="rw_cs_count_type1_DC_C" value="<?php echo $rw_cs_countdown['rw_cs_count_type1_DC_C']; ?>">
								</div>
								<div class="col-md-3 col-sm-6">
									<label style="margin-top:10px;" class="RW_Label">Text Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Day Text Color"></i></label>
									<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_count_type1_DT_C" name="rw_cs_count_type1_DT_C" value="<?php echo $rw_cs_countdown['rw_cs_count_type1_DT_C']; ?>">
								</div>
								<div class="col-md-3 col-sm-6">
									<label style="margin-top:10px;" class="RW_Label">Text Line Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Day Text Line Color"></i></label>
									<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_count_type1_DT_BC" name="rw_cs_count_type1_DT_BC" value="<?php echo $rw_cs_countdown['rw_cs_count_type1_DT_BC']; ?>">
								</div>
								<div class="col-md-3 col-sm-6">
									<label style="margin-top:10px;" class="RW_Label">Text :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide content for Day Text which you would like to display"></i></label>
									<input type="text" class="form-control RW_inp RW_marg" id="rw_cs_count_type1_DT_T" name="rw_cs_count_type1_DT_T" value="<?php echo $rw_cs_countdown['rw_cs_count_type1_DT_T']; ?>">
								</div>
							</div>
						<div id="menu1_count" class="tab-pane fade">
								<div class="col-md-3 col-sm-6">
									<label style="margin-top:10px;" class="RW_Label">Number Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Hour Number Color"></i></label>
									<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_count_type1_HC_C" name="rw_cs_count_type1_HC_C" value="<?php echo $rw_cs_countdown['rw_cs_count_type1_HC_C']; ?>">
								</div>
								<div class="col-md-3 col-sm-6">
									<label style="margin-top:10px;" class="RW_Label">Text Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Hour Text Color"></i></label>
									<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_count_type1_HT_C" name="rw_cs_count_type1_HT_C" value="<?php echo $rw_cs_countdown['rw_cs_count_type1_HT_C']; ?>">
								</div>
								<div class="col-md-3 col-sm-6">
									<label style="margin-top:10px;" class="RW_Label">Text Line Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Hour Text Line Color"></i></label>
									<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_count_type1_HT_BC" name="rw_cs_count_type1_HT_BC" value="<?php echo $rw_cs_countdown['rw_cs_count_type1_HT_BC']; ?>">
								</div>
								<div class="col-md-3 col-sm-6">
									<label style="margin-top:10px;" class="RW_Label">Text :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide content for Hour Text which you would like to display"></i></label>
									<input type="text" class="form-control RW_inp RW_marg" id="rw_cs_count_type1_HT_T" name="rw_cs_count_type1_HT_T" value="<?php echo $rw_cs_countdown['rw_cs_count_type1_HT_T']; ?>">
								</div>
							</div>
							<div id="menu2_count" class="tab-pane fade">
								<div class="col-md-3 col-sm-6">
									<label style="margin-top:10px;" class="RW_Label">Number Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Minut Number Color"></i></label>
									<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_count_type1_MC_C" name="rw_cs_count_type1_MC_C" value="<?php echo $rw_cs_countdown['rw_cs_count_type1_MC_C']; ?>">
								</div>
								<div class="col-md-3 col-sm-6">
									<label style="margin-top:10px;" class="RW_Label">Text Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Minut Text Color"></i></label>
									<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_count_type1_MT_C" name="rw_cs_count_type1_MT_C" value="<?php echo $rw_cs_countdown['rw_cs_count_type1_MT_C']; ?>">
								</div>
								<div class="col-md-3 col-sm-6">
									<label style="margin-top:10px;" class="RW_Label">Text Line Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Minut Text Line Color"></i></label>
									<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_count_type1_MT_BC" name="rw_cs_count_type1_MT_BC" value="<?php echo $rw_cs_countdown['rw_cs_count_type1_MT_BC']; ?>">
								</div>
								<div class="col-md-3 col-sm-6">
									<label style="margin-top:10px;" class="RW_Label">Text :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide content for Minut Text which you would like to display"></i></label>
									<input type="text" class="form-control RW_inp RW_marg" id="rw_cs_count_type1_MT_T" name="rw_cs_count_type1_MT_T" value="<?php echo $rw_cs_countdown['rw_cs_count_type1_MT_T']; ?>">
								</div>
							</div>
							<div id="menu3_count" class="tab-pane fade">
								<div class="col-md-3 col-sm-6">
									<label style="margin-top:10px;" class="RW_Label">Number Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Second Number Color"></i></label>
									<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_count_type1_SC_C" name="rw_cs_count_type1_SC_C" value="<?php echo $rw_cs_countdown['rw_cs_count_type1_SC_C']; ?>">
								</div>
								<div class="col-md-3 col-sm-6">
									<label style="margin-top:10px;" class="RW_Label">Text Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Second Text Color"></i></label>
									<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_count_type1_ST_C" name="rw_cs_count_type1_ST_C" value="<?php echo $rw_cs_countdown['rw_cs_count_type1_ST_C']; ?>">
								</div>
								<div class="col-md-3 col-sm-6">
									<label style="margin-top:10px;" class="RW_Label">Text Line Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Second Text Line Color"></i></label>
									<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_count_type1_ST_BC" name="rw_cs_count_type1_ST_BC" value="<?php echo $rw_cs_countdown['rw_cs_count_type1_ST_BC']; ?>">
								</div>
								<div class="col-md-3 col-sm-6">
									<label style="margin-top:10px;" class="RW_Label">Text :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide content for Second Text which you would like to display"></i></label>
									<input type="text" class="form-control RW_inp RW_marg" id="rw_cs_count_type1_ST_T" name="rw_cs_count_type1_ST_T" value="<?php echo $rw_cs_countdown['rw_cs_count_type1_ST_T']; ?>">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12 rw_count2_type_show_div">
				<div class="row">
					<div class="col-md-6">
						<label class="RW_Label">Responsive Size :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Responsive Size"></i></label>
						<div class="range-cs">
							<input class="range-cs__range" type="range" id="rw_cs_count_type2_resp" name="rw_cs_count_type2_resp" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_resp']; ?>" min="0" max="100">
							<span class="range-cs__value" id="rw_cs_count_type2_resp_Span"><?php echo $rw_cs_countdown['rw_cs_count_type2_resp']; ?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label class="RW_Label">Number Font Family :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Number Font Family"></i></label>
						<select class="form-control RW_F RW_inp" id="rw_cs_count_type2_Count_FF" name="rw_cs_count_type2_Count_FF">
							<?php for($i=0;$i<count($Rich_WebFontCount);$i++){ ?> 
								<?php if($Rich_WebFontCount[$i]->Font_family==$rw_cs_countdown['rw_cs_count_type2_Count_FF']){ ?><option value="<?php echo $Rich_WebFontCount[$i]->Font_family;?>" selected><?php echo $Rich_WebFontCount[$i]->Font_family;?></option>
								<?php } else { ?> 
									<option value="<?php echo $Rich_WebFontCount[$i]->Font_family;?>"><?php echo $Rich_WebFontCount[$i]->Font_family;?></option>
								<?php }?>
							<?php }?>
						</select>
					</div>
					<div class="col-md-6">
						<label class="RW_Label">Number Shadow(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Number Shadow"></i></label>
						<div class="range-cs">
							<input class="range-cs__range" type="range" id="rw_cs_count_type2_Count_TSh" name="rw_cs_count_type2_Count_TSh" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_Count_TSh']; ?>" min="0" max="5">
							<span class="range-cs__value" id="rw_cs_count_type2_Count_TSh_Span"><?php echo $rw_cs_countdown['rw_cs_count_type2_Count_TSh']; ?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label class="RW_Label">Text Font Family :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Text Font Family"></i></label>
						<select class="form-control RW_F RW_inp" id="rw_cs_count_type2_text_FF" name="rw_cs_count_type2_text_FF">
							<?php for($i=0;$i<count($Rich_WebFontCount);$i++){ ?> 
								<?php if($Rich_WebFontCount[$i]->Font_family==$rw_cs_countdown['rw_cs_count_type2_text_FF']){ ?><option value="<?php echo $Rich_WebFontCount[$i]->Font_family;?>" selected><?php echo $Rich_WebFontCount[$i]->Font_family;?></option>
								<?php } else { ?> 
									<option value="<?php echo $Rich_WebFontCount[$i]->Font_family;?>"><?php echo $Rich_WebFontCount[$i]->Font_family;?></option>
								<?php }?>
							<?php }?>
						</select>
					</div>
					<div class="col-md-6">
						<label class="RW_Label">Text Shadow(px) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Text Shadow"></i></label>
						<div class="range-cs">
							<input class="range-cs__range" type="range" id="rw_cs_count_type2_text_TSh" name="rw_cs_count_type2_text_TSh" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_text_TSh']; ?>" min="0" max="5">
							<span class="range-cs__value" id="rw_cs_count_type2_text_TSh_Span"><?php echo $rw_cs_countdown['rw_cs_count_type2_text_TSh']; ?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label class="RW_Label">Font Weight :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Font Weight"></i></label>
						<div class="range-cs">
							<input class="range-cs__range" type="range" id="rw_cs_count_type2_FW" name="rw_cs_count_type2_FW" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_FW']; ?>" min="0" max="1000">
							<span class="range-cs__value" id="rw_cs_count_type2_FW_Span"><?php echo $rw_cs_countdown['rw_cs_count_type2_FW']; ?></span>
						</div>
					</div>
					<div class="col-md-12" style="margin-top:15px;">
						<ul class="nav nav-tabs">
							<li class="active"><a data-toggle="tab" href="#home_count2">Days</a></li>
							<li><a data-toggle="tab" href="#menu1_count2">Hours</a></li>
							<li><a data-toggle="tab" href="#menu2_count2">Minuts</a></li>
							<li><a data-toggle="tab" href="#menu3_count2">Seconds</a></li>
						</ul>
						<div class="tab-content">
							<div id="home_count2" class="tab-pane fade in active">
								<div class="col-md-6">
									<label style="margin-top:10px;" class="RW_Label">Number Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Day Number Color"></i></label>
									<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_count_type2_DC_C" name="rw_cs_count_type2_DC_C" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_DC_C']; ?>">
								</div>
								<div class="col-md-6">
									<label style="margin-top:10px;" class="RW_Label">Text Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Day Number Color"></i></label>
									<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_count_type2_DT_C" name="rw_cs_count_type2_DT_C" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_DT_C']; ?>">
								</div>
								<div class="col-md-6">
									<label style="margin-top:10px;" class="RW_Label">Text :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide content for Day Text which you would like to display"></i></label>
									<input type="text" class="form-control RW_inp RW_marg" id="rw_cs_count_type2_DT_T" name="rw_cs_count_type2_DT_T" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_DT_T']; ?>">
								</div>
								<div class="col-md-6" style="margin-top:10px;margin-bottom:15px;">
									<label class="RW_Label">Tickness(%) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Tickness"></i></label>
									<div class="range-cs">
										<input class="range-cs__range" type="range" id="rw_cs_count_type2_D_Tickness" name="rw_cs_count_type2_D_Tickness" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_D_Tickness']; ?>" min="0" max="100">
										<span class="range-cs__value" id="rw_cs_count_type2_D_Tickness_Span"><?php echo $rw_cs_countdown['rw_cs_count_type2_D_Tickness']; ?></span>
									</div>
								</div>
								<div class="col-md-6">
									<label style="margin-top:10px;" class="RW_Label">Background Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Day Background Color"></i></label>
									<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_count_type2_D_BgC" name="rw_cs_count_type2_D_BgC" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_D_BgC']; ?>">
								</div>
								<div class="col-md-6">
									<label style="margin-top:10px;" class="RW_Label">Timer Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Day Timer Color"></i></label>
									<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_count_type2_D_FgC" name="rw_cs_count_type2_D_FgC" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_D_FgC']; ?>">
								</div>
								<div class="col-md-6" style="margin-top:15px;">
									<label class="RW_Label">LineCap Type :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="If you would like to display Countdown LineCap on coming soon page then you would need to choose butt or round"></i></label>
									<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_count_type2_D_LC" name="rw_cs_count_type2_D_LC" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_D_LC']; ?>" >
										<option value='butt'  <?php if($rw_cs_countdown['rw_cs_count_type2_D_LC']=='butt'){ echo 'selected';}?>>  Butt  </option>
										<option value='round' <?php if($rw_cs_countdown['rw_cs_count_type2_D_LC']=='round'){ echo 'selected';}?>> Round </option>
									</select>
								</div>
							</div>
							<div id="menu1_count2" class="tab-pane fade">
								<div class="col-md-6">
									<label style="margin-top:10px;" class="RW_Label">Number Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Hour Number Color"></i></label>
									<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_count_type2_HC_C" name="rw_cs_count_type2_HC_C" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_HC_C']; ?>">
								</div>
								<div class="col-md-6">
									<label style="margin-top:10px;" class="RW_Label">Text Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Hour Number Color"></i></label>
									<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_count_type2_HT_C" name="rw_cs_count_type2_HT_C" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_HT_C']; ?>">
								</div>
								<div class="col-md-6">
									<label style="margin-top:10px;" class="RW_Label">Text :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide content for Hour Text which you would like to display"></i></label>
									<input type="text" class="form-control RW_inp RW_marg" id="rw_cs_count_type2_HT_T" name="rw_cs_count_type2_HT_T" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_HT_T']; ?>">
								</div>
								<div class="col-md-6" style="margin-top:10px;margin-bottom:15px;">
									<label class="RW_Label">Tickness(%) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Tickness"></i></label>
									<div class="range-cs">
										<input class="range-cs__range" type="range" id="rw_cs_count_type2_H_Tickness" name="rw_cs_count_type2_H_Tickness" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_H_Tickness']; ?>" min="0" max="100">
										<span class="range-cs__value" id="rw_cs_count_type2_H_Tickness_Span"><?php echo $rw_cs_countdown['rw_cs_count_type2_H_Tickness']; ?></span>
									</div>
								</div>
								<div class="col-md-6">
									<label style="margin-top:10px;" class="RW_Label">Background Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Hour Background Color"></i></label>
									<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_count_type2_H_BgC" name="rw_cs_count_type2_H_BgC" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_H_BgC']; ?>">
								</div>
								<div class="col-md-6">
									<label style="margin-top:10px;" class="RW_Label">Timer Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Hour Timer Color"></i></label>
									<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_count_type2_H_FgC" name="rw_cs_count_type2_H_FgC" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_H_FgC']; ?>">
								</div>
								<div class="col-md-6" style="margin-top:15px;">
									<label class="RW_Label">LineCap Type :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="If you would like to display Countdown LineCap on coming soon page then you would need to choose butt or round"></i></label>
									<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_count_type2_H_LC" name="rw_cs_count_type2_H_LC" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_H_LC']; ?>" >
										<option value='butt'  <?php if($rw_cs_countdown['rw_cs_count_type2_H_LC']=='butt'){ echo 'selected';}?>>  Butt  </option>
										<option value='round' <?php if($rw_cs_countdown['rw_cs_count_type2_H_LC']=='round'){ echo 'selected';}?>> Round </option>
									</select>
								</div>
							</div>
							<div id="menu2_count2" class="tab-pane fade">
								<div class="col-md-6">
									<label style="margin-top:10px;" class="RW_Label">Number Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Minut Number Color"></i></label>
									<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_count_type2_MC_C" name="rw_cs_count_type2_MC_C" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_MC_C']; ?>">
								</div>
								<div class="col-md-6">
									<label style="margin-top:10px;" class="RW_Label">Text Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Minut Number Color"></i></label>
									<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_count_type2_MT_C" name="rw_cs_count_type2_MT_C" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_MT_C']; ?>">
								</div>
								<div class="col-md-6">
									<label style="margin-top:10px;" class="RW_Label">Text :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide content for Minut Text which you would like to display"></i></label>
									<input type="text" class="form-control RW_inp RW_marg" id="rw_cs_count_type2_MT_T" name="rw_cs_count_type2_MT_T" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_MT_T']; ?>">
								</div>
								<div class="col-md-6" style="margin-top:10px;margin-bottom:15px;">
									<label class="RW_Label">Tickness(%) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Tickness"></i></label>
									<div class="range-cs">
										<input class="range-cs__range" type="range" id="rw_cs_count_type2_M_Tickness" name="rw_cs_count_type2_M_Tickness" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_M_Tickness']; ?>" min="0" max="100">
										<span class="range-cs__value" id="rw_cs_count_type2_M_Tickness_Span"><?php echo $rw_cs_countdown['rw_cs_count_type2_M_Tickness']; ?></span>
									</div>
								</div>
								<div class="col-md-6">
									<label style="margin-top:10px;" class="RW_Label">Background Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Minut Background Color"></i></label>
									<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_count_type2_M_BgC" name="rw_cs_count_type2_M_BgC" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_M_BgC']; ?>">
								</div>
								<div class="col-md-6">
									<label style="margin-top:10px;" class="RW_Label">Timer Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Minut Timer Color"></i></label>
									<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_count_type2_M_FgC" name="rw_cs_count_type2_M_FgC" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_M_FgC']; ?>">
								</div>
								<div class="col-md-6" style="margin-top:15px;">
									<label class="RW_Label">LineCap Type :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="If you would like to display Countdown LineCap on coming soon page then you would need to choose butt or round"></i></label>
									<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_count_type2_M_LC" name="rw_cs_count_type2_M_LC" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_M_LC']; ?>" >
										<option value='butt'  <?php if($rw_cs_countdown['rw_cs_count_type2_M_LC']=='butt'){ echo 'selected';}?>>  Butt  </option>
										<option value='round' <?php if($rw_cs_countdown['rw_cs_count_type2_M_LC']=='round'){ echo 'selected';}?>> Round </option>
									</select>
								</div>
							</div>
							<div id="menu3_count2" class="tab-pane fade">
								<div class="col-md-6">
									<label style="margin-top:10px;" class="RW_Label">Number Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Second Number Color"></i></label>
									<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_count_type2_SC_C" name="rw_cs_count_type2_SC_C" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_SC_C']; ?>">
								</div>
								<div class="col-md-6">
									<label style="margin-top:10px;" class="RW_Label">Text Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Second Number Color"></i></label>
									<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_count_type2_ST_C" name="rw_cs_count_type2_ST_C" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_ST_C']; ?>">
								</div>
								<div class="col-md-6">
									<label style="margin-top:10px;" class="RW_Label">Text :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide content for Second Text which you would like to display"></i></label>
									<input type="text" class="form-control RW_inp RW_marg" id="rw_cs_count_type2_ST_T" name="rw_cs_count_type2_ST_T" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_ST_T']; ?>">
								</div>
								<div class="col-md-6" style="margin-top:10px;margin-bottom:15px;">
									<label class="RW_Label">Tickness(%) :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Tickness"></i></label>
									<div class="range-cs">
										<input class="range-cs__range" type="range" id="rw_cs_count_type2_S_Tickness" name="rw_cs_count_type2_S_Tickness" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_S_Tickness']; ?>" min="0" max="100">
										<span class="range-cs__value" id="rw_cs_count_type2_M_Tickness_Span"><?php echo $rw_cs_countdown['rw_cs_count_type2_S_Tickness']; ?></span>
									</div>
								</div>
								<div class="col-md-6">
									<label style="margin-top:10px;" class="RW_Label">Background Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Second Background Color"></i></label>
									<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_count_type2_S_BgC" name="rw_cs_count_type2_S_BgC" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_S_BgC']; ?>">
								</div>
								<div class="col-md-6">
									<label style="margin-top:10px;" class="RW_Label">Timer Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Second Timer Color"></i></label>
									<input type="text" class="form-control RW_inp RW_marg alpha-color-picker" id="rw_cs_count_type2_S_FgC" name="rw_cs_count_type2_S_FgC" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_S_FgC']; ?>">
								</div>
								<div class="col-md-6" style="margin-top:15px;">
									<label class="RW_Label">LineCap Type :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="If you would like to display Countdown LineCap on coming soon page then you would need to choose butt or round"></i></label>
									<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_count_type2_S_LC" name="rw_cs_count_type2_S_LC" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_S_LC']; ?>" >
										<option value='butt'  <?php if($rw_cs_countdown['rw_cs_count_type2_S_LC']=='butt'){ echo 'selected';}?>>  Butt  </option>
										<option value='round' <?php if($rw_cs_countdown['rw_cs_count_type2_S_LC']=='round'){ echo 'selected';}?>> Round </option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-lg-8">
				<label class="RW_Label">Animation :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="If you would like to show Countdown Animation then you would need to choose Yes from drop down"></i></label>
				<select class="form-control RW_F RW_inp RW_marg" id="rw_cs_count_anim" name="rw_cs_count_anim" value="<?php echo $rw_cs_countdown['rw_cs_count_anim']; ?>" onchange="Rich_CS_Count_Clicked()">
					<option value='Yes' <?php if($rw_cs_countdown['rw_cs_count_anim']=='Yes'){ echo 'selected';}?>> Yes </option>
					<option value='No'  <?php if($rw_cs_countdown['rw_cs_count_anim']=='No'){ echo 'selected';}?>>  No  </option>
				</select>
			</div>
			<div class="col-md-12" style="margin-top:15px;">
				<label class="RW_Label">Custom CSS :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to provide CSS code manually to add extra styling to the above mentioned fields"></i></label>
				<textarea type="text" class="form-control RW_marg" rows="5" id="rw_cs_count_Custom_CSS" name="rw_cs_count_Custom_CSS" ><?php echo $rw_cs_countdown['rw_cs_count_Custom_CSS']; ?>
				</textarea>
			</div>
		</div>
		<div class="RW_Line_Soperator"></div>
		<div style="text-align:right;">
			<input type="button" class="RW_CS_Button" onclick="RW_CS_CountDown()" value="Save Changes">
			<input type="button" class="RW_CS_Button_Res" data-toggle="modal" data-target="#myModal_Countdown" value="Reset Default Setting">
			<div class="modal fade" id="myModal_Countdown" role="dialog">
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
							<button type="button" onclick="RW_CS_Res_CountDown()" class="btn btn-primary" data-dismiss="modal">Yes</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<?php
	if(isset($_POST['action_count'])=="rw_csp_count")
	{
		$rw_cs_cout_show = sanitize_text_field($_POST['rw_cs_cout_show']); $rw_cs_count_datepicker = sanitize_text_field($_POST['rw_cs_count_datepicker']); $rw_cs_count_type = sanitize_text_field($_POST['rw_cs_count_type']); $rw_cs_count_type1_Count_FS = sanitize_text_field($_POST['rw_cs_count_type1_Count_FS']); $rw_cs_count_type1_Count_FF = sanitize_text_field($_POST['rw_cs_count_type1_Count_FF']); $rw_cs_count_type1_Count_TSh = sanitize_text_field($_POST['rw_cs_count_type1_Count_TSh']); $rw_cs_count_type1_text_FS = sanitize_text_field($_POST['rw_cs_count_type1_text_FS']); $rw_cs_count_type1_text_FF = sanitize_text_field($_POST['rw_cs_count_type1_text_FF']); $rw_cs_count_type1_text_TSh = sanitize_text_field($_POST['rw_cs_count_type1_text_TSh']); $rw_cs_count_type1_lines_C = sanitize_text_field($_POST['rw_cs_count_type1_lines_C']); $rw_cs_count_type1_FW = sanitize_text_field($_POST['rw_cs_count_type1_FW']); $rw_cs_count_type1_DC_C = sanitize_text_field($_POST['rw_cs_count_type1_DC_C']); $rw_cs_count_type1_DT_C = sanitize_text_field($_POST['rw_cs_count_type1_DT_C']); $rw_cs_count_type1_DT_BC = sanitize_text_field($_POST['rw_cs_count_type1_DT_BC']); $rw_cs_count_type1_DT_T = sanitize_text_field($_POST['rw_cs_count_type1_DT_T']); $rw_cs_count_type1_HC_C = sanitize_text_field($_POST['rw_cs_count_type1_HC_C']); $rw_cs_count_type1_HT_C = sanitize_text_field($_POST['rw_cs_count_type1_HT_C']); $rw_cs_count_type1_HT_BC = sanitize_text_field($_POST['rw_cs_count_type1_HT_BC']); $rw_cs_count_type1_HT_T = sanitize_text_field($_POST['rw_cs_count_type1_HT_T']); $rw_cs_count_type1_MC_C = sanitize_text_field($_POST['rw_cs_count_type1_MC_C']); $rw_cs_count_type1_MT_C = sanitize_text_field($_POST['rw_cs_count_type1_MT_C']); $rw_cs_count_type1_MT_BC = sanitize_text_field($_POST['rw_cs_count_type1_MT_BC']); $rw_cs_count_type1_MT_T = sanitize_text_field($_POST['rw_cs_count_type1_MT_T']); $rw_cs_count_type1_SC_C = sanitize_text_field($_POST['rw_cs_count_type1_SC_C']); $rw_cs_count_type1_ST_C = sanitize_text_field($_POST['rw_cs_count_type1_ST_C']); $rw_cs_count_type1_ST_BC = sanitize_text_field($_POST['rw_cs_count_type1_ST_BC']); $rw_cs_count_type1_ST_T = sanitize_text_field($_POST['rw_cs_count_type1_ST_T']); $rw_cs_count_type2_resp = sanitize_text_field($_POST['rw_cs_count_type2_resp']); $rw_cs_count_type2_Count_FF = sanitize_text_field($_POST['rw_cs_count_type2_Count_FF']); $rw_cs_count_type2_Count_TSh = sanitize_text_field($_POST['rw_cs_count_type2_Count_TSh']); $rw_cs_count_type2_text_FF = sanitize_text_field($_POST['rw_cs_count_type2_text_FF']); $rw_cs_count_type2_text_TSh = sanitize_text_field($_POST['rw_cs_count_type2_text_TSh']); $rw_cs_count_type2_FW = sanitize_text_field($_POST['rw_cs_count_type2_FW']); $rw_cs_count_type2_DC_C = sanitize_text_field($_POST['rw_cs_count_type2_DC_C']); $rw_cs_count_type2_DT_C = sanitize_text_field($_POST['rw_cs_count_type2_DT_C']); $rw_cs_count_type2_DT_T = sanitize_text_field($_POST['rw_cs_count_type2_DT_T']); $rw_cs_count_type2_D_Tickness = sanitize_text_field($_POST['rw_cs_count_type2_D_Tickness']); $rw_cs_count_type2_D_BgC = sanitize_text_field($_POST['rw_cs_count_type2_D_BgC']); $rw_cs_count_type2_D_FgC = sanitize_text_field($_POST['rw_cs_count_type2_D_FgC']); $rw_cs_count_type2_D_LC = sanitize_text_field($_POST['rw_cs_count_type2_D_LC']); $rw_cs_count_type2_HC_C = sanitize_text_field($_POST['rw_cs_count_type2_HC_C']); $rw_cs_count_type2_HT_C = sanitize_text_field($_POST['rw_cs_count_type2_HT_C']); $rw_cs_count_type2_HT_T = sanitize_text_field($_POST['rw_cs_count_type2_HT_T']); $rw_cs_count_type2_H_Tickness = sanitize_text_field($_POST['rw_cs_count_type2_H_Tickness']); $rw_cs_count_type2_H_BgC = sanitize_text_field($_POST['rw_cs_count_type2_H_BgC']); $rw_cs_count_type2_H_FgC = sanitize_text_field($_POST['rw_cs_count_type2_H_FgC']); $rw_cs_count_type2_H_LC = sanitize_text_field($_POST['rw_cs_count_type2_H_LC']); $rw_cs_count_type2_MC_C = sanitize_text_field($_POST['rw_cs_count_type2_MC_C']); $rw_cs_count_type2_MT_C = sanitize_text_field($_POST['rw_cs_count_type2_MT_C']); $rw_cs_count_type2_MT_T = sanitize_text_field($_POST['rw_cs_count_type2_MT_T']); $rw_cs_count_type2_M_Tickness = sanitize_text_field($_POST['rw_cs_count_type2_M_Tickness']); $rw_cs_count_type2_M_BgC = sanitize_text_field($_POST['rw_cs_count_type2_M_BgC']); $rw_cs_count_type2_M_FgC = sanitize_text_field($_POST['rw_cs_count_type2_M_FgC']); $rw_cs_count_type2_M_LC = sanitize_text_field($_POST['rw_cs_count_type2_M_LC']); $rw_cs_count_type2_SC_C = sanitize_text_field($_POST['rw_cs_count_type2_SC_C']); $rw_cs_count_type2_ST_C = sanitize_text_field($_POST['rw_cs_count_type2_ST_C']); $rw_cs_count_type2_ST_T = sanitize_text_field($_POST['rw_cs_count_type2_ST_T']); $rw_cs_count_type2_S_Tickness = sanitize_text_field($_POST['rw_cs_count_type2_S_Tickness']); $rw_cs_count_type2_S_BgC = sanitize_text_field($_POST['rw_cs_count_type2_S_BgC']); $rw_cs_count_type2_S_FgC = sanitize_text_field($_POST['rw_cs_count_type2_S_FgC']); $rw_cs_count_type2_S_LC = sanitize_text_field($_POST['rw_cs_count_type2_S_LC']); $rw_cs_count_anim = sanitize_text_field($_POST['rw_cs_count_anim']); $rw_cs_count_Custom_CSS = sanitize_text_field($_POST['rw_cs_count_Custom_CSS']);
		$rw_countdown = serialize( array('rw_cs_cout_show' => $rw_cs_cout_show, 'rw_cs_count_datepicker' => $rw_cs_count_datepicker, 'rw_cs_count_type' => $rw_cs_count_type, 'rw_cs_count_type1_Count_FS' => $rw_cs_count_type1_Count_FS, 'rw_cs_count_type1_Count_FF' => $rw_cs_count_type1_Count_FF, 'rw_cs_count_type1_Count_TSh' => $rw_cs_count_type1_Count_TSh, 'rw_cs_count_type1_text_FS' => $rw_cs_count_type1_text_FS, 'rw_cs_count_type1_text_FF' => $rw_cs_count_type1_text_FF, 'rw_cs_count_type1_text_TSh' => $rw_cs_count_type1_text_TSh, 'rw_cs_count_type1_lines_C' => $rw_cs_count_type1_lines_C, 'rw_cs_count_type1_FW' => $rw_cs_count_type1_FW, 'rw_cs_count_type1_DC_C' => $rw_cs_count_type1_DC_C, 'rw_cs_count_type1_DT_C' => $rw_cs_count_type1_DT_C, 'rw_cs_count_type1_DT_BC' => $rw_cs_count_type1_DT_BC, 'rw_cs_count_type1_DT_T' => $rw_cs_count_type1_DT_T, 'rw_cs_count_type1_HC_C' => $rw_cs_count_type1_HC_C, 'rw_cs_count_type1_HT_C' => $rw_cs_count_type1_HT_C, 'rw_cs_count_type1_HT_BC' => $rw_cs_count_type1_HT_BC, 'rw_cs_count_type1_HT_T' => $rw_cs_count_type1_HT_T, 'rw_cs_count_type1_MC_C' => $rw_cs_count_type1_MC_C, 'rw_cs_count_type1_MT_C' => $rw_cs_count_type1_MT_C, 'rw_cs_count_type1_MT_BC' => $rw_cs_count_type1_MT_BC, 'rw_cs_count_type1_MT_T' => $rw_cs_count_type1_MT_T, 'rw_cs_count_type1_SC_C' => $rw_cs_count_type1_SC_C, 'rw_cs_count_type1_ST_C' => $rw_cs_count_type1_ST_C, 'rw_cs_count_type1_ST_BC' => $rw_cs_count_type1_ST_BC, 'rw_cs_count_type1_ST_T' => $rw_cs_count_type1_ST_T, 'rw_cs_count_type2_resp' => $rw_cs_count_type2_resp, 'rw_cs_count_type2_Count_FF' => $rw_cs_count_type2_Count_FF, 'rw_cs_count_type2_Count_TSh' => $rw_cs_count_type2_Count_TSh, 'rw_cs_count_type2_text_FF' => $rw_cs_count_type2_text_FF, 'rw_cs_count_type2_text_TSh' => $rw_cs_count_type2_text_TSh, 'rw_cs_count_type2_FW' => $rw_cs_count_type2_FW, 'rw_cs_count_type2_DC_C' => $rw_cs_count_type2_DC_C, 'rw_cs_count_type2_DT_C' => $rw_cs_count_type2_DT_C, 'rw_cs_count_type2_DT_T' => $rw_cs_count_type2_DT_T, 'rw_cs_count_type2_D_Tickness' => $rw_cs_count_type2_D_Tickness, 'rw_cs_count_type2_D_BgC' => $rw_cs_count_type2_D_BgC, 'rw_cs_count_type2_D_FgC' => $rw_cs_count_type2_D_FgC, 'rw_cs_count_type2_D_LC' => $rw_cs_count_type2_D_LC, 'rw_cs_count_type2_HC_C' => $rw_cs_count_type2_HC_C, 'rw_cs_count_type2_HT_C' => $rw_cs_count_type2_HT_C, 'rw_cs_count_type2_HT_T' => $rw_cs_count_type2_HT_T, 'rw_cs_count_type2_H_Tickness' => $rw_cs_count_type2_H_Tickness, 'rw_cs_count_type2_H_BgC' => $rw_cs_count_type2_H_BgC, 'rw_cs_count_type2_H_FgC' => $rw_cs_count_type2_H_FgC, 'rw_cs_count_type2_H_LC' => $rw_cs_count_type2_H_LC, 'rw_cs_count_type2_MC_C' => $rw_cs_count_type2_MC_C, 'rw_cs_count_type2_MT_C' => $rw_cs_count_type2_MT_C, 'rw_cs_count_type2_MT_T' => $rw_cs_count_type2_MT_T, 'rw_cs_count_type2_M_Tickness' => $rw_cs_count_type2_M_Tickness, 'rw_cs_count_type2_M_BgC' => $rw_cs_count_type2_M_BgC, 'rw_cs_count_type2_M_FgC' => $rw_cs_count_type2_M_FgC, 'rw_cs_count_type2_M_LC' => $rw_cs_count_type2_M_LC, 'rw_cs_count_type2_SC_C' => $rw_cs_count_type2_SC_C, 'rw_cs_count_type2_ST_C' => $rw_cs_count_type2_ST_C, 'rw_cs_count_type2_ST_T' => $rw_cs_count_type2_ST_T, 'rw_cs_count_type2_S_Tickness' => $rw_cs_count_type2_S_Tickness, 'rw_cs_count_type2_S_BgC' => $rw_cs_count_type2_S_BgC, 'rw_cs_count_type2_S_FgC' => $rw_cs_count_type2_S_FgC, 'rw_cs_count_type2_S_LC' => $rw_cs_count_type2_S_LC, 'rw_cs_count_anim' => $rw_cs_count_anim, 'rw_cs_count_Custom_CSS' => $rw_cs_count_Custom_CSS, ));
		update_option('rw_cs_countdown', $rw_countdown);
	}
	if(isset($_POST['reset_action_count'])=="action_count_reset")
	{
		$rw_countdown = serialize( array( 'rw_cs_cout_show' => "show", 'rw_cs_count_datepicker' => "31/12/2017 23:59:59", 'rw_cs_count_type' => "Type 1", 'rw_cs_count_type1_Count_FS' => "80", 'rw_cs_count_type1_Count_FF' => "Abadi MT Condensed Light", 'rw_cs_count_type1_Count_TSh' => "1", 'rw_cs_count_type1_text_FS' => "20", 'rw_cs_count_type1_text_FF' => "Abadi MT Condensed Light", 'rw_cs_count_type1_text_TSh' => "1", 'rw_cs_count_type1_lines_C' => "#ffffff", 'rw_cs_count_type1_FW' => "900", 'rw_cs_count_type1_DC_C' => "#ffffff", 'rw_cs_count_type1_DT_C' => "#ffffff", 'rw_cs_count_type1_DT_BC' => "#ffffff", 'rw_cs_count_type1_DT_T' => "days", 'rw_cs_count_type1_HC_C' => "#ffffff", 'rw_cs_count_type1_HT_C' => "#ffffff", 'rw_cs_count_type1_HT_BC' => "#ffffff", 'rw_cs_count_type1_HT_T' => "hrs", 'rw_cs_count_type1_MC_C' => "#ffffff", 'rw_cs_count_type1_MT_C' => "#ffffff", 'rw_cs_count_type1_MT_BC' => "#ffffff", 'rw_cs_count_type1_MT_T' => "min", 'rw_cs_count_type1_SC_C' => "#ffffff", 'rw_cs_count_type1_ST_C' => "#ffffff", 'rw_cs_count_type1_ST_BC' => "#ffffff", 'rw_cs_count_type1_ST_T' => "sec", 'rw_cs_count_type2_resp' => "50", 'rw_cs_count_type2_Count_FF' => "Abadi MT Condensed Light", 'rw_cs_count_type2_Count_TSh' => "1", 'rw_cs_count_type2_text_FF' => "Abadi MT Condensed Light", 'rw_cs_count_type2_text_TSh' => "1", 'rw_cs_count_type2_FW' => "300", 'rw_cs_count_type2_DC_C' => "#ffffff", 'rw_cs_count_type2_DT_C' => "#ffffff", 'rw_cs_count_type2_DT_T' => "days", 'rw_cs_count_type2_D_Tickness' => "3", 'rw_cs_count_type2_D_BgC' => "rgba(255,255,255,0.05)", 'rw_cs_count_type2_D_FgC' => "#ffffff", 'rw_cs_count_type2_D_LC' => "butt", 'rw_cs_count_type2_HC_C' => "#ffffff", 'rw_cs_count_type2_HT_C' => "#ffffff", 'rw_cs_count_type2_HT_T' => "hrs", 'rw_cs_count_type2_H_Tickness' => "3", 'rw_cs_count_type2_H_BgC' => "rgba(255,255,255,0.05)", 'rw_cs_count_type2_H_FgC' => "#ffffff", 'rw_cs_count_type2_H_LC' => "butt", 'rw_cs_count_type2_MC_C' => "#ffffff", 'rw_cs_count_type2_MT_C' => "#ffffff", 'rw_cs_count_type2_MT_T' => "min", 'rw_cs_count_type2_M_Tickness' => "3", 'rw_cs_count_type2_M_BgC' => "rgba(255,255,255,0.05)", 'rw_cs_count_type2_M_FgC' => "#ffffff", 'rw_cs_count_type2_M_LC' => "butt", 'rw_cs_count_type2_SC_C' => "#ffffff", 'rw_cs_count_type2_ST_C' => "#ffffff", 'rw_cs_count_type2_ST_T' => "sec", 'rw_cs_count_type2_S_Tickness' => "3", 'rw_cs_count_type2_S_BgC' => "rgba(255,255,255,0.05)", 'rw_cs_count_type2_S_FgC' => "#ffffff", 'rw_cs_count_type2_S_LC' => "butt", 'rw_cs_count_anim' => "No", 'rw_cs_count_Custom_CSS' => "", ));
		update_option('rw_cs_countdown', $rw_countdown);
	}
?>