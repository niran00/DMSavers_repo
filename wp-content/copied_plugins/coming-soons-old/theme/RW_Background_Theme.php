<style>
	#video-placeholder
	{
		position:fixed;
		min-width:101%;
		min-height:100%;
		z-index:-999;
		background-position: top center;
		background-repeat: no-repeat;
		top:50%;
		left:50%;
		transform:translateY(-50%) translateX(-50%);
		-webkit-transform:translateY(-50%) translateX(-50%);
		-ms-transform:translateY(-50%) translateX(-50%);
		-moz-transform:translateY(-50%) translateX(-50%);
		-o-transform:translateY(-50%) translateX(-50%);
		overflow: hidden;
	}
	.RW_BgV_Icons
	{
		cursor:pointer;
		display:inline-block;
		color:<?php echo $rw_cs_background['rw_cs_bg_image_video_PlC_C']; ?>;
		background:<?php echo $rw_cs_background['rw_cs_bg_image_video_PlC_BgC']; ?>;
		padding:15px;
		min-width:10px;
		border-radius:<?php echo $rw_cs_background['rw_cs_bg_image_video_PlC_BR']; ?>px;
		box-shadow:0px 0px <?php echo $rw_cs_background['rw_cs_bg_image_video_PlC_BSh']; ?>px <?php echo $rw_cs_background['rw_cs_bg_image_video_PlC_ShC']; ?>;
		transition:all 0.3s linear;
		-webkit-transition:all 0.3s linear;
		-ms-transition:all 0.3s linear;
		-moz-transition:all 0.3s linear;
		-o-transition:all 0.3s linear;
	}
	.RW_BgV_Icons:hover
	{
		background:<?php echo $rw_cs_background['rw_cs_bg_image_video_PlC_HBgC']; ?>;
		color:<?php echo $rw_cs_background['rw_cs_bg_image_video_PlC_HC']; ?>;
	}
	.RW_BgVSl_Icons
	{
		cursor:pointer;
		display:inline-block;
		color:<?php echo $rw_cs_background['rw_cs_bg_image_vsl_PlC_C']; ?>;
		background:<?php echo $rw_cs_background['rw_cs_bg_image_vsl_PlC_BgC']; ?>;
		padding:15px;
		min-width:10px;
		border-radius:<?php echo $rw_cs_background['rw_cs_bg_image_vsl_PlC_BR']; ?>px;
		box-shadow:0px 0px <?php echo $rw_cs_background['rw_cs_bg_image_vsl_PlC_BSh']; ?>px <?php echo $rw_cs_background['rw_cs_bg_image_vsl_PlC_ShC']; ?>;
		transition:all 0.3s linear;
		-webkit-transition:all 0.3s linear;
		-ms-transition:all 0.3s linear;
		-moz-transition:all 0.3s linear;
		-o-transition:all 0.3s linear;
	}
	.RW_BgVSl_Icons:hover
	{
		background:<?php echo $rw_cs_background['rw_cs_bg_image_vsl_PlC_HBgC']; ?>;
		color:<?php echo $rw_cs_background['rw_cs_bg_image_vsl_PlC_HC']; ?>;
	}
	.RW_BgV_Option
	{
		position:fixed;
		display:inline-block;
		padding:15px;
		right:10px;
		bottom:10px;
		z-index:9999999;
	}
	#bsa_closeAd { display:none !important; }
	.RW_CS_BgC
	{
		position:fixed;
		top:0px;
		bottom:0px;
		left:0px;
		height:100%;
		width:100%;
		z-index:-10;
		background:<?php echo $rw_cs_background['rw_cs_bg_color']; ?>;
	}
	.RW_CS_BgImgg{
		background-size:cover;
		background-position:center center;
		position:fixed;
		top:0px;
		left:0px;
		bottom:0px;
		height:100%;
		width:100%;
		z-index:-10;
	}
	.RW_CS_BgImgg { background-image:url('<?php echo $rw_cs_background['rw_cs_bg_image']; ?>'); }
	<?php for($i=0;$i<count($img_sl_array);$i++){ ?>
		<?php if($img_sl_array[0] != ''){ ?>
			.RW_CS_BgImg_<?php echo $i+1;?>{
				background-image:url('<?php echo $img_sl_array[$i]; ?>');
			}
		<?php } ?>
	<?php } ?>
	#RW_CS_BgImg_SlBar
	{
		position:fixed;
		top:0px;
		left:0px;
		width:100%;
		height:<?php echo $rw_cs_background['rw_cs_bg_image_slideshow_bar_height']; ?>px;
		background-color:<?php echo $rw_cs_background['rw_cs_bg_image_slideshow_bar_BgC']; ?>;
		z-index:999;
	}
	#RW_CS_BgImg_SlBar_Anim
	{
		position:relative;
		width:0%;
		height:100%;
		background-color:<?php echo $rw_cs_background['rw_cs_bg_image_slideshow_bar_FgC']; ?>;
		perspective:800px;
		transition:all 0s linear;
		-webkit-transition:all 0s linear;
		-ms-transition:all 0s linear;
		-moz-transition:all 0s linear;
		-o-transition:all 0s linear;
	}
	#constellationel { z-index:99 !important; }
	#fpsText,#fpsGraph,#fps { display:none !important; }
	@media screen and (max-width:700px)
	{
		.RW_BgV_Option { display:none !important; }
	}
	<?php echo $rw_cs_background['rw_cs_bg_Custom_CSS']; ?>
