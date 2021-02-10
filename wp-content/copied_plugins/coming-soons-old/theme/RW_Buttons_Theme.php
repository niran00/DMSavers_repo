<style>
	.rw_inp
	{
		margin:5px;
		padding:8px;
		cursor:pointer;
		outline:none !important;
	}
	.moreInfo
	{
		background-color:<?php echo $rw_cs_button['rw_cs_MIB_text_BgC']; ?> !important;
		color:<?php echo $rw_cs_button['rw_cs_MIB_text_C']; ?> !important;
		font-size:<?php echo $rw_cs_button['rw_cs_MIB_text_FS']; ?>px !important;
		font-family:<?php echo $rw_cs_button['rw_cs_MIB_text_FF']; ?> !important;
		border:<?php echo $rw_cs_button['rw_cs_MIB_BW']; ?>px solid <?php echo $rw_cs_button['rw_cs_MIB_BC']; ?>;
		border-radius:<?php echo $rw_cs_button['rw_cs_MIB_BR']; ?>px !important;
		box-shadow:0px 0px <?php echo $rw_cs_button['rw_cs_MIB_BSh']; ?>px <?php echo $rw_cs_button['rw_cs_MIB_BShC']; ?> !important;
		transition:all 0.2s linear !important;
		-webkit-transition:all 0.2s linear !important;
		-ms-transition:all 0.2s linear !important;
		-moz-transition:all 0.2s linear !important;
		-o-transition:all 0.2s linear !important;
	}
	.moreInfo:hover
	{
		background:<?php echo $rw_cs_button['rw_cs_MIB_text_HBgC']; ?> !important;
		color:<?php echo $rw_cs_button['rw_cs_MIB_text_HC']; ?> !important;
		border-color:<?php echo $rw_cs_button['rw_cs_MIB_HBC']; ?> !important;
	}
	.notify
	{
		background-color:<?php echo $rw_cs_button['rw_cs_FB_text_BgC']; ?> !important;
		color:<?php echo $rw_cs_button['rw_cs_FB_text_C']; ?> !important;
		font-size:<?php echo $rw_cs_button['rw_cs_FB_text_FS']; ?>px !important;
		font-family:<?php echo $rw_cs_button['rw_cs_FB_text_FF']; ?> !important;
		border:<?php echo $rw_cs_button['rw_cs_FB_BW']; ?>px solid <?php echo $rw_cs_button['rw_cs_FB_BC']; ?>;
		border-radius:<?php echo $rw_cs_button['rw_cs_FB_BR']; ?>px !important;
		box-shadow:0px 0px <?php echo $rw_cs_button['rw_cs_FB_BSh']; ?>px <?php echo $rw_cs_button['rw_cs_FB_BShC']; ?> !important;
		transition:all 0.2s linear !important;
		-webkit-transition:all 0.2s linear !important;
		-ms-transition:all 0.2s linear !important;
		-moz-transition:all 0.2s linear !important;
		-o-transition:all 0.2s linear !important;
	}
	.notify:hover
	{
		background:<?php echo $rw_cs_button['rw_cs_FB_text_HBgC']; ?> !important;
		color:<?php echo $rw_cs_button['rw_cs_FB_text_HC']; ?> !important;
		border-color:<?php echo $rw_cs_button['rw_cs_FB_HBC']; ?> !important;
	}
	.moreInfo
	{
		transform:translateX(-100%) !important;
		-webkit-transform:translateX(-100%) !important;
		-ms-transform:translateX(-100%) !important;
		-moz-transform:translateX(-100%) !important;
		-o-transform:translateX(-100%) !important;
		opacity:0 !important;
	}
	.moreInfoAnim
	{
		transform:translateX(0%) !important;
		-webkit-transform:translateX(0%) !important;
		-ms-transform:translateX(0%) !important;
		-moz-transform:translateX(0%) !important;
		-o-transform:translateX(0%) !important;
		opacity:1 !important;
		transition:all 0.4s linear !important;
		-webkit-transition:all 0.4s linear !important;
		-ms-transition:all 0.4s linear !important;
		-moz-transition:all 0.4s linear !important;
		-o-transition:all 0.4s linear !important;
	}
	.notify
	{
		transform:translateX(100%);
		-webkit-transform:translateX(100%);
		-ms-transform:translateX(100%);
		-moz-transform:translateX(100%);
		-o-transform:translateX(100%);
		opacity:0;
	}
	.notifyAnim
	{
		transform:translateX(0%) !important;
		-webkit-transform:translateX(0%) !important;
		-ms-transform:translateX(0%) !important;
		-moz-transform:translateX(0%) !important;
		-o-transform:translateX(0%) !important;
		opacity:1 !important;
		transition:all 0.4s linear !important;
		-webkit-transition:all 0.4s linear !important;
		-ms-transition:all 0.4s linear !important;
		-moz-transition:all 0.4s linear !important;
		-o-transition:all 0.4s linear !important;
	}
	.RW_Popup_Overlay
	{
		position:absolute;
		overflow:auto;
		opacity:0;
		top:0px;
		left:0px;
		width:100%;
		height:100%;
		background:<?php echo $rw_cs_button['rw_cs_MIB_Pop_Ov_BgC']; ?> !important;
		z-index:0;
	}
	.RW_Popup_OverlayN
	{
		position:absolute;
		overflow:auto;
		opacity:0;
		top:0px;
		left:0px;
		width:100%;
		height:100%;
		background:<?php echo $rw_cs_button['rw_cs_FB_Pop_Ov_BgC']; ?> !important;
		z-index:0;
	}
	.RW_Popup_OverlayAnim
	{
		opacity:1 !important;
		z-index:9999!important;
		transition:all 0.3s cubic-bezier(0, 0, 0.58, 1);
		-webkit-transition:all 0.3s cubic-bezier(0, 0, 0.58, 1);
		-ms-transition:all 0.3s cubic-bezier(0, 0, 0.58, 1);
		-moz-transition:all 0.3s cubic-bezier(0, 0, 0.58, 1);
		-o-transition:all 0.3s cubic-bezier(0, 0, 0.58, 1);
	}
	.RW_Popup_OverlayNAnim
	{
		opacity:1 !important;
		z-index:9999!important;
		transition:all 0.3s cubic-bezier(0, 0, 0.58, 1);
		-webkit-transition:all 0.3s cubic-bezier(0, 0, 0.58, 1);
		-ms-transition:all 0.3s cubic-bezier(0, 0, 0.58, 1);
		-moz-transition:all 0.3s cubic-bezier(0, 0, 0.58, 1);
		-o-transition:all 0.3s cubic-bezier(0, 0, 0.58, 1);
	}
	.RW_MInfo_Content
	{
		position:absolute;
		width:<?php echo $rw_cs_button['rw_cs_MIB_Pop_Cont_W']; ?>px !important;
		max-width:100%;
		opacity:0;
		box-sizing:border-box;
		-webkit-box-sizing:border-box;
		-ms-box-sizing:border-box;
		-moz-box-sizing:border-box;
		-o-box-sizing:border-box;
		border:<?php echo $rw_cs_button['rw_cs_MIB_Pop_Cont_BW']; ?>px solid <?php echo $rw_cs_button['rw_cs_MIB_Pop_Cont_BC']; ?>;
		box-shadow:0px 0px <?php echo $rw_cs_button['rw_cs_MIB_Pop_Cont_BSh']; ?>px <?php echo $rw_cs_button['rw_cs_MIB_Pop_Cont_ShC']; ?> !important;
		top:15%;
		left:50%;
		transform:translateX(-50%);
		-webkit-transform:translateX(-50%);
		-ms-transform:translateX(-50%);
		-moz-transform:translateX(-50%);
		-o-transform:translateX(-50%);
		z-index:0;
	}
	.RW_Notify_Content
	{
		position:absolute;
		width:<?php echo $rw_cs_button['rw_cs_MIB_Pop_Cont_W']; ?>px !important;
		max-width:100%;
		opacity:0;
		box-sizing:border-box;
		-webkit-box-sizing:border-box;
		-ms-box-sizing:border-box;
		-moz-box-sizing:border-box;
		-o-box-sizing:border-box;
		box-shadow:0px 0px <?php echo $rw_cs_button['rw_cs_FB_Pop_Cont_BSh']; ?>px <?php echo $rw_cs_button['rw_cs_FB_Pop_Cont_ShC']; ?> !important;
		top:15%;
		left:50%;
		transform:translateX(-50%);
		-webkit-transform:translateX(-50%);
		-ms-transform:translateX(-50%);
		-moz-transform:translateX(-50%);
		-o-transform:translateX(-50%);
		z-index:0;
	}
	.RW_Notify_ContentAnim
	{
		width:<?php echo $rw_cs_button['rw_cs_FB_Pop_Cont_W']; ?>px !important;
		height:auto !important;
		opacity:1 !important;
		transition:all 0.2s linear;
		-webkit-transition:all 0.2s linear;
		-ms-transition:all 0.2s linear;
		-moz-transition:all 0.2s linear;
		-o-transition:all 0.2s linear;
		transition-delay:0.3s;
		-webkit-transition-delay:0.3s;
		-ms-transition-delay:0.3s;
		-moz-transition-delay:0.3s;
		-o-transition-delay:0.3s;
		z-index:999999;
	}
	.RW_MInfo_ContentAnim
	{
		width:<?php echo $rw_cs_button['rw_cs_MIB_Pop_Cont_W']; ?>px !important;
		height:auto !important;
		background:<?php echo $rw_cs_button['rw_cs_MIB_Pop_Cont_BgC']; ?> !important;
		opacity:1 !important;
		transition:all 0.2s linear;
		-webkit-transition:all 0.2s linear;
		-ms-transition:all 0.2s linear;
		-moz-transition:all 0.2s linear;
		-o-transition:all 0.2s linear;
		transition-delay:0.3s;
		-webkit-transition-delay:0.3s;
		-ms-transition-delay:0.3s;
		-moz-transition-delay:0.3s;
		-o-transition-delay:0.3s;
		z-index:999999;
	}
	.RW_MInfo_ContentAnim2
	{
		height:<?php echo $rw_cs_button['rw_cs_MIB_Pop_Cont_H']; ?>px !important;
		transition:all 0.3s linear;
		-webkit-transition:all 0.3s linear;
		-ms-transition:all 0.3s linear;
		-moz-transition:all 0.3s linear;
		-o-transition:all 0.3s linear;
		transition-delay:0.2s;
		-webkit-transition-delay:0.2s;
		-ms-transition-delay:0.2s;
		-moz-transition-delay:0.2s;
		-o-transition-delay:0.2s;
	}
	.RW_Info
	{
		width:100%;
		height:100%;
		padding:10px;
		box-sizing:border-box;
		transform:scale(0,0.5);
		-webkit-transform:scale(0,0.5);
		-ms-transform:scale(0,0.5);
		-moz-transform:scale(0,0.5);
		-o-transform:scale(0,0.5);
	}
	.RW_Notify_Info
	{
		width:100%;
		height:100%;
		transform:scale(0,0.5);
		-webkit-transform:scale(0,0.5);
		-ms-transform:scale(0,0.5);
		-moz-transform:scale(0,0.5);
		-o-transform:scale(0,0.5);
	}
	.RW_InfoAnim
	{
		transform:scale(1,1);
		-webkit-transform:scale(1,1);
		-ms-transform:scale(1,1);
		-moz-transform:scale(1,1);
		-o-transform:scale(1,1);
		transition:all 0.3s linear;
		-webkit-transition:all 0.3s linear;
		-ms-transition:all 0.3s linear;
		-moz-transition:all 0.3s linear;
		-o-transition:all 0.3s linear;
		transition-delay:0.2s;
		-webkit-transition-delay:0.2s;
		-ms-transition-delay:0.2s;
		-moz-transition-delay:0.2s;
		-o-transition-delay:0.2s;
	}
	.RW_Notify_InfoAnim
	{
		transform:scale(1,1);
		-webkit-transform:scale(1,1);
		-ms-transform:scale(1,1);
		-moz-transform:scale(1,1);
		-o-transform:scale(1,1);
		transition:all 0.3s linear;
		-webkit-transition:all 0.3s linear;
		-ms-transition:all 0.3s linear;
		-moz-transition:all 0.3s linear;
		-o-transition:all 0.3s linear;
		transition-delay:0.2s;
		-webkit-transition-delay:0.2s;
		-ms-transition-delay:0.2s;
		-moz-transition-delay:0.2s;
		-o-transition-delay:0.2s;
	}
	.RW_CS_But_Div
	{
		position:relative;
		text-align:center;
		margin:15px 0px;
		z-index:999 !important;
	}
	.RW_Button_Delete_Icon
	{
		position:absolute;
		right:-10px;
		top:-15px;
		font-size:<?php echo $rw_cs_button['rw_cs_FB_Pop_Ic_FS']; ?>px !important;
		color:<?php echo $rw_cs_button['rw_cs_FB_Pop_Ic_C']; ?> !important;
		padding:10px;
		cursor:pointer !important;
	}
	.RW_Button_Delete_Icon_MI
	{
		position:absolute;
		right:-10px;
		top:-35px;
		font-size:<?php echo $rw_cs_button['rw_cs_MIB_Pop_Ic_FS']; ?>px !important;
		color:<?php echo $rw_cs_button['rw_cs_MIB_Pop_Ic_C']; ?> !important;
		padding:10px;
		cursor:pointer !important;
	}
	<?php if($rw_cs_info['rw_cs_info_text_Show']=="Hide"){ ?>
		.moreInfo { display:none !important; }
	<?php } ?>
	<?php if($Rich_Web_CS_Forms_Theme3[0]->Rich_Web_CS_Forms_T_03==""){ ?>
		.notify { display:none !important; }
	<?php } ?>
	@media screen and (max-width: 650px)
	{
		.RW_Notify_Content { top:5%; }
		.RW_MInfo_Content { top:8%; }
	}
	<?php echo $rw_cs_button['rw_cs_but_Custom_CSS']; ?>
