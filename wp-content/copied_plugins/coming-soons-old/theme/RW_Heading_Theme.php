<style>
	#RW_CS_Header
	{
		font-size:<?php echo $rw_cs_heading['rw_cs_heading_FS']; ?>px;
		font-family:<?php echo $rw_cs_heading['rw_cs_heading_FF']; ?>;
		color:<?php echo $rw_cs_heading['rw_cs_heading_C']; ?>;
		text-align:<?php echo $rw_cs_heading['rw_cs_heading_TA']; ?>;
		letter-spacing: -2px;
		font-weight: 700;
		text-shadow: 2px 2px rgba(12, 11, 11, 0.56);
		opacity:0;
		transform:translateY(-100%);
		-webkit-transform:translateY(-100%);
		-ms-transform:translateY(-100%);
		-moz-transform:translateY(-100%);
		-o-transform:translateY(-100%);
	}
	.RW_CS_HeaderAnim
	{
		opacity:1 !important;
		transform:translateY(0%) !important;
		-webkit-transform:translateY(0%) !important;
		-ms-transform:translateY(0%) !important;
		-moz-transform:translateY(0%) !important;
		-o-transform:translateY(0%) !important;
		transition:all 0.4s linear !important;
		-webkit-transition:all 0.4s linear !important;
		-ms-transition:all 0.4s linear !important;
		-moz-transition:all 0.4s linear !important;
		-o-transition:all 0.4s linear !important;
	}
	.wrapper
	{
		position:relative;
		width:800px;
		left:50%;
		max-width:100%;
		margin-top:<?php echo $rw_cs_heading['rw_cs_heading_MT']; ?>px;
		margin-bottom:<?php echo $rw_cs_heading['rw_cs_heading_FS']; ?>px;
		transform:translateX(-50%);
		-webkit-transform:translateX(-50%);
		-ms-transform:translateX(-50%);
		-moz-transform:translateX(-50%);
		-o-transform:translateX(-50%);
	}
	<?php echo $rw_cs_heading['rw_cs_heading_Custom_CSS']; ?>
</style>
<?php if($rw_cs_heading['rw_cs_heading_show']=="show"){ ?>
	<?php if($rw_cs_heading['rw_cs_heading_Anim']=="Yes"){ ?>
		<div class="wrapper">
			<<?php echo $rw_cs_heading['rw_cs_heading_HTML']; ?> id="RW_CS_Header"><?php echo $rw_cs_heading['rw_cs_heading_T']; ?></<?php echo $rw_cs_heading['rw_cs_heading_HTML']; ?>>
		</div>
	<?php }else{ ?>
		<div class="wrapper">
			<<?php echo $rw_cs_heading['rw_cs_heading_HTML']; ?> id="RW_CS_Header" class="RW_CS_HeaderAnim"><?php echo $rw_cs_heading['rw_cs_heading_T']; ?></<?php echo $rw_cs_heading['rw_cs_heading_HTML']; ?>>
		</div>
	<?php } ?>
<?php } ?>
<input type="text" style="display:none;" class="rw_cs_heading_show" value="<?php echo $rw_cs_heading['rw_cs_heading_show']; ?>">