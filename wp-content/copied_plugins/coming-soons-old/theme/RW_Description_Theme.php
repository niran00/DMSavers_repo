<style>
	.intro
	{
		position:relative !important;
		font-size:<?php echo $rw_cs_description['rw_cs_desc_Text_FS']; ?>px;
		font-family:<?php echo $rw_cs_description['rw_cs_desc_Text_FF']; ?>px;
		color:<?php echo $rw_cs_description['rw_cs_desc_Text_C']; ?>;
		font-weight:normal;
		position:relative;
		line-height:1;
		width:800px;
		max-width:98%;
		text-align:<?php echo $rw_cs_description['rw_cs_desc_Text_TA']; ?>;
		margin-top:<?php echo $rw_cs_description['rw_cs_desc_MT']; ?>px;
		margin-bottom:<?php echo $rw_cs_description['rw_cs_desc_MT']; ?>px;
		left:50%;
		opacity:0;
		transform:translateX(-50%) translateY(50%);
		-webkit-transform:translateX(-50%) translateY(50%);
		-ms-transform:translateX(-50%) translateY(50%);
		-moz-transform:translateX(-50%) translateY(50%);
		-o-transform:translateX(-50%) translateY(50%);
		z-index:999;
	}
	.introAnim
	{
		opacity:1 !important;
		transform:translateX(-50%) translateY(0%) !important;
		-webkit-transform:translateX(-50%) translateY(0%) !important;
		-ms-transform:translateX(-50%) translateY(0%) !important;
		-moz-transform:translateX(-50%) translateY(0%) !important;
		-o-transform:translateX(-50%) translateY(0%) !important;
		transition:all 0.4s linear !important;
		-webkit-transition:all 0.4s linear !important;
		-ms-transition:all 0.4s linear !important;
		-moz-transition:all 0.4s linear !important;
		-o-transition:all 0.4s linear !important;
	}
	a { outline:none !important; }
</style>
<?php if($rw_cs_description['rw_cs_desc_show']=="show"){ ?>
	<?php if($rw_cs_description['rw_cs_desc_Anim']=="show"){ ?>
		<div class="intro">
			<?php if($rw_cs_description['rw_cs_desc_Type']=="Description"){ ?>
				<?php echo html_entity_decode($rw_cs_description['rw_cs_desc_HTML_Text']); ?>
			<?php }else{ ?>
				<?php echo html_entity_decode($rw_cs_description['rw_cs_desc_Text_Anim']); ?>
			<?php } ?>
		</div>
	<?php }else{ ?>
		<div class="intro introAnim">
			<?php if($rw_cs_description['rw_cs_desc_Type']=="Description"){ ?>
				<?php echo html_entity_decode($rw_cs_description['rw_cs_desc_HTML_Text']); ?>
			<?php }else{ ?>
				<?php echo html_entity_decode($rw_cs_description['rw_cs_desc_Text_Anim']); ?>
			<?php } ?>
		</div>
	<?php } ?>
<?php } ?>
<input type="text" style="display:none;" class="RW_desc_show" value="<?php echo $rw_cs_description['rw_cs_desc_show']; ?>">
<input type="text" style="display:none;" class="RW_desc_show_type" value="<?php echo $rw_cs_description['rw_cs_desc_Type']; ?>">