</style>
<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('../backend/css/richwebicons.css',__FILE__);?>">
<?php if($rw_cs_background['rw_cs_bg_anim']=='Show') { ?>
	<?php if($rw_cs_background['rw_cs_bg_anim_type']=='Particle') { ?>
		<div id="particles-js"></div>
	<?php }else if($rw_cs_background['rw_cs_bg_anim_type']=='Bubble') { ?>
		<canvas id="bubble"></canvas>
	<?php }else if($rw_cs_background['rw_cs_bg_anim_type']=='Constellationel') { ?>
		<canvas id="constellationel"></canvas>
	<?php }else if($rw_cs_background['rw_cs_bg_anim_type']=='Snowland') { ?>
		<canvas id="snowland" > </canvas>
	<?php }else if($rw_cs_background['rw_cs_bg_anim_type']=='Hover') { ?>
		<div id="large-header" class="large-header">
		  <canvas id="demo-canvas"></canvas>  
		</div>
	<?php } ?>
<?php } ?>
<?php if($rw_cs_background['rw_cs_bg_type']=='Color') { ?>
	<div class="RW_CS_BgC"></div>
<?php }else if($rw_cs_background['rw_cs_bg_type']=='Image'){ ?>
	<div class="RW_CS_BgImgg"></div>
<?php }else if($rw_cs_background['rw_cs_bg_type']=='Image Slideshow'){ ?>
	<?php for($i=0;$i<count($img_sl_array);$i++){ ?>
		<?php if($img_sl_array[0] != ''){ ?>
			<div class="RW_CS_BgImg RW_CS_BgImg_<?php echo $i+1; ?>"></div>
		<?php } ?>
	<?php } ?>
	<?php if($rw_cs_background['rw_cs_bg_image_slideshow_bar']=='Show') { ?>
		<div id="RW_CS_BgImg_SlBar">
			<div id="RW_CS_BgImg_SlBar_Anim"></div>
		</div>
	<?php }else{ ?>
		<div id="RW_CS_BgImg_SlBar" style="display:none;">
			<div id="RW_CS_BgImg_SlBar_Anim"></div>
		</div>
	<?php } ?>
	<input type="text" style="display:none;" class="rw_cs_bg_image_slideshow_dur" value="<?php echo $rw_cs_background['rw_cs_bg_image_slideshow_dur']; ?>">
<?php }else if($rw_cs_background['rw_cs_bg_type']=='Video'){ ?>
	<div id="video-placeholder"></div>
	<?php if($rw_cs_background['rw_cs_bg_image_video_PlC']=='true') { ?>
		<div class="RW_BgV_Option">
			<i class="RW_BgV_Icons RW_play rich_web rich_web-play" style="display:none;"></i>
			<i class="RW_BgV_Icons RW_pause rich_web rich_web-pause" ></i>
			<i class="RW_BgV_Icons RW_mute-toggle rich_web rich_web-volume-down"></i>
		</div>
	<?php }else{ ?>
		<div class="RW_BgV_Option" style="display:none;">
			<i class="RW_BgV_Icons RW_play rich_web rich_web-play" style="display:none;"></i>
			<i class="RW_BgV_Icons RW_pause rich_web rich_web-pause" ></i>
			<i class="RW_BgV_Icons RW_mute-toggle rich_web rich_web-volume-down"></i>
		</div>
	<?php } ?>
	<input type="text" style="display:none;" class="rw_cs_bg_image_video_sound" value="<?php echo $rw_cs_background['rw_cs_bg_image_video_sound']; ?>">
	<input type="text" style="display:none;" class="rw_cs_bg_image_video_quality" value="<?php echo $rw_cs_background['rw_cs_bg_image_video_quality']; ?>">
	<input type="text" style="display:none;" class="rw_cs_bg_image_video" value="<?php echo $rw_cs_background['rw_cs_bg_image_video']; ?>">
<?php }else if($rw_cs_background['rw_cs_bg_type']=='Video Slieshow'){ ?>
	<div id="video-placeholder"></div>
	<?php if($rw_cs_background['rw_cs_bg_image_vsl_PlC']=='true') { ?>
		<div class="RW_BgV_Option">
			<?php if(count($img_slv_array)>1){ ?>
				<i class="RW_BgVSl_Icons RW_prev rich_web rich_web-backward" aria-hidden="true"></i>
			<?php } ?>
			<i class="RW_BgVSl_Icons RW_play rich_web rich_web-play" style="display:none;"></i>
			<i class="RW_BgVSl_Icons RW_pause rich_web rich_web-pause" ></i>
			<?php if(count($img_slv_array)>1){ ?>
				<i class="RW_BgVSl_Icons RW_next rich_web rich_web-forward" aria-hidden="true"></i>
			<?php } ?>
			<i class="RW_BgVSl_Icons RW_mute-toggle rich_web rich_web-volume-down"></i>
		</div>
	<?php }else{ ?>
		<div class="RW_BgV_Option" style="display:none;">
			<?php if(count($img_slv_array)>1){ ?>
				<i class="RW_BgVSl_Icons RW_prev rich_web rich_web-backward" aria-hidden="true"></i>
			<?php } ?>
			<i class="RW_BgVSl_Icons RW_play rich_web rich_web-play" style="display:none;"></i>
			<i class="RW_BgVSl_Icons RW_pause rich_web rich_web-pause" ></i>
			<?php if(count($img_slv_array)>1){ ?>
				<i class="RW_BgVSl_Icons RW_next rich_web rich_web-forward" aria-hidden="true"></i>
			<?php } ?>
			<i class="RW_BgVSl_Icons RW_mute-toggle rich_web rich_web-volume-down"></i>
		</div>
	<?php } ?>
	<input type="text" style="display:none;" class="rw_cs_bg_image_vsl_sound" value="<?php echo $rw_cs_background['rw_cs_bg_image_vsl_sound']; ?>">
	<input type="text" style="display:none;" class="rw_cs_bg_image_vsl_quality" value="<?php echo $rw_cs_background['rw_cs_bg_image_vsl_quality']; ?>">
	<input type="text" style="display:none;" class="rw_cs_bg_image_video_slideshow" value="<?php echo $rw_cs_background['rw_cs_bg_image_video_slideshow']; ?>">
<?php } ?>
<?php if($rw_cs_background['rw_cs_bg_anim']=='Show') { ?>
	<?php if($rw_cs_background['rw_cs_bg_anim_type']=='Particle') { ?>
		<script src="<?php echo plugins_url('/js/particles.js',__FILE__);?>"></script>
		<script src="<?php echo plugins_url('/js/app.js',__FILE__);?>"></script>
	<?php }else if($rw_cs_background['rw_cs_bg_anim_type']=='Bubble') { ?>
		<script src="<?php echo plugins_url('/js/bubble.js',__FILE__);?>"></script>
	<?php }else if($rw_cs_background['rw_cs_bg_anim_type']=='Constellationel') { ?>
		<script src="<?php echo plugins_url('/js/constellation.js',__FILE__);?>"></script>
		<script src="<?php echo plugins_url('/js/constallationLib.js',__FILE__);?>"></script>
		<script src="<?php echo plugins_url('/js/constallationStats.js',__FILE__);?>"></script>
		<script src="<?php echo plugins_url('/js/Constindex.js',__FILE__);?>"></script>
	<?php }else if($rw_cs_background['rw_cs_bg_anim_type']=='Snowland') { ?>
		<script src="<?php echo plugins_url('/js/plugins.js',__FILE__);?>"></script> 
		<script src="<?php echo plugins_url('/js/main.js',__FILE__);?>"></script>
	<?php }else if($rw_cs_background['rw_cs_bg_anim_type']=='Hover') { ?>
	<script src="<?php echo plugins_url('/js/hover.js',__FILE__);?>"></script>
	<?php } ?>
<?php } ?>
<?php if($rw_cs_background['rw_cs_bg_type']=='Video'){ ?>
<script src="<?php echo plugins_url('/js/youtube.js',__FILE__);?>"></script>
<script src="<?php echo plugins_url('/js/script.js',__FILE__);?>"></script> 
<?php }else if($rw_cs_background['rw_cs_bg_type']=='Video Slieshow'){ ?>
<script src="<?php echo plugins_url('/js/youtube.js',__FILE__);?>"></script>
<script src="<?php echo plugins_url('/js/scriptvsl.js',__FILE__);?>"></script> 
<?php } ?>
<?php if($rw_cs_background['rw_cs_bg_type']=='Image Slideshow'){ ?>
	<script type="text/javascript">
		jQuery(document).ready(function(){
			var rw_cs_bg_image_slideshow_dur = parseInt(jQuery(".rw_cs_bg_image_slideshow_dur").val())
			var array = new Array();
			for(i=1;i<=<?php echo count($img_sl_array); ?>;i++){
				array.push("RW_CS_BgImg_"+i+"");
			}
			for(i=2;i<=<?php echo count($img_sl_array); ?>;i++){
				jQuery(".RW_CS_BgImg_"+i).css("opacity","0")
			}
			var x=0;
			function SShowAnim(){
				x++;
				jQuery("#RW_CS_BgImg_SlBar_Anim").animate({"width":"100%"},rw_cs_bg_image_slideshow_dur,function(){
					jQuery(".RW_CS_BgImg_"+x).animate({"opacity":"0"},2000);
					if(x==<?php echo count($img_sl_array); ?>){
						x=0
					}
					jQuery(".RW_CS_BgImg_"+(x+1)).animate({"opacity":"1"},1000);
				});
			}
			SShowAnim()
			setInterval(function(){
				jQuery("#RW_CS_BgImg_SlBar_Anim").css("width","0%");
				SShowAnim();
			},(rw_cs_bg_image_slideshow_dur+2000))
			
		})
	</script>
<?php } ?>
<script>
	jQuery(document).ready(function(){
		function resp(){
			var x=jQuery(window).width()*0.5625-jQuery(window).height();
			var y=jQuery(window).height()/0.5625-jQuery(window).width();
			console.log(x);
			if(x>=0){
				jQuery('#video-placeholder').css('width',jQuery(window).width());
				jQuery('#video-placeholder').css('height',jQuery(window).height()+x);
			}else{
				jQuery('#video-placeholder').css('width',jQuery(window).width()+y);
				jQuery('#video-placeholder').css('height',jQuery(window).height());
			}
		}
		resp();
		jQuery(window).resize(function(){ resp(); })
		jQuery("#RW_CS_Content").css("min-height",jQuery(window).height());
	})
</script>