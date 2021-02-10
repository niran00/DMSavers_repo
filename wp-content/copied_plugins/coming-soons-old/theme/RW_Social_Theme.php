<style>
	#socialIcons { position:relative; margin-top:10px; margin-bottom:10px; transform:translateY(100%); -webkit-transform:translateY(100%); -ms-transform:translateY(100%); -moz-transform:translateY(100%); -o-transform:translateY(100%); opacity:0; z-index:999 !important; }
	.socialIconsAnim { transform:translateY(0%) !important; -webkit-transform:translateY(0%) !important; -ms-transform:translateY(0%) !important; -moz-transform:translateY(0%) !important; -o-transform:translateY(0%) !important; opacity:1 !important; transition:all 0.4s linear !important; -webkit-transition:all 0.4s linear !important; -ms-transition:all 0.4s linear !important; -moz-transition:all 0.4s linear !important; -o-transition:all 0.4s linear !important; }
	.rw_sb
	{
		padding:0px !important;
		width:<?php echo $rw_cs_social['rw_cs_social_S']; ?>px !important;
		height:<?php echo $rw_cs_social['rw_cs_social_S']; ?>px !important;
		line-height:<?php echo $rw_cs_social['rw_cs_social_S']; ?>px !important;
		font-size:<?php echo $rw_cs_social['rw_cs_social_FS']; ?>px !important;
		border-width:<?php echo $rw_cs_social['rw_cs_social_BW']; ?>px !important;
		border-radius:<?php echo $rw_cs_social['rw_cs_social_BR']; ?>px !important;
		box-sizing:initial !important;
	}
	<?php for($j=0;$j<count($rw_soc_type_array);$j++){ ?>
		<?php if($rw_soc_type_array[0] != ''){ ?>
		.rw_sb_<?php echo $rw_soc_type_array[$j]; ?>
			{
				background-color:<?php echo $rw_soc_bgc_array[$j]; ?> !important;
				text-shadow:1px 1px 1px #000000 !important;
				box-shadow:0px 0px <?php echo $rw_cs_social['rw_cs_social_BSh']; ?>px #000000 !important;
				color:<?php echo $rw_soc_c_array[$j]; ?> !important;
				border-style:solid !important;
				border-color:<?php echo $rw_soc_bc_array[$j]; ?> !important;
				margin:0px <?php echo $rw_cs_social['rw_cs_social_M']; ?>px !important;
				transition:all 0.3s linear !important;
			}
			.rw_sb_<?php echo $rw_soc_type_array[$j]; ?>:hover
			{
				background-color:<?php echo $rw_soc_hbgc_array[$j]; ?> !important;
				color:<?php echo $rw_soc_hc_array[$j]; ?> !important;
				border-style:solid !important;
				border-color:<?php echo $rw_soc_hbc_array[$j]; ?> !important;
				box-shadow:0px 0px <?php echo $rw_cs_social['rw_cs_social_HBSh']; ?>px #000000 !important;
			}
		<?php } ?>
	<?php } ?>
	<?php echo $rw_cs_social['rw_cs_social_Custom_CSS']; ?>
</style>
<?php if($rw_cs_social['rw_cs_social_Show']=='Show'){ ?>
	<?php if($rw_cs_social['rw_cs_social_anim']=='Yes'){ ?>
	<div id="socialIcons">
		<ul> 
		<?php for($j=0;$j<count($rw_soc_type_array);$j++){ ?>
			<?php if($rw_soc_type_array[0] != ''){ ?>
				<a href="<?php echo $rw_soc_url_array[$j]; ?>" target="<?php echo $rw_cs_social['rw_cs_social_target']; ?>" class="rw_sb_<?php echo $rw_soc_type_array[$j]; ?> rich_web rich_web-<?php echo $rw_soc_type_array[$j]; ?> rw_sb"></a>
			<?php } ?>
		<?php } ?>
		</ul>
	</div>
	<?php }else{ ?>
	<div id="socialIcons" class="socialIconsAnim">
		<ul> 
		<?php for($j=0;$j<count($rw_soc_type_array);$j++){ ?>
			<?php if($rw_soc_type_array[0] != ''){ ?>
				<a href="<?php echo $rw_soc_url_array[$j]; ?>" target="<?php echo $rw_cs_social['rw_cs_social_target']; ?>" class="rw_sb_<?php echo $rw_soc_type_array[$j]; ?> rich_web rich_web-<?php echo $rw_soc_type_array[$j]; ?> rw_sb"></a>
			<?php } ?>
		<?php } ?>
		</ul>
	</div>
	<?php } ?>
<?php } ?>
<input type="text" style="display:none;" id="rw_cs_social_Show" value="<?php echo $rw_cs_social['rw_cs_social_Show']; ?>">