</style>
<div class="RW_Popup_Overlay">
	<div class="RW_MInfo_Content">
		<i class="RW_Button_Delete_Icon_MI <?php echo $rw_cs_button['rw_cs_MIB_Pop_Ic_Type']; ?>"></i>
		<div class="RW_Info">
			<?php echo html_entity_decode($rw_cs_info['rw_cs_info_text']); ?>
		</div>
	</div>
</div>
<div class="RW_Popup_OverlayN">
	<div class="RW_Notify_Content">
		<i class="RW_Button_Delete_Icon <?php echo $rw_cs_button['rw_cs_FB_Pop_Ic_Type']; ?>"></i>
		<div class="RW_Notify_Info">
			<?php require_once("RW_Forms_Theme.php"); ?>
		</div>
	</div>
</div>
<div class="RW_CS_But_Div">
	<?php if($rw_cs_button['rw_cs_MIB_Anim']=="Yes"){ ?>
		<input class="rw_inp moreInfo" value="<?php echo $rw_cs_button['rw_cs_MIB_text']; ?>" type="button" />
	<?php }else{ ?>
		<input class="rw_inp moreInfo moreInfoAnim" value="<?php echo $rw_cs_button['rw_cs_MIB_text']; ?>" type="button" />
	<?php } ?>
	<?php if($rw_cs_button['rw_cs_FB_Anim']=="Yes"){ ?>
		<input class="rw_inp notify" value="<?php echo $rw_cs_button['rw_cs_FB_text']; ?>" type="button" />
	<?php }else{ ?>
		<input class="rw_inp notify notifyAnim" value="<?php echo $rw_cs_button['rw_cs_FB_text']; ?>" type="button" />
	<?php } ?>
