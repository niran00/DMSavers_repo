<?php
	if ( ! defined( 'ABSPATH' ) ) exit;
	wp_enqueue_media();
	wp_enqueue_script( 'custom-header' );
	add_filter( 'upload_size_limit', 'PBP_increase_upload' );
	function PBP_increase_upload( )
	{
		return 100048576;
	}
	$rw_cs_mode = unserialize(get_option('rw_cs_mode'));
?>
<div class='container-fluid'>
	<?php require_once('Rich_Web_Header.php'); ?>
	<div class="panel-group RW_Pl_Mode_Panel_Group">
		<div class="panel panel-info">
			<div class="panel-heading RW_Pan_Heading">
				Plugin Mode & Theme Type
			</div>
			<div class="panel-body">
				<form>
					<div class="form-group" style="width:100%;margin-bottom:0px">
						<div class="row">
							<div class="col-md-6">
								<label class="RW_Label">Default Mode :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="If you would like to display Coming Soon Page on your website then you would need to choose Coming Soon Mode from drop down or vice versa"></i></label>
								<select class="form-control RW_F RW_inp" id="rw_cs_plugin_mode" name="rw_cs_plugin_mode" value="<?php echo $rw_cs_mode['rw_cs_plugin_mode']; ?>">
									<option value='1' <?php if($rw_cs_mode['rw_cs_plugin_mode']=='1'){ echo 'selected';}?>> Coming Soon Mode </option>
									<option value='2' <?php if($rw_cs_mode['rw_cs_plugin_mode']=='2'){ echo 'selected';}?>> Live Website     </option>
								</select>
							</div>
							<div class="col-md-6">
								<label class="RW_Label">Default Theme Type :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title=""></i></label>
								<select class="form-control RW_F RW_inp" id="rw_cs_theme_type" name="rw_cs_theme_type" value="<?php echo $rw_cs_mode['rw_cs_theme_type']; ?>">
									<option value='1' <?php if($rw_cs_mode['rw_cs_theme_type']=='1'){ echo 'selected';}?>> Theme 1 </option>
								</select>
							</div>
						</div>
						<div class="RW_Line_Soperator"></div>
						<div style="text-align:right;">
							<input type="button" class="RW_CS_Button" onclick="RW_CS_Plugine_Mode()" value="Save Changes">
							<input type="button" class="RW_CS_Button_Res" data-toggle="modal" data-target="#myModal_PL_Mode" value="Reset Default Setting">
							<div class="modal fade" id="myModal_PL_Mode" role="dialog">
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
											<button type="button" onclick="RW_CS_Res_Plugine_Mode()" class="btn btn-primary" data-dismiss="modal">Yes</button>
											<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="panel-group" id="accordion">
		<div class="panel panel-default">
			<div class="panel-heading RW_Panel_Heading" >
				<i class="rw_ic_collaps rw_ic_collaps_Layout rich_web rich_web-chevron-circle-right"></i>
				<h4 class="panel-title">
					<a class="RW_collapsed RW_collapsed_Layout" data-toggle="collapse" data-parent="#accordion" href="#collapse1" onclick="RW_IC_Colapse_Func('Layout')">Layout Settings</a>
				</h4>
			</div>
			<div id="collapse1" class="panel-collapse collapse">
				<div class="panel-body">
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#home">SEO</a></li>
						<li><a data-toggle="tab" href="#menu1">Fav Icon</a></li>
						<li><a data-toggle="tab" href="#menu2">Loader</a></li>
						<li><a data-toggle="tab" href="#menu3">Logo</a></li>
						<li><a data-toggle="tab" href="#menu4">Heading</a></li>
						<li><a data-toggle="tab" href="#menu5">Description</a></li>
						<li><a data-toggle="tab" href="#menu6">Footer</a></li>
					</ul>
					<div class="tab-content">
						<div id="home" class="tab-pane fade in active">
							<?php require_once('Rich_Web_SEO.php'); ?>
						</div>
						<div id="menu1" class="tab-pane fade">
							<?php require_once('Rich_Web_FIc.php'); ?>
						</div>
						<div id="menu2" class="tab-pane fade">
							<?php require_once('Rich_Web_Loader.php'); ?>
						</div>
						<div id="menu3" class="tab-pane fade">
							<?php require_once('Rich_Web_Logo.php'); ?>
						</div>
						<div id="menu4" class="tab-pane fade">
							<?php require_once('Rich_Web_Heading.php'); ?>
						</div>
						<div id="menu5" class="tab-pane fade">
							<?php require_once('Rich_Web_Description.php'); ?>
						</div>
						<div id="menu6" class="tab-pane fade">
							<?php require_once('Rich_Web_Footer.php'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading RW_Panel_Heading">
				<i class="rw_ic_collaps rw_ic_collaps_Countdown rich_web rich_web-chevron-circle-right"></i>
				<h4 class="panel-title">
					<a class="RW_collapsed RW_collapsed_Countdown" data-toggle="collapse" data-parent="#accordion" href="#collapse2" onclick="RW_IC_Colapse_Func('Countdown')">Countdown Settings</a>
				</h4>
			</div>
			<div id="collapse2" class="panel-collapse collapse">
				<div class="panel-body">
					<?php require_once('Rich_Web_Countdown.php'); ?>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading RW_Panel_Heading">
				<i class="rw_ic_collaps rw_ic_collaps_Background rich_web rich_web-chevron-circle-right"></i>
				<h4 class="panel-title">
					<a class="RW_collapsed RW_collapsed_Background" data-toggle="collapse" data-parent="#accordion" href="#collapse3" onclick="RW_IC_Colapse_Func('Background')">Background Settings</a>
				</h4>
			</div>
			<div id="collapse3" class="panel-collapse collapse">
				<div class="panel-body">
					<?php require_once('Rich_Web_Background.php'); ?>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading RW_Panel_Heading">
				<i class="rw_ic_collaps rw_ic_collaps_Button rich_web rich_web-chevron-circle-right"></i>
				<h4 class="panel-title">
					<a class="RW_collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse4" onclick="RW_IC_Colapse_Func('Button')">More Information & Form's Buttons & Popup Settings</a>
				</h4>
			</div>
			<div id="collapse4" class="panel-collapse collapse">
				<div class="panel-body">
					<?php require_once('Rich_Web_Buttons.php'); ?>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading RW_Panel_Heading">
				<i class="rw_ic_collaps rw_ic_collaps_Information rich_web rich_web-chevron-circle-right"></i>
				<h4 class="panel-title">
					<a class="RW_collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse5" onclick="RW_IC_Colapse_Func('Information')">More Information</a>
				</h4>
			</div>
			<div id="collapse5" class="panel-collapse collapse">
				<div class="panel-body">
					<?php require_once('Rich_Web_Info.php'); ?>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading RW_Panel_Heading">
				<i class="rw_ic_collaps rw_ic_collaps_Social rich_web rich_web-chevron-circle-right"></i>
				<h4 class="panel-title">
					<a class="RW_collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse6" onclick="RW_IC_Colapse_Func('Social')">Social Buttons</a>
				</h4>
			</div>
			<div id="collapse6" class="panel-collapse collapse">
				<div class="panel-body">
					<?php require_once('Rich_Web_Social.php'); ?>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading RW_Panel_Heading">
				<i class="rw_ic_collaps rw_ic_collaps_Content rich_web rich_web-chevron-circle-right"></i>
				<h4 class="panel-title">
					<a class="RW_collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse7" onclick="RW_IC_Colapse_Func('Content')">Content</a>
				</h4>
			</div>
			<div id="collapse7" class="panel-collapse collapse">
				<div class="panel-body">
					<?php require_once('Rich_Web_Content.php'); ?>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading RW_Panel_Heading">
				<i class="rw_ic_collaps rw_ic_collaps_Forms rich_web rich_web-chevron-circle-right"></i>
				<h4 class="panel-title">
					<a class="RW_collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse8" onclick="RW_IC_Colapse_Func('Forms')">Forms</a>
				</h4>
			</div>
			<div id="collapse8" class="panel-collapse collapse">
				<div class="panel-body">
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#home_forms">Forms Manager</a></li>
						<li><a data-toggle="tab" href="#menu_forms1">General Options</a></li>
						<li><a data-toggle="tab" href="#menu_forms2">Forms Themes</a></li>
						<li><a data-toggle="tab" href="#menu_forms3">Messages Manager</a></li>
						<li><a data-toggle="tab" href="#menu_forms4">Submissions <span style="color: red;">(Pro)</span> </a></li>
					</ul>
					<div class="tab-content">
						<div id="home_forms" class="tab-pane fade in active">
							<?php require_once('Rich_Web_Forms_Manager.php'); ?>
						</div>
						<div id="menu_forms1" class="tab-pane fade">
							<?php require_once('Rich_Web_Forms_General_Options.php'); ?>
						</div>
						<div id="menu_forms2" class="tab-pane fade">
							<?php require_once('Rich_Web_Forms_Themes.php'); ?>
						</div>
						<div id="menu_forms3" class="tab-pane fade">
							<?php require_once('Rich_Web_Forms_Messages_Manager.php'); ?>
						</div>
						<div id="menu_forms4" class="tab-pane fade">
							<?php require_once('Rich_Web_Forms_Submissions.php'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading RW_Panel_Heading">
				<i class="rw_ic_collaps rw_ic_collaps_Ordering rich_web rich_web-chevron-circle-right"></i>
				<h4 class="panel-title">
					<a class="RW_collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse9" onclick="RW_IC_Colapse_Func('Ordering')">Contents Ordering</a>
				</h4>
			</div>
			<div id="collapse9" class="panel-collapse collapse">
				<div class="panel-body">
					<?php require_once('Rich_Web_Ordering.php'); ?>
				</div>
			</div>
		</div>
	</div> 
</div>
<div class="RW_Ubdate_Info">
	<strong>Success!</strong><br />Settings have been updated Successfully.
</div>
<div class="RW_Reseted_Info">
	<strong>Success!</strong><br />Settings have been reseted default settings Successfully.
</div>
<div id="RW_Load_Content_Admin">
	<div class="RW_Loader_Frame">
		<div class="loader1" id="loader1"></div>
		<div class="loader2" id="loader2"></div>
		<div class="loader4" id="loader4"></div>
	</div>
</div>
<?php
	if(isset($_POST['action_seo'])=="rw_csp_mode")
	{
		$rw_cs_plugin_mode = sanitize_text_field($_POST['rw_cs_plugin_mode']); $rw_cs_theme_type = sanitize_text_field($_POST['rw_cs_theme_type']);
		$rw_mode_theme = serialize( array( 'rw_cs_plugin_mode' => $rw_cs_plugin_mode, 'rw_cs_theme_type' => $rw_cs_theme_type, ));
		update_option('rw_cs_mode', $rw_mode_theme);
	} 
	if(isset($_POST['reset_action_pl_mode'])=="action_pl_mode_reset")
	{
		$rw_mode_theme = serialize( array( 'rw_cs_plugin_mode' => "2", 'rw_cs_theme_type' => "1", ));
		update_option('rw_cs_mode', $rw_mode_theme);
	}
?>