</div>
<script>
	jQuery(document).ready(function(){
		var top=parseInt(jQuery(".RW_Notify_Content").css("top"));
		var top2=parseInt(jQuery(".RW_MInfo_Content").css("top"));
		jQuery(".RW_Popup_OverlayN").css("min-height",jQuery("body").height());
		jQuery(".RW_Popup_Overlay").css("min-height",jQuery("body").height());
		jQuery(window).resize(function(){
			jQuery(".RW_Popup_OverlayN").css("min-height",jQuery("body").height());
			jQuery(".RW_Popup_Overlay").css("min-height",jQuery("body").height());
		})
		jQuery('.moreInfo').click(function(){
			jQuery(".RW_Popup_Overlay").addClass("RW_Popup_OverlayAnim");
			jQuery(".RW_MInfo_Content").addClass("RW_MInfo_ContentAnim");
			setTimeout(function(){
				jQuery(".RW_Info").addClass("RW_InfoAnim");
			},500)
			
			jQuery(".RW_MInfo_Content").css("top",top2+jQuery(document).scrollTop());
			
		})
		jQuery('.notify').click(function(){
			jQuery(".RW_Popup_OverlayN").addClass("RW_Popup_OverlayNAnim");
			jQuery(".RW_Notify_Content").addClass("RW_Notify_ContentAnim");
			setTimeout(function(){
				jQuery(".RW_Notify_Info").addClass("RW_Notify_InfoAnim");
			},500)
			
			jQuery(".RW_Notify_Content").css("top",top+jQuery(document).scrollTop());
			
		})
		jQuery(window).scroll(function(){
			jQuery(".RW_Notify_Content").css("top",top+jQuery(document).scrollTop());
			jQuery(".RW_MInfo_Content").css("top",top2+jQuery(document).scrollTop());
		})
		jQuery('.RW_Popup_Overlay').click(function(){
			jQuery(".RW_Popup_Overlay").removeClass("RW_Popup_OverlayAnim");
			jQuery(".RW_MInfo_Content").removeClass("RW_MInfo_ContentAnim");
			jQuery(".RW_MInfo_Content").removeClass("RW_MInfo_ContentAnim2");
			jQuery(".RW_Info").removeClass("RW_InfoAnim");
			jQuery(".RW_Popup_Overlay").removeClass("RW_Popup_OverlayAnim");
			jQuery(".RW_Notify_Content").removeClass("RW_Notify_ContentAnim");
			jQuery(".RW_Notify_Info").removeClass("RW_Notify_InfoAnim");
		})
		jQuery('.RW_Popup_OverlayN').click(function(event){
			 
			jQuery(".RW_Popup_OverlayN").removeClass("RW_Popup_OverlayNAnim");
			jQuery(".RW_MInfo_Content").removeClass("RW_MInfo_ContentAnim");
			jQuery(".RW_MInfo_Content").removeClass("RW_MInfo_ContentAnim2");
			jQuery(".RW_Info").removeClass("RW_InfoAnim");
			jQuery(".RW_Popup_OverlayN").removeClass("RW_Popup_OverlayNAnim");
			jQuery(".RW_Notify_Content").removeClass("RW_Notify_ContentAnim");
			jQuery(".RW_Notify_Info").removeClass("RW_Notify_InfoAnim");
			jQuery(".RW_Notify_Content").css("top",top);
		})
		jQuery('.Rich_Web_CS_Forms').click(function(event){
			event.stopPropagation();
		})
		jQuery('.RW_Info').click(function(event){
			event.stopPropagation();
		})
	})
